<!DOCTYPE html>
<html>
<head>
	<title>SAP # Registration</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
</head>
<body>
<div class="container-fluid" style="background-image: url(img/cannotaccessbg.jpg);background-repeat: no-repeat;background-attachment: fixed;background-size: cover;">
	<div class="progress-area">
		<div class="rectangl_progress"></div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<form class="form-group" method="post" style="background: transparent;" action="<?php echo $_SERVER['PHP_SELF'];?>">
				<span class="input-group">
					<span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
					<input type="text" name="Name" placeholder="Full Name" autocomplete="off">
				</span><br>
				<span class="input-group">
					<span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
					<input type="email" name="Email" placeholder="Email Address" autocomplete="off">
				</span><br>
				<span class="input-group">
					<span class="input-group-addon"><i class="fa fa-key" aria-hidden="true"></i></span>
					<input type="password" name="password" placeholder="Password" autocomplete="off">
				</span><br>
				<span class="submit_btn">
					<input type="submit" name="register" value="Register">
				</span>
			</form>
		</div>
	</div>
</div>
<script type="text/javascript" src="js/jquery-3.1.1.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>