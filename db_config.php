<!-- __________________________________________CONNECTION TO SQL __________________________________________________________________________ -->


<?php
// we get submitted data and check if user really submitted it
if(isset($_GET['first_name'])){
$user = $_GET['first_name'];

// make an mysql connection, make sure to edit this
mysql_connect("localhost", "root", "GT5364HY"); // host = host name, user = database user, password = database password
mysql_select_db("rdk_db"); // database = mysql database name

// escape input from dangerous charachters
$user = htmlentities(mysql_real_escape_string($user));

mysql_query("INSERT INTO users(vards,uzvards,epasts) VALUES('blabla','x','y')");
echo ("Submitted."); 

}
else{
// else print "you have not submitted anything
die("You have not submitted anything.");
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