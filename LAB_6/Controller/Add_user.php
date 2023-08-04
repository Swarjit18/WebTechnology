<?php  

require_once '../Model/Connection.php';
 $message = '';  
 $error = '';
  $isok=false;
  $istrue=false;
 if(isset($_POST["submit"]))  
 {  
      if(empty($_POST["name"]))  
      {  
           $error = "<label class='text-danger'>Enter Name</label>";  
      }
      else if(empty($_POST["email"]))  
      {  
           $error = "<label class='text-danger'>Enter an e-mail</label>";  
      }  
      else if(empty($_POST["un"]))  
      {  
           $error = "<label class='text-danger'>Enter a username</label>";  
      }  
      else  if(!preg_match("/^[a-zA-Z-_ ]*$/",$_POST["un"])) 
      {
     $error = " User Name can contain alpha numeric characters, period, dash or underscore only!";
    }

      else if(empty($_POST["pass"]))  
      {  
           $error = "<label class='text-danger'>Enter a password</label>";  
      }
      else if(!preg_match('/[\'^£$%&*()}{@#~?><,|=_+¬-]/', $_POST["pass"])) 
          {
        $error= "Password must contain at least 1 special char!"."<br>";
     }
      else if(empty($_POST["Cpass"]))  
      {  
           $error = "<label class='text-danger'>Confirm password field cannot be empty</label>";  
      } 
      else if(empty($_POST["gender"]))  
      {  
           $error = "<label class='text-danger'>Gender cannot be empty</label>";  
      } 
       
      else  
      {  
               if (isset($_POST['submit'])) {
                    $fname=$_POST["name"];
                    $gender=$_POST["gender"];
                    $email=$_POST["email"];
                    $uname=$_POST["un"];
                    $pass=$_POST["pass"];

                    $mydb = new DB();
                    $conobj=$mydb->db_conn();
                    $mydb->InsertData($fname, $email, $uname, $gender, $pass, "store1", $conobj);
                    $mydb->closecon($conobj);
               
                    
                    
           }
     } 
     
}  
 ?>  

 <!DOCTYPE html>
 <html lang="en">
 <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>AddUser</title>
 </head>
 <body>
      <?php
      if($isok)
      echo "Registration Sucsessfull </br>";
      else
      echo $error;
      ?>
 </body>
 </html>