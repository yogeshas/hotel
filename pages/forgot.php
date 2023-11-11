<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hotel Mangement</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <style type="text/css">
      body
      {
        background: url("https://media.istockphoto.com/id/1341408852/video/colored-smoke-on-a-dark-background-blue-and-red-light-with-smoke.jpg?s=640x640&k=20&c=v2DQUY8IVbli_6FH_9KAs6YWRXlDdYiBJHfp7JFh7NY=");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100%;

      }
    #logo
{
  font-family: sans-serif;
  font-size: 50px;
  color: orange;

}
#img_adj
{
  margin-top: 50px;
  height: 400px;
  width: 500px;

}
#vid_adj
{
  margin-top: 50px;
  height: 400px;
}
  </style>
</head>
<body >
  <nav class="navbar navbar-expand-lg navbar-dark">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item ">
        <a class="nav-link text-white" href="../index"><b>Home</b> </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link text-white" href="contact"><b>Contact</b></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link text-white" href="about"><b>About</b></a>
      </li>

  </ul>
  </div> 
  <a class="navbar-brand" href="#" id="logo" data-toggle="collapse">&nbsp;&nbsp;&nbsp;DIH &nbsp;</a>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link text-white" href="register"><b>Register</b></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="login"><b>Login</b></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="pricing"><b>Pricing</b></a>
      </li>
      
     
     
     
    </ul>
    
  </div>
</nav>

<div class="row">

  <div class="col-lg-12 d-flex justify-content-center" >
    <div class="card" style="width: 50% ;">
      <div class="card-body">
        <p class="card-title">Login here</p>
        <form  action="login_action" method="POST">
          <label>Phone number</label>
          <input type="number" name="cphone" class="form-control"  minlength="10"><br>
          
          <label>OTP</label>
          <input type="text" name="otp"  class="form-control"><br>
         <br>
          <input type="submit" name="submit" class="form-control btn btn-danger">

        </form>
      </div>
    </div>
  </div>

</div>
<br><br><br>
<?php

include '../includes/footer.php';

?>
