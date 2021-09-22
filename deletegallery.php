<?php
include "connection.php";
$pictureid=$_GET['pid'];
$a="DELETE  FROM gallely WHERE pid=$pictureid"; 
$b=mysqli_query($cone,$a);
    header("location:gallery.php");
?>