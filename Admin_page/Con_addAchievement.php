<?php
	$EventName = $_POST['EventName'];
	$Organizer = $_POST['Organizer'];
	$Academic_year = $_POST['AcademicYear'];
	$Student_ID = $_POST['studentID'];
	$Supervisor = $_POST['supervisor'];
	$Member1Name = $_POST['TeamMember1'];
    $Member2Name = $_POST['TeamMember2'];
    $Member3Name = $_POST['TeamMember3'];
    $Member4Name = $_POST['TeamMember4'];
    $Member5Name = $_POST['TeamMember5'];
    $AchievementTitle = $_POST['AchievementTitle'];
    $Achievement_detailes = $_POST['AchievementDetailes'];
    $PrizeMoney = $_POST['PrizeMoney'];


	// Database connection
	$conn = new mysqli('localhost','root','','test_db');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into addachievement(EventName, Organizer, Academic_year,Student_ID, Supervisor, Member1Name,Member2Name,Member3Name,Member4Name,Member5Name,AchievementTitle,Achievement_detailes,PrizeMoney) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssssssssss", $EventName, $Organizer, $Academic_year,$Student_ID, $Supervisor, $Member1Name,$Member2Name,$Member3Name,$Member4Name,$Member5Name,$AchievementTitle,$Achievement_detailes,$PrizeMoney);
		$execval = $stmt->execute();
		echo $execval;
		echo "Achievement added successfully...";
		$stmt->close();
		$conn->close();
	}
?>