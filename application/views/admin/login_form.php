<div class="'container">
	<html lang="en">

<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login Admin</title>

    <link href="<?php echo base_url(); ?>bs-3/css/bootstrap.min.css" rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <script source="<?php echo base_url(); ?>bs-3/js/bootstrap.min.js"></script>
    <!-- Bootstrap Core CSS -->
    <style type="text/css">
      @import url('https://fonts.googleapis.com/css?family=Abel|Fjalla+One|Titillium+Web');
      body {    
        background-image: url('<?php echo base_url('bootstrap/img/bg_admin.jpg') ?>');
        background-color: #34ba99;   
        background-attachment: fixed;
        background-position: center;
        background-size: cover;
      }
    .panel-transparent {
      background: none;
    }

    .panel-transparent .panel-heading{
      background: rgba(122, 130, 136, 0.2)!important;
    }

    .panel-transparent .panel-body{
      background: rgba(46, 51, 56, 0.2)!important;
    }

    .loginmodal-container {
      padding: 30px;
    max-width: 350px;
    width: 100% !important;
    background-color: rgba(52, 186, 153, 0.1);
    margin: 0 auto;
    border-radius: 2px;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    overflow: hidden;
    font-family: 'Titillium Web', sans-serif;
    border-radius: 6px;
  }

.loginmodal-container h1 {
  text-align: center;
  font-size: 2em;
  font-family: 'Titillium Web', sans-serif;
  color: white;
}

.loginmodal-container input[type=submit] {
  width: 100%;
  display: block;
  margin-bottom: 10px;
  position: relative;
}

.loginmodal-container input[type=text], input[type=password] {
  height: 44px;
  font-size: 16px;
  width: 100%;
  height: 35px;
  margin-bottom: 10px;
  -webkit-appearance: none;
  background: #fff;
  border: 1px solid #d9d9d9;
  border-top: 1px solid #c0c0c0;
  /* border-radius: 2px; */
  padding: 0 8px;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
}

.loginmodal-container input[type=text]:hover, input[type=password]:hover {
  border: 1px solid #b9b9b9;
  border-top: 1px solid #a0a0a0;
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
}

.loginmodal {
  text-align: center;
  font-size: 14px;
  font-family: 'Arial', sans-serif;
  font-weight: 700;
  height: 36px;
  padding: 0 8px;
/* border-radius: 3px; */
/* -webkit-user-select: none;
  user-select: none; */
}

.loginmodal-submit {
  /* border: 1px solid #3079ed; */
  border: 0px;
  color: #fff;
  text-shadow: 0 1px rgba(0,0,0,0.1); 
  background-color: #2dcc70;
  padding: 10px 0px;
  font-family: 'Abel', sans-serif;;
  font-size: 18px;
  border-radius: 5px;
  /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#4787ed)); */
}

.loginmodal-submit:hover {
  /* border: 1px solid #2f5bb7; */
  border: 0px;
  text-shadow: 0 1px rgba(0,0,0,0.3);
  background-color: #27ae61;
  
  /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#357ae8)); */
}

.loginmodal-container a {
  text-decoration: none;
  color: #666;
  font-weight: 400;
  text-align: center;
  display: inline-block;
  opacity: 0.6;
  transition: opacity ease 0.5s;
} 
</style>
    <!-- Custom CSS -->
   </head>
   <body>
 <!-- Top content -->
       <div class="container" style="margin-top: 130px">
 <div class="col-md-4 col-md-offset-4">
 <img class="img-responsive" src="<?php echo base_url() ?>bootstrap/img/admin.png"><P>&nbsp;
       <div class="loginmodal-container">
                    <h1>Login Admin</h1><br>
                  <?php echo form_open("welcome/cek_login"); ?>
                    <input type="text" name="username" placeholder="Username">
                    <input type="password" name="password" placeholder="Password">
                    <input type="submit" name="login" class="login loginmodal-submit" value="L O G I N">
                  <?php echo form_close(); ?>
                  <?php if(isset($gagal)) { ?>
                 <p class="text-center animated infinite bounce" style="color: red;"> <?php echo $gagal ?></p>
                   <?php } ?>                  
                </div>

<!-- Javascript -->
<script src="assets/js/jquery-1.11.1.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.backstretch.min.js"></script>
<script src="assets/js/scripts.js"></script>
        