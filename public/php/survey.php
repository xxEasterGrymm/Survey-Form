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
			<div id="t1form" class="col-md-4 col-sm-6">
				<?php
				    $conn = mysqli_connect("localhost", "root", "", "test");
				    // Check connection
				    if($conn === false)die("ERROR: Could not connect. ". mysqli_connect_error());
				    // Taking values from the form data(input)
					$form = $_REQUEST['surveyForm'];
                    $Q1 = $_REQUEST['Q1'];
                    $arr = array($Q1);
                    for($i = 1; $i < 8; $i++) {
                        $x = $i + 1;
                        $key = $_REQUEST["Q$x"];
                        array_push($arr, $key);
                    }
				    // Performing insert query execution
					$sql = "SELECT * FROM `answers`";
					$res = mysqli_query($conn, $sql);
					$num = mysqli_num_rows($res);
				    $sql = "UPDATE `answers`
					   		SET `Survey` = '$form',
							   	`Question 1` = '$arr[0]',
								`Question 2` = '$arr[1]',
								`Question 3` = '$arr[2]',
								`Question 4` = '$arr[3]',
								`Question 5` = '$arr[4]',
								`Question 6` = '$arr[5]',
								`Question 7` = '$arr[6]',
								`Question 8` = '$arr[7]'   
							WHERE `S. no.` = $num";
                    if(mysqli_query($conn, $sql)) {
                        echo '<br><h3><font color="red">Your response has been recorded.</font> ✅</h3>';
                    }
                    else {
                        echo "ERROR: Sorry! $sql. ". mysqli_error($conn);
                    }
					// Close connection
					mysqli_close($conn);
				?>
			</div>
		</div>
	</center><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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