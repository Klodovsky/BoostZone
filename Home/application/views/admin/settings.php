<?php $user = get_userdata(); ?>
  <div class="container">
     <?php $msg = $this->session->flashdata('message');
                if($msg){ ?>
                <div class="alert alert-success"><?php echo $msg; ?>
                    <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
                </div>
                <?php } ?>

                <?php $msg = $this->session->flashdata('message1');
                if($msg){ ?>
                <div class="alert alert-danger"><?php echo $msg; ?>
                    <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
                </div>
                <?php } ?>

            <!-- Page Content -->
            <div class="container-fluid headbg-mar">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-5">
                            <div class="tab-regular">
                                <ul class="nav nav-tabs nav-fill" id="myTab7" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab-justify" data-toggle="tab" href="#home-justify" role="tab" aria-controls="home" aria-selected="true">Profile</a>
                                    </li>
                                    <!--<li class="nav-item">-->
                                    <!--    <a class="nav-link" id="profile-tab-justify" data-toggle="tab" href="#profile-justify" role="tab" aria-controls="profile" aria-selected="false">Website</a>-->
                                    <!--</li>-->
                                    <!--<li class="nav-item">-->
                                    <!--    <a class="nav-link" id="contact-tab-justify" data-toggle="tab" href="#contact-justify" role="tab" aria-controls="contact" aria-selected="false">SEO</a>-->
                                    <!--</li>-->
                                    <!--<li class="nav-item">-->
                                    <!--    <a class="nav-link" id="contact-tab-justify" data-toggle="tab" href="#payment-justify" role="tab" aria-controls="contact" aria-selected="false">Payment Gateway</a>-->
                                    <!--</li>-->
                                </ul>
                                <div class="tab-content" id="myTabContent7">
                                    <div class="tab-pane fade show active" id="home-justify" role="tabpanel" aria-labelledby="home-tab-justify">
                                        <form action="<?php echo base_url(); ?>settings/update_profile" method="post" id="profile_form" enctype="multipart/form-data" >
                                        
                                        <div class="col-md-12 m-t-10">
                                            <div class="row">
                                            <div class="col-md-6">
                                                <input type="text" placeholder="First Name" class="input-pay" value="<?php echo $user['first_name']; ?>" name="first_name">
                                            </div>    
                                            <div class="col-md-6">
                                                <input type="text" placeholder="Last Name" class="input-pay" value="<?php echo $user['last_name']; ?>" name="last_name">
                                            </div>    
                                            </div>
                                        </div>
                                        <div class="col-md-12 m-t-10">
                                            <input type="text" placeholder="Change Email Address" class="input-pay" value="<?php echo $user['email']; ?>" name="email">
                                        </div>
                                        <div class="col-md-12 m-t-10">
                                            <input type="password" placeholder="Change Password" class="input-pay" id="password" name="password">
                                        </div>
                                        <div class="col-md-12 m-t-10">
                                            <input type="password" placeholder="Confirm Password" class="input-pay" id="cnfm_password" name="cnfm_password">
                                        </div>
                                        <div class="col-md-12 m-t-10">
                                                <input type="text" placeholder="Change Phone number" class="input-pay" value="<?php echo $user['mobile_no']; ?>" name="mobile_no">
                                        </div>
                                        <div class="col-md-12 m-t-10">
                                                Select Profile Image   <input type="file" name="picture" accept="image/*">
                                            </div>
                                        <div class="col-md-12 dct-dash-details p-b-10">
                                                <button type="submit" value="Submit">Save</button>
                                            </div>

                                        </form>
                                    </div>
                                    <!--<div class="tab-pane fade" id="profile-justify" role="tabpanel" aria-labelledby="profile-tab-justify">-->
                                    <!--    <p>Nullam et tellus ac ligula condimentum sodales. Aenean tincidunt viverra suscipit. Maecenas id molestie est, a commodo nisi. Quisque fringilla turpis nec elit eleifend vestibulum. Aliquam sed purus in odio ullamcorper congue consectetur in neque. Aenean sem ex, tempor et auctor sed, congue id neque. </p>-->
                                    <!--</div>-->
                                    <!--<div class="tab-pane fade" id="contact-justify" role="tabpanel" aria-labelledby="contact-tab-justify">-->
                                    <!--    <p>Vivamus pellentesque vestibulum lectus vitae auctor. Maecenas eu sodales arcu. Fusce lobortis, libero ac cursus feugiat, nibh ex ultricies tortor, id dictum massa nisl ac nisi. Fusce a eros pellentesque, ultricies urna nec, consectetur dolor. Nam dapibus scelerisque risus, a commodo mi tempus eu.</p>-->
                                    <!--</div>-->
                                    <!--<div class="tab-pane fade" id="payment-justify" role="tabpanel" aria-labelledby="contact-tab-justify">-->
                                    <!--     <form action="#" method="get" id="nameform">-->
                                        
                                    <!--    <div class="col-md-12 m-t-10">-->
                                    <!--        <input type="text" placeholder="API Key" class="input-pay">-->
                                    <!--    </div>-->
                                    <!--    <div class="col-md-12 m-t-10">-->
                                    <!--        <input type="text" placeholder="API Secret" class="input-pay">-->
                                    <!--    </div>-->
                                    <!--   <div class="col-md-12 dct-dash-details p-b-10">-->
                                    <!--            <button type="submit" form="nameform" value="Submit">Save</button>-->
                                    <!--        </div>-->

                                    <!--    </form>-->
                                    <!--</div>-->
                                </div>
                            </div>
                        </div>
            </div>
            <!-- Page Content End-->
        </div>
        