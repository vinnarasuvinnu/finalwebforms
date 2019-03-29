<?php
session_start();
include("db.php");
$name=$_POST['name'];
$pass=$_POST['pass'];
$q1="select * from login where name='$name' and password='$pass'";
$res=mysqli_query($con,$q1);
if(mysqli_num_rows($res)==1){
	$row=mysqli_fetch_array($res);
	if ($row['name']=="qqq"){
	$_SESSION['uname']="qqq";

		echo '<script>';
	echo 'alert("your admin login is succesful");location.href="admin/index.php"';
	echo '</script>';

	}
	else{
		$_SESSION['uname']=$row['name'];
	echo '<script>';
	echo 'alert("your login is succesful");location.href="myform.php"';
	echo '</script>';
}
}
else{

	echo '<script>';
	echo 'alert("your login is unsuccesful");location.href="login.php"';
	echo '</script>';
}

?>