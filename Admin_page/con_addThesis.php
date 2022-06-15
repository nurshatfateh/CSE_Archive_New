<?php
	$CourseName = $_POST['CourseName'];
	$NoOfStudent = $_POST['NoOfStudent'];
	$Academic_year = $_POST['AcademicYear'];
	$StudentID=$_POST['StudentID'];
	$Member1Name = $_POST['TeamMember1'];
	$TeamPhoto = $_POST['TeamPhoto'];
    $Member2Name = $_POST['TeamMember2'];
	$Proposal = $_POST['Proposal'];
    $Member3Name = $_POST['TeamMember3'];
	$Prototype = $_POST['Prototype'];
    $Member4Name = $_POST['TeamMember4'];
	$ThesisBook = $_POST['ThesisBook'];
    $Member5Name = $_POST['TeamMember5'];
    $CommenceDate = $_POST['CommenceDate'];
    $CompletionDate = $_POST['CompletionDate'];
	$ThesisTitle = $_POST['ThesisTitle'];
    $ThesisDomain = $_POST['ThesisDomain'];
	$ThesisSynopsis = $_POST['ThesisSynopsis'];
    $URLFrontend = $_POST['URLFrontend'];
	$GithubLink = $_POST['GithubLink'];
	$RelevantPublications = $_POST['RelevantPublications'];
	$ThesisFiles = $_POST['ThesisFiles'];


	// Database connection
	$conn = new mysqli('localhost','root','','test_db');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into thesis(CourseName, ThesisDomain,ThesisTitle, Academic_year,CommenceDate,CompletionDate,TeamPhoto,ThesisSynopsis,Proposal,Prototype, ThesisBook,URLFrontend,GithubLink,ThesisFiles) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param($CourseName, $ThesisDomain,$ThesisTitle, $Academic_year,$CommenceDate,$CompletionDate,$TeamPhoto,$ThesisSynopsis,$Proposal,$Prototype, $ThesisBook,$URLFrontend,$GithubLink,$ThesisFiles);
		$execval = $stmt->execute();
		echo $execval;
		echo "Thesis added successfully...";
		$stmt->close();
		$conn->close();
	}
?>