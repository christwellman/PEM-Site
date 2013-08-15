<div id="wrapper"><!-- BEGIN MAIN WRAPPER -->
    
    <section id="top_area">
        
        <article class="box-right">
        
                <form action="script/data.php" method="post">
                
                    <p> 
                        <label>Project ID:</label>
                        <input name="ProjectID" required="required" placeholder="6 Digits 0-9" pattern="[0-9]{6}" type="text">
                    </p>
                    
                    <p> 
                        <label>Request Date:</label>
                        <input name="Request_Date" required="required" type="date">
                    </p>
                    
                    <p>
                        <label>Resource Manager</label>
                        	<select name ="Resource_Manager">
                        		<option value="Jerry">Jerry</option>
                        		<option value="Erik">Erik</option>
                        		<option value="Scott">Scott</option>
                        		<option value="Shahir">Shahir</option>
                        	</select>          
                    </p>
                    
                    <p> 
                        <label>Rejection Date:</label>
                        <input name="Rejection_Date" required="required" type="date"> 
                    </p>
                    
                    <p> 
                        <label>Rejection Reason:</label>
                        <input name="Rejection_Reason" required="required" placeholder="Duration and hours were incorrect." type="text">
                    </p>
                    
                    <p> 
                        <label>Resubmission Date:</label>
                        <input name="Resubmission_Date" type="date">
                    </p>

                    <p> 
                        <label>Re-submission Correct</label>
                        <input type="radio" name="Resubmission_Correct" value="Yes" /><label>Yes</label>
                        <input type="radio" name="Resubmission_Correct" value="No" /> <label>No</label>
                    </p>
                                        
                    <p> 
                        <input value="Submit" type="submit"> 
                    </p>      
                              
    			</form>

        </article>
    
    </section>

</div><!-- END MAIN WRAPPER -->