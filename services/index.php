<?php
require('../resources/mato/lib/php/param.php')
?>
<!DOCTYPE html>
<html>
	<head>
	<meta name="description" content="The Best Hacking Service Site For You. Hacking could be the most wanted task with the smallest help. This time, the ProtonHacker Team will help you hack anything. See the list of our services and request a hacking service today!">
	<meta name="keywords" content="Hack,How to, How to hack,Facebook,Twitter,Telegram,Cheating,Social Media,Hacker,Hackers,SnapChat,Google,hacking services, need a hacker,DDos, persistent attack, database hacking, exploit toolkit, malware,Phone Hacking, Phones">
	
	<meta name="copyright"content="ProtonHacker Team">
	<meta name="language" content="En">	
	<meta name="reply-to" content="hacker@protonhacker.com">
	<meta name="url" content="https://www.protonhacker.com">
	<meta name="identifier-URL" content="https://www.protonhacker.com">
	<meta name="image" content="https://protonhacker.com/resources/images/logos/protonhacker-3d.png"/>
	<meta name="og:image" content="https://protonhacker.com/resources/images/logos/protonhacker-3d.png"/>

		<?php
			$pagetitle = 'Services';
			$ref="";
			require('../resources/global/meta-head.php');
			?>
			<style>
			.front-wordings{
			    padding: 100px 10px;
				background: grey url('../resources/images/gif/networks-penetration.gif');
			} 
			.service-description-container {
				background-color: rgba(255, 255, 255, 0.9);
			}
			.category-head{
				padding: 5px 0px;
			}
			.category-head.premium{
				border-bottom: 1px solid #000;
			}
			.category-head.pro,.category-head.sales{
				border-bottom: 1px solid #fff;
			}
			
			.premium-services-container{
				background-color: rgba(255, 255, 255, 0.9);
			}
			.pro-services-container{
				background-color: rgba(0,0,0,0.9);
				color:#fff;
			}
			.sales-container{
			background-color: rgba(0,0,70,0.9);
				color:#fff;			
				}
			.request-container{
				background-color: #fff;
			}
			.service-container,.sale-container{
				margin:10px 50px;
				padding: 10px 0px;
				line-height: 50px;
			}

			img.service-image{
				width:150px;
				height:150px;
			}
			.service-detail{
			    text-align:left;
			}
			.service-detail>h2{
				font-size: 20px;
			}
			.price-tag{
				font-family: Georgia;
			}
			.more-info-button,.request-button{
				padding:10px 15px;
				border-radius:5px;
				white-space: nowrap;
			}

			.more-info-button.premium,.request-button.premium{
				background-color:rgba(0,0,0,0.8);
				color:#fff;
			}	
			
			.more-info-button.pro,.request-button.pro{
				background-color: #f7f7f7;
				color:rgba(0,0,0,0.8);
			}
			.more-info-button.sale,.request-button.sale{
				background-color: #fff;
				color:rgba(0,0,0,0.8);
			}
			.more-info-button:hover,.request-button:hover{
				text-decoration: none;
			}
			.more-info-button.premium:hover,.request-button.premium:hover{
				background-color:#fff;
				color:rgba(0,0,0,1);
				border: 1px solid rgba(0,0,100,0.9);
			}
			.more-info-button.pro:hover,.request-button.pro:hover{
				background-color:rgba(0,0,100,0.9);
				color:#fff;
				border: 1px solid #fff;
			}
			.more-info-button.sale:hover,.request-button.sale:hover{
				background-color:#000;
				color:#fff;
				border: 1px solid #fff;
			}
			@media all and (max-width: 768px){
			    .front-wordings{
			     padding: 150px 10px;
			    } 
			    .content-padding{
			        padding-right:0px;
			        padding-left: 0px;
			    }
			    	.service-detail{
			    text-align:center;
		    	}
			}
			</style>
		</head>
		<body class="bubble-bg">
			<?php
			require('../resources/global/header.php');
			$hack ="";
				if(isset($_GET['category']) && $_GET['category'] == 'services' && isset($_GET['hack'])){
					$c = $_GET['category'];
					$h = $_GET['hack'];
					switch($h){
						case 'mobile-phone':
						$hack = "Mobile Phone Hacking";
						$img = "../resources/images/services/mobile-phone.png";
						$requestLink = '../request/?category=service&hack=mobile-phone';
						break;
						case 'facebook':
						$hack = "Facebook Hacking";
						$img = "../resources/images/services/facebook.png";
						$requestLink = '../request/?category=service&hack=facebook';
						break;
						case 'instagram':
						$hack = "Instagram Hacking";
						$img = "../resources/images/services/instagram.png";
						$requestLink = '../request/?category=service&hack=instagram';
						break;
						case 'twitter':
						$hack = "Twitter Hacking";
						$img = "../resources/images/services/twitter.png";
						$requestLink = '../request/?category=service&hack=twitter';
						break;
						case 'snapchat':
						$hack = "Snapchat Hacking";
						$img = "../resources/images/services/snapchat.png";
						$requestLink = '../request/?category=service&hack=snapchat';
						break;
						case 'whatsapp':
						$hack = "WhatsApp Hacking";
						$img = "../resources/images/services/whatsapp.png";
						$requestLink = '../request/?category=service&hack=whatsapp';
						break;
						case 'google':
						$hack = "Google Account Hacking";
						$img = "../resources/images/services/google.png";
						$requestLink = '../request/?category=service&hack=google';
						break;
						case 'grade':
						$hack = "Grade Hacking";
						$img = "../resources/images/services/grade.png";
						$requestLink = '../request/?category=service&hack=grade';
						break;
						case 'ddos':
						$hack = "DDos Hacking";
						$img = "../resources/images/services/DDoS.png";
						$requestLink = '../request/?category=service&hack=ddos';
						break;
						case 'persistent-attack':
						$hack = "Advanced Persistent Attack";
						$img = "../resources/images/services/persistent-attack.png";
						$requestLink = '../request/?category=service&hack=persistent-attack';
						break;
						case 'spam-and-flooding':
						$hack = "Spam and Flooding";
						$img = "../resources/images/services/spam-and-flooding.png";
						$requestLink = '../request/?category=service&hack=spam-and-flooding';
						break;
						case 'website':
						$hack = "Website Hacking";
						$img = "../resources/images/services/website.png";
						$requestLink = '../request/?category=service&hack=website';
						break;
						case 'database':
						$hack = "Database Hacking";
						$img = "../resources/images/services/database-hacking.png";
						$requestLink = '../request/?category=service&hack=database';
						break;
						case 'source-code-writing':
						$hack = "Source Code Writing Service";
						$img = "../resources/images/services/source-code-writing.png";
						$requestLink = '../request/?category=service&hack=source-code-writing';
						break;
						case 'blackhat-training':
						$hack = "Black Hat Training";
						$img = "../resources/images/services/blackhat-training.png";
						$requestLink = '../request/?category=service&hack=blackhat-training';
						break;
					}
				}else if(isset($_GET['category']) && $_GET['category'] == 'requests' && isset($_GET['ware'])){
						$c = $_GET['category'];
						$w = $_GET['ware'];
						
						switch($w){
						case 'malware':
						$hack = "Malware Sales";
						$img = "../resources/images/services/malware-sales.png";
						$requestLink = '../request/?category=requests&hack=malware-sales';
						break;
						case 'phishing-website':
						$hack = "Phishing Website Sales";
						$img = "../resources/images/services/phishing-website-sales.png";
						$requestLink = '../request/?category=requests&ware=phishing-website';
						break;
						case 'traffic':
						$hack = "Traffic Sales";
						$img = "../resources/images/services/traffic-sales.png";
						$requestLink = '../request/?category=requests&ware=traffic';
						break;
						case 'exploit-toolkits':
						$hack = "Exploit ToolKit Sales";
						$img = "../resources/images/services/exploit-toolkits-sales.png";
						$requestLink = '../request/?category=requests&hack=exploit-toolkits';
						break;
					}
					
				}
			?>
		<div class="container-fluid">
			<div class="row">
				
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 section-1">
					<div class="front-wordings text-center">
						<h1 class="white"><?php 
						if(isset($hack) && $hack !=''){
							?>
							<img src="<?php echo $img?>" alt="<?php echo "ProtonHacker $hack"?>" class="service-image"><br/> <?php echo $hack ?>
							<?php
						}
						else{
							echo 'Want Hacking? NO WORRIES!';
						}?>
						</h1>
					</div>
				</div>
				<?php
				if($hack != ''){
					?>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="service-description-container content-padding">
						<h3>Things you need to know about <?php echo $hack ?></h3>
						<h4>TERMS OF SERVICE</h4>
						<ol>
							<li>Our service price will be communicated to you when you send a mail to <a href="mailto: hacker@protonhacker.com">hacker@protonhacker.com</a> to get help.
								<?php if(isset($h) && $h == 'grade'){
									?>
								<ol type="a">
									<li>The price allow to change up to 5 grades</li>
									<li>If you want to change more, it has a cost per extra grade. The price is per student</li>
									<li>If you want to order the service for 2 or more students, you will gain a discount of 10%</li>
									<li>If you order our service for more than one student, you must pay all at once</li>
									<li>If you want to pay individually, then place your order in this same way, and you can't apply for discount mentioned in <strong>b</strong> above</li>
									<li>Our service is limited to change any grade that you already have done. If you want to add a grade that you have never done, or delete someone that you have done, has an extra price and you must send us a mail to <a href="mailto: hacker@protonhacker.com">hacker@protonhacker.com</a> and ask for it.</li>
									<li>Effectiveness is 100%. There is no option to fail. We can also guarantee a totally secure and discreet service. We will not leave any trace</li>
									<li> Although our service is secure, you must be cautious. Don't expect to be the best student with our service, just change the grades you really need, no more</li>
								</ol>
								<?php
								}
								?>
							</li>
							
							<li> Our most preferred Payment method is Western Union and  Bitcoin. If you don't know it, just send us a mail to <a href="mailto: hacker@protonhacker.com">hacker@protonhacker.com</a> to get help. You can pay in your local currency. The price in dollars is only a reference. If you want to know the price in your local currency, just send us a mail to <a href="mailto: hacker@protonhacker.com">hacker@protonhacker.com</a> to get help</li>
							<li>To pay through any other payment methods just send us a mail to <a href="mailto: hacker@protonhacker.com">hacker@protonhacker.com</a> to get help. Please understand!</li>
							<li>We will delay from 3 to 12 hours to get access into the system, depending of the queued orders before yours. There is available an Express Service with an extra cost. It will grant you priority over other orders and reduce the waiting time to the half. Therefore if you need an express service, please indicate it in the mail you would be sending us at <a href="mailto: hacker@protonhacker.com">hacker@protonhacker.com</a></li>
							<li>Once we access into the system, we will make all the changes requested by you, and take one (or more if necessary) screen capture in which you will see that we have got access. Just send us a mail to <a href="mailto: hacker@protonhacker.com">hacker@protonhacker.com</a> to get help</li>
							<li>Payment must be done in up to 24 hours from request, just send us a mail to <a href="mailto: hacker@protonhacker.com">hacker@protonhacker.com</a> to get help</li>
							<li>If you don't have the money yet, or if you are waiting to receive it, <strong style="color: red">DO NOT</strong> place any order until have it in your hands</li>
							<li>There is no reason, calamity or misfortune to justify a delay</li>
							<li>In case of default, you must pay a fine for each delayed day</li>
							<li>We accept intermediaries. It means that if you want to be an intermediary between us and another person, it is possible; however, you must understand that our treat is with you, and even if you are just an intermediary, you are the only responsible to fulfill all Rules and Procedures, and to pay for our service. If you don't want to be absolutely responsible, just don't accept to be intermediary</li>
							<li>Once you place an order, we don't accept any modification or cancellation. If you are not sure about our service, <strong style="color: red">DO NOT</strong> order anything yet. If you insist, just send us a mail to <a href="mailto: hacker@protonhacker.com">hacker@protonhacker.com</a> to get help</li>
							<li>Our Rules and Procedures are not flexible If you want to place an order with us, you must accept all without modify, add, or remove anything</li> 
							<li>Remember that you are not committed with us yet, but if you place an order, we will have a contract, and you must fulfill it mandatorily</li>
							<li>Not to read or misunderstand the rules is not justification for not fulfill them</li>
						</ol>
						
						<h4>HOW TO PLACE AN ORDER?</h4>
						<p>Have you read our <strong>Terms of Service</strong>? Do you accept it at all? If yes, you can do it in 2 different ways:</p>
						<ul style="list-style-type: square">
							<li>By sending a message to our email address which is: <a href="mailto: hacker@protonhacker.com">hacker@protonhacker.com</a> and telling us you have read the Rules and Procedures through our website and also making the request of the hacking service you want via email</li>
							<li>Or... by clicking on the REQUEST SERVICE button below to place an online order</li>
						</ul>

	
						<div class="text-center">
						<a href="<?php echo $requestLink	?>" class="btn btn-lg btn-default" style="background-color: rgba(0,0,100,1); color: #fff; text-transform: uppercase">REQUEST <?php echo $hack ?></a>
						<br/></br/>
						<a href="../services" class="btn btn-primary">see other hacking services</a>
						</div>
						
					</div>
				</div>
					<?php
				}
				else{
				?>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 section-2">
					<div class="section-inner section-2-inner">							
							<div class="all-services-container">
									<div class="row">
									<!--PREMIUM-->
									
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 section-1-1 premium-services-container">
											<div class="section-inner">
												<h2 class="category-head premium text-center" style="font-weight:bold">PREMIUM SERVICES</h2>
												
												<div class="row">
													<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
														<div class="service-container premium section-1-1-1">
															<div class="row">
																<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 section-1-1-1-1">
																	<div class="section-inner section-1-1-1-1-inner text-center">
																		<img class="service-image" src="../resources/images/services/phone.png" alt="ProtonHacker Mobile Phone Hacking Service"/>
																	</div>
																</div>
																<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 section-1-1-1-2">
																	<div class="section-inner section-1-1-1-2-inner service-detail">
																		<h2>Mobile Phone Hacking</h2>
																		<div>
																			<!--<span class="price-tag"><span class="glyphicon glyphicon-tag"></span>  $1,000 - $10,000</span>-->
																		</div>
																		<div>
																			<a href="?category=services&hack=mobile-phone" class="more-info-button premium">More Info</a>
																			<a href="../request/?category=services&hack=mobile-phone" class="request-button premium">Request Service</a>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													
													<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
														<div class="service-container premium section-1-1-2">
															<div class="row">
																<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 section-1-1-2-1">
																	<div class="section-inner section-1-1-2-1-inner text-center">
																		<img class="service-image" src="../resources/images/services/facebook.png" alt="ProtonHacker Facebook Hacking Service"/>
																	</div>
																</div>
																
																<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 section-1-1-2-2">
																	<div class="section-inner section-1-1-2-2-inner service-detail">
																		<h2>Facebook Hacking</h2>
																		<div>
																			<!--<span class="price-tag"><span class="glyphicon glyphicon-tag"></span>  $5,000 - $20,000</span>-->
																		</div>
																		<div>
																			<a href="?category=services&hack=facebook" class="more-info-button premium">More Info</a>
																			<a href="../request/?category=services&hack=facebook" class="request-button premium">Request Service</a>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													
													<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
														<div class="service-container premium section-1-1-3">
															<div class="row">
																<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 section-1-1-3-1">
																	<div class="section-inner section-1-1-3-1-inner text-center">
																		<img class="service-image" src="../resources/images/services/instagram.png" alt="ProtonHacker Instagram Hacking Service"/>
																	</div>
																</div>
																
																<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 section-1-1-3-2">
																	<div class="section-inner section-1-1-3-2-inner service-detail">
																		<h2>Instagram Hacking</h2>
																		<div>
																			<!--<span class="price-tag"><span class="glyphicon glyphicon-tag"></span>  $5,000 - $25,000</span>-->
																		</div>
																		<div>
																			<a href="?category=services&hack=instagram" class="more-info-button premium">More Info</a>
																			<a href="../request/?category=services&hack=instagram" class="request-button premium">Request Service</a>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													
													<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
														<div class="service-container premium section-1-1-4">
															<div class="row">
																<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 section-1-1-4-1">
																	<div class="section-inner section-1-1-4-1-inner text-center">
																		<img class="service-image" src="../resources/images/services/twitter.png" alt="ProtonHacker Twitter Hacking Service"/>
																	</div>
																</div>
																
																<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 section-1-1-4-2">
																	<div class="section-inner section-1-1-4-2-inner service-detail">
																		<h2>Twitter Hacking</h2>
																		<div>
																			<!--<span class="price-tag"><span class="glyphicon glyphicon-tag"></span>  $5,000 - $25,000</span>-->
																		</div>
																		<div>
																			<a href="?category=services&hack=twitter" class="more-info-button premium">More Info</a>
																			<a href="../request/?category=services&hack=twitter" class="request-button premium">Request Service</a>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													
													<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">												
														<div class="service-container premium section-1-1-5">
															<div class="row">
																<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 section-1-1-5-1">
																	<div class="section-inner section-1-1-5-1-inner text-center">
																		<img class="service-image" src="../resources/images/services/snapchat.png" alt="ProtonHacker Snapchat Hacking Service"/>
																	</div>
																</div>
																
																<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 section-1-1-5-2">
																	<div class="section-inner section-1-1-5-2-inner service-detail">
																		<h2>Snapchat Hacking</h2>
																		<div>
																			<!--<span class="price-tag"><span class="glyphicon glyphicon-tag"></span>  $5,000 - $25,000</span>-->
																		</div>
																		<div>
																			<a href="?category=services&hack=snapchat" class="more-info-button premium">More Info</a>
																			<a href="../request/?category=services&hack=snapchat" class="request-button premium">Request Service</a>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													
													<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
														<div class="service-container premium section-1-1-6">
															<div class="row">
																<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 section-1-1-6-1">
																	<div class="section-inner section-1-1-6-1-inner text-center">
																		<img class="service-image" src="../resources/images/services/whatsapp.png" alt="ProtonHacker WhatsApp Hacking Service"/>
																	</div>
																</div>
																
																<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 section-1-1-6-2">
																	<div class="section-inner section-1-1-6-2-inner service-detail">
																		<h2>WhatsApp Hacking</h2>
																		<div>
																			<!--<span class="price-tag"><span class="glyphicon glyphicon-tag"></span>  $5,000 - $18,000</span>-->
																		</div>
																		<div>
																			<a href="?category=services&hack=whatsapp" class="more-info-button premium">More Info</a>
																			<a href="../request/?category=services&hack=whatsapp" class="request-button premium">Request Service</a>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													
													<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
														<div class="service-container premium section-1-1-7">
															<div class="row">
																<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 section-1-1-7-1">
																	<div class="section-inner section-1-1-7-1-inner text-center">
																		<img class="service-image" src="../resources/images/services/google.png" alt="ProtonHacker Google Account Hacking Service"/>
																	</div>
																</div>
																
																<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 section-1-1-7-2">
																	<div class="section-inner section-1-1-7-2-inner service-detail">
																		<h2>Google Account Hacking</h2>
																		<div>
																			<!--<span class="price-tag"><span class="glyphicon glyphicon-tag"></span>  $10,000 - $30,000</span>-->
																		</div>
																		<div>
																			<a href="?category=services&hack=google" class="more-info-button premium">More Info</a>
																			<a href="../request/?category=services&hack=google" class="request-button premium">Request Service</a>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													
													<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
														<div class="service-container premium last section-1-1-8">
															<div class="row">
																<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 section-1-1-8-1">
																	<div class="section-inner section-1-1-8-1-inner text-center">
																		<img class="service-image" src="../resources/images/services/grade.png" alt="ProtonHacker Grade Hacking Service"/>
																	</div>
																</div>
																
																<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 section-1-1-8-2">
																	<div class="section-inner section-1-1-8-2-inner service-detail">
																		<h2>Grade Hacking</h2>
																		<div>
																			<!--<span class="price-tag"><span class="glyphicon glyphicon-tag"></span>  $2,000 - $15,000</span>-->
																		</div>
																		<div>
																			<a href="?category=services&hack=grade" class="more-info-button premium">More Info</a>
																			<a href="../request/?category=services&hack=grade" class="request-button premium">Request Service</a>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div><!--Section 1-1 Ends-->
										
										<!--PRO-->
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 section-1-2 pro-services-container">
											<div class="section-inner">
												<h2  class="category-head pro text-center" style="font-weight:bold">PRO SERVICES</h2>
												<div class="row">
													<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
														<div class="service-container pro section-1-2-1">
																<div class="row">
																	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 section-1-2-1-1">
																		<div class="section-inner section-1-2-1-1-inner text-center">
																			<img class="service-image" src="../resources/images/services/DDoS.png" alt="ProtonHacker DDoS Hacking Service"/>
																		</div>
																	</div>
																	
																	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 section-1-2-1-2">
																		<div class="section-inner section-1-2-1-2-inner service-detail">
																			<h2>DDoS Service</h2>
																			<div>
																				<!--<span class="price-tag"><span class="glyphicon glyphicon-tag"></span>  $20,000 - $45,000</span>-->
																			</div>
																			<div>
																				<a href="?category=services&hack=ddos" class="more-info-button pro">More Info</a>
																				<a href="../request/?category=services&hack=ddos" class="request-button pro">Request Service</a>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														
														<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
															<div class="service-container pro section-1-2-2">
																<div class="row">
																	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 section-1-2-2-1">
																		<div class="section-inner section-1-2-2-1-inner text-center">
																			<img class="service-image" src="../resources/images/services/persistent-attack.png" alt="ProtonHacker Persistent Attack Service"/>
																		</div>
																	</div>
																	
																	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 section-1-2-2-2">
																		<div class="section-inner section-1-2-2-2-inner service-detail">
																			<h2>Advanced Persistent Attack Services</h2>
																			<div>
																				<!--<span class="price-tag"><span class="glyphicon glyphicon-tag"></span>  $20,000 - $50,000</span>-->
																			</div>
																			<div>
																				<a href="?category=services&hack=persistent-attack" class="more-info-button pro">More Info</a>
																				<a href="../request/?category=services&hack=persistent-attack" class="request-button pro">Request Service</a>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														
														<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
															<div class="service-container pro section-1-2-3">
																<div class="row">
																	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 section-1-2-3-1">
																		<div class="section-inner section-1-2-3-1-inner text-center">
																			<img class="service-image" src="../resources/images/services/spam-and-flooding.png" alt="ProtonHacker Spam and Flooding Service"/>
																		</div>
																	</div>
																	
																	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 section-1-2-3-2">
																		<div class="section-inner section-1-2-3-2-inner service-detail">
																			<h2>Spam and Flooding Services</h2>
																			<div>
																				<!--<span class="price-tag"><span class="glyphicon glyphicon-tag"></span>  $15,000 - $45,000</span>-->
																			</div>
																			<div>
																				<a href="?category=services&hack=spam-and-flooding" class="more-info-button pro">More Info</a>
																				<a href="../request/?category=services&hack=spam-and-flooding" class="request-button pro">Request Service</a>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														
														<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
															<div class="service-container pro section-1-2-4">
																<div class="row">
																	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 section-1-2-4-1">
																		<div class="section-inner section-1-2-4-1-inner text-center">
																			<img class="service-image" src="../resources/images/services/website-hacking.png" alt="ProtonHacker Website Hacking Service"/>
																		</div>
																	</div>
																	
																	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 section-1-2-4-2">
																		<div class="section-inner section-1-2-4-2-inner service-detail">
																			<h2>Website Hacking Services</h2>
																			<div>
																				<!--<span class="price-tag"><span class="glyphicon glyphicon-tag"></span>  $25,000 - $50,000</span>-->
																			</div>
																			<div>
																				<a href="?category=services&hack=website" class="more-info-button pro">More Info</a>
																				<a href="../request/?category=services&hack=website" class="request-button pro">Request Service</a>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
																
														<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
															<div class="service-container pro section-1-2-5">
																<div class="row">
																	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 section-1-2-5-1">
																		<div class="section-inner section-1-2-5-1-inner text-center">
																			<img class="service-image" src="../resources/images/services/database-hacking.png" alt="ProtonHacker Database Hacking Service"/>
																		</div>
																	</div>
																	
																	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 section-1-2-5-2">
																		<div class="section-inner section-1-2-5-2-inner service-detail">
																			<h2>Database Hacking Services</h2>
																			<div>
																				<!--<span class="price-tag"><span class="glyphicon glyphicon-tag"></span>  $30,000 - $50,000</span>-->
																			</div>
																			<div>
																				<a href="?category=services&hack=database" class="more-info-button pro">More Info</a>
																				<a href="../request/?category=services&hack=database" class="request-button pro">Request Service</a>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														
														<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
															<div class="service-container pro section-1-2-6">
																<div class="row">
																	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 section-1-2-6-1">
																		<div class="section-inner section-1-12-6-1-inner text-center">
																			<img class="service-image" src="../resources/images/services/source-code-writing.png" alt="ProtonHacker Source Code Writing Service"/>
																		</div>
																	</div>
																	
																	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 section-1-2-6-2">
																		<div class="section-inner section-1-2-6-2-inner service-detail">
																			<h2>Source-Code Writing Services</h2>
																			<div>
																				<!--<span class="price-tag"><span class="glyphicon glyphicon-tag"></span>  $20,000 - $50,000</span>-->
																			</div>
																			<div>
																				<a href="?category=services&hack=source-code-writing" class="more-info-button pro">More Info</a>
																				<a href="../request/?category=services&hack=source-code-writing" class="request-button pro">Request Service</a>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														
														<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
															<div class="service-container pro last section-1-2-7">
																<div class="row">
																	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 section-1-2-7-1">
																		<div class="section-inner section-1-2-7-1-inner text-center">
																			<img class="service-image" src="../resources/images/services/blackhat-training.png" alt="ProtonHacker Black Hat Training"/>
																		</div>
																	</div>
																	
																	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 section-1-2-7-2">
																		<div class="section-inner section-1-2-7-1-inner service-detail">
																			<h2>Black Hat Training</h2>
																			<div>
																				<!--<span class="price-tag"><span class="glyphicon glyphicon-tag"></span>  $25,000 - $50,000</span>-->
																			</div>
																			<div>
																				<a href="?category=services&hack=blackhat-training" class="more-info-button pro">More Info</a>
																				<a href="../request/?category=services&hack=blackhat-training" class="request-button pro">Request Service</a>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
												</div>
											</div>
										</div><!--Section 1-2 ends-->
										
															<!--SALES-->
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 section-1-3 sales-container">
											<div class="section-inner">
												<h2  class="category-head sales text-center" style="font-weight:bold">SALES</h2>
												<div class="row">
													<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
														<div class="sale-container section-1-3-1">
															<div class="row">
																<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 section-1-3-1-1">
																	<div class="section-inner section-1-1-1-inner text-center">
																		<img class="service-image" src="../resources/images/services/malware-sales.png" alt="ProtonHacker Malware Sales"/>
																	</div>
																</div>
																
																<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 section-1-3-1-2">
																	<div class="section-inner section-1-1-2-inner service-detail">
																		<h2>Malware Sales</h2>
																		<div>
																			<!--<span class="price-tag"><span class="glyphicon glyphicon-tag"></span>  $20,000 - $35,000</span>-->
																		</div>
																		<div>
																			<a href="?category=requests&ware=malware" class="more-info-button sale">More Info</a>
																			<a href="../request/?category=requests&ware=malware" class="request-button sale">Place Request</a>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													
													<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
														<div class="sale-container section-1-3-2">
															<div class="row">
																<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 section-1-3-2-1">
																	<div class="section-inner section-1-1-1-inner text-center">
																		<img class="service-image" src="../resources/images/services/phishing-website-sales.png" alt="ProtonHacker Phishing Website Sales"/>
																	</div>
																</div>
																
																<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 section-1-3-2-2">
																	<div class="section-inner section-1-1-2-inner service-detail">
																		<h2>Phishing Website Sales</h2>
																		<div>
																			<!--<span class="price-tag"><span class="glyphicon glyphicon-tag"></span>  $20,000 - $50,000</span>-->
																		</div>
																		<div>
																			<a href="?category=requests&ware=phishing-website" class="more-info-button sale">More Info</a>
																			<a href="../request/?category=requests&ware=phishing-website" class="request-button sale">Place Request</a>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													
													<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
														<div class="sale-container section-1-3-3">
															<div class="row">
																<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 section-1-3-3-1">
																	<div class="section-inner section-1-1-1-inner text-center">
																		<img class="service-image" src="../resources/images/services/traffic-sales.png" alt="ProtonHacker Traffic Sales"/>
																	</div>
																</div>
																
																<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 section-1-3-3-2">
																	<div class="section-inner section-1-1-2-inner service-detail">
																		<h2>Traffic Sales</h2>
																		<div>
																			<!--<span class="price-tag"><span class="glyphicon glyphicon-tag"></span>  $20,000 - $50,000</span>-->
																		</div>
																		<div>
																			<a href="?category=requests&ware=traffic" class="more-info-button sale">More Info</a>
																			<a href="../request/?category=requests&ware=traffic" class="request-button sale">Place Request</a>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													
													<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
														<div class="sale-container last section-1-3-4">
															<div class="row">
																<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 section-1-3-4-1">
																	<div class="section-inner section-1-1-1-inner text-center">
																		<img class="service-image" src="../resources/images/services/exploit-toolkits-sales.png" alt="ProtonHacker Exploit ToolKit Sales"/>
																	</div>
																</div>
																
																<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 section-1-3-4-2">
																	<div class="section-inner section-1-1-2-inner service-detail">
																		<h2>Exploit ToolKit Sales</h2>
																		<div>
																			<!--<span class="price-tag"><span class="glyphicon glyphicon-tag"></span>  $25,000 - $45,000</span>-->
																		</div>
																		<div>
																			<a href="?category=requests&ware=exploit-toolkits" class="more-info-button sale">More Info</a>
																			<a href="../request/?category=requests&ware=exploit-toolkits" class="request-button sale">Place Request</a>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div><!--Section 1-3 Ends-->
										
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 section-1-4 request-container">
											<div class="section-inner text-center" style="padding: 20px 0px">
												<h1 class="section-head ">Request a Hacking Service</h1>
												<p>Need a hacking service that is not listed above? Make a request now, our proffesional will get back to you ASAP!</p>
												<a href="../request/?category=services&hack=new" class="btn btn-primary btn-primary">SUBMIT A REQUEST NOW</a>
											</div>
										</div>
									</div>
							</div>
					</div>
				</div>
				<?php
					}
					?>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 section-3">
							<?php
								require('../resources/global/footer.php');
							?>
				</div>
				
			</div>
		</div>
	</body>
</html>