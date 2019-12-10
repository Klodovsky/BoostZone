 <!-- hero slide start -->
    <div class="hero-slide-seventeen">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <!-- pagecaption start -->
                    <div class="hero-slide-seventeen-caption" data-aos="fade-up">
                        <h1 class="hero-slide-seventeen-caption-title2">There is more happiness <br>
                        <h1 class="hero-slide-seventeen-caption-title2">in giving than in receiving</h1></h1>
                        <p class="hero-slide-seventeen-caption-text"> BoostZone is a platform made for people who wants to make the world a better place.</p>
                        <div class="row">
                            <div class="col-md-6 ">
                                <a href="<?php echo base_url(); ?>login" class="btn btn-secondary btn-lg btn-block ">help-seeker</a></div>
                            <div class="col-md-6 hea-t-20">
                                <a href="<?php echo base_url(); ?>login" class="btn btn-white btn-lg btn-block">Donator</a></div>
                        </div>
                    </div>
                    <!-- pagecaption close -->
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <!-- pagecaption start -->
                    <div class="hero-slide-seventeen-img" data-aos="fade-up" data-aos-delay="300">
                        <img src="<?php echo base_url(); ?>assets/images/poignee-main-fraternelle-blanc_87494-95.jpg" alt="" class="img-fluid"> 
                    </div>
                    <!-- pagecaption close -->
                </div>
            </div>
        </div>
    </div>
    <!-- hero slide close -->

    <!-- top brands start -->
   
    <!-- top brands close -->
   <section class="testimonial">
        <div class="testimonial opacity">
            <div class="container">
                <div class="theme-title text-center" data-aos="fade-up">
                    <h2 class="section-heading-title m-b-10">A simple boost can change somebody's life today.</h2>
                    <!--<p class="m-b-40">Aliquam laoreet maximus sapien, pulvinar elementum justo tempus in. Nullam non malesuada ipsum. Duis nec consectetur felis.</p>-->
                </div> <!-- /.theme-title -->

                <div class="row">
                    <div class="testimonial-slider">
                        <?php

                    

                         foreach($channel as $c): ?>
                        <div class="item" data-aos="zoom-in">
                            <div class="name">
                                <div class="img">
                                    <!--<a href="" class="tran3s youtube">
                                         <img src="<?php echo base_url(); ?>assets/images/home/youtube.png" style="width: 24px" alt=""> 
                                     </a>-->
                                    <img src="<?php echo !empty($c['picture'])?$c['picture']:base_url().'assets/images/default-avatar.png'; ?>" alt="" style="width:120px;">
                                </div>
                                <h5 style="height: 45px;overflow: hidden;"><?php echo $c['name']; ?></h5>
                                <span id="follows_<?php echo $c['user_id'];  ?> ">
                                        <?php  
                                        echo  $this->db
                                        ->get_where('like_details',array('creator_id'=>$c['user_id']))
                                        ->num_rows();
                                        
                                         ?>
                                 Donations</span>
                            </div> <!-- /.name -->
                            <p style="height: 115px; overflow: hidden;"><?php echo $c['description']; ?></p>
                            <a href="javascript:void(0)" onclick="get_modal(<?php echo $c['media_id'] ?>)"  class="p-bg-color theme-button-1 hvr-float-shadow">Support Now</a>
                        </div> <!-- /.item -->        
                        <?php endforeach; ?>                                  
                    </div> <!-- /.testimonial-slider -->
                </div> <!-- /.row -->
                <a href="<?php echo base_url(); ?>view_all_creators" class="p-bg-color theme-button-2 hvr-float-shadow" data-aos="fade-up">Discover More </a>
            </div> <!-- /.container -->
        </div> <!-- /.opacity -->
    </section> <!-- /.testimonial -->
    <!-- features section start -->
    <div class="space-medium  feature-section-v3 ">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <!-- features section img -->
                    <div class="feature-section-img ">
                        <div class="row  d-flex align-items-end">
                           
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 pl-0 m-b-20">
                                <img src="<?php echo base_url(); ?>assets/images/Boostzone_2.png" alt="" class="img-fluid  " data-aos="fade-down">
                            </div>
                        </div>
                        <div class="row ">
                            <div class="offset-xl-1 col-xl-5 col-lg-6 col-md-6 col-sm-12 col-12 ">
                                <img src="<?php echo base_url(); ?>assets/images/Boostzone_3.png" alt="" class="img-fluid  " data-aos="fade-up">
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 pl-0 ">
                                <img src="<?php echo base_url(); ?>assets/images/Boostzone_4.png" alt="" class="img-fluid  " data-aos="fade-down">
                            </div>
                        </div>
                    </div>
                    <!-- features section img -->
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <!-- section heading start -->
                    <div class="section-heading" data-aos="fade-up">
                        <h2>What is BoostZone?</h2>
                        <p>BoostZone is a nonprofit platform designed to help digital content creators build relationships and try together to help make the world a better place . With BoostZone, help seekers can raise money for their cause with your help.</p>
                        <!--<div class="campaign-stats">-->
                        <!--    <div class="campaign-stats-row">-->
                        <!--      <i class="fa fa-heart"></i>-->
                        <!--      <p>Consumer engagments</p>-->
                        <!--    </div>-->
                        <!--    <div class="campaign-stats-row">-->
                        <!--      <i class="fa fa-user"></i>-->
                        <!--      <p>Consumer reached</p>-->
                        <!--    </div>-->
                        <!--    <div class="campaign-stats-row">-->
                        <!--      <i class="fa fa-edit"></i>-->
                        <!--      <p>Pieces of unique content</p>-->
                        <!--    </div>-->
                        <!--    <div class="campaign-stats-row">-->
                        <!--      <i class="fa fa-star"></i>-->
                        <!--      <p>Donators</p>-->
                        <!--    </div>-->
                        <!--  </div>-->
                        <hr class="m-b-40 m-t-40">
                    </div>
                    <!-- section heading close -->
                </div>
            </div>
        </div>
    </div>
    <!-- features section close -->
    <!-- features section start -->
    <div class="space-medium  feature-section-v3 ">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <!-- section heading start -->
                    <div class="section-heading" data-aos="fade-up">
                        <h2>What we do?</h2>
                        <p>In the BoostZone Platform, donators join a community of help seekers and boost their compaign if they feel like it.
                             In return, help seekers are asked to tell their story and explain the exact purpose of the compaign. 
                        <!--<div class="campaign-stats">-->
                        <!--    <div class="campaign-stats-row">-->
                        <!--      <i class="fa fa-heart"></i>-->
                        <!--      <p>Consumer engagments</p>-->
                        <!--    </div>-->
                        <!--    <div class="campaign-stats-row">-->
                        <!--      <i class="fa fa-user"></i>-->
                        <!--      <p>Consumer reached</p>-->
                        <!--    </div>-->
                        <!--    <div class="campaign-stats-row">-->
                        <!--      <i class="fa fa-edit"></i>-->
                        <!--      <p>Pieces of unique content</p>-->
                        <!--    </div>-->
                        <!--    <div class="campaign-stats-row">-->
                        <!--      <i class="fa fa-star"></i>-->
                        <!--      <p>Donators</p>-->
                        <!--    </div>-->
                        <!--  </div>-->
                        <hr class="m-b-40 m-t-40">
                    </div>
                    <!-- section heading close -->
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <!-- features section img -->
                    <div class="feature-section-img ">
                        <div class="row  d-flex align-items-end">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 m-b-20">
                                <img src="<?php echo base_url(); ?>assets/images/What We Do_1.png" alt="" class="img-fluid  " data-aos="fade-up">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 pl-0 m-b-20">
                                <img src="<?php echo base_url(); ?>assets/images/What We Do_2.png" alt="" class="img-fluid  " data-aos="fade-down">
                            </div>
                        </div>
                        <div class="row ">
                            <div class="offset-xl-1 col-xl-5 col-lg-6 col-md-6 col-sm-12 col-12 ">
                                <img src="<?php echo base_url(); ?>assets/images/What We Do_3.png" alt="" class="img-fluid  " data-aos="fade-up">
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 pl-0 ">
                                <img src="<?php echo base_url(); ?>assets/images/What We Do_4.png" alt="" class="img-fluid  " data-aos="fade-down">
                            </div>
                        </div>
                    </div>
                    <!-- features section img -->
                </div>
            </div>
        </div>
    </div>
    <!-- features section close -->
    <div class="hero-slide-ninth" style="background-color: #fdfdfd">
        <div class="container">
            <div class="row">
                <div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                    <!-- pagecaption start -->
                    <div class="hero-slide-ninth-img aos-init aos-animate" data-aos="zoom-in" style="padding-top: 20px;">
                        <img src="<?php echo base_url(); ?>assets/images/hero-graphics-img-2.png" alt="" class="">
                    </div>
                    <div class="hero-slide-ninth-caption aos-init aos-animate" data-aos="fade-up">
                        <h2>Who can be a part of BoostZone?</h2>
                        <p class="hero-slide-ninth-caption-text"> Any creator of digital content can register themselves on the Boostzone Platform. Whether it is music, videos, graphic art or just blogs, we welcome all contributors of the modern internet. </p>
                        
                    </div>
                    <!-- pagecaption close -->
                </div>
            </div>
        </div>
    </div>
    <!-- features section start -->
    <div class="space-medium">
        <div class="container custom-width1700">
            <div class="row">
                <div style="text-align: center;" class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12" data-aos="fade-up">
                    <div class="aos-init aos-animate" data-aos="fade-up">
                        <h2>Ready to check it out?</h2>
                        <p class="hero-slide-seventeen-caption-text">Get started for free, no strings attached</p>
                        <a href="<?php echo base_url(); ?>login" class="btn btn-brand  active" data-aos="fade-up">I'm a Creator</a>
                        <a href="<?php echo base_url(); ?>login" class="btn btn-brand  active" data-aos="fade-up">I'm a Donator</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- features section close -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/sweetalert2.css">
<script src="<?php echo base_url(); ?>assets/js/sweetalert2.js"></script>
 <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script type="text/javascript">
   var SITEURL = "<?php echo base_url() ?>";


        function like_now(){
        
        var donator_id = $('#donator_id').val();
            if(donator_id == ''){
                if(confirm('You should login to like this channel !')){
                window.location.href="<?php echo base_url(); ?>login";
            }
                return false;
            }
            var status = 0;

            if($('#like').hasClass('active')){
               
               $('#like').removeClass('active');
               $('#like').text('Follow Channel');
            }else{
               status  = 1;
               $('#like').addClass('active');
               $('#like').text('UnFollow');
            }

                    $.ajax({
                    url: SITEURL + 'payment/update_like',
                    type: 'post',
                    dataType: 'json',
                    data: {                
                    creator_id:$('#creator_id').val(),
                    donator_id:$('#donator_id').val(),
                    status:status
                    }, 
                    success: function (msg) {

                    //console.log(msg);

                    }
                    }); 


    }
    function pay_now(){
        var donator_id = $('#donator_id').val();
        if(donator_id == ''){
            if(confirm('You should login to donate!')){
                window.location.href="<?php echo base_url(); ?>login";
            }
            return false;
        }

      
        var totalAmount = $('#amount').val();
        if(totalAmount == '' || totalAmount <=0){
            alert('Enter valid amount to donate!');
            return false;
        }
            var product_id =  Math.random().toString(36).substring(2, 15) + Math.random().toString(36).substring(2, 15);

              var options = {
    //"key": "rzp_live_o5BdNyfXrIGLTQ",
    "key": "rzp_test_XK8lan4c1Patvx",
    "amount": (totalAmount*100), 
    "name": "BoostZone",
    "description": "Payment Section",
    "image": SITEURL+"assets/images/BoostZone.png",
    "handler": function (response){
          $('#creator-popup-view').modal('hide');  
            swal({    
            title: 'Thank you for the Donation!',
            text: "Yout Payment made successfully!",
            type: 'success'    
            });
          $.ajax({
            url: SITEURL + 'payment/save_payment',
            type: 'post',
            dataType: 'json',
            data: {
                razorpay_payment_id: response.razorpay_payment_id,
                amount : totalAmount ,
                product_id : product_id,
                creator_id:$('#creator_id').val(),
                donator_id:$('#donator_id').val()
            }, 
            success: function (msg) {
                        
            }
        });      
    },
 
    "theme": {
        "color": "#528FF0"
    }
  };
  var rzp1 = new Razorpay(options);
  rzp1.open();
    }

    function get_modal(media_id){
        $('#like').removeClass('active');
        $('#like').text('Follow Channel');
        $.post('<?php echo base_url(); ?>home/get_media',{media_id:media_id},function(res){
            var obj = jQuery.parseJSON(res);
            if(obj.liked == 1){
                $('#like').addClass('active');
                $('#like').text('Followed');
            }
            $('#creator-popup-view').modal('show');
            $(obj.media).each(function(){
                if(this.picture!=''){
                    var picture = this.picture;
                }else{
                    var picture = '<?php echo base_url();?>assets/images/default-avatar.png';
                }
                
                $('#picture').attr('src',picture);
                $('#description').text(this.description);
                $('#creator_name').text(this.first_name+' '+this.last_name);
                $('#channel_name').text(this.name);
                $('#creator_id').val(this.user_id);
                $('#year').text('From '+this.year);

            });
            $('#ajax_videos').html('');
            var tr='';
            $(obj.videos).each(function(){
                var videoId = getId(this.video_url);
               tr += '<iframe width="100%" height="345" src="//www.youtube.com/embed/' 
            + videoId + '" frameborder="0" allowfullscreen></iframe>';
                            
            });

            $('#ajax_videos').append(tr);

            
        });
    }

    function getId(url) {
    var regExp = /^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|\&v=)([^#\&\?]*).*/;
    var match = url.match(regExp);

    if (match && match[2].length == 11) {
        return match[2];
    } else {
        return 'error';
    }
}


</script>

    <div id="creator-popup-view" class="modal custom-modal fade" role="dialog" style="z-index: 9999; margin-top: 100px;">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                                <form>
                                        <div class="row">
                                                <div class="col-md-4 col-sm-6 dct-dashbd-01">
                                                        <div class="text-center">
                                                            <div class="dct-dash-img">
                                                                 <img src="<?php echo base_url(); ?>assets/images/home/profile-picture.png" class="img-responsive img-circle" alt="" id="picture">
                                                            </div>
                                                            <div class="dct-dash-details">
                                                                <h3 id="creator_name">Tech Lead</h3>
                                                                <p id="channel_name">Youtube Channel<br>
                                                                    <span id="year">From 2012</span></p>
                                                                <a href="#" class="btn btn-secondary btn-lg btn-block" onclick="like_now()" id="like">Follow Channel</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <div class="col-md-7 col-sm-6 dct-dashbd-02">
                                                        <div class="form-group">
                                                        <h3 class="m-t-10">Description</h3>
                                                        <p id="description">Welcome to Tech lead Version 2.0 ! Want to know if that latest movie is worth watching, go watch our Dumbest Reviews, a unique movie review format where...  </p>
                                                        <form action="#" method="post" id="pay" onsubmit="pay_now()">
                                                         <input type="text"  class="input-pay" id="amount" placeholder="Enter amount" onkeypress="return isNumberKey(event)">
                                                         <input type="hidden" name="creator_id" id="creator_id">    
                                                         <input type="hidden" name="donator_id" id="donator_id" value="<?php echo $this->session->userdata('user_id'); ?>">    
                                                     </form>  
                                                        <div class="dct-dash-details">
                                                                <a href="#" class="btn btn-secondary btn-lg btn-block" onclick="pay_now()">Donate</a>
                                                            </div>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="row">
                                                
                                                <div class="col-md-12">
                                                        <h3 class="m-t-30 m-b-30"> Checkout Tech lead's Story </h3>  
                                                </div>
                                                <div class="col-md-12" id="ajax_videos"></div>
                                        </div>
                                </form>
                        </div>
                    </div>
                </div>
            </div>










    <!-- footer section -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                    <!-- footer-widget -->
                    <div class="footer-widget">
                        <h3 class="footer-widget-title">
                            Overview
                        </h3>
                        <p>BoostZone is a platform design to help digital content creators build relationships and provide their best content to their most die hard supporters.</p>
                    </div>
                </div>
                <!-- /.footer-widget -->
                
                <!-- footer-widget -->
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-6">
                    <div class="footer-widget">
                        <h3 class="footer-widget-title">
                            We are here too
                        </h3>
                        <ul class="list-unstyled">
                            <li><a href="#">Facebook </a></li>
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#">Linked In</a>
                            </li>
                            <li><a href="#">Slack</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /.footer-widget -->
                                <!-- footer-widget -->
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-6">
                    <div class="footer-widget">
                        <h3 class="footer-widget-title">
                        BoostZone Account
                        </h3>
                        <ul class="list-unstyled">
                            <li><a href="https://Boostzone.xyz/login">Login</a></li>
                            <li><a href="https://Boostzone.xyz/register">Register</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /.footer-widget -->
                <!-- footer-widget -->
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-6">
                    <div class="footer-widget">
                        <h3 class="footer-widget-title">
                            Navigation
                        </h3>
                        <ul class="list-unstyled ">
                            <li><a href="https://Boostzone.xyz">Home</a></li>
                            <li><a href="https://Boostzone.xyz/about-us">About us</a></li>
                            <li><a href="https://Boostzone.xyz/contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /.footer-widget -->
                <!-- footer-widget -->
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="footer-widget">
                        <h3 class="footer-widget-title">
                            Contact
                        </h3>
                        <ul class="list-unstyled ">
                            <li>+0 123456789</li>
                            <li>contact@BoostZone.com</li>
                        </ul>
                        <p> 6 Taylors Close, Dawlish, Devon EX7 9SS</p>
                    </div>
                </div>
                <!-- /.footer-widget -->
            </div>
            <!--<div class="row">-->
            <!--    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">-->
                    <!-- tiny footer section -->
            <!--        <div class="tiny-footer-dark">-->
            <!--            <p>BoostZone is not affiliated with any companies mentioned as users of our product. All other trademarks and copyrights are property of their respective owners.</p>-->
            <!--            <ul class="list-unstyled">-->
            <!--                <li><a href="#">© BoostZone 2020</a> </li>-->
            <!--                <li><a href="#"> Privacy Policy</a></li>-->
            <!--                <li><a href="#"> Terms of Service</a></li>-->
            <!--            </ul>-->
            <!--        </div>-->
                    <!-- tiny footer section -->
            <!--    </div>-->
            <!--    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">-->
            <!--    	<p class="t-center p-t-20">Klodovsky</p>-->
            <!--    </div>-->
            <!--</div>-->
        </div>
    </div>
    <!-- footer section -->
    <a href="javascript:" id="return-to-top" class="returntotop"><i class="fa fa-angle-up"></i></a>
    <script type="text/javascript">

                function isNumberKey(evt){
                var charCode = (evt.which) ? evt.which : evt.keyCode
                return !(charCode > 31 && (charCode < 48 || charCode > 57));
                }
    </script>