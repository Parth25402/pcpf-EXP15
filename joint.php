<?php
   $firstname = $_POST['firstname'];
   $lastname = $_POST['lastname'];
   $gender = $_POST['gender'];
   $email = $_POST['email'];
   $Library = $_POST['Library'];
   $department = $_POST['department'];

   $conn = new mysqli("localhost","root","","joint");
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into library2(firstname, lastname, gender, email, Library, department) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssssis", $firstname, $lastname, $gender, $email, $Library, $department);
		$execval = $stmt->execute();
		echo "Registration Successfully...";
		$stmt->close();
		$conn->close();
	}
?>