<?php
session_start();
?>

<!DOCTYPE html>
<html >

  <head> <title>CHANGE PASSWORD </title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
*
</style>
</head>
    <body>
      <?php
      include "NavBar.php"?>

         

      <div>
      
         
          <form  method="post" action="Controller/Pass.php"> <br>
            <fieldset>
      
      <legend><h2 align="center"> CHANGE PASSWORD  </h2></legend>
      
      <p >
      
    
          <label>Current Password:</label> 
          <input type="password" name="currentPassword" value=""><br><br>
          

          <label >New Password:</label>
          <input type="password" name="newpassword" value=""><br><br>
          
      
          <label >Retype New Password:</label>
          <input type="password" name="rnewpassword" value=""><br>
           
     
         <h4 > <input type="submit" name="submit" value="Submit"> </h4>
     
          <br/>
        
      </p>
      
      </div>
      
<?php
    include "Footer.php";
  ?>
        
                 <br>
               </fieldset>
      </form>


  
  </body>

</html>