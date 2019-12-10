<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style1.css">
<style type="text/css">
    body{
            font-family: 'Poppins', sans-serif;
    }
</style>
<?php 
    $categories = array();
    if(!empty($category)){
        foreach($category as $c){
            $categories[] =$c['category_id']; 
        }
    }
 ?>
<div class="container">        
        <div class="row">        
        <div class="col-12 form-group">
            <form id="category_form" action="<?php echo base_url(); ?>category/update_category" method="post" >
            <div class="items-collection">
                <div class="items col-xs-6 col-sm-3 col-md-3 col-lg-3">
                    <div class="info-block block-info clearfix">
                        <div data-toggle="buttons" class="btn-group itemcontent">
                            <label style="padding:5px !important; border: 0px !important;" class="btn btn-default <?php if(!empty($categories)){
                                        if(in_array(10,$categories)){
                                            echo 'active';
                                        }
                                    } ?>">
                                <div class="itemcontent item aos-init aos-animate" data-aos="fade-up">
                                    
                                    <input type="checkbox" name="category_id[]" autocomplete="off" value="10" <?php if(!empty($categories)){
                                        if(in_array(10,$categories)){
                                            echo 'checked="checked"';
                                        }
                                    } ?>>
                                    <img src="<?php echo base_url(); ?>assets/images/category/Fashion-and-Beauty.png" alt="" class="img-fluid " style="border-radius: 10px;">
                                    <h5></h5>
                                    <div class="item-overlay" style="opacity: 1 !important; background: rgba(112, 112, 112, 0); ">
                                            <div class="item-overlay-text">
                                                <h3 style="display:none;">Fashion & Beauty</h3>
                                            </div>
                                        </div>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="items col-xs-6 col-sm-3 col-md-3 col-lg-3">
                    <div class="info-block block-info clearfix">
                        <div data-toggle="buttons" class="btn-group itemcontent">
                            <label style="padding:5px !important; border: 0px !important;" class="btn btn-default <?php if(!empty($categories)){
                                        if(in_array(11,$categories)){
                                            echo 'active';
                                        }
                                    } ?>">
                                <div class="itemcontent item aos-init aos-animate" data-aos="fade-up">
                                    
                                    <input type="checkbox" name="category_id[]" autocomplete="off" value="11" <?php if(!empty($categories)){
                                        if(in_array(11,$categories)){
                                            echo 'checked="checked"';
                                        }
                                    } ?>>
                                    <img src="<?php echo base_url(); ?>assets/images/category/Travel.png" alt="" class="img-fluid " style="border-radius: 10px;">
                                    <h5></h5>
                                    <div class="item-overlay" style="opacity: 1 !important; background: rgba(112, 112, 112, 0); ">
                                            <div class="item-overlay-text">
                                                <h3 style="display:none;">Travel</h3>
                                            </div>
                                        </div>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="items col-xs-6 col-sm-3 col-md-3 col-lg-3">
                    <div class="info-block block-info clearfix">
                        <div data-toggle="buttons" class="btn-group itemcontent">
                            <label style="padding:5px !important; border: 0px !important;" class="btn btn-default <?php if(!empty($categories)){
                                        if(in_array(12,$categories)){
                                            echo 'active';
                                        }
                                    } ?>">
                                <div class="itemcontent item aos-init aos-animate" data-aos="fade-up">
                                    
                                    <input type="checkbox" name="category_id[]" autocomplete="off" value="12" <?php if(!empty($categories)){
                                        if(in_array(12,$categories)){
                                            echo 'checked="checked"';
                                        }
                                    } ?>>
                                    <img src="<?php echo base_url(); ?>assets/images/category/Pets.png" alt="" class="img-fluid " style="border-radius: 10px;">
                                    <h5></h5>
                                    <div class="item-overlay" style="opacity: 1 !important; background: rgba(112, 112, 112, 0); ">
                                            <div class="item-overlay-text">
                                                <h3 style="display:none;">Pets</h3>
                                            </div>
                                        </div>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="items col-xs-6 col-sm-3 col-md-3 col-lg-3">
                    <div class="info-block block-info clearfix">
                        <div data-toggle="buttons" class="btn-group itemcontent">
                            <label style="padding:5px !important; border: 0px !important;" class="btn btn-default <?php if(!empty($categories)){
                                        if(in_array(13,$categories)){
                                            echo 'active';
                                        }
                                    } ?>">
                                <div class="itemcontent item aos-init aos-animate" data-aos="fade-up">
                                    
                                    <input type="checkbox" name="category_id[]" autocomplete="off" value="13" <?php if(!empty($categories)){
                                        if(in_array(13,$categories)){
                                            echo 'checked="checked"';
                                        }
                                    } ?>>
                                    <img src="<?php echo base_url(); ?>assets/images/category/Health-and-Fitness.png" alt="" class="img-fluid " style="border-radius: 10px;">
                                    <h5></h5>
                                    <div class="item-overlay" style="opacity: 1 !important; background: rgba(112, 112, 112, 0); ">
                                            <div class="item-overlay-text">
                                                <h3 style="display:none;">Health and Fitness</h3>
                                            </div>
                                        </div>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="items col-xs-6 col-sm-3 col-md-3 col-lg-3">
                    <div class="info-block block-info clearfix">
                        <div data-toggle="buttons" class="btn-group itemcontent">
                            <label style="padding:5px !important; border: 0px !important;" class="btn btn-default <?php if(!empty($categories)){
                                        if(in_array(14,$categories)){
                                            echo 'active';
                                        }
                                    } ?>">
                                <div class="itemcontent item aos-init aos-animate" data-aos="fade-up">
                                    
                                    <input type="checkbox" name="category_id[]" autocomplete="off" value="14" <?php if(!empty($categories)){
                                        if(in_array(14,$categories)){
                                            echo 'checked="checked"';
                                        }
                                    } ?>>
                                    <img src="<?php echo base_url(); ?>assets/images/category/Food-and-Drink.png" alt="" class="img-fluid " style="border-radius: 10px;">
                                    <h5></h5>
                                    <div class="item-overlay" style="opacity: 1 !important; background: rgba(112, 112, 112, 0); ">
                                            <div class="item-overlay-text">
                                                <h3 style="display:none;">Food and Drinks </h3>
                                            </div>
                                        </div>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="items col-xs-6 col-sm-3 col-md-3 col-lg-3">
                    <div class="info-block block-info clearfix">
                        <div data-toggle="buttons" class="btn-group itemcontent">
                            <label style="padding:5px !important; border: 0px !important;" class="btn btn-default <?php if(!empty($categories)){
                                        if(in_array(15,$categories)){
                                            echo 'active';
                                        }
                                    } ?>">
                                <div class="itemcontent item aos-init aos-animate" data-aos="fade-up">
                                    
                                    <input type="checkbox" name="category_id[]" autocomplete="off" value="15" <?php if(!empty($categories)){
                                        if(in_array(15,$categories)){
                                            echo 'checked="checked"';
                                        }
                                    } ?>>
                                    <img src="<?php echo base_url(); ?>assets/images/category/Technology.png" alt="" class="img-fluid " style="border-radius: 10px;">
                                    <h5></h5>
                                    <div class="item-overlay" style="opacity: 1 !important; background: rgba(112, 112, 112, 0); ">
                                            <div class="item-overlay-text">
                                                <h3 style="display:none;">Technology</h3>
                                            </div>
                                        </div>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="items col-xs-6 col-sm-3 col-md-3 col-lg-3">
                    <div class="info-block block-info clearfix">
                        <div data-toggle="buttons" class="btn-group itemcontent">
                            <label style="padding:5px !important; border: 0px !important;" class="btn btn-default <?php if(!empty($categories)){
                                        if(in_array(16,$categories)){
                                            echo 'active';
                                        }
                                    } ?>">
                                <div class="itemcontent item aos-init aos-animate" data-aos="fade-up">
                                    
                                    <input type="checkbox" name="category_id[]" autocomplete="off" value="16" <?php if(!empty($categories)){
                                        if(in_array(16,$categories)){
                                            echo 'checked="checked"';
                                        }
                                    } ?>>
                                    <img src="<?php echo base_url(); ?>assets/images/category/Sports.png" alt="" class="img-fluid " style="border-radius: 10px;">
                                    <h5></h5>
                                    <div class="item-overlay" style="opacity: 1 !important; background: rgba(112, 112, 112, 0); ">
                                            <div class="item-overlay-text">
                                                <h3 style="display:none;">Sports</h3>
                                            </div>
                                        </div>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="items col-xs-6 col-sm-3 col-md-3 col-lg-3">
                    <div class="info-block block-info clearfix">
                        <div data-toggle="buttons" class="btn-group itemcontent">
                            <label style="padding:5px !important; border: 0px !important;" class="btn btn-default <?php if(!empty($categories)){
                                        if(in_array(17,$categories)){
                                            echo 'active';
                                        }
                                    } ?>">
                                <div class="itemcontent item aos-init aos-animate" data-aos="fade-up">
                                    
                                    <input type="checkbox" name="category_id[]" autocomplete="off" value="17" <?php if(!empty($categories)){
                                        if(in_array(17,$categories)){
                                            echo 'checked="checked"';
                                        }
                                    } ?>>
                                    <img src="<?php echo base_url(); ?>assets/images/category/Business-and-Finance.png" alt="" class="img-fluid " style="border-radius: 10px;">
                                    <h5></h5>
                                    <div class="item-overlay" style="opacity: 1 !important; background: rgba(112, 112, 112, 0); ">
                                            <div class="item-overlay-text">
                                                <h3 style="display:none;">Business</h3>
                                            </div>
                                        </div>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="items col-xs-6 col-sm-3 col-md-3 col-lg-3">
                    <div class="info-block block-info clearfix">
                        <div data-toggle="buttons" class="btn-group itemcontent">
                            <label style="padding:5px !important; border: 0px !important;" class="btn btn-default <?php if(!empty($categories)){
                                        if(in_array(18,$categories)){
                                            echo 'active';
                                        }
                                    } ?>">
                                <div class="itemcontent item aos-init aos-animate" data-aos="fade-up">
                                    
                                    <input type="checkbox" name="category_id[]" autocomplete="off" value="18" <?php if(!empty($categories)){
                                        if(in_array(18,$categories)){
                                            echo 'checked="checked"';
                                        }
                                    } ?>>
                                    <img src="<?php echo base_url(); ?>assets/images/category/Architecture-and-Design.png" alt="" class="img-fluid " style="border-radius: 10px;">
                                    <h5></h5>
                                    <div class="item-overlay" style="opacity: 1 !important; background: rgba(112, 112, 112, 0); ">
                                            <div class="item-overlay-text">
                                                <h3 style="display:none;">Architecture</h3>
                                            </div>
                                        </div>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="items col-xs-6 col-sm-3 col-md-3 col-lg-3">
                    <div class="info-block block-info clearfix">
                        <div data-toggle="buttons" class="btn-group itemcontent">
                            <label style="padding:5px !important; border: 0px !important;" class="btn btn-default <?php if(!empty($categories)){
                                        if(in_array(19,$categories)){
                                            echo 'active';
                                        }
                                    } ?>">
                                <div class="itemcontent item aos-init aos-animate" data-aos="fade-up">
                                    
                                    <input type="checkbox" name="category_id[]" autocomplete="off" value="19" <?php if(!empty($categories)){
                                        if(in_array(19,$categories)){
                                            echo 'checked="checked"';
                                        }
                                    } ?>>
                                    <img src="<?php echo base_url(); ?>assets/images/category/Automative.png" alt="" class="img-fluid " style="border-radius: 10px;">
                                    <h5></h5>
                                    <div class="item-overlay" style="opacity: 1 !important; background: rgba(112, 112, 112, 0); ">
                                            <div class="item-overlay-text">
                                                <h3 style="display:none;">Automotive</h3>
                                            </div>
                                        </div>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="items col-xs-6 col-sm-3 col-md-3 col-lg-3">
                    <div class="info-block block-info clearfix">
                        <div data-toggle="buttons" class="btn-group itemcontent">
                            <label style="padding:5px !important; border: 0px !important;" class="btn btn-default <?php if(!empty($categories)){
                                        if(in_array(20,$categories)){
                                            echo 'active';
                                        }
                                    } ?>">
                                <div class="itemcontent item aos-init aos-animate" data-aos="fade-up">
                                    
                                    <input type="checkbox" name="category_id[]" autocomplete="off" value="20" <?php if(!empty($categories)){
                                        if(in_array(20,$categories)){
                                            echo 'checked="checked"';
                                        }
                                    } ?>>
                                    <img src="<?php echo base_url(); ?>assets/images/category/Music.png" alt="" class="img-fluid " style="border-radius: 10px;">
                                    <h5></h5>
                                    <div class="item-overlay" style="opacity: 1 !important; background: rgba(112, 112, 112, 0); ">
                                            <div class="item-overlay-text">
                                                <h3 style="display:none;">Music</h3>
                                            </div>
                                        </div>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="items col-xs-6 col-sm-3 col-md-3 col-lg-3">
                    <div class="info-block block-info clearfix">
                        <div data-toggle="buttons" class="btn-group itemcontent">
                            <label style="padding:5px !important; border: 0px !important;" class="btn btn-default <?php if(!empty($categories)){
                                        if(in_array(21,$categories)){
                                            echo 'active';
                                        }
                                    } ?>">
                                <div class="itemcontent item aos-init aos-animate" data-aos="fade-up">
                                    
                                    <input type="checkbox" name="category_id[]" autocomplete="off" value="21" <?php if(!empty($categories)){
                                        if(in_array(21,$categories)){
                                            echo 'checked="checked"';
                                        }
                                    } ?>>
                                    <img src="<?php echo base_url(); ?>assets/images/category/Art.png" alt="" class="img-fluid " style="border-radius: 10px;">
                                    <h5></h5>
                                    <div class="item-overlay" style="opacity: 1 !important; background: rgba(112, 112, 112, 0); ">
                                            <div class="item-overlay-text">
                                                <h3 style="display:none;">Art</h3>
                                            </div>
                                        </div>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="items col-xs-6 col-sm-3 col-md-3 col-lg-3">
                    <div class="info-block block-info clearfix">
                        <div data-toggle="buttons" class="btn-group itemcontent">
                            <label style="padding:5px !important; border: 0px !important;" class="btn btn-default <?php if(!empty($categories)){
                                        if(in_array(22,$categories)){
                                            echo 'active';
                                        }
                                    } ?>">
                                <div class="itemcontent item aos-init aos-animate" data-aos="fade-up">
                                    
                                    <input type="checkbox" name="category_id[]" autocomplete="off" value="22" <?php if(!empty($categories)){
                                        if(in_array(22,$categories)){
                                            echo 'checked="checked"';
                                        }
                                    } ?>>
                                    <img src="<?php echo base_url(); ?>assets/images/category/Photography.png" alt="" class="img-fluid " style="border-radius: 10px;">
                                    <h5></h5>
                                    <div class="item-overlay" style="opacity: 1 !important; background: rgba(112, 112, 112, 0); ">
                                            <div class="item-overlay-text">
                                                <h3 style="display:none;">Photography</h3>
                                            </div>
                                        </div>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="items col-xs-6 col-sm-3 col-md-3 col-lg-3">
                    <div class="info-block block-info clearfix">
                        <div data-toggle="buttons" class="btn-group itemcontent">
                            <label style="padding:5px !important; border: 0px !important;" class="btn btn-default <?php if(!empty($categories)){
                                        if(in_array(23,$categories)){
                                            echo 'active';
                                        }
                                    } ?>">
                                <div class="itemcontent item aos-init aos-animate" data-aos="fade-up">
                                    
                                    <input type="checkbox" name="category_id[]" autocomplete="off" value="23" <?php if(!empty($categories)){
                                        if(in_array(23,$categories)){
                                            echo 'checked="checked"';
                                        }
                                    } ?>>
                                    <img src="<?php echo base_url(); ?>assets/images/category/Gaming.png" alt="" class="img-fluid " style="border-radius: 10px;">
                                    <h5></h5>
                                    <div class="item-overlay" style="opacity: 1 !important; background: rgba(112, 112, 112, 0); ">
                                            <div class="item-overlay-text">
                                                <h3 style="display:none;">Gaming</h3>
                                            </div>
                                        </div>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="items col-xs-6 col-sm-3 col-md-3 col-lg-3">
                    <div class="info-block block-info clearfix">
                        <div data-toggle="buttons" class="btn-group itemcontent">
                            <label style="padding:5px !important; border: 0px !important;" class="btn btn-default <?php if(!empty($categories)){
                                        if(in_array(24,$categories)){
                                            echo 'active';
                                        }
                                    } ?>">
                                <div class="itemcontent item aos-init aos-animate" data-aos="fade-up">
                                    
                                    <input type="checkbox" name="category_id[]" autocomplete="off" value="24" <?php if(!empty($categories)){
                                        if(in_array(24,$categories)){
                                            echo 'checked="checked"';
                                        }
                                    } ?>>
                                    <img src="<?php echo base_url(); ?>assets/images/category/Education.png" alt="" class="img-fluid " style="border-radius: 10px;">
                                    <h5></h5>
                                    <div class="item-overlay" style="opacity: 1 !important; background: rgba(112, 112, 112, 0); ">
                                            <div class="item-overlay-text">
                                                <h3 style="display:none;">Education</h3>
                                            </div>
                                        </div>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="items col-xs-6 col-sm-3 col-md-3 col-lg-3">
                    <div class="info-block block-info clearfix">
                        <div data-toggle="buttons" class="btn-group itemcontent">
                            <label style="padding:5px !important; border: 0px !important;" class="btn btn-default <?php if(!empty($categories)){
                                        if(in_array(25,$categories)){
                                            echo 'active';
                                        }
                                    } ?>">
                                <div class="itemcontent item aos-init aos-animate" data-aos="fade-up">
                                    
                                    <input type="checkbox" name="category_id[]" autocomplete="off" value="25" <?php if(!empty($categories)){
                                        if(in_array(25,$categories)){
                                            echo 'checked="checked"';
                                        }
                                    } ?>>
                                    <img src="<?php echo base_url(); ?>assets/images/category/Self-Motivation.png" alt="" class="img-fluid " style="border-radius: 10px;">
                                    <h5></h5>
                                    <div class="item-overlay" style="opacity: 1 !important; background: rgba(112, 112, 112, 0); ">
                                            <div class="item-overlay-text">
                                                <h3 style="display:none;">Motivation</h3>
                                            </div>
                                        </div>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="items col-xs-6 col-sm-3 col-md-3 col-lg-3">
                    <div class="info-block block-info clearfix">
                        <div data-toggle="buttons" class="btn-group itemcontent">
                            <label style="padding:5px !important; border: 0px !important;" class="btn btn-default <?php if(!empty($categories)){
                                        if(in_array(26,$categories)){
                                            echo 'active';
                                        }
                                    } ?>">
                                <div class="itemcontent item aos-init aos-animate" data-aos="fade-up">
                                    
                                    <input type="checkbox" name="category_id[]" autocomplete="off" value="26" <?php if(!empty($categories)){
                                        if(in_array(26,$categories)){
                                            echo 'checked="checked"';
                                        }
                                    } ?>>
                                    <img src="<?php echo base_url(); ?>assets/images/category/Fan-Fiction.png" alt="" class="img-fluid " style="border-radius: 10px;">
                                    <h5></h5>
                                    <div class="item-overlay" style="opacity: 1 !important; background: rgba(112, 112, 112, 0); ">
                                            <div class="item-overlay-text">
                                                <h3 style="display:none;">Fan Fiction</h3>
                                            </div>
                                        </div>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <input type="submit" name="" class="btn btn-primary" value="Submit">            
        </form>
        </div>
    </div>
    </div>
    <!-- footer section -->
    <a href="javascript:" id="return-to-top" class="returntotop"><i class="fa fa-angle-up"></i></a>
    <style>
    .items{float: left;}
    .imgsize{width: 100px; margin-bottom: 10px;}
    .imgsizemain{width: 600px; margin-bottom: 10px;}
    @media (max-width:768px) {
      .imgsizemain{display: none;}
      .divsizemain{display: none;}
      .info-block{float: left;}
      .items {float: none;}
    }

    .items-collection{
        margin:20px 0 0 0;
        width: 100%;
    }
    .items-collection label.btn-default.active{
        background-color:#f5f5f5;
        color:#FFF;
    }
    .item-overlay-text h3 {
    color: #000 !important;
    }
    .items-collection label.btn-default{
        width:100%;
        border:1px solid #4a36f1;
        margin:5px; 
        border-radius: 17px;
        color: #4a36f1;
    }
    .items-collection label .itemcontent{
        width:100%;
    }
    .items-collection .btn-group{
        width:100%
    }
    </style>
    <!-- Optional JavaScript -->