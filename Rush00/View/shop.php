<!DOCTYPE html>
<HTML>

<HEAD>
	<META charset="UTF-8">
	<TITLE>Minishop</TITLE>
	<link rel="stylesheet" type="text/css" href="shop.css">
</HEAD>

<BODY>
	<H1>Minishop</H1><BR />

	<div style="width:100%; display:inline-block;">
		<ul class="menu">
			<li><a href="#">Fruits</a></li>
			<li><a href="#">apple</a></li>
			<li><a href="#">orange</a></li>
			<li><a href="#">banana</a></li>
		</ul>
		<ul class="menu">
			<li><a href="#">Vegetable</a></li>
			<li><a href="#">Potato</a></li>
			<li><a href="#">Salad</a></li>
		</ul>
		<ul class="menu">
			<li><a href="#">Apple</a></li>
			<li><a href="#">iPhone X</a></li>
			<li><a href="#">iPhone XR</a></li>
		</ul>
		<ul class="menu">
			<li><a href="#">Google</a></li>
			<li><a href="#">Google Pixel</a></li>
		</ul>
		<ul class="menu">
			<li><a href="#">Gift cards</a></li>
			<li><a href="#">Uniqlo</a></li>
			<li><a href="#">Galeries Lafayette</a></li>
		</ul>
	</div>
	<div style="width:60%; display:inline-block;">
		<div>
			<p style="text-align:center;"><a href="https://www.uniqlo.com/">uniqlo.com</a></p>
			<IMG src="https://www.uniqlo.com/on/demandware.static/Sites-FR-Site/-/default/dw105f1348/images/logo.svg" class="center">

			<form action="index.php" method="GET">
			<p>$PRODUCT_NAME: </p>	
			<p>Uniqlo gift card</p>
				<br />
				Price: $VAR_PRICE
				<br />
				Amount:
				<select name="qty">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
				<br />
				<input type="submit" name="add_to_cart" value="add_to_cart" />
			</form>

			<p style="text-align:center;"><a href="https://www.galerieslafayette.com/">galerieslafayette.com</a></p>
			<IMG src="https://www.galerieslafayette.com/img/common/logo-galeries-lafayette.svg" class="center">
			<p style="text-align:center;">Galeries Lafayette gift card</p>
		</div>
	</div>

	<hr>
	<p style="font-style:italic; text-align:right; font-family:monospace;">©weilin 2019</p>

</BODY>

</HTML>