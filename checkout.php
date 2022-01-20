<?php
include("header.php");
include("navbar.php");
$price = $_GET["price"];
?>
<p id="price" style="display:none"><?= $price ?></p>
<img class="pageBanner" src="themes/images/pageBanner.png" alt="New products">
<h4><span>Check Out</span></h4>
</section>
<section class="main-content">
	<div class="row">
		<div class="span12">
			<div id="dynamic-forms-container"></div>
			<button class="btn btn-inverse pull-right">Confirm order</button>
		</div>
	</div>
</section>
<script src="https://cdn.switchpayments.com/libs/switch-5.stable.min.js"></script>

<script src="payment.js"></script>

<?php
include("footer.php");
?>