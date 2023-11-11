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
        <p class="card-title">Register here</p>
        <form  action="reg_action" method="POST" enctype="multipart/form-data">
          <label>Company Name</label>
          <input type="text" name="cname" class="form-control" required><br>
           <label>Company Address</label>
          <input type="text" name="cadd" class="form-control" required><br>
           <label>Company Mail ID</label>
          <input type="email" name="cgst" class="form-control" required><br>
           <label>Owner Contact Phone Number</label>
          <input type="text" name="cphone" class="form-control" required><br>
          <label>Password</label>
          <input type="password" name="cpassword" id="myInput" class="form-control" required ><br>
          <input type="checkbox" onclick="myFunction()">Show Password<br><br>
          <label>Re-Enter password</label>
          <input type="password" name="rpassword" class="form-control" id="myInput1" required><br>
          <input type="checkbox" onclick="myFunction1()">Show Password<br><br>
          
           <label>Upload the company photo </label><br> 
          <input type="file" name="hotel_photo" required><br><br>
          <input type="submit" name="submit" class="form-control btn btn-danger">
        </form>
      </div>
    </div>
  </div>

</div>

<?php

include '../includes/footer.php';

?>

<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}


function myFunction1()
{
  var y = document.getElementById("myInput1");
  if (y.type === "password") {
    y.type = "text";
  }else
  {
    y.type = "password";
  }
}
</script>