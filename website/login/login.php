<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script type="text/javascript" href="../js/bootstrap.min.js"></script>
    <script type="text/javascript" href="../js/jquery.min.js"></script>
</head>

<body>
     <?php
     session_start();
        if (isset($_POST['email'])) {
           $email=$_POST['email'];
           $pass=$_POST['pass'];
            $con = mysqli_connect('localhost','root','','banpc');
            mysqli_set_charset($con, 'UTF8');
            $sql = "SELECT * FROM thanhvien where Email='$email' and Password ='$pass'";
            $rs = mysqli_query($con, $sql);
            $row = mysqli_fetch_assoc($rs);
            $idtv=$row['IdThanhVien'];
            $num_rows= mysqli_num_rows($rs);
            if ($num_rows=="1") {
                echo "Đăng nhập thành công";
                $_SESSION['IDtv']=$idtv;
                header('location: ../index.php ');
            }
            else{
                $error = "Tên tài khoản hoặc mật khẩu không chính xác";
            }
        }
     ?>
    <div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="card">
                <div class="card-header">
                    <h3>Đăng nhập</h3>
                </div>
                <?php if (isset($error)) {
            ?>
        <div class="alert alert-danger alert-dismissible text-center justify-content-cente">
            <a href="signup.php" class="close text-center" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Lỗi!</strong> <?php echo "$error"; ?>
        </div>
        <?php } ?>
                <div class="card-body">
                    <form method="post">
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            </div>
                            <input type="email" class="form-control" placeholder="Email" required="" name="email">
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" class="form-control" placeholder="Mật khẩu" required="" name="pass">
                        </div>
                        <div class="row align-items-center remember">
                            <input type="checkbox">Nhớ đăng nhập
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Đăng nhập" class="btn float-right login_btn btn-block">
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-center links">
                        Bạn chưa có tài khoản?<a href="signup.php"><span>Đăng ký</span></a>
                    </div>
                    <div class="d-flex justify-content-center links">
                        <a href="repass.php"><span>Bạn quên mật khẩu?</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
</body>
   
</html>