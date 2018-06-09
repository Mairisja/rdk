<?php
$servername = "localhost";
$username = "root";
$password = "GT5364HY";
$dbname = "rdk_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// GET VALUES

$first_name = mysqli_real_escape_string($conn, $_REQUEST['first_name']);
$last_name = mysqli_real_escape_string($conn, $_REQUEST['last_name']);
$email = mysqli_real_escape_string($conn, $_REQUEST['email']);
$password = mysqli_real_escape_string($conn, password_hash($_REQUEST['password'],PASSWORD_DEFAULT));

$sql = "INSERT INTO users (vards, uzvards, epasts, parole)
VALUES ('Mairis', '$last_name', '$email', '$password')";
echo "KKK1";
$mail_check = "SELECT * FROM users WHERE epasts='$email'";
echo $mail_check;
$mail_resluts = mysqli_query($conn, $mail_check);
echo "KKK3";
if (mysqli_num_rows($mail_resluts)>0) {
	echo "Atrasts e-pastu sarakstā!";
	header('Location: register.php');
}
else {
	if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header('Location: success.php'); 
	} 
	else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
}
$conn->close();
?>