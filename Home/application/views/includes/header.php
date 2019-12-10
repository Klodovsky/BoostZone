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
    <title><?php echo $title ?></title>
</head>
<body>
    <!-- <div class="preloaders">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div> -->
    <?php if($this->uri->segment(1) == 'home'  || $this->uri->segment(1) == '' || $this->uri->segment(1) == 'about-us' || $this->uri->segment(1) == 'contact' || $this->uri->segment(1) == 'view_all_creators' ): ?>

    <!-- header start -->
    <div class="header-transparent header-transparent-second">
        <!-- navigation start -->
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 head-bg">
                    <nav class="navbar navbar-expand-lg navbar-transparent-second">
                        <a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="assets/images/BoostZone.png"></a>
                        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbar-transparent" aria-controls="navbar-transparent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar top-bar mt-0"></span>
                            <span class="icon-bar middle-bar"></span>
                            <span class="icon-bar bottom-bar"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbar-transparent">
                            <ul class="navbar-nav ml-auto mr-3">
                                <li>
                                    <a href="<?php echo base_url(); ?>" class="active hea-link">
                                        Home
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>about-us" class="hea-link">
                                        About
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>contact" class="hea-link">
                                        Contact
                                    </a>
                                </li>
                                <?php if(!$this->session->userdata('user_id')){
                                    echo   '<li>
                                    <a href="'.base_url().'login" class="hea-link">
                                    Log in
                                    </a>
                                    </li>';  
                                } ?>
                                
                            </ul>
                            <?php if(empty($this->session->userdata('user_id'))){ ?>
                                <div class="header-btn">
                                    <a href="<?php echo base_url(); ?>register" class="btn btn-brand btn-sm">Register</a>
                                </div>
                            <?php }else{ ?> 
                                <div class="header-btn">
                                    <a href="<?php echo base_url(); ?>dashboard" class="btn btn-brand btn-sm">Dashboard</a>
                                </div>
                            <?php } ?>
                            <div class="searchbar">
                                <input class="search_input" type="text" name="" placeholder="Search..." id="search" style="margin-top: 7px;
                                padding: 2px 10px;
                                width: 100px;
                                caret-color: red;
                                transition: width 0.4s linea;">
                                <a href="#" class="search_icon"><i class="fas fa-search"></i></a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>

        <!-- navigation close -->
    </div>
    <!-- header close -->
<?php endif; ?>
