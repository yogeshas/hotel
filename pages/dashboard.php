<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php
    session_start();
   echo $_SESSION["SESS_NAME"]; ?>, Welcome  to DIH</title>
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

<div class="container">
  <div class="row">
    <div class="col-lg-8">
      <br>
      <div class="card " >
        <div class="card-body">
           <div class="container d-flex justify-content-center">
             Company Details
           </div>
           <br>
           <?php
            include '../databaseconnection/connect.php';
            $sq = mysqli_query($connection, 'SELECT * FROM register WHERE cname="'.$_SESSION['SESS_NAME'].'"');
            
            while ($row = mysqli_fetch_assoc($sq))
            {
            ?>
            
            <div class="row">
              <div class="col-lg-6">
                
             <label>Your Company Name</label> : &nbsp; <input type="text" name="cname" style="width: 150px" 
              placeholder="<?php echo $row['cname']; ?>" disabled>
           </div>
            <div class="col-lg-6">
              
             <label> Company Mail ID</label> : &nbsp; <input type="text" name="cgst"   placeholder="<?php echo $row['cgst']; ?>" style="width: 180px" disabled >
           </div>
           </div>
           <br>
           <div class="row">
              <div class="col-lg-6">
                
             <label>Phone Number</label> : &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  <input type="text" name="cphone" style="width: 150px" 
              placeholder="<?php echo $row['cphone']; ?>" disabled>
           </div>
            <div class="col-lg-6">
              
             <label>Verification Status</label> : &nbsp; <input type="text" name="verify"   placeholder="<?php echo $row['verify']; ?>" style="width: 180px" disabled>
           </div>
           </div>
           <br>
           <div class="row">
           <div class="col-lg-12">
              <label>Company Address</label> : &nbsp;
             <textarea class="form-control" disabled>
               <?php echo $row['cadd']; ?>
             </textarea>
           </div>
         </div>
           </form>
           
           


        </div>
      </div>
    </div>
    
    <div class="col-lg-4">
      <br>
      <div class="card ">
        <div class="card-body">
          <p class="d-flex justify-content-center">Hotel Profile</p>
           <img src="<?php echo $row['hotel_photo'] ?>" height="200px" width="300px" >
            <?php
            }
           ?>
        </div>
      </div>
    </div>

  </div>
</div>

<br>
<div class="container">
<div class="row">
  <div class="col-lg-4">
    <?php
     include '../databaseconnection/connect.php';
            $sq = mysqli_query($connection, 'SELECT r.cname,r.id,p.pymnt_status FROM register r inner join pymnt_tbl p on 
            r.id=p.id WHERE r.cname="'.$_SESSION['SESS_NAME'].'"');
            
            while ($row = mysqli_fetch_assoc($sq))
            {
              if ($row['pymnt_status'] == "NO") {
              
              ?>

              <div class="card bg-danger text-white">
                <div class="card-body">
                  <p class="card-title d-flex justify-content-center">The Payment Status</p>
                  <p class="d-flex justify-content-center"><?php echo $row['pymnt_status'] ?></p>
                </div>
                
              </div>
              <?php
            }
            else
            {
              ?>
                 <div class="card bg-success text-white">
                <div class="card-body">
                  <p class="card-title d-flex justify-content-center">The Payment Status</p>
                  <p class="d-flex justify-content-center"><?php echo $row['pymnt_status'] ?></p>
                </div>
                
              </div>
              <?php
            }
            }
    ?>
  </div>
  <div class="col-lg-4">
    <div class="card">
      <div class="card-body">
        <p class="card-title">Download the software</p>
        <?php
          include '../databaseconnection/connect.php';
            $sq = mysqli_query($connection, 'SELECT r.cname,r.id,p.pymnt_status FROM register r inner join pymnt_tbl p on 
            r.id=p.id WHERE r.cname="'.$_SESSION['SESS_NAME'].'"');
            
            while ($row = mysqli_fetch_assoc($sq))
            {
              if ($row['pymnt_status'] == "NO") {

        ?>
          <a href="" class="btn btn-secondary form-control" disabled>Download</a>
        <?php
      }
      else
      {
        ?>
        <a href="download?id=<?php echo $row['id'] ?>" class="btn btn-primary form-control">Download</a>

          <?php
      }
    }
        ?>
      </div>
    </div>
  </div>
</div>
</div>

<?php

include '../includes/footer.php';

?>
