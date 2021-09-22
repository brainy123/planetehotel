<?php
include"connection.php";
if(isset($_POST['btnsave']))
{
$name=$_POST['sname'];
$price=$_POST['sprice'];
$filename=$_FILES['file']['name'];
$filetmpname=$_FILES['file']['tmp_name'];
$folder="images/";
 move_uploaded_file($filetmpname, $folder.$filename);
  $q="INSERT INTO salle(sname,sprice,sphoto) VALUES ('$name','$price','$filename')";
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
        <div class="breadcrumb-item active">Salle</div>
      </div>
    </div>
      <h3>SALLE</h3>
    <form method='POST' action='#' enctype="multipart/form-data"> 
        <div class="row">
            <div class="col-md-6">   
        <div class="form-group">
            <label for="text">Salle Number</label>
            <input type="text" class="form-control" placeholder="salle name" name="sname">
          </div>
          <div class="form-group">
            <label for="text">Salle Price</label>
            <input type="text" class="form-control" placeholder="Salle Price" name="sprice">
          </div>
          <div class="form-group">
            <label for="text">Salle Picture</label>
            <input type="file" class="form-control" name="file" size=10 id="picture">    
          </div>
         <button class="btn btn-primary" type="submit" value="Upload" id="Upload" name="btnsave">SAVE</button> 
         <button class="btn btn-danger" type="submit" value="reset" id="Upload" name="btncancel">CANCEL</button> 
     </form></div></div>
    <div class="row">
        <h2 style="margin-top: 4%;">SALLES </h2>
        <table class="table table-dark" style="color: white;">
            <tr>
              <th>#</th>
              <th>Salle Name</th>
              <th>Price</th>
              <th>Picture</th>
              <th>ACTION</th>
            </tr>
            <?php 
$re="SELECT * FROM salle";
$result=(mysqli_query($cone,$re));
while($row=mysqli_fetch_array($result)){
  $filename=$row['sphoto'];
?>
              <tr>
                <td><?php echo $row['s_id'];?></td>
                <td><?php echo $row['sname'];?></td>
                <td><?php echo $row['sprice'];?></td>
                <td><img src=images/<?=$filename?> width="200px" height="200px"></td>
     <td><a href="updatesalle.php?s_id=<?php echo $row['s_id'];?>"><i class="fa fa-pen" aria-hidden="true"></i></a>
         <a href="deletesalle.php?s_id=<?php echo $row['s_id']; ?>"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
              </tr>
        </div>
        <?php
        }
        ?>
        </div>
      </table>
    </div>
 
  </body>
</html>
