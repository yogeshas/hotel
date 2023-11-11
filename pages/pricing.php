<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Pricing</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <style type="text/css">
      body
      {
        background-color: black;

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
  
  <?php
 session_start();
  if(isset($_SESSION['SESS_NAME'])){
  	?>
  	<nav class="navbar navbar-expand-lg navbar-dark">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item ">
        <a class="nav-link text-white" href="dashboard"><b>Home</b> </a>
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
        <a class="nav-link text-white" href="pricing"><b>Pricing</b></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link text-white" href="#"><b> <?php echo $_SESSION["SESS_NAME"]; ?> </b></a>
      </li>
      
     <li class="nav-item">
        <a class="nav-link text-white" href="logout"><b>Logout</b></a>
      </li>
     
     
    </ul>
    
  </div>
</nav>
<?php
}
else
{
	?>
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

	<?php
}
?>

<div class="text-white d-flex justify-content-center">
	<h1>Choose Your Plan</h1>

</div>

<div class="container">
	<div class="row">
		<div class="col-sm-4">
			<br>
			<div class="card bg-success text-white">
				<div class="card-body">
						<form action="payment.php" method="POST">
						<input type="radio" name="plan" value="700" class="form-control" required>
					
					<p style="font-size: 13px;margin-top: 10px;text-align: center;font-weight: bold;">NORMAL</p>

					<hr>

					<p class=" d-flex justify-content-center">3 MONTHS</p>

					<hr>
					<br><br><br><br><br>

					<p class=" d-flex justify-content-center">₨ 700</p>
					<?php
				
					if(isset($_SESSION['SESS_NAME'])){
						
						?>
						
							<input type="submit" class="btn btn-primary form-control" name="submit" value="PAY
">
					
					<?php
					}
					else
					{
						?>
						<input type="submit" class="btn btn-primary form-control" name="nosubmit" value="LOGIN AND PAY
" disabled>
					
					<?php
					}
					?>

					
				</div>
			
			</div>
		</div><br>
		<div class="col-sm-4">
			<br>
			<div class="card text-white bg-warning">
				<div class="card-body">
					<form action="payment.php" method="POST">
					<input type="radio" name="plan" value="1200"  class="form-control" required>
					
					<p style="font-size: 13px;margin-top: 10px;text-align: center;font-weight: bold;">GOLD</p>

					<hr>

					<p class=" d-flex justify-content-center">6 MONTHS</p>

					<hr>
					<br><br><br><br><br>

					<p class=" d-flex justify-content-center">₨ 1200</p>
					<?php
					
					if(isset($_SESSION['SESS_NAME'])){
						
						?>
						

							<input type="submit" class="btn btn-primary form-control" name="submit" value=" PAY
">
					
					<?php
					}
					else
					{
						?>
						<input type="submit" class="btn btn-primary form-control" name="nosubmit" value="LOGIN AND PAY
" disabled>
					
					<?php
					}
					?>

				</div>
			
			</div>
		</div><br>
		<div class="col-sm-4">
			<br>
			<div class="card text-white bg-danger">
				<div class="card-body">
					<form action="payment.php" method="POST">
					<input type="radio" name="plan" value="2500"  class="form-control"  required>
					
					<p style="font-size: 13px;margin-top: 10px;text-align: center;font-weight: bold;">PREMIUM</p>

					<hr>

					<p class=" d-flex justify-content-center">12 MONTHS</p>

					<hr>
					<br><br><br><br><br>

					<p class=" d-flex justify-content-center">₨ 2500</p>
					<?php
					
					if(isset($_SESSION['SESS_NAME'])){
						
						?>
						

							<input type="submit" class="btn btn-primary form-control" name="submit" value=" PAY
">
					
					<?php
					}
					else
					{
						?>
						<input type="submit" class="btn btn-primary form-control" name="nosubmit" value="LOGIN AND PAY
" disabled>
					
					<?php
					}
					?>
				</div>
			
			</div>
		</div>
	</div>
	<br>
	</form>
</div>

<?php

include '../includes/footer.php';

?>
