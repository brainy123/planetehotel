<?php
include "connection.php";
$drinkid=$_GET['did'];
$a="DELETE  FROM drinks WHERE did=$drinkid"; 
$b=mysqli_query($cone,$a);
    header("location:drink.php");
?>