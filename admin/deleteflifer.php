<?php
include ("config/config.php");

    
$id=$_GET['id'];
    
$q= " DELETE  FROM `flifer` WHERE id=$id";
$query= mysqli_query($con, $q);



header("location: flifer.php");

?>