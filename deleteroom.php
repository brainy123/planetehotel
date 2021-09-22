<?php
include "connection.php";
$roomid=$_GET['rid'];
        $a="DELETE  FROM rooms WHERE rid=$roomid"; 
        $b=mysqli_query($cone,$a);
?>