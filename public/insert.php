<!DOCTYPE html>
<html>
    <head>
    	<title>Insert Page page</title>
    </head>
    <body>
	    <center>
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
	           	$sql = "INSERT INTO `answers` (`name`, `age`, `address`, `Email ID`, `Gender`, `Educational Qualification`)
				   		VALUES ('$name', '$age', '$address', '$email', '$gender', '$quali')";
	           	if(mysqli_query($conn, $sql)) {
	           		echo "<h3>data stored in a database successfully."
	           			. " Please browse your localhost php my admin"
	          			. " to view the updated data</h3>";
	          		echo nl2br("\n$name\n $age\n "
	          			. "$address\n$email\n$gender\n$quali");
	          	}
             else {
	          		echo "ERROR: Hush! Sorry $sql. "
		        		. mysqli_error($conn);
		        }
		        // Close connection
		       mysqli_close($conn);
            ?>
	    </center>
    </body>
</html>