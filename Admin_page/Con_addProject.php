<?php
	$ProjectName = $_POST['ProjectName'];
	$Academicyear = $_POST['Academicyear'];
	$NoofStudent = $_POST['NoofStudent'];
	$StudentID=$_POST['StudentID'];
	$Member_1Name = $_POST['Member-1Name'];
	$Member_2Name = $_POST['Member-2Name'];
	$Member_3Name = $_POST['Member-3Name'];
	$Member_4Name = $_POST['Member-4Name'];
  $Member_5Name = $_POST['Member-5Name'];
	///$CommenceDate = $_POST['CommenceDate'];
	///$CompletionDate = $_POST['CompletionDate'];
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
	$conn = new mysqli('localhost','root','','test_db');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {

       $Get_image_name = $_FILES['TeamPhoto']['name'];
			
		$image_Path = "images/".basename($Get_image_name);  

		$stmt = $conn->prepare("insert into projects(ProjectName,Academicyear,NoofStudent, StudentID, Supervisors,Member-1Name,Member-2Name,Member-3Name,Member-4Name,Member-5Name,ProjectTitle,ProjectDomain,ProjectSynopsis,TeamPhoto,Proposal, Prototype,Budget,URLofFrontend,GithubLink,ProjectFile,RelevantProjects) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
		$stmt->bind_param("ssissssssssssssssssss", $ProjectName, $Academicyear, $NoofStudent,$StudentID,$Supervisors,$Member_1Name,$Member_2Name,$Member_3Name,$Member_4Name, $Member_5Name,$ProjectTitle,$ProjectDomain,$ProjectSynopsis,$Get_image_name,$Proposal,$Prototype,$Budget,$URLofFrontend,$GithubLink,$ProjectFile,$RelevantProjects);
		$execval = $stmt->execute();
		echo $execval;
		echo " Project added successfully...";
		
         
	  
		
	  
			// if (move_uploaded_file($_FILES['TeamPhoto']['tmp_name'], $image_Path)) {
			// 	echo "Your Image uploaded successfully";
		  //   }else{
			// 	echo "Not Inserted Image";
			// }
		
		$stmt->close();
		$conn->close();
	}

?>