<?php
	$sheetName = addslashes($_GET['name']);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta content="utf-8" http-equiv="encoding"/>
		<title>Spreadsheets</title>
		<link rel="stylesheet" type="text/css" href="lib/jquery-ui/theme/jquery-ui.min.css" />
		<link rel="stylesheet" type="text/css" href="lib/jquery.sheet.css" />
		<script type="text/javascript" src="lib/jquery-1.8.3.min.js"></script>
		<script type="text/javascript" src="lib/jquery.json-2.4.min.js"></script>
		<script type="text/javascript" src="lib/jquery-ui/ui/jquery-ui.min.js"></script>
		<script type="text/javascript" src="lib/jquery.sheet.js"></script>
		<script type="text/javascript" src="lib/plugins/globalize.js"></script>
		<script type="text/javascript" src="lib/plugins/jquery.mousewheel.min.js"></script>
		<script type="text/javascript" src="lib/plugins/jquery.nearest.min.js"></script>
		<script type="text/javascript" src="lib/plugins/jquery.sheet.dts.js"></script>
		<script type="text/javascript" src="lib/parser/formula/formula.js"></script>
		<script type="text/javascript" src="lib/parser/tsv/tsv.js"></script>
		<script type="text/javascript">
			var sheetName = '<?php print $sheetName ?>';
			var sheetOrig;
			function loadSheet(name) {
				$.getJSON('sheet.php', {name: name}).done(function(data) {
					sheetOrig = $("#sheet").html($.sheet.dts.toTables.json(data)).sheet();
				});
			};
			function saveSheet(name, sheet) {
				$.post("save.php", {name: name, sheet: $.toJSON(sheet)}, function() {
					alert("Saved");
				});
			}
			$(function() {
				loadSheet(sheetName);
				/* $("#open").click(function() {
					loadSheet($("#name").val());
					return false;
				}); */
				$("#save").click(function() {
					sheetName = $("#name").val();
					saveSheet(sheetName, $.sheet.dts.fromTables.json(sheetOrig.getSheet()));
					window.history.pushState(sheetName, "title", "?name="+sheetName);
					return false;
				});
			});
		</script>
	</head>
	<body>
		<div id="wrapper">
			<form method="GET" action="/">Name (only lowercase letters allowed): <input id="name" name="name" type="text" value="<?php print $sheetName?>" /><button id="open">Load</button><button id="save">Save</button></form>
			<div id="sheet" class="jQuerySheet" style="height: 400px;" title="Empty Sheet"></div>
			<p>Usage: see the <a href="http://visop-dev.com/jQuery.sheet+-+End+User+Documentation">documentation</a>.</p>
			<p>Built with <a href="http://visop-dev.com/Services">Visual Interop Development</a>'s <a href="http://visop-dev.com/Project+jQuery.sheet">jQuery.sheet</a>. Source code available on <a href="https://github.com/fuligginoso/spreadsheets">github</a>.</p>
		</div>
	</body>
</html>
