<?php
	include("header.php");
	include("navbar.php");
	include_once("backend/connect.php");
	$db = getDB();
	$products = getProducts($db);
?>

<section class="homepage-slider" id="home-slider">
	<div class="flexslider">
		<ul class="slides">
			<li>
				<img src="themes/images/carousel/banner-1.png" alt="" />
			</li>
		</ul>
	</div>
</section>
<section class="header_text">
	For every purchase we plant 3 trees! We ensure you the best second hand products for the best price!
	<br />
</section>
<section class="main-content">
	<div class="row">
		<div class="span12">
			<div class="row">
				<div class="span12">
					<h4 class="title">
						<span class="pull-left"><span class="text"><span class="line">Feature <strong>Products</strong></span></span></span>
						<span class="pull-right">
							<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
						</span>
					</h4>
					<div id="myCarousel" class="myCarousel carousel slide">
						<div class="carousel-inner">
							<div class="active item">
								<ul class="thumbnails">
									<?php
									foreach ($products as $product) {
									?>
										<li class="span3">
											<div class="product-box">
												<p><a href=<?= "product_detail.php?product=" . $product["code"] ?>><img src=<?= $product["image"] ?> alt="" /></a></p>
												<a href=<?= "product_detail.php?product=" . $product["code"] ?> class="title"><?= $product["name"] ?></a><br />
												<a href="products.php" class="category"><?= $product["brand"] ?></a>
												<p class="price">$<?= $product["price"] ?></p>
											</div>
										</li>
									<?php
									}
									?>
								</ul>
							</div>
							<div class="item">
								<ul class="thumbnails">
									<li class="span3">
										<div class="product-box">
											<p><a href="product_detail.php"><img src="themes/images/ladies/5.jpg" alt="" /></a></p>
											<a href="product_detail.php" class="title">Know exactly</a><br />
											<a href="products.php" class="category">Quis nostrud</a>
											<p class="price">$22.30</p>
										</div>
									</li>
									<li class="span3">
										<div class="product-box">
											<p><a href="product_detail.php"><img src="themes/images/ladies/6.jpg" alt="" /></a></p>
											<a href="product_detail.php" class="title">Ut wisi enim ad</a><br />
											<a href="products.php" class="category">Commodo consequat</a>
											<p class="price">$40.25</p>
										</div>
									</li>
									<li class="span3">
										<div class="product-box">
											<p><a href="product_detail.php"><img src="themes/images/ladies/7.jpg" alt="" /></a></p>
											<a href="product_detail.php" class="title">You think water</a><br />
											<a href="products.php" class="category">World once</a>
											<p class="price">$10.45</p>
										</div>
									</li>
									<li class="span3">
										<div class="product-box">
											<p><a href="product_detail.php"><img src="themes/images/ladies/8.jpg" alt="" /></a></p>
											<a href="product_detail.php" class="title">Quis nostrud exerci</a><br />
											<a href="products.php" class="category">Quis nostrud</a>
											<p class="price">$35.50</p>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<br />
			<div class="row feature_box">
				<div class="span4">
					<div class="service">
						<div class="responsive">
							<img src="themes/images/feature_img_2.png" alt="" />
							<h4>BEST <strong>SECOND HAND PRODUCTS</strong></h4>
							<p>We strive for saving the Planet.</p>
						</div>
					</div>
				</div>
				<div class="span4">
					<div class="service">
						<div class="customize">
							<img src="themes/images/feature_img_1.png" alt="" />
							<h4>CARBON <strong>FREE</strong></h4>
							<p>Pay a little more to save the world.</p>
						</div>
					</div>
				</div>
				<div class="span4">
					<div class="service">
						<div class="support">
							<img src="themes/images/feature_img_3.png" alt="" />
							<h4>THE LOWEST <strong>ECOLOGICAL FOOTPRINT</strong></h4>
							<p>Each product was a ecological footprint description.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="our_client">
	<h4 class="title"><span class="text">Manufactures</span></h4>
	<div class="row">
		<div class="span2">
			<a href="#"><img alt="" src="themes/images/clients/1.png"></a>
		</div>
		<div class="span2">
			<a href="#"><img alt="" src="themes/images/clients/1.png"></a>
		</div>
		<div class="span2">
			<a href="#"><img alt="" src="themes/images/clients/1.png"></a>
		</div>
		<div class="span2">
			<a href="#"><img alt="" src="themes/images/clients/1.png"></a>
		</div>
		<div class="span2">
			<a href="#"><img alt="" src="themes/images/clients/1.png"></a>
		</div>
		<div class="span2">
			<a href="#"><img alt="" src="themes/images/clients/1.png"></a>
		</div>
	</div>
</section>

<script src="themes/js/common.js"></script>
<script src="themes/js/jquery.flexslider-min.js"></script>
<script type="text/javascript">
	$(function() {
		$(document).ready(function() {
			$('.flexslider').flexslider({
				animation: "fade",
				slideshowSpeed: 4000,
				animationSpeed: 600,
				controlNav: false,
				directionNav: true,
				controlsContainer: ".flex-container" // the container that holds the flexslider
			});
		});
	});
</script>

<?php
include("footer.php");
?>