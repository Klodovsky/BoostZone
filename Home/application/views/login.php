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
                    <a href="<?php echo base_url(); ?>">
                    <img src="assets/images/BoostZone.png"></a>
                </div>
                <h2 class="font-weight-bold m-b-10">Login</h2>
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

                <form id="login_form" action="<?php echo base_url(); ?>login/check_login" method="post">
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" aria-describedby="email" placeholder="Email address" required="" name="email">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="password" placeholder="Password" required="" name="password">
                    </div>
                     <div style="margin-bottom: 15px;">
                        <input type="checkbox" checked="checked" name="remember" id="remember"><label for="remember">Remember me </label>
                        <a href="<?php echo base_url(); ?>forgot-password" style="float: right;">Forgot password</a>
                    </div>
                    <button type="submit" class="btn btn-brand btn-block btn-lg">Login</button>
                </form>
                 <div class="divider-for-button">
                   <span class="divider-for-button-text">
                   .</span>
                </div>
                <div class="row" style="padding:0 10px 20px 15px; ">
                    <div class="col-lg-12" style="padding:0 5px 0 0;"> 
                    <a href="<?php echo base_url(); ?>register" class="btn btn-brand btn-block btn-lg">Register</a>
                    </div>
                    </div>
                    <div class="row" style="padding-left:15px; ">
                        <div class="col-lg-6" style="padding:0 5px 0 0;">                            
                            <a href="<?php echo $google_login_url; ?>" class="btn btn-outline-light btn-block btn-lg">Login with Google</a>      
                        </div>
                        <div class="col-lg-6">
                            <a href="<?php echo base_url(); ?>" class="btn btn-outline-light btn-block btn-lg">Back</a>
                        </div>
                    </div>                
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-xl-12 d-none d-md-none d-lg-flex">
                    <div class="login-page-img">
                        <img src="<?php echo base_url(); ?>assets/images/hero-graph-img-1.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  login close -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/main-js.js"></script>
<script>
    // $('#login_form').submit(function(){
    //     var email = $('#email').val();
    //     var password = $('#password').val();
    //     $.post('<?php echo base_url(); ?>login/check_login',{
    //             email:email,
    //             password:password
    //     },function(res){
    //         if(re)
    //     });
    // });
</script>    
</body>



</html>