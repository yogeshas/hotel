<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>

</body>
</html>
<?php
session_start();
include '../databaseconnection/connect.php';
if (isset($_POST["submit"])) {
	$uname = $_POST['cname'];
	$password = md5($_POST['cpassword']);
	
	$sql1 = "SELECT cname,cpassword FROM register where cname ='$uname' and cpassword = '$password' ";
	$result1 = mysqli_query($connection,$sql1);
	if (mysqli_num_rows($result1) == TRUE)
	{
		$member =  mysqli_fetch_array($result1);
		$_SESSION['SESS_NAME'] = $member['cname'];
		header("location: dashboard");
		

	}
	else
	{
		?>
		<script type="text/javascript">
    $(document).ready(function() {
        swal({
            title: "Error",
            text: "The invalid username or password",
            icon: "error",
            button: "Ok"
        }).then(function(){
        	window.location = "login";
        });
    });

</script>
		<?php
	}
	
}
else
{
	echo "issues in coding";
}
?>