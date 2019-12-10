<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <!-- fonts CSS -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- fontawesome fonts CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/fonts/fontawesome/css/all.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <title>BoostZone <?php echo $title; ?></title>
</head>
<body class="bg-light">
   <div class="preloaders">
    <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
    </div>
</div>
<!--  login start -->
<div class="d-flex align-items-center position-relative height-lg-100vh">
    <div class="login-form-block bg-white col-lg-6 col-xl-6 col-md-12 col-sm-12 col-12 d-lg-flex  align-items-center  height-lg-100vh ">
        <div class="w-100">              
            <div class="login-page-logo">
                <a href="index.html">
                <img src="assets/images/BoostZone.png"></a>
            </div>
            <h2 class="font-weight-bold">Forgot Password</h2>
            <p>Beautifully Designed. Easy to Manage.</p>
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
            <form action="<?php echo base_url(); ?>login/send_password" method="post">
                <div class="form-group">
                    <input type="email" class="form-control" id="email" aria-describedby="email" placeholder="Work Email Address" required="" name="email">
                </div>
                <button type="submit" class="btn btn-brand btn-block btn-lg">Send</button>
                <div class="divider-for-button">
                    <span class="divider-for-button-text">
                    .</span>
                </div>
            </form>
            <a href="<?php echo base_url(); ?>login" class="btn btn-outline-light btn-block btn-lg">Back</a>
        </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-xl-12 d-none d-md-none d-lg-flex">
                    <div class="login-page-img">
                        <img src="<?php echo base_url();?>assets/images/login-img.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/main-js.js"></script>

    </body>



    </html>