
<?php
include"connection.php";
if(isset($_POST['btnsave']))
{
$name=$_POST['service'];
$q="INSERT INTO `services`(`sname`) VALUES ('$name')";
if(!mysqli_query($cone,$q)){
  echo "record not saved";
}
else{
  echo"record saved";
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
  <div class="col-sm-6 col-md-4 col-lg-6">
    <div class="col-md-12">
      <div class="breadcrumb mt-3">
        <div class="breadcrumb-item"><a href="Dashboard.php">Dashboard</a></div>
        <div class="breadcrumb-item active">Service</div>
      </div>
    </div>
      <h3>ADD NEW SERVICE</h3>
    <form method='POST' action='#' enctype="multipart/form-data"> 
        <div class="row">
            <div class="col-md-6">   
        <div class="form-group">
            <label for="text">Name of service</label>
            <input type="text" class="form-control" placeholder="name of service" name="service">
          </div>
         <button class="btn btn-primary" type="submit" value="Upload" id="Upload" name="btnsave">SAVE</button> 
         <button class="btn btn-danger" type="submit" value="reset" id="Upload" name="btncancel">CANCEL</button> 
     </form></div></div>
    <div class="row">
        <h2 style="margin-top: 4%;">ALL SERVICES </h2>
        <table class="table table-dark" style="color: white;">
            <tr>
              <th>#</th>
              <th>SERVICE NAME</th>
              <th>ACTION</th>
            </tr>
            <?php
$res="SELECT * FROM services";
$result=mysqli_query($cone,$res);
while($row=mysqli_fetch_array($result))
{
?>
              <tr>
                <td><?php echo $row['seid'];?></td>
                <td><?php echo $row['sname'];?></td>
     <td><a href="updateservice.php?seid=<?php echo $row['seid']; ?>"><i class="fa fa-pen" aria-hidden="true"></i></a>
     <a href="deleteservice.php?seid=<?php echo $row['seid']; ?>"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
              </tr>
        </div>
        <?php
}
?>
      </table>
    </div>
 
  </body>
</html>
