<?php
session_start(); 
include('Model/Connection.php');
if(empty($_SESSION["username"]))
{
header("Location: Login.php"); // Redirecting To Home Page
}

?>

<!DOCTYPE HTML>  
<html>
<fieldset>
  <head> <title>  Edit Profile </title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>

</style>

<?php

        $name=$uname=$email=$gender="";
        $connection = new db();
        $conobj=$connection->db_conn();
        $userQuery=$connection->CheckUser($_SESSION["username"],$_SESSION["password"],"store1",$conobj);
        
        if ($userQuery->num_rows > 0) 
        {
            while($row = $userQuery->fetch_assoc()) 
            {
                $name=$row["FName"];
                $email=$row["Email"];
                $gender=$row["Gender"];
                $uname=$row["U_name"];
            }
        }else 
        {
            echo "0 results";
        }
        
        ?>
  </head>
   <body >

<div class="header">  
    <p><h1>
           <span style="color:violet;">Doctor Portal</span>
           
           </h1>
        </p>
       <h3 align= "right">
        <span> Welcome </span>
           <span> <?php echo $uname?> </span>
       <span><a href="Home page.php"> | Logout </a></span>
           </h3>
    <hr>  
  </div>

<div class="row">
  <div class="col-3 col-s-3 menu">
    <fieldset>
    <legend> <h2> <u> Account </u> </h2></legend><h1 align="center" ><h1/>
             <h2>
             <ul>
                <li> <a href="Dashboard.php">Dashboard </a></li> 
                <li> <a href= "My Profile.php">My Profile</a> </li>
                <li> <a href="Change Password.php">Change Password</a> </li> 
            </ul>  
            </h2>
  </fieldset>
  </div>

  <fieldset>
          <form method="post" action="Controller/Edit.php"> 
          
              <div align="center">
                  <h3> <b> Edit Profile</b> </h3>
</div>
               <p align="center">
          
               <b> <p align="center"> <label for="name"> Name : </label> </b> 
               <input type="text" name="name" value="name"> 
               
               <hr>
              
                <b> <p align="center"> <label for="email"> Email : </label> </b>
                <input type="text" name="email" value="email">
                
                <hr>

                <b> <p align="center"> <label for="gender"> Gender : </label></b>
                <input type="radio" name="gender" value="female"> Female
                <input type="radio" name="gender" value="male"> Male
                <input type="radio" name="gender" value="other"> Other  
               
                <hr>
          
                
    
 
                 <h3 align="center"><input type="submit" name="submit" value="Submit"> </h3>
                  <hr>

                 </p>
                </fieldset>
                </form>
                <br>

<?php
    include "Footer.php";
  ?>

</body>
</html>