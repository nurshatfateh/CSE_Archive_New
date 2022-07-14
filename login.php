<?php 

session_start(); 

include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $uname = validate($_POST['uname']);

    $pass = validate($_POST['password']);

    if (empty($uname)) {

        header("Location: index.php?error=User Name is required");

        exit();

    }else if(empty($pass)){

        header("Location: index.php?error=Password is required");

        exit();

    }else{

        $sql = "SELECT * FROM student WHERE roll='$uname' AND pass='$pass'";

        $result = mysqli_query($conn, $sql);

        $sql = "SELECT * FROM faculty WHERE id='$uname' AND pass='$pass'";

        $result2= mysqli_query($conn, $sql);

        $sql = "SELECT * FROM admin WHERE id='$uname' AND pass='$pass'";

        $result3= mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['roll'] === $uname && $row['pass'] === $pass) {

                echo "Logged in!";

                $_SESSION['user_name'] = $row['roll'];

                $_SESSION['name'] = $row['name'];

                $_SESSION['id'] = $row['roll'];
                $a=$row["roll"];
                header("Location: Admin_page/home2_admin.php? id= $a ");

              

                

                exit();

            }else{

                header("Location: index.php?error=Incorect User name or password");

                exit();

            }

        }
        else if (mysqli_num_rows($result2) === 1) {

            $row = mysqli_fetch_assoc($result2);

            if ($row['id'] === $uname && $row['pass'] === $pass) {

                echo "Logged in!";

                $_SESSION['user_name'] = $row['id'];

                $_SESSION['name'] = $row['name'];

                $_SESSION['id'] = $row['id'];
                $a=$row["id"];
                header("Location: Admin_page/home2_admin.php? id= $a ");
    

               

                

                exit();

            }else{

                header("Location: index.php?error=Incorect User name or password");

                exit();

            }

        }
        else if (mysqli_num_rows($result3) === 1) {

            $row = mysqli_fetch_assoc($result3);

            if ($row['id'] === $uname && $row['pass'] === $pass) {

                echo "Logged in!";

                $_SESSION['user_name'] = $row['id'];

                $_SESSION['name'] = $row['name'];

                $_SESSION['id'] = $row['id'];
                $a=$row["id"];
                header("Location: Admin_page/home2_admin.php? id= $a ");
    

               

                

                exit();

            }else{

                header("Location: index.php?error=Incorect User name or password");

                exit();

            }

        }
        
        
        
        else{

            header("Location: index.php?error=Incorect User name or password");

            exit();

        }

    }

}else{

    header("Location: index.php");

    exit();

}