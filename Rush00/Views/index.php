<?php
session_start();
include "whoami.php";
include "cleancache.php";
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Shop42</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<style>
	</style>
</head>

<body>
	<div class="whole">
		<div class="BANNER">
			<H1>Shop of 42 <?php
			if ( $_GET['view'] == "cart_total")
			echo ": Total";
			elseif ( $_GET['view'] == "")
			;
			else
			echo ": ".$_GET['view'];
			?></H1><BR />
			<div class="upright">
				<IMG src="../resources/42.png" id="loupe" alt="Search" title="Search">
			</div>
		</div>
		<div class="SIDEBAR">
			<form action="index.php" method="GET">
				<input type="hidden" name="view" value="shop">
				<input type="image" src="../resources/shopping.png" alt="Shopping" title="Shopping" width="68">
			</form>
			<br />
			<form action="index.php" method="GET">
				<input type="hidden" name="view" value="cart_total">
				<input type="image" src="../resources/cart.jpg" alt="cart" title="cart" width="68">
			</form>
			<br />
			<form action="index.php" method="GET">
				<input type="hidden" name="view" value="user">
				<input type="image" src="../resources/user.png" alt="user" title="user" width="68">
			</form>
			<br />
			<form action="index.php" method="GET">
				<input type="hidden" name="view" value="admin">
				<input type="image" src="../resources/outil.png" alt="modif" title="modif" width="68">
			</form>

			<!-- <IMG src="../resources/outil.png" alt="Use" title="Use"> -->
			<!-- <a href="./user.php"><IMG src="../resources/user.png" alt="User" title="User"></a> -->
			<!-- <a href="./shop.php"><IMG src="../resources/shopping.png" alt="Shopping" title="Shopping"></a> -->
			<!-- <IMG class="selected" src="../resources/oeil.png" alt="Look" title="Look"> -->
			<!-- <a href="./cart.php"><IMG src="../resources/cart.png" alt="Cart" title="Cart"></a> -->
			<!-- <IMG src="../resources/chat-icon.png" alt="Speak" title="Speak"> -->
			<div class="WINDOW">
				<!-- <form action="logout.php" method="POST" class="upright">
					<input type="hidden" name="usr" value="logout">
					<input type="image" src="../resources/close.gif" id="close" alt="Logout" title="Disconnect" width="18">
				</form> -->
				<form action="index.php" method="POST" class="upright">
					<input type="hidden" name="usr" value="reload">
					<input type="image" src="../resources/reload.png" alt="reload" title="reload" width="18">
				</form>
				<!-- <iframe src="<?php echo $_GET['usr'] . '.php' ?>" width=100% height=100% frameborder=" 1/0" name="shop_frame" scrolling="yes/no/auto"> -->
				<iframe src="w_user.php" width=100% height=70% frameborder=" 1/0" name="shop_frame" scrolling="yes/no/auto">
				</iframe>
				<!-- <IMG class= "upright" src="../resources/user.png" alt="user" title="user"> -->


			</div>
		</div>
		<div class="MAIN">
			<iframe src="<?php if ($_GET['view'] == "") echo "welcome.php";
							else echo $_GET['view'] . '.php' ?>" width=100% height=100% frameborder=" 1/0" name="shop_frame" scrolling="yes/no/auto">
			</iframe>
		</div>
		<div class="SIDEBAR2">
		</div>

	</div>
</body>

</html>