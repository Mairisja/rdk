<!-- __________________________________________CONNECTION TO SQL __________________________________________________________________________ -->

<?php

$link = mysqli_connect("localhost", "root", "GT5364HY", "rdk_db");
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}



// Escape user inputs for security
$first_name = mysqli_real_escape_string($link, $_REQUEST['first_name']);
$last_name = mysqli_real_escape_string($link, $_REQUEST['last_name']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$password = mysqli_real_escape_string($link, password_hash($_REQUEST['password'],PASSWORD_DEFAULT));
echo "$email";
$sql_check = "SELECT * FROM users WHERE epasts=$email";
echo "$sql_check";
$result_email = mysqli_query($link,$sql_check);
echo "$result_email";
	if (mysql_num_rows($result_email)> 0) {
		echo "Lietotājs ar šādu epastu jau ir reģistrēts!";
	}
	else{
		$sql = "INSERT INTO users (vards, uzvards, epasts, parole) VALUES ('$first_name', '$last_name', '$email','$password')";
		if(mysqli_query($link, $sql)){
		    echo "Records added successfully.";
		    echo "kk3";
		} else{
		    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
		    echo "kk4";
		}
}
 
// close connection
mysqli_close($link);
?>

<?php 
header('Location: success.php'); 
?>
