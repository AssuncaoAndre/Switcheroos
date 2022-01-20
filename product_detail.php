
<?php 
include("header.php");
include("navbar.php");
?>
    <body>		
		<?php
			$product_code=$_GET['product'];
			include_once("./backend/connect.php");
			$db=getDB();
			$product=getProductByCode($db, $product_code);
		?>
		
			<section class="header_text sub">
			<img class="pageBanner" src="themes/images/pageBanner.png" alt="New products" >
				<h4><span>Product Detail</span></h4>
			</section>
			<section class="main-content">				
				<div class="row">						
					<div class="span9">
						<div class="row">
							<div class="span4">
								<a href=<?=$product['image']?> class="thumbnail" data-fancybox-group="group1" title="Description 1"><img alt="" src=<?= $product["image"]?>></a>												
								
							</div>
							<div class="span5">
								<address>
									<strong>Brand:</strong><span><?=$product["brand"]?></span><br>
									<strong>Carbon Footprint:</strong> <span><?=$product["carbon_footprint"]?> </span><br>
									<strong>Stock:</strong> <span id="stock"><?=$product["quantity"]==0 ? "Out of stock" : $product["quantity"]?></span><br>								
								</address>									
								<h4><strong><?=$product["price"]?>€</strong></h4>
							</div>
							<div class="span5">
								<p>&nbsp;</p>
								<a href="#" data-name=<?= $product["name"] ?> data-price=<?=$product['price']?> class="add-to-cart btn btn-inverse">Add to cart(<span class="total-count"></span>)</a>	
							</div>							
						</div>
						<div class="row">
							<div class="span9">
								<ul class="nav nav-tabs" id="myTab">
									<li class="active"><a href="#home">Description</a></li>
									<li class=""><a href="#profile">Additional Information</a></li>
								</ul>							 
								<div class="tab-content">
									<div class="tab-pane active" id="home"><?= $product["description"]?></div>
									<div class="tab-pane" id="profile">
										<table class="table table-striped shop_attributes">	
											<tbody>
												<tr class="">
													<th>Size</th>
													<td><?php $product["size"]?></td>
												</tr>		
												<tr class="alt">
													<th>Colour</th>
													<td>Black</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>							
							</div>						
							
						</div>
					</div>					
			</section>			
<?php
include("footer.php")
?>
		<script src="themes/js/common.js"></script>

		<script>
			$(function () {
				$('#myTab a:first').tab('show');
				$('#myTab a').click(function (e) {
					e.preventDefault();
					$(this).tab('show');
				})
			})
			$(document).ready(function() {
				$('.thumbnail').fancybox({
					openEffect  : 'none',
					closeEffect : 'none'
				});
				
				$('#myCarousel-2').carousel({
                    interval: 2500
                });								
			});
		</script>
