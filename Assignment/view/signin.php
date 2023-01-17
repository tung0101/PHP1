<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="../src/css/style.css">
	<link rel="stylesheet" href="../src/css/responsive.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
	<title>Login</title>
</head>

<body>
	<div class="container signin signing">
		<header>
			<div class="logo">
				<img src="./src/img/index/logo.png" alt="">
			</div>
		</header>
		<main>
			<p class="welcome">
				Chào mừng đến với Soul Burger
			</p>
			<h2>
				Đăng Nhập
			</h2>
			<main id="form" style="margin-top:-100px ;">
				<?php
				session_start();
				if (@$_COOKIE['fullName'] != null) {
					echo '<h3>Xin chào: ' . $_COOKIE['fullName'] . '</h3>';
					echo '<a href="logout.php">Đăng xuất</a>';
				} else {
				?>
					<form action="process.php" method="post" name="add-form" >
						<div class="row form-group">
							<p>Tên đăng nhập</p>
							<input type="text" name="username" class="form-control" />
						</div>

						<div class="row form-group">
							<p>Mật khẩu</p>
							<input type="password" name="password" class="form-control" />
						</div>

						<div class="row">
							<input type="submit" value="Đăng nhập" name="submit" class="btn btn-danger btn-block continue">
						</div>
					</form>
					<button class="btn btn-danger btn-block continue facebook-button d-flex justify-content-start align-items-center" style="width: 430px; background-color: #39559f; border: #39559f;"> <i class="fa fa-facebook ml-2"></i> <span class="ml-5 px-4">Đăng nhập bằng facebook</span> </button>
					<button class="btn btn-danger btn-block continue google-button d-flex justify-content-start align-items-center" style="width: 430px; background-color: #4285f4; border: #4285f4;"> <i class="fa fa-google ml-2"></i> <span class="ml-5 px-4">Đăng nhập bằng google</span> </button>
					<a href="#">Quên mật khẩu?</a>
					<p class="join-free">
						Không có tài khoản? <a href="signup.html">Đăng ký</a>
					</p>
				<?php
				}
				?>
			</main>

	</div>
</body>

</html>