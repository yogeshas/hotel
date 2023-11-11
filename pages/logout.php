<?php
   session_start();
   if(isset($_SESSION['SESS_NAME'])){
       session_destroy();
       header('location: login.php');
   }
   else{
       header('location: index.php');
   }
?>