<?php
$insert = false;
if(isset($_POST['name'])){
$sname= "localhost";

$unmae= "root";

$password = "";

$db_name = "test_db";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);


// Collect post variables
$roll = $_POST['roll'];
$name = $_POST['name'];
$regno = $_POST['regno'];
$batch = $_POST['batch'];
$dept = $_POST['dept'];
$quota = $_POST['quota'];
$parentjob = $_POST['parentjob'];
$dob = $_POST['dob'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$presadd = $_POST['presadd'];
$permadd = $_POST['permadd'];
$father = $_POST['father'];
$mother = $_POST['mother'];
$blood = $_POST['blood'];
$current = $_POST['current'];
$session = $_POST['session'];
$pass= $_POST['pass'];
$sql = "INSERT INTO student (roll, name, regno, batch, dept, quota, parentjob, dob, phone, email, presadd, permadd, father, mother, blood, current, pass, session) VALUES ('" . $roll . "', '" . $name . "', '" . $regno . "', '" . $batch . "', '" . $dept . "', '" . $quota . "', '" . $parentjob . "', '" . $dob . "', '" . $phone . "', '" . $email . "', '" . $presadd . "', '" . $permadd . "', '" . $father . "', '" . $mother . "', '" . $blood . "', '" . $current . "', '" . $pass . "', '" . $session . "')";
// echo $sql;

// Execute the query
if($conn->query($sql) == true){
  // echo "Successfully inserted";

  // Flag for successful insertion
  $insert = true;
  echo '<script type="text/javascript">';
  echo ' alert("DONE!")';  //not showing an alert box.
  echo '</script>';

}
else{
  echo "ERROR: $sql <br> $conn->error";
}




$conn->close();
}
?>








<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Student Registration Form</title>

<!-- BOOTSTRAP CSS -->
<link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

<!-- favicon link css  -->
<link rel="shortcut icon" type="image/png" href="img/MIST.png" />

<!-- Script --> 

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script> 
<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script> 
<script src="js/function.js" ></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.2/css/bootstrap-responsive.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script> 
<script>
    $(document).ready(function(){

$('.input-daterange').datepicker({
    format: 'dd/mm/yyyy',
    autoclose: true,
    calendarWeeks : false,
    clearBtn: true,
    disableTouchKeyboard: true
});

});
	  
	  </script> 

<!-- Font -->
<link href="http://fonts.cdnfonts.com/css/berlin-sans-fb-demi" rel="stylesheet">
</head>
<body >

<!-- navbar starts -->
<nav class="navbar navbar-expand-xxl navbar-light border-bottom border-5 border-success">
  <div class="container-fluid"> <a 	 href="registerform.html">
    <button 
				class="navbar-toggler mb-3"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
				>
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
      <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
    </svg>
    </button>
    </a> <a href="index.php"> <img class="ms-md-5 ms-1" src="img/navlogo.png" alt="logo"
        /></a> </div>
</nav>
	
<div class="bg-light" >
  <div class="container" style="padding: 10px 10px 0px 0px;">
    <h2 style="text-align: left"><b>Student Registration Form:</b></h2>
  </div>
  <div class="container mt-5">
    <form class="row g-3 bg-white border p-3 border-1" style="border-radius: 5px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" action="StudentReg.php" method="post">
      
      <!-- <form class="row g-3 bg-white border p-3" method="post" enctype="multipart/form-data"> -->
      
      <div class="col-md-6">
        <label for="StudentName" class="form-label">
        <h6>Student Name<font color="ff0000">*</font></h6>
        </label>
        <input type="text" name="name" required class="form-control" id="StudentName" />
      </div>
      <div class="col-md-6">
        <label for="Session" class="form-label">
        <h6>Session<font color="ff0000">*</font></h6>
        </label>
        <input type="text" name="session" required class="form-control" id="Session" />
      </div>
      <div class="col-md-6">
        <label for="StudentRoll" class="form-label">
        <h6>Student Roll<font color="ff0000">*</font></h6>
        </label>
        <input type="text" name="roll" required class="form-control" id="StudentRoll" />
      </div>
      <div class="col-md-6">
        <label for="Batch" class="form-label">
        <h6>Batch<font color="ff0000">*</font></h6>
        </label>
        <input type="text" name="batch" required class="form-control" id="Batch" />
      </div>
      <div class="col-md-6">
        <label for="quota" class="form-label">
        <h6>Quota<font color="ff0000">*</font></h6>
        </label>
        <br />
        <select class="form-control selectpicker" required name="quota" >
          <option selected disabled>Type</option>
          <option value="Army">Army</option>
          <option value="Civil">Civil</option>
        
        </select>
      </div>
      <div class="col-md-6">
        <label for="job" class="form-label">
        <h6>Parent's Job<font color="ff0000">*</font></h6>
        </label>
        <br />
        <select class="form-control selectpicker" required name="parentjob" >
          <option selected disabled>Type</option>
          <option value="Government">Government</option>
          <option value="Non-Government">Non-Government</option>
        
        </select>
      </div>
      <div class="col-md-6">
        <label for="Department" class="form-label">
        <h6>Department<font color="ff0000">*</font></h6>
        </label>
        <br />
        <select class="form-control selectpicker" required name="dept" >
          <option selected disabled>Department</option>
          <option value="CE">Department of Civil Engineering (CE)</option>
          <option value="EWCE">Department of Environmental, Water Resources and Coastal Engineering (EWCE)</option>
          <option value="ARCH">Department of Architecture</option>
          <option value="PME">Department of Petroleum &amp; Mining Engineering (PME)</option>
          <option value="CSE">Department of Computer Science &amp; Engineering (CSE)</option>
          <option value="EECE">Department of Electrical, Electronic and Communication Engineering (EECE)</option>
          <option value="ME">Department of Mechanical Engineering (ME)</option>
          <option value="AE">Department of Aeronautical Engineering (AE)</option>
          <option value="NAME">Department of Naval Architecture and Marine Engineering (NAME)</option>
          <option value="IPE">Department of Industrial and Production Engineering (IPE)</option>
          <option value="NSE">Department of Nuclear Science &amp; Engineering (NSE)</option>
          <option value="BME">Department of Biomedical Engineering (BME)</option>
          <option value="SH">Department of Science &amp; Humanities (SH)</option>
        </select>
      </div>
      <div class="col-md-6">
        <label for="Student Photo" class="form-label">
        <h6>Student Photo</h6>
        </label>
        <br />
        <input type="File" accept="image/*" />
      </div>
     
      <div class="col-md-6">
        <label for="Registration Number" class="form-label">
        <h6>Registration Number<font color="ff0000">*</font></h6>
        </label>
        <input type="text" name="regno" required class="form-control" id="RegistrationNumber" />
      </div>
      <div class="col-md-6"  ></div>
      <div class="col-md-6"  >
        <label for="Date_Of_Birth" class="form-label">
        <h6>Date of birth</h6>
        </label>
        <div class="input-group input-daterange">
          <input type="text" id="DOB" name="dob" placeholder="DD/MM/YY" class="form-control text-left mr-2">
          <span class="fa fa-calendar" id="fa-1"></span> </div>
      </div>
   
      <div class="col-md-6">
        <label for="Father's Name" class="form-label">
        <h6>Father's Name<font color="ff0000">*</font></h6>
        </label>
        <input type="text" name="father"  required class="form-control" id="FatherName" />
      </div>
      <div class="col-md-6">
        <label for="Mother's Name" class="form-label">
        <h6>Mother's Name<font color="ff0000">*</font></h6>
        </label>
        <input type="text" name="mother"  required class="form-control" id="MotherName" />
      </div>
      <div class="col-md-6">
        <label for="Current" class="form-label">
        <h6>Currently A Student?<font color="ff0000">*</font></h6>
        </label>
        <br />
        <select class="form-control selectpicker" required name="current" >
          <option selected disabled>Yes/No</option>
          <option value="Yes">Yes</option>
          <option value="No">No</option>
        
        </select>
      </div>
      <div class="col-md-12">
        <label for="Present Address" class="form-label"
              >
        <h6>Present Address</h6>
        </label>
        <textarea
              class="form-control"
              id="PresentAddress"
              rows="3"
              name="presadd"
            ></textarea>
      </div>
      <div class="col-md-12">
        <label for="Permanent Address" class="form-label"
              >
        <h6>Permanent Address</h6>
        </label>
        
        <textarea
              class="form-control"
              id="PermanentAddress"
              rows="3"
              name="permadd"
            ></textarea>
      </div>
      <div class="col-md-6">
        <label for="Blood Group" class="form-label">
        <h6>Blood Group<font color="ff0000">*</font></h6>
        </label>
        <br/>
        <select class="form-control selectpicker" required name="blood" >
          <option selected disabled>Blood Group</option>
          <option value="A+">A+</option>
          <option value="A-">A-</option>
          <option value="B+">B+</option>
          <option value="B-">B-</option>
          <option value="O+">O+</option>
          <option value="O-">O-</option>
          <option value="AB+">AB+</option>
          <option value="AB-">AB-</option>
        </select>
      </div>
      <div class="col-md-6">
        <label for="Phone Number" class="form-label">
        <h6>Phone Number<font color="ff0000">*</font></h6>
        </label>
        <input type="text" name="phone" required class="form-control" id="PhoneNumber" />
      </div>
      <div class="col-md-12" id="pwd-container">
        <section class="login-form">
          <div class="form-floating mt-3 mb-2">
            <input type="email" name="email" placeholder="Email" required  class="form-control input-lg"/>
            <label for="email">
            <h6>Email address<font color="ff0000">*</font></h6>
            </label>
          </div>
          <div class="form-floating mt-3 mb-2">
            <input type="password" name="pass" class="form-control input-lg" id="password" placeholder="Password" required />
            <label for="password">
            <h6>Password<font color="ff0000">*</font></h6>
            </label>
          </div>
          <div class="pwstrength_viewport_progress"></div>
        </section>
      </div>
      <div class="col-md-12">
        <div class="form-floating mt-3 mb-2">
          <input type="text" style="-webkit-text-security: disc" class="form-control input-lg" id="confirmpassword" placeholder="Confirm Password" required />
          <label for="confirmpassword">Confirm Password<font color="ff0000">*</font></label>
          <div class="form-text confirm-message"></div>
        </div>
      </div>
      <div class="col-md-6"><br>
      </div>
      <div class="col-md-12 text-center">
        <button type="submit" class="btn btn-success" >Submit</button>
        

      </div>
    </form>
  </div>


<!-- footer -->

<div class="container-fluid bg-black py-2 mt-5">
  <div class="row">
    <div class="col-md-4 pt-3">
      <p class="text-white-50 text-center"> © 2022 MIST. All rights reserved </p>
      <p></p>
    </div>
    <div class="col-md-4 pt-3">
      <p class="text-white-50 text-center"> <i class="bi bi-telephone"></i>+880 176 902 3806 </p>
    </div>
    <div class="col-md-4 pt-3">
      <p class="text-white-50 text-center"> <i class="bi bi-envelope"></i> info@mist.ac.bd </p>
    </div>
  </div>
</div>
</div>
<!-- BOOTSTRAP JS --> 

<script src="js/login.js"></script> 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script> 
<script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script> 
<script>
    $('#password, #confirmpassword').on('keyup', function(){

        $('.confirm-message').removeClass('success-message').removeClass('error-message');

        let password=$('#password').val();
        let confirm_password=$('#confirmpassword').val();

        if(password===""){
            $('.confirm-message').text("Password Field cannot be empty").addClass('error-message');
        }
        else if(confirm_password===""){
            $('.confirm-message').text("Confirm Password Field cannot be empty").addClass('error-message');
        }
        else if(confirm_password===password)
        {
            $('.confirm-message').text('Password Match!').addClass('success-message');
        }
        else{
            $('.confirm-message').text("Password Doesn't Match!").addClass('error-message');
        }

    });
</script>
</body>
	
	<style>
	input:not(:valid) {
     color: #FF0000;
  }	
	</style>
	
</html>
