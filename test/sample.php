<?php
	include_once 'designfile.php';
	include_once 'style.php';
?>
<h2>254 Bloggers</h2>
<html>
	<!-- adding a header file -->
	<div class="header"><?php includerFile('header.php') ?></div>
	<!-- adding the content files -->
	<div class="content"><?php includerFile('contentfile.php')?></div>
	

<form method="POST">
	<input type="text" name="classname" placeholder = "classname">
	<input type="text" name="color" placeholder = "color">
	<input type="text" name="font" placeholder = "font">
	<input type="submit" value="style">
	
</form>
<?php
	setProps($_POST['classname'],$_POST['color'],$_POST['font']);
?>
</html>

