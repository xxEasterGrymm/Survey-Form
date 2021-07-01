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
                        $Q1 = $_REQUEST['Q1'];
                        $arr = array($Q1);
                        for($i = 1; $i < 10; $i++) {
                            $x = $i + 1;
                            $key = $_REQUEST["Q$x"];
                            array_push($arr, $key);
                        }
				        // Performing insert query execution
                        for($i = 0; $i < 10; $i++) {
                            $x = $i + 1;
				       	    $sql = "INSERT INTO `survey` (`Survey Form`, `Question Number`, `Answer`) VALUES ('1', NULL , '$arr[$i]')";
                            if(mysqli_query($conn, $sql)) {
                                echo "Question $x - $arr[$i]<br/>";
                            }
                            else {
                                echo "ERROR: Sorry! $sql. ". mysqli_error($conn);
                            }
                        }
                        echo '<h3><font color="lightgreen">Your details have been recorded.</font> ✅</h3>';
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