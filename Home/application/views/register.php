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
    <title>BoostZone - Register Page</title>
</head>

<body class="bg-light">
     <div class="preloaders">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!--  register start -->
    <div class="d-flex align-items-center position-relative height-lg-100vh">
        <div class="login-form-block bg-white col-lg-6 col-xl-6 col-md-12 col-sm-12 col-12 d-lg-flex  align-items-center  height-lg-100vh ">
            <div class="w-100">
                <div class="login-page-logo">
                    <a href="<?php echo base_url(); ?>">
                    <img src="assets/images/BoostZone.png"></a>
                </div>
                <style type="text/css">
                    .alert:empty{
                        display: none;
                    }
                </style>
                <?php 
                	$msg = $this->session->flashdata('message1');
                	if($msg){ ?>
                <div class="alert alert-danger"><?php echo $msg; ?>
                    <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
                </div>
            		<?php } ?>
                    <?php 
                    $msg = $this->session->flashdata('message');
                    if($msg){ ?>
                <div class="alert alert-success"><?php echo $msg; ?>
                    <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
                </div>
                    <?php } ?>
                    <div class="alert alert-danger"></div>
                <form id="register_form" action="<?php echo base_url(); ?>login/register_new_user" method="post">
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" aria-describedby="email" placeholder="Your Email Address" required="" name="email">
                        <div class="row" style="padding-left:15px; ">
                            <div class="col-lg-6" style="padding:0 5px 0 0;">
                        <input type="password" class=" form-control m-t-10" id="password" aria-describedby="password" placeholder="Enter password" required="" name="password" onkeyup="validatePassword(this.value);">
                        <span id="msg" style="font-size:13px;">Use min 8 chars, For Ex: Boss@567</span></div>
                        <div class="col-lg-6"> 
                        <input type="password" class="form-control m-t-10" id="password1" aria-describedby="password1" placeholder="Confirm password" required="" name="confirm_password"></div>
                          </div>                          
                    </div>
                    <button type="submit" class="btn btn-brand btn-block btn-lg">Register Now</button>
                    <div class="divider-for-button">
                        <span class="divider-for-button-text">
                            OR</span>
                    </div>
                    <a href="<?php echo $google_login_url; ?>" class="btn btn-outline-light btn-block btn-lg">Sign up with Google</a>
                </form>
                <a href="<?php echo base_url(); ?>" class="btn btn-outline-light btn-block btn-lg m-t-20">Back</a>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-xl-12 d-none d-md-none d-lg-flex">
                    <div class="login-page-img">
                        <img src="<?php echo base_url(); ?>assets/images/login-img.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  register close -->    
    <script src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/main-js.js"></script>
    <script>
        $('#register_form').submit(function(){
            var pwd = $('#password').val();
            var pwd1 = $('#password1').val();
            if(pwd != pwd1){                
                $('.alert-danger').html('Password do not matched !<a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>');
                return false;
            }
        });
        
    </script>
    <script>
            function validatePassword(password) {
                
                // Do not show anything when the length of password is zero.
                if (password.length === 0) {
                    document.getElementById("msg").innerHTML = "";
                    return;
                }
                // Create an array and push all possible values that you want in password
                var matchedCase = new Array();
                matchedCase.push("[$@$!%*#?&]"); // Special Charector
                matchedCase.push("[A-Z]");      // Uppercase Alpabates
                matchedCase.push("[0-9]");      // Numbers
                matchedCase.push("[a-z]");     // Lowercase Alphabates

                // Check the conditions
                var ctr = 0;
                for (var i = 0; i < matchedCase.length; i++) {
                    if (new RegExp(matchedCase[i]).test(password)) {
                        ctr++;
                    }
                }
                // Display it
                var color = "";
                var strength = "";
                switch (ctr) {
                    case 0:
                    case 1:
                    case 2:
                        strength = "Very Weak";
                        color = "red";
                        break;
                    case 3:
                        strength = "Medium";
                        color = "orange";
                        break;
                    case 4:
                        strength = "Strong";
                        color = "green";
                        break;
                }
                document.getElementById("msg").innerHTML = strength;
                document.getElementById("msg").style.color = color;
            }
        </script>    
</body>
</html>