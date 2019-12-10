

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
                                             <input type="text" placeholder="Channel Name" class="input-pay" id="channel_name" value="<?php echo $user['name'] ?>" name="channel_name" >
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
                                    <textarea cols="30" rows="4" class="form-control" id="description"placeholder="Enter Description" name="description"><?php echo $user['description']; ?></textarea>
                                </div>
                                        <!-- <div class="col-md-12 m-t-10">
                                            <input type="text" value="Change Email Address" class="input-pay" >
                                        </div> -->
                                        <div class="col-md-12 m-t-10">
                                            <input type="text" placeholder="Change Password" class="input-pay" id="password" name="password">
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


                      <div class="row">
                          <div class="col-lg-6 col-md-6 ">
                            <input type="text" placeholder="Link " class="input-pay m-t-10" name="videos[]" value=""> 
                           </div>    
                           <div class="col-lg-3 col-md-6 ">
                            <select name="category_id[]" class="input-pay m-t-10">
                                 <option value="">--Category--</option>
                                 <option value="10">Fashion and Beauty</option><option value="11">Travel</option><option value="12">Pets</option><option value="13">Health and Fitness</option><option value="14">Food and Drinks </option><option value="15">Technology </option><option value="16">Sports</option><option value="17">Business and Finance </option> 
                            </select>
                        </div> 
                        
                        <div class="col-lg-3 col-md-6 dct-dash-details">
                          <button type="submit" value="Submit">Add Video</button>
                        </div>
                      </div>

                        <div class="row p-t-10">
                            <div class="col-md-4 col-sm-4" style="text-align:right;">
                                <a href="javascript:void(0)" data-toggle="tooltip" title="" class="btn btn-effect-ripple btn-xs btn-success" style="overflow: hidden; position: relative; margin-bottom: -30px;" data-original-title="Edit User"><i class="fa fa-edit"></i></a>
                            <a href="javascript:void(0)" data-toggle="tooltip" title="" class="btn btn-effect-ripple btn-xs btn-danger" style="overflow: hidden; position: relative; margin-bottom: -30px;" data-original-title="Delete User"><i class="fa fa-times"></i></a>
                            <iframe width="100%" src="https://www.youtube.com/embed/EkWJEBxzYb0"></iframe>
                            </div>    
                            <div class="col-md-4 col-sm-4" style="text-align:right;">
                                <a href="javascript:void(0)" data-toggle="tooltip" title="" class="btn btn-effect-ripple btn-xs btn-success" style="overflow: hidden; position: relative; margin-bottom: -30px;" data-original-title="Edit User"><i class="fa fa-edit"></i></a>
                            <a href="javascript:void(0)" data-toggle="tooltip" title="" class="btn btn-effect-ripple btn-xs btn-danger" style="overflow: hidden; position: relative; margin-bottom: -30px;" data-original-title="Delete User"><i class="fa fa-times"></i></a>
                            <iframe width="100%" src="https://www.youtube.com/embed/EkWJEBxzYb0"></iframe>
                            </div>
                            <div class="col-md-4 col-sm-4" style="text-align:right;">
                                <a href="javascript:void(0)" data-toggle="tooltip" title="" class="btn btn-effect-ripple btn-xs btn-success" style="overflow: hidden; position: relative; margin-bottom: -30px;" data-original-title="Edit User"><i class="fa fa-edit"></i></a>
                            <a href="javascript:void(0)" data-toggle="tooltip" title="" class="btn btn-effect-ripple btn-xs btn-danger" style="overflow: hidden; position: relative; margin-bottom: -30px;" data-original-title="Delete User"><i class="fa fa-times"></i></a>
                            <iframe width="100%" src="https://www.youtube.com/embed/EkWJEBxzYb0"></iframe>
                            </div>
                        </div>

                         <!-- <b>(NOTE : ONLY EMBED LINK SHOULD WORKS )</b> -->
                        <div class="tab-regular">
                            <ul class="nav nav-tabs nav-fill" id="myTab7" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab-justify" data-toggle="tab" href="#home-justify" role="tab" aria-controls="home" aria-selected="true"><img src="<?php echo base_url(); ?>assets/images/youtube.png" style="width: 30px;"></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab-justify" data-toggle="tab" href="#profile-justify" role="tab" aria-controls="profile" aria-selected="false"><img src="<?php echo base_url(); ?>assets/images/insta.jpg" style="width: 30px;"></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-tab-justify" data-toggle="tab" href="#contact-justify" role="tab" aria-controls="contact" aria-selected="false"><img src="<?php echo base_url(); ?>assets/images/twi.png" style="width: 30px;"></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="user-tab-justify" data-toggle="tab" href="#user-justify" role="tab" aria-controls="user" aria-selected="false"><img src="<?php echo base_url(); ?>assets/images/tik.png" style="width: 30px;"></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="expo-tab-justify" data-toggle="tab" href="#expo-justify" role="tab" aria-controls="expo" aria-selected="false"><img src="<?php echo base_url(); ?>assets/images/twitch.png" style="width: 30px;"></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="sound-tab-justify" data-toggle="tab" href="#sound-justify" role="tab" aria-controls="sound" aria-selected="false"><img src="<?php echo base_url(); ?>assets/images/sound.png" style="width: 30px;"></a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent7" style="padding: 0px !important;">
                                    <div class="tab-pane fade show active" id="home-justify" role="tabpanel" aria-labelledby="home-tab-justify">
                                        <form action="<?php echo base_url(); ?>dashboard/add_video" method="post">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <input type="text" placeholder="Link 1" class="input-pay m-t-10"name="videos[]" value="<?php echo (!empty($youtube[0])?$youtube[0]['video_url']:''); ?>"> 
                                                </div>  
                                                <div class="col-md-3">
                                                    <select name="category_id[]" class="input-pay m-t-10">
                                                        <option value="">--Category--</option>
                                                        <?php 
                                                        foreach($category as $c){

                                                                      if(!empty($youtube[0]) && $youtube[0]['category_id'] == $c['category_id']){
                                                                           $selected="selected='seleected'";
                                                                      }else{
                                                                           $selected = "";
                                                                      }

                                                            echo '<option value="'.$c['category_id'].'" '.$selected.' >'.ucfirst($c['name']).'</option>';   
                                                        }

                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-9">
                                                            <input type="text" placeholder="Link 2" class="input-pay m-t-10"name="videos[]" value="<?php echo (!empty($youtube[1])?$youtube[1]['video_url']:''); ?>"> 
                                                       </div>    
                                                       <div class="col-md-3">
                                                            <select name="category_id[]" class="input-pay m-t-10">
                                                                 <option value="">--Category--</option>
                                                                 <?php 
                                                                 foreach($category as $c){

                                                                      if(!empty($youtube[1]) && $youtube[1]['category_id'] == $c['category_id']){
                                                                           $selected="selected='seleected'";
                                                                      }else{
                                                                           $selected = "";
                                                                      }

                                                                      echo '<option value="'.$c['category_id'].'" '.$selected.' >'.ucfirst($c['name']).'</option>';  
                                                                 }

                                                                 ?>
                                                            </select>
                                            </div>
                                                  </div>
                                            <div class="row">
                                                <div class="col-md-9">
                                                            <input type="text" placeholder="Link 3" class="input-pay m-t-10"name="videos[]" value="<?php echo (!empty($youtube[2])?$youtube[2]['video_url']:''); ?>"> 
                                                       </div>    
                                                       <div class="col-md-3">
                                                            <select name="category_id[]" class="input-pay m-t-10">
                                                                 <option value="">--Category--</option>
                                                                 <?php 
                                                                 foreach($category as $c){

                                                                      if(!empty($youtube[2]) && $youtube[2]['category_id'] == $c['category_id']){
                                                                           $selected="selected='seleected'";
                                                                      }else{
                                                                           $selected = "";
                                                                      }

                                                                      echo '<option value="'.$c['category_id'].'" '.$selected.' >'.ucfirst($c['name']).'</option>';  
                                                                 }

                                                                 ?>
                                                            </select>
                                            </div>                                      
                                            <input type="hidden" value="youtube" class="input-pay m-t-10" name="type">
                                            <div class="col-md-12 dct-dash-details">
                                                <button type="submit"  value="Submit">Save</button>
                                            </div>
                                        </div>
                                             </div>
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
                                            <iframe width="100%" src="<?php echo $url; ?>"></iframe>
                                        </div>    
                                         <?php
                                             }
                                          endforeach; 
                                             }
                                      ?>                                   
                                    </div>   
                                    </div>
                                <div class="tab-pane fade" id="profile-justify" role="tabpanel" aria-labelledby="profile-tab-justify">
                                    <form action="<?php echo base_url(); ?>dashboard/add_video" method="post">
                                             <div class="card-body">
                                                  <div class="row">
                                                       <div class="col-md-9">
                                                            <input type="text" placeholder="Link 1" class="input-pay m-t-10"name="videos[]" value="<?php echo (!empty($instagram[0])?$instagram[0]['video_url']:''); ?>"> 
                                                       </div>    
                                                       <div class="col-md-3">
                                                            <select name="category_id[]" class="input-pay m-t-10">
                                                                 <option value="">--Category--</option>
                                                                 <?php 
                                                                 foreach($category as $c){

                                                                      if(!empty($instagram[0]) && $instagram[0]['category_id'] == $c['category_id']){
                                                                           $selected="selected='seleected'";
                                                                      }else{
                                                                           $selected = "";
                                                                      }

                                                                      echo '<option value="'.$c['category_id'].'" '.$selected.' >'.ucfirst($c['name']).'</option>';  
                                                                 }

                                                                 ?>
                                                            </select>
                                                       </div>
                                                  </div>
                                                  <div class="row">
                                                       <div class="col-md-9">
                                                            <input type="text" placeholder="Link 2" class="input-pay m-t-10"name="videos[]" value="<?php echo (!empty($instagram[1])?$instagram[1]['video_url']:''); ?>"> 
                                                       </div>    
                                                       <div class="col-md-3">
                                                            <select name="category_id[]" class="input-pay m-t-10">
                                                                 <option value="">--Category--</option>
                                                                 <?php 
                                                                 foreach($category as $c){

                                                                      if(!empty($instagram[1]) && $instagram[1]['category_id'] == $c['category_id']){
                                                                           $selected="selected='seleected'";
                                                                      }else{
                                                                           $selected = "";
                                                                      }

                                                                      echo '<option value="'.$c['category_id'].'" '.$selected.' >'.ucfirst($c['name']).'</option>';  
                                                                 }

                                                                 ?>
                                                            </select>
                                                  </div>
                                                  </div>
                                                  <div class="row">
                                                       <div class="col-md-9">
                                                            <input type="text" placeholder="Link 3" class="input-pay m-t-10"name="videos[]" value="<?php echo (!empty($instagram[2])?$instagram[2]['video_url']:''); ?>"> 
                                                       </div>    
                                                       <div class="col-md-3">
                                                            <select name="category_id[]" class="input-pay m-t-10">
                                                                 <option value="">--Category--</option>
                                                                 <?php 
                                                                 foreach($category as $c){

                                                                      if(!empty($instagram[2]) && $instagram[2]['category_id'] == $c['category_id']){
                                                                           $selected="selected='seleected'";
                                                                      }else{
                                                                           $selected = "";
                                                                      }

                                                                      echo '<option value="'.$c['category_id'].'" '.$selected.' >'.ucfirst($c['name']).'</option>';  
                                                                 }

                                                                 ?>
                                                            </select>
                                                  </div>                                            
                                                  <input type="hidden" value="instagram" class="input-pay m-t-10" name="type">
                                                  <div class="col-md-12 dct-dash-details">
                                                       <button type="submit"  value="Submit">Save</button>
                                                  </div>
                                             </div>
                                             </div>
                                   </form>
                                   <div class="row p-t-10">
                                        <?php if(!empty($videos)){ 
                                            foreach($videos as $v):

                                             if($v['type'] == 'instagram'){?>
                                        <div class="col-md-4 col-sm-4">
                                            <iframe width="100%" src="<?php echo $v['video_url'] ?>"></iframe>
                                        </div>    
                                         <?php
                                             }
                                          endforeach; 
                                             }
                                      ?>                                   
                                    </div> 
                                </div>
                                <div class="tab-pane fade" id="contact-justify" role="tabpanel" aria-labelledby="contact-tab-justify">
                                    <form action="<?php echo base_url(); ?>dashboard/add_video" method="post">
                                             <div class="card-body">
                                                  <div class="row">
                                                       <div class="col-md-9">
                                                            <input type="text" placeholder="Link 1" class="input-pay m-t-10"name="videos[]" value="<?php echo (!empty($twitter[0])?$twitter[0]['video_url']:''); ?>"> 
                                                       </div>    
                                                       <div class="col-md-3">
                                                            <select name="category_id[]" class="input-pay m-t-10">
                                                                 <option value="">--Category--</option>
                                                                 <?php 
                                                                 foreach($category as $c){

                                                                      if(!empty($twitter[0]) && $twitter[0]['category_id'] == $c['category_id']){
                                                                           $selected="selected='seleected'";
                                                                      }else{
                                                                           $selected = "";
                                                                      }

                                                                      echo '<option value="'.$c['category_id'].'" '.$selected.' >'.ucfirst($c['name']).'</option>';  
                                                                 }

                                                                 ?>
                                                            </select>
                                                       </div>
                                                  </div>
                                                  <div class="row">
                                                       <div class="col-md-9">
                                                            <input type="text" placeholder="Link 2" class="input-pay m-t-10"name="videos[]" value="<?php echo (!empty($twitter[1])?$twitter[1]['video_url']:''); ?>"> 
                                                       </div>    
                                                       <div class="col-md-3">
                                                            <select name="category_id[]" class="input-pay m-t-10">
                                                                 <option value="">--Category--</option>
                                                                 <?php 
                                                                 foreach($category as $c){

                                                                      if(!empty($twitter[1]) && $twitter[1]['category_id'] == $c['category_id']){
                                                                           $selected="selected='seleected'";
                                                                      }else{
                                                                           $selected = "";
                                                                      }

                                                                      echo '<option value="'.$c['category_id'].'" '.$selected.' >'.ucfirst($c['name']).'</option>';  
                                                                 }

                                                                 ?>
                                                            </select>
                                                  </div>
                                                  </div>
                                                  <div class="row">
                                                       <div class="col-md-9">
                                                            <input type="text" placeholder="Link 3" class="input-pay m-t-10"name="videos[]" value="<?php echo (!empty($twitter[2])?$twitter[2]['video_url']:''); ?>"> 
                                                       </div>    
                                                       <div class="col-md-3">
                                                            <select name="category_id[]" class="input-pay m-t-10">
                                                                 <option value="">--Category--</option>
                                                                 <?php 
                                                                 foreach($category as $c){

                                                                      if(!empty($twitter[2]) && $twitter[2]['category_id'] == $c['category_id']){
                                                                           $selected="selected='seleected'";
                                                                      }else{
                                                                           $selected = "";
                                                                      }

                                                                      echo '<option value="'.$c['category_id'].'" '.$selected.' >'.ucfirst($c['name']).'</option>';  
                                                                 }

                                                                 ?>
                                                            </select>
                                                  </div>                                            
                                                  <input type="hidden" value="twitter" class="input-pay m-t-10" name="type">
                                                  <div class="col-md-12 dct-dash-details">
                                                       <button type="submit"  value="Submit">Save</button>
                                                  </div>
                                             </div>
                                             </div>
                                   </form>
                                   <div class="row p-t-10">
                                        <?php if(!empty($videos)){ 
                                            foreach($videos as $v):

                                             if($v['type'] == 'twitter'){?>
                                        <div class="col-md-4 col-sm-4">
                                            <iframe width="100%" src="<?php echo $v['video_url'] ?>"></iframe>
                                        </div>    
                                         <?php
                                             }
                                          endforeach; 
                                             }
                                      ?>                                   
                                    </div> 
                                </div>
                                <div class="tab-pane fade" id="user-justify" role="tabpanel" aria-labelledby="user-tab-justify">
                                    <form action="<?php echo base_url(); ?>dashboard/add_video" method="post">
                                             <div class="card-body">
                                                  <div class="row">
                                                       <div class="col-md-9">
                                                            <input type="text" placeholder="Link 1" class="input-pay m-t-10"name="videos[]" value="<?php echo (!empty($tiktok[0])?$tiktok[0]['video_url']:''); ?>"> 
                                                       </div>    
                                                       <div class="col-md-3">
                                                            <select name="category_id[]" class="input-pay m-t-10">
                                                                 <option value="">--Category--</option>
                                                                 <?php 
                                                                 foreach($category as $c){

                                                                      if(!empty($tiktok[0]) && $tiktok[0]['category_id'] == $c['category_id']){
                                                                           $selected="selected='seleected'";
                                                                      }else{
                                                                           $selected = "";
                                                                      }

                                                                      echo '<option value="'.$c['category_id'].'" '.$selected.' >'.ucfirst($c['name']).'</option>';  
                                                                 }

                                                                 ?>
                                                            </select>
                                                       </div>
                                                  </div>
                                                  <div class="row">
                                                       <div class="col-md-9">
                                                            <input type="text" placeholder="Link 2" class="input-pay m-t-10"name="videos[]" value="<?php echo (!empty($tiktok[1])?$tiktok[1]['video_url']:''); ?>"> 
                                                       </div>    
                                                       <div class="col-md-3">
                                                            <select name="category_id[]" class="input-pay m-t-10">
                                                                 <option value="">--Category--</option>
                                                                 <?php 
                                                                 foreach($category as $c){

                                                                      if(!empty($tiktok[1]) && $tiktok[1]['category_id'] == $c['category_id']){
                                                                           $selected="selected='seleected'";
                                                                      }else{
                                                                           $selected = "";
                                                                      }

                                                                      echo '<option value="'.$c['category_id'].'" '.$selected.' >'.ucfirst($c['name']).'</option>';  
                                                                 }

                                                                 ?>
                                                            </select>
                                                  </div>
                                                  </div>
                                                  <div class="row">
                                                       <div class="col-md-9">
                                                            <input type="text" placeholder="Link 3" class="input-pay m-t-10"name="videos[]" value="<?php echo (!empty($tiktok[2])?$tiktok[2]['video_url']:''); ?>"> 
                                                       </div>    
                                                       <div class="col-md-3">
                                                            <select name="category_id[]" class="input-pay m-t-10">
                                                                 <option value="">--Category--</option>
                                                                 <?php 
                                                                 foreach($category as $c){

                                                                      if(!empty($tiktok[2]) && $tiktok[2]['category_id'] == $c['category_id']){
                                                                           $selected="selected='seleected'";
                                                                      }else{
                                                                           $selected = "";
                                                                      }

                                                                      echo '<option value="'.$c['category_id'].'" '.$selected.' >'.ucfirst($c['name']).'</option>';  
                                                                 }

                                                                 ?>
                                                            </select>
                                                  </div>                                            
                                                  <input type="hidden" value="tiktok" class="input-pay m-t-10" name="type">
                                                  <div class="col-md-12 dct-dash-details">
                                                       <button type="submit"  value="Submit">Save</button>
                                                  </div>
                                             </div>
                                             </div>
                                   </form>
                                   <div class="row p-t-10">
                                        <?php if(!empty($videos)){ 
                                            foreach($videos as $v):

                                             if($v['type'] == 'tiktok'){?>
                                        <div class="col-md-4 col-sm-4">
                                            <iframe width="100%" src="<?php echo $v['video_url'] ?>"></iframe>
                                        </div>    
                                         <?php
                                             }
                                          endforeach; 
                                             }
                                      ?>                                   
                                    </div> 
                                </div>
                                <div class="tab-pane fade" id="expo-justify" role="tabpanel" aria-labelledby="expo-tab-justify">
                                    <form action="<?php echo base_url(); ?>dashboard/add_video" method="post">
                                             <div class="card-body">
                                                  <div class="row">
                                                       <div class="col-md-9">
                                                            <input type="text" placeholder="Link 1" class="input-pay m-t-10"name="videos[]" value="<?php echo (!empty($expo[0])?$expo[0]['video_url']:''); ?>"> 
                                                       </div>    
                                                       <div class="col-md-3">
                                                            <select name="category_id[]" class="input-pay m-t-10">
                                                                 <option value="">--Category--</option>
                                                                 <?php 
                                                                 foreach($category as $c){

                                                                      if(!empty($expo[0]) && $expo[0]['category_id'] == $c['category_id']){
                                                                           $selected="selected='seleected'";
                                                                      }else{
                                                                           $selected = "";
                                                                      }

                                                                      echo '<option value="'.$c['category_id'].'" '.$selected.' >'.ucfirst($c['name']).'</option>';  
                                                                 }

                                                                 ?>
                                                            </select>
                                                       </div>
                                                  </div>
                                                  <div class="row">
                                                       <div class="col-md-9">
                                                            <input type="text" placeholder="Link 2" class="input-pay m-t-10"name="videos[]" value="<?php echo (!empty($expo[1])?$expo[1]['video_url']:''); ?>"> 
                                                       </div>    
                                                       <div class="col-md-3">
                                                            <select name="category_id[]" class="input-pay m-t-10">
                                                                 <option value="">--Category--</option>
                                                                 <?php 
                                                                 foreach($category as $c){

                                                                      if(!empty($expo[1]) && $expo[1]['category_id'] == $c['category_id']){
                                                                           $selected="selected='seleected'";
                                                                      }else{
                                                                           $selected = "";
                                                                      }

                                                                      echo '<option value="'.$c['category_id'].'" '.$selected.' >'.ucfirst($c['name']).'</option>';  
                                                                 }

                                                                 ?>
                                                            </select>
                                                  </div>
                                                  </div>
                                                  <div class="row">
                                                       <div class="col-md-9">
                                                            <input type="text" placeholder="Link 3" class="input-pay m-t-10"name="videos[]" value="<?php echo (!empty($expo[2])?$expo[2]['video_url']:''); ?>"> 
                                                       </div>    
                                                       <div class="col-md-3">
                                                            <select name="category_id[]" class="input-pay m-t-10">
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
                                                  <input type="hidden" value="expo" class="input-pay m-t-10" name="type">
                                                  <div class="col-md-12 dct-dash-details">
                                                       <button type="submit"  value="Submit">Save</button>
                                                  </div>
                                             </div>
                                             </div>
                                   </form>
                                   <div class="row p-t-10">
                                        <?php if(!empty($videos)){ 
                                            foreach($videos as $v):

                                             if($v['type'] == 'expo'){?>
                                        <div class="col-md-4 col-sm-4">
                                            <iframe width="100%" src="<?php echo $v['video_url'] ?>"></iframe>
                                        </div>    
                                         <?php
                                             }
                                          endforeach; 
                                             }
                                      ?>                                   
                                    </div> 
                                </div>
                                <div class="tab-pane fade" id="sound-justify" role="tabpanel" aria-labelledby="sound-tab-justify">
                                    <form action="<?php echo base_url(); ?>dashboard/add_video" method="post">
                                             <div class="card-body">
                                                  <div class="row">
                                                       <div class="col-md-9">
                                                            <input type="text" placeholder="Link 1" class="input-pay m-t-10"name="videos[]" value="<?php echo (!empty($soundcloud[0])?$soundcloud[0]['video_url']:''); ?>"> 
                                                       </div>    
                                                       <div class="col-md-3">
                                                            <select name="category_id[]" class="input-pay m-t-10">
                                                                 <option value="">--Category--</option>
                                                                 <?php 
                                                                 foreach($category as $c){

                                                                      if(!empty($soundcloud[0]) && $soundcloud[0]['category_id'] == $c['category_id']){
                                                                           $selected="selected='seleected'";
                                                                      }else{
                                                                           $selected = "";
                                                                      }

                                                                      echo '<option value="'.$c['category_id'].'" '.$selected.' >'.ucfirst($c['name']).'</option>';  
                                                                 }

                                                                 ?>
                                                            </select>
                                                       </div>
                                                  </div>
                                                  <div class="row">
                                                       <div class="col-md-9">
                                                            <input type="text" placeholder="Link 2" class="input-pay m-t-10"name="videos[]" value="<?php echo (!empty($soundcloud[1])?$soundcloud[1]['video_url']:''); ?>"> 
                                                       </div>    
                                                       <div class="col-md-3">
                                                            <select name="category_id[]" class="input-pay m-t-10">
                                                                 <option value="">--Category--</option>
                                                                 <?php 
                                                                 foreach($category as $c){

                                                                      if(!empty($soundcloud[1]) && $soundcloud[1]['category_id'] == $c['category_id']){
                                                                           $selected="selected='seleected'";
                                                                      }else{
                                                                           $selected = "";
                                                                      }

                                                                      echo '<option value="'.$c['category_id'].'" '.$selected.' >'.ucfirst($c['name']).'</option>';  
                                                                 }

                                                                 ?>
                                                            </select>
                                                  </div>
                                                  </div>
                                                  <div class="row">
                                                       <div class="col-md-9">
                                                            <input type="text" placeholder="Link 3" class="input-pay m-t-10"name="videos[]" value="<?php echo (!empty($soundcloud[2])?$soundcloud[2]['video_url']:''); ?>"> 
                                                       </div>    
                                                       <div class="col-md-3">
                                                            <select name="category_id[]" class="input-pay m-t-10">
                                                                 <option value="">--Category--</option>
                                                                 <?php 
                                                                 foreach($category as $c){

                                                                      if(!empty($soundcloud[2]) && $soundcloud[2]['category_id'] == $c['category_id']){
                                                                           $selected="selected='seleected'";
                                                                      }else{
                                                                           $selected = "";
                                                                      }

                                                                      echo '<option value="'.$c['category_id'].'" '.$selected.' >'.ucfirst($c['name']).'</option>';  
                                                                 }

                                                                 ?>
                                                            </select>
                                                  </div>                                            
                                                  <input type="hidden" value="soundcloud" class="input-pay m-t-10" name="type">
                                                  <div class="col-md-12 dct-dash-details">
                                                       <button type="submit"  value="Submit">Save</button>
                                                  </div>
                                             </div>
                                             </div>
                                   </form>
                                   <div class="row p-t-10">
                                        <?php if(!empty($videos)){ 
                                            foreach($videos as $v):

                                             if($v['type'] == 'soundcloud'){?>
                                        <div class="col-md-4 col-sm-4">
                                            <iframe width="100%" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/users/325143&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
                                        </div>    
                                         <?php
                                             }
                                          endforeach; 
                                             }
                                      ?>                                   
                                    </div> 
                            </div>

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

