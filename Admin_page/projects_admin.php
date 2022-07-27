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

    <!-- favicon link css  -->
    <link rel="shortcut icon" type="image/png" href="img/MIST.png" />

    <title>Projects_admin</title>
  </head>

  <body>

    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
      <div class="toast-header">
        <img src="..." class="rounded me-2" alt="...">
        <strong class="me-auto">Bootstrap</strong>
        <small class="text-muted">now</small>
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
      <div class="toast-body">
        Your project has been added successfully
      </div>
    </div>


    <!-- navbar starts -->
    <nav class="navbar navbar-expand-xxl navbar-light border-bottom border-5 border-success">
      <div class="container-fluid">
        <button class="navbar-toggler mb-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a href="home_admin.php">
          <img class="ms-md-5 ms-1" src="../img/navlogo.png" alt="logo" /></a>

        <div class="collapse navbar-collapse mx-5 fw-bold" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item mx-3">
              <a class="nav-link" href="home_admin.php">Home</a>
            </li>
            <li class="nav-item mx-3">
              <a class="nav-link active text-success fw-bolder" aria-current="page" href="projects_admin.php">Projects</a>
            </li>
            <li class="nav-item mx-3">
              <a class="nav-link" href="achievements_admin.php">Achievements</a>
            </li>
            <li class="nav-item mx-3">
              <a class="nav-link" href="publication_admin.php">Publications</a>
            </li>
            <li class="nav-item mx-3">
              <a class="nav-link" href="thesis_admin.php">Thesis</a>
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

    <!-- card section -->
    <div class="container-flex bg-light">
      <!-- project head -->
      <div class="container pt-5">
        <div class="card">
          <div class="card-body bg-primary p-4">
            <h1 class="d-inline-block text-white ms-4">Projects</h1>
            <a href="formproject_admin.php"><button type="button" class="btn btn-light btn-lg float-end">
                + Add Project
              </button></a>
          </div>
        </div>
      </div>
      <!-- Project head ends-->

      <div class="container px-4 pt-5">
        <div class="row gx-5">
          <!-- LEFT BAR -->
          <div class="col-xxl-3 col-12 mb-5">
            <div class="p-3 border bg-white border-3 border border-info rounded">
              <h4 class="ps-2">Search Filter</h4>
              <form method="post" id="myform" class="p-3">

                <div class="p-2 mt-3 border bg-white border border-2  border-info">
                  <select class="form-control selectpicker" required name="year">
                    <option selected disabled>Sort by Session</option>
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


                <div class="p-2 mt-3 border bg-white border border-2  border-info">
                  <select class="form-control selectpicker" required name="supe">
                    <option selected disabled>Sort by Supervisors</option>
                    <option value="Prof Mahbubur Rahman">Prof Mahbubur Rahman</option>
                    <option value="Lec Muhaimin">Lec Muhaimin</option>
                    <option value="Lec Nafiz Imtiaz Khan">Lec Nafiz Imtiaz</option>
                    <option value="Lec Shadman Aadeeb">Lec Shadman Adeeb</option>
                    <option value="Lec Shahriar Nehal">Lec Shahriar Nehal</option>
                  </select>
                </div>


                <!-- <div class="p-2 mt-3 border bg-white border-2 border border-info rounded">
                  <div class="dropdown">
                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                      Sort By Supervisor
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                      <li><a class="dropdown-item" href="#">Lec Muhaimin</a></li>
                      <li>
                        <a class="dropdown-item" href="#">Lec Nafiz Imtiaz</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#">Lec Shadman Adeeb</a>
                      </li>
                    </ul>
                  </div>
                </div> -->





                <div class="p-1 mt-3 border bg-white border-2 border border-info rounded">
                  <p class="fw-bolder text-center">Enter domain name :</p>

                  <input type="text" id="key" name="key" placeholder="Enter any keyword" class="p-2 border bg-white border-2 border border-info" /><br /><br />

                  <button type="submit" name="search" class="btn btn-primary">Search</button>
  
              </form>
            </div>
          </div>
        </div>
        <!-- LEFT BAR ends -->
        <!-- Right BAR -->

        <div class="col-xxl-9 col-12">


          <div class="card mb-2 border-3 border border-info rounded">

            <!-- PAGINATION  -->
            <?php
            include_once 'db_conn.php';



            $results_per_page = 3;

            $result = mysqli_query($conn, "SELECT * FROM projects");


            $number_of_results = mysqli_num_rows($result);

            $number_of_pages = ceil($number_of_results / $results_per_page);

            if (!isset($_GET['page'])) {
              $page = 1;
            } else {
              $page = $_GET['page'];
            }

            $this_page_first_result = ($page - 1) * $results_per_page;

            $sql = 'SELECT * FROM projects  LIMIT ' . $this_page_first_result . ',' .  $results_per_page;

            if (isset($_POST['year'])) {
              $year = $_POST['year'];
            };

            if (isset($_POST['supe'])) {
              $supe = $_POST['supe'];
            };


            if (isset($_POST['key']) && $_POST['key'] != "") {
              $key = $_POST['key'];
            };

            if (isset($_POST['search'])) {
              if (isset($_POST['year'])) {
                $sql1 = 'SELECT * FROM projects where Academicyear = "' . $year .
                  '"';
                $resultyear = mysqli_query($conn,$sql1);
                $number_of_results = mysqli_num_rows($resultyear);
                $number_of_pages = ceil($number_of_results / $results_per_page);
                $sql = $sql1;

              } else if (isset($_POST['supe'])) {
                $sql2 = 'SELECT * FROM projects where Supervisors = "' . $supe .
                  '"';
                $resultsupe = mysqli_query($conn, $sql2);
                $number_of_results = mysqli_num_rows($resultsupe);
                $number_of_pages = ceil($number_of_results / $results_per_page);
                $sql = $sql2;
              } else if (isset($_POST['key'])) {
                //echo $key;
                //echo $start. "  ";
                //echo $end;
                 $sql3 = "SELECT * FROM projects where ProjectName LIKE '%"  . $key .
                  "%' OR  Supervisors LIKE '%" . $key . "%' OR Member1Name LIKE '%" . $key . "%' OR ProjectTitle like '%" . $key . "%' OR ProjectDomain LIKE '%" . $key . "%' OR ProjectSynopsis LIKE '%" . $key . "%' OR URLofFrontend LIKE '%" . $key . "%' OR RelevantProjects LIKE '%" . $key . "%' OR ProjectType LIKE '%" . $key . "%' ";

                $resultkey = mysqli_query($conn, $sql3);
                $number_of_results = mysqli_num_rows($resultkey);
                $number_of_pages = ceil($number_of_results / $results_per_page);
                $sql = $sql3;
              }
            }

            xx:

            $result = mysqli_query($conn, $sql);

            ?>

            <?php
            if (mysqli_num_rows($result) > 0) {
            ?>

              <?php
              while ($row = mysqli_fetch_array($result)) {
              ?>

                <h5 class="card-header text-white bg-info fw-bolder">OTHER'S PROJECT</h5>



                <div class="card-body bg-white">
                  <a href="project_details_admin.php?id=<?php echo $row["id"]; ?>" class="text-decoration-none text-black">
                    <div class="p-3 mt-2 mb-2 border-2 border border-info rounded">
                      <h4 class="mb-2 text-center"><?php echo $row["ProjectName"]; ?></h4>
                      <img <?php echo "src='images/" . $row['ProjectPhoto'] . "' "; ?> class="rounded my-3 mx-auto d-block" style="width: 40%" alt="..." />
                      <h6 class="mb-2 text-center"><?php echo $row["ProjectDomain"]; ?> | <?php echo $row["Academicyear"]; ?></h6>
                      <p>
                        <?php echo $row["ProjectSynopsis"]; ?>
                      </p>
                    </div>
                  </a>
                </div>

              <?php
              }
              ?>

            <?php

            } else {
              echo "No result found";
            }
            ?>







            <!-- <div class="card-body bg-white">
                <a
                  href="project_details_admin.php"
                  class="text-decoration-none text-black"
                  ><div
                    class="p-3 mt-2 mb-2 border-2 border border-info rounded"
                  >
                    <h4 class="mb-2 text-center">Others' Project Name</h4>
                    <img
                      src="../img/projectsingle.png"
                      class="rounded my-3 mx-auto d-block"
                      style="width: 60%"
                      alt="..."
                    />
                    <h6 class="mb-2 text-center">Project Domain | 2019-2020</h6>
                    <p>
                      Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                      Vero enim possimus iste cumque voluptatem. Odio veritatis
                      accusantium nihil temporibus amet animi, aliquam
                      blanditiis adipisci quis ea pariatur minus impedit
                      architecto incidunt nobis repellendus perspiciatis tempore
                      voluptate earum qui, mollitia natus fuga. Ullam sit saepe
                      distinctio eligendi, unde nesciunt totam. A, optio
                      reprehenderit? Totam dolores earum magni hic quisquam
                      ullam officia modi iusto, culpa, ex velit, commodi
                      repellat tempora exercitationem nisi.
                    </p>
                  </div></a
                >
              </div>
              <div class="card-body bg-white">
                <a
                  href="project_details_admin.php"
                  class="text-decoration-none text-black"
                  ><div
                    class="p-3 mt-2 mb-2 border-2 border border-info rounded"
                  >
                    <h4 class="mb-2 text-center">Others' Project Name</h4>
                    <img
                      src="../img/projectsingle.png"
                      class="rounded my-3 mx-auto d-block"
                      style="width: 60%"
                      alt="..."
                    />
                    <h6 class="mb-2 text-center">Project Domain | 2019-2020</h6>
                    <p>
                      Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                      Vero enim possimus iste cumque voluptatem. Odio veritatis
                      accusantium nihil temporibus amet animi, aliquam
                      blanditiis adipisci quis ea pariatur minus impedit
                      architecto incidunt nobis repellendus perspiciatis tempore
                      voluptate earum qui, mollitia natus fuga. Ullam sit saepe
                      distinctio eligendi, unde nesciunt totam. A, optio
                      reprehenderit? Totam dolores earum magni hic quisquam
                      ullam officia modi iusto, culpa, ex velit, commodi
                      repellat tempora exercitationem nisi.
                    </p>
                  </div></a
                >
              </div>
              <div class="card-body bg-white">
                <a
                  href="project_details_admin.php"
                  class="text-decoration-none text-black"
                  ><div
                    class="p-3 mt-2 mb-2 border-2 border border-info rounded"
                  >
                    <h4 class="mb-2 text-center">Others' Project Name</h4>
                    <img
                      src="../img/projectsingle.png"
                      class="rounded my-3 mx-auto d-block"
                      style="width: 60%"
                      alt="..."
                    />
                    <h6 class="mb-2 text-center">Project Domain | 2019-2020</h6>
                    <p>
                      Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                      Vero enim possimus iste cumque voluptatem. Odio veritatis
                      accusantium nihil temporibus amet animi, aliquam
                      blanditiis adipisci quis ea pariatur minus impedit
                      architecto incidunt nobis repellendus perspiciatis tempore
                      voluptate earum qui, mollitia natus fuga. Ullam sit saepe
                      distinctio eligendi, unde nesciunt totam. A, optio
                      reprehenderit? Totam dolores earum magni hic quisquam
                      ullam officia modi iusto, culpa, ex velit, commodi
                      repellat tempora exercitationem nisi.
                    </p>
                  </div></a
                >
              </div> -->
            <!-- <div class="card-body bg-white">
                <a
                  href="project_details_admin.php"
                  class="text-decoration-none text-black"
                  ><div
                    class="p-3 mt-2 mb-2 border-2 border border-info rounded"
                  >
                    <h4 class="mb-2 text-center">Others' Project Name</h4>
                    <img
                      src="../img/projectsingle.png"
                      class="rounded my-3 mx-auto d-block"
                      style="width: 60%"
                      alt="..."
                    />
                    <h6 class="mb-2 text-center">Project Domain | 2019-2020</h6>
                    <p>
                      Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                      Vero enim possimus iste cumque voluptatem. Odio veritatis
                      accusantium nihil temporibus amet animi, aliquam
                      blanditiis adipisci quis ea pariatur minus impedit
                      architecto incidunt nobis repellendus perspiciatis tempore
                      voluptate earum qui, mollitia natus fuga. Ullam sit saepe
                      distinctio eligendi, unde nesciunt totam. A, optio
                      reprehenderit? Totam dolores earum magni hic quisquam
                      ullam officia modi iusto, culpa, ex velit, commodi
                      repellat tempora exercitationem nisi.
                    </p>
                  </div></a
                >
              </div> -->
            <nav aria-label="Page navigation example" class="p-3">
              <ul class="pagination justify-content-center">
                <?php
                for ($i = 1; $i <= $number_of_pages; $i++) {
                  if ($i == $page)
                    echo '<li class="page-item active"> <a class="page-link" href="projects_admin.php?page=' . $i . '">'  . $i . '</a> </li>';
                  else
                    echo '<li class="page-item"> <a class="page-link" href="projects_admin.php?page=' . $i . '">'  . $i . '</a> </li>';
                }
                ?>
                <li class="page-item"> <a href=""></a> </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- Right BAR ends -->
      </div>
    </div>



    <!-- card section -->

    <!-- footer -->

    <div class="container-fluid bg-black py-2 mt-5">
      <div class="row">
        <div class="col-md-4 col-12 pt-3">
          <p class="text-white-50 text-center">
            © 2022 MIST. All rights reserved
          </p>
          <p></p>
        </div>

        <div class="col-md-4 col-12 pt-3">
          <p class="text-white-50 text-center">
            <i class="bi bi-telephone"></i>+880 176 902 3806
          </p>
        </div>
        <div class="col-md-4 col-12 pt-3">
          <p class="text-white-50 text-center">
            <i class="bi bi-envelope"></i> info@mist.ac.bd
          </p>
        </div>
      </div>
    </div>

    <!-- footer -->
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script>
      function hideSpinner() {
        document.getElementById('spinner')
          .style.display = 'none';
      }
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>

  </html>


<?php

} else {

  header("Location: ../logout.php");

  exit();
}

?>