<?php
    $conn = mysqli_connect("localhost", "root", "", "test");
    // Check connection
        if($conn === false)die("ERROR: Could not connect. ". mysqli_connect_error());
        // Taking values from the form data(input)
        $name = $_REQUEST['name'];
        $age = $_REQUEST['age'];
        $address = $_REQUEST['address'];
		$email = $_REQUEST['email'];
		$gender = $_REQUEST['gender'];
		$quali = $_REQUEST['quali'];
        // Performing insert query execution
        // here our table name is college
		if($quali == "Bachelor's Degree") $quali = "Bachelors Degree";
		else if($quali == "Master's Degree") $quali = "Masters Degree";
       	$sql = "INSERT INTO `answers` (`name`, `age`, `address`, `Email ID`, `Gender`, `Educational Qualification`)
		   		VALUES ('$name', '$age', '$address', '$email', '$gender', '$quali')";
       	if(mysqli_query($conn, $sql)) {
       		echo "<h3>Response recorded successfully.</h3>";
      		echo nl2br("\nName - $name\n Age - $age\nAddress - $address\nEmail ID - $email\nGender - $gender\nEducational Qualification$quali");
      	}
     else {
      		echo "ERROR: Sorry! $sql. ". mysqli_error($conn);
	}
	    // Close connection
	mysqli_close($conn);
?>