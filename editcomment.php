<?php
	date_default_timezone_set('Europe/Dublin');
	include 'bhk.ink.php';
	include 'functions.ink.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset='UTF-8'>
<title>Document Title</title>
</head>

<body>

<?php
$cid = $_POST['cid'];
$uid = $_POST['uid'];
$date = $_POST['date'];
$message = $_POST['message'];

echo "<form method='POST' action='".editComments($conn)."'>
	<input type='hidden' name='cid' value='".$_POST['cid']."'>
	<input type='hidden' name='uid' value='".$_POST['uid']."'>
	<input type='hidden' name='date' value='".$_POST['date']."'>
	<textarea name='message'>".$message."</textarea><br>
	<button type='submit' name='commentSubmit'>Edit</button>
</form>";
?>
</body>
</html>