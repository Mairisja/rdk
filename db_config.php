<!-- __________________________________________CONNECTION TO SQL __________________________________________________________________________ -->

<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "GT5364HY", "rdk_db");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$first_name = mysqli_real_escape_string($link, $_REQUEST['first_name']);
$last_name = mysqli_real_escape_string($link, $_REQUEST['last_name']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
 
// attempt insert query execution
$sql = "INSERT INTO users (vards, uzvards, epasts) VALUES ('$first_name', '$last_name', '$email')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>

<?php 
header('Location: index.php'); 
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