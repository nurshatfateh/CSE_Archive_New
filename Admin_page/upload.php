<?php
// include mysql database configuration file
include_once 'db_conn.php';
 
if (isset($_POST['submit']))
{
 
    
    // Allowed mime types
    $fileMimes = array(
        'text/x-comma-separated-values',
        'text/comma-separated-values',
        'application/octet-stream',
        'application/vnd.ms-excel',
        'application/x-csv',
        'text/x-csv',
        'text/csv',
        'application/csv',
        'application/excel',
        'application/vnd.msexcel',
        'text/plain'
    );
 
    // Validate whether selected file is a CSV file
    if (!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'], $fileMimes))
    {
      
            // Open uploaded CSV file with read-only mode
            $csvFile = fopen($_FILES['file']['tmp_name'], 'r');
 
            // Skip the first line
            fgetcsv($csvFile);
 
            // Parse data from CSV file line by line
             // Parse data from CSV file line by line
            while (($getData = fgetcsv($csvFile, 10000, ",")) !== FALSE)
            {
                // Get row data
                $roll = $getData[0];
                $name = $getData[1];
                $regno = $getData[2];
                $batch = $getData[3];
                $dept = $getData[4];
                $quota = $getData[5];
                $parentjob = $getData[6];
                $dob = $getData[7];
                $phone = $getData[8];
                $email = $getData[9];
                $presadd = $getData[10];
                $permadd = $getData[11];
                $father = $getData[12];
                $mother = $getData[13];
                $blood = $getData[14];
                $current = $getData[15];
                $session = $getData[16];
                $pass = $getData[17];
   
         
 
                // If user already exists in the database with the same roll
                
                $query = "SELECT roll FROM student WHERE roll = '" . $getData[0] . "'";
 
                $check = mysqli_query($conn, $query);
 
                if ($check->num_rows > 0)
                {
                    
                    mysqli_query($conn, "INSERT INTO student (roll, name, regno, batch, dept, quota, parentjob, dob, phone, email, presadd, permadd, father, mother, blood, current, session, pass) VALUES ('" . $roll . "', '" . $name . "', '" . $regno . "', '" . $batch . "', '" . $dept . "', '" . $quota . "', '" . $parentjob . "', '" . $dob . "', '" . $phone . "', '" . $email . "', '" . $presadd . "', '" . $permadd . "', '" . $father . "', '" . $mother . "', '" . $blood . "', '" . $current . "', '" . $session . "', '" . $pass . "')");
                
                }
                else
                {
                    mysqli_query($conn, "INSERT INTO student (roll, name, regno, batch, dept, quota, parentjob, dob, phone, email, presadd, permadd, father, mother, blood, current, session, pass) VALUES ('" . $roll . "', '" . $name . "', '" . $regno . "', '" . $batch . "', '" . $dept . "', '" . $quota . "', '" . $parentjob . "', '" . $dob . "', '" . $phone . "', '" . $email . "', '" . $presadd . "', '" . $permadd . "', '" . $father . "', '" . $mother . "', '" . $blood . "', '" . $current . "', '" . $session . "', '" . $pass . "')");
                }
             
                
            }
 
            // Close opened CSV file
            fclose($csvFile);
            
            header("Location: studentadmin_admin.php");
         
    }
    else
    {
        echo "Please select valid file";
    }
}