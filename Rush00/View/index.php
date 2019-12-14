<!DOCTYPE html>
<HTML>

<HEAD>
	<META charset="UTF-8">
	<TITLE>Basics</TITLE>
	<link rel="stylesheet" type="text/css" href="menu.css">
	<STYLE>
		body {
			background-color: pink;
		}

		H1 {
			color: white;
			text-align: center
		}

		.center {
			display: block;
			margin-left: auto;
			margin-right: auto;
			width: 80%;
		}
	</STYLE>
</HEAD>

<BODY>
	<H1>Minishop</H1><BR />

	<div style="width:50%; display:inline-block;">
		<div>
			<p style="text-align:center;"><a href="https://www.uniqlo.com/">uniqlo.com</a></p>
			<IMG src="https://www.uniqlo.com/on/demandware.static/Sites-FR-Site/-/default/dw105f1348/images/logo.svg" class="center">

			<form action="index.php" method="GET">
				$PRODUCT_NAME: <p>Uniqlo gift card</p>
				<br />
				Price: $VAR_PRICE
				<br />
				Amount: <input type="number" name="amount" value="1" />
				<br />
				<input type="submit" name="add_to_cart" value="add_to_cart" />
			</form>

			<p style="text-align:center;"><a href="https://www.galerieslafayette.com/">galerieslafayette.com</a></p>
			<IMG src="https://www.galerieslafayette.com/img/common/logo-galeries-lafayette.svg" class="center">
			<p style="text-align:center;">Galeries Lafayette gift card</p>
		</div>
		<div>
			<ul class="menu">
				<li><a href="#">Fruits</a></li>
				<li><a href="#">apple</a></li>
				<li><a href="#">orange</a></li>
				<li><a href="#">banana</a></li>
			</ul>
			<ul class="menu">
				<li><a href="#">Mobiles</a></li>
				<li><a href="#">iPhone X</a></li>
				<li><a href="#">Google Pixel</a></li>
			</ul>
			<ul class="menu">
				<li><a href="#">Gift cards</a></li>
				<li><a href="#">Uniqlo</a></li>
				<li><a href="#">Galeries Lafayette</a></li>
			</ul>
		</div>
	</div>
	<div style="width:20%; display:inline-block;">
		<div class="basket">
			<IMG src="../view/cart.jpg" class="center">
			<p style="text-align:center;">BASKET</a></p>
		</div>
		<?php
		session_start();

		if (
			isset($_POST["submit"]) &&
			isset($_POST["login"]) &&
			isset($_POST["passwd"]) && $_POST["submit"] == "OK"
		) {

			$_SESSION["login"] = $_POST["login"];
			$_SESSION["passwd"] = $_POST["passwd"];
		}
		?>
		<div class="log_in">
			<form action="index.php" method="POST">
				Username: <input type="text" name="login" value="<?php if (isset($_SESSION["login"])) {
																		echo $_SESSION["login"];
																	} ?>" />
				<br />
				Password: <input type="password" name="passwd" value="<?php if (isset($_SESSION["passwd"])) {
																			echo $_SESSION["passwd"];
																		} ?>" />
				<br />
				<input type="submit" name="submit" value="OK" />
			</form>
		</div>
		<div class="create_account">
			<form action="create.php" method="POST">
				Username: <input type="text" name="login" value="" />
				<br />
				Password: <input type="password" name="passwd" value="" />
				<br />
				<input type="submit" name="submit" value="OK" />
			</form>
		</div>
	</div>
	<hr>
	<p style="font-style:italic; text-align:right; font-family:monospace;">©weilin 2019</p>

</BODY>

</HTML>