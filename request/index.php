<?php
	require('../resources/sendRequest.php');
?>

<html>
	<head>
	<meta name="description" content="The Best Hacking Service Site For You. Hacking could be the most wanted task with the smallest help. This time, the ProtonHacker Team will help you hack anything. Request for a hacking service now!">
	<meta name="keywords" content="Hack,How to, How to hack,Facebook,Twitter,Telegram,Cheating,Social Media,Hacker,Hackers,SnapChat,Google, Hacking Service, Need a Hacker, Phone Hacking, Phones">
	
	<meta name="copyright"content="ProtonHacker Team">
	<meta name="language" content="En">	
	<meta name="reply-to" content="hacker@protonhacker.com">
	<meta name="url" content="https://www.protonhacker.com">
	<meta name="identifier-URL" content="https://www.protonhacker.com">
	<meta name="image" content="https://protonhacker.com/resources/images/logos/protonhacker-3d.png"/>
	<meta name="og:image" content="https://protonhacker.com/resources/images/logos/protonhacker-3d.png"/>	
	<?php
			$pagetitle = 'Request Service';
			$ref="request_service_page";
			require('../resources/global/meta-head.php');
			?>
			<style>
		.container-fluid{
			padding-top:120px;
			background-color: rgba(255 ,255, 255, 0.9);
		}
		.wordings-major{
			font-size: 80px;
			font-weight: 1000;
		}
		.wordings-minor{
			line-height: 40px;
		}
		.asterik{
			color: red;
		}
		.help-block{
			font-size: 12px;
			color: grey;
		}
		.LHS,.RHS{
			padding: 20px;
			margin: 10px;
		}
		.LHS{
			padding-top: 50px;
		}
		.RHS{
			background-color:#f7f7f7;
			border:1px solid #e3e3e3;
		}
		.LHS-feedback-parent{
			display: none;
		}
		.RHS-feedback-container,.LHS-feedback-container{
			padding: 20px;
		}
		.success{
			background-color: rgba(0,0,100,0.1);
			color: rgba(0,0,100,1);
		}
		.failed{
			background-color: rgba(250,0,0,0.1);
			color: rgba(250,0,0,1);
		}
		
		@media all and (max-width: 768px){
		.LHS-feedback-parent{
			display: block;
			}
			.wordings-major{
			font-size: 40px;
			font-weight: 700;
		}

		}
			</style>
	</head>
	
	<body class="bubble-bg">
	<?php
			require('../resources/global/header.php');
			$wordingsMajor = "Let's handle the hacking for you";
			$wordingsMinor = "Give us information about your task and we deliver to you just in time!";
			
			if(isset($_GET['category'])){
				$c = $_GET['category'];
				if($c == 'requests'){
			$wordingsMajor = "You are in the right place for hacking wares";
			$wordingsMinor = "Give us details of what you want: malwares, phishing websites, traffic e.t.c...we deliver to you just in time!";
			$ware = true;
			}
			}
		?>
		<div class="container-fluid" style="">
			<div class="row">
			
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-LHS-RHS">
					<div class="row">
						<div class="col-lg-8 col-md-8 col-sm-7 col-xs-12" >
							<div class="LHS">
								<?php //Feedback reporting on LHS
									if(isset($Feedback)){
										?>
								<div class="text-center LHS-feedback-parent">
										<?php
									switch ($Feedback){
										case 000:
										?>
											<div class="LHS-feedback-container success">
												<h2>Request Sent!</h2>
												<p>Your request was submitted successfully, we'll get back to you as soon as possible via <?php echo(isset($_POST['client_email']) ? "<span style=\"color: blue\">".$_POST['client_email']."</span>" : 'email' ) ?>. Don't forget to come back and give us feedback about our service</p>
											</div><br/>											
											<a href="../services" class="btn btn-primary">See other services</a>						
											<?php
										break;
										case 101:
										?>
											<div class="LHS-feedback-container failed">
												<h2>Your request was not submitted!</h2>
												<p>You need to agree to the terms of service, <a href="../terms"> read our terms of service</a></p>
											</div>									
											<?php
										break;
										case 102:
										?>
											<div class="LHS-feedback-container failed">
												<h2>Your request was not submitted!</h2>
												<p>Invalid email address, submitt a valid email address so we can get across to you</p>
											</div>									
										<?php
										break;
										case 103:
										?>
											<div class="LHS-feedback-container failed">
												<h2>Your request was not submitted!</h2>
												<p>Task description cannot be empty, tell us in details what you want us to do</p>
											</div>									
											<?php
										break;
										 case 104:
										 ?>
											<div class="LHS-feedback-container failed">
												<h2>Your request was not submitted!</h2>
												<p>Task description should be <strong>at least 20 charcters </strong>. Ensure you tell us in details what you want us to do</p>
											</div>									
										 <?php
										 break;
										 case 999:
										 ?>
											<div class="feedback-container failed">
												<h2>Your request was not submitted!</h2>
												<p>An error occured, try again later.</p>
											</div>									
										 <?php
										}
										?>
								</div>
										<?php
									}
									?>
									
								<div class="text-center">
									<h1 class="wordings-major"><?php echo $wordingsMajor ?></h1>
									<h3  class="wordings-minor"><?php echo $wordingsMinor?></h3>
									<p class="text-center" style="background-color: rgba(128,128,128,0.5); padding: 10px;border-radius: 5px;">Submit your application by sending a mail describing your task to <a href="mailto: hacker@protonhacker.com">hacker@protonhacker.com</a> or fill and submit the form on this page</p>
									<p style="color: rgba(0,0,100,1)"><i>Once you submit your application, a team member will review it! Once done, we will email you an invoice for payment acceptance</i></p>
									<h4><i class="fas fa-exclamation-triangle" style="color:red"></i> DO NOT submit the application if you do not have payment ready yet</h4>
									<br/>
									<p>Please make sure you have read and understood our Terms of Service, you can read a copy <a href="../terms"> HERE</a></p>
								</div>
							</div>
						</div>
							
							<div class="col-lg-4 col-md-4 col-sm-5 col-xs-12" >
								<div class="RHS">
									<?php
									if(isset($Feedback)){
										?>
										<div class="text-center RHS-feedback-parent">
										<?php
										if($Feedback == 000){
											?>
											<div class="RHS-feedback-container success">
											Request Sent!, want to send another ? or see our other hacking services						
											</div><br/>
											<a href="../services" class="btn btn-primary">See other services</a>
											<?php
										}else if($Feedback == 101){
											?>
											<div class="RHS-feedback-container failed">
											Request not sent! You need to agree to terms of service
											</div>
											<?php
										}
										else if($Feedback == 102){
											?>
											<div class="RHS-feedback-container failed">
											Request not sent! Provide a valid email address
											</div>
											<?php
										}
										else if($Feedback == 103){
											?>
											<div class="RHS-feedback-container failed">
											Description cannot be empty! Tell us what you need
											</div>
											<?php
										}
										else if($Feedback == 104){
											?>
											<div class="RHS-feedback-container failed">
											Task description should be atleast 20 characters
											</div>
											<?php
										}
										else if($Feedback == 999){
											?>
											<div class="RHS-feedback-container failed">
											Ooops! An error occured
											</div>
											<?php
										}
										?>
										</div>
										<?php
									}
									?>
									<form action="<?php $_PHP_SELF ?>" method="POST">
										<p class="help-block"> Fields with <span class="asterik">*</span> are necessary</p>
										<div class="form-group">
											<label for="client_email">Your Email <span class="asterik">*</span></label>
											<p class="help-block">Your email address will not be made public, it is solely for communition between you and ProtonHacker Team</p>
											<input name="client_email" type="email" class="form-control" placeholder="example@domain.com" value="<?php echo (isset($_POST['client_email']) ? $_POST['client_email'] : "")?>" style="padding:20px 10px" required>
										</div>
										
										<div class="form-group">
											<label for="client_email"><?php echo (isset($ware) ? "Ware Description": "Hacking Description") ?> <span class="asterik">*</span></label>
											<p class="help-block"> <?php echo (isset($ware) ? "Explain in detail what you want" : "Please explain your hacking task in full detail") ?></p>
											<textarea class="form-control" name="task_description" rows="5" placeholder="<?php echo (isset($ware) ? "Give full details of what you need..." : "Explain your hacking task in details...") ?>"  required><?php echo (isset($_POST['task_description']) ? $_POST['task_description'] : "") ?></textarea>
										</div>
										
										<div class="cust-checkbox">
											<label style="font-weight:normal;cursor:pointer">
												<input name="agreement" type="checkbox" value="Agreed" <?php echo (isset($_POST['agreement']) ? 'checked' : "") ?> > I have read, understood and agreed to <a href="../terms"> ProtonHackers Terms of Service</a>
											</label>
										</div>
										
										<div class="text-center">
												<input type="submit" name="submit_request" value="Submit Request" class="btn btn-lg btn-primary">
										</div>
										
									</form>
								</div>
							</div>
						</div>
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
