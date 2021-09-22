<?php 
include'connection.php';

$sid=$_GET['seid'];
$sname="";
$res=mysqli_query($cone,"SELECT * FROM services WHERE seid=$sid");
while($row=mysqli_fetch_array($res))
{
  $sname=$row['sname'];
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
            <td><input type="text" class="form-control" value="<?php echo $sname;?>" name="sname"></td>
        </div></tr>
        <tr> 
         </div></tr><br>
        <tr><div class="buttons">
         <td><button class="btn btn-success" type="submit" value="Upload" id="Upload" name="btnupdate">Update</button> 
        <a href="employee.php"> <button class="btn btn-danger"  type="submit" value="reset" id="Upload" name="btncancel">CANCEL</button> </a></td>
     </div></tr></form></div></div>
        </table>
 <?php
if(isset($_POST['btnupdate']))
{
  mysqli_query($cone,"UPDATE services SET sname='$_POST[sname]' WHERE seid=$sid");
  ?>
  <script type="text/javascript">
    window.location="salle.php";
  </script>
  <?php
}
 ?>
  </script>
  <script src="jquery-3.3.1.min.js"></script>
        </body>
        </html>