<?php //OPRMRejectionlog

// connect to the database
require_once 'script/login.php';
 
//show results
$query = "SELECT ProjectID, DATE_FORMAT(RequestDate, '%m/%d/%y') AS ReqDate, ProjectID, ResourceManager, RejectionDate, RejectionReason, ResubmissionDate, ResubmissionCorrect FROM OPRMRejections ORDER BY RequestDate DESC";
$result = mysqli_query($link, $query);

if ($result) { //If it ran ok display the records
	
	echo 
	'<table align="center" cellpadding="5" cellspacing="5">
		<tr>
			<td align="left"><b>Request Date</b></td>
			<td align="left"><b>PID</b></td>
			<td align="left"><b>Resource Manager</b></td>
			<td align="left"><b>Rejection Date</b></td>
			<td align="left"><b>Rejection Reason</b></td>
			<td align="left"><b>Resubmission Date</b></td>
			<td align="left"><b>ResubmissionCorrect</b></td>
		</tr>';
	
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
	echo 
		'<tr>
			<td align="left">' . $row['ReqDate'] . '</td>
			<td align="left">' . $row['ProjectID'] . '</td>
			<td align="left">' . $row['ResourceManager'] . '</td>
			<td align="left">' . $row['RejectionDate'] . '</td>
			<td align="left">' . $row['RejectionReason'] . '</td>
			<td align="left">' . $row['ResubmissionDate'] . '</td>
			<td align="left">' . $row['ResubmissionCorrect'] . '</td>
		</tr>';
	}
		<form action="script/data.php" method="post">
			echo 
		'<tr>
			<td align="left"><input name="Request_Date" required="required" type="date"></td>
			<td align="left"><input name="ProjectID" required="required" placeholder="6 Digits 0-9" pattern="[0-9]{6}" type="text"></td>
			<td align="left"><select name ="Resource_Manager">
                        		<option value="Jerry">Jerry</option>
                        		<option value="Erik">Erik</option>
                        		<option value="Scott">Scott</option>
                        		<option value="Shahir">Shahir</option>
                        	</select></td>
			<td align="left"><input name="Rejection_Date" required="required" type="date"></td>
			<td align="left"><input name="Rejection_Reason" required="required" placeholder="Duration and hours were incorrect." type="text"></td>
			<td align="left"><input name="Resubmission_Date" required="required" type="date"></td>
			<td align="left"><input type="radio" name="Resubmission_Correct" value="Yes" /><label>Yes</label>
                        <input type="radio" name="Resubmission_Correct" value="No" /> <label>No</label></td>
		</tr>';


	echo '</table>';
	<input value="Submit" type="submit">     			</form>

mysqli_free_result($result);

} else { //if it did not run ok

	//public message
	echo '<p class="error">The rejection summary report is unavailable at this time. We apologize for any inconvenience.</p>'; 
	
	//debugging message
	echo '<p>' . mysqli_error($link) . '<br/><br/> Query: ' . $query . '</p>'; 
}

// Close database connection
mysqli_close($link); 

?> 