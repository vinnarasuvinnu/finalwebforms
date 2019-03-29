<?php 

$id=$_GET['id'];
include('db.php');
$q1="select * from profile where id='$id'";


$res=mysqli_query($db,$q1);
$row=mysqli_fetch_array($res);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style type="text/css">
  body{
    background-color: grey;
  }
  tr{
    border: 1px solid black;
  }
  td,th{
    border: 1px solid black;
    padding: 5px;
  }
  input[type='text'],select{
    pointer-events:none;

  }
  tr:hover {
    background-color: green;
}

tr:hover td {
    background-color: transparent; /* or #000 */
}
</style>
<script type="text/javascript">
	function call(){
alert("oc");

  }
$(document).ready(function(){
  var gender="<?php echo $row['sex']?>";
  $('#gender').val(gender);



});

</script>
</head>
<body>
	<div class="container" style="background-color: white;margin-top:10px;padding: 30px " >
		<div class="row" >
      <div class="col-md-12">
      <div class="text-center">
        <h3 class="text-center">Govt Arts College</h3>
        <h4>Dharmapuri-636705</h4>
        <h5>STUDENT PROFILE</h5>
       

      </div>
       <div class="row">

          <div class="col-md-12 text-right">

 <img name="blah" src="../../profile/<?php echo $row['image'] ?>" alt="your image" wnameth="100" height="100" style="margin-right: 200px;border: 2px solid black" />
          </div>
        </div>
        <form action="upload.php" method="post" enctype="multipart/form-data">
        <div class="row">
      <div class="col-md-4">
        <table>
          <tr>
        <td>Batch:</td><td><input type="text" style="margin-left: 40px" value="<?php echo $row['batch'] ?>" name="batch"></td>
        </table>
      </div>
      </div>
<br>
    <div class="row">
      <div class="col-md-4">
        <table>
          <tr style="border: 0px">
        <td>Department:</td><td><input type="text" value="<?php echo $row['department'] ?>" name="department" ></td>

        <td>Course:</td><td><input type="text" value="<?php echo $row['course'] ?>" name="course"></td>
        <td>Shift:</td><td><input type="text" value="<?php echo $row['shift'] ?>" name="shift"></td>
        <td style="border: 0px;">
<!--   <img name="blah" src="#" alt="your image" wnameth="100" height="100" />
 --></td>
</tr>
        </table>
      </div>
      </div>

      <div class="row" style="margin-top: 20px">
        <div class="col-md-6">
            <table>

              <tr>
                <td>
                  1
                </td>
                <td>
                  Reg.No
                </td>

                <td>
                  <input type="text" value="<?php echo $row['reg_no'] ?>" name="regno">
                </td>

              </tr>



                 <tr>
                <td>
                  2
                </td>
                <td>
Roll.No                </td>

                <td>
                  <input type="text" value="<?php echo $row['roll_no'] ?>" name="rollno">
                </td>

              </tr>
              





                 <tr>
                <td>
                  3
                </td>
                <td>
Name(<span style="color:red"> *English</span>)             </td>

                <td>
                  <input type="text" value="<?php echo $row['e_name'] ?>" name="e_name">
                </td>

              </tr>



                 <tr>
                <td>
                  4
                </td>
                <td>
Name(<span style="color:red"> *Tamil</span>)             </td>
              </td>

                <td>
                  <input type="text" value="<?php echo $row['t_name'] ?>" name="t_name">
                </td>

              </tr>



                 <tr>
                <td>
                  5
                </td>
                <td>
Date of birth              </td>

                <td>
                  <input type="date" name="dob" value="<?php echo $row['dob'] ?>" style="wnameth: 210px">
                </td>

              </tr>



                 <tr>
                <td>
                  6
                </td>
                <td>
Sex            </td>

                <td>
                  <select name="gender" class="form-control" id="gender">
                    <option value="male"> Male </option>
                    <option value="female"> Female </option>

                  </select>
                </td>

              </tr>



                    <tr>
                <td>
                  7
                </td>
                <td>
Blood group             </td>

                <td>
                  <input type="text" value="<?php echo $row['blood'] ?>" name="bgroup">
                </td>

              </tr>





                    <tr>
                <td>
                  8
                </td>
                <td>
Community           </td>

                <td>
                  <input type="text" value="<?php echo $row['community'] ?>" name="community">
                </td>

              </tr>


                    <tr>
                <td>
                  9
                </td>
                <td>
Caste          </td>

                <td>
                  <input type="text" value="<?php echo $row['caste'] ?>" name="caste">
                </td>

              </tr>




                    <tr>
                <td>
                  10
                </td>
                <td>
Religion        </td>

                <td>
                  <input type="text" value="<?php echo $row['religion'] ?>" name="religion">
                </td>

              </tr>





                    <tr>
                <td>
                  11
                </td>
                <td>
Natinality       </td>

                <td>
                  <input type="text" value="<?php echo $row['natonality'] ?>" name="national">
                </td>

              </tr>





                      <tr>
                <td>
                  12
                </td>
                <td>
School studied(HSC)      </td>

                <td>
                  <input type="text" value="<?php echo $row['school'] ?>" name="school">
                </td>

              </tr>






                      <tr>
                <td>
                  13
                </td>
                <td>
Marks      </td>

                <td>
                  <input type="text" value="<?php echo $row['marks'] ?>" name="marks">
                </td>

              </tr>


                  <tr>
                <td>
                  14
                </td>
                <td>
PH     </td>

                <td>
                  <input type="text" value="<?php echo $row['ph'] ?>" name="ph">
                </td>

              </tr>



                    <tr>
                <td>
                  15
                </td>
                <td>
Others     </td>

                <td>
                  <input type="text" value="<?php echo $row['others'] ?>" name="others">
                </td>

              </tr>



                    <tr>
                <td>
                  16
                </td>
                <td>
Hostlers    </td>

                <td>
                  <input type="text" value="<?php echo $row['hostel'] ?>" name="hostel">
                </td>

              </tr>




               






            </table>
        </div>

        <div class="col-md-6">

          <table>

                 <tr>
                <td>
                  17
                </td>
                <td>
Communication Address   </td>

                <td>
                  <textarea name="communication" value=""><?php echo $row['communication'] ?></textarea>
                </td>

              </tr>


                   <tr>
                <td>
                  18
                </td>
                <td>
Permanant Address   </td>

                <td>
                  <textarea name="permanant" value=""><?php echo $row['p_address'] ?></textarea>
                </td>

              </tr>


                    <tr>
                <td>
                  19
                </td>
                <td>
Contact 1    </td>

                <td>
                  <input type="text" value="<?php echo $row['contact1'] ?>" name="no1">
                </td>

              </tr>


                    <tr>
                <td>
                  
                </td>
                <td>
Contact 2    </td>

                <td>
                  <input type="text" value="<?php echo $row['contact2'] ?>" name="no2">
                </td>

              </tr>


                    <tr>
                <td>
                  20
                </td>
                <td>
Aadhar no    </td>

                <td>
                  <input type="text" value="<?php echo $row['aadhar'] ?>" name="aadhar">
                </td>

              </tr>

                   <tr>
                <td>
                  21
                </td>
                <td>
Email   </td>

                <td>
                  <input type="email" value="<?php echo $row['email'] ?>" name="mail">
                </td>

              </tr>




               <tr>
                <td>
                  22
                </td>
                <td>
Class Incharge  </td>

                <td>
                  <input type="text" value="<?php echo $row['incharge'] ?>" name="incharge">
                </td>

              </tr>
            


          </table>

          <br>


          <table>

            <tr>
              <th>Semester</th>
              <th>GPA</th>
              <th>Attendance</th>
            </tr>

            <tr>
              <td>Semesetr I</td>
              <td><input type="text" value="<?php echo $row['cgp1'] ?>" name="cgp1"></td>
              <td>
                  <input type="text" value="<?php echo $row['s1'] ?>" name="sem1">
                </td>

            </tr>


             <tr>
              <td>Semesetr II</td>
              <td><input type="text" value="<?php echo $row['cgp2'] ?>" name="cgp2"></td>
              <td>
                  <input type="text" value="<?php echo $row['s2'] ?>" name="sem2">
                </td>

            </tr>

             <tr>
              <td>Semesetr III</td>
              <td><input type="text" value="<?php echo $row['cgp2'] ?>" name="cgp3"></td>
              <td>
                  <input type="text" value="<?php echo $row['s3'] ?>" name="sem3">
                </td>

            </tr>



            <tr>
              <td>Semesetr IV</td>
              <td><input type="text" value="<?php echo $row['cgp4'] ?>" name="cgp4"></td>
              <td>
                  <input type="text" value="<?php echo $row['s4'] ?>" name="sem4">
                </td>

            </tr>



            <tr>
              <td>Semesetr V</td>
              <td><input type="text" value="<?php echo $row['cgp5'] ?>" name="cgp5"></td>
              <td>
                  <input type="text" value="<?php echo $row['s5'] ?>" name="sem5">
                </td>

            </tr>

             <tr>
              <td>Semesetr VI</td>
              <td><input type="text" value="<?php echo $row['cgp6'] ?>" name="cgp6"></td>
              <td>
                  <input type="text" value="<?php echo $row['s6'] ?>" name="sem6">
                </td>

            </tr>
            


          </table>


        </div>

      </div>
<div class="row" style="margin-top: 30px">

  <div class="col-md-2">
  </div>
    <div class="col-md-8">
 <div class="text-center" style="border: 1px solid black">
  <b>Family Details</b>
</div>
<br>
    <table>
      <tr>
      <th>RelationShip</th>
      <th>Name</th>
      <th>Qualification</th>
      <th>Occupation</th>
    </tr>
    <tr>
      <td>Father</td>
      <td><input type="text" value="<?php echo $row['f_name'] ?>" name="fname"></td>
      <td><input type="text" value="<?php echo $row['f_qual'] ?>" name="fqualification"></td>
      <td><input type="text" value="<?php echo $row['f_occup'] ?>" name="foccupation"></td>

    </tr>

     <tr>
      <td>Mother</td>
      <td><input type="text" value="<?php echo $row['m_name'] ?>" name="mname"></td>
      <td><input type="text" value="<?php echo $row['m_qual'] ?>" name="mqualification"></td>
      <td><input type="text" value="<?php echo $row['m_occup'] ?>" name="moccupation"></td>

    </tr>
      
    </table>
</div>
<div class="col-md-2">

  </div>

  </div>

<div class="row" style="margin-top: 20px;">
<div class="col-md-12" >
  <div class="text-center" style="border: 1px solid black" >
 <b> Bank Details</b><hr>
</div>
<div class="row" style="padding: 20px;">
<div class="col-md-6" style="border: 1px solid black;padding: 20px">
  Name of the Bank:&nbsp;&nbsp;&nbsp;&nbsp;<input type="text"  value="<?php echo $row['b_name'] ?>" name="bankname">
  <br><br>
  Name of the Branch:<input type="text"  value="<?php echo $row['b_branch'] ?>" name="branch">
  <br><br>
  Account Number:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text"  value="<?php echo $row['a_no'] ?>" name="accno">


</div>

<div class="col-md-6" style="border: 1px solid black;padding: 20px">
  Brach Code:&nbsp;&nbsp;&nbsp;<input type="text" value="<?php echo $row['b_code'] ?>" name="bcode">
  <br><br>
  IFSC Code:&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" value="<?php echo $row['ifsc'] ?>" name="ifsc">
  <br><br>
  MICR Code:&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" value="<?php echo $row['micr'] ?>" name="micr">
  </div>
</div>
<div class="row" style="margin-top: 20px;margin-bottom: 100px;padding: 50px">

<div class="col-md-6">
<div class="text-center">
<input type="text" value="<?php echo $row['hod'] ?>" name="hod_sign">
<br>
HOD signature
</div>


</div>


<div class="col-md-6">
<div class="text-center">
<input type="text" value="<?php echo $row['student'] ?>" name="student_sign">
<br>
Student signature
</div>


</div>
</div>
<div class="row">
 <div class="col-md-12">
<div class="text-center">
  <input type="button" name="Print" class="btn btn-primary" onclick="window.print()" value="Print">
</div>
</div>
</div>
  </div>

  </div>
</div>





  </div>

</form>



</div>


</div>
</div>
</div>
</body>
</html>