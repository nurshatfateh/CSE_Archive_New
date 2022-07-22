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
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />

    <!-- favicon link css  -->
    <link rel="shortcut icon" type="image/png" href="img/MIST.png" />

    <!-- Script -->

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="js/function.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>
    <script>
      $(document).ready(function() {

        $('.input-daterange').datepicker({
          format: 'dd/mm/yyyy',
          autoclose: true,
          calendarWeeks: false,
          clearBtn: true,
          disableTouchKeyboard: true
        });

      });
    </script>

    <script>
      $(function() {
        $("#StudentID1").css("display", "none");
        $("#StudentID2").css("display", "none");
        $("#StudentID3").css("display", "none");
        $("#StudentID4").css("display", "none");
        $("#StudentID5").css("display", "none");

        $("#faculty1").css("display", "none");
        $("#faculty2").css("display", "none");
        $("#faculty3").css("display", "none");
        $("#faculty4").css("display", "none");
      });

      function update() {

        var x = document.getElementById("StudentNo").value;
        if (x == "0") {
          $("#StudentID1").css("display", "none");
          $("#StudentID2").css("display", "none");
          $("#StudentID3").css("display", "none");
          $("#StudentID4").css("display", "none");
          $("#StudentID5").css("display", "none");
        } else if(x == "1") {
          $("#StudentID1").css("display", "block");
          $("#StudentID2").css("display", "none");
          $("#StudentID3").css("display", "none");
          $("#StudentID4").css("display", "none");
          $("#StudentID5").css("display", "none");
        } else if (x == "2") {

          $("#StudentID1").css("display", "block");
          $("#StudentID2").css("display", "block");
          $("#StudentID3").css("display", "none");
          $("#StudentID4").css("display", "none");
          $("#StudentID5").css("display", "none");

        } else if (x == "3") {

          $("#StudentID1").css("display", "block");
          $("#StudentID2").css("display", "block");
          $("#StudentID3").css("display", "block");
          $("#StudentID4").css("display", "none");
          $("#StudentID5").css("display", "none");

        } else if (x == "4") {
          $("#StudentID1").css("display", "block");
          $("#StudentID2").css("display", "block");
          $("#StudentID3").css("display", "block");
          $("#StudentID4").css("display", "block");
          $("#StudentID5").css("display", "none");
        } else {
          $("#StudentID1").css("display", "block");
          $("#StudentID2").css("display", "block");
          $("#StudentID3").css("display", "block");
          $("#StudentID4").css("display", "block");
          $("#StudentID5").css("display", "block");
        }

      };
      update();

      function update1() {

        var x = document.getElementById("AffiliatedFaculties").value;
        if (x == "0") {
          $("#faculty1").css("display", "none");
          $("#faculty2").css("display", "none");
          $("#faculty3").css("display", "none");
          $("#faculty4").css("display", "none");
        }
        else if (x == "1") {
          $("#faculty1").css("display", "block");
          $("#faculty2").css("display", "none");
          $("#faculty3").css("display", "none");
          $("#faculty4").css("display", "none");
        } else if (x == "2") {

          $("#faculty1").css("display", "block");
          $("#faculty2").css("display", "block");
          $("#faculty3").css("display", "none");
          $("#faculty4").css("display", "none");

        } else if (x == "3") {

          $("#faculty1").css("display", "block");
          $("#faculty2").css("display", "block");
          $("#faculty3").css("display", "block");
          $("#faculty4").css("display", "none");
        } else {
          $("#faculty1").css("display", "block");
          $("#faculty2").css("display", "block");
          $("#faculty3").css("display", "block");
          $("#faculty4").css("display", "block");
        }

      };
      update1();
    </script>


    <title>Add Achievement</title>
  </head>

  <body class="bg-light">
    <!-- navbar starts -->
    <nav class="navbar navbar-expand-xxl navbar-light bg-white border-bottom border-5 border-success">
      <div class="container-fluid">
        <button class="navbar-toggler mb-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a href="home_admin.php">
          <img class="ms-md-5 ms-2" src="../img/navlogo.png" alt="logo" /></a>

        <div class="collapse navbar-collapse mx-5 fw-bold" id="navbarSupportedContent">
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
              <a class="nav-link " href="thesis_admin.php">Thesis</a>
            </li>
            <li class="nav-item mx-3">
              <a class="nav-link" href="activity_admin.php">Activity</a>
            </li>
          </ul>
          <a href="adminprofile_admin.php">
            <img class="ms-3" src="../img/profile.png" alt="profile" /></a>
          <a href="adminprofile_admin.php" class="text-decoration-none text-black">
            <h6 class="mt-2 mx-3">Tanjim hossain</h6>
          </a>

          <a href="../logout.php"><button type="button" class="btn btn-danger mx-3">
              Log Out
            </button></a>
        </div>
      </div>
    </nav>
    <!-- navbar ends -->
    <!-- main container  -->

    <div class="bg-light">
      <div class="container mt-5">
        <h2 class="my-5">Add Achievements :</h2>

        <form class="row g-3 bg-white border p-3" action="Con_addAchievement.php" method="post" enctype="multipart/form-data">
          <!-- <form class="row g-3 bg-white border p-3" method="post" enctype="multipart/form-data"> -->
          <div class="col-md-6">
            <label for="Event Name" class="form-label">
              <h6>Event Name</h6>
            </label>
            <br />

            <input type="text" class="form-control" id="EventName" name="EventName" placeholder="Event Name" />
          </div>

          <div class="col-md-6">
            <label for="Organizer" class="form-label">
              <h6>Organizer</h6>
            </label>
            <br />

            <input type="text" class="form-control" id="Organizer" name="Organizer" placeholder="Organizer" />
          </div>

          <div class="col-md-6">
            <label for="AcademicYear" class="form-label">
              <h6>Academic year <font color="ff0000">*</font>
              </h6>
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
              <h6>No of affiliated Student</h6>
            </label>
            <br />

            <select class="form-control selectpicker"  name="StudentNo" id="StudentNo" onChange="update()">
              <option selected value="0" >No Student</option>
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

            <input type="text" class="form-control" id="TeamName" name="TeamName" placeholder="Team Name" />
          </div>

          <div class="col-md-6">
            <label for="NoOfStudent" class="form-label">
              <h6>Affiliated Faculties</h6>
            </label>
            <br />
            <select class="form-control selectpicker" required name="AffiliatedFaculties" id="AffiliatedFaculties" onChange="update1()">
              <option selected value="0">No Faculties</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
            </select>
          </div>

          <div class="col-md-6" id="faculty1">
            <label for="Affiliated Faculty" class="form-label" >
              <h6>
                Affiliated Faculty 1
              </h6>
            </label>
            <br />
            <select class="form-control selectpicker" data-live-search="true"  data-placeholder="Affiliated Faculty"  name="supervisor1" id="supervisor1" multiple data-max-options="1">
              <option value="Lec Muhaimin Bin Munir">Lec Muhaimin Bin Munir</option>
              <option value="Lec Nafiz Imtiaz Khan">Lec Nafiz Imtiaz Khan</option>
              <option value="Lec Shadman Aadeeb">Lec Shadman Aadeeb</option>
              <option value="Prof Mahbubur Rahman">Prof Mahbubur Rahman</option>
              <option value="Lec Swapnil Biswas">Lec Swapnil Biswas</option>
            </select>
          </div>
          <div class="col-md-6" id="faculty2">
            <label for="Affiliated Faculty" class="form-label">
              <h6>
                Affiliated Faculty 2
              </h6>
            </label>
            <br />
            <select class="form-control selectpicker" data-live-search="true" data-placeholder="Affiliated Faculty" name="supervisor2" id="supervisor2" multiple data-max-options="1">
              <option value="Lec Muhaimin Bin Munir">Lec Muhaimin Bin Munir</option>
              <option value="Lec Nafiz Imtiaz Khan">Lec Nafiz Imtiaz Khan</option>
              <option value="Lec Shadman Aadeeb">Lec Shadman Aadeeb</option>
              <option value="Prof Mahbubur Rahman">Prof Mahbubur Rahman</option>
              <option value="Lec Swapnil Biswas">Lec Swapnil Biswas</option>
            </select>
          </div>
          <div class="col-md-6" id="faculty3">
            <label for="Affiliated Faculty" class="form-label">
              <h6>
                Affiliated Faculty 3
              </h6>
            </label>
            <br />
            <select class="form-control selectpicker" data-live-search="true" data-placeholder="Affiliated Faculty" name="supervisor3" id="supervisor3" multiple data-max-options="1">
              <option value="Lec Muhaimin Bin Munir">Lec Muhaimin Bin Munir</option>
              <option value="Lec Nafiz Imtiaz Khan">Lec Nafiz Imtiaz Khan</option>
              <option value="Lec Shadman Aadeeb">Lec Shadman Aadeeb</option>
              <option value="Prof Mahbubur Rahman">Prof Mahbubur Rahman</option>
              <option value="Lec Swapnil Biswas">Lec Swapnil Biswas</option>
            </select>
          </div>
          <div class="col-md-6" id="faculty4">
            <label for="Affiliated Faculty" class="form-label">
              <h6>
                Affiliated Faculty 4
              </h6>
            </label>
            <br />
            <select class="form-control selectpicker" data-live-search="true" data-placeholder="Affiliated Faculty" name="supervisor4" id="supervisor4" multiple data-max-options="1">
              <option value="Lec Muhaimin Bin Munir">Lec Muhaimin Bin Munir</option>
              <option value="Lec Nafiz Imtiaz Khan">Lec Nafiz Imtiaz Khan</option>
              <option value="Lec Shadman Aadeeb">Lec Shadman Aadeeb</option>
              <option value="Prof Mahbubur Rahman">Prof Mahbubur Rahman</option>
              <option value="Lec Swapnil Biswas">Lec Swapnil Biswas</option>
            </select>
          </div>

          <div class="col-md-6" id="StudentID1">
            <label for="StudentID1" class="form-label">
              <h6>Team Member-1 ID </h6>
            </label>
            <br />

            <input type="text" class="form-control" id="StudentID1" name="StudentID1" placeholder="StudentID1"  />
          </div>

          <div class="col-md-6" id="StudentID2">
            <label for="StudentID2" class="form-label">
              <h6>Team Member-2 ID</h6>
            </label>
            <br />

            <input type="text" class="form-control" id="StudentID2" name="StudentID2" placeholder="StudentID2" />
          </div>


          <div class="col-md-6" id="StudentID3">
            <label for="StudentID3" class="form-label">
              <h6>Team Member-3 ID</h6>
            </label>
            <br />

            <input type="text" class="form-control" id="StudentID3" name="StudentID3" placeholder="StudentID3" />
          </div>



          <div class="col-md-6" id="StudentID4">
            <label for="StudentID4" class="form-label">
              <h6>Team Member-4 ID</h6>
            </label>
            <br />

            <input type="text" class="form-control" id="StudentID4" name="StudentID4" placeholder="StudentID4" />
          </div>



          <div class="col-md-6" id="StudentID5">
            <label for="StudentID5" class="form-label">
              <h6>Team Member-5 ID</h6>
            </label>
            <br />

            <input type="text" class="form-control" id="StudentID5" name="StudentID5" placeholder="StudentID5" />
          </div>
          <div class="col-md-6">
            <label for="Admission_Date" class="form-label">
              <h6>Acievement Date <font color="red">*</font></h6>
            </label>
            <div class="input-group input-daterange">
              <input type="text" id="AcieveDate" name="AcieveDate" placeholder="DD/MM/YYYY" class="form-control text-left ml-2">
              <span class="fa fa-calendar" id="fa-2"></span>
            </div>
          </div>



          <div class="col-md-12">
            <label for="Achievement Title" class="form-label">
              <h6>Achievement Title <font color="ff0000">*</font>
              </h6>
            </label>
            <textarea class="form-control" id="AchievementTitle" name="AchievementTitle" rows="3" required></textarea>
          </div>
          <div class="col-md-12">
            <label for="Achievement detailes" class="form-label">
              <h6>Achievement details <font color="ff0000">*</font>
              </h6>
            </label>

            <textarea class="form-control" id="AchievementDetailes" name="AchievementDetailes" rows="5" required></textarea>
          </div>

          <div class="col-md-6">
            <label for="Prize Money" class="form-label">
              <h6>Prize Money</h6>
            </label>
            <br />

            <input type="text" class="form-control" id="PrizeMoney" name="PrizeMoney" placeholder="Prize Money" />
          </div>

          <div class="col-md-6">
            <label for="Achievement Photo" class="form-label">
              <h6>Achievement Photo(jpg/png/jpeg)</h6>
            </label>
            <br />
            <input type="file" id="AchievementPic" name="AchievementPic" />
          </div>



          <div class="col-md-12">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>

  </html>


<?php

} else {

  header("Location: ../logout.php");

  exit();
}

?>