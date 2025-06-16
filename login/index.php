<?php
session_start();

if (isset($_SESSION['user'])) {
    echo "<script> window.location.href = '../pages/dashboard' </script>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en" class="wf-flaticon-n4-active wf-fontawesome5solid-n4-active wf-fontawesome5regular-n4-active wf-fontawesome5brands-n4-active wf-opensans-n3-active wf-opensans-n4-active wf-opensans-n6-active wf-opensans-n7-active wf-active"><head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login</title>
	<meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport">
	<link rel="icon" href="../dist/assets/img/icon.ico" type="image/x-icon">

	<!-- Fonts and icons -->
	<script src="../assets/js/plugin/webfont/webfont.min.js"></script>
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" media="all"><link rel="stylesheet" href="../dist/assets/css/fonts.csss" media="all"><script>
		WebFont.load({
			google: {"families":["Open+Sans:300,400,600,700"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands"], urls: ['../assets/css/fonts.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>
	
	<!-- CSS Files -->
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/azzara.min.css">
</head>
<body class="login">
	<div class="wrapper wrapper-login">
		<div class="container container-login animated fadeIn" style="display: block;">
			<h3 class="text-center">Log In</h3>
			<div class="login-form">
                <?php if (isset($_GET['pesan'])) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?php if ($_GET['pesan'] == 'gagal') : ?>
                            Email atau Password salah!
                        <?php endif; ?>
                        <?php if ($_GET['pesan'] == 'refresh') : ?>
                            Sesi telah berakhir, silahkan login ulang!
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
				<form action="proses.php" method="post">
					<div class="form-group form-floating-label">
						<input id="username" name="username" type="text" class="form-control input-border-bottom" required id="username">
						<label for="username" class="placeholder">Username</label>
					</div>
					<div class="form-group form-floating-label">
						<input id="password" name="password" type="password" class="form-control input-border-bottom" required id="password">
						<label for="password" class="placeholder">Password</label>
					</div>
					<div class="form-action mb-3">
						<button type="submit" class="btn btn-primary">Log In</button>
					</div>
					<div class="login-account">
						<span class="msg">Don't have an account yet ?</span>
						<a href="../register/index.php" id="show-signup" class="link">Sign Up</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script src="../assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="../assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="../assets/js/core/popper.min.js"></script>
	<script src="../assets/js/core/bootstrap.min.js"></script>
	<script src="../assets/js/ready.js"></script>

</body>
</html>