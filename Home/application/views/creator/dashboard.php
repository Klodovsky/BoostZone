

<?php 



$user = get_userdata(); 
//$this->output->enable_profiler(true);

if(!empty($user['picture'])){
	$img = $user['picture'];
}else{
	//$img = base_url().'assets/images/default-avatar.png';
  $img = '';
}
?>
<?php 
$msg = $this->session->flashdata('message');
if(!empty($msg)){ ?>
	<div class="alert alert-success"><?php echo $msg; ?>
	<a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
</div>

<?php } ?>
<div class="row" style="background-color:#ffee54; color:#000; padding: 10px;">
  <div class="col-12" style=" text-align: center;">
    <p>Please fill the campaign name and other details before publishing your videos.</p>
  </div>
</div>
<div class="container p-b-80">
	<div class="row">
		<div class="col-md-4 col-sm-6 dct-dashbd-lft">
			<div class="dct-dashbd-01 text-center">
				<div class="dct-dash-img slim edit-pro-slim ima-wid" 
        data-download="true"
        data-will-remove="imageRemoved"
        data-status-upload-success="Profile image updated"
        data-label-loading="File uploading.."
        data-instant-edit="true"
        data-service="<?php echo base_url(); ?>upload/upload_avatar"
        data-push="true"                      
        data-label="."
        data-image="assets/images/cloud-backup-up-arrow.png"
        data-ratio="1:1"
        data-size="240,240"
        data-min-size="100,100"
        data-max-file-size="2"  
        data-did-receive-server-error="handleServerError"
        data-did-throw-error="handleServerError" 
        data-toggle="tooltip" title="Click the image to upload new profile picture"

        > 
       <img src="<?php echo $img; ?>" class="img-responsive img-circle " alt="" style="width:100%">
       <img src="assets/images/upload3.png" style="width: 64px !important;
    height: 64px !important;    z-index: 9999;    display: block !important;    margin: -120px 0 0 33% !important;    text-align: center; opacity: 0.8 !important;">
        <input type="file" name="slim[]" id="my-cropper" class="slim-btn slim-btn-upload" />
        
      </div>

      <script type="text/javascript">                


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

                  <div class="dct-dash-details">
                   <h3><span class="first"><?php echo $user['first_name'];?></span> <span class="last"><?php echo $user['last_name']; ?></span></h3>
                   <p  class="channel"><?php $user['name'] ?></p>
                   <p class="year"> <?php echo 'From '.$user['year']; ?></p>
                   <p class="description"><?php echo $user['description'] ?></p>

                   <div class="row m-t-30 collapse"  id="demo">
                    <form action="<?php echo base_url(); ?>dashboard/update_profile" method="post" id="profile_form">                                       						
                      <div class="col-md-12 m-t-10">
                       <input type="text" placeholder="First Name" class="input-pay" id="first_name" value="<?php echo $user['first_name'] ?>" name="first_name" >

                       <input type="text" placeholder="Last Name" class="input-pay" id="last_name" value="<?php echo $user['last_name'] ?>" name="last_name" >
                     </div>
                     <div class="col-md-12 m-t-10">
                       <input type="text" placeholder="Channel Name" class="input-pay" id="channel_name" value="<?php echo $user['name'] ?>" name="channel_name" required>
                     </div>
                     <div class="col-md-12 m-t-10">
                       <select name="year" id="year" class="input-pay" >
                        <option value="">Campaign Started Year</option>    
                        <?php 
                        for ($i=1900; $i <=date('Y') ; $i++) { 
                         if($user['year']!='0000-00-00' || !empty($user['year'])){
                          $year = $user['year'];
                        }else{
                          $year = date('Y');
                        }
                        if($i == $year){
                          $selected = 'selected="selected"';
                        }else{
                          $selected = '';
                        }
                        echo '<option value="'.$i.'" '.$selected.'>'.$i.'</option>';
                      } ?>
                    </select>

                  </div>
                  <div class="col-md-12 m-t-10">
                   <textarea cols="30" rows="4" class="form-control" id="description"placeholder="Enter Description" name="description"><?php echo !empty($user['description'])?$user['description']:'Hi, I am using BoostZone Platform. Checkout my new videos here!'; ?></textarea>
                 </div>
                                        <!-- <div class="col-md-12 m-t-10">
                                            <input type="text" value="Change Email Address" class="input-pay" >
                                          </div> -->
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
                                         <div class="col-md-12 m-t-10">
                                           <input type="text" placeholder="Bank Name" class="input-pay" name="bank_name" value="<?php echo $user['bank_name']; ?>">
                                         </div>
                                         <div class="col-md-12 m-t-10">
                                           <input type="text" placeholder="Account Number" class="input-pay" name="account_no" value="<?php echo $user['account_no']; ?>">
                                         </div>
                                         <div class="col-md-12 m-t-10">
                                           <input type="text" placeholder="IFSC Code" class="input-pay" name="ifsc_code" value="<?php echo $user['ifsc_code']; ?>">
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
                               </div>

                               <div class="col-md-8 col-sm-6 cretor-home p-t-20">

                                <form action="<?php echo base_url(); ?>dashboard/add_video" method="post">
                                  <div class="row">
                                    <div class="col-lg-6 col-md-6 ">
                                      <input type="text" placeholder="Link your youtube video here" class="input-pay m-t-10" name="videos[]" value="" id="video_id" required> 
                                    </div>    
                                    <div class="col-lg-3 col-md-6 ">
                                      <select name="category_id[]" class="input-pay m-t-10" id="category_id" required>
                                       <option value="">--Category--</option>
                                       <?php 
                                       foreach($category as $c){

                                        if(!empty($expo[2]) && $expo[2]['category_id'] == $c['category_id']){
                                         $selected="selected='seleected'";
                                       }else{
                                         $selected = "";
                                       }

                                       echo '<option value="'.$c['category_id'].'" '.$selected.' >'.ucfirst($c['name']).'</option>';  
                                     }

                                     ?>
                                   </select>
                                 </div> 

                                 <div class="col-lg-3 col-md-6 dct-dash-details">
                                  <button type="submit" value="Submit">Add Video</button>
                                </div>
                              </div>
                              <input type="hidden" value="youtube" class="input-pay m-t-10" name="type">
                              <input type="hidden" value="" class="input-pay m-t-10" name="hidden_id" id="hidden_id">
                            </form>            

                            <div class="row p-t-10">
                              <?php if(!empty($videos)){ 
                                foreach($videos as $v):

                                 if($v['type'] == 'youtube'){

                                  $string     = $v['video_url'];
                                  $search     = '/youtube\.com\/watch\?v=([a-zA-Z0-9]+)/smi';
                                  $replace    = "youtube.com/embed/$1";    
                                  $url = preg_replace($search,$replace,$string);


                                  ?>
                                  <div class="col-md-4 col-sm-4">
                                    <a 
                                    onclick="get_data(this)"
                                    data-video_url="<?php echo $v['video_url']; ?>"
                                    data-category_id="<?php echo $v['category_id']; ?>"
                                    data-hidden_id="<?php echo $v['video_id']; ?>"

                                    href="javascript:void(0)" data-toggle="tooltip" title="" class="btn btn-effect-ripple btn-xs btn-success" style="overflow: hidden; position: relative; margin-bottom: -30px;" data-original-title="Edit User"><i class="fa fa-edit"></i></a>
                                    <a href="javascript:void(0)" onclick="warn(<?php echo $v['video_id'];?>)" class="btn btn-effect-ripple btn-xs btn-danger" style="overflow: hidden; position: relative; margin-bottom: -30px;" data-original-title="Delete User"><i class="fa fa-times"></i></a>
                                    <iframe width="100%" src="<?php echo $url; ?>"></iframe>
                                  </div>    
                                  <?php
                                }
                              endforeach; 
                            }
                            ?>


                          </div>

                          <script type="text/javascript">
                            function warn(id){
                              if(confirm('Are you sure to delete this video?')){
                                window.location.href="<?php echo base_url();?>dashboard/delete_video/"+id;
                              }else{
                                return false;
                              }
                            }
                            function get_data(element){
                              var video_url = element.getAttribute('data-video_url');
                              var category_id = element.getAttribute('data-category_id');
                              var video_id = element.getAttribute('data-hidden_id');
                              $('#video_id').val(video_url);
                              $('#hidden_id').val(video_id);
                               $("#category_id option[value="+category_id+"]").attr('selected', 'selected');
                            }
                          </script>
                          <div class="tab-regular">                    	
                            <div class="tab-content" id="myTabContent7" style="padding: 0px !important;">
                              <h3 class="p-t-30 p-b-10">Recent Donator's List</h3>
                              <div class="card hero-slide-nineteen-table aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                               <div class="table-responsive">
                                <table class="table">
                                 <thead>
                                  <tr>
                                   <th>ID</th>
                                   <th>Name</th>
                                   <th>Campaign</th>
                                   <th>Credit</th>
                                 </tr>
                               </thead>
                               <tbody>
                                <?php if(!empty($donated)){

                                 foreach ($donated as  $d) {

                                  echo '<tr>
                                  <td><a href="javascript:void(0)">AI0'.$d['id'].'</a></td>
                                  <td>'.$d['first_name'].' '.$d['last_name'].'</td>
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
                  </div>
                </div>
              </div>
            </div>


                        </div>
                                         <script>
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
        </script>