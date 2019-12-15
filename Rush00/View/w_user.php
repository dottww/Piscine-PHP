<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>window_user</title>
</head>

<body>
	<?php
	session_start();
	if (isset($_SESSION["loggued_on_user"]) && ($_SESSION["loggued_on_user"] != ""))
		echo "<p>You have logged in as : " . $_SESSION["loggued_on_user"] . "</p>";
	else
		echo "<p>You are browsing as a not-logged-in visitor</p>";
	?>
</body>

</html>