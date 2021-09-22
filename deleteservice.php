<?php
include "connection.php";
$serviceid=$_GET['seid'];
$a="DELETE  FROM services WHERE seid=$serviceid"; 
$b=mysqli_query($cone,$a);
    header("location:services.php");
?>