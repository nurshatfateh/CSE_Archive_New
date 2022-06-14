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
	$Member1Name = $_POST['TeamMember1'];
	$Member2ID = $_POST['StudentID2'];
    $Member2Name = $_POST['TeamMember2'];
	$Member3ID = $_POST['StudentID3'];
    $Member3Name = $_POST['TeamMember3'];
	$Member4ID = $_POST['StudentID4'];
    $Member4Name = $_POST['TeamMember4'];
	$Member5ID = $_POST['StudentID5'];
    $Member5Name = $_POST['TeamMember5'];
    $AchievementTitle = $_POST['AchievementTitle'];
    $Achievement_detailes = $_POST['AchievementDetailes'];
	$AchievementPhoto = $_POST['AchievementPic'];
    $PrizeMoney = $_POST['PrizeMoney'];


	// Database connection
	$conn = new mysqli('localhost','root','','test_db');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into addachievement(EventName, Organizer, Academic_year,TeamName,StudentNo,Supervisor1,Supervisor2,Supervisor3,Supervisor4, Member1ID,Member1Name,Member2ID,Member2Name,Member3ID,Member3Name,Member4ID,Member4Name,Member5ID,Member5Name,AchievementTitle,Achievement_detailes,AchievementPhoto,PrizeMoney) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssssssssssssssssssss", $EventName, $Organizer, $Academic_year,$TeamName,$StudentNo,$Supervisor1,$Supervisor2,$Supervisor3,$Supervisor4, $Member1ID,$Member1Name,$Member2ID,$Member2Name,$Member3ID,$Member3Name,$Member4ID,$Member4Name,$Member5ID,$Member5Name,$AchievementTitle,$Achievement_detailes,$AchievementPhoto,$PrizeMoney);
		$execval = $stmt->execute();
		echo $execval;
		echo " Achievement added successfully...";
		$stmt->close();
		$conn->close();
	}
?>