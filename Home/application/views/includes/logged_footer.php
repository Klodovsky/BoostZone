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
                        <p>BoostZone is a nonprofit platform design to help digital content creators build relationships and provide their best content to their most die hard supporters.</p>
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
                        <p>10769 Trophy Drive, Englewood, Florida - 34223</p>
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
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- js count to -->
    <script src="<?php echo base_url();?>assets/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/main-js.js"></script>
    <script src="<?php echo base_url();?>assets/js/aos.js"></script>
    <script src="<?php echo base_url();?>assets/js/return-to-top.js"></script>
    <script src="<?php echo base_url();?>assets/js/aos-function.js"></script>
    <script type="text/javascript">
         $('#profile_form').submit(function(){

                var password = $('#password').val();
                var confirm_password = $('#confirm_password').val();
                if(password != confirm_password){
                alert('Confirm password should be same!');
                return false;   
                }
        });
    </script>
    <?php if(is_creator()): ?>
    <script>
       
    
   
  

            $('#first_name').keyup(function(){
                var name = $(this).val();
                $('.first').text(name);
            });
            $('#last_name').keyup(function(){
                var name = $(this).val();
                $('.last').text(name);
            });
            $('#channel_name').keyup(function(){
                var name = $(this).val();
                $('.channel').text(name);
            });
            $('#year').keyup(function(){
                var name = $(this).val();
                $('.year').text('From '+name);
            });
            $('#description').keyup(function(){
                var name = $(this).val();
                $('.description').text(name);
            });

    </script>
<?php endif; ?>
<?php if(is_admin()){ ?>
    <script type="text/javascript">
        $(document).ready(function () {
        $("#select_all").click(function () {
            $(".check").attr('checked', this.checked);
        });
    });
        $('#profile_form').submit(function(){            
                var pwd = $('#password').val();
                var cnfm_password = $('#cnfm_password').val();
                if(pwd != cnfm_password){
                    alert('Password does not match!');
                    return false;
                }
            });
    </script>
<?php } ?>

<script>
    $(function () {
        $('#search').on('keyup', function () {
            var pattern = $(this).val();
            $('.items-collection .items').hide();
            $('.items-collection .items').filter(function () {
                return $(this).text().match(new RegExp(pattern, 'i'));
            }).show();
        });
    });
    </script>
</body>

</html>