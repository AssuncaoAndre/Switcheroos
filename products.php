<?php
include("header.php");
include("navbar.php");
?>
<img class="pageBanner" src="themes/images/pageBanner.png" alt="New products">
<h4><span>New products</span></h4>
</section>
<section class="main-content">

	<div class="row">
		<div class="span9">
			<ul class="thumbnails listing-products">
				<li class="span3">
					<div class="product-box">
						<span class="sale_tag"></span>
						<a href="product_detail.php"><img alt="" src="themes/images/ladies/9.jpg"></a><br />
						<a href="product_detail.php" class="title">T-Shirt by Switch</a><br />
						<a href="#" class="category">T-Shirts</a>
						<p class="price">$341</p>
					</div>
				</li>
				<li class="span3">
					<div class="product-box">
						<a href="product_detail.php"><img alt="" src="themes/images/ladies/8.jpg"></a><br />
						<a href="product_detail.php" class="title">Hackathon T-Shirt by Switch</a><br />
						<a href="#" class="category">T-Shirts</a>
						<p class="price">$28</p>
					</div>
				</li>
				<li class="span3">
					<div class="product-box">
						<span class="sale_tag"></span>
						<a href="product_detail.php"><img alt="" src="themes/images/ladies/7.jpg"></a><br />
						<a href="product_detail.php" class="title">Pants by Gucci</a><br />
						<a href="#" class="category">Pants</a>
						<p class="price">$341</p>
					</div>
				</li>
				<li class="span3">
					<div class="product-box">
						<span class="sale_tag"></span>
						<a href="product_detail.php"><img alt="" src="themes/images/ladies/6.jpg"></a><br />
						<a href="product_detail.php" class="title">Pants by Switch</a><br />
						<a href="#" class="category">Pants</a>
						<p class="price">$49</p>
					</div>
				</li>
				<li class="span3">
					<div class="product-box">
						<a href="product_detail.php"><img alt="" src="themes/images/ladies/1.jpg"></a><br />
						<a href="product_detail.php" class="title">Certificate da Pinta by Switch</a><br />
						<a href="#" class="category">T-Shirt</a>
						<p class="price">$35</p>
					</div>
				</li>
			</ul>
			<hr>
			<div class="pagination pagination-small pagination-centered">
				<ul>
					<li><a href="#">Prev</a></li>
					<li class="active"><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">Next</a></li>
				</ul>
			</div>
		</div>
		<div class="span3 col">
			<div class="block">
				<ul class="nav nav-list">
					<li class="nav-header">SUB CATEGORIES</li>
					<li><a href="products.php">Pants</a></li>
					<li><a href="products.php">T-Shirts</a></li>
				</ul>
				<br />
				<ul class="nav nav-list below">
					<li class="nav-header">MANUFACTURES</li>
					<li><a href="products.php">Switch</a></li>
					<li><a href="products.php">Fortnite Balenciaga</a></li>
					<li><a href="products.php">Gucci Pucci</a></li>

				</ul>
			</div>
			<div class="block">
				<h4 class="title">
					<span class="pull-left"><span class="text">Randomize</span></span>
					<span class="pull-right">
						<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
					</span>
				</h4>
				<div id="myCarousel" class="carousel slide">
					<div class="carousel-inner">
						<div class="active item">
							<ul class="thumbnails listing-products">
								<li class="span3">
									<div class="product-box">
										<span class="sale_tag"></span>
										<img alt="" src="themes/images/ladies/1.jpg"><br />
										<a href="product_detail.php" class="title">T-Shirt by Switch</a><br />
										<a href="#" class="category">T-Shirts</a>
										<p class="price">$261</p>
									</div>
								</li>
							</ul>
						</div>
						<div class="item">
							<ul class="thumbnails listing-products">
								<li class="span3">
									<div class="product-box">
										<img alt="" src="themes/images/ladies/2.jpg"><br />
										<a href="product_detail.php" class="title">Pants by Gucci</a><br />
										<a href="#" class="category">Pants</a>
										<p class="price">$134</p>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="block">
				<h4 class="title"><strong>Best</strong> Seller</h4>
				<ul class="small-product">
					<li>
						<a href="#" title="Hackathon T-Shirt">
							<img src="themes/images/ladies/3.jpg" alt="Praesent tempor sem sodales">
						</a>
						<a href="#">Pants by Switch</a>
					</li>
					<li>
						<a href="#" title="T-Shirt by Switch">
							<img src="themes/images/ladies/4.jpg" alt="Luctus quam ultrices rutrum">
						</a>
						<a href="#">T-Shirt by Switch</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>

<script src="themes/js/common.js"></script>
<?php
include("footer.php");
?>