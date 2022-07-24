<?php
$ProjectName = $_POST['ProjectName'];
$Academicyear = $_POST['Academicyear'];
$NoofStudent = $_POST['NoofStudent'];
$Member_1Name = $_POST['Member1Name'];
$Member_2Name = $_POST['Member2Name'];
$Member_3Name = $_POST['Member3Name'];
$Member_4Name = $_POST['Member4Name'];
$Member_5Name = $_POST['Member5Name'];
$Supervisors = $_POST['Supervisors'];
$CommenceDate = date('Y-m-d', strtotime($_POST['CommenceDate'])) ;
$CompletionDate = date('Y-m-d', strtotime($_POST['CompletionDate'])) ;
$ProjectType = $_POST['ProjectType'];
$ProjectTitle = $_POST['ProjectTitle'];
$ProjectDomain = $_POST['ProjectDomain'];
$ProjectSynopsis = $_POST['ProjectSynopsis'];
$Proposal = $_POST['Proposal'];
$Prototype = $_POST['Prototype'];
$Budget = $_POST['Budget'];
$URLofFrontend = $_POST['URLofFrontend'];
$GithubLink = $_POST['GithubLink'];
$ProjectFile = $_POST['ProjectFile'];
$RelevantProjects = $_POST['RelevantProjects'];


// Database connection
$conn = new mysqli('localhost', 'root', '', 'test_db');
if ($conn->connect_error) {
	echo "$conn->connect_error";
	die("Connection Failed : " . $conn->connect_error);
} else {

	$Get_image_name = $_FILES['ProjectPhoto']['name'];

	$image_Path = "images/" . basename($Get_image_name);

	$stmt = $conn->prepare("insert into projects(ProjectName,Academicyear,NoofStudent,Supervisors,Member1Name,Member2Name,Member3Name,Member4Name,Member5Name,CommenceDate,CompletionDate,ProjectType,ProjectTitle,ProjectDomain,ProjectSynopsis,Proposal, Prototype,Budget,URLofFrontend,GithubLink,ProjectFile,RelevantProjects,ProjectPhoto) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
	$stmt->bind_param("ssissssssssssssssssssss", $ProjectName, $Academicyear,	$NoofStudent, $Supervisors, $Member_1Name, $Member_2Name, $Member_3Name, $Member_4Name, $Member_5Name,	$CommenceDate, $CompletionDate, $ProjectType, $ProjectTitle, $ProjectDomain, $ProjectSynopsis, $Proposal, $Prototype, $Budget, $URLofFrontend, $GithubLink, $ProjectFile, $RelevantProjects, $Get_image_name);
	$execval = $stmt->execute();
	echo $execval;
	
	echo "Project added successfully...";





	if (move_uploaded_file($_FILES['ProjectPhoto']['tmp_name'], $image_Path)) {
		/// echo "Your Image uploaded successfully";
// 			echo '<div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
//   <div class="toast-header">
//     <img src="..." class="rounded me-2" alt="...">
//     <strong class="me-auto">Bootstrap</strong>
//     <small>11 mins ago</small>
//     <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
//   </div>
//   <div class="toast-body">
//     Hello, world! This is a toast message.
//   </div>
// </div>'
			header("Location:projects_admin.php");
	} else {
		echo "Not Inserted Image";
	}

	$stmt->close();
	$conn->close();
}
