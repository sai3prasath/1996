<!DOCTYPE html>
<html>
<head>
	<title>SAP # AccountReset</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<link rel="stylesheet" type="text/css" href="css/fontawesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
</head>
<body>
<div class="container-fluid" style="background: url('img/register_bg.jpg');background-repeat: no-repeat;background-attachment: fixed;background-size: cover;width: 100%;height: 100%;position: fixed;">
	<div class="row">
		<div class="col-md-4 col-sm-4 col-xs-6">
		<div class="top-captions">
			<h2>Got Stuck ?</h2>
			<p style="margin-bottom: -5px">Don`t worry</p>
			<p>Pick any one of the options below to reset your password</p>
		</div>	
			<div class="col-sm-6 col-sm-offset-2" style="text-align: center;width: 100%">
				<p>Enter your Email</p>
				<input type="email" name="Email" placeholder="Email" style="margin-bottom: 5px;">
			<hr style="margin-left: 50px;margin-right: 50px;">
			<p>Or</p>
			<hr style="margin-left: 50px;margin-right: 50px;">
				<p>Enter your mobile</p>
				<input type="tel"  id="number" name="Mobile" placeholder="Mobile" minlength="10" maxlength="10" autocomplete="off"><br><br>
				<button class="create_btn" name="Resend">Send me the Code</button>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript" src="js/jquery-3.1.1.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript">
	$('#number').on('change keyup',function()
	{
		var sanitized=$(this).val().replace(/[^0-9]/g,'');
		$(this).val(sanitized);
	});
</script>
</body>
</html>