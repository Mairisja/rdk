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


 $sql_email_check = "SELCT FROM users WHERE epasts='$email'";
 $result_mail = mysql_query($link, $sql_email_check);
 if (mysql_num_rows($result_mail) > 0) {
 	$email_error = "Epasts, diemžēl, ir aizņemts!";
 }
 else {
	// attempt insert query execution
	$sql = "INSERT INTO users (vards, uzvards, epasts, parole) VALUES ('$first_name', '$last_name', '$email','$password')";
	if(mysqli_query($link, $sql)){
	    echo "Records added successfully.";
	} else{
	    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	}
}
 
// close connection
mysqli_close($link);
?>

<?php 
header('Location: success.php'); 
?>
