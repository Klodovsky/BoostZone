<div class="space-medium p-t-200">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <!-- section heading start -->
                    <div class="section-heading" data-aos="fade-up">
                        <h1 class="display-4 m-b-30 font-weight-bold">What is BoostZone?</h1>
                        <div class="simple-para">
                            <p>BoostZone is a nonprofit platform designed to help digital content creators build relationships and provide their best content to their most die hard supporters. With BoostZone, creators can now just focus on creating quality content and build momentum around their community.
                            </p>
                        </div>
                    </div>
                    <!-- section heading close -->
                </div>
            </div>
        </div>
        <!-- about us end -->
        <!-- split container start -->
        <div class="split-container container-fluid">
            <div class="row">
                <div class="col-xl-6 split-left-img-second" data-aos="fade-up">
                </div>
                <div class="col-xl-6 split-right-img-second" data-aos="fade-down">
                </div>
            </div>
        </div>
    </div>
    <!-- counter section start -->
    <div class="space-medium pt-0">
        <div class="container-fluid pl-0">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="section-heading text-center" data-aos="fade-up">
                        
                        
                    </div>
                </div>
            </div>
            
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="team-member-img " data-aos="fade-up">
                    </div>
                </div>
                
            </div>
        </div>
    </div>
                 <!-- cta section start -->
    <div class="cta-section-v4 cta-section">
        <div class="container">
            <div class="row">
                <div class="offset-xl-3 col-xl-6 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="cta-section-content" data-aos="zoom-in">
                        <h2 class="cta-section-title" style="margin-bottom: 30px;">Subscribe</h2>
                        <!--<p>Aenean accumsan enim nec nisi porttitor, ac efficitur nunc ornare. Vestibulum imperdiet sed purus hendrerit sollicitudin.</p>-->
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

                        <form action="<?php echo base_url(); ?>home/add_subscribtion" method="post">
                            <div class="form-row">
                                <div class="form-group col-md-9">
                                    <input type="email" name="email" class="form-control" placeholder="Enter Your Email Address">
                                </div>
                                <div class="form-group col-md-3">
                                    <button type="submit" class="btn btn-secondary">Subscribe</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cta section close -->
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
                        <p>10769 Trophy Drive,Englewood, Florida - 34223</p>
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
    <script src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/main-js.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/aos.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/return-to-top.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/aos-function.js"></script>
</body>

</html>