<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name = "viewport" content = "width=device-width,initial-scale=1">
	<title>Forms Assemblage | Details Submission</title>
	<link rel="stylesheet" href="../../src/css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
	<nav class="container-fluid">
		<a href = "../index.html">Home</a>
		<a href="../html/about.html">About Us</a>
		<div class="col-lg-12  col-sm-6 col-8"><h1 align="center">Forms Assemblage</h1></div>
	</nav>
	<center>
		<div id="containerdetails" class="container-fluid">
			<div id="details" class="col-md-4 col-sm-6">
				<?php
				    $conn = mysqli_connect("localhost", "root", "", "test");
				    // Check connection
				        if($conn === false) die("ERROR: Could not connect. ". mysqli_connect_error());
				        // Taking values from the form data(input)
				        $name = $_REQUEST['name'];
				        $age = $_REQUEST['age'];
				        $address = $_REQUEST['address'];
						$email = $_REQUEST['email'];
						$gender = $_REQUEST['gender'];
						$quali = $_REQUEST['quali'];
				        // Performing insert query execution
						if($quali == "Bachelor's Degree") $quali = "Bachelors Degree";
						else if($quali == "Master's Degree") $quali = "Masters Degree";
				       	$sql = "INSERT INTO `answers` (`name`, `age`, `address`, `Email ID`, `Gender`, `Educational Qualification`)
						   		VALUES ('$name', '$age', '$address', '$email', '$gender', '$quali')";
				       	if(mysqli_query($conn, $sql)) {
				       		echo '<h3><font color="lightgreen">Your details have been recorded.</font> ✅</h3>';
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
	<div id="surveycontainer" class="container-fluid">
		<div id="surveylist" class="col-md-4 col-sm-6">
			<ul><h4><font color="white">Which survey do you want to take?</font></h4>
				<li><a href="../html/topic1.html">Web Browser Review--></a></li>
				<li><a href="../html/topic2.html">General Survey on Mobile Phones--></a></li>
				<li><a href="../html/topic3.html">Network Usage Survey--></a></li>
			</ul>
		</div>
	</div><br><br><br><br><br><br><br><br>
	<footer><button class="open-button" onclick="openForm()">Let's Chat<img src="../images/chat.png" width="60px" height="60px"></button></footer>
	<div class="chat-popup" id="myForm">
		<form class="form-container">
		  <h3>Chat with us</h3>
		  <label for="msg"><b>Message</b></label>
		  <textarea placeholder="Type your message here.." name="msg" required></textarea>
		  <button class="btn">Send</button>
		  <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
		</form>
	  </div>
	  <script src="../js/script.js"></script>
</body>
</html>