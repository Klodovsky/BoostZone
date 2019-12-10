<div class="space-medium p-t-185 ">
        <div class="container">
            <div class="row">
                <!-- Contact Left Side -->
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="contact-block-v1 contact-block">
                        <div class="contact-content">
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

                            <h1 class="contact-content-title" data-aos="fade-up">Contact Info</h1>
                            <p data-aos="fade-up">
                                Fringilla suscipit exquet vitae ante accumsan, malesuada euismod sed lorem nunc, id posuere lect ndimentucus enim.
                            </p>
                            <div class="row">
                                <!-- Contact widget -->
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12" data-aos="fade-up">
                                    <div class="contact-widget">
                                        <div class="contact-widget-icon">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </div>
                                        <div class="contact-widget-content">
                                            <h4 class="contact-widget-content-title">Location</h4>
                                            <p>
                                                903A, Unitech Arcadia, South City II, Gurgaon, Haryana - 122009
                                            </p>
                                        </div>
                                    </div>
                                    <!-- Contact widget -->
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12" data-aos="fade-up">
                                    <!-- Contact widget -->
                                    <div class="contact-widget">
                                        <div class="contact-widget-icon">
                                            <i class="fas fa-phone"></i>
                                        </div>
                                        <div class="contact-widget-content">
                                            <h4 class="contact-widget-content-title">Contact</h4>
                                            <p>
                                                <span>+0 123456789</span>
                                              
                                            </p>
                                        </div>
                                    </div>
                                    <!-- Contact widget -->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12" data-aos="fade-up">
                                    <!-- Contact widget -->
                                    <div class="contact-widget">
                                        <div class="contact-widget-icon">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <div class="contact-widget-content">
                                            <h4 class="contact-widget-content-title">Email</h4>
                                            <p>
                                                info@BoostZone.com
                                            </p>
                                        </div>
                                    </div>
                                    <!-- Contact widget -->
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12" data-aos="fade-up">
                                    <!-- Contact widget -->
                                    <div class="contact-widget">
                                        <div class="contact-widget-icon">
                                            <i class="fas fa-share-alt"></i>
                                        </div>
                                        <div class="contact-widget-content">
                                            <h4 class="contact-widget-content-title">Social Media</h4>
                                            <div class="social-media aos-init aos-animate">
                                                <ul>
                                                    <li><a href="#" class="social-icon social-icon-small social-rounded social-facebook"><i class="fab fa-facebook-f fa-fw"></i></a></li>
                                                    <li><a href="#" class="social-icon social-icon-small social-rounded social-twitter"><i class="fab fa-twitter fa-fw"></i></a></li>
                                                    <li><a href="#" class="social-icon social-icon-small social-rounded social-linkedin"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
                                                    <li><a href="#" class="social-icon social-icon-small social-rounded social-youtube"><i class="fab fa-youtube fa-fw"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Contact widget -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <img src="<?php echo base_url(); ?>assets/images/hero-banking-app-img.png" alt="" class="img-fluid">
                </div>
            </div>
            <div class="row">
                    <div class="col-12">

                        <h2 class="contact-content-title" data-aos="fade-up">Get In Touch</h2>
                        <!-- Contact form -->
                        <form class="contact-form" action="<?php echo base_url(); ?>home/send_mail" method="post" data-aos="fade-up">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" aria-describedby="name" placeholder="Name" required="" name="name">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 ">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="email" aria-describedby="email" placeholder="Email" required="" name="email">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="phone" aria-describedby="phone" placeholder="Phone" required="" name="phone">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="subject" aria-describedby="subject" placeholder="Subject" required="" name="subject">
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="form-group">
                                        <textarea class="form-control" rows="4" id="textarea" placeholder="Messages" required name="message"></textarea>
                                    </div>
                                </div>
                                <!-- Button -->
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <button id="singlebutton"  class="btn btn-brand">Send Message</button>
                                </div>
                            </div>
                        </form>
                        <!-- Contact form -->
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
                            <li><a href="<?php echo base_url(); ?>login">Login</a></li>
                            <li><a href="<?php echo base_url(); ?>register">Register</a>
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
                            <li><a href="<?php echo base_url(); ?>">Home</a></li>
                            <li><a href="<?php echo base_url(); ?>about-us">About us</a></li>
                            <li><a href="<?php echo base_url(); ?>contact">Contact</a></li>
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