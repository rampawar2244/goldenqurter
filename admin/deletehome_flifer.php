<?php
include ("config/config.php");

    
$id=$_GET['id'];
    
$q= " DELETE  FROM `home_flifer` WHERE id=$id";
$query= mysqli_query($con, $q);



header("location: home_flifer.php");

?>