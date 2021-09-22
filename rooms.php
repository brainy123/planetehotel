<?php
include"connection.php";
if(isset($_POST['btnsave']))
{
  $number=$_POST['rnumber'];
   $category=$_POST['rcategory'];
    $places=$_POST['rplace'];
     $price=$_POST['rprice'];
     $filename=$_FILES['file']['name'];
     $tempname=$_FILES ['file']['tmp_name'];
     $folder="images/";
     move_uploaded_file($tempname, $folder.$filename);
$q="INSERT INTO `rooms`(`rnumber`,`rcategory`,`rplaces`,`rprice`,`rphoto`) VALUES('$number','$category','$places','$price','$filename')";
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
        <div class="breadcrumb-item active">Room</div>
      </div>
    </div>
      <h3>ADD ROOM</h3>
    <form method="POST" action='#' enctype="multipart/form-data"> 
        <div class="row">
            <div class="col-md-6">   
        <div class="form-group">
            <label for="text">Room Number</label>
            <input type="text" class="form-control" placeholder="room number" name="rnumber">
          </div>
          <div class="form-group">
            <label for="text">Room Category</label>
<select class="form-control" name="rcategory">
    <option>Select Category</option>
    <option>VIP</option>
    <option>Simple</option>
    <option>Double</option>
</select>
          </div>
          <div class="form-group">
            <label for="text">Number of places</label>
            <select class="form-control" name="rplace">
                <option>Select number of places</option>
                <option>1 place</option>
                <option>2 places</option>
            </select>
          </div></div>
          <div class="col-md-6"> 
          <div class="form-group">
            <label for="text">Room Price</label>
            <input type="text" class="form-control" placeholder="room Price" name="rprice">
          </div>
          <div class="form-group">
            <label for="text">Room Picture</label>
            <input type="file" class="form-control" name="file" size=10 id="picture">    
          </div>
           <br>
         <button class="btn btn-primary" type="submit" value="Upload" id="Upload" name="btnsave">SAVE</button> 
         <button class="btn btn-danger" type="submit" value="reset" id="Upload" name="btncancel">CANCEL</button> 
     </form></div></div>
    <div class="row">
        <h2 style="margin-top: 4%;">ROOMS </h2>
        <table class="table table-dark" style="color: white;">
            <tr>
              <th>#</th>
              <th>R.N</th>
              <th>Category</th>
              <th>people</th>
              <th>Price</th>
              <th>Picture</th>
              <th>ACTION</th>
            </tr>
            <?php
include"connection.php";
$re="SELECT * FROM rooms";
$result=mysqli_query($cone,$re);
while($row=mysqli_fetch_array($result)){
  $filename=$row['rphoto'];
            ?>
              <tr>
                <td><?php echo $row['rid'];?></td>
                <td><?php echo $row['rnumber'];?></td>
                <td><?php echo $row['rcategory'];?></td>
                <td><?php echo $row['rplaces'];?></td>
                <td><?php echo $row['rprice'];?></td>
                <td><img src="images/<?=$filename?>" width="200px" height="200px" class="img-responsive"/></td>
  <td><a href="#"><i class="fa fa-pen" aria-hidden="true"></i></a>
  <a href="deleteroom.php?rid=<?php echo $row['rid']; ?>"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
              </tr>
        </div>
        <?php
      }
      ?>
      </table>
    </div>
 
  </body>
</html>
