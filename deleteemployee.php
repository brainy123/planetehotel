<?php
include "connection.php";
$empid=$_GET['sid'];
    $a="DELETE  FROM staff WHERE sid=$empid"; 
    $b=mysqli_query($cone,$a);
        header("location:employee.php");
?>