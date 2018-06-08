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


 
// attempt insert query execution
$sql_check = "SELECT FROM users (vards, uzvards, epasts, parole) WHERE epasts=('$email')";
$sql = "INSERT INTO users (vards, uzvards, epasts, parole) VALUES ('$first_name', '$last_name', '$email','$password')";
if(mysqli_query($link, $sql_check)){
	mysql_query($sql);
    echo "Records added successfully.";
} else{
	header('Location: register.php');
    echo "ERROR: User with this email already exists! " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>

<?php 
header('Location: success.php'); 
?>
