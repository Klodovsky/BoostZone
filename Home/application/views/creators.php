<div class="space-medium p-t-120">
            <div class="container-fluid">
                <div class="portfolio filter-gallery">
                    <div class="filters">
                        <ul>
                            <!-- <li class="active" data-filter="*">All</li> -->
                            <!-- <li data-filter=".portal">Twitch</li> -->
                            <li data-filter=".corporate" data-type="youtube" onclick="if (!window.__cfRLUnblockHandlers) return false; set_data(this)" class="active">Youtube</li>
                            <!--<li data-filter=".personal" data-type="instagram" onclick="set_data(this)">Instagram</li>-->
                            <!--<li data-filter=".agency" data-type="twitter" onclick="set_data(this)">Twitter</li>-->
                            <!--<li data-filter=".portal" data-type="soundcloud" onclick="set_data(this)">SoundCloud</li>-->
                            <!--<li data-filter=".portal" data-type="tiktok" onclick="set_data(this)">Tik Tok</li>-->

                        </ul>
                    </div>
                    <input type="hidden" id="type" value="youtube">
                    <script type="text/javascript">
                        function set_data(element){
                            var type = element.getAttribute('data-type');
                             $('#type').val(type);
                        }
                        function go_url(element){
                            var type = $('#type').val();
                            var cat = element.getAttribute('data-cat'); 
                            window.location.href="<?php echo base_url(); ?>view_all_creators/videos/"+cat+'/'+type;
                        }
                    </script>
                    <div class="filters-content">
                        <div class="row grid">                           
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 all portal">
                                <a href="#" onclick="go_url(this)" data-cat="10">
                                    <div class="item " data-aos="10">
                                        <img src="<?php echo base_url(); ?>assets/images/category/Fashion-and-Beauty.png" alt="" class="img-fluid">
                                        <div class="item-overlay" style="    opacity: 1; display:none;">
                                            <div class="item-overlay-text">
                                                <h3>Fashion and Beauty</h3>
                                                <p>Fashion and Beauty</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 all portal">
                                <a href="#" onclick="go_url(this)" data-cat="11">
                                    <div class="item " data-aos="11">
                                        <img src="<?php echo base_url(); ?>assets/images/category/Travel.png" alt="" class="img-fluid">
                                        <div class="item-overlay" style="    opacity: 1; display:none;">
                                            <div class="item-overlay-text">
                                                <h3>Travel</h3>
                                                <p>Travel</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 all portal">
                                <a href="#" onclick="go_url(this)" data-cat="12">
                                    <div class="item " data-aos="13">
                                        <img src="<?php echo base_url(); ?>assets/images/category/Pets.png" alt="" class="img-fluid">
                                        <div class="item-overlay" style="    opacity: 1; display:none;">
                                            <div class="item-overlay-text">
                                                <h3>Pets</h3>
                                                <p>Pets</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 all portal">
                                <a href="#" onclick="go_url(this)" data-cat="Health and Fitness">
                                    <div class="item " data-aos="14">
                                        <img src="<?php echo base_url(); ?>assets/images/category/Health-and-Fitness.png" alt="" class="img-fluid">
                                        <div class="item-overlay" style="    opacity: 1; display:none;">
                                            <div class="item-overlay-text">
                                                <h3>Health and Fitness</h3>
                                                <p>Health and Fitness</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 all portal">
                                <a href="#" onclick="go_url(this)" data-cat="14">
                                    <div class="item " data-aos="15">
                                        <img src="<?php echo base_url(); ?>assets/images/category/Food-and-Drink.png" alt="" class="img-fluid">
                                        <div class="item-overlay" style="    opacity: 1; display:none;">
                                            <div class="item-overlay-text">
                                                <h3>Food and Drinks </h3>
                                                <p>Food and Drinks </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 all portal">
                                <a href="#" onclick="go_url(this)" data-cat="15">
                                    <div class="item " data-aos="16">
                                        <img src="<?php echo base_url(); ?>assets/images/category/Technology.png" alt="" class="img-fluid">
                                        <div class="item-overlay" style="    opacity: 1; display:none;">
                                            <div class="item-overlay-text">
                                                <h3>Technology</h3>
                                                <p>Technology</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 all portal">
                                <a href="#" onclick="go_url(this)" data-cat="16">
                                    <div class="item " data-aos="17">
                                        <img src="<?php echo base_url(); ?>assets/images/category/Sports.png" alt="" class="img-fluid">
                                        <div class="item-overlay" style="    opacity: 1; display:none;">
                                            <div class="item-overlay-text">
                                                <h3>Sports</h3>
                                                <p>Sports</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 all portal">
                                <a href="#" onclick="go_url(this)" data-cat="17">
                                    <div class="item " data-aos="18">
                                        <img src="<?php echo base_url(); ?>assets/images/category/Business-and-Finance.png" alt="" class="img-fluid">
                                        <div class="item-overlay" style="    opacity: 1; display:none;">
                                            <div class="item-overlay-text">
                                                <h3>Business and Finance </h3>
                                                <p>Business and Finance </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 all portal">
                                <a href="#" onclick="go_url(this)" data-cat="18">
                                    <div class="item " data-aos="19">
                                        <img src="<?php echo base_url(); ?>assets/images/category/Architecture-and-Design.png" alt="" class="img-fluid">
                                        <div class="item-overlay" style="    opacity: 1; display:none;">
                                            <div class="item-overlay-text">
                                                <h3>Architecture and Design</h3>
                                                <p>Architecture and Design</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 all portal">
                                <a href="#" onclick="go_url(this)" data-cat="19">
                                    <div class="item " data-aos="20">
                                        <img src="<?php echo base_url(); ?>assets/images/category/Automative.png" alt="" class="img-fluid">
                                        <div class="item-overlay" style="    opacity: 1; display:none;">
                                            <div class="item-overlay-text">
                                                <h3>Automotive</h3>
                                                <p>Automotive</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 all portal">
                                <a href="#" onclick="go_url(this)" data-cat="20">
                                    <div class="item " data-aos="21">
                                        <img src="<?php echo base_url(); ?>assets/images/category/Music.png" alt="" class="img-fluid">
                                        <div class="item-overlay" style="    opacity: 1; display:none;">
                                            <div class="item-overlay-text">
                                                <h3>Music</h3>
                                                <p>Music</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 all portal">
                                <a href="#" onclick="go_url(this)" data-cat="21">
                                    <div class="item " data-aos="22">
                                        <img src="<?php echo base_url(); ?>assets/images/category/Art.png" alt="" class="img-fluid">
                                        <div class="item-overlay" style="    opacity: 1; display:none;">
                                            <div class="item-overlay-text">
                                                <h3>Art</h3>
                                                <p>Art</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 all portal">
                                <a href="#" onclick="go_url(this)" data-cat="22">
                                    <div class="item " data-aos="23">
                                        <img src="<?php echo base_url(); ?>assets/images/category/Photography.png" alt="" class="img-fluid">
                                        <div class="item-overlay" style="    opacity: 1; display:none;">
                                            <div class="item-overlay-text">
                                                <h3>Photography</h3>
                                                <p>Photography</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 all portal">
                                <a href="#" onclick="go_url(this)" data-cat="23">
                                    <div class="item " data-aos="24">
                                        <img src="<?php echo base_url(); ?>assets/images/category/Gaming.png" alt="" class="img-fluid">
                                        <div class="item-overlay" style="    opacity: 1; display:none;">
                                            <div class="item-overlay-text">
                                                <h3>Gaming</h3>
                                                <p>Gaming</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 all portal">
                                <a href="#" onclick="go_url(this)" data-cat="24">
                                    <div class="item " data-aos="25">
                                        <img src="<?php echo base_url(); ?>assets/images/category/Education.png" alt="" class="img-fluid">
                                        <div class="item-overlay" style="    opacity: 1; display:none;">
                                            <div class="item-overlay-text">
                                                <h3>Education</h3>
                                                <p>Education</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 all portal">
                                <a href="#" onclick="go_url(this)" data-cat="25">
                                    <div class="item " data-aos="26">
                                        <img src="<?php echo base_url(); ?>assets/images/category/Self-Motivation.png" alt="" class="img-fluid">
                                        <div class="item-overlay" style="    opacity: 1; display:none;">
                                            <div class="item-overlay-text">
                                                <h3>Self Improvement and Motivation</h3>
                                                <p>Self Improvement and Motivation</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 all portal">
                                <a href="#" onclick="go_url(this)" data-cat="26">
                                    <div class="item " data-aos="27">
                                        <img src="<?php echo base_url(); ?>assets/images/category/Fan-Fiction.png" alt="" class="img-fluid">
                                        <div class="item-overlay" style="    opacity: 1; display:none;">
                                            <div class="item-overlay-text">
                                                <h3>Fan Fiction</h3>
                                                <p>Fan Fiction</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
