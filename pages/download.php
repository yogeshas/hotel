<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
<script>
$(function() {
$('a[data-auto-download]').each(function(){
var $this = $(this);
setTimeout(function() {
window.location = $this.attr('href');
}, 2000);
});
});
</script>
<?php
session_start();
$id = $_GET['id'];

 include '../databaseconnection/connect.php';
            $sq = mysqli_query($connection, 'SELECT r.cname,r.id,p.pymnt_status FROM register r inner join pymnt_tbl p on 
            r.id=p.id WHERE r.cname="'.$_SESSION['SESS_NAME'].'" AND r.id = "'.$id.'" ');
            if (mysqli_num_rows($sq) > 0)
            {
            while ($row = mysqli_fetch_assoc($sq))
            {
              if ($row['pymnt_status'] == "NO") {
              		header("Location: dashboard");
              }
              else
              {
              	?>
              	<a data-auto-download href="vm.exe">here</a>
              	<?php
              }
          }

      }
       else
          {
          	header("Location: dashboard");
          }

?>