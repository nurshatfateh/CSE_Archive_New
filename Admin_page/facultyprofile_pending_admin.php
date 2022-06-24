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

    <!-- favicon link css  -->
    <link rel="shortcut icon" type="image/png" href="img/MIST.png" />

    <title>Profile_pending_admin</title>
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
          <img class="ms-md-5 ms-1" src="../img/navlogo.png" alt="logo"
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
              <a
                class="nav-link  "
             
                href="projects_admin.php"
                >Projects</a
              >
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

      
    <!-- middle part starts -->
    <div class="bg-light">
         <!-- project head -->
       <div class="container pt-5">
        <div class="card">
          <div class="card-body bg-primary p-4">
            <h1 class="d-inline-block text-white ms-4">Faculty Profile</h1>
           
          </div>
        </div>
      </div>
      <!-- Project head ends-->
        <!-- firstcontainer starts -->
        
        <div class="container pt-5">
            <div class="card-body bg-white">
               
             <div class="row">
                 <div class="col-lg-4 col-12 my-auto">
                    <img src="../img/sattar.png" style="width:220px;height:250px;" class="rounded my-3 mx-auto d-block border border-3 border-info" style="width: 60%;" alt="...">
                 </div>
                 
               
                <div class="col-12 col-lg-8 ">
                      
                  <div class="p-3 mt-3  mx-auto border border-3 border-info rounded ">
                    <h2 class="mb-1 ">Faculty Name</h2>
                  
                    <h6 class="mb-0">Faculty Position: Professor</h6>
                  
                        <ul class="mt-2">
                            <li>
                                Faculty ID: 202014040
                            </li>
                            <li>
                                Date of joining: Spring/2020
                            </li>
                            <li>
                                Department : B.Sc. in Computer Science & Engineering (CSE)
                            </li>
                            <li>
                                Research Domain : Artificial Intelligence
                            </li>
                            <li>
                                Degree : PHD
                            </li>
                        </ul>
                
                   
                </div>
                </div>
             </div>
                
              </div>
        </div>
        <!-- firstcontainer ends -->
  
       
      <!-- secondcontainer starts  -->

      <div class="container pt-3">
        <div class="row border bg-white m-0">
          <!-- left part starts  -->
          <div class="col-12 col-lg-4 side-nav p-3 ">
            <div class="info-card p-2 border border-3 border-info m-3  rounded ">
              <h4>Date of Birth</h4>
              <p>14/02/2001</p>
            </div>
            <div class="info-card p-2 border border-3 border-info m-3 rounded ">
                <h4>Phone Number
                  </h4>
                <p>01933318385</p>
              </div>
              <div class="info-card p-2 border border-3 border-info m-3 rounded ">
                <h4>Email
                  </h4>
                <p>nurshatfateh@gmail.com</p>
              </div>

           

         

            


            <div class="info-card p-3 border border-3 border-info m-3 rounded ">
              <h4>Is currently on service?
                </h4>
              <p>Yes</p>
            </div>

            

            
          </div>
          <!-- left parts ends  -->

          <!-- right parts starts  -->
          <div class="col-lg-8 col-12 p-4 pt-4 mt-2 ">
          
         
            <div class="card mb-5 border border-3 border-info rounded ">
                <h5 class="card-header text-white bg-info ">Thesis</h5>
                <div class="card-body bg-white ">
                  <a
                    href="thesis_details_admin.php"
                    class="text-decoration-none text-black"
                    ><div class="p-3 mt-2 mb-2 border  border-info border-2 rounded ">
                      <h4 class="mb-2">My Thesis Name</h4>
                      <div class="d-flex align-items-center text-black">
                        <p class="m-0 p-2">
                          <h6 class="d-inline-block">Thesis Domain</h6>
                          | 2019-2020
                        </p>
                        <a href="form_admin.php" class="ms-auto inline-block btn btn-dark"
                          >Edit <i class="fa fa-edit"></i
                        ></a>
                      </div></div
                  ></a>
                </div>
                <div class="card-body bg-white">
                   <a
                    href="thesis_details_admin.php"
                    class="text-decoration-none text-black"
                    ><div class="p-3 mt-2 mb-2 border  border-info border-2 rounded ">
                      <h4 class="mb-2">My Thesis Name</h4>
                      <div class="d-flex align-items-center text-black">
                        <p class="m-0 p-2">
                          <h6 class="d-inline-block">Thesis Domain</h6>
                          | 2019-2020
                        </p>
                        <a href="form_admin.php" class="ms-auto inline-block btn btn-dark"
                          >Edit <i class="fa fa-edit"></i
                        ></a>
                      </div></div
                  ></a>
                </div>
                <div class="card-body bg-white">
                    <a
                     href="thesis_details_admin.php"
                     class="text-decoration-none text-black"
                     ><div class="p-3 mt-2 mb-2 border  border-info border-2 rounded ">
                       <h4 class="mb-2">My Thesis Name</h4>
                       <div class="d-flex align-items-center text-black">
                         <p class="m-0 p-2">
                           <h6 class="d-inline-block">Thesis Domain</h6>
                           | 2019-2020
                         </p>
                         <a href="#" class="ms-auto inline-block btn btn-dark"
                           >Edit <i class="fa fa-edit"></i
                         ></a>
                       </div></div
                   ></a>
                 </div>
                 <div class="card-body bg-white">
                    <a
                     href="thesis_details_admin.php"
                     class="text-decoration-none text-black"
                     ><div class="p-3 mt-2 mb-2 border  border-info border-2 rounded " >
                       <h4 class="mb-2">My Thesis Name</h4>
                        <div class="d-flex align-items-center text-black">
                          <p class="m-0 p-2">
                            <h6 class="d-inline-block">Thesis Domain</h6>
                            | 2019-2020
                          </p>
                          <a href="#" class="ms-auto inline-block btn btn-dark"
                            >Edit <i class="fa fa-edit"></i>
                          </a>
                        </div>
                      </div>
                    </a>
                 </div>
  
            </div>

            <br>

            <div class="card mb-5 border ">
               
              <form>
                <div class="form-group">
                  <textarea class="form-control" id="faculty_select" rows="7" placeholder="Comment"></textarea>
                </div>
              </form>
            
            </div>
            <a href="faculty_details_admin.php" class="text-decoration-none"> 
            <div class="card mb-5 border-0 ">
               
              <div class="btn-group" role="group" aria-label="Basic example">
              
                <button type="button" class="btn btn-outline-success btn-lg btn-block ">Accept</button>
                <button type="button" class="btn btn-outline-danger btn-lg btn-block">Reject</button>
              
              </div>
          
            </div>
            </a>
        
              
            
            
          
          </div>

          <!-- right parts ends  -->

         
          
        </div>
      </div>
      
      <!-- second container ends  -->
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