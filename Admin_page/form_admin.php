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
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
                  $Course_name = $_POST['Course_name'];
                  $No_of_Student = $_POST['No_of_Student'];
                  $Academic_year = $_POST['AcademicYear'];
                  $StudentID=$_POST['StudentID'];
                  $Member1Name = $_POST['TeamMember1'];
                    $Member2Name = $_POST['TeamMember2'];
                  $Proposal = $_POST['Proposal'];
                    $Member3Name = $_POST['TeamMember3'];
                  $Prototype = $_POST['Prototype'];
                    $Member4Name = $_POST['TeamMember4'];
                  $ThesisBook = $_POST['ThesisBook'];
                    $Member5Name = $_POST['TeamMember5'];
                    $CommenceDate = $_POST['CommenceDate'];
                    $CompletionDate = $_POST['CompletionDate'];
                  $ThesisTitle = $_POST['ThesisTitle'];
                    $ThesisDomain = $_POST['ThesisDomain'];
                  $ThesisSynopsis = $_POST['ThesisSynopsis'];
                    $URLFrontend = $_POST['URLFrontend'];
                  $GithubLink = $_POST['GithubLink'];
                  $RelevantPublications = $_POST['RelevantPublications'];
                  $ThesisFiles = $_POST['ThesisFiles'];
            if($Course_name <> NULL) {
                   $sql = "INSERT INTO `thesis_admin` (`Course_name`, `Academic_year`, `No_of_Student`, `Team_member_name_1`, `Team_member_name_2`, `Team_member_name_3`, `Team_member_name_4`, `Team_member_name_5`, `Thesis_domain`, `StudentID`, `Proposal`, `Prototype`, `ThesisBook`, `Commencedate`, `CompletionDate`, `ThesisSynopsis`, `URLFrontend`, `GithubLink`, `RelevantPublications`, `ThesisFiles`, `Thesis_title`) VALUES ('$Course_name', '$Academic_year',  $No_of_Student, ' $Member1Name', '$Member2Name', '$Member3Name', '$Member4Name', '$Member5Name', '$ThesisDomain', ' $StudentID', ' $Proposal', ' $Prototype', '$ThesisBook', '$CommenceDate', '$CompletionDate', '$ThesisSynopsis', '$URLFrontend', '$GithubLink', ' $RelevantPublications', '$ThesisFiles', '$ThesisTitle');";
                  $result = mysqli_query($conn, $sql);
                  //   echo $ Course_name;
                  // echo $AcademicYear;
                  // echo $No_of_Student;

                  // echo $StudentID;
                  //echo  $Member1Name;
               
            }
        }

        

    ?>
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
              <a class="nav-link" href="achievements_admin.php">Achievements</a>
            </li>
            <li class="nav-item mx-3">
              <a class="nav-link" href="publication_admin.php">Publications</a>
            </li>
            <li class="nav-item mx-3">
              <a
                class="nav-link active active text-success fw-bolder"
                aria-current="page"
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
        <h2 class="my-5">Thesis Submission form :</h2>

        <form class="row g-3 bg-white border p-3" action="form_admin.php" method="post">
          <!-- <form class="row g-3 bg-white border p-3" method="post" enctype="multipart/form-data"> -->
          <div class="col-md-6">
            <label for=" Course_name" class="form-label">
              <h6>Course Name</h6>
            </label>
            <br />

            

            <select  class="form-control selectpicker"   name="Course_name" id="Course_name">
              <option selected disabled>Course Name</option>
              <option  value="CSE-301">CSE-301</option>
              <option  value="CSE-303">CSE-303</option>
              <option  value="CSE-305">CSE-305</option>
              <option  value="CSE-309">CSE-309</option>
            </select>

           


          </div>

          <div class="col-md-6">
            <label for="AcademicYear" class="form-label">
              <h6>Academic year <font color="ff0000">*</font></h6>
            </label>
            <br />

            <select class="form-control selectpicker"   name = "AcademicYear" id="AcademicYear">
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
            <label for="No_of_Student" class="form-label">
              <h6>No of Student <font color="ff0000">*</font></h6>
            </label>
            <br />

            <select class="form-control selectpicker"   name = "No_of_Student" id="No_of_Student">
              <option selected disabled>No of Student</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
          </div> 

          <div class="col-md-6">
            <label for="StudentID" class="form-label">
              <h6>Student ID<font color="ff0000">*</font></h6>
            </label>
            <br />
            <select
              class="form-control selectpicker"
              multiple
              data-live-search="true"
                name="StudentID" id="StudentID"
            >
              <option value="201814001">201814001</option>
              <option value="201814002">201814002</option>
              <option value="201814003">201814003</option>
              <option value="201814004">201814004</option>
              <option value="201814005">201814005</option>
              <option value="201814006">201814006</option>
              <option value="201814007">201814007</option>
              <option value="201814008">201814008</option>
              <option value="201814009">201814009</option>
              <option value="201814010">201814010</option>
              <option value="201814011">201814011</option>
              <option value="201814012">201814012</option>
              <option value="201814013">201814013</option>
              <option value="201814014">201814014</option>
              <option value="201814015">201814015</option>
              <option value="201814016">201814016</option>
              <option value="201814017">201814017</option>
              <option value="201814018">201814018</option>
              <option value="201814019">201814019</option>
              <option value="201814020">201814020</option>
              <option value="201814021">201814021</option>
              <option value="201814022">201814022</option>
              <option value="201814023">201814023</option>
              <option value="201814024">201814024</option>
              <option value="201814025">201814025</option>
              <option value="201814026">201814026</option>
              <option value="201814027">201814027</option>
              <option value="201814028">201814028</option>
              <option value="201814029">201814029</option>
              <option value="201814030">201814030</option>
              <option value="201814031">201814031</option>
              <option value="201814032">201814032</option>
              <option value="201814033">201814033</option>
              <option value="201814034">201814034</option>
              <option value="201814035">201814035</option>
              <option value="201814036">201814036</option>
              <option value="201814037">201814037</option>
              <option value="201814038">201814038</option>
              <option value="201814039">201814039</option>
              <option value="201814040">201814040</option>
              <option value="201814041">201814041</option>
              <option value="201814042">201814042</option>
              <option value="201814043">201814043</option>
              <option value="201814044">201814044</option>
              <option value="201814045">201814045</option>
              <option value="201814046">201814046</option>
              <option value="201814047">201814047</option>
              <option value="201814048">201814048</option>
              <option value="201814049">201814049</option>
              <option value="201814050">201814050</option>
              <option value="201814051">201814051</option>
              <option value="201814052">201814052</option>
              <option value="201814053">201814053</option>
              <option value="201814054">201814054</option>
              <option value="201814055">201814055</option>
              <option value="201814056">201814056</option>
              <option value="201814057">201814057</option>
              <option value="201814058">201814058</option>
              <option value="201814059">201814059</option>
              <option value="201814060">201814060</option>
              <option value="201814061">201814061</option>
              <option value="201814062">201814062</option>
              <option value="201814063">201814063</option>
              <option value="201814064">201814064</option>
              <option value="201814065">201814065</option>
              <option value="201814066">201814066</option>
              <option value="201814067">201814067</option>
              <option value="201814068">201814068</option>
              <option value="201814069">201814069</option>
              <option value="201814070">201814070</option>
              <option value="201814071">201814071</option>
              <option value="201814072">201814072</option>
              <option value="201814073">201814073</option>
              <option value="201814074">201814074</option>
              <option value="201814075">201814075</option>
              <option value="201814076">201814076</option>
              <option value="201814077">201814077</option>
              <option value="201814078">201814078</option>
              <option value="201814079">201814079</option>
              <option value="201814080">201814080</option>
              <option value="201814081">201814081</option>
              <option value="201814082">201814082</option>
              <option value="201814083">201814083</option>
              <option value="201814084">201814084</option>
              <option value="201814085">201814085</option>
              <option value="201814086">201814086</option>
              <option value="201814087">201814087</option>
              <option value="201814088">201814088</option>
              <option value="201814089">201814089</option>
              <option value="201814090">201814090</option>
              <option value="201814091">201814091</option>
              <option value="201814092">201814092</option>
              <option value="201814093">201814093</option>
              <option value="201814094">201814094</option>
              <option value="201814095">201814095</option>
              <option value="201814096">201814096</option>
              <option value="201814097">201814097</option>
              <option value="201814098">201814098</option>
              <option value="201814099">201814099</option>
              <option value="201814100">201814100</option>
            </select>
          </div>

          <div class="col-md-6">
            <label for="Supervisors" class="form-label">
              <h6>
                Supervisor(s)
                <a
                  target="_blank"
                  title="Type the name of Supervisor,then the name of co-supervisor"
                  ><img
                    src="https://shots.jotform.com/kade/Screenshots/blue_question_mark.png"
                    height="13px"
                /></a>
                <font color="ff0000">*</font>
              </h6>
            </label>
            <br />
            <select
              class="form-control selectpicker"
              multiple
              data-live-search="true"
              data-placeholder="Supervisor,Co Supervisor"
            >
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

          <div class="col-md-6">
            <label for="Supervisor(s)" class="form-label">
              <h6>
                Supervisor(s) Photos(jpg/png/jpeg)
                <a target="_blank" title="Format : Supervisor_Name.jpg"
                  ><img
                    src="https://shots.jotform.com/kade/Screenshots/blue_question_mark.png"
                    height="13px"
                /></a>
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
          

          <div class="col-md-6">
            <label for="TeamMember1" class="form-label">
              <h6>Team Member-1 Name <font color="ff0000">*</font></h6>
            </label>
            <input
              type="text"
              class="form-control"
                name="TeamMember1" id="TeamMember1"
            />
          </div>

          <div class="col-md-6">
            <label for="TeamMember1 Photo" class="form-label">
              <h6>Team Member-1 Photo(jpg/png/jpeg)</h6>
            </label>
            <br />
            <input type="File" accept="image/*" />
          </div>

          <div class="col-md-6">
            <label for="TeamMember2" class="form-label">
              <h6>Team Member-2 Name</h6>
            </label>
            <input type="text"  class="form-control" name="TeamMember2" id="TeamMember2" />
          </div>

          <div class="col-md-6">
            <label for="TeamMember2 Photo" class="form-label">
              <h6>Team Member-2 Photo(jpg/png/jpeg)</h6>
            </label>
            <br />
            <input type="File" accept="image/*" />
          </div>

          <div class="col-md-6">
            <label for="TeamMember3" class="form-label">
              <h6>Team Member-3 Name</h6>
            </label>
            <input type="text"  class="form-control" name="TeamMember3" id="TeamMember3" />
          </div>

          <div class="col-md-6">
            <label for="TeamMember3 Photo" class="form-label">
              <h6>Team Member-3 Photo(jpg/png/jpeg)</h6>
            </label>
            <br />
            <input type="File" accept="image/*" />
          </div>

          <div class="col-md-6">
            <label for="TeamMember4" class="form-label">
              <h6>Team Member-4 Name</h6>
            </label>
            <input type="text"  class="form-control" name="TeamMember4" id="TeamMember4" />
          </div>

          <div class="col-md-6">
            <label for="TeamMember4 Photo" class="form-label">
              <h6>Team Member-4 Photo(jpg/png/jpeg)</h6>
            </label>
            <br />
            <input type="File" accept="image/*" />
          </div>

          <div class="col-md-6">
            <label for="TeamMember5" class="form-label">
              <h6>Team Member-5 Name</h6>
            </label>
            <input type="text"  class="form-control" name="TeamMember5" id="TeamMember5" />
          </div>

          <div class="col-md-6">
            <label for="TeamMember5 Photo" class="form-label">
              <h6>Team Member-5 Photo(jpg/png/jpeg)</h6>
            </label>
            <br />
            <input type="File" accept="image/*" />
          </div>

          <div class="col-md-6">
            <label for="CommenceDate" class="form-label">
              <h6>Commence Date <font color="ff0000">*</font></h6>
            </label>
            <input
              type="text"
              class="form-control"
              name="CommenceDate"
              id="CommenceDate"
              placeholder="DD/MM/YYYY"
               
            />
          </div>

          <div class="col-md-6">
            <label for="CompletionDate" class="form-label"
              ><h6>Completion Date <font color="ff0000">*</font></h6>
            </label>
            <input
              type="text"
              class="form-control"
              name= "CompletionDate"
              id="CompletionDate"
              placeholder="DD/MM/YYYY"
               
            />
          </div>

          <div class="col-md-12">
            <label for="ThesisTitle" class="form-label"
              ><h6>Thesis Title <font color="ff0000">*</font></h6>
            </label>
            <textarea
              class="form-control"
              name="ThesisTitle"
              id="ThesisTitle"
              rows="3"
               
            ></textarea>
          </div>
          <div class="col-md-12">
            <label for="ThesisDomain" class="form-label">
              <h6>Thesis Domain <font color="ff0000">*</font></h6>
            </label>

            <textarea
              class="form-control"
              name="ThesisDomain"
              id="ThesisDomain"
              rows="5"
               
            ></textarea>
          </div>

          <div class="col-md-12">
            <label for="ThesisSynopsis" class="form-label">
              <h6>Thesis Synopsis <font color="ff0000">*</font></h6>
            </label>

            <textarea
              class="form-control"
              name="ThesisSynopsis"
              id="ThesisSynopsis"
              rows="5"
               
            ></textarea>
          </div>

          <div class="col-md-6">
            <label for="TeamPhoto" class="form-label">
              <h6>Team Photo(jpg/png/jpeg)</h6>
            </label>
            <br />
            <input type="File" accept="image/*" />
          </div>

          <div class="col-md-6">
            <label for="Proposal" class="form-label">
              <h6>Proposal(ppt/pdf)</h6>
            </label>
            <br />
            <input type="File"  name="Proposal"
              id="Proposal" accept=".ppt, .pptx,.pdf" />
          </div>

          <div class="col-md-6">
            <label for="Prototype" class="form-label">
              <h6>Prototype(ppt/pdf)</h6>
            </label>
            <br />
            <input type="File" name="Prototype"
              id="Prototype"accept=".ppt, .pptx,.pdf" />
          </div>

          <div class="col-md-6">
            <label for="ThesisBook" class="form-label">
              <h6>Thesis Book(ppt/pdf/zip) <font color="ff0000">*</font></h6>
            </label>
            <br />
            <input type="File" name="ThesisBook"
              id="ThesisBook"  />
          </div>

          <div class="col-md-12">
            <label for="URLFrontend" class="form-label">
              <h6>URL of Front end</h6>
            </label>
            <input
              type="text"
              class="form-control"
              name="URLFrontend"
              id="URLFrontend"
              placeholder="URL of Front end"
            />
          </div>

          <div class="col-md-12">
            <label for="GithubLink" class="form-label">
              <h6>Github Link</h6>
            </label>
            <input
              type="text"
              class="form-control"
              name="GithubLink"
              id="GithubLink"
              placeholder="Github Link"
            />
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
            <label for="RelevantPublications" class="form-label"
              ><h6>Relevant Publications</h6>
            </label>
            <textarea
              class="form-control"
              name="RelevantPublications"
              id="RelevantPublications"
              rows="5"
               
            ></textarea>
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