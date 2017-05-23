<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Home</title>
        <link rel="shortcut icon" href="<?php echo base_url('Images/book.jpeg'); ?>"  type="image/x-icon"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link href="<?php echo base_url('css/style.css'); ?>" rel="stylesheet" type="text/css"/>
        <!--  JavaScript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div id="container">
            <img src="<?php echo base_url('Images/msu_banner2.png'); ?>" class="image-responsive header-image"/>
            <h1 class="text-center text-primary header-text">Welcome to the results portal!</h1>
            <div class="navbar navbar-inverse navbar-static-top my-navbar" data-spy="affix" data-offset-top="197" style="background-color: #006633; width: 100%; margin-top: -3.2px; padding: 0;">
                <div class="container">
                    <a href="http://www.maseno.ac.ke" class="navbar-brand">Online Results </a>
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="collapse navbar-collapse navHeaderCollapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="index.html">Home</a></li>
                            <li><a href="#">Contact us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="body">
            <div class="rows">
                <div class="col-md-2">
                    <p><b>Welcome to the exam results portal</b></p>
                    <p>This system allows you to view your results and fee balance.
                        <br> Lecturers and teachers can also upload the results easily and the accounts department can show fees transparency.</p>
                    <p><b class="bg-note">New users:</b> Please click <a href="pages/register_user.php">Register Now</a> and enter the requested information. Upon successful registration, you will be sent an email with instructions and your log-in information.</p>
                    <p><b class="bg-note">Existing users:</b> Do not register again. Simply enter your username and password and click the Investigator log in button. If you have forgotten your details please click <a href="password_reset.php">Forgot Password.</a></p>
                </div>
                <div class="col-md-8 well">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="uname">User name</label>
                            <input type="text" class="form-control" id="uname"autocomplete="on" placeholder="Enter your user name" required="required">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Password</label>
                            <input type="password" id="pwd" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="form-control btn-primary" value="Login">
                        </div>
                    </form>
                </div>
                <div class="col-md-2"></div>
            </div>
            </div>
        </div>
    </body>
</html>