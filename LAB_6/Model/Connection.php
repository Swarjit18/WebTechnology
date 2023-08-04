<?php 
class DB{
    function db_conn()
    {
        $DBHostname = "localhost";
        $DBUsername = "root";
        $DBpass = "";
        $DBName = "entry";

        $conn=new mysqli($DBHostname,$DBUsername,$DBpass,$DBName) or die("Connect failed: %s\n". $conn -> error);
        return $conn;
    }
    function InsertData($fname, $email, $uname, $gender, $pass, $tablename, $conn)
    {
        $sqlstr="INSERT INTO $tablename (FName, U_Name, Email, Gender, Pass) 
        VALUES ('$fname','$uname','$email','$gender','$pass')";
        if($conn->query($sqlstr)===TRUE)
        {
            header("location: ../Login.php");
        }
        else
        {
            echo "Insertation failed ".$conn->error;
        }
    }
    function CheckUser($uname,$pass,$tablename,$conn)
    {
        $result = $conn->query("SELECT * FROM  $tablename WHERE U_Name='$uname' AND Pass='$pass'");
        return $result;
    }


    function UpdateData($fname, $email, $uname, $gender, $tablename, $conn)
   {
     $sql = "UPDATE $tablename SET FName='$fname', Email='$email', Gender='$gender' WHERE U_Name='$uname'";

    if ($conn->query($sql) === TRUE) {
        $result= TRUE;
        header("location: ../Dashboard.php");
    } else {
        $result= FALSE ;
    }
    return  $result;
    }

    function closecon($conn)
    {
        $conn->close();
    }
}
