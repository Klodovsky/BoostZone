

<?php 

if(!empty($user['picture'])){
	$img = $user['picture'];
}else{
	$img = base_url().'assets/images/default-avatar.png';
}
?>
<?php 
$msg = $this->session->flashdata('message');
if(!empty($msg)){ ?>
	<div class="alert alert-success"><?php echo $msg; ?>
	<a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
</div>
<?php } ?>
<div class="container p-b-80">
  <button onclick="history.back(0);" class="btn btn-primary">Back</button>
	<div class="row">
		<div class="col-md-4 col-sm-6 dct-dashbd-lft">
			<div class="dct-dashbd-01 text-center">
				<div class="dct-dash-img" 
                     
                    >
					<img src="<?php echo $img; ?>" class="img-responsive img-circle " alt="" style="width:100px">
				</div>

                       

				<div class="dct-dash-details">
					<h3><span class="first"><?php echo $user['first_name'];?></span> <span class="last"><?php echo $user['last_name']; ?></span></h3>
					<p  class="channel"><?php $user['name'] ?></p>
					<p class="year"> <?php echo 'From '.$user['year']; ?></p>
					<p class="description"><?php echo $user['description'] ?></p>
					<div class="row m-t-30"  id="demo">
						<form action="<?php echo base_url(); ?>dashboard/update_profile" method="post" id="profile_form">                                       						
						
							
						
                                        <!-- <div class="col-md-12 m-t-10">
                                            <input type="text" disabled  value="Change Email Address" class="input-pay" >
                                        </div> -->
                                        
                                        <div class="col-md-12 m-t-10">
                                        	<input type="text" disabled  placeholder="Phone number NOT FILLED" class="input-pay" name="mobile_no" value="<?php echo $user['mobile_no']; ?>">
                                        </div>
                                        <div class="col-md-12 m-t-10">
                                        	<input type="text" disabled  placeholder="Bank Name NOT FILLED" class="input-pay" name="bank_name" value="<?php echo $user['bank_name']; ?>">
                                        </div>
                                        <div class="col-md-12 m-t-10">
                                        	<input type="text" disabled  placeholder="Account Number NOT FILLED" class="input-pay" name="account_no" value="<?php echo $user['account_no']; ?>">
                                        </div>
                                        <div class="col-md-12 m-t-10">
                                        	<input type="text" disabled  placeholder="IFSC Code NOT FILLED" class="input-pay" name="ifsc_code" value="<?php echo $user['ifsc_code']; ?>">
                                        </div>
                                        <div class="col-md-12 dct-dash-details p-b-10">
                                        	
                                        </div>
                                    </form>
                                </div>
                                <div class="dct-dash-details">
                                	<!-- <a href="#" class="btn btn-brand btn-sm" data-toggle="collapse" data-target="#demo">Edit Profile</a> -->
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-8 col-sm-6 cretor-home p-t-20">
                         <!-- <b>(NOTE : ONLY EMBED LINK SHOULD WORKS )</b> -->
                    	<div class="tab-regular">
                    		    <?php if(!empty($videos)){ 
                                foreach($videos as $v):

                                 if($v['type'] == 'youtube'){

                                  $string     = $v['video_url'];
                                  $search     = '/youtube\.com\/watch\?v=([a-zA-Z0-9]+)/smi';
                                  $replace    = "youtube.com/embed/$1";    
                                  $url = preg_replace($search,$replace,$string);


                                  ?>
                                  <div class="col-md-4 col-sm-4">
                                  <!--   <a 
                                    onclick="get_data(this)"
                                    data-video_url="<?php echo $v['video_url']; ?>"
                                    data-category_id="<?php echo $v['category_id']; ?>"
                                    data-hidden_id="<?php echo $v['video_id']; ?>"

                                    href="javascript:void(0)" data-toggle="tooltip" title="" class="btn btn-effect-ripple btn-xs btn-success" style="overflow: hidden; position: relative; margin-bottom: -30px;" data-original-title="Edit User"><i class="fa fa-edit"></i></a>
                                    <a href="javascript:void(0)" onclick="warn(<?php echo $v['video_id'];?>)" class="btn btn-effect-ripple btn-xs btn-danger" style="overflow: hidden; position: relative; margin-bottom: -30px;" data-original-title="Delete User"><i class="fa fa-times"></i></a> -->
                                    <iframe width="100%" src="<?php echo $url; ?>"></iframe>
                                  </div>    
                                  <?php
                                }
                              endforeach; 
                            }
                            ?>

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

                    		
                    		<h3 class="p-t-30 p-b-10">Recent Donator's List</h3>
                    		<div class="card hero-slide-nineteen-table aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                    			<div class="table-responsive">
                    				<table class="table">
                    					<thead>
                    						<tr>
                    							<th> ID</th>
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

