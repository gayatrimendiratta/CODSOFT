<?php
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$gender = $_POST['gender'];
  $number = $_POST['number'];
  $email = $_POST['email'];
	$course = $_POST['course'];
  $date = $_POST['date'];
	
	$conn = new mysqli('localhost','root','','form');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into formin(firstName, lastName, date,number, email) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("ssiis", $firstName, $lastName, $date,$number,$email);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>