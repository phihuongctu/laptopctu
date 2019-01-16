<!DOCTYPE html>


<html>
	
	
	<head>
		<title>Đăng Kí</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		
		
		<!-- Stylesheets -->
		<link rel="stylesheet" href="frontend/css/main-stylesheet.css" type="text/css" />
		

<style type="text/css">
			
	.main-login p {
    margin: 0 0 11px 0;
    font-size: 12px;
    float: left;
}
</style>
		
	</head>
	<?php
	$errors = array();
	$msg = array();
	$conn = mysqli_connect('localhost', 'root', '', 'banhang') or die ('Không thể kết nối tới database');
	mysqli_set_charset($conn, 'UTF8');
	if(isset($_POST['dangki'])){
		
		$username   = $_POST['username'];
        $email     = $_POST['email'];
        $pass = $_POST['pass'];
        $repass = $_POST['repass'];
        $diachi = $_POST['dc'];
        $sdt = $_POST['sdt'];
    	// $pass=md5($pass);
		
		
		//checking dữ liệu nhập vào ở form
		$ktTen=mysqli_query($conn,"SELECT username FROM user WHERE username='$username'");  
		
		if ($pass != $repass) {
        echo "<center>Nhập lại mật khẩu chưa trùng khớp. <a href='javascript: history.go(-1)'><b>Trở lại</b></a></center>";
        exit;
        }
		if ( $username==null || $pass==null || $email==null || $repass=null ||$diachi==null || $sdt==null)
    {
        echo "<center>Chưa nhập đủ thông tin. Vui lòng nhập lại <a href='javascript: history.go(-1)'><b>Trở lại</b></a></center>";
        
        exit;
    }
           
        // Mã khóa mật khẩu
        // $pass = md5($pass);
   // Kiểm tra tên đăng nhập này đã có người dùng chưa
    if (mysqli_num_rows($ktTen)>0){
        echo '<center>Ten <b>'.$username."</b> đã có người dùng. Vui lòng chọn lại. <a href='javascript: history.go(-1)'><b>Trở lại</b></a></center>";
        exit;
    }
           
        //Kiểm tra email có đúng định dạng hay không
    if (!preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/",$email))
    {
        echo "<center>Email này không hợp lệ. Vui long nhập email khác. <a href='javascript: history.go(-1)'><b>Trở lại</b></a></center>";
        exit;
    }

    if (!preg_match("/^[a-zA-Z0-9._-]{3,10}/",$pass))
    {
        echo "Mật khẩu này không hợp lệ. Vui long nhập mật khẩu khác. <a href='javascript: history.go(-1)'><b>Trở lại</b></a>";
        exit;
    }
    if (!preg_match("/^\d{12}/",$sdt))
    {
        echo "<center>Số điện thoại này không hợp lệ.Phải đủ 12 số. <a href='javascript: history.go(-1)'><b>Trở lại</b></a></center>";
        exit;
    }
    

		$sql = "insert into user(username,pass,email,diachi,sodienthoai) values ('$username','$pass','$email','$diachi','$sdt')";
                           
    //Thông báo quá trình lưu
    if (mysqli_query($conn,$sql))
    {
        echo '<center><h3>Chúc mừng bạn đã đăng kí thành công. Trở về trang Login sau vài giây</h3><center>';
        header('Refresh:2; url=login.php');
        
    }
    
}else{
       			
    
	}
	
	?>	 

	<body class="top">
		
		<div class="main-body-color-mask"></div>
		<div class="lightbox"></div>

		
		
		</div>
		
		
		<div class="main-body-wrapper">
			
			
			<section class="main-navigation clearfix">
				<nav>
					<div class="navigation">
						<a href="home.php">Về Trang Chủ</a>
					</div>
					<div class="title">
						<h3>Đăng kí</h3>
					</div>
				</nav>
			
			</section>
			
			
			<section class="main-content-wrapper clearfix">
				
				
				<section class="single-full-width clearfix">
					
					
					<div class="main-login">
						<form  class="login" method="post">
							<p>
								<label>Tài khoản:</label>
								<input name="username" type="text" />
							</p>
							<p>
								<label>Mật khẩu:</label>
								<input name="pass" type="password" />
							</p>
							<p>
								<label>Nhập lại mật khẩu:</label>
								<input name="repass" type="password" />
							</p>
							<p>
								<label>Email:</label>
								<input name="email" type="email" />
							</p>
							<p>
								<label>Địa Chỉ:</label>
								<input name="dc" type="text" />
							</p>
							<p>
								<label>Số điện thoại:</label>
								<input name="sdt" type="text" />
							</p>
							

							<p class="sign-in">
								<label></label>
								<button name="dangki" type="submit">Đăng ký</button>
								<b>or <a href="home.php">Quay lại cửa hàng</a></b>
							</p>
						</form>
					
					
					</div>
					
					
					<div class="guest-login">
						<h3>Đã là thành viên</h3>
						<a href="login.php"><button>Đăng nhập thành viên</button></a>
						
					
					</div>
				
				
				</section>

			
			</section>
	</body>
	</html>
