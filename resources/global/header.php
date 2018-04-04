<nav>
	<div class="text-center" id="top-header-contacts">
		<style>
		.contact-phone-address,.contact-mail-address{
			margin-left: 5px;
		}
		a.social-media-links,a.contact-phone-address,a.contact-mail-address,a.contact-form-link{
			color: #fff;
		}
		a.social-media-links{
			font-size: 25px;
			margin:0px 10px;
		}
		
		a.social-media-links:hover,.contact-phone-address:hover,.contact-mail-address:hover,a.contact-form-link:hover{
			text-decoration: none;
			color: #fff;
			opacity: 0.7;
		}
		
		</style>
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="text-center">
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
			
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="text-center">
					<p style="color:#fff">For info. &amp services: 
						<a href="mailto:hacker@protonhacker.com" class="contact-mail-address" title="contact ProtonHacker via email">hacker@protonhacker.com</a>
					</p>
				</div>
			</div>
			
		</div>
		
		<div class="text-center">
		</div>
		
		
	</div>
	
	<div id="main-menu">
		<div class="row">
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-6 logo-holder">
						<div id="logo-holder-inner" style="padding-left:15px">
							<img src="<?php echo $root ?>/resources/images/logos/protonhacker.png" alt="ProtonHacker" width="40px" height="auto" class="logo" style="background-image: none;" >
						</div>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-6 mobile-menu-toggler" >
						<div id="mobile-menu-toggler">
							<span class="menu-line"></span>
							<span class="menu-line"></span>
							<span class="menu-line"></span>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12" id="menu-container">
				<ul class="row">
					<a href="<?php echo $root ?>" class="menu-link">
						<li class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
							Home
						</li>
					</a>
					
					<a href="<?php echo $root.'/services'?>" class="menu-link">
						<li class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
							Hacking Services
						</li>
					</a>
					
					<a href="<?php echo $root.'/request'?>" class="menu-link">
						<li class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
							Hire Us
						</li>
					</a>
					
					<!--<a href="<?php echo $root.'/about'?>" class="menu-link">
						<li class="col-lg-2 col-md-2 col-sm-2 col-xs-12 ">
							About Us
						</li>
					</a>-->
					
					<a href="<?php echo $root.'/terms'?>" class="menu-link">
						<li class="col-lg-3 col-md-3 col-sm-3 col-xs-12 ">
							Terms of Service
						</li>
					</a>
				</ul>
			</div>
			
		</div>
	</div>
	<div class="row">

	</div>
</nav>
<style>
nav{
	position:fixed;
	width:100%;
	z-index:1000;
	box-shadow:0px 30px 30px rgba(0,0,100,0.1);
	min-height:50px;
}
#top-header-contacts{
	padding-top: 5px;
	background-color:rgba(0,0,100,1);
	box-shadow: 0px 10px 10px rgba(0,0,0,0.3) inset;
}
#main-menu{
	background-color:rgba(0,0,0,0.5);
		padding:5px 0px;
}
.mobile-menu-toggler{
	display: none;
}

a.menu-link{
	color:#fff;
}
a.menu-link:hover{
	text-decoration: none;
	opacity: 0.5;
	font-weight: bold;
}

a.menu-link>li{
list-style-type:none;
text-align: center;
}

#mobile-menu-toggler{
cursor: pointer;
float:right;
margin-right: 10px;	
}
#mobile-menu-toggler>span.menu-line{
	display: block;
	height: 4px;
	width: 30px;
	margin: 5px;
	background-color: #fff;
}
@media all and (max-width: 768px){
	.mobile-menu-toggler{
	display: block;
	}
	#menu-container{
		display: none;
	}
	
	a.menu-link:hover{
	color: #fff;
	font-weight: normal;
	}
	a.menu-link{
			display: block;
			border-botom: 1px solid #fff;
	}
	a.menu-link>li{
			padding: 5px;
			font-size: 25px;
			font-weight:bold
			box-shadow:0px 2px 2px rgba(0,0,0,0.5);
	}
	a.menu-link>li:hover{
	background-color:grey;
}

}
</style>

<script>
menu_container = document.querySelector('#menu-container');
toggler = document.querySelector('#mobile-menu-toggler');
menu_lines = toggler.innerHTML;

function hideMenu(){
			hide('#menu-container');
			toggler.innerHTML = menu_lines;
}
function showMenu(){
			show('#menu-container');
		toggler.innerHTML = "<span style=\"font-size: 40px; color:#fff\">&times</span>";
}
	toggler.addEventListener('click', function(event){
	if(menu_container.style.display == 'none' || menu_container.style.display == ''){
		showMenu();
	}
	else if(menu_container.style.display == 'block'){
		hideMenu();
		}
	});

window.addEventListener('scroll',function(event){
		var scrollCheck = new windowScroll(window.pageYOffset);
	scrollCheck.onScrollUp(
	function(){
		show('#top-header-contacts');
		if(window.innerWidth <= 768){
			hide('#main-menu');
		}
		console.log("scrolling up..");
	}
	);
	scrollCheck.onScrollDown(
	function(){
		hide('#top-header-contacts');
		if(window.innerWidth <= 768){
			show('#main-menu');
		}
		console.log("scrolling down..");
	}
	);
	
	if(window.pageYOffset <= 500){
	var opacity = window.pageYOffset/500;
	if(opacity <= 0.5){
		opacity = 0.5;
	}
	document.querySelector('nav>#main-menu').style.backgroundColor = "rgba(0,0,0,"+opacity+")";
	}else{
	document.querySelector('nav>#main-menu').style.backgroundColor = "rgba(0,0,0,8)";
	}

});

window.addEventListener('resize',function(event){
	if(window.innerWidth > 768){
				show('#main-menu');
	}
	if(window.innerWidth > 768 && menu_container.style.display == 'none'){
		showMenu();
	}
	else{
		//hideMenu();
	}
});
</script>