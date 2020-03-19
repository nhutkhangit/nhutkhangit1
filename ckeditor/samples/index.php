<!DOCTYPE html>
<!--
Copyright (c) 2003-2020, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
-->
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>CKEditor Sample</title>
	<script src="../ckeditor.js"></script>
	<script src="js/sample.js"></script>
	<link rel="stylesheet" href="css/samples.css">
	<link rel="stylesheet" href="toolbarconfigurator/lib/codemirror/neo.css">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="description" content="Try the latest sample of CKEditor 4 and learn more about customizing your WYSIWYG editor with endless possibilities.">
</head>
<form method="post">
	<div class="adjoined-bottom">
		<div class="grid-container">
			<div class="grid-width-100">
				<div id="editor">
				</div>
			</div>
		</div>
	</div>
	<button type="submit" value="submit" name="submit">Submit</button>
</form>
<?php 
	function dataready($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	} 
?>
<?php if (isset($_POST['submit'])) {
	$editor_data = dataready($_POST['submit']);
	$editor_data_insert = html_entity_decode($editor_data);
	var_dump($editor_data_insert);
} ?>
<script>
	initSample();
</script>

</body>
</html>
