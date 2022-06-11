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

    <!-- font awesome css  -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />

    <!-- favicon link css  -->
     <link rel="shortcut icon" type="image/png" href="img/MIST.png">

    <title>Thesis</title>
  </head>
  <body>
    <!-- navbar starts -->
    <nav class="navbar navbar-expand-xxl navbar-light border-bottom border-5 border-success">
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
              <a class="nav-link" href="projects_admin.html">Projects</a>
            </li>
            <li class="nav-item mx-3">
              <a class="nav-link" href="achievements_admin.html">Achievements</a>
            </li>
            <li class="nav-item mx-3">
              <a class="nav-link" href="publication_admin.html">Publications</a>
            </li>
            <li class="nav-item mx-3">
              <a
                class="nav-link active text-success fw-bolder"
                aria-current="page"
                href="thesis_admin.html"
                >Thesis</a
              >
            </li>
            <li class="nav-item mx-3">
              <a class="nav-link" href="activity_admin.html">Activity</a>
            </li>
          </ul>
          <a href="facultyprofile_admin.html"> <img class="ms-3" src="../img/profile.png" alt="profile" /></a> 
          <a href="studentprofile_admin.html" class="text-decoration-none text-black">   <h6 class="mt-2 mx-3  " >Tanjim Hasan</h6></a> 


          <a href="../logout.php"
            ><button type="button" class="btn btn-danger mx-3">
              Log Out
            </button></a
          >
        </div>
      </div>
    </nav>
    <!-- navbar ends -->
    <!-- card section -->
    <div class="container-flex bg-light">
      <!-- Thesis head -->
      <div class="container pt-5 ">
        <div class="card">
          <div class="card-body bg-primary p-4">
            <h1 class="d-inline-block text-white ms-4">Thesis</h1>
            <a href="form_admin.html"
              ><button type="button" class="btn btn-light btn-lg float-end">
                + Add Thesis
              </button></a
            >
          </div>
        </div>
      </div>
      <!-- Thesis head ends-->

      <div class="container px-4 pt-5">
        <div class="row gx-5">
          <!-- LEFT BAR -->
          <div class="col-xxl-3 col-12 mb-5">
            <div class="p-3 border bg-white border border-3  border-info">
              <h4 class="ps-2">Search Filter</h4>
              <div class="p-2 mt-3 border bg-white border border-2  border-info">
                <div class="dropdown">
                  <button
                    class="btn dropdown-toggle"
                    type="button"
                    id="dropdownMenuButton1"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  >
                    Sort By Session
                  </button>
                  <ul
                    class="dropdown-menu"
                    aria-labelledby="dropdownMenuButton1"
                  >
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li>
                      <a class="dropdown-item" href="#">Another action</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="p-2 mt-3 border bg-white border border-2  border-info">
                <div class="dropdown">
                  <button
                    class="btn dropdown-toggle"
                    type="button"
                    id="dropdownMenuButton1"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  >
                    Sort By Teacher
                  </button>
                  <ul
                    class="dropdown-menu"
                    aria-labelledby="dropdownMenuButton1"
                  >
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li>
                      <a class="dropdown-item" href="#">Another action</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="p-2 mt-3 border bg-white border border-2  border-info">
                <div class="dropdown">
                  <button
                    class="btn dropdown-toggle"
                    type="button"
                    id="dropdownMenuButton1"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  >
                    Sort By Batch
                  </button>
                  <ul
                    class="dropdown-menu"
                    aria-labelledby="dropdownMenuButton1"
                  >
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li>
                      <a class="dropdown-item" href="#">Another action</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="p-2 mt-3 border bg-white border border-2  border-info">
                <div class="dropdown">
                  <button
                    class="btn dropdown-toggle"
                    type="button"
                    id="dropdownMenuButton1"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  >
                    Sort By Year
                  </button>
                  <ul
                    class="dropdown-menu"
                    aria-labelledby="dropdownMenuButton1"
                  >
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li>
                      <a class="dropdown-item" href="#">Another action</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </li>
                  </ul>
                </div>
              </div>



              <div class="p-2 mt-3 border bg-white border border-2  border-info">
                <form action="" class="p-3">
                  
                  <input type="text" id="key" name="key" placeholder="Enter any keyword" class="p-2 border bg-white border border-2  border-info"><br><br>
            
                  <button type="button" class="btn btn-primary">Search</button>
                </form> 
              </div>

             
            </div>
          </div>
          <!-- LEFT BAR ends -->
          <!-- Right BAR -->
          <div class="col-xxl-9 col-12">
          

            <div class="card mb-2 border border-3  border-info">
              <h5 class="card-header text-white bg-info">Others' Thesis</h5>
              <div class="card-body bg-white">
                <a
                  href="thesis_details_admin.html"
                  class="text-decoration-none text-black"
                  ><div class="p-3 mt-2 mb-2 border border border-2  border-info">
                    <h4 class="mb-3">Thesis Name</h4>
                    <p class="m-0 p-2">
                        <h6 class="d-inline-block">Thesis Domain</h6>
                        | 2019-2020
                      </p>
                  </div></a
                >
              </div>
              <div class="card-body bg-white">
               <a
                  href="thesis_details_admin.html"
                  class="text-decoration-none text-black"
                  ><div class="p-3 mt-2 mb-2 border bg-white border border-2  border-info">
                    <h4 class="mb-3">Thesis Name</h4>
                    <p class="m-0 p-2">
                        <h6 class="d-inline-block">Thesis Domain</h6>
                        | 2019-2020
                      </p>
                  </div></a
                >
              </div>
              <div class="card-body bg-white">
               <a
                  href="thesis_details_admin.html"
                  class="text-decoration-none text-black"
                  ><div class="p-3 mt-2 mb-2 border bg-white border border-2  border-info">
                    <h4 class="mb-3">Thesis Name</h4>
                    <p class="m-0 p-2">
                        <h6 class="d-inline-block">Thesis Domain</h6>
                        | 2019-2020
                      </p>
                  </div></a
                >
              </div>
              <div class="card-body bg-white">
               <a
                  href="thesis_details_admin.html"
                  class="text-decoration-none text-black"
                  ><div class="p-3 mt-2 mb-2 border bg-white border border-2  border-info">
                    <h4 class="mb-3">Thesis Name</h4>
                    <p class="m-0 p-2">
                        <h6 class="d-inline-block">Thesis Domain</h6>
                        | 2019-2020
                      </p>
                  </div></a
                >
              </div>
              <div class="card-body bg-white">
               <a
                  href="thesis_details_admin.html"
                  class="text-decoration-none text-black"
                  ><div class="p-3 mt-2 mb-2 border border border-2  border-info">
                    <h4 class="mb-3">Thesis Name</h4>
                    <p class="m-0 p-2">
                        <h6 class="d-inline-block">Thesis Domain</h6>
                        | 2019-2020
                      </p>
                  </div></a
                >
              </div>
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

      <!-- footer ends -->
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
