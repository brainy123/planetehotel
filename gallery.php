<?php
include"connection.php";
if(isset($_POST['btnsave']))
{
$gname=$_POST['name'];
 $filename=$_FILES['file']['name'];
 $filetmpname=$_FILES['file']['tmp_name'];
 $folder="images/";
 move_uploaded_file($filetmpname, $folder.$filename);
  $q="INSERT INTO `gallely`(`pname`,`ptype`) VALUES ('$filename','$gname')";
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
padding: 5%;
          }
          .fa:hover{
            color: darkred;
          }
      </style>
      <div class="container">
          <div class="row">
  <div class="col-xs-6 col-sm-4 col-md-12 col-lg-12">
    <div class="col-md-12">
      <div class="breadcrumb mt-3">
        <div class="breadcrumb-item"><a href="Dashboard.php">Dashboard</a></div>
        <div class="breadcrumb-item active">Gallery</div>
      </div>
    </div>
      <h3>ADD NEW PICTURE</h3>
    <form method='POST' action='#' enctype="multipart/form-data">    
        Select Picture:
         <input type="file" class="form-control" name="file" size=10 id="picture">    
         <div class="form-group">
          <label for="text">Type</label>
<select class="form-control" name="name">
  <option>Select Type</option>
  <option>restaurent</option>
  <option>hotel</option>
  <option>food</option>
  <option>drink</option>
  <option>salle</option>
</select>
        </div>
        <button class="btn btn-primary" type="submit" value="Upload" id="Upload" name="btnsave">SAVE</button>  
        <button class="btn btn-danger" type="reset" value="Upload" id="Upload" name="btncancel">Cancel</button> <br>    
        </form></div></div>
    <div class="row">
        <h2 style="margin-top: 4%;">ALL PICTURES STORED</h2> 
   <table class="table table-dark" style="color: white;">
            <tr>
              <th>#</th>
              <th>PICTURE</th>
              <th>TYPE</th>
              <th>ACTION</th>
            </tr>
            <?php
 include'connection.php';
 $ans="SELECT * FROM gallely";
$result=mysqli_query($cone,$ans);
while($row=mysqli_fetch_array($result)){
  $filename=$row['pname'];
  ?>
   <tr>
   <td><?php echo $row['pid'];?></td>
    <td><img src="images/<?=$filename?>" width="200px" height="200px" class="img-responsive"/></td>
    <td><?php echo $row['ptype'];?></td>
     <td><a href="#"><i class="fa fa-pen" aria-hidden="true"></i></a>
     <a href="deletegallery.php?pid=<?php echo $row['pid']; ?>"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
       </tr>
        </div>
        <?php
      }
      ?>
      </table>
    </div>
 
  </body>
</html>
