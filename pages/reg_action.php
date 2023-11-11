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

include '../databaseconnection/connect.php';

if ($_POST['submit']) {
	
	$cname = $_POST['cname'];
	$cadd = $_POST['cadd'];
	$cgst = $_POST['cgst'];
	$cphone = $_POST['cphone'];
	$cpassword = md5($_POST['cpassword']);
	$rpassword = md5($_POST['rpassword']);

	if($_FILES['hotel_photo']['name']){
		move_uploaded_file($_FILES['hotel_photo']['tmp_name'], "image/".$_FILES['hotel_photo']['name']);
		$img="image/".$_FILES['hotel_photo']['name'];
	}

	$sq = mysqli_query($connection, 'SELECT cname FROM register WHERE cname="'.$_POST['cname'].'"');
$exist = mysqli_num_rows($sq);

	if ($exist == 1)
		
	 {
			?>
		<script type="text/javascript">
			    $(document).ready(function() {
			        swal({
			            title: "Error",
			            text: "The company name is already given",
			            icon: "error",
			            button: "Ok"
			        }).then(function(){
			        	window.location = "register";
			        });
			    });

		</script>
			<?php
	}
		else if ($cpassword == $rpassword) {
		$sql = "INSERT INTO register (cname,cadd,cgst,cphone,cpassword,hotel_photo) values('$cname','$cadd','$cgst','$cphone','$cpassword','$img')" or die();
		$result = mysqli_query($connection,$sql);


		if ($result == TRUE) {
			?>
			<script type="text/javascript">
    $(document).ready(function() {
        swal({
            title: "Success",
            text: "You have registered successful, Please login and goahead with the further process",
            icon: "success",
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
		?>
		<script type="text/javascript">
    $(document).ready(function() {
        swal({
            title: "Error",
            text: "Password is not matching",
            icon: "error",
            button: "Ok"
        }).then(function(){
        	window.location = "register";
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