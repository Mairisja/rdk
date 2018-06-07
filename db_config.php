<!-- __________________________________________CONNECTION TO SQL __________________________________________________________________________ -->

<?php

if(isset($_POST['first_name','last_name','email','password','password_confirmation'])){
	$vards = $_POST['first_name'],
	$uzvards = $_POST['last_name'],
	$epasts = $_POST['email'],
	$parole = $_POST['password'];


  $servername = "localhost";
  $username = "root";
  $password = "GT5364HY";
  $dbname = "rdk_db";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
}
else{
	/* check connection */
	if (mysqli_connect_errno()) {
	    printf("Connect failed: %s\n", mysqli_connect_error());
	    exit();
	}
	else{
		die("Nekas nav iesūtīts");
	}
?>

