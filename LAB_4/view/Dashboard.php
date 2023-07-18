<?php
	session_start();
	if(isset($_SESSION['flag'])){
?>

<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
</head>

<body>
    <center>
        <table border="1" width="700px">

            <tr>
                <td colspan="2">
                    <table width="700px">
                        <tr>
                            <td align="Left">
                                <h3><b>XCompany</b></h3>
                            </td>
                            <td align="Right">
                            Hello,
                                <a href="View Profile.php"><?=$_SESSION['user']['username']?></a> |
                                <a href="../controller/Logout.php">Logout</a>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr>
                <td height="150px" width="200px">
                    List:<br><hr>
                    <ul>
                        <li><a href="Dashboard.php">Dashboard</a></li>
                        <li><a href="View Profile.php">View Profile</a></li>
                        <li><a href="Edit Profile.php">Edit Profile</a></li>
                        <li><a href="Change Profile Picture.php">Change Profile Picture</a></li>
                        <li><a href="Change Password.php">Change Password</a></li>
                        <li><a href="../controller/Logout.php">Log out</a></li>
                    </ul>
                </td>
                <td>
                    <b>Welcome Doctor, <?=$_SESSION['user']['username']?></b>
                </td>
            </tr>
            <tr>
            <td colspan="2">
                <center>
                Copyright © 2017
                </center>
            </td>
        </tr>

            
        </table>
    </center>
</body>

</html>

<?php
	
	}else{
		header('location: login.php');
	}
?>