 <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/sweetalert2.css">
<script src="<?php echo base_url(); ?>assets/js/sweetalert2.js"></script>
 <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
 <section class="testimonial">
        <div class="testimonial opacity">
            <div class="container">
                
                <div class="row">
                    <div class="testimonial-slider">
                        <?php if(!empty($creators)){
                        foreach($creators as $c): ?>
                        <div class="item" data-aos="zoom-in">
                            <div class="name">
                                <div class="img">
                                    <!-- <a href="#" class="tran3s youtube">
                                        <img src="<?php echo base_url(); ?>assets/images/home/youtube.png" style="width: 24px" alt=""> 
                                    </a>-->
                                    <img src="<?php echo $c['picture']; ?>" alt="" style="width:120px;">
                                </div>
                                <h5><?php echo $c['name']; ?></h5>
                                <span><?php  
                                        echo  $this->db
                                        ->get_where('like_details',array('creator_id'=>$c['user_id']))
                                        ->num_rows();
                                        
                                         ?> likes</span>
                            </div> <!-- /.name -->
                            <p style="height: 115px; overflow: hidden;"><?php echo $c['description']; ?></p>
                            <!-- <a href="<?php echo base_url().'view_all_creators/view_videos/'.$this->uri->segment(3).'/'.$this->uri->segment(4 ); ?>" data-toggle="modal" data-target="#creator-popup-view" class="p-bg-color theme-button-1 hvr-float-shadow">view</a> -->
                            <a href="javascript:void(0)" onclick="get_modal(<?php echo $c['media_id'] ?>)"  class="p-bg-color theme-button-1 hvr-float-shadow">Support Now</a>
                        </div> <!-- /.item -->
                        <?php 
                            endforeach; 
                           }else{
                            echo 'Sorry No Videos found in this category ! Click here to go back! <button onclick="history.back();" class="btn btn-primary">Go Back</button>';
                           }
                            ?>
                    </div> <!-- /.testimonial-slider -->
                </div> <!-- /.row -->
                
            </div> <!-- /.container -->
        </div> <!-- /.opacity -->
    </section> <!-- /.testimonial -->


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
                                                                <h3 id="creator_name">Smile Settai</h3>
                                                                <p id="channel_name">Youtube Channel<br>
                                                                    <span id="year">From 2012</span></p>
                                                                <a href="#" class="btn btn-secondary btn-lg btn-block" onclick="like_now()" id="like">Follow Channel</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <div class="col-md-7 col-sm-6 dct-dashbd-02">
                                                        <div class="form-group">
                                                        <h3 class="m-t-10">Description</h3>
                                                        <p id="description">Welcome to Smile Settai Version 2.0 ! Want to know if that latest movie is worth watching, go watch our Dumbest Reviews, a unique movie review format where...  </p>
                                                        <form action="#" method="get" id="nameform" onsubmit="pay_now()">
                                                         <input type="number"  class="input-pay" id="amount" placeholder="Enter amount" onkeypress="return isNumberKey(event)">
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
                                                        <h3 class="m-t-30 m-b-30">Checkout Alan's Story</h3>  
                                                </div>
                                                <div class="col-md-12" id="ajax_videos"></div>
                                        </div>
                                </form>
                        </div>
                    </div>
                </div>
            </div>



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
    "key": "rzp_live_o5BdNyfXrIGLTQ",
    // "key": "rzp_test_XK8lan4c1Patvx",
    "amount": (totalAmount*100), // 2000 paise = INR 20
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


function isNumberKey(evt){
                var charCode = (evt.which) ? evt.which : evt.keyCode
                return !(charCode > 31 && (charCode < 48 || charCode > 57));
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
                $('#picture').attr('src',this.picture);
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
                            Boostzone Account
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
                        <p>903A, Unitech Arcadia, South City II, Gurgaon, Haryana - 122009</p>
                    </div>
                </div>
                <!-- /.footer-widget -->
            </div>
            <div class="row">
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">
                    <!-- tiny footer section -->
                    <div class="tiny-footer-dark">
                        <p>BoostZone is not affiliated with any companies mentioned as users of our product. All other trademarks and copyrights are property of their respective owners.</p>
                        <ul class="list-unstyled">
                            <li><a href="#">© BoostZone 2020</a> </li>
                            <li><a href="#"> Privacy Policy</a></li>
                            <li><a href="#"> Terms of Service</a></li>
                        </ul>
                    </div>
                    <!-- tiny footer section -->
                </div>
            </div>
        </div>
    </div>
    <!-- footer section -->
    <a href="javascript:" id="return-to-top" class="returntotop"><i class="fa fa-angle-up"></i></a>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- js count to -->
    <script src="<?php echo base_url(); ?>js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>js/main-js.js"></script>
    <script src="<?php echo base_url(); ?>js/aos.js"></script>
    <script src="<?php echo base_url(); ?>js/return-to-top.js"></script>
    <script src="<?php echo base_url(); ?>js/aos-function.js"></script>

</body>

</html>