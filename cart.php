<?php
include("header.php");
include("navbar.php");
?>
<img class="pageBanner" src="themes/images/pageBanner.png" alt="New products">

</section>
<section class="main-content">

	<h4 class="title"><span class="text"><strong>Your</strong> Cart</span></h4>
	<table class="show-cart table table-striped">			
	</table>
	<div>Total price: <span class="total-cart"></span>€</div>
	
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