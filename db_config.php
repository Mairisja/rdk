<!-- __________________________________________CONNECTION TO SQL __________________________________________________________________________ -->


<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);

$conn=mysqli_connect("localhost","root","GT5364HY","rdk_db");

if (!$conn) {
	die("Failed to connect : " . mysqli_connect_error());
}

?>







<!-- <?php

// if(isset($_POST['first_name','last_name','email','password','password_confirmation'])){
	// $vards = $_POST['first_name'],
	// $uzvards = $_POST['last_name'],
	// $epasts = $_POST['email'],
	// $parole = $_POST['password'];


 //  $servername = "localhost";
 //  $username = "root";
 //  $password = "GT5364HY";
 //  $dbname = "rdk_db";

  // Create connection
  // $conn = new mysqli($servername, $username, $password, $dbname);

  // $user = htmlentities(mysql_real_escape_string($vards));
  // mysql_query(INSERT INTO users(vards) VALUES('$vards') echo "Submitted.");
  // $user = htmlentities(mysql_real_escape_string($uzvards));
  // mysql_query(INSERT INTO users(uzvards) VALUES('$uzvards') echo "Submitted.");
  // $user = htmlentities(mysql_real_escape_string($vards));
  // mysql_query(INSERT INTO users(epasts) VALUES('$epasts') echo "Submitted.");
// }

//  -->