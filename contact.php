<?php
include("header.php");
include("navbar.php");
?>
<section class="google_map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3002.9912394790845!2d-8.598034084580675!3d41.178358279283884!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd246446d48922a3%3A0x8b1e4a0bcdacc840!2sFEUP%20-%20Faculdade%20de%20Engenharia%20da%20Universidade%20do%20Porto!5e0!3m2!1sen!2spt!4v1642537824706!5m2!1sen!2spt" width="1190" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>></iframe>
</section>
<img class="pageBanner" src="themes/images/pageBanner.png" alt="New products">
<h4><span>Contact Us</span></h4>
</section>
<section class="main-content">
	<div class="row">
		<div class="span5">
			<div>
				<h5>ADDITIONAL INFORMATION</h5>
				<p><strong>Phone:</strong>&nbsp;+351 999 999 999<br>
					<strong>Email:</strong>&nbsp;<a href="#">CodeaBit@switch.pt</a>
				</p>
				<br />
			</div>
		</div>
		<div class="span7">
			<p>Send us a message :)</p>
			<form method="post" action="#">
				<fieldset>
					<div class="clearfix">
						<label for="name"><span>Name:</span></label>
						<div class="input">
							<input tabindex="1" size="18" id="name" name="name" type="text" value="" class="input-xlarge" placeholder="Name">
						</div>
					</div>

					<div class="clearfix">
						<label for="email"><span>Email:</span></label>
						<div class="input">
							<input tabindex="2" size="25" id="email" name="email" type="text" value="" class="input-xlarge" placeholder="Email Address">
						</div>
					</div>

					<div class="clearfix">
						<label for="message"><span>Message:</span></label>
						<div class="input">
							<textarea tabindex="3" class="input-xlarge" id="message" name="body" rows="7" placeholder="Message"></textarea>
						</div>
					</div>

					<div class="actions">
						<button tabindex="3" type="submit" class="btn btn-inverse">Send message</button>
					</div>
				</fieldset>
			</form>
		</div>
	</div>
</section>
<?php
include("footer.php");
?>