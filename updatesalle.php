<?php 
include'connection.php';
$said=$_GET['s_id'];
$sname="";
$sphoto="";
$res=mysqli_query($cone,"SELECT * FROM salle WHERE s_id=$said");
while($row=mysqli_fetch_array($res))
{
  $sname=$row['sname'];
  $sprice=$row['sprice'];
  $sphoto=$row['sphoto'];
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
    <form method='POST' action='#' enctype="multipart/form-data"> 
        <div class="row">
            <div class="col-md-6">   
        <div class="form-group">
            <label for="text">Salle Number</label>
            <input type="text" class="form-control" value="<?php echo $sname;?>"name="sname">
          </div>
          <div class="form-group">
            <label for="text">Salle Price</label>
            <input type="text" class="form-control"  value="<?php echo $sprice;?>" name="sprice">
          </div>
          <div class="form-group">
            <label for="text">Salle Picture</label>
            <img src=images/<?=$sphoto?> width="150px" height="200px"> 
            <input type="file" class="form-control" value="<?php echo $sphoto;?>" name="file" size=10 id="picture"> 
          </div>
          <div class="buttons">
         <td><button class="btn btn-success" type="submit" value="Upload" id="Upload" name="btnupdate">Update</button> 
        <a href="salle.php"> <button class="btn btn-danger"  type="submit" value="reset" id="Upload" name="btncancel">CANCEL</button> </a></td>
     </div> 
     </form></div></div>
        </table>
 <?php
if(isset($_POST['btnupdate']))
{
    $filename=$_FILES['file']['name'];
  if($filename=="")
  {
  mysqli_query($cone,"UPDATE salle SET sname='$_POST[sname]',sprice='$_POST[sprice]',sphoto='$_POST[sphoto]' WHERE s_id=$said");
  }
  else{
    $filetmpname=$_FILES['file']['tmp_name'];
    $folder='images/';
    move_uploaded_file($filetmpname, $folder.$filename);
    mysqli_query($cone,"UPDATE salle SET sname='$_POST[sname]',sprice='$_POST[sprice]',sphoto='$filename' WHERE s_id=$said");
  }
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