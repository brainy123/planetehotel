<?php
include'connection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Hotel La Planete</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" text="css/text "href="bootstrap.min.css"/>
<script src="jquery-3.3.1.min.js"></script>
</head>
<style>
    figure {
  border: 1px #cccccc solid;
  padding: 2px;
  margin-top: 1%;
 
}
figure img{
    margin-left:10%;
}
figcaption{
    text-align:center;
}
figcaption h4{
    font-style:italic;
}
    </style>
    <?php
include "navs.php";
    ?>
<body>
  <h2 style="text-align: center;"><strong><u> ABAKOZI BA Hotel Planete </u></strong></h2>
  <div class="container">
    <div class="row">
<?php
	$q="SELECT * FROM staff";
	$result=mysqli_query($cone,$q);
while($row=mysqli_fetch_array($result)){
	$filename=$row['spicture'];
	?>
  <div class="col-md-3">
    <form action="employee.php" method="GET" enctype="multipart/form-data" >
    <div>
    <figure>
    <img src="images/<?=$filename?>" style="border-radius: 1%;" width="200px" height="200px" class="img-responsive" />
  <figcaption> <h3 class="text-muted">Name:<?php echo $row['sname'];?></h3></figcaption>
  <figcaption><h4>Position:<?php echo $row['srole'];?></h4></figcaption>
  <figcaption><h4>Phone:<?php echo $row['sphone'];?></h4></figcaption>
</figure>
 </div> </form>
</div>
 <?php
}
?> </div>
</div>
<div>	 	
<?php
include'footer.php';
?></div>
</body>
</html>