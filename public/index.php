<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name = "viewport" content = "width=device-width,initial-scale=1">
	<title>Survey Form</title>
	<link rel="stylesheet" href="../src/css/bootstrap.min.css">
	<link rel="stylesheet" href="../src/css/style.css">
</head>
<body>
	<nav>
		<a href = "index.html">Home</a>
		<a href="about.html">About Us</a>
		<h1 align="center">Survey Form</h1>
	</nav>
	<div id="containerdetails">
		<div id="details">
			<form action=insert.php  method= POST/GET><h4>Please enter your details</h4>
            	<label for="name">Name </label>
            	<input type="text" for="name" placeholder="Enter your name" id="name" name="name"></input><br><br>
				<label for="age">Age </label>
				<input type="number" for="age" placeholder="Enter your age" id="age" name="age"></input><br><br>
				<label for="address">Address </label>
				<input type="text" for="address" placeholder="Enter your address" id="address" name="address"></input><br><br>
				<label for="email">Email ID </label>
				<input type="email" for="email" placeholder="Enter your Email ID" id="email" name="email"></input><br><br>
				<label>Gender:</label>
  		    	<select name="gender">
  					<option>Select Gender</option>
  					<option>Male</option>
  					<option>Female</option>
  					<option>Other</option>
				</select><br/><br>
				<label for="quali">Educational Qualification</label>
			    <select name="quali">
    				<option>Select Qualification</option>
    				<option>Secondary(Class 10th)</option>
    				<option>Higher Secondary(Class 12th)</option>
    				<option>Diploma</option>
    				<option>Bachelor's Degree</option>
    				<option>Master's Degree</option>
    			</select><br/><br>
    			<input type="submit"><br/><br/>
    		</form>
		</div>
	</div>
	<div>
		<ul> <h4>Which survey do you want to take?</h4>
			<li><a href="topic1.html">Preferred job--></a></li>
			<li><a href="">Preferred courses for higher studies--></a></li>
			<li><a href="">Top university choices for B.Tech--></a></li>
		</ul>
	</div>
	<script src="../src/js/jquery-3.6.0.min.js"></script>
	<script src="../src/js/bootstrap.min.js"></script>
	<script src="../src/js/index.js"></script>
</body>
</html>