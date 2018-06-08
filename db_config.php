<?php
//==============================================//    CONNECTION TO DATABSE INITIALISATION //================================================
$link = mysqli_connect("localhost", "root", "GT5364HY", "rdk_db");
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
//==============================================//    END OF CONNECTION TO DATABSE INITIALISATION //================================================



//==============================================//    ESCAPE USER INPUTS FOR SECURITY REASONS //================================================

$first_name = mysqli_real_escape_string($link, $_REQUEST['first_name']);
$last_name = mysqli_real_escape_string($link, $_REQUEST['last_name']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$password = mysqli_real_escape_string($link, password_hash($_REQUEST['password'],PASSWORD_DEFAULT));

//==============================================//    END OF ESCAPE USER INPUTS CHECK //================================================



//==============================================//    CHECK DB FOR EXISTING MAIL //================================================
$mail_check = mysqli_query($link,"SELECT * FROM users WHERE epasts='$email'");
if ($mail_check === false)
{
//==============================================//    END OF CHECK DB FOR EXISTING MAIL //================================================



//==============================================//    WRITING TO DB //================================================

	$sql = "INSERT INTO users (vards, uzvards, epasts, parole) VALUES ('$first_name', '$last_name', '$email','$password')";
	if(mysqli_query($link, $sql))
	{
	    echo "Records added successfully.";
	    header('Location: success.php'); 
	}
}
//==============================================//   END OF  WRITING TO DB //================================================


else{
	echo "Jau aizņemts!";
	    echo "kk3";
	}
// close connection
mysqli_close($link);
?>
