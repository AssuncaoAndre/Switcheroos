<div id="top-bar" class="container">
	<div class="row">
		<div class="span4">
		</div>
		<div class="span8">
			<div class="account pull-right">
				<ul class="user-menu">
					<li><a href="#">My Account</a></li>
					<li><a href="cart.php">Your Cart(<span class="total-count"></span>) \ Checkout</a></li>
					<li><a href="register.php">Login</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<div id="wrapper" class="container">
	<section class="navbar main-menu">
		<div class="navbar-inner main-menu">
			<a href="index.php" class="logo pull-left"><img src="themes/images/logo.png" class="site_logo" alt=""></a>
			<nav id="menu" class="pull-right">
				<ul>
				<?php
					include_once("./backend/connect.php");
					$db=getDB();
					
				?>
					<li><a href="./products.php?sex=Woman">Woman</a>
						<ul>
							<?php 
							$categories=getCategoriesBySex($db, "Woman"); 
							
							foreach($categories as $category)
							{							
							?>
								<li><a href=<?= "./products.php?sex=Woman&category=".$category['category']?>><?=$category['category']?></a></li>
							<?php
							}
							?>
						</ul>
					</li>
					<li><a href="./products.php?sex=Man">Man</a>
						<ul>
							<?php 
							$categories=getCategoriesBySex($db, "Man"); 

							foreach($categories as $category)
							{							
							?>
								<li><a href=<?= "./products.php?sex=Man&category=".$category['category']?>><?=$category['category']?></a></li>
							<?php
							}
							?>
						</ul>
					</li>
				</ul>
			</nav>
		</div>
	</section>