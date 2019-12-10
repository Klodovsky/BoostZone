<?php $user = get_userdata(); 
//$this->output->enable_profiler(true);

if(!empty($user['picture'])){
  $img = $user['picture'];
}else{
    //$img = base_url().'assets/images/default-avatar.png';
  $img = '';
}
?>
<div class="container p-b-40">
  <div class="row">
    <div class="col-md-4 col-sm-6 dct-dashbd-lft">
      <div class="dct-dashbd-01 text-center">
        <div class="dct-dash-img slim edit-pro-slim" 
        data-will-remove="imageRemoved"
        data-status-upload-success="Profile image updated"
        data-label-loading="File uploading.."
        data-instant-edit="true"
        data-service="<?php echo base_url(); ?>upload/upload_avatar"
        data-push="true"                      
        data-label="Click here to upload image"
        data-ratio="1:1"
        data-size="240,240"
        data-min-size="100,100"
        data-max-file-size="2"  
        data-did-receive-server-error="handleServerError"
        data-did-throw-error="handleServerError" 
        data-toggle="tooltip" title="Click the image to upload new profile picture"
        
        >
        <img src="<?php echo $img; ?>" class="img-responsive img-circle " alt="" style="width:100px">
        <input type="file" name="slim[]" id="my-cropper" />
        
        <script type="text/javascript">                
          
            function validatePassword(password) {
                
                // Do not show anything when the length of password is zero.
                if (password.length === 0) {
                    document.getElementById("msg").innerHTML = "";
                    return;
                }
                // Create an array and push all possible values that you want in password
                var matchedCase = new Array();
                matchedCase.push("[$@$!%*#?&]"); // Special Charector
                matchedCase.push("[A-Z]");      // Uppercase Alpabates
                matchedCase.push("[0-9]");      // Numbers
                matchedCase.push("[a-z]");     // Lowercase Alphabates

                // Check the conditions
                var ctr = 0;
                for (var i = 0; i < matchedCase.length; i++) {
                    if (new RegExp(matchedCase[i]).test(password)) {
                        ctr++;
                    }
                }
                // Display it
                var color = "";
                var strength = "";
                switch (ctr) {
                    case 0:
                    case 1:
                    case 2:
                        strength = "Very Weak";
                        color = "red";
                        break;
                    case 3:
                        strength = "Medium";
                        color = "orange";
                        break;
                    case 4:
                        strength = "Strong";
                        color = "green";
                        break;
                }
                document.getElementById("msg").innerHTML = strength;
                document.getElementById("msg").style.color = color;
            }
        
          function handleServerError(error, defaultError) {

                      // the error parameter is equal to string set
                      // to message property of server response object
                      // in this case 'The server is having a bad day'
                      console.log(error);

                      // the defaultError parameter contains the
                      // message set to data-status-unknown-response
                      console.log(defaultError);

                      return error;
                    }

                    function imageRemoved(){
                      swal({
                        title: 'Are you sure?',
                        text: "You won't be able to revert this!",
                        type: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!'
                      }).then((result) => {
                        if (result.value) {

                          $.get('<?php echo base_url(); ?>upload/delete_profile_image',function(res){
                            var obj = jQuery.parseJSON(res);
                            if(obj.status == true){
                             swal(
                              'Deleted!',
                              'Profile image has been deleted.',
                              'success'
                              );
                             $('.upprofile-img,img-responsive,.in,.out').attr('src',obj.image_url);                   
                           }else{
                            swal({
                              type: 'error',
                              title: 'Oops...',
                              text: 'You dont have profile image yet!'                        
                            });
                          }

                        });
                        }
                      });
                    }
                  </script> 
                </div>
                <div class="dct-dash-details">
                  <h3><?php echo $this->session->userdata('first_name').' '.$this->session->userdata('last_name'); ?></h3>
                  <p><?php 	echo $this->session->userdata('email'); ?><br>From Canada</p>
                </div>
                <div class="row m-t-30 collapse"  id="demo">
                  <form action="<?php echo base_url(); ?>dashboard/update_profile" method="post" id="profile_form">                                                               
                    <div class="col-md-12 m-t-10">
                      <input type="text" placeholder="First Name" class="input-pay" id="first_name" value="<?php echo $user['first_name'] ?>" name="first_name" >

                      <input type="text" placeholder="Last Name" class="input-pay" id="last_name" value="<?php echo $user['last_name'] ?>" name="last_name" >
                    </div>                               
                    <div class="col-md-12 m-t-10">
                        <input type="password" placeholder="Change Password" class="input-pay" id="password" name="password" onkeyup="validatePassword(this.value);">
                                           <span id="msg"></span>
                    </div>
                    <div class="col-md-12 m-t-10">
                     <input type="password" placeholder="Confirm Password" class="input-pay" id="confirm_password" name="confirm_password">
                   </div>
                   <div class="col-md-12 m-t-10">
                    <input type="text" placeholder="Change Phone number" class="input-pay" name="mobile_no" value="<?php echo $user['mobile_no']; ?>">
                  </div>                                        
                  <div class="col-md-12 dct-dash-details p-b-10">
                    <button type="submit" value="Submit">Save</button>
                  </div>
                </form>
              </div>
              <div class="dct-dash-details">
                <a href="#" class="btn btn-brand btn-sm" data-toggle="collapse" data-target="#demo">Edit Profile</a>
              </div>
            </div>
          </div>
          
          <div class="col-md-8 col-sm-8 dct-dashbd-lft">
            <div class="dct-dash-details p-t-30">
              <h3>Your Last 5 donations</h3>
              <div class="table-responsive p-t10"> 
                <table class="table">
                  <thead>
                    <tr>
                      <th>Campaign</th>
                      <th>Amount</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php if(!empty($donated)){

                     foreach ($donated as  $d) {
                      echo '<tr>  
                      <td>'.$d['name'].'</td>   
                      <td>RS .'.number_format($d['amount'],2).'</td>
                      </tr>';     
                    }

                  } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- <div class="col-md-4 col-sm-6 dct-dashbd-lft">
          <div class="dct-dash-details p-t-30">
            <h3>Your's Last 5 Follows</h3>
            <div class="table-responsive p-t10"> 
              <table class="table">
                <thead>
                  <tr>
                    <th>Campaign</th>
                    
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  if(!empty($likes)){
                    foreach($likes as $l){
                      echo '<tr>
                      <td>'.$l['name'].'</td>                        
                      </tr>';
                    }
                  }

                  ?>
                  
                  
                </tbody>
              </table>
            </div>
          </div>
        </div> -->
      </div>
    </div>
    
    <div id="creator-popup-view" class="modal custom-modal fade" role="dialog" style="z-index: 9999;">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <form>
              <div class="row">
                <div class="col-md-12 col-sm-6">
                  <div class="form-group">
                    <form action="#" method="get" id="nameform">
                      <div class="col-md-12 m-t-10">
                        Select Profile Pictures<br>
                        <input type="file" name="profile-picture">
                      </div>
                      <div class="col-md-12 m-t-10">
                        <input type="text" value="Name" class="input-pay">
                      </div>
                      <div class="col-md-12 m-t-10">
                        <input type="text" value="Email" class="input-pay">
                      </div>
                      <div class="col-md-12 m-t-10">
                        <input type="text" value="Phone Number" class="input-pay">
                      </div>
                      <div class="col-md-12 m-t-10">
                        <input type="text" value="Address Line 1" class="input-pay">
                      </div>
                      <div class="col-md-12 m-t-10">
                        <input type="text" value="Address Line 2" class="input-pay">
                      </div>
                      <div class="col-md-12 m-t-10">
                        <input type="text" value="City" class="input-pay">
                      </div>
                      <div class="col-md-12 m-t-10">
                        <input type="text" value="State" class="input-pay">
                      </div>

                      <div class="col-md-12 m-t-10">
                        <input type="text" value="Country" class="input-pay">
                      </div>

                      <div class="col-md-12 m-t-10">
                        <input type="text" value="Change Password" class="input-pay">
                      </div>
                      <div class="col-md-12 dct-dash-details p-b-10">
                        <button type="submit" form="nameform" value="Submit">Save</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>