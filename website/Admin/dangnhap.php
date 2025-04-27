<!DOCTYPE html>
<html lang="vi">

<head>
	<title>Đăng nhập admin</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" method="POST">
					<span class="login100-form-title">
						Admin Login
					</span>
					<?php
     session_start();
        if (isset($_POST['email'])) {
           $email=$_POST['email'];
           $pass=$_POST['pass'];
            $con = mysqli_connect('localhost','root','','banpc');
            mysqli_set_charset($con, 'UTF8');
            $sql = "SELECT * FROM admin where Email='$email' and Password ='$pass'";
            $rs = mysqli_query($con, $sql);
            $row = mysqli_fetch_assoc($rs);
            $ID=$row['IdAdmin'];
            $nameadmin=$row['TenAdmin'];
            $num_rows= mysqli_num_rows($rs);
            if ($num_rows=="1") {
                echo "Đăng nhập thành công";
                $_SESSION['IDadmin']=$ID;
                $_SESSION['nameadmin']=$nameadmin;
                header('location: ../Admin/ ');
            }
            else{ ?>
            	<div class="alert alert-danger alert-dismissible fade show">
    				<button type="button" class="close" data-dismiss="alert">&times;</button>
    			Thông tin tài khoản hoặc mật khẩu không chính xác.
  </div>
     <?php   }}
     ?>
					<div class="wrap-input100 validate-input" data-validate = "Email phải có dạng: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Bạn chưa nhập password">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							Đăng nhập
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
<!-- 	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script> -->
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>