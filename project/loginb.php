<?php
session_start();
include("db.php");
$name=$_POST['name'];
$pass=$_POST['pass'];
$type=$_POST['type'];
if($type=="student"){
	if($name=="student" && $pass=="student@123"){
$_SESSION['student']=$name;
header('Location:../profile/index.php');
}
else{

	echo "<script>alert('Your password does not match');location.href='login.php'</script>";
}

}
else{
$q1="select * from login where name='$name' and password='$pass'";
$res=mysqli_query($con,$q1);
if(mysqli_num_rows($res)==1){
	$row=mysqli_fetch_array($res);
	if ($row['name']=="csdept"){
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

}
?>