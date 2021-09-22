<?php
include"connection.php";
if(isset($_POST['btnsave']))
{
$user=$_POST['username'];
$pass=$_POST['password'];
  $q="INSERT INTO admin(ausername,apassword) VALUES ('$user','$pass')";
  if(!mysqli_query($cone,$q))
  {
    echo"unable to create account";
  }
  else{
    echo"new account created well";
  }
}
?>
<!DOCTYPE html>
<html>
    <title>LaPlanetteHotel-CreateAccount</title>
    <head>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">   
    </head>
    <style>
        .container{
            width: 70%;
            background-color: cadetblue;
            margin-top: 4%;
        }
        .fa{
            padding: 5%;
            color: white;
            font-size: 20px;
        }
        .fa:hover{
            color: darkred;
        }
    </style>
    <body>
        <form action="account.php" method="POST">
            <div class="col-sm-6 col-md-4">
                <div class="col-md-12">
                    <div class="breadcrumb mt-3">
                      <div class="breadcrumb-item"><a href="Dashboard.php">Dashboard</a></div>
                      <div class="breadcrumb-item active">Account</div>
                    </div>
                  </div>
               <div class="container">
                    <div class="form-group">
                    <label>Username:</label>
 <input type="text" class="form-control" placeholder="username" id="usrnm" name="username"/>
               </div><br>
               <div class="form-group">
                <label>Password:</label>
<input type="password" class="form-control" placeholder="Password" id="psswrd" name="password"/>
<small id="passwordhelp" class="form-text text-muted">
    your password must be 8-12 characters</small>
           </div>
           <button class="btn btn-success" name="btnsave" type="submit" >Create Account</button>
           <button class="btn btn-danger" >Cancel</button>
            </div>
            <div id="errmessage" style="font-size: 20px; background-color: black;color: white;"></div>
            <h1>USERS</h1>
            <table class="table table-dark">
                <tr>
            <th>#</th>
            <th>UserName</th>
            <th>Password</th>
            <th>ACTION</th></tr>
            <?php
$res="SELECT * FROM admin";
$result=mysqli_query($cone,$res);
while($row=mysqli_fetch_array($result))
{
?>
              <tr>
                <td><?php echo $row['aid'];?></td>
                <td><?php echo $row['ausername'];?></td>
                <td><?php echo  md5($row ['apassword']);?></td>
     <td><a href="#"><i class="fa fa-pen" aria-hidden="true"></i></a>
       <a href="deleteuser.php?aid=<?php echo $row['aid']; ?>"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
              </tr>
        </div>
        <?php
}
?>
            </table>
            </div>
        </form>
    </body>
</html>