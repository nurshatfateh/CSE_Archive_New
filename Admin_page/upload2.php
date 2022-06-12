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
                $id = $getData[0];
                $name = $getData[1];
                $position = $getData[2];
                $joindate = $getData[3];
                $dept = $getData[4];
                $research = $getData[5];
                $degree = $getData[6];
                $dob = $getData[7];
                $phone = $getData[8];
                $email = $getData[9];
                $current = $getData[10];
        
 
                // If user already exists in the database with the same id
                $query = "SELECT id FROM faculty WHERE id = '" . $getData[0] . "'";
 
                $check = mysqli_query($conn, $query);
 
                if ($check->num_rows > 0)
                {
                    mysqli_query($conn, "INSERT INTO faculty (id, name, position, joindate, dept, research, degree, dob, phone, email, current) VALUES ('" . $id . "', '" . $name . "', '" . $position . "', '" . $joindate . "', '" . $dept . "', '" . $research . "', '" . $degree . "', '" . $dob . "', '" . $phone . "', '" . $email . "', '" . $current . "')");
                }
                else
                {
                    mysqli_query($conn, "INSERT INTO faculty (id, name, position, joindate, dept, research, degree, dob, phone, email, current) VALUES ('" . $id . "', '" . $name . "', '" . $position . "', '" . $joindate . "', '" . $dept . "', '" . $research . "', '" . $degree . "', '" . $dob . "', '" . $phone . "', '" . $email . "', '" . $current . "')");
                
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