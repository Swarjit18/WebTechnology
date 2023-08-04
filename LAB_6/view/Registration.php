<!DOCTYPE html>  
 <html>  
      <head>  
           <title>Registration</title>  
           
     <script>
    function validateform(){  
    var Name=document.myform.name.value;
    var Email=document.myform.email.value;
    var User=document.myform.un.value;
    var Pass=document.myform.pass.value;
    var Gender=document.myform.gender.value;
    var Image=document.myform.image.value;
    var Dob=document.myform.dob.value;
    // console.log(Name);
    
    let flag = true;
    if(Name == null || Name == "")
    {
        //alert("Enter a Valid Name");
        document.getElementById("nameErr").innerHTML = "Name can't be blank";
        document.getElementById("name").style.borderColor = "red";
        flag = false;

    }
    if(Email == null || Email == "")
    {
        //alert("Enter a Valid Email");
        document.getElementById("emailErr").innerHTML = "Email can't be blank";
        document.getElementById("email").style.borderColor = "red";
        flag = false;
        //e.preventDefault();
    }
     if(User== null || User == "")
    {
        //alert("Enter a Valid UserName");
        document.getElementById("userErr").innerHTML = "UserName can't be blank";
        document.getElementById("un").style.borderColor = "red";
        flag=false;
        //e.preventDefault();
    }
     if(Pass== null || Pass == "")
    {
       // alert("Enter a Valid Password");
        document.getElementById("passErr").innerHTML = "Password can't be blank";
        document.getElementById("pass").style.borderColor = "red";
        flag=false;
        //e.preventDefault();
    }
   if(document.getElementById('male').checked==false && document.getElementById('female').checked==false && document.getElementById('other').checked==false)
    {
        //alert("Click a valid Gender");
        document.getElementById("genderErr").innerHTML = "Gender can't be blank";
       
        flag=false;
        //e.preventDefault();
    }
     if(Image== null || Image == "")
    {
        //alert("please upload an Image");
        document.getElementById("imgErr").innerHTML = "Image can't be empty";
        document.getElementById("image").style.borderColor = "red";
        flag=false;
        //e.preventDefault();
    }
    if(Dob==null || Dob=="")
    {
        document.getElementById("dobErr").innerHTML = "Date of birth can't be empty";
        document.getElementById("dob").style.borderColor = "red";
        flag=false;
    }
    if(flag)
    return true;
    else 
    return false;
}
</script>

</head>  
<body >  
      <fieldset>
     <?php
     include "NavBar.php";
     ?>
           <div class="container" style="width:500px;">  
                <h3 style="color:voilet;"> Registration </h3><br>                 
                <form name="myform" action="Controller/Add_User.php" method="post" enctype="multipart/form-data" onsubmit="return validateform();"> 
                   
                      
                     <label>Name:</label>  
                     <input type="text" name="name" id="name"class="form-control"/> 
                     <p id="nameErr"></p> 
                     <label>E-mail:</label>
                     <input type="text" name = "email" id="email" class="form-control" />
                     <p id="emailErr"></p>
                     
                     <label>User Name:</label>
                     <input type="text" name = "un" id="un" class="form-control" />
                     <p id="userErr"></p>
                     <label>Password:</label>
                     <input type="password" name = "pass" id="pass" class="form-control" />
                     <p id="passErr"></p>
                     <label>Confirm Password:</label>
                     <input type="password" name = "Cpass" class="form-control" /><br>
                   
                    <lebel>Gender:</lebel>
                    <input type="radio" id="male" name="gender" value="male">
                     <label for="male">Male</label>                     
                     <input type="radio" id="female" name="gender" value="female">
                     <label for="female">Female</label>
                     <input type="radio" id="other" name="gender" value="other">
                     <label for="other">Other</label>
                     <p id="genderErr"></p> 
                     <lebel>Date of Birth:</lebel>
                     <input type="date" name="dob" id="dob"> 
                     <p id="dobErr"></p>
                     
                     
                     
                    
        <legend><lebel>Profile Picture: </lebel></legend>
             <img  src="1.png" height="200px" width="200px"  title="profile pic"> </img>
        
            <span style="color: rgb(255, 255, 255);">  </span>  
            <input type="file" name="image" id="image">
            <p id="imgErr"></p>
  
        <div>
         <hr>
         <input type="submit" name="submit" value="Append" class="btn btn-info" /><br>
       </div>
               
       </form> 
       
       </fieldset>   

     <?php
     include "Footer.php";
     ?>
</body>  
</html>  