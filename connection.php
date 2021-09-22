<?php
$cone=mysqli_connect("localhost","root","");
$db=mysqli_select_db($cone,"laplanete");
if(!$cone)
{
	echo("connection failed");
}
echo("");
?>