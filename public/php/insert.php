<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name = "viewport" content = "width=device-width,initial-scale=1">
	<title>Survey Form</title>
	<link rel="stylesheet" href="../../src/css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
	<nav class="container-fluid">
		<a href = "../index.html">Home</a>
		<a href="about.html">About Us</a>
		<div class="col-lg-12  col-sm-6 col-8"><h1 align="center">Survey Form</h1></div>
	</nav>
	<center>
		<div id="containerdetails" class="container-fluid">
			<div id="details" class="col-md-4 col-sm-6">
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
				      		echo nl2br("\nName - $name\n Age - $age\nAddress - $address\nEmail ID - $email\nGender - $gender\nEducational Qualification - $quali");
				      	}
				     else {
				      		echo "ERROR: Sorry! $sql. ". mysqli_error($conn);
					}
					    // Close connection
					mysqli_close($conn);
				?>
			</div>
		</div>
	</center>
	<div>
		<ul><h4>Which survey do you want to take?</h4>
			<li><a href="../html/topic1.html"">Preferred job--></a></li>
			<li><a href="" onclick="return validateForm();">Preferred courses for higher studies--></a></li>
			<li><a href="" onclick="return validateForm();">Top university choices for B.Tech--></a></li>
		</ul>
	</div>
	<script src="../../src/js/jquery-3.6.0.min.js"></script>
	<script src="../../src/js/bootstrap.min.js"></script>
	<script src="../js/index.js"></script>
</body>
</html>