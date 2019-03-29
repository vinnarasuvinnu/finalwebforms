<?php



$batch=$_POST['batch'];
$department=$_POST['department'];
$course=$_POST['course'];
$shift=$_POST['shift'];
$regno=$_POST['regno'];
$rollno=$_POST['rollno'];
$e_name=$_POST['e_name'];
$t_name=$_POST['t_name'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$bgroup=$_POST['bgroup'];
$community=$_POST['community'];


$caste=$_POST['caste'];
$religion=$_POST['religion'];
$nationality=$_POST['national'];
$school=$_POST['school'];
$marks=$_POST['marks'];




$others=$_POST['others'];
$hostel=$_POST['hostel'];
$communication=$_POST['communication'];
$p_address=$_POST['permanant'];
$no1=$_POST['no1'];
$no2=$_POST['no2'];
$aadhar=$_POST['aadhar'];
$mail=$_POST['mail'];
$incharge=$_POST['incharge'];
$cgp1=$_POST['cgp1'];
$cgp2=$_POST['cgp2'];




$cgp3=$_POST['cgp3'];
$cgp4=$_POST['cgp4'];
$cgp5=$_POST['cgp5'];
$cgp6=$_POST['cgp6'];
$s1=$_POST['sem1'];

$s2=$_POST['sem2'];
$s3=$_POST['sem3'];
$s4=$_POST['sem4'];
$s5=$_POST['sem5'];
$s6=$_POST['sem6'];
$fname=$_POST['fname'];
$fqualification=$_POST['fqualification'];
$foccupation=$_POST['foccupation'];
$mname=$_POST['mname'];
$mqualification=$_POST['mqualification'];
$moccupation=$_POST['moccupation'];


$ph=$_POST['ph'];

$bankname=$_POST['bankname'];
$branch=$_POST['branch'];
$accno=$_POST['accno'];
$bcode=$_POST['bcode'];
$ifsc=$_POST['ifsc'];
$micr=$_POST['micr'];
$hod_sign=$_POST['hod_sign'];
$student_sign=$_POST['student_sign'];



$filetmp=$_FILES['pimage']['tmp_name'];
	$filename=$_FILES['pimage']['name'];
	$uploaddir='pictures/';
	$uploadfile=$uploaddir.basename($filename);
	if(move_uploaded_file($filetmp, $uploadfile)){




		$q1="INSERT INTO `profile` (`batch`, `department`, `course`, `shift`, `image`, 

		`reg_no`, `roll_no`, `name`, `t_name`, `e_name`, `dob`, `sex`, `blood`, 


		`community`, `caste`, `religion`, `nationality`, `school`, `marks`,

		 `communication`, `p_address`, `contact1`, `contact2`, `aadhar`, `email`, 

		 `incharge`, `s1`, `s2`, `s3`, `s4`, `s5`, `s6`, `f_name`, `m_name`, `f_qual`,

		  `m_qual`, `f_occup`, `m_occup`, `b_name`, `b_branch`, `a_no`, `b_code`, 

		  `ifsc`, `micr`, `hod`, `student`, `cgp1`, `cgp2`, `cgp3`, `cgp4`, `cgp5`, 

		  `cgp6`,`ph`,`others`,`hostel`) VALUES ('$batch', '$department', '$course', '$shift', '$uploadfile', 

		'$regno', '$rollno', 'null', '$t_name', '$e_name', '$dob', '$gender', '$bgroup',


		 '$community', '$caste', '$religion', '$nationality', '$school', '$marks', 

		 '$communication', '$p_address', '$no1', '$no2', 'aadhar', '$mail',

		  '$incharge', '$s1', '$s2', '$s3','$s4', '$s5', '$s6', '$fname',

		   '$mname', '$fqualification', '$mqualification', '$foccupation',

		    '$moccupation', '$bankname', '$branch', '$accno', '$bcode', '$ifsc', 


		    '$micr', '$hod_sign','$student_sign','$cgp1','$cgp2','$cgp3','$cgp4','$cgp5','$cgp6','$ph','$others','$hostel')";




		include('../project/db.php');

		if(mysqli_query($con,$q1)){

			echo "<script>alert('your profile is updated');location.href='index.php'</script>";

			
			/*header("Location:index.php");*/
		}
		echo mysqli_error($con);
	}
	
	else{
echo "<script>alert('Something went wrong');location.href='index.php'</script>";
	}






?>