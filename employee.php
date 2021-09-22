<?php
include"connection.php";
if(isset($_POST['btnupload']))
{
$name=$_POST['empname'];
$idcard=$_POST['empid'];
$district=$_POST['empdistrict'];
$sector=$_POST['empsector'];
$cell=$_POST['empcell'];
$village=$_POST['empvillage'];
$status=$_POST['empstatus'];
$role=$_POST['emprole'];
$doe=$_POST['empdoe'];
$phone=$_POST['empphone'];
$filename=$_FILES['file']['name'];
 $filetmpname=$_FILES['file']['tmp_name'];
 $folder="images/";
 move_uploaded_file($filetmpname,$folder.$filename);
$q="INSERT INTO `staff`(`sname`, `sidcard`, `sdistrict`, `ssector`, `scell`, `svillage`, `smartalstatus`, `srole`, `sdoe`,`sphone`, `spicture`) VALUES ('$name','$idcard','$district','$sector','$cell','$village','$status','$role','$doe','$phone','$filename')";
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
  <div class="col-sm-6 col-md-6 col-lg-12">
    <div class="col-md-12">
      <div class="breadcrumb mt-3">
        <div class="breadcrumb-item"><a href="Dashboard.php">Dashboard</a></div>
        <div class="breadcrumb-item active">Employee</div>
      </div>
    </div>
      <h3>New Employee</h3>
    <form method="POST" action='#' enctype="multipart/form-data"> 
        <div class="row">
            <div class="col-md-6">   
        <div class="form-group">
            <label for="text">Name</label>
            <input type="text" class="form-control" placeholder="Employee name" name="empname">
          </div>
          <div class="form-group">
            <label for="text">ID Card</label>
            <input type="text" class="form-control" placeholder="Employee ID" name="empid">
          </div>
          <div class="form-group">
            <label for="text">District</label>
            <input type="text" class="form-control" placeholder="Employee district" name="empdistrict">
          </div>
          <div class="form-group">
            <label for="text">Sector</label>
            <input type="text" class="form-control" placeholder="Employee sector" name="empsector">
          </div>
           
          <div class="form-group">
            <label for="text">Cell</label>
            <input type="text" class="form-control" placeholder="Employee cell" name="empcell">
          </div> 
          <div class="form-group">
            <label for="text">Village</label>
            <input type="text" class="form-control" placeholder="Employee village" name="empvillage">
          </div>
          </div>
          <div class="col-md-6">
          <div class="form-group">
            <label for="text">Status</label>
<select class="form-control" name="empstatus">
    <option>Select Status</option>
    <option>Single</option>
    <option>Married</option>
    <option>widow</option>
</select>
          </div>
          <div class="form-group">
            <label for="text">Role</label>
<select class="form-control" name="emprole">
    <option>Select Role</option>
    <option>C.E.O</option>
    <option>Accountant</option>
    <option>Secretary</option>
    <option>Manager</option>
</select>
          </div>
          <div class="form-group">
            <label for="text">D.O.E</label>
            <input type="date" class="form-control" name="empdoe">
          </div>
          <div class="form-group">
            <label for="text">Phone Number</label>
            <input type="text" class="form-control" placeholder="E.X:0788000099" name="empphone">
          </div>
          <div class="form-group">
            <label for="text">Employee Picture</label>
            <input type="file" class="form-control" name="file" size=10 id="picture">    
          </div><br>
        <div class="buttons">
         <button class="btn btn-primary" type="submit" value="Upload" id="Upload" name="btnupload">SAVE</button> 
         <button class="btn btn-danger" type="submit" value="reset" id="Upload" name="btncancel">CANCEL</button> 
     </div></form></div></div>
    <div class="row">
        <h2 style="margin-top: 4%;margin-left: 40%;">ALL EMPLOYEE </h2>
        <div class="table-responsive">
        <table class="table table-dark" style="color: white; margin-left: 2%;">
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>ID</th>
              <th>District</th>
              <th>Sector</th>
              <th>Cell</th>
              <th>Village</th>
              <th>M.Status</th>
              <th>Role</th>
              <th>D.O.E</th>
              <th>Phone</th>
              <th>Picture</th>
              <th>ACTION</th>
            </tr>
            <?php
$res="SELECT * FROM staff";
$result=mysqli_query($cone,$res);
while($row=mysqli_fetch_array($result))
{
  $filename=$row['spicture'];
            ?>
              <tr>
                <td><?php echo $row['sid'];?></td>
                <td><?php echo $row['sname'];?></td>
                <td><?php echo $row['sidcard'];?></td>
                <td><?php echo $row['sdistrict'];?></td>
                <td><?php echo $row['ssector'];?></td>
                <td><?php echo $row['scell'];?></td>
                <td><?php echo $row['svillage'];?></td>
                <td><?php echo $row['smartalstatus'];?></td>
                <td><?php echo $row['srole'];?></td>
                <td><?php echo $row['sdoe'];?></td>
                <td><?php echo $row['sphone'];?></td>
                <td><img src=images/<?=$filename?> width="100px" height="150px"> </td>
     <td><a href="updateemployee.php?sid=<?php echo $row['sid'];?>"><i class="fa fa-pen" aria-hidden="true"></i></a>
     <a href="deleteemployee.php?sid=<?php echo $row['sid']; ?>"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
              </tr>
        </div>
        <?php
}
?>
      </table>
    </div>
  </div>
  <script src="jquery-3.3.1.min.js"></script>
  </body>
</html>
