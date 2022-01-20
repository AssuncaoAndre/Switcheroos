<?php
	include("header.php");
	include("navbar.php");

	include_once("./backend/connect.php");
	$sex=$_GET['sex'];
	$category=$_GET['category'];
	$brand=$_GET['brand'];
	$db=getDB();

	if(isset($_GET['category']) && isset($_GET['sex']))
		$products=getProductsBySexCategory($db,$sex,$category);
	else if(isset($_GET['category']) )
		$products=getProductsByCategory($db,$category);
	else if(isset($_GET['sex']))
		$products=getProductsBySex($db,$sex);
	else 
		$products=getProducts($db);
?>
<img class="pageBanner" src="themes/images/pageBanner.png" alt="New products">
<h4><span>New products</span></h4>
</section>
<section class="main-content">

	<div class="row">
		<div class="span9">
			<ul class="thumbnails listing-products">
				<?php
				foreach($products as $product)
				{
				?>
					<li class="span3">
						<div class="product-box">
							<a href=<?="product_detail.php?product=".$product['code']?>><img alt="" src=<?=$product['image']?>></a><br />
							<a href=<?="product_detail.php?product=".$product['code']?> class="title"><?=$product['name']." by ".$product['brand']?></a><br />
							<a href=<?="products.php?category=".$product['category']?> class="category"><?=$product['category']?></a>
							<p class="price"><?=$product['price']?>€</p>
						</div>
					</li>
				<?php
				}
				?>
				
			</ul>
			<hr>
		</div>
				<?php
				include("cat_man.php");
				?>
	</div>
</section>

<script src="themes/js/common.js"></script>
<?php
include("footer.php");
?>