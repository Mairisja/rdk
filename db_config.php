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


if ($email = mysqli_query($link,"SELECT * FROM users WHERE epasts='$email")){
	echo "Fuck, jau aizņemts!";
	eader('Location: services.php'); 
}
else{
$sql = "INSERT INTO users (vards, uzvards, epasts, parole) VALUES ('$first_name', '$last_name', '$email','$password')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
    header('Location: success.php'); 
    echo "kk3";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    echo "kk4";
}
}
 
// close connection
mysqli_close($link);
?>
