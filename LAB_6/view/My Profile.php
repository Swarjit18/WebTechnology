<?php
session_start(); 
include('Model/Connection.php');
if(empty($_SESSION["username"]))
{
header("Location: Login.php"); // Redirecting To Home Page
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>My Profile</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
* 

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
</style>
</head>
<body>

<div class="header">  
    <p><h1>
           <span style="color:white;"> Doctor Portal </span>
           <span style="color:orange;"><sup>REGULAR USER</sup></span>
           </h1>
        </p>
       <h3 align= "right">
        <span> Welcome </span>
           <span> <?php echo $uname?> </span>
       <span><a  href="Home page.php"> | Logout </a></span>
           </h3>
    <hr>  
  </div>

<div class="row">
  <div class="col-3 col-s-3 menu">
    <fieldset>
    <legend> <h2> <u> Account </u> </h2></legend><h1 align="center" ><h1/>
             <h2>
             <ul>
                <li> <a style ="color:white;" href="Dashboard.php">Dashboard </a></li> 
                <li> <a style ="color:white;" href= "My Profile.php">My Profile</a> </li>
                <li> <a style ="color:white;" href="Change Password.php">Change Password</a> </li> 
            </ul>  
            </h2>
  </fieldset>
  </div>

        <div>
           
            <fieldset>
            <div align="center">
                <h1>
                    <b>PROFILE</b>
                </h1>
            </div>
            
            


            <h3 align="center">
            
            <img  src="1.png" height="200px" width="250px"  > </img> <br>
           
            
            Name <span style="color: rgb(255, 255, 255);"> </span>:<?php  echo $name?><hr>
            Email <span style="color: rgb(255, 255, 255);"> </span> : <?php  echo $email?> <hr>
            Gender<span style="color: rgb(255, 255, 255);"> </span>: <?php  echo $gender?> <hr>
              
            <a style ="color:SlateBlu;"  href="Edit Profile.php"> Edit Profile </a>
            
            </h3>
            </fieldset>
            
        </div>

  <?php
    include "Footer.php";
  ?>

</body>
</html>