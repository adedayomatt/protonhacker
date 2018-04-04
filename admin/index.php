<?php 
require('admin.php') ;
$admin = new admin();

/* This is to set password initially. It could be used to reset password to the argunent provided. Commenting it out will change the password to the argument provided. 

    $admin->setPassword('proton'); 
*/
$access = false;
$passwordChanged = false;
$loggedOut = false;


if($admin->verifyAdmin()){
		$access = true;
		}
		
if(isset($_POST['login'])){
	if($admin->login($_POST['pass'])){
		$access = true;
	}
}

if(isset($_POST['logout'])){
	$admin->logout();
	$loggedOut = true;
}

else if(isset($_POST['changePassword'])){
	if($admin->changePassword($_POST['oldPass'],$_POST['newPass01'],$_POST['newPass02'])){
		$passwordChanged = true;
	}
}

?>
<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta name="theme-color" content="rgba(0,0,0,0.5)">
		<meta name="description" content="You need authorization to access ProtonHacker Admin Panel!">
		<meta name="image" content="https://protonhacker.com/resources/images/logos/protonhacker-3d.png"/>
		<meta name="og:image" content="https://protonhacker.com/resources/images/logos/protonhacker-3d.png"/>
		<title>ProtonHacker | Admin</title>
		<link rel="shortcut icon" type="image/png" href="../resources/images/logos/protonhacker-3d.png"/>
		<link href="../resources/mato/tools/bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
		<link href="admin.css" type="text/css" rel="stylesheet" />
		
		<script  type="text/javascript" language="javascript" src="<?php echo $root.'/resources/mato/tools/fontawesome-free-5.0.9/svg-with-js/js/fontawesome-all.min.js' ?>"></script>
	</head>
	<body>
		<div class="container-fluid">

		<?php
		if($access == false || $passwordChanged == true || $loggedOut == true){//Require password when not logged in or when password is changed!
			?>
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			
				<div class="text-center login-container">
					<div class="animation blink">
					<?php 
					if($access == false){ ?>
						<h1 style="color: red">Access Denied!</h1>
					<?php }
					else if($passwordChanged == true){ ?>
						<h1 style="color: green">Password Changed!</h1>
					<?php }
					else if($loggedOut == true){ ?>
						<h1 style="color: red">Logged Out!</h1>
					<?php }
					?>
					</div>
					
					<form action="<?php $_PHP_SELF ?>" method="POST">
						<div class="text-center">
							<img src="../resources/images/logos/protonhacker-3d.png" width="300px" height="300px">
						</div>
						
						<div class="input-group">
							<span class="input-group-addon" id="lock"><i class="glyphicon glyphicon-lock"></i></span>
							<input type="password" name="pass" class="form-control" placeholder="Enter admin password" aria-describedby="lock" required>
						</div>
						<br/></br/>
						<input type="submit" name="login" value="GO!" class="btn btn-default btn-lg">
					</form>
				</div>
			</div>
		</div>
		
			<?php
		}
		else{ //If admin is verified
		?>
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="text-center">
					<img src="../resources/images/logos/protonhacker-3d.png" width="100px" height="100px">
				</div>
			</div>
			
			<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
				<div class="LHS">
					<div class="all-requests-container">
						<?php
							$allRequests = $admin->fetchRequests();
							$allRequestsCount = count($allRequests);
							?>
							<h2 style="padding: 10px">Total Requests Received: <?php echo $allRequestsCount ?></h2>
							<hr/>
							<?php
							if($allRequestsCount > 0){
								?>
								<table>
									<tr class="table-head">
										<td>Request id</td>
										<td>Client Email</td>
										<td>Task Description</td>
										<td>Date Requested</td>
									</tr>
								<?php
								$r = 0;
								$c = 1;
							while($r < $allRequestsCount) {
									?>
									<tr class="<?php echo ($c%2 == 0 ? 'even' : 'odd')?> request-row">
										<td class="id-cell"><?php echo $allRequests[$r]['r_id']?></td>
										<td class="email-cell"><a href="mailto: <?php echo $allRequests[$r]['email']?>"><?php echo $allRequests[$r]['email']?></a></td>
										<td class="descrption-cell"><?php echo $allRequests[$r]['description']?></td>
										<td class="date-cell"><?php echo $allRequests[$r]['date']?></td>
										<td class="timestamp-cell"><?php echo $admin->since($allRequests[$r]['timestamp']) ?></td>
									</tr>
							<?php
							$r++;$c++;
					}
							?>
							</table>
							<?php
							}else{
								?>
								<h3 class="text-center">No Request has been made yet</h3>
								<?php
							}
							?>
					</div>
				</div>
			</div>
			
			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
				<div class="RHS">
					<div  class="text-center" style="background-color: #fff; color: grey;  padding: 10px; border-radius: 3px">
						<p>WARNING: <br/>It is recommended NOT to save password with Google Smart Lock or any othe application in your browser, always decline when you are asked to save password!</p>
						<p>NOTE: <br/>Your login session will expire every 30 minutes after loggin in</p>
						<br/>						<br/>
						<form action="<?php $_PHP_SELF ?>" method="POST">
							<input type="submit" name="logout" value="LOG ME OUT NOW" class="btn btn-danger">
						</form>
					</div>
					<form action="<?php $_PHP_SELF ?>" method="POST">
						<h4 class="text-right" style="color: white">Change Password</h4>
						<?php echo ($passwordChangingReport != '' ? "<p style=\"color: red\">".$passwordChangingReport."</p>" : '')?>
						<div class="input-group">
							<span class="input-group-addon" id="old-password-lock"><i class="glyphicon glyphicon-lock"></i></span>
							<input type="password" name="oldPass" class="form-control" placeholder="Enter old password" aria-describedby="old-password-lock" required>
						</div>
						<br/>
						<div class="input-group">
							<span class="input-group-addon" id="new-password01-lock"><i class="glyphicon glyphicon-lock"></i></span>
							<input type="password" name="newPass01" class="form-control" placeholder="Enter new password" aria-describedby="new-password01-lock" required>
						</div>
						<br/>
						<div class="input-group">
							<span class="input-group-addon" id="new-password02-lock"><i class="glyphicon glyphicon-lock"></i></span>
							<input type="password" name="newPass02" class="form-control" placeholder="Repeat new password" aria-describedby="new-password02-lock" required>
						</div>
						<br/>
						<div class="text-right">
							<input type="submit" name="changePassword" value="Change Password" class="btn btn-default">
						</div>
					</form>
				</div>
			</div>
		</div>
		<?php
		}
		?>
		</div>
	</body>
</html>	
