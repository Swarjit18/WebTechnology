<?php

session_start();
    require_once '../Model/Connection.php';
    // define variables and set to empty values
   $usernameErr = $passwordErr =$error ="" ;
   $username = $password =""  ; 
   

 if ($_SERVER["REQUEST_METHOD"] == "POST") 
   {
    
       if (empty($_POST["username"])) 
       {
          $usernameErr = "UserName is required!";
       } 
     
       else if(empty($_POST["password"])) 
       {
           $passwordErr = "Password is required!";
       } 
       else 
           {    
            $uname=$_POST['username'];
            $pass=$_POST['password'];
            
            $connection = new db();
            $conobj=$connection->db_conn();
            
            $userQuery=$connection->CheckUser($uname,$pass,"store1",$conobj);
            
            if ($userQuery->num_rows > 0) {
            $_SESSION["username"] = $uname;
            $_SESSION["password"] = $pass;
            header('location: ../Dashboard.php');
            
            }
             else{
            $error = "Username or Password is invalid";
            }
            $connection->closecon($conobj);
            
             
           }
     
     if(!empty($_POST["Remember me"]))
     {
       if(empty($passwordErr) && empty($usernameErr))
       {

        
     $cookie_user = $username;
      $cookie_pass = $password;
      setcookie($cookie_user, $cookie_pass, time() + (86400 * 30), "/"); 

       }
     }
       
   }



?>