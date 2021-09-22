<!DOCTYPE html>
<html>
<head>
	<title>LaPlanetteHotel-DashboardPanel</title>
   <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" text="css/text "href="bootstrap.min.css"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"> 
   </head>
<style type="text/css"> 
.admin-title { text-align:center; margin-top: 1px; background-color: #ecf0f1; padding: .5em 0; border-radius: .3em; }
.admin { border-radius: .3%; background-color: #798086; text-align: center; padding: 3em 2em 1em 2em; color: white; }
.admin:hover{
   border-radius: 50% 0% 50% 0%;
   background-color: rgb(31, 92, 133);
}
.admin .fa { font-size: 5em; }
.admin h3{
    color: black;
}
.admin a{
    color: black;
    font-size: 15px;
}
.admin a:hover{
   color: white;
 
}
.links a{
   display: block;
}
.modal-header h4{
   margin-left: 40%;
}
.modal-content{
   background-color: rgb(31, 92, 133);
   font-size: 20px;
}
</style>

<div class="modal" id="myModal" >
   <div class="modal-dialog">
     <div class="modal-content">
       <div class="modal-header">
         <h4 class="modal-title">Change Password</h4>
         <button type="button" class="close" data-dismiss="modal">&times;</button>
       </div>
       <div class="col-xs-6 col-sm-4 col-md-12 col-lg-12" style="margin-left: 10%; width: 80%;background-color: rgb(245, 240, 240);">
       <form action="">
         <div class="row">
         <div class="col-md-8">
         <div class="form-group">
         <label for="username">Username:</label>
         <input type="username" class="form-control" placeholder="username" id="username" width="100%">
         </div>
         <div class="form-group">
         <label for="pwd">Password:</label>
         <input type="password" class="form-control" placeholder="Old password" id="pwd">
         </div>
         <div class="form-group">
           <label for="pwd">New Password:</label>
           <input type="password" class="form-control" placeholder="New password" id="pwd">
           </div>
       </div></div>
         <button type="submit" class="btn btn-success">Change Password</button>
         <button type="reset" class="btn btn-danger" data-dismiss="modal">Cancel</button>
         </form></div>
     </div>
   </div>
 </div>
 <div class="container"> 
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
 <h2 class="section-title">
 <strong><h1 style="text-align:center;">Admin Dashboard</h1></strong></h2> 
 <div class="row"> 
 <div class="col-md-3 p-3"> 
 <div class="admin"> 
    <i class="fa fa-bed" aria-hidden="true"></i>
 <h3 ><strong>ROOMS</strong></h3> <a href="rooms.php">Check Rooms</a> 
</div>
 </div > 
<div class="col-md-3  p-3"> 
 <div class="admin"> 
 <i class="fa fa-cog" aria-hidden="true"></i>
 <h3><strong>SERVICES</strong></h3><a href="services.php">Check Services</a> 
</div>
 </div> 
<div class="col-md-3  p-3"> 
 <div class="admin"> 
    <i class="fa fa-users" aria-hidden="true"></i>
 <h3><strong>EMPLOYEE</strong></h3> <a href="employee.php">Check Employee</a></div > 
</div>
<div class="col-md-3  p-3"> 
 <div class="admin"> 
    <i class="fa fa-home" aria-hidden="true"></i>
 <h3><strong>SALLE</strong></h3> <a href="salle.php">Check Salle</a></div > 
</div> </div>
<div class="row" style="margin-top: 3%;"> 
<div class="col-md-3  p-3"> 
 <div class="admin"> 
    <i class="fa fa-user" aria-hidden="true"></i>
 <h3><strong>ADMIN</strong></h3>
 <div class="links">
  <a href="account.php">Create New Account</a>
  <a href="changepassword.php"  data-toggle="modal" data-target="#myModal">Change Password</a>
  <a href="admin.php">LogOut</a></div>
</div> 
</div>
<div class="col-md-3  p-3"> 
    <div class="admin"> 
       <i class="fa fa-tv" aria-hidden="true"></i>
    <h3><strong>FOOD</strong></h3> <a href="food.php">Check Food</a></div> 
   </div>
   <div class="col-md-3  p-3 "> 
    <div class="admin"> 
       <i class="fa fa-filter" aria-hidden="true"></i>
    <h3><strong>DRINKS</strong></h3> <a href="drink.php">Check Drinks</a></div> 
   </div>
   <div class="col-md-3  p-3"> 
    <div class="admin"> 
       <i class="fa fa-image" aria-hidden="true"></i>
    <h3><strong>GALLERY</strong></h3> <a href="gallery.php">Check gallery</a></div> 
   </div>
</div>
</div></div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
</body>
</html>