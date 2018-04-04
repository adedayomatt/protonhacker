<!--JQuery and Bootstrap tools-->
<script type="text/javascript" language="javascript" src="<?php echo $root.'/resources/mato/tools/JQuery/jquery.min.js' ?>"></script>
<script type="text/javascript" language="javascript" src="<?php echo $root.'/resources/mato/tools/bootstrap/js/bootstrap.min.js' ?>"></script>

<!--Scripts from JMatt Library
<script type="text/javascript" language="javascript" src="<?php echo $root.'/resources/mato/lib/JMatt/toggle.js' ?>"></script>
<script type="text/javascript" language="javascript" src="<?php echo $root.'/resources/mato/lib/JMatt/coloranimation.js' ?>"></script>
-->
<script>
$(function () {
  $('[data-toggle="tooltip"]').tooltip();
});


$(function () {
  $('[data-toggle="popover"]').popover();
});
</script>
<style>
.footer{
	background-color:#333;
	color:#fff;
	min-height:100px;
}
.footer-ul>li{
	display: inline-block;
	margin: 10px;
}
.footer-ul>li>a{
	color: #fff;
}
</style>
<div class="row footer">
	<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
		<div class="text-center">
			<h4><i class="fa fa-hand-holding-usd"></i> Payment Methods</h4>
			<img src="<?php echo $root.'/resources/images/payment-methods/western-union.png'?>" style="width: 200px; height: 50px;  background-image:none;margin:10px">
			<img src="<?php echo $root.'/resources/images/payment-methods/bitcoin.png'?>" style="width: 250px; height: 50px; background-image:none;margin:10px">
		</div>
	</div>

	<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
		<div class="text-center">
			<h4>Stay Connected </h4>

					<a href="#" class="social-media-links" title="ProtonHacker on facebook">
					  <i class="fab fa-facebook"></i>
					</a>

					<a href="#" class="social-media-links" title="ProtonHacker on twitter">
					  <i class="fab fa-twitter"></i>
					</a>

					<a href="#" class="social-media-links" title="ProtonHacker on instagram">
					  <i class="fab fa-instagram"></i>
					</a>

					<a href="#" class="social-media-links" title="ProtonHacker on linkedin">
					  <i class="fab fa-linkedin"></i>
					</a>
		
		</div>
		
	</div>
	
	<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
		<div class="text-center">
			<h4>Contact Us </h4>
			<a href="#" class="contact-form-link" title="Fill our contact form"><i class="fas fa-edit"></i> Online Form</a><br/>
			<a href="tel:+12098968403" class="contact-phone-address" title="contact ProtonHacker via phone"><i class="fas fa-phone-square"></i> +12098968403</a><br/>
			<a href="mailto:hacker@protonhacker.com" class="contact-mail-address" title="contact ProtonHacker via email"><i class="fas fa-envelope-square"></i> hacker@protonhacker.com</a>
		</div>
	</div>
	
	<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
		<div class="text-center">
			<h4><i class="fas fa-gavel"></i> Legal  Facts </h4>
			<div class="row text-center">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-6"><a href="#" style="color: #fff"><i class="fas fa-exclamation-triangle"></i> Warning: Scam</a></div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-6"><a href="#" style="color: #fff"><i class="fas fa-user-secret"></i> Privacy Policy</a></div>
			</div>
		</div>
	</div>
	
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="text-center"style="margin-top:10px; font-size:12px">
			<p>&copy ProtonHacker Team 2018</p>
		</div>
	</div>
</div>
