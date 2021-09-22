<?php
include'connection.php';
$empid=$_GET['sid'];
$empname="";
$empidcard="";
$empdistrict="";
$empsector="";
$empcell="";
$empvillage="";
$empmartalstatus="";
$emprole="";
$empdoe="";
$empphone="";
$emppicture="";
$res=mysqli_query($cone,"SELECT * FROM `staff` WHERE sid='$empid'");
while($row=mysqli_fetch_array($res))
{
  $empname=$row['sname'];
  $empidcard=$row['sidcard'];
  $empdistrict=$row['sdistrict'];
  $empsector=$row['ssector'];
  $empcell=$row['scell'];
  $empvillage=$row['svillage'];
  $empmartalstatus=$row['smartalstatus'];
  $emprole=$row['srole'];
  $empdoe=$row['sdoe'];
  $empphone=$row['sphone'];
  $emppicture=$row['spicture'];
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
          h3{
              font-size:30px;
              margin-left:50px;
          }
      </style>
      <div class="container">
  <div class="col-sm-12 col-md-6 col-lg-12">
  <div class="row"> 
    <h3>Update Info</h3>
    <form method="POST" action='#' enctype="multipart/form-data"> 
    <table> 
        <tr><div class="form-group">
           <td> <label for="text">Name</label></td>
            <td><input type="text" class="form-control" value="<?php echo $empname;?>" name="empname"></td>
        </div></tr>
        <tr> 
          <div class="form-group">
            <td><label for="text">ID Card</label></td>
            <td><input type="text" class="form-control"  value="<?php echo $empidcard;?>" name="empidcard"></td>
          </div></tr>
          <tr><div class="form-group">
          <td><label for="text">District</label></td>
          <td><input type="text" class="form-control"  value="<?php echo $empdistrict;?>" name="empdistrict"></td>
          </div></tr>
          <tr><div class="form-group">
          <td><label for="text">Sector</label></td>
          <td><input type="text" class="form-control"  value="<?php echo $empsector;?>" name="empsector"></td>
          </div></tr>
          <tr><div class="form-group">
          <td><label for="text">Cell</label></td>
          <td><input type="text" class="form-control" value="<?php echo $empcell;?>" name="empcell"></td>
          </div></tr> 
          <tr><div class="form-group">
          <td><label for="text">Village</label></td>
          <td><input type="text" class="form-control" value="<?php echo $empvillage;?>" name="empvillage"></td>
          </div>
          </tr>
          <tr><div class="form-group">
            <td><label for="text">Status</label></td>
<td><input type="text" class="form-control" value="<?php echo $empmartalstatus;?>" name="empmartalstatus"></td>
<td><select class="form-control" value="<?php echo $empmartalstatus;?>" name="empmartalstatus">
    <option>Select Status</option>
    <option>Single</option>
    <option>Married</option>
    <option>widow</option>
</select>
          </div></tr>
          <tr><div class="form-group">
          <td><label for="text">Role</label></td>
          <td><input type="text" class="form-control" name="emprole" value="<?php echo $emprole;?>"></td>
          <td><select class="form-control" name="emprole" value="<?php echo $emprole;?>" name="emprole">
    <option>Select Role</option>
    <option>C.E.O</option>
    <option>Accountant</option>
    <option>Secretary</option>
    <option>Manager</option>
</select>
        </td> </div></tr>
          <tr><div class="form-group">
          <td><label for="text">D.O.E</label></td>
          <td><input type="date" class="form-control" value="<?php echo $empdoe;?>" name="empdoe"></td>
          </div></tr>
          <tr> <div class="form-group">
          <td><label for="text">Phone Number</label></td>
          <td><input type="text" class="form-control" value="<?php echo $empphone;?>" name="empphone"></td>
          </div></tr>
          <tr><div class="form-group">
          <td><label for="text">Employee Picture</label></td>
          <td> <img src=images/<?=$emppicture?> width="150px" height="200px">  </td>
           <td> <input type="file" class="form-control" name="file" size=10 id="picture"> 
        </td>
        </div></tr><br>
        <tr><div class="buttons">
         <td><button class="btn btn-success" type="submit" value="Upload" id="Upload" name="btnupdate">Update</button> 
        <a href="employee.php"> <button class="btn btn-danger"  type="submit" value="reset" id="Upload" name="btncancel">CANCEL</button> </a></td>
     </div></tr></form></div></div>
        </table>
        <?php
if(isset($_POST['btnupdate']))
{
  $filename=$_FILES['file']['name'];
  if($filename=="")
  {
    mysqli_query($cone,"UPDATE staff SET sname='$_POST[empname]',sidcard='$_POST[empidcard]',sdistrict='$_POST[empdistrict]',ssector='$_POST[empsector]',svillage='$_POST[empvillage]',
    scell='$_POST[empcell]',smartalstatus='$_POST[empmartalstatus]',srole='$_POST[emprole]',sdoe='$_POST[empdoe]',sphone='$_POST[empphone]' spicture='$_POST[emppicture]' WHERE sid='$empid'");
  }
  else{
    $filetmpname=$_FILES['file']['tmp_name'];
$folder='images/';
   move_uploaded_file($filetmpname, $folder.$filename);
   mysqli_query($cone,"UPDATE staff SET sname='$_POST[empname]',sidcard='$_POST[empidccard]',sdistrict='$_POST[empdistrict]',ssector='$_POST[empsector]',svillage='$_POST[empvillage]',
   scell='$_POST[empcell]',smartalstatus='$_POST[empmartalstatus]',srole='$_POST[emprole]',sdoe='$_POST[empdoe]',sphone='$_POST[empphone]',spicture='$filename' WHERE sid='$empid'");
  }
?>
  <script type="text/javascript">
    window.location="employee.php";
  </script>
  <?php
}
 ?>
  </script>
  <script src="jquery-3.3.1.min.js"></script>
        </body>
        </html>