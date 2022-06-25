<?php
include_once 'dbconnect.php';

//check if form submitted
if (isset($_POST['submit']))
{
    $img_name = $_FILES['glryimage']['name'];

    //upload file
    if ($img_name!='')
    {
        $ext = pathinfo($img_name, PATHINFO_EXTENSION);
        $allowed = ['png', 'gif', 'jpg', 'jpeg'];
    
        //check if it is valid image type
        if (in_array($ext, $allowed))
        {
            $created = @date('Y-m-d H:i:s');

            // read image data into a variable for inserting
            $img_data = addslashes(file_get_contents($_FILES['glryimage']['tmp_name']));
                    
            // insert image into mysql database
            $sql = "INSERT INTO tbl_gallery(name, imagedata, created) VALUES('$img_name', '$img_data', '$created')";
            mysqli_query($con, $sql) or die("Error " . mysqli_error($con));
            header("Location: index.php?st=success");
        }
        else
        {
            header("Location: index.php?st=error");
        }
    }
    else
        header("Location: index.php");
}
?>