<?php
    
    
   
    // Database connection
	$conn =  mysqli_connect('localhost','root',' ','db2021');
	$forward = $_POST['forward'];
    $left = $_POST['left'];
    $backward = $_POST['backward'];
    $right = $_POST['right'];
    $stop = $_POST['stop'];
    
	if(mysqli_connect_error()){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into base(forward, left, backward, right, stop) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("iiiiii", $forward, $left, $backward, $right, $stop);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();

    }
?>