<?php
include "connection.php";
$foodid=$_GET['fid'];
$a="DELETE  FROM food WHERE fid=$foodid"; 
$b=mysqli_query($cone,$a);
    header("location:food.php");
?>