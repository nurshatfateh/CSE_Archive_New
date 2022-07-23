<?php
	$EventName = $_POST['EventName'];
    $EventTag = $_POST['EventTag'];
    $CommenceDate = date('Y-m-d', strtotime($_POST['CommenceDate'])) ;
    $CompletionDate = date('Y-m-d', strtotime($_POST['CompletionDate'])) ;
    $PostDetails=$_POST['PostDetails']; 
    $Organizer = $_POST['Organizer'];
	$session = $_POST['session'];
	


	// Database connection
	$conn = new mysqli('localhost','root','','test_db');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {

        $Get_image_name = $_FILES['ActivityPic']['name'];
			
		$image_Path = "images/".basename($Get_image_name);  

		$stmt = $conn->prepare("insert into addactivity(EventName, EventTag, CommenceDate,CompletionDate,PostDetails,Organizer,ActivityPhoto,session) values(?,?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssssssss", $EventName, $EventTag, $CommenceDate,$CompletionDate,$PostDetails,$Organizer,$Get_image_name,$session);
		$execval = $stmt->execute();
		echo $execval;
		echo " Activity added successfully...";
		
         
	  
			// Database$sql = "INSERT INTO addachievement (AchievementPhoto) VALUES ('$Get_image_name')";
			
			 // Run SQL query
			//mysqli_query($conn, $sql);
	  
			if (move_uploaded_file($_FILES['ActivityPic']['tmp_name'], $image_Path)) {
				//echo "Your Image uploaded successfully";
				header("Location:activity_admin.php");
		    }else{
				echo "Not Insert Image";
			}
		
		$stmt->close();
		$conn->close();
	}

?>