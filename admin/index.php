<?php  
session_start();
include('includes/header.php');
include('includes/navbar.php');
include("./config/config.php");
if($_SESSION["user"]== true){
  // echo "welcome"."". $_SESSION['user'];
  }
  else{
    ?>
    <script>
      window.location.href = "login.php";
    </script>
    <?php  }
  
  $user=$_SESSION["user"];
$sql="SELECT * FROM `admin` WHERE `username`='$user'";
$sql_run = mysqli_query($con,$sql);

$row = mysqli_fetch_array($sql_run);
$id=$row["id"];  
  ?>

<?php
include('includes/script.php');
include('includes/footer.php');
?>