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
</style>
<script type="text/javascript">
	
function readURL(input) {

  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      $('#blah').attr('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]);
  }
}
$(document).ready(function(){

$("#imgInp").change(function() {
  readURL(this);
});
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

 <img id="blah" src="#" alt="your image" wnameth="100" height="100" style="margin-right: 200px;border: 2px solid black" />
          </div>
        </div>
        <form action="upload.php" method="post" enctype="multipart/form-data">
        <div class="row">
      <div class="col-md-4">
        <table>
          <tr>
        <td>Batch:</td><td><input type="text" style="margin-left: 40px" name="batch"></td>
        </table>
      </div>
      </div>
<br>
    <div class="row">
      <div class="col-md-4">
        <table>
          <tr style="border: 0px">
        <td>Department:</td><td><input type="text" name="department" ></td>

        <td>Course:</td><td><input type="text" name="course"></td>
        <td>Shift:</td><td><input type="text" name="shift"></td>
        <td style="border: 0px;">
  <input type='file' name="pimage" id="imgInp" style="margin-left: 5px;" />
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
                  <input type="text" name="regno">
                </td>

              </tr>



                 <tr>
                <td>
                  2
                </td>
                <td>
Roll.No                </td>

                <td>
                  <input type="text" name="rollno">
                </td>

              </tr>
              





                 <tr>
                <td>
                  3
                </td>
                <td>
Name(<span style="color:red"> *English</span>)             </td>

                <td>
                  <input type="text" name="e_name">
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
                  <input type="text" name="t_name">
                </td>

              </tr>



                 <tr>
                <td>
                  5
                </td>
                <td>
Date of birth              </td>

                <td>
                  <input type="date" name="dob" style="wnameth: 210px">
                </td>

              </tr>



                 <tr>
                <td>
                  6
                </td>
                <td>
Sex            </td>

                <td>
                  <select name="gender" class="form-control">
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
                  <input type="text" name="bgroup">
                </td>

              </tr>





                    <tr>
                <td>
                  8
                </td>
                <td>
Community           </td>

                <td>
                  <input type="text" name="community">
                </td>

              </tr>


                    <tr>
                <td>
                  9
                </td>
                <td>
Caste          </td>

                <td>
                  <input type="text" name="caste">
                </td>

              </tr>




                    <tr>
                <td>
                  10
                </td>
                <td>
Religion        </td>

                <td>
                  <input type="text" name="religion">
                </td>

              </tr>





                    <tr>
                <td>
                  11
                </td>
                <td>
Natinality       </td>

                <td>
                  <input type="text" name="national">
                </td>

              </tr>





                      <tr>
                <td>
                  12
                </td>
                <td>
School studied(HSC)      </td>

                <td>
                  <input type="text" name="school">
                </td>

              </tr>






                      <tr>
                <td>
                  13
                </td>
                <td>
Marks      </td>

                <td>
                  <input type="text" name="marks">
                </td>

              </tr>


                  <tr>
                <td>
                  14
                </td>
                <td>
PH     </td>

                <td>
                  <input type="text" name="ph">
                </td>

              </tr>



                    <tr>
                <td>
                  15
                </td>
                <td>
Others     </td>

                <td>
                  <input type="text" name="others">
                </td>

              </tr>



                    <tr>
                <td>
                  16
                </td>
                <td>
Hostlers    </td>

                <td>
                  <input type="text" name="hostel">
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
                  <textarea name="communication"></textarea>
                </td>

              </tr>


                   <tr>
                <td>
                  18
                </td>
                <td>
Permanant Address   </td>

                <td>
                  <textarea name="permanant"></textarea>
                </td>

              </tr>


                    <tr>
                <td>
                  19
                </td>
                <td>
Contact 1    </td>

                <td>
                  <input type="text" name="no1">
                </td>

              </tr>


                    <tr>
                <td>
                  
                </td>
                <td>
Contact 2    </td>

                <td>
                  <input type="text" name="no2">
                </td>

              </tr>


                    <tr>
                <td>
                  20
                </td>
                <td>
Aadhar no    </td>

                <td>
                  <input type="text" name="aadhar">
                </td>

              </tr>

                   <tr>
                <td>
                  21
                </td>
                <td>
Email   </td>

                <td>
                  <input type="email" name="mail">
                </td>

              </tr>




               <tr>
                <td>
                  22
                </td>
                <td>
Class Incharge  </td>

                <td>
                  <input type="text" name="incharge">
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
              <td><input type="text" name="cgp1"></td>
              <td>
                  <input type="text" name="sem1">
                </td>

            </tr>


             <tr>
              <td>Semesetr II</td>
              <td><input type="text" name="cgp2"></td>
              <td>
                  <input type="text" name="sem2">
                </td>

            </tr>

             <tr>
              <td>Semesetr III</td>
              <td><input type="text" name="cgp3"></td>
              <td>
                  <input type="text" name="sem3">
                </td>

            </tr>



            <tr>
              <td>Semesetr IV</td>
              <td><input type="text" name="cgp4"></td>
              <td>
                  <input type="text" name="sem4">
                </td>

            </tr>



            <tr>
              <td>Semesetr V</td>
              <td><input type="text" name="cgp5"></td>
              <td>
                  <input type="text" name="sem5">
                </td>

            </tr>

             <tr>
              <td>Semesetr VI</td>
              <td><input type="text" name="cgp6"></td>
              <td>
                  <input type="text" name="sem6">
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
      <td><input type="text" name="fname"></td>
      <td><input type="text" name="fqualification"></td>
      <td><input type="text" name="foccupation"></td>

    </tr>

     <tr>
      <td>Mother</td>
      <td><input type="text" name="mname"></td>
      <td><input type="text" name="mqualification"></td>
      <td><input type="text" name="moccupation"></td>

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
  Name of the Bank:&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="bankname">
  <br><br>
  Name of the Branch:<input type="text" name="branch">
  <br><br>
  Account Number:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="accno">


</div>

<div class="col-md-6" style="border: 1px solid black;padding: 20px">
  Brach Code:&nbsp;&nbsp;&nbsp;<input type="text" name="bcode">
  <br><br>
  IFSC Code:&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="ifsc">
  <br><br>
  MICR Code:&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="micr">
  </div>
</div>
<div class="row" style="margin-top: 20px;margin-bottom: 100px;padding: 50px">

<div class="col-md-6">
<div class="text-center">
<input type="text" name="hod_sign">
<br>
HOD signature
</div>


</div>


<div class="col-md-6">
<div class="text-center">
<input type="text" name="student_sign">
<br>
Student signature
</div>


</div>
</div>
<div class="row">
 <div class="col-md-12">
<div class="text-center">
<input type="submit" value="submit" class="btn btn-primary">
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