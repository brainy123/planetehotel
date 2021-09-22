<?php 
include"connection.php";
if(isset($_POST['btnsave']))
{
$name=$_POST['dname'];
$category=$_POST['dcategory'];
$price=$_POST['dprice'];
$filename=$_FILES['file']['name'];
$filetmpname=$_FILES['file']['tmp_name'];
$folder="images/";
 move_uploaded_file($filetmpname, $folder.$filename);
  $q="INSERT INTO `drinks`(`dname`,`dcategory`,`dprice`,`dphoto`) VALUES ('$name','$category','$price','$filename')";
  if(!mysqli_query($cone,$q))
  {
    echo"unable";
  }
  else{
    echo"success";
  }
}
?>
<!DOCTYPE html>
<html>
  <title></title>
  <head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  </head>
  <body>
      <style>
          .fa{
color: white;
padding: 3%;
font-size: 20px;
          }
          .fa:hover{
            color: brown;
          }
      </style>
      <div class="container">
          <div class="row">
  <div class="col-sm-6 col-md-12 col-lg-12">
    <div class="col-md-12">
      <div class="breadcrumb mt-3">
        <div class="breadcrumb-item"><a href="Dashboard.php">Dashboard</a></div>
        <div class="breadcrumb-item active">Drink</div>
      </div>
    </div>
      <h3>ADD DRINK</h3>
    <form method="POST" action='#' enctype="multipart/form-data"> 
        <div class="row">
            <div class="col-md-6">   
        <div class="form-group">
            <label for="text">Drink Name</label>
            <input type="text" class="form-control" placeholder="Drink name" name="dname">
          </div>
          <div class="form-group">
            <label for="text">Drink Category</label>
<select class="form-control" name="dcategory">
    <option>Select Category</option>
    <option>Alcohol</option>
    <option>Non-Alcohol</option>
</select>
          </div>
          <div class="form-group">
            <label for="text">Drink Price</label>
            <input type="text" class="form-control" placeholder="Drink Price" name="dprice">
          </div>
          <div class="form-group">
            <label for="text">Drink Picture</label>
            <input type="file" class="form-control" name="file" size=10 id="picture">    
          </div>
         <button class="btn btn-primary" type="submit" value="Upload" id="Upload" name="btnsave">SAVE</button> 
         <button class="btn btn-danger" type="submit" value="reset" id="Upload" name="btncancel">CANCEL</button> 
     </form></div></div>
    <div class="row">
        <h2 style="margin-top: 4%;">DRINKS </h2>
        <table class="table table-dark" style="color: white;">
            <tr>
              <th>#</th>
              <th>Drink Name</th>
              <th>Category</th>
              <th>Price</th>
              <th>Picture</th>
              <th>ACTION</th>
            </tr>
            <?php
 include'connection.php';
 $ans="SELECT * FROM drinks";
$result=mysqli_query($cone,$ans);
while($row=mysqli_fetch_array($result)){
  $filename=$row['dphoto'];
  ?>
              <tr>
                <td><?php echo $row['did'];?></td>
                <td><?php echo $row['dname'];?></td>
                <td><?php echo $row['dcategory'];?></td>
                <td><?php echo $row['dprice'];?></td>
                <td><img src="images/<?=$filename?>" width="200px" height="200px" class="img-responsive"/></td>
     <td><a href="#"><i class="fa fa-pen" aria-hidden="true"></i></a>
     <a href="deletedrink.php?did=<?php echo $row['did']; ?>"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
              </tr>
        </div>
        <?php
      }
      ?>
      </table>
    </div>
 
  </body>
</html>
