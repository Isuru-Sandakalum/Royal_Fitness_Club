<?php
	$name = $_POST['name'];
	$comment = $_POST['comment'];
	$email = $_POST['email'];

	// Database connection
	$conn = new mysqli('localhost','root','','submission');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into submission(name,comment,email) values(?,?,?)");
		$stmt->bind_param("sss",$name,$comment,$email);
		$execval = $stmt->execute();
		echo $execval;
		echo "Message has sent successfully...";
		$stmt->close();
		$conn->close();
	}
?>