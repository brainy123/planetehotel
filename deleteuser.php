<?php
include "connection.php";
$userid=$_GET['aid'];
$a="DELETE  FROM admin WHERE aid=$userid"; 
$b=mysqli_query($cone,$a);
    header("location:account.php");   
?>