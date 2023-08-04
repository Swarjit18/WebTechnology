<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title> DASHBOARD </title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>

</style>
</head>
<body >

<div class="header">  
    <p><h1>
           <span style="color:orange;"> Doctor Portal </span>
           
           </h1>
        </p>
       <h3 align= "right">
       
       <span><a href="Home page.php"> Logout </a></span>
           </h3>
    
  </div>

<div class="row">
  <div class="col-3 col-s-3 menu">
    <fieldset>
    <legend> <h2> <u> Account </u> </h2></legend><h1 align="center" ><h1/>
             <h2>
             <ul>
                <li> <a  href="Dashboard.php">Dashboard </a></li> 
                <li> <a  href="My Profile.php">My Profile</a> </li>
                <li> <a  href="Change Password.php">Change Password</a> </li> 
               
            </ul>  
            </h2>
  </fieldset>
  </div>

  
</div>

  <?php
    include "Footer.php";
  ?>

</body>
</html>