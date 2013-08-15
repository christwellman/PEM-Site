<?php //data.php

require_once 'login.php'; 

// Get values from form
$ProjectID				= $_POST['ProjectID'];
$RequestDate			= $_POST['Request_Date'];	
$ResourceManager		= $_POST['Resource_Manager'];	
$RejectionDate			= $_POST['Rejection_Date'];
$RejectionReason		= $_POST['Rejection_Reason']; 
$ResubmissionDate		= $_POST['Resubmission_Date']; 
$ResubmissionCorrect 	= $_POST['Resubmission_Correct'];
//  turn autocommit off
mysqli_autocommit($link, FALSE);

// Insert data into mysql
$sql = "INSERT INTO OPRMRejections (ProjectID, RequestDate, ResourceManager, RejectionDate, RejectionReason, ResubmissionDate, ResubmissionCorrect)
VALUES ('$ProjectID', '$RequestDate', '$ResourceManager', '$RejectionDate', '$RejectionReason', '$ResubmissionDate', '$ResubmissionCorrect')";
$result = mysqli_query($link, $sql); 

// if successfully insert data into database, displays message "Successful".
if($result){
	header('Location: ../thankyou.php');
}
else {
	echo "ERROR";
}

// commit transaction
mysqli_commit($link);

// close mysql
mysqli_close($link);
?> 