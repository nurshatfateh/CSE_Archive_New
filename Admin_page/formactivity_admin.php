<?php 

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=1"
    />

    <!-- Bootstrap CSS -->

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css"
    />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    />

    <!-- favicon link css  -->
    <link rel="shortcut icon" type="image/png" href="img/MIST.png" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  
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
    <title>Achievement_Submission Form_admin</title>
	  
	  
  </head>
  <body class="bg-light">
    <!-- navbar starts -->
    <nav class="navbar navbar-expand-xxl navbar-light bg-white border-bottom border-5 border-success">
      <div class="container-fluid">
        <button
          class="navbar-toggler mb-3"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <a href="home_admin.php">
          <img class="ms-md-5 ms-2" src="../img/navlogo.png" alt="logo"
        /></a>

        <div
          class="collapse navbar-collapse mx-5 fw-bold"
          id="navbarSupportedContent"
        >
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item mx-3">
              <a class="nav-link" href="home_admin.php">Home</a>
            </li>
            <li class="nav-item mx-3">
              <a class="nav-link" href="projects_admin.php">Projects</a>
            </li>
            <li class="nav-item mx-3">
              <a class="nav-link" href="achievements_admin.php">Achievements</a>
            </li>
            <li class="nav-item mx-3">
              <a class="nav-link" href="publication_admin.php">Publications</a>
            </li>
            <li class="nav-item mx-3">
              <a
                class="nav-link "
                aria-current="page"
                href="projects_admin.php"
                >Thesis</a
              >
            </li>
            <li class="nav-item mx-3">
              <a class="nav-link active text-success fw-bolder" href="activity_admin.php">Activity</a>
            </li>
          </ul>
          <a href="adminprofile_admin.php"> <img class="ms-3" src="../img/profile.png" alt="profile" /></a> 
          <a href="adminprofile_admin.php" class="text-decoration-none text-black">   <h6 class="mt-2 mx-3  " >Tanjim Hasan</h6></a> 

          <a href="../logout.php"
            ><button type="button" class="btn btn-danger mx-3">
              Log Out
            </button></a
          >
        </div>
      </div>
    </nav>
    <!-- navbar ends -->
    <!-- main container  -->

    <div class="bg-light">
		<div class="container mt-5" style="padding:0px 10px 0px 0px">
        <h2 style="text-align: left"><b>Activity Submission Form :</b></h2>
		</div>
		
      <div class="container mt-5">
		  
        <form class="row g-3 bg-white border p-3 border-1" style="border-radius: 5px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" action="Submitted.php">
          <!-- <form class="row g-3 bg-white border p-3" method="post" enctype="multipart/form-data"> -->
          <div class="col-md-6">
            <label for="EventName" class="form-label">
                <h6>Event Name <font color="ff0000">*</font></h6>
            </label>
            <input type="text" required class="form-control" id="EventName" />
          </div>

          <div class="col-md-6">
            <label for="EventTag" class="form-label">
              <h6>Post Tag Line<font color="ff0000">*</font></h6>
            </label>
            <input type="text" required class="form-control" id="EventTag" />
          </div>

        
          <div class="col-md-6"  >
            <label for="CommenceDate" class="form-label" required>
              <h6>Commence Date <font color="ff0000">*</font></h6>
            </label>
			  
		    <div class="input-group input-daterange">
          <input type="text" id="CommenceDate" placeholder="DD/MM/YYYY" class="form-control text-left mr-2">         
          <span class="fa fa-calendar" id="fa-1"></span>
        </div>
			  
          </div>

          <div class="col-md-6" >
            <label for="CompletionDate" class="form-label"
              ><h6>Completion Date <font color="ff0000">*</font></h6>
			  </label>
           <div class="input-group input-daterange">
          <input type="text" id="CompletionDate" placeholder="DD/MM/YYYY" class="form-control text-left ml-2">
          <span class="fa fa-calendar" id="fa-2"></span>
        </div>
				  
          </div>
          <div class="col-md-12">
            <label for="PostDetails" class="form-label"
              ><h6>Post Details <font color="ff0000">*</font></h6>
            </label>
            <textarea
              class="form-control"
              id="PostDetails"
              rows="3"
              required
            ></textarea>
          </div>
          
          <div class="col-md-6">
            <label for="Organizer" class="form-label">
                <h6>Organizer </h6>
            </label>
            <input type="text"  class="form-control" id="Organizer" />
          </div>

          <div class="col-md-6">
            <label for="Main Photo" class="form-label" required>
              <h6>Main Photo(jpg/png/jpeg)<font color="ff0000">*</font></h6>
            </label>
            <br />
            <input type="File" accept="image/*" />
          </div>

          <div class="col-md-6">
            <label for="Associated Photos" class="form-label">
              <h6>
                Associated Photos(jpg/png/jpeg)
                
              </h6>
            </label>
            <br />
            <input
              type="File"
              accept="image/*"
              id="files"
              name="files"
              multiple
            />
            <br /><br />
          </div>


          <div class="col-md-6"><br></div>
          <div class="col-md-12 text-center">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </form>
      </div>
      <!-- footer -->

      <div class="container-fluid bg-black py-2 mt-5">
        <div class="row">
          <div class="col-md-4 pt-3">
            <p class="text-white-50 text-center">
              © 2022 MIST. All rights reserved
            </p>
            <p></p>
          </div>

          <div class="col-md-4 pt-3">
            <p class="text-white-50 text-center">
              <i class="bi bi-telephone"></i>+880 176 902 3806
            </p>
          </div>
          <div class="col-md-4 pt-3">
            <p class="text-white-50 text-center">
              <i class="bi bi-envelope"></i> info@mist.ac.bd
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- footer ends -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>

</html>


<?php 

}else{

     header("Location: ../logout.php");

     exit();

}

 ?>