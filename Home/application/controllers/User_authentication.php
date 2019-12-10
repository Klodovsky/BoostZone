
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Authentication extends CI_Controller {
    
    function __construct(){
        parent::__construct();
        
        // Load google oauth library
        $this->load->library('googleplus');
        
    }
    
    public function index(){
        // Redirect to profile page if the user already logged in
        if($this->session->userdata('loggedIn') == true){
            redirect('user_authentication/profile/');
        }
        
        if(isset($_GET['code'])){
            
            // Authenticate user with google
            if($this->google->getAuthenticate()){
            
                // Get user info from google
                $gpInfo = $this->google->getUserInfo();


                echo '<pre>';
                print_r($gpInfo);
                exit;
                
                // Preparing data for database insertion
                $userData['oauth_provider'] = 'google';
                $userData['oauth_uid']      = $gpInfo['id'];
                $userData['first_name']     = $gpInfo['given_name'];
                $userData['last_name']      = $gpInfo['family_name'];
                $userData['email']          = $gpInfo['email'];
                $userData['gender']         = !empty($gpInfo['gender'])?$gpInfo['gender']:'';
                $userData['locale']         = !empty($gpInfo['locale'])?$gpInfo['locale']:'';
                $userData['link']           = !empty($gpInfo['link'])?$gpInfo['link']:'';
                $userData['picture']        = !empty($gpInfo['picture'])?$gpInfo['picture']:'';
                
                
              
            }
        } 
        
        // Google authentication url
        $data['loginURL'] = $this->googleplus->loginURL();
        
        // Load google login view
        $this->load->view('',$data);
    }
       
    
    public function logout(){
        // Reset OAuth access token
        $this->google->revokeToken();
        
        // Remove token and user data from the session
        $this->session->unset_userdata('loggedIn');
        $this->session->unset_userdata('userData');
        
        // Destroy entire session data
        $this->session->sess_destroy();
        
        // Redirect to login page
        redirect('/user_authentication/');
    }
    
}