<?php
session_start();
// include "whoami.php";
include "cleancache.php";
?>

<!DOCTYPE html>

<HTML>

<HEAD>
	<META charset="UTF-8">
	<TITLE>Minishop</TITLE>
	<link rel="stylesheet" type="text/css" href="css/shop.css">
</HEAD>

<BODY>
	<H1>Minishop</H1><BR />

	<div style="width:100%; display:inline-block;">
		<ul class="menu">
			<li><a href="shop.php?catg=Gift_Cards">Gift card</a></li>
			<li><a href="shop.php?catg=Gift_Cards">Uniqlo</a></li>
			<li><a href="shop.php?catg=Gift_Cards">Galeries Lafayette</a></li>
		</ul>
		<ul class="menu">
			<li><a href="shop.php?catg=Fruits">Fruits</a></li>
			<li><a href="shop.php?catg=Fruits">apple</a></li>
			<li><a href="shop.php?catg=Fruits">orange</a></li>
			<li><a href="shop.php?catg=Fruits">banana</a></li>
		</ul>
		<ul class="menu">
			<li><a href="shop.php?catg=Google">Google</a></li>
			<li><a href="shop.php?catg=Google">Google Pixel</a></li>
		</ul>
		<ul class="menu">
			<li><a href="shop.php?catg=Apple">Apple</a></li>
			<li><a href="shop.php?catg=Apple">iPhone X</a></li>
			<li><a href="shop.php?catg=Apple">iPhone XR</a></li>
		</ul>
		<ul class="menu">
			<li><a href="shop.php?catg=Vegetable">Vegetable</a></li>
			<li><a href="shop.php?catg=Vegetable">Potato</a></li>
		</ul>
	</div>
	<div style="width:60%; display:inline-block;">
		
	</div>

	<hr>
	<p style="font-style:italic; text-align:right; font-family:monospace;">©ccarole & weilin 2019</p>
	<?php
	include("product.php");
	if ($_GET["catg"])
		disp_products($_GET["catg"]);
	else {
		disp_products("Gift_Cards");
		disp_products("Fruits");
		disp_products("Google");
		disp_products("Apple");
		disp_products("Vegetable");
	}
	?>
</BODY>

</HTML>