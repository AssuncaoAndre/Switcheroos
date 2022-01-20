<?php
include("header.php");
include("navbar.php");
?>
<img class="pageBanner" src="themes/images/pageBanner.png" alt="New products">
<h4><span>Shopping Cart</span></h4>
</section>
<section class="main-content">


	<h4 class="title"><span class="text"><strong>Your</strong> Cart</span></h4>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Remove</th>
				<th>Image</th>
				<th>Product Name</th>
				<th>Quantity</th>
				<th>Unit Price</th>
				<th>Total</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><input type="checkbox" value="option1"></td>
				<td><a href="product_detail.php"><img alt="" src="themes/images/ladies/9.jpg"></a></td>
				<td>T-shirt</td>
				<td><input type="text" placeholder="10" class="input-mini"></td>
				<td>€4.00</td>
				<td>€40.00</td>
			</tr>
			<tr>
				<td><input type="checkbox" value="option1"></td>
				<td><a href="product_detail.php"><img alt="" src="themes/images/ladies/3.jpg"></a></td>
				<td>Pants</td>
				<td><input type="text" placeholder="1" class="input-mini"></td>
				<td>€4.00</td>
				<td>€4.00</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td><strong>€44.00</strong></td>
			</tr>
		</tbody>
	</table>
	<h4>What type of shipping would you like?</h4>
	<p>Choose the eco delivery cost.</p>
	<label class="radio">
		<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
		I pay for my own carbon (Pay the carbon emissions resulted from the delivery)
	</label>
	<label class="radio">
		<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
		Delay Shipping for the health of the planet (The most eco friendly delivery possible)*
		<p style="font-size:0.85em">*We wait until the delivery truck has an optimized route to deliver all products with minimal carbon footprint</p>
	</label>
	<hr>
	<p class="cart-total right">
		<strong>Sub-Total</strong>: €44.00<br>
		<strong>Carbon Free </strong>: €2.00<br>
		<strong>Total</strong>: €46.00<br>
	</p>
	<hr />
	<p class="buttons center">
		<button class="btn btn-inverse" type="submit" id="checkout">Checkout</button>
	</p>


</section>

<script src="themes/js/common.js"></script>
<script>
	$(document).ready(function() {
		$('#checkout').click(function(e) {
			document.location.href = "checkout.php";
		})
	});
</script>

<?php
include("footer.php");
?>