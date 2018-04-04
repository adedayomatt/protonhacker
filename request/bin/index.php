<?php
header('location: ../'); //Redirect unauthorized access
die();

	require('../resources/master_script.php');
?>

<html>
	<head>
			<?php
			$pagetitle = ' Order Service';
			$ref="home_page";
			require('../resources/global/meta-head.php');
			?>
			<style>
			.form-container{
				width:60%;
				margin:0px 20%;
				padding: 0px 20px;
				background-color: #fff;
				box-shadow: 0px 5px 5px rgba(0,0,0,0.5);
			}
			.feedback-container{
				padding: 10px;
				background-color:#f7f7f7;
				border: 1px solid #e3e3e3;
				text-align: center;
			}
			.feedback-container.success{
				color: green;
			}
			.feedback-container.failed{
				color: red;
			}
			.form-group{
				padding: 20px;
			}
			.form-heading{
				border-bottom: 1px solid #000;
			}
			input[type='text'],input[type='email']{
				padding:20px 15px !important;
			}
			.cust-checkbox>label,.cust-radio>label{
				cursor:pointer;
			}
			.names{
				margin:0px 5px;
			}
			.help-block{
				color:grey;
				font-size:80%;
			}
			label{
				font-weight:normal !important;
			}
			.asterik{
				color: red;
			}
			@media all and (max-width: 768px){
			.form-container{
				width:95%;
				margin:0px 2.5%;
				padding: 0px 10px;
			}
			.names{
				margin-top: 10px;
			}
			}
			</style>
	</head>
	<body style="background: #eeeeee url('../resources/images/backgrounds/binary-bubble.jpg')">
	<?php
			require('../resources/global/header.php');
		?>
		<div class="container-fluid" style="padding-top:80px;">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="form-container">
						<?php
							$category = 001;
						if(isset($_GET['category'])){
							if($_GET['category'] == 'services'){
							$category = 001;
						}
						else if($_GET['category'] == 'requests'){
							$category = 002;
							}
						}
						
						if($category == 001){
							?>
							
							<h1 class="text-center">Request a Hacking Service</h1>
								<p class="text-center help-block">Give us information about your task and we deliver to you just in time!</p>
								
								<?php
								if(isset($Feedback)){
									switch ($Feedback){
										case 0000;
										?>
										<div class="feedback-container success">
											<p>Your request have submitted successfully, we'll get back to you as soon as possible via <?php echo(isset($POST['client_email']) ? "<span style=\"color: blue\">".$POST['client_email']."</span>" : 'email' ) ?></p>
												<h2>Thank You</h2>
											<p>for trusting us with your hacking task, don't forget to come back and give us feedback about our service</p>
										</div>
										<?php
										break;
										
										case 105;
										?>
										<div class="feedback-container warning">
											<h3>Let us know about your service</h3>
											<p>Provide us with description of the hacking service you want, even if it is going to be brief</p>
										</div>
										<?php
										break;	
										
										case 104;
										?>
										<div class="feedback-container failed">
											<h3>No Wallet Address</h3>
											<p>Please select a payment method and provide us with the wallet address</p>
										</div>
										<?php
										break;	
										
										case 103;
										?>
										<div class="feedback-container failed">
											<h3>You must have forgotten to choose a payment method!</h3>
											<p>You can pay via Bitcoin, Ethereum, Bitcoin Bitcoin Cash (BCH) and Western Union</p>
										</div>
										<?php
										break;	
										
										case 102;
										?>
										<div class="feedback-container failed">
											<h3>We are sorry, Payment needs to be ready to place your request</h3>
											<p>Please make sure payment is ready and check the box to indicate that you have payment ready</p>
											<p>This is for us to serve us better, you can read <a href="">Our Term of Service</a></p>
										</div>
										<?php
										break;	
										
										case 101;
										?>
										<div class="feedback-container failed">
											<h3>You need to agree to our terms of service</h3>
											<p>To be sure that you understand our terms of services, please check the box.</p>
											<p>You can read a copy of our terms of services <a href="">here</a></p>
										</div>
										<?php
										break;
									}
								}
								?>
								
							<form action="<?php $_PHP_SELF ?>" method="POST" class="service-form">
								<p class="help-block"> Fields with <span class="asterik">*</span> are necessary</p>
								<div id="client-info">
										<h3 class="text-left form-heading">Client Information</h3>
										
									<div class="form-group row">
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<label>Your Name</label>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
											<div class="col-inner names">
												<input name="client_first_name" type="text" class="form-control" placeholder="First Name" value="<?php echo (isset($_POST['client_first_name']) ? $_POST['client_first_name'] : "")?>">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
											<div class="col-inner names">
												<input name="client_last_name" type="text" class="form-control" placeholder="Last Name" value="<?php echo (isset($_POST['client_last_name']) ? $_POST['client_last_name'] : "")?>">
											</div>
										</div>
									</div>
									
									<div class="form-group">
										<label for="">E-mail Address <span class="asterik">*</span></label>
										<p class="help-block">Your e-mail address will in any case be made public, it is solely for communication</p>
										<input name="client_email" type="email" class="form-control" placeholder="example@domain.com" value="<?php echo (isset($_POST['client_email']) ? $_POST['client_email'] : "")?>" required>
									</div> 

									<div class="form-group">
										<label for="">Phone No</label>
										<input name="client_tel" type="text" class="form-control" value="<?php echo (isset($_POST['client_tel']) ? $_POST['client_tel'] : "")?>">
									</div>
								</div>								
								
								
								<div id="hacking-task">
									<h3 class="text-left form-heading">Hacking Task Information</h3>
									
									<div class="form-group">
										<label for="">Hacking Task <span class="asterik">*</span></label>
										<p class="help-block">Please explain your hacking task in as much details as possible...</p>
										<textarea class="form-control" name="task_description" rows="3" placeholder="Explain your hacking task in details..."  required><?php echo (isset($_POST['task_description']) ? $_POST['task_description'] : "") ?></textarea>
									</div>
									
									<div id="info-to-hack">
										<h3 class="text-left">Information to Include</h3>
										<p class="help-block">Note that not all of these are applicable to all hacking tasks</p>
										<div class="cust-checkbox">
											<label>
												<input name="current_messages" type="checkbox" value="Current Messages" <?php echo (isset($_POST['current_messages']) ? 'checked' : "") ?> > Current Messages
											</label>
										</div>
										
										<div class="cust-checkbox">
											<label>
												<input name="deleted_messages" type="checkbox" value="Deleted Messages" <?php echo (isset($_POST['deleted_messages']) ? 'checked' : "") ?>> Deleted Messages
											</label>
										</div>
										
										<div class="cust-checkbox">
											<label>
												<input name="location_tracking" type="checkbox" value="location_tracking" <?php echo (isset($_POST['location_tracking']) ? 'checked' : "") ?>> Location Tracking
											</label>
										</div>
										
										<div class="cust-checkbox">
											<label>
												<input name="emails" type="checkbox" value="Emails" <?php echo (isset($_POST['emails']) ? 'checked' : "") ?>> Emails
											</label>
										</div>
										
										<div class="cust-checkbox">
											<label>
												<input name="calls" type="checkbox" value="Call Logs/Contacts" <?php echo (isset($_POST['calls']) ? 'checked' : "") ?>> Call Logs/Contacts
											</label>
										</div>
										
										<div class="cust-checkbox">
											<label>
												<input name="photoaccess" type="checkbox" value="Photo Access" <?php echo (isset($_POST['photoaccess']) ? 'checked' : "") ?>> Photo Access
											</label>
										</div>
										
										<div class="cust-checkbox">
											<label>
												<input name="viber_fb_msg" type="checkbox" value="Viber/Facebook Messager" <?php echo (isset($_POST['viber_fb_msg']) ? 'checked' : "") ?>> Viber/Facebook Messager
											</label>
										</div>
										
										<div class="cust-checkbox">
											<label>
												<input name="snap_msg" type="checkbox" value="Snapchat Messages" <?php echo (isset($_POST['snap_msg']) ? 'checked' : "") ?>> Snapchat Messages
											</label>
										</div>
										
										<div class="cust-checkbox">
											<label>
												<input name="kiki_msg" type="checkbox" value="Kiki Messages" <?php echo (isset($_POST['kiki_msg']) ? 'checked' : "") ?>> Kiki Messages
											</label>
										</div>
										
										<div class="cust-checkbox">
											<label>
												<input name="microphone_access" type="checkbox" value="Snapchat Messages" <?php echo (isset($_POST['microphone_access']) ? 'checked' : "") ?>> Microphone Access
											</label>
										</div>
									</div>								
								</div>
								
								<div id="pricing">
									<h3 class="text-left form-heading">Pricing</h3>
																												
									<div class="cust-radio">
										<label>
											<input type="radio" name="pricing" value="30 days (No Extra Fee)" checked> Completed in 30 days (NO ADDITIONAL FEE)
										</label>
									</div>
									
									<div class="cust-radio">
										<label>
											<input type="radio" name="pricing" value="24 hours (+ 900 USD)" <?php echo ((isset($_POST['pricing'] )&& $_POST['pricing']=="24 hours (+ 900 USD)") ? 'checked' : "") ?> > Completed in 24 hours (+ $900)
										</label>
									</div>
									
									<div class="cust-radio">
										<label>
											<input type="radio" name="pricing" value="72 hours (+ 650 USD)" <?php echo ((isset($_POST['pricing']) && $_POST['pricing']=="72 hours (+ 650 USD)") ? 'checked' : "") ?> > Completed in 72 hours (+ $650)
										</label>
									</div>	
									
									<div class="cust-radio">
										<label>
											<input type="radio" name="pricing" value="2 weeks (+ 500 USD)" <?php echo ((isset($_POST['pricing']) && $_POST['pricing']=="2 weeks (+ 500 USD)") ? 'checked' : "") ?> > Completed in 2 weeks (+ $500)
										</label>
									</div>
								</div>
						
								
								<div id="remain-anonymous-opt">
									<h3 class="text-left form-heading">Anonymity</h3>
									<p  class="help-block">Choose to remain anonymous or not!  Those who chose not to remain anonymous, ProtonHackers must notify the victim of the hack 90 days after hack completion.</p>
																	
									<div class="cust-radio">
										<label>
											<input type="radio" name="anonymity" value="Yes" checked> Yes, Remain anonymous (+$50)
										</label>
									</div>
									
									<div class="cust-radio">
										<label>
											<input type="radio" name="anonymity" value="No" <?php echo ((isset($_POST['anonymity']) && $_POST['anonymity']=="No") ? 'checked' : "") ?>> No
										</label>
									</div>
									
								</div>
																
								<div id="payment-method">
									<h3 class="text-left form-heading">Payment</h3>
												
									<label>Payment Method <span class="asterik">*</span>
									
									<style>
									.payment-address-container{
										background-color:rgba(0,0,0,0.5);
										color: #fff;
									}
									</style>
									<div class="cust-radio payment-radio">
										<label class="trigger">
											<input type="radio" name="payment_method" value="Western Union" <?php echo ((isset($_POST['payment_method']) && $_POST['payment_method']=="Western Union") ? 'checked' : "") ?> > Western Union
										</label>
										<div class="payment-address-container" style="display: <?php echo ((isset($_POST['payment_method']) && $_POST['payment_method']=="Western Union") ? 'block' : 'none') ?> ">
											<div class="form-group">
											Not Available yet
											</div>
										</div>
									</div>
									

									<div class="cust-radio payment-radio">
										<label class="trigger">
											<input type="radio" name="payment_method" value="Bitcoin" <?php echo ((isset($_POST['payment_method']) && $_POST['payment_method']=="Bitcoin") ? 'checked' : "") ?> > Bitcoin 
										</label>
										<div class="payment-address-container" style="display: <?php echo ((isset($_POST['payment_method']) && $_POST['payment_method']=="Bitcoin") ? 'block' : 'none') ?> ">
											<div class="form-group">
												<label>Enter your BTC Address</label>
												<input name="BTC_address" type="text" class="form-control" placeholder="BTC Address" value="<?php echo(isset($_POST['BTC_address']) ? $_POST['BTC_address'] : "") ?>" />
											</div>
										</div>
									</div>
									
									<div class="cust-radio payment-radio">
										<label class="trigger">
											<input type="radio" name="payment_method" value="Ethereum" <?php echo ((isset($_POST['payment_method']) && $_POST['payment_method']=="Ethereum") ? 'checked' : "") ?> > Ethereum
										</label>
										<div class="payment-address-container" style="display: <?php echo ((isset($_POST['payment_method']) && $_POST['payment_method']=="Ethereum") ? 'block' : 'none') ?>">
											<div class="form-group">
												<label>Enter your ETH Address</label>
												<input name="ETH_address" type="text" class="form-control" placeholder="ETH Address" <?php echo(isset($_POST['ETH_address']) ? $_POST['ETH_address'] : "") ?>/>
											</div>
										</div>
									</div>
									
									<div class="cust-radio payment-radio">
										<label class="trigger">
											<input type="radio" name="payment_method" value="Bitcoin Cash (BCH)" <?php echo ((isset($_POST['payment_method']) && $_POST['payment_method']=="Bitcoin Cash (BCH)") ? 'checked' : "") ?> > Bitcoin Cash (BCH)
										</label>
										<div class="payment-address-container" style="display: <?php echo ((isset($_POST['payment_method']) && $_POST['payment_method']=="Bitcoin Cash (BCH)") ? 'block' : 'none') ?>">
											<div class="form-group">
												<label>Enter your BCH Address</label> 
												<input name="BCH_address" type="text" class="form-control" placeholder="BCH Address" <?php echo(isset($_POST['BCH_address']) ? $_POST['BCH_address'] : "") ?>/>
											</div>
										</div>
									</div>
									
								</div>
								
								<script>
									var pmc = document.querySelectorAll('.payment-radio');
									for(var i = 0; i<pmc.length; i++){
										togglePayment(pmc[i]);
									}
									
									function togglePayment(container){
										var trigger = container.querySelector('label.trigger');
										var addressContainer = container.querySelector('.payment-address-container');
										
										trigger.addEventListener('click',function(event){
											var allContainer = document.querySelectorAll('.payment-radio>.payment-address-container');
											for(var k = 0; k<allContainer.length; k++){
												allContainer[k].style.display = "none";
											}
											addressContainer.style.display = "block";
										});
									}
									</script>
							
								<div id="payment-ready">
									<h3 class="text-left">Is payment ready ?</h3>
									<p  class="help-block">please note that payment is required to start your hacking task</p>
									
									<div class="cust-checkbox">
											<label>
												<input name="pay_ready" type="checkbox" value="Payment is ready!" <?php echo (isset($_POST['pay_ready']) ? 'checked' : "") ?> > Check here if payment is ready
											</label>
									</div>
								</div>
								
								
								<div class="cust-checkbox">
											<label>
												<input name="agreement" type="checkbox" value="Agreed" <?php echo (isset($_POST['agreement']) ? 'checked' : "") ?> > I have read and agreed to <a href=""> ProtonHackers Terms of Service</a>
											</label>
									</div>
									
									<div class="form-group">
										<input type="submit" name="submit_request" value="Submit Request" class="btn btn-lg btn-primary">
									</div>
									<div class="text-center">
									<p>
									<i>Once you submit your application, a team member will review it! Once done, we will email you an invoice for payment acceptance</i> Do NOT submit the application if you do not have payment ready yet*</i>
									</p>
									<p>
									Please make sure you have read and understood <a href=""> ProtonHackers Terms of Service</a>
									</p>
									</div>
							</form>
							<?php
						}
					else if($category == 002){//SALES REQUEST
						?>
							<h1 class="text-center">Place Order For Hacking Product</h1>
								<form>
									<div class="text-center">
										<img src="../resources/images/others/locker.gif" width="200px" height="200px" class="service-image">
										<h3>Sales form is temporarily unavailable</h3> 
										<p>you can however contact us for any info at <a href="mailto: hackers@protonhackers.com">hackers@protonhackers.com</a></p>
									</div>
								</form>
						<?php
					}

				?>
					</div>
				</div>
				
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<?php
						require('../resources/global/footer.php');
					?>
				</div>
				
			</div>
		</div>
	</body>
</html>
