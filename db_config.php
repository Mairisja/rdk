<!-- __________________________________________CONNECTION TO SQL __________________________________________________________________________ -->


<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);

// we get submitted data and check if user really submitted it
if(isset($_GET['first_name'],$_GET['last_name'],$_GET['email'],$_GET['password'])){
$vards = $_GET['first_name'];
$uzvards = $_GET['last_name'];
$epasts = $_GET['email'];
$parole = $_GET['password'];
// $parole_x2 = $_GET['password_confirmation']
echo "xxx";
// make an mysql connection, make sure to edit this
// $c = mysql_connect("localhost", "root", "GT5364HY"); // host = host name, user = database user, password = database password
$con=mysqli_connect("localhost","root","GT5364HY","rdk_db");
// mysql_select_db("rdk_db"); // database = mysql database name
echo "xxx2";
// escape input from dangerous charachters
// $user = htmlentities(mysql_real_escape_string($user));
echo "xxx3";
mysqli_query($con,"INSERT INTO users(vards,uzvards,epasts) VALUES('$vards','$uzvards','$epasts','$parole')");
echo "xxx3";
mysqli_commit($con);



echo ("Submitted."); 

}
else{
// else print "you have not submitted anything
die("You have not submitted anything.");
}
echo "xxx4";
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