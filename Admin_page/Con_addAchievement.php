<?php
	$EventName = $_POST['EventName'];
	$Organizer = $_POST['Organizer'];
	$Academic_year = $_POST['AcademicYear'];
	$TeamName=$_POST['TeamName'];
	$StudentNo = $_POST['StudentNo'];
	
	$Supervisor1 = $_POST['supervisor1'];
	$Supervisor2 = $_POST['supervisor2'];
	$Supervisor3 = $_POST['supervisor3'];
	$Supervisor4 = $_POST['supervisor4'];

	$Member1ID = $_POST['StudentID1'];

	$Member2ID = $_POST['StudentID2'];

	$Member3ID = $_POST['StudentID3'];

	$Member4ID = $_POST['StudentID4'];

	$Member5ID = $_POST['StudentID5'];

    $AchievementTitle = $_POST['AchievementTitle'];
    $Achievement_detailes = $_POST['AchievementDetailes'];
	//$AchievementPhoto = $_POST['AchievementPic'];
    $PrizeMoney = $_POST['PrizeMoney'];
	
	$date =date('Y-m-d', strtotime($_POST['AcieveDate'])) ;


	// Database connection
	$conn = new mysqli('localhost','root','','test_db');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {

        $Get_image_name = $_FILES['AchievementPic']['name'];
			
		$image_Path = "images/".basename($Get_image_name);  

		$stmt = $conn->prepare("insert into addachievement(EventName, Organizer, Academic_year,TeamName,StudentNo,Supervisor1,Supervisor2,Supervisor3,Supervisor4, Member1ID,Member2ID,Member3ID,Member4ID,Member5ID,AchievementTitle,Achievement_detailes,PrizeMoney,AchievementPhoto,date) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssssssssssssssss", $EventName, $Organizer, $Academic_year,$TeamName,$StudentNo,$Supervisor1,$Supervisor2,$Supervisor3,$Supervisor4, $Member1ID,$Member2ID,$Member3ID,$Member4ID,$Member5ID,$AchievementTitle,$Achievement_detailes,$PrizeMoney,$Get_image_name,$date);
		$execval = $stmt->execute();
		echo $execval;
		echo " Achievement added successfully...";
		
         
	  
			// Database$sql = "INSERT INTO addachievement (AchievementPhoto) VALUES ('$Get_image_name')";
			
			 // Run SQL query
			//mysqli_query($conn, $sql);
	  
			if (move_uploaded_file($_FILES['AchievementPic']['tmp_name'], $image_Path)) {
				//echo "Your Image uploaded successfully";
				header("Location:achievements_admin.php");
		    }else{
				echo "Not Insert Image";
			}
		
		$stmt->close();
		$conn->close();
	}
