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

    <title>Add Achievement</title>
  </head>
  <body class="bg-light">
    <!-- navbar starts -->
    <nav
      class="navbar navbar-expand-xxl navbar-light bg-white border-bottom border-5 border-success"
    >
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
              <a class="nav-link active active text-success fw-bolder" href="achievements_admin.php" aria-current="page">Achievements</a>
            </li>
            <li class="nav-item mx-3">
              <a class="nav-link " href="publication_admin.php">Publications</a>
            </li>
            <li class="nav-item mx-3">
              <a
                class="nav-link "
                href="thesis_admin.php"
                >Thesis</a
              >
            </li>
            <li class="nav-item mx-3">
              <a class="nav-link" href="activity_admin.php">Activity</a>
            </li>
          </ul>
          <a href="adminprofile_admin.php">
            <img class="ms-3" src="../img/profile.png" alt="profile"
          /></a>
          <a href="adminprofile_admin.php" class="text-decoration-none text-black">
            <h6 class="mt-2 mx-3">Tanjim hossain</h6></a
          >

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
      <div class="container mt-5">
        <h2 class="my-5">Add Achievements :</h2>

        <form class="row g-3 bg-white border p-3" action="Con_addAchievement.php" method="post">
          <!-- <form class="row g-3 bg-white border p-3" method="post" enctype="multipart/form-data"> -->
          <div class="col-md-6">
            <label for="Event Name" class="form-label">
              <h6>Event Name</h6>
            </label>
            <br />

            <input
              type="text"
              class="form-control"
              id="EventName"
			        name="EventName"   
              placeholder="Event Name"
            />
          </div>
		  
			<div class="col-md-6">
            <label for="Organizer" class="form-label">
              <h6>Organizer</h6>
            </label>
            <br />

            <input
              type="text"
              class="form-control"
              id="Organizer"
			   name="Organizer"
              placeholder="Organizer"
            />
          </div>

          <div class="col-md-6">
            <label for="AcademicYear" class="form-label">
              <h6>Academic year <font color="ff0000">*</font></h6>
            </label>
            <br />

            <select class="form-control selectpicker" required name="AcademicYear">
              <option selected disabled>Academic Year</option>
              <option value="2016-2017">2016-2017</option>
              <option value="2017-2018">2017-2018</option>
              <option value="2018-2019">2018-2019</option>
              <option value="2019-2020">2019-2020</option>
              <option value="2020-2021">2020-2021</option>
              <option value="2021-2022">2021-2022</option>
              <option value="2022-2023">2022-2023</option>
              <option value="2023-2024">2023-2024</option>
              <option value="2024-2025">2024-2025</option>
            </select>
          </div>

          <div class="col-md-6">
            <label for="NoOfStudent" class="form-label">
              <h6>No of Student <font color="ff0000">*</font></h6>
            </label>
            <br />

            <select class="form-control selectpicker" required name="StudentNo" id="StudentNo">
              <option selected disabled>No of Student</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
          </div>
          
          <div class="col-md-6">
            <label for="Team Name" class="form-label">
              <h6>Team Name</h6>
            </label>
            <br />

            <input
              type="text"
              class="form-control"
              id="TeamName"
			        name="TeamName"   
              placeholder="Team Name"
            />
          </div>
          <div class="col-md-6"></div>
          <div class="col-md-6">
            <label for="Supervisor" class="form-label">
              <h6>
                Supervisor
                <font color="ff0000">*</font>
              </h6>
            </label>
            <br />
            <select
              class="form-control selectpicker"
              multiple
              data-live-search="true"
              data-placeholder="Supervisor,Co Supervisor"
              required
			        name="supervisor1"
			        id="supervisor1"
            >
              <option value="Lec Muhaimin Bin Munir">Lec Muhaimin Bin Munir</option>
              <option value="Lec Nafiz Imtiaz Khan">Lec Nafiz Imtiaz Khan</option>
              <option value="Lec Shadman Aadeeb">Lec Shadman Aadeeb</option>
              <option value="Prof Mahbubur Rahman">Prof Mahbubur Rahman</option>
              <option value="Lec Swapnil Biswas">Lec Swapnil Biswas</option>
            </select>
          </div>
          <div class="col-md-6">
            <label for="Co Supervisor" class="form-label">
              <h6>
                Co Supervisor<font color="ff0000">*</font>
              </h6>
            </label>
            <br />
            <select
              class="form-control selectpicker"
              multiple
              data-live-search="true"
              data-placeholder="Supervisor,Co Supervisor"
              required
			        name="supervisor2"
			        id="supervisor2"
            >
              <option value="Lec Muhaimin Bin Munir">Lec Muhaimin Bin Munir</option>
              <option value="Lec Nafiz Imtiaz Khan">Lec Nafiz Imtiaz Khan</option>
              <option value="Lec Shadman Aadeeb">Lec Shadman Aadeeb</option>
              <option value="Prof Mahbubur Rahman">Prof Mahbubur Rahman</option>
              <option value="Lec Swapnil Biswas">Lec Swapnil Biswas</option>
            </select>
          </div>
          <div class="col-md-6">
            <label for="Co Supervisor" class="form-label">
              <h6>
                CO Supervisor
              </h6>
            </label>
            <br />
            <select
              class="form-control selectpicker"
              multiple
              data-live-search="true"
              data-placeholder="Supervisor,Co Supervisor"
              required
			        name="supervisor3"
			        id="supervisor3"
            >
              <option value="Lec Muhaimin Bin Munir">Lec Muhaimin Bin Munir</option>
              <option value="Lec Nafiz Imtiaz Khan">Lec Nafiz Imtiaz Khan</option>
              <option value="Lec Shadman Aadeeb">Lec Shadman Aadeeb</option>
              <option value="Prof Mahbubur Rahman">Prof Mahbubur Rahman</option>
              <option value="Lec Swapnil Biswas">Lec Swapnil Biswas</option>
            </select>
          </div>
          <div class="col-md-6">
            <label for="Co Supervisor" class="form-label">
              <h6>
                CO Supervisor
              </h6>
            </label>
            <br />
            <select
              class="form-control selectpicker"
              multiple
              data-live-search="true"
              data-placeholder="Supervisor,Co Supervisor"
			        name="supervisor4"
			        id="supervisor4"
            >
              <option value="Lec Muhaimin Bin Munir">Lec Muhaimin Bin Munir</option>
              <option value="Lec Nafiz Imtiaz Khan">Lec Nafiz Imtiaz Khan</option>
              <option value="Lec Shadman Aadeeb">Lec Shadman Aadeeb</option>
              <option value="Prof Mahbubur Rahman">Prof Mahbubur Rahman</option>
              <option value="Lec Swapnil Biswas">Lec Swapnil Biswas</option>
            </select>
          </div>

          <div class="col-md-6">
            <label for="StudentID1" class="form-label">
              <h6>Team Member-1 ID<font color="ff0000">*</font></h6>
            </label>
            <br />

            <input
              type="text"
              class="form-control"
              id="StudentID1"
			        name="StudentID1"   
              placeholder="StudentID1"
              required
            />
          </div>

          <div class="col-md-6">
            <label for="TeamMember1" class="form-label">
              <h6>Team Member-1 Name <font color="ff0000">*</font></h6>
            </label>
            <input
              type="text"
              class="form-control"
              id="TeamMember1"
			        name="TeamMember1"
              required
            />
          </div>

          <div class="col-md-6">
            <label for="StudentID2" class="form-label">
              <h6>Team Member-2 ID</h6>
            </label>
            <br />

            <input
              type="text"
              class="form-control"
              id="StudentID2"
			        name="StudentID2"   
              placeholder="StudentID2"
            />
          </div>
          <div class="col-md-6">
            <label for="TeamMember2" class="form-label">
              <h6>Team Member-2 Name</h6>
            </label>
            <input type="text"  class="form-control" id="TeamMember2" name="TeamMember2"/>
          </div>
          
          <div class="col-md-6">
            <label for="StudentID3" class="form-label">
              <h6>Team Member-3 ID</h6>
            </label>
            <br />

            <input
              type="text"
              class="form-control"
              id="StudentID3"
			        name="StudentID3"   
              placeholder="StudentID3"
            />
          </div>
          <div class="col-md-6">
            <label for="TeamMember3" class="form-label">
              <h6>Team Member-3 Name</h6>
            </label>
            <input type="text"  class="form-control" id="TeamMember3" name="TeamMember3"/>
          </div>

          
          <div class="col-md-6">
            <label for="StudentID4" class="form-label">
              <h6>Team Member-4 ID</h6>
            </label>
            <br />

            <input
              type="text"
              class="form-control"
              id="StudentID4"
			        name="StudentID4"   
              placeholder="StudentID4"
            />
          </div>
          <div class="col-md-6">
            <label for="TeamMember4" class="form-label">
              <h6>Team Member-4 Name</h6>
            </label>
            <input type="text"  class="form-control" id="TeamMember4" name="TeamMember4"/>
          </div>
           
          <div class="col-md-6">
            <label for="StudentID5" class="form-label">
              <h6>Team Member-5 ID</h6>
            </label>
            <br />

            <input
              type="text"
              class="form-control"
              id="StudentID5"
			        name="StudentID5"   
              placeholder="StudentID5"
            />
          </div>
          <div class="col-md-6">
            <label for="TeamMember5" class="form-label">
              <h6>Team Member-5 Name</h6>
            </label>
            <input type="text"  class="form-control" id="TeamMember5" name="TeamMember5"/>
          </div>

          <div class="col-md-12">
            <label for="Achievement Title" class="form-label"
              ><h6>Achievement Title <font color="ff0000">*</font></h6>
            </label>
            <textarea
              class="form-control"
              id="AchievementTitle"
			   name="AchievementTitle"
              rows="3"
              required
            ></textarea>
          </div>
          <div class="col-md-12">
            <label for="Achievement detailes" class="form-label">
              <h6>Achievement detailes <font color="ff0000">*</font></h6>
            </label>

            <textarea
              class="form-control"
              id="AchievementDetailes"
			        name="AchievementDetailes"
              rows="5"
              required
            ></textarea>
          </div>
          
		<div class="col-md-6">
            <label for="Prize Money" class="form-label">
              <h6>Prize Money</h6>
            </label>
            <br />

            <input
              type="text"
              class="form-control"
              id="PrizeMoney"
			        name="PrizeMoney"   
              placeholder="Prize Money"
            />
          </div>	
			
          <div class="col-md-6">
            <label for="Achievement Photo" class="form-label">
              <h6>Achievement Photo(jpg/png/jpeg)</h6>
            </label>
            <br />
            <input type="File" accept="image/*" id="AchievementPic"
              name="AchievementPic"/>
          </div>

      

          <div class="col-md-12">
            <button type="submit"  class="btn btn-success">Submit</button>
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