<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css');?> ">
    <link rel="stylesheet" href="<?= base_url('assets/css/font-awesome.min.css');?> ">
    
    <link rel="stylesheet" href="<?= base_url('assets/scss/style.css');?> ">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body class="bg-blue">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">
                        <img class="align-content" src="images/logo.png" alt="">
                    </a>
                </div>
                <div class="login-form">

                    <br>
                	<h3>Login</h3>
                	<hr>
                	<br>
                    <form method="POST" action="<?= base_url('admin/dologin');?>">
                        <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" class="form-control" name="username" placeholder="email or username">
                    </div>
                    <span class="help-block"></span>
                    <br/>
                        <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input  type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                       <br>
                        <button type="submit" class="btn btn-info">Sign in</button>
                        <hr>
                        <br/>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="<?= base_url('assets/js/vendor/jquery-2.1.4.min.js');?> "></script>
    <script src="<?= base_url('assets/js/popper.min.js');?> "></script>
    <script src="<?= base_url('assets/js/plugins.js');?> "></script>
    <script src="<?= base_url('assets/js/main.js');?> "></script>


</body>
</html>
