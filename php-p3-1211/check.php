<?php
include('connection.php');
$user_check=$_POST["username"];
$sql = mysqli_query($db,"SELECT LeerlingID, Wachtwoord FROM leerling WHERE LeerlingID='$user_check'");
$row=mysqli_fetch_array($sql,MYSQLI_ASSOC);

if ($_POST["password"] == $row["Wachtwoord"]) {
	session_start();
	$_SESSION['username'] = $row['LeerlingID'];
	header("Location: project.php?id=".$row['LeerlingID']);
}
else {
	header("Location: projectlogin.php?error");
}



 

// $_SESSION['username'] = $row['username'];

 
// $login_user=$row['username'];
 
// if(isset($_SESSION['username']))
// {
// header("Location: project.php");
// } else {
// 	echo "unsuccessful login";
// }

?>

