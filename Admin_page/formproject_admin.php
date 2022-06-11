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
    <title>Project Submission Form</title>
	  
	  
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
              <a class="nav-link active text-success fw-bolder" href="projects_admin.php">Projects</a>
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
              <a class="nav-link" href="activity_admin.php">Activity</a>
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
        <h2 style="text-align: left"><b>Project Submission form :</b></h2>
		</div>
		
      <div class="container mt-5">
		  
        <form class="row g-3 bg-white border p-3 border-1" style="border-radius: 5px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" action="Submitted.php">
          <!-- <form class="row g-3 bg-white border p-3" method="post" enctype="multipart/form-data"> -->
          <div class="col-md-6">
            <label for="ProjectName" class="form-label">
              <h6>Project Name</h6>
            </label>
            <input type="text" required class="form-control" id="ProjectName" />
          </div>

          <div class="col-md-6">
            <label for="AcademicYear" class="form-label">
              <h6>Academic year <font color="ff0000">*</font></h6>
            </label>
            <br />

            <select class="form-control selectpicker" required>
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

            <select class="form-control selectpicker" required>
              <option selected disabled>No of Student</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
          </div>

          <div class="col-md-6">
            <label for="Student ID" class="form-label">
              <h6>Student ID <font color="ff0000">*</font></h6>
            </label>
            <br />
            <select
              class="form-control selectpicker"
              multiple
              data-live-search="true"
              required
            >
              <!-- <option selected disabled>Student ID</option> -->
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
            <label for="Supervisor(s)" class="form-label">
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
              required
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
              disabled
              class="form-control"
              id="TeamMember1"
              required
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
            <input type="text" disabled class="form-control" id="TeamMember2" />
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
            <input type="text" disabled class="form-control" id="TeamMember3" />
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
            <input type="text" disabled class="form-control" id="TeamMember4" />
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
            <input type="text" disabled class="form-control" id="TeamMember5" />
          </div>

          <div class="col-md-6">
            <label for="TeamMember5 Photo" class="form-label">
              <h6>Team Member-5 Photo(jpg/png/jpeg)</h6>
            </label>
            <br />
            <input type="File" accept="image/*" />
          </div>
          <div class="col-md-6"  >
            <label for="CommenceDate" class="form-label">
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
            <label for="Project Title" class="form-label"
              ><h6>Project Title <font color="ff0000">*</font></h6>
            </label>
            <textarea
              class="form-control"
              id="ProjectTitle"
              rows="3"
              required
            ></textarea>
          </div>
          <div class="col-md-12">
            <label for="Project Domain" class="form-label">
              <h6>Project Domain <font color="ff0000">*</font></h6>
            </label>

            <textarea
              class="form-control"
              id="ProjectDomain"
              rows="5"
              required
            ></textarea>
          </div>

          <div class="col-md-12">
            <label for="Project Synopsis" class="form-label">
              <h6>Project Synopsis <font color="ff0000">*</font></h6>
            </label>

            <textarea
              class="form-control"
              id="ProjectSynopsis"
              rows="5"
              required
            ></textarea>
          </div>

          <div class="col-md-6">
            <label for="Team Photo" class="form-label">
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
            <input type="File" accept=".ppt, .pptx,.pdf" />
          </div>

          <div class="col-md-6">
            <label for="Prototype" class="form-label">
              <h6>Prototype(ppt/pdf)</h6>
            </label>
            <br />
            <input type="File" accept=".ppt, .pptx,.pdf" />
          </div>

          <div class="col-md-6">
            
          </div>
		  <div class="col-md-12">
            <label for="BudgetOfProject" class="form-label">
              <h6>Budget</h6>
            </label>
            <input
              type="number"   
              class="form-control"
              id="BudgetOfProject"
              placeholder="Budget Of Project"
            />
          </div>

          <div class="col-md-12">
            <label for="URLofFrontEnd" class="form-label">
              <h6>URL of Front end</h6>
            </label>
            <input
              type="text"
              class="form-control"
              id="URLofFrontEnd"
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
              id="GithubLink"
              placeholder="Github Link"
            />
          </div>

          <div class="col-md-6">
            <label for="ProjectFiles" class="form-label">
              <h6>Project File(s) (ppt/pdf/zip)</h6>
            </label>
            <br />
            <input type="File" id="Projectfiles" name="files" multiple />
            <br /><br />
          </div>

          <div class="col-md-6">
            <label for="RelevantPublications" class="form-label"
              ><h6>Relevant Projects</h6>
            </label>
            <textarea
              class="form-control"
              id="RelevantPublications"
              rows="5"
              required
            ></textarea>
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
