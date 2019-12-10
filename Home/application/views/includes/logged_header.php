<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <!-- fonts CSS -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- fontawesome fonts CSS -->
   <link rel="stylesheet" href="<?php echo base_url();?>assets/fonts/fontawesome/css/all.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/aos.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
    <link href="<?php echo base_url(); ?>assets/css/slim.min.css" rel="stylesheet">   
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/sweetalert2.css">

    <script src="<?php echo base_url(); ?>assets/js/slim.kickstart.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/sweetalert2.js"></script>

    <title><?php echo $title ?></title>
</head>
<body>
<!--     <div class="preloaders">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div> -->
     <!-- navigation start -->
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 head-bg">
                    <nav class="navbar navbar-expand-lg navbar-transparent-second">
                        <a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="assets/images/BoostZone.png"> </a>
                        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbar-transparent" aria-controls="navbar-transparent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar top-bar mt-0"></span>
                            <span class="icon-bar middle-bar"></span>
                            <span class="icon-bar bottom-bar"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbar-transparent">
                            
                            <ul class="navbar-nav ml-auto mr-3">
                                <?php if(is_admin()){ ?>
                                <li>
                                    <a href="<?php echo base_url(); ?>dashboard" class="hea-link">
                                        Home
                                    </a>
                                </li>   
                                <li>
                                    <a href="<?php echo base_url(); ?>creators" class="hea-link">
                                        Creators
                                    </a>
                                </li> 
                                  <li>
                                    <a href="<?php echo base_url(); ?>donators" class="hea-link">
                                        Donators
                                    </a>
                                </li>   
                                <li>
                                    <a href="<?php echo base_url(); ?>settings" class="hea-link">
                                        Settings
                                    </a>
                                </li>                   
                                <?php }elseif(is_creator()){ ?>             
                                        <li>
                                    <a href="<?php echo base_url(); ?>dashboard" class="hea-link">
                                        Home
                                    </a>
                                </li>                                
                                <li>
                                    <a href="<?php echo base_url(); ?>category" class="hea-link">
                                        My Categories
                                    </a>
                                </li>
                                <?php }elseif(is_donator()){?>
                                       <li>
                                    <a href="<?php echo base_url(); ?>dashboard" class="hea-link">
                                        Home
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>view_all_creators" class="hea-link">
                                     See Creators
                                    </a>
                                </li>
                                <?php  } ?>
                            </ul>

                            <div class="header-btn">
                                <a href="<?php echo base_url(); ?>login/logout" class="btn btn-brand btn-sm">Logout</a>
                            </div>
                            
                        </div>
                    </nav>
                </div>
            </div>
        </div>

        <!-- navigation close -->
    </div>
    <!-- header close -->