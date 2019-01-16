<!DOCTYPE html>


<html>
	
	
	<head>
		
		
		<title>Đăng Nhập</title>
		
		
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	
		
		
		<link rel="stylesheet" href="css/main-stylesheet.css" type="text/css" />
		
		
		
	</head>

		
	<body class="top">
			
			<div class="main-body-color-mask"></div>
			<div class="lightbox"></div>

			
			
			</div>
			
			
			<div class="main-body-wrapper">
				
				
				<section class="main-navigation clearfix">
					<nav>
						<div class="navigation">
							<a href="home.php">Home</a>
						</div>
						<div class="title">
							<h4>Đăng nhập</h4>
						</div>
					</nav>
				
				</section>
				
				
				<section class="main-content-wrapper clearfix">
					
					
					<section class="single-full-width clearfix">
						
						
						<div class="main-login">
							<form action="xuliLogin.php" class="login" method="post">
								<p>
									<label>Tài khoản:</label>
									<input name="username" type="text" />
								</p>
								<p>
									<label>Mật khẩu:</label>
									<input name="pass" type="password" />
								</p>
								<p>
									<label></label>
									<a href="forgot-password.php">Quên mật khẩu?</a>
								</p>
								<p class="sign-in">
									<label></label>
									<button name="login" type="submit">Đăng nhập</button>
									<b>or <a href="home.php">Quay lại cửa hàng</a></b>
								</p>
							</form>
						
						</div>
						
						
						<div class="guest-login">
							<h3>Khách hàng mới</h3>
							<a href="home.php"><button>Continue as guest</button></a>
						
						</div>
						<div class="guest-login">
							<h3>Đăng Kí</h3>
							<a href="dangki.php"><button>Đăng Kí</button></a>
						
						</div>
					
					
					</section>

				
				</section>
			</div>
	</body>
	</html>
