<?php
include "connection.php";
$salleid=$_GET['s_id'];
    $a="DELETE  FROM salle WHERE s_id=$salleid"; 
    $b=mysqli_query($cone,$a);
        header("location:salle.php");
?>