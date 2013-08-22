<!DOCTYPE html>
<html><head>
<title>HTML KickStart Elements</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta name="description" content="" />
<link rel="stylesheet" type="text/css" href="css/kickstart.css" media="all" />                  <!-- KICKSTART -->
<link rel="stylesheet" type="text/css" href="style.css" media="all" />                          <!-- CUSTOM STYLES -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="js/kickstart.js"></script>                                  <!-- KICKSTART -->
</head><body>

<div class="grid">
<!-- ===================================== END HEADER ===================================== -->


<div id="wrapper"><!-- BEGIN MAIN WRAPPER -->
    
    <section id="top_area">
        
        <article class="box-right">
                
                    <table cellpadding="2px">
	                    <form action="script/data.php" method="post">
							<!-- Table Headers -->
	                    	<tr>	
	                    			<td><label>Project ID:</label></td>
	                    			<td><label>Request Date:</label></td>
	                    			<td><label>Resource Manager</label></td>
									<td><label>Rejection Date:</label></td>
									<td><label>Rejection Reason:</label></td>                 	
									<td><label>Resubmission Date:</label></td>
									<td><label>Re-submission Correct</label></td>               	
	                    	</tr>
	                    	<!-- Table Data -->
	                    	<tr>	
	                    			<td><input name="ProjectID" required="required" placeholder="6 Digits 0-9" pattern="[0-9]{6}" type="text"></td>
	                        		<td><input name="Request_Date" required="required" type="date"></td>
		                        	<td><select name ="Resource_Manager">
		                        		<option value="Jerry">Jerry</option>
		                        		<option value="Erik">Erik</option>
		                        		<option value="Scott">Scott</option>
		                        		<option value="Shahir">Shahir</option>
										</select></td>
									<td><input name="Rejection_Date" required="required" type="date"></td>
									<td><select name ="Rejection_Reason">
		                        		<option value="Incorrect dates and allocation percentage">Incorrect dates and allocation percentage</option>
		                        		<option value="Incorrect allocation percentage">Incorrect allocation percentage</option>
		                        		<option value="Incorrect dates">Incorrect dates</option>
										</select></td>
									<td><input name="Resubmission_Date" type="date"></td>
									<td><input type="radio" name="Resubmission_Correct" value="Yes" /><label>Yes</label><br>
										<input type="radio" name="Resubmission_Correct" value="No" /> <label>No</label></td>
									<td><input value="Submit" type="submit"></td>
	                    	</tr>  
	                    </form>
									<?php //view users.php
									
									// connect to the database
									require_once 'script/login.php';
									 
									//show results
									$query = "SELECT ProjectID, DATE_FORMAT(RequestDate, '%m/%d/%y') AS ReqDate, ProjectID, ResourceManager, RejectionDate, RejectionReason, ResubmissionDate, ResubmissionCorrect FROM OPRMRejections ORDER BY RequestDate DESC";
									$result = mysqli_query($link, $query);
									
									if ($result) { //If it ran ok display the records

										
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
									
										echo '</table>';
									
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
                    </table> 

        </article>
    
    </section>

</div><!-- END MAIN WRAPPER -->

	<div class="col_12" style="margin-top:100px;">
	<h1 class="center">
	<p><i class="icon-fire"></i></p>
	This example is blank</h1>
	<h4 style="color:#999;margin-bottom:40px;" class="center">Add some HTML KickStart Elements to see the magic happen</h4>
	</div>

<!-- ===================================== START FOOTER ===================================== -->
</div><!-- END GRID-->

</body></html>