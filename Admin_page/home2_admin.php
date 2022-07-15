<?php 
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
  include_once 'db_conn.php'; 
$code=$_GET["id"]; 

$result = mysqli_query($conn,"SELECT * FROM student where roll=$code");
$result2 = mysqli_query($conn,"SELECT * FROM faculty where id=$code");
$result3 = mysqli_query($conn,"SELECT * FROM admin where id=$code");

if (mysqli_num_rows($result) === 1){
$me = mysqli_fetch_array($result);
$joined=$me["session"];
$pos="Student";
}

else if (mysqli_num_rows($result2) === 1){
  
  $me = mysqli_fetch_array($result2);
  $joined=$me["joindate"];
  $pos=$me["position"];
  
}
else if (mysqli_num_rows($result3) === 1){
  
  $me = mysqli_fetch_array($result3);
  $joined=$me["joindate"];
  $pos=$me["position"];
  
}
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

    <!-- favicon link css  -->
    <link rel="shortcut icon" type="image/png" href="../img/MIST.png" />

    <title>Home_Admin</title>
  </head>
  <body>
    <!-- navbar starts -->
    <nav
      class="navbar navbar-expand-xxl navbar-light border-bottom border-5 border-success"
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
        <a
                  href="home2_admin.php? id= <?php echo $code;?>"
                class="nav-link active text-success fw-bolder"
                aria-current="page"
               
                >
          <img class="ms-md-5 ms-1" src="../img/navlogo.png" alt="logo"
        /></a>

        <div
          class="collapse navbar-collapse mx-5 fw-bold"
          id="navbarSupportedContent"
        >
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item mx-3">
            <a
                  href="home2_admin.php? id= <?php echo $code;?>"
                class="nav-link active text-success fw-bolder"
                aria-current="page"
               
                >Home</a
              >
            </li>
            <li class="nav-item mx-3">
              <a class="nav-link" href="projects_admin.php">Projects</a>
            </li>
            <li class="nav-item mx-3">
              <a class="nav-link" href="achievements_admin.php"
                >Achievements</a
              >
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
          <a
                  href="adminprofile2_admin.php? id= <?php echo $code;?>"
             
               
                >
                <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($me['image']); ?>" class="ms-3" style="width:50px;height:50px;border-radius: 50%;"/> 
                </a>
          <a
                  href="adminprofile2_admin.php? id= <?php echo $code;?>" class="text-decoration-none text-black">
            <h6 class="mt-2 mx-3"><?php echo $me["name"]; ?></h6></a
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

    <div class="bg-light">
      <!-- card section -->
      <div class="container">
        <div class="row pt-5">
          <div class="col-md-6 col-xl-4 my-4">
            <a
              href="projects_admin.php"
              class="text-decoration-none text-black"
            >
              <div
                class="border-3 border border-info card mx-auto rounded"
                style="width: 18rem"
              >
                <img src="../img/projects.png" class="card-img-top" alt="..." />
                <div class="card-body">
                  <h5 class="card-title text-center">Projects</h5>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-xl-4 my-4">
            <a
              href="achievements_admin.php"
              class="text-decoration-none text-black"
            >
              <div
                class="border-3 border border-info card mx-auto rounded"
                style="width: 18rem"
              >
                <img
                  src="../img/achievements.png"
                  class="card-img-top"
                  alt="..."
                />
                <div class="card-body">
                  <h5 class="card-title text-center">Achievements</h5>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-xl-4 my-4">
            <a
              href="publication_admin.php"
              class="text-decoration-none text-black"
            >
              <div
                class="border-3 border border-info card mx-auto rounded"
                style="width: 18rem"
              >
                <img
                  src="../img/publication.png"
                  class="card-img-top"
                  alt="..."
                />
                <div class="card-body">
                  <h5 class="card-title text-center">Publications</h5>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-xl-4 my-4">
            <a href="thesis_admin.php" class="text-decoration-none text-black">
              <div
                class="border-3 border border-info card mx-auto rounded"
                style="width: 18rem"
              >
                <img src="../img/thesis.png" class="card-img-top" alt="..." />
                <div class="card-body">
                  <h5 class="card-title text-center">Thesis</h5>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-xl-4 my-4">
            <a
              href="activity_admin.php"
              class="text-decoration-none text-black"
            >
              <div
                class="border-3 border border-info card mx-auto rounded"
                style="width: 18rem"
              >
                <img src="../img/activity.png" class="card-img-top" alt="..." />
                <div class="card-body">
                  <h5 class="card-title text-center">Activity</h5>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-xl-4 my-4">
            <a
              href="studentadmin_admin.php"
              class="text-decoration-none text-black"
            >
              <div
                class="border-3 border border-info card mx-auto rounded rounded"
                style="width: 18rem"
              >
                <img src="../img/student.png" class="card-img-top" alt="..." />
                <div class="card-body">
                  <h5 class="card-title text-center">Student Administration</h5>
                </div>
              </div>
            </a>
          </div>
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
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
<?php 

}else{

     header("Location: ../logout.php");

     exit();

}

 ?>