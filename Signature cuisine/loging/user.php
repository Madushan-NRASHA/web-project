<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<div class="loggedin">Welcome <?php echo $_SESSION['name']; ?></div>
</body>
</html>