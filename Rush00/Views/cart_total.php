<?php
session_start();
// unset($_SESSION['basket']);//supprimer panier
?>

<!DOCTYPE html>
<HTML>

<HEAD>
	<META charset="UTF-8">
	<TITLE>Minishop</TITLE>
	<link rel="stylesheet" type="text/css" href="css/shop.css">
</HEAD>

<BODY>
	<H1>Basket</H1><BR />

	<div style="width:100%; display:inline-block;">
		<div class="basket">
			<!-- <IMG src="../resources/cart.jpg" class="center"> -->
			<!-- <p style="text-align:center;">BASKET</a></p> -->
		</div>
	</div>
	<?php include_once("basket.php"); ?>
	<div class="orders">
		<table class="order">
			<tr class="basket-title">
				<td colspan="3">My Basket</td>
				<td class="basket-total">Total : <?php $basket = $_SESSION['basket'];
													echo get_total($basket); ?> €</td>
			</tr>
			<?php

			if ($basket[0] != NULL)
				foreach ($basket as $item) {

					$info = get_item($item[0]);
					?>
				<tr class="">
					<td class="basket-image"><img src="../resources/<?php echo $info[2] . '" alt="' . $info[0]; ?>"></td>
					<td><?php echo $info[0]; ?></td>
					<td><?php echo $info[1]; ?> €</td>
					<td><?php echo $item[1] ?></td>
					<td>
						<form method="POST" action="delcart.php">
							<input type="hidden" name="deleted_item" value="<?php echo $info[0]; ?>">
							<button type="submit" name="id" value="<?php echo $info[3]; ?>">Delete</button>
						</form>
					</td>
				</tr>
			<?php }
		?>

			<tr>
				<td colspan="2">
					<form method="POST" action="buy.php">
						<button type="submit" name="action" value="<?php if ($basket[0] == NULL) echo 'none';
																	elseif ($_SESSION["loggued_on_user"] == "") echo 'log';
																	else echo 'buy'; ?>">Confirm the order</button>
					</form>
				</td>
				<td colspan="2">
					<form method="POST" action="delcart.php">
						<button type="submit" name="id" value="<?php if ($basket[0] == NULL) echo 'none';
																else echo 'cancel'; ?>">Cancel the basket</button>
					</form>
				</td>
			</tr>

		</table>
	</div>
	<hr>
	<p style="font-style:italic; text-align:right; font-family:monospace;">©ccarole & weilin 2019</p>

</BODY>

</HTML>