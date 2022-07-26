<?php

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>


  <!DOCTYPE html>
  <html lang="en">




  <head>
    <!--   meta tags -->
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <title>Form_admin</title>
  </head>

  <body class="bg-light">


    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "test_db";

    // create a connection
    $conn = mysqli_connect($servername, $username, $password, $db);
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $Course_name = $_POST['Course_name'];
      $No_of_Student = $_POST['No_of_Student'];
      $Academic_year = $_POST['AcademicYear'];
      $Member1Name = $_POST['Member1Name'];
      $Member2Name = $_POST['Member2Name'];
      $Proposal = $_POST['Proposal'];
      $Member3Name = $_POST['Member3Name'];
      $Prototype = $_POST['Prototype'];
      $Member4Name = $_POST['Member4Name'];
      $ThesisBook = $_POST['ThesisBook'];
      $Member5Name = $_POST['Member5Name'];
      $Supervisors = $_POST['Supervisors'];
      $CommenceDate = date('Y-m-d', strtotime($_POST['CommenceDate']));
      $CompletionDate = date('Y-m-d', strtotime($_POST['CompletionDate']));
      $ThesisTitle = $_POST['ThesisTitle'];
      $ThesisDomain = $_POST['ThesisDomain'];
      $ThesisSynopsis = $_POST['ThesisSynopsis'];
      $URLFrontend = $_POST['URLFrontend'];
      $GithubLink = $_POST['GithubLink'];
      $RelevantPublications = $_POST['RelevantPublications'];
      $ThesisFiles = $_POST['ThesisFiles'];
      if ($Course_name <> NULL) {
        $sql = "INSERT INTO `thesis_admin` (`Course_name`, `Academic_year`, `No_of_Student`, `Team_member_name_1`, `Team_member_name_2`, `Team_member_name_3`, `Team_member_name_4`, `Team_member_name_5`,`Supervisors`, `Thesis_domain`,`Proposal`, `Prototype`, `ThesisBook`, `Commencedate`, `CompletionDate`, `ThesisSynopsis`, `URLFrontend`, `GithubLink`, `RelevantPublications`, `ThesisFiles`, `Thesis_title`) VALUES ('$Course_name', '$Academic_year',  $No_of_Student, ' $Member1Name', '$Member2Name', '$Member3Name', '$Member4Name', '$Member5Name','$Supervisors', '$ThesisDomain', ' $Proposal', ' $Prototype', '$ThesisBook', '$CommenceDate', '$CompletionDate', '$ThesisSynopsis', '$URLFrontend', '$GithubLink', ' $RelevantPublications', '$ThesisFiles', '$ThesisTitle');";
        $result = mysqli_query($conn, $sql);
        header("Location:thesis_admin.php");
        //   echo $ Course_name;
        // echo $AcademicYear;
        // echo $No_of_Student;

        // echo $StudentID;
        //echo  $Member1Name;

      }
    }



    ?>
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
              <a class="nav-link" href="achievements_admin.php">Achievements</a>
            </li>
            <li class="nav-item mx-3">
              <a class="nav-link" href="publication_admin.php">Publications</a>
            </li>
            <li class="nav-item mx-3">
              <a class="nav-link active active text-success fw-bolder" aria-current="page" href="thesis_admin.php">Thesis</a>
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
        <h2 class="my-5">Thesis Submission form :</h2>

        <form class="row g-3 bg-white border p-3" action="form_admin.php" method="post">
          <!-- <form class="row g-3 bg-white border p-3" method="post" enctype="multipart/form-data"> -->
          <div class="col-md-6">
            <label for=" Course_name" class="form-label">
              <h6>Course Name</h6>
            </label>
            <br />



            <select class="form-control selectpicker" name="Course_name" id="Course_name">
              <option selected disabled>Course Name</option>
              <option value="CSE-301">CSE-301</option>
              <option value="CSE-303">CSE-303</option>
              <option value="CSE-305">CSE-305</option>
              <option value="CSE-309">CSE-309</option>
            </select>




          </div>

          <div class="col-md-6">
            <label for="AcademicYear" class="form-label">
              <h6>Academic year <font color="ff0000">*</font>
              </h6>
            </label>
            <br />

            <select class="form-control selectpicker" name="AcademicYear" id="AcademicYear">
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

          <div class="col-md-12">
            <label for="No_of_Student" class="form-label">
              <h6>No of Student <font color="ff0000">*</font>
              </h6>
            </label>
            <br />

            <select class="form-control selectpicker" name="No_of_Student" id="No_of_Student">
              <option selected disabled>No of Student</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
          </div>

          <div class="col-md-12">
            <label for="Student-1 ID" class="form-label">
              <h6>Student-1 ID <font color="ff0000">*</font>
              </h6>
            </label>
            <input type="text" placeholder="Student-1 ID" class="form-control" id="Member1Name" name="Member1Name" />
          </div>



          <div class="col-md-12">
            <label for="Student-2 ID" class="form-label">
              <h6>Student-2 ID</h6>
            </label>
            <input type="text" placeholder="Student-2 ID" class="form-control" id="Member2Name" name="Member2Name" />
          </div>



          <div class="col-md-12">
            <label for="Student-3 ID" class="form-label">
              <h6>Student-3 ID</h6>
            </label>
            <input type="text" placeholder="Student-3 ID" class="form-control" id="Member3Name" name="Member3Name" />
          </div>



          <div class="col-md-12">
            <label for="Student-4 ID" class="form-label">
              <h6>Student-4 ID</h6>
            </label>
            <input type="text" placeholder="Student-4 ID" class="form-control" id="Member4Name" name="Member4Name" />
          </div>



          <div class="col-md-12">
            <label for="Student-5 ID" class="form-label">
              <h6>Student-5 ID</h6>
            </label>
            <input type="text" placeholder="Student-5 ID" class="form-control" id="Member5Name" name="Member5Name" />
          </div>


          <div class="col-md-12">
            <label for="Supervisors" class="form-label">
              <h6>
                Supervisor(s)
                <a target="_blank" title="Type the name of Supervisor,then the name of co-supervisor"><img src="https://shots.jotform.com/kade/Screenshots/blue_question_mark.png" height="13px" /></a>
                <font color="ff0000">*</font>
              </h6>
            </label>
            <br />
            <select class="form-control selectpicker" multiple data-live-search="true" data-placeholder="Supervisor,Co Supervisor" name=" Supervisors" id="Supervisors">
              <option value="Lec Muhaimin Bin Munir">
                Lec Muhaimin Bin Munir
              </option>
              <option value="Lec Nafiz Imtiaz Khan">
                Lec Nafiz Imtiaz Khan
              </option>
              <option value="Lec Shadman Aadeeb">Lec Shadman Aadeeb</option>
              <option value="Prof Mahbubur Rahman">Prof Mahbubur Rahman</option>
              <option value="Lec Swapnil Biswas">Lec Swapnil Biswas</option>
            </select>
          </div>

          <!-- <div class="col-md-6">
            <label for="Supervisor(s)" class="form-label">
              <h6>
                Supervisor(s) Photos(jpg/png/jpeg)
                <a target="_blank" title="Format : Supervisor_Name.jpg"><img src="https://shots.jotform.com/kade/Screenshots/blue_question_mark.png" height="13px" /></a>
              </h6>
            </label>
            <br />
            <input type="File" accept="image/*" id="files" name="files" multiple />
            <br /><br />
          </div> -->





          <div class="col-md-6">
            <script>
              $(document).ready(function() {

                var dtToday = new Date();
                var month = dtToday.getMonth() + 1;
                var day = dtToday.getDate();
                var year = dtToday.getFullYear();
                if (month < 10)
                  month = '0' + month.toString();
                if (day < 10)
                  day = '0' + day.toString();

                var maxDate = year + '-' + month + '-' + day;
                $('#CommenceDate').attr('max', maxDate);

              })
            </script>
            <label for="CommenceDate" class="form-label">
              <h6>Commence Date <font color="ff0000">*</font>
              </h6>
            </label>
            <input type="date" class="form-control" name="CommenceDate" id="CommenceDate" placeholder="DD/MM/YYYY" />
          </div>

          <div class="col-md-6">

            <script>
              $(function() {
                $('#CommenceDate').change(function() {
                  var fromDateValue = $(this).val();
                  var toDateValue = new Date(fromDateValue);
                  toDateValue.setDate(toDateValue.getDate());
                  var month = toDateValue.getMonth() + 1;
                  var day = toDateValue.getDate();
                  var year = toDateValue.getFullYear();
                  if (month < 10)
                    month = '0' + month.toString();
                  if (day < 10)
                    day = '0' + day.toString();



                  var sDate = year + '-' + month + '-' + day;
                  $('#CompletionDate').attr('min', sDate);

                  var dtToday = new Date();
                  var monthh = dtToday.getMonth() + 1;
                  var dayy = dtToday.getDate();
                  var yearr = dtToday.getFullYear();
                  if (monthh < 10)
                    monthh = '0' + monthh.toString();
                  if (dayy < 10)
                    dayy = '0' + dayy.toString();
                  var maxDate = yearr + '-' + monthh + '-' + dayy;
                  $('#CompletionDate').attr('max', maxDate);
                });
              })
            </script>
            <label for="CompletionDate" class="form-label">
              <h6>Completion Date <font color="ff0000">*</font>
              </h6>
            </label>
            <input type="date" class="form-control" name="CompletionDate" id="CompletionDate" placeholder="DD/MM/YYYY" />
          </div>


          <div class="col-md-12">
            <label for="ThesisTitle" class="form-label">
              <h6>Thesis Title <font color="ff0000">*</font>
              </h6>
            </label>
            <textarea class="form-control" name="ThesisTitle" id="ThesisTitle" rows="3"></textarea>
          </div>
          <div class="col-md-12">
            <label for="ThesisDomain" class="form-label">
              <h6>Thesis Domain <font color="ff0000">*</font>
              </h6>
            </label>
            <br />
            <select class="form-control selectpicker" multiple data-live-search="true" name="ThesisDomain" id="ThesisDomain" rows="5">
              <option value="201814001">Artificial Intelligence</option>
              <option value="201814002">Machine Learning</option>
              <option value="201814003">Natural Language Processing</option>
              <option value="201814004">Robotics</option>
              <option value="201814005">Automation</option>
              <option value="201814006">Embedded System</option>
              <option value="201814007">Compiler Optimization</option>
              <option value="201814008">Computer Architecture</option>
              <option value="201814009">Bioinformatics and Computational Biology</option>
              <option value="201814010">Data Mining</option>
              <option value="201814011">Database</option>
              <option value="201814012">Geographical Information System</option>
              <option value="201814013">Graphics and Immersive Computing</option>
              <option value="201814014">High Performance Computing</option>
              <option value="201814015">Human Computer Interaction</option>



            </select>
          </div>


          <div class="col-md-12">
            <label for="ThesisSynopsis" class="form-label">
              <h6>Thesis Synopsis <font color="ff0000">*</font>
              </h6>
            </label>

            <textarea class="form-control" name="ThesisSynopsis" id="ThesisSynopsis" rows="5"></textarea>
          </div>



          <div class="col-md-6">
            <label for="Proposal" class="form-label">
              <h6>Proposal(ppt/pdf)</h6>
            </label>
            <br />
            <input type="File" name="Proposal" id="Proposal" accept=".ppt, .pptx,.pdf" />
          </div>

          <div class="col-md-6">
            <label for="Prototype" class="form-label">
              <h6>Prototype(ppt/pdf)</h6>
            </label>
            <br />
            <input type="File" name="Prototype" id="Prototype" accept=".ppt, .pptx,.pdf" />
          </div>

          <div class="col-md-6">
            <label for="ThesisBook" class="form-label">
              <h6>Thesis Book(ppt/pdf/zip)
              </h6>
            </label>
            <br />
            <input type="File" name="ThesisBook" id="ThesisBook" />
          </div>

          <div class="col-md-12">
            <label for="URLFrontend" class="form-label">
              <h6>URL of Front end</h6>
            </label>
            <input type="text" class="form-control" name="URLFrontend" id="URLFrontend" placeholder="URL of Front end" />
          </div>

          <div class="col-md-12">
            <label for="GithubLink" class="form-label">
              <h6>Github Link</h6>
            </label>
            <input type="text" class="form-control" name="GithubLink" id="GithubLink" placeholder="Github Link" />
          </div>

          <div class="col-md-6">
            <label for="ThesisFiles" class="form-label">
              <h6>Thesis File(s) (ppt/pdf/zip)</h6>
            </label>
            <br />
            <input type="File" id="ThesisFiles" name="ThesisFiles" multiple />
            <br /><br />
          </div>

          <div class="col-md-6">
            <label for="RelevantPublications" class="form-label">
              <h6>Relevant Publications</h6>
            </label>
            <textarea class="form-control" name="RelevantPublications" id="RelevantPublications" rows="5"></textarea>
          </div>

          <div class="col-md-12">
            <div class="modal fade" id="myModal">
              <div class="modal-dialog modal-sm">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1>Thesis Added</h1>
                  </div>
                  <div class="modal-body">
                    This is my body
                  </div>
                  <div class="modal-footer">
                    <input class="btn btn-default" value="Close">
                  </div>
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-success" id="Submit" formtarget="#myModal">Submit</button>
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
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