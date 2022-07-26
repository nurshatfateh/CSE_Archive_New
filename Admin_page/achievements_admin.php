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




    <!-- Font -->
    <link href="http://fonts.cdnfonts.com/css/berlin-sans-fb-demi" rel="stylesheet">

    <title>Achievements_admin</title>
  </head>

  <body>
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
              <a class="nav-link" href="projects_admin.php">Projects</a>
            </li>
            <li class="nav-item mx-3">
              <a class="nav-link active text-success fw-bolder" aria-current="page" href="achievements_admin.php">Achievements</a>
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

    <div class="container pt-5 ">
      <div class="card">
        <div class="card-body bg-primary p-4">
          <h1 class="d-inline-block text-white ms-4">Achievements</h1>
          <a href="add_achievements_admin.php"><button type="button" class="btn btn-light btn-lg float-end">
              + Add Achievements
            </button></a>
        </div>
      </div>
    </div>
    <!-- Acheivement head end -->


    <!-- carousel start  -->
    <div class="container px-4 pt-5">
      <div class="row bg-light border border-3">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <?php
            include_once 'db_conn.php';
            $result = mysqli_query($conn, "SELECT * FROM addachievement order by date desc LIMIT 5");
            ?>
            <?php
            if (mysqli_num_rows($result) > 0) {
            ?>
              <?php
              $i = 0;
              while ($row = mysqli_fetch_array($result)) {
              ?>
                <?php if ($i == 0) { ?>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?php echo "$i"; ?>" class="active" aria-current="true" aria-label="Slide <?php echo "$i"; ?>"></button>
                <?php } else { ?>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?php echo "$i"; ?>" aria-label="Slide <?php echo "$i"; ?>"></button>
                <?php } ?>
              <?php

                $i++;
              }
              ?>
            <?php
            } else {
              echo "No result found";
            }
            ?>
          </div>
          <div class="carousel-inner">

            <?php
            include_once 'db_conn.php';
            $result = mysqli_query($conn, "SELECT * FROM addachievement order by date desc LIMIT 5");


            ?>
            <?php
            if (mysqli_num_rows($result) > 0) {
            ?>
              <?php
              $i = 0;
              while ($row = mysqli_fetch_array($result)) {
              ?>
                <?php if ($i == 0) { ?>
                  <div class="carousel-item active">
                    <img <?php echo "src='images/" . $row['AchievementPhoto'] . "' "; ?> class="d-block  my-3 mx-auto" style="width: 100%; height: 600px;" alt="..."></a>
                    <div class="carousel-caption  d-md-block fw-bolder bg-black ">
                      <h2 class=" fw-bolder text-white"><?php echo $row["AchievementTitle"]; ?></h2>
                      <!-- <p class=" fw-bolder">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, error.</p> -->
                    </div>
                  </div>
                <?php } else { ?>

                  <div class="carousel-item">
                    <img <?php echo "src='images/" . $row['AchievementPhoto'] . "' "; ?> class="d-block  my-3 mx-auto" style="width: 100%; height: 600px;" alt="..."></a>
                    <div class="carousel-caption  d-md-block fw-bolder bg-black ">
                      <h2 class=" fw-bolder text-white"><?php echo $row["AchievementTitle"]; ?></h2>
                      <!-- <p class=" fw-bolder">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, error.</p> -->
                    </div>
                  </div>
                <?php } ?>
              <?php
                $i++;
              }
              ?>
            <?php
            } else {
              echo "No result found";
            }
            ?>

          </div>



          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>

    <!-- carousel end  -->




    <!-- Achivements card start  -->

    <div class="container px-4 pt-5">
      <div class="row gx-5">
        <!-- LEFT BAR -->
        <div class="col-xxl-3 col-12 mb-5">
          <div class="p-3 border bg-white border border-3  border-info">
            <h4 class="ps-2">Search Filter</h4>

            <form method="post" id="myform">

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
                <div class="">
                  <p>
                    Start Date
                  </p>

                  <input type="date" value="" id="StartDate" name="start" class="form-control text-left ml-2">

                </div>
              </div>

              <div class="p-2 mt-3 border bg-white border border-2  border-info">
                <div class="">
                  <p>
                    End Date
                  </p>

                  <input type="date" value="" id="EndDate" name="end" class="form-control text-left ml-2">

                </div>
              </div>



              <div class="p-2 mt-3 border bg-white border border-2  border-info">

                <input type="text" id="key" name="key" placeholder="Enter any keyword" class="p-2 border bg-white border border-2  border-info"><br><br>

            </form>
            <button type="submit" name="search" class="btn btn-primary">Search</button>
          </div>


        </div>
      </div>
      <!-- LEFT BAR ends -->
      <!-- Right BAR -->
      <div class="col-xxl-9 col-12">

        <div class="row bg-light border border-3 border border-info gx-4">
          <!-- 1 -->

          <?php
          include_once 'db_conn.php';



          $results_per_page = 3;

          $result = mysqli_query($conn, "SELECT * FROM addachievement");


          $number_of_results = mysqli_num_rows($result);

          $number_of_pages = ceil($number_of_results / $results_per_page);

          if (!isset($_GET['page'])) {
            $page = 1;
          } else {
            $page = $_GET['page'];
          }

          $this_page_first_result = ($page - 1) * $results_per_page;



          $sql = 'SELECT * FROM addachievement  order by date desc LIMIT ' . $this_page_first_result . ',' .  $results_per_page;


          if (isset($_POST['year'])) {
            $year = $_POST['year'];
          };
          if (isset($_POST['start'])) {
            $start = date('Y-m-d', strtotime($_POST['start']));
          };
          if (isset($_POST['end'])) {
            $end = date('Y-m-d', strtotime($_POST['end']));
          };
          if (isset($_POST['key']) && $_POST['key'] != "") {
            $key = $_POST['key'];
          };

          if (isset($_POST['search'])) {
            if (isset($_POST['year'])) {
             
              $sql1 = 'SELECT * FROM addachievement where Academic_year = "' . $year .
                '" order by date desc ';
                
                $results_per_page = 3;
                $resultkey = mysqli_query($conn, $sql1);
                $number_of_results = mysqli_num_rows($resultkey);
                $number_of_pages = ceil($number_of_results / $results_per_page);


                $sql = $sql1;

            } else if (isset($_POST['start']) && isset($_POST['end']) && ($start != '1970-01-01' || $end != '1970-01-01')) {
              
              //echo $start. "  ";
              // echo $end;
               $sql2 = "SELECT * FROM addachievement where date >= '"  . $start .
                "' AND  date <=' " . $end . " ' order by date desc ";
                
                $results_per_page = 3;
                $resultkey = mysqli_query($conn, $sql2);
                $number_of_results = mysqli_num_rows($resultkey);
                $number_of_pages = ceil($number_of_results / $results_per_page);
                

                $sql = $sql2;

            }
            /*else if ( isset($_POST['key']) || ($start =='1970-01-01' || $end =='1970-01-01')) {
            $number_of_pages = 1;
            echo $key;
            $sql =  $sql = "SELECT * FROM addachievement where AchievementTitle LIKE '%"  .$key.
            "%' OR  Achievement_detailes LIKE '%" .$key. "%' OR Organizer LIKE '%" .$key. "%' OR TeamName like '%" .$key. "%' order by date desc ";
          } */ else if (isset($_POST['key']) || !($start == '1970-01-01' || $end == '1970-01-01')) {
              
              //echo $key;
              //echo $start. "  ";
              //echo $end;
               $sql3 = "SELECT * FROM addachievement where AchievementTitle LIKE '%"  . $key .
                "%' OR  Achievement_detailes LIKE '%" . $key . "%' OR Organizer LIKE '%" . $key . "%' OR TeamName like '%" . $key . "%' 
            AND date >= '" . $start . "' AND  date <=' " . $end . " 'order by date desc ";
            
            $results_per_page = 3;
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
            $i = 0;
            while ($row = mysqli_fetch_array($result)) {
            ?>

              <div class="col-sm-4 mb-5 mt-5">
                <div class="card border-2 border-info ms-3">
                  <div class="card-body">

                    <a href="achievments_details_admin.php?id=<?php echo $row["id"]; ?>"><img <?php echo "src='images/" . $row['AchievementPhoto'] . "' "; ?> class="d-block my-3 mx-auto" style="width: 100%; height: 200px" alt="..." /></a>

                    <p class="card-text fw-bold"><?php echo $row["AchievementTitle"]; ?></p>

                    <font size="2" class="card-text fw-bold">Date: <?php echo date('d-M-y', strtotime($row["date"])); ?></font>

                    <p class="card-text fw-normal text-wrap">
                      <?php echo substr($row["Achievement_detailes"], 0, 150); ?>
                    </p>
                    <a href="achievments_details_admin.php?id=<?php echo $row["id"]; ?>">View More</a>
                  </div>
                </div>
              </div>
            <?php
              $i++;
            }
            ?>
          <?php
          } else {
            echo "No result found";
          }
          ?>
        </div>

        <nav aria-label="Page navigation example" class="p-3">
          <ul class="pagination justify-content-center">
            <?php
            for ($i = 1; $i <= $number_of_pages; $i++) {
              if ($i == $page)
                echo '<li class="page-item active"> <a class="page-link" href="achievements_admin.php?page=' . $i . '">'  . $i . '</a> </li>';
              else
                echo '<li class="page-item"> <a class="page-link" href="achievements_admin.php?page=' . $i . '">'  . $i . '</a> </li>';
            }
            ?>
            <li class="page-item"> <a href=""></a> </li>
          </ul>
        </nav>

      </div>
    </div>
    <!-- Achivements card end -->
    </div>
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

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>

  <script>
    if (window.history.replaceState) {
      document.getElementById("myform").reset();
      window.history.replaceState(null, null, window.location.href);
    }
  </script>

  </html>



<?php

} else {

  header("Location: ../logout.php");

  exit();
}

?>