<?php 

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Googleplus {
	
	public function __construct($theme='') {	


      
        
        $this->ci =& get_instance();	
        $this->ci->load->config('google');      


        require APPPATH .'third_party/google-login-api/apiClient.php';
        require APPPATH .'third_party/google-login-api/contrib/apiOauth2Service.php';

        $this->client = new apiClient();
        $this->client->setApplicationName('Boostzone');

        $this->client->setClientId('455463811217-0m4ruai9qclualqde1tvj6c2hfpglrl4.apps.googleusercontent.com');
        $this->client->setClientSecret('JbYeEFxI081QCeT1h_Qqwcnt'); 

        $this->ci->session->set_userdata('google_user_type','user');
        $this->client->setRedirectUri(base_url().'register');               
        $this->client->setDeveloperKey('');
        $this->client->setScopes($this->ci->config->item('scopes', 'https://www.googleapis.com'));
        $this->client->setAccessType('online');
        $this->client->setApprovalPrompt('auto');
        $this->oauth2 = new apiOauth2Service($this->client);

    }
    public function loginURL() {
        return $this->client->createAuthUrl();
    }
    
    public function signupURL() {
        return $this->client->createAuthUrl();
    }
    
    public function getAuthenticate() {
        return $this->client->authenticate();
    }
    
    public function getAccessToken() {
        return $this->client->getAccessToken();
    }
    
    public function setAccessToken() {
        return $this->client->setAccessToken();
    }
    
    public function revokeToken() {
        return $this->client->revokeToken();
    }
    
    public function getUserInfo() {
        return $this->oauth2->userinfo->get();
    }
    
}
?>