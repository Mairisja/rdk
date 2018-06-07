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

  $user = htmlentities(mysql_real_escape_string($vards));
  mysql_query(INSERT INTO users(vards) VALUES('$vards') echo "Submitted.");
  $user = htmlentities(mysql_real_escape_string($uzvards));
  mysql_query(INSERT INTO users(uzvards) VALUES('$uzvards') echo "Submitted.");
  $user = htmlentities(mysql_real_escape_string($vards));
  mysql_query(INSERT INTO users(epasts) VALUES('$epasts') echo "Submitted.");
}
?>

