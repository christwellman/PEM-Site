<!DOCTYPE html>
<html><head>
<title>HTML KickStart Elements</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta name="description" content="HTML KickStart is a ultra–lean set of HTML5, CSS, and jQuery (javascript) files, layouts, and elements designed to give you a headstart and save you a lot of hours on your next web project." />
<meta name="copyright" content="Joshua Gatcke 99lime.com All Rights Reserved" />
<link rel="stylesheet" type="text/css" href="css/kickstart.css" media="all" />                  <!-- KICKSTART -->
<link rel="stylesheet" type="text/css" href="style.css" media="all" />                          <!-- CUSTOM STYLES -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="js/kickstart.js"></script>                                  <!-- KICKSTART -->
</head><body>
<!-- ===================================== END HEADER ===================================== -->


<!-- ===================================== TABLES ===================================== -->
<h3 id="tables">OPRM Rejection Log</h3>
<!--
<ul class="tabs">
<li><a href="#table-example">Example</a></li>
<li><a href="#table">Table</a></li>
<li><a href="#table-wside">Table w/side TH</a></li>
<li><a href="#table-styles">Table Styles</a></li>
</ul>
-->
	<div id="table-example" class="tab-content">
	<div class="col_6">
	<h4>Table.sortable</h4>
	<table class="sortable" cellspacing="0" cellpadding="0">
	<thead><tr>
		<th>Project ID:</th>
		<th>Request Date:</th>
		<th>Resource Manager</th>
		<th>Rejection Date:</th>
		<th>Rejection Reason:</th>
		<th>Resubmission Date:</th>
		<th>Re-submission Correct</th>
		<th> </th>
	</tr></thead>
	<tbody><tr>
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
	</tr><tr>
		<td>122334</td>
		<td>12/25/1981</td>
		<td>Chris Twellman</td>
		<td>12/31/1982</td>
		<td>Blah blah blah blah</td>
		<td>Date</td>
		<td>Yes</td>
		<td></td>
	</tr></tbody>
	</table>
	</div>
	</div>
	

<!-- ===================================== TABS ===================================== -->


</div><!--END GRID WRAP-->

<!-- ===================================== START FOOTER ===================================== -->
<div class="clear"></div>
<div id="footer">
&copy; Copyright 2014 All Rights Reserved. This website was built with 
<a href="http://www.99lime.com">HTML KickStart</a> • 
<a href="http://99lime.com/rss/">RSS</a> • 
<a href="http://www.99lime.com/_bak2/">Joshua Gatcke</a>
</div>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-1641401-6']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</body></html>