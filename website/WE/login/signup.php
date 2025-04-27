<!DOCTYPE html>
<html>
    <?php
    include '../module/conn.php'; 
        if ($_SERVER['REQUEST_METHOD']=='POST') {
            $email = $_POST['email'];
            $pass = $_POST['pass'];
            $pass = preg_replace('/\s+/', '', $pass);
            $repass = $_POST['repass'];
            $repass=preg_replace('/\s+/', '', $repass);
            $diachi = $_POST['diachi'];
            $name = $_POST['name'];
            $a = $_POST['a'];
            $len = is_numeric($a);
            $fr = strlen($a);
            // validata from
            // if ($email="" or $pass="" or $repass="" or $name="" or $a="" or $diachi="") {
            //     $error="Bạn phải nhập đày đủ các trường";
            // }
            // include '../test/index.php';
            // if ($pass != $repass){
            //     $error="Xác thực mật khẩu không khớp";
            // }
            // if (strlen($name)>7){
            //     $error="Bạn phải nhập đúng họ và tên";
            // }
            // if ($len!=1){
            //     $error="Sai định dang số điện thoại";
            // }
            if (!isset($error)) {
                $con = mysqli_connect('localhost','root','','banpc');
                mysqli_set_charset($con, 'UTF8');
                $sql = "SELECT * FROM thanhvien WHERE Email = '$email' or Sdt ='$a'";
                $rs = mysqli_query($con, $sql);
                $row = mysqli_fetch_assoc($rs);
                $user = $row['Email'];
                $phone = $row['Sdt'];
                echo "$phone";
                if ($user == $email) {
                   $error ="Email này đã được đăng ký";
                }
                elseif($a == $phone){
                    $error = "Số điện thoại này đã được đăng ký";
                }
                else {
                    include '../module/adduser.php';
                    $ok = "Dăng ký thành công";
                }
            }

    }
    ?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/signup.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script type="text/javascript" href="../js/bootstrap.min.js"></script>
    <script type="text/javascript" href="../js/jquery.min.js"></script>
</head>

<body>
    <div class="container text-center">
        <?php if (isset($error)) {
            ?>
        <div class="alert alert-danger alert-dismissible text-center justify-content-cente">
            <a href="signup.php" class="close text-center" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Lỗi!</strong> <?php echo "$error"; ?>
        </div>
        <?php } ?>
        <?php if (isset($ok)) {
            ?>
        <div class="alert alert-success alert-dismissible text-center justify-content-cente">
            <a href="signup.php" class="close text-center" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Thành công</strong> <?php echo "$ok"; ?>
        </div>
        <?php } ?>
        <div class="d-flex justify-content-center h-100">
            <div class="card">
                <div class="card-header">
                    <h3>Đăng ký</h3>
                </div>
                <div class="card-body">
                    <form  method="post">
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            </div>
                            <input name="email" type="email" class="form-control" placeholder="Email" >
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input name="pass" type="password" class="form-control" placeholder="Mật khẩu" >
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input name="repass" type="password" class="form-control" placeholder="Nhập lại mật khẩu" >
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-user"></i>
                                </span>
                            </div>
                            <input name="name" type="text" class="form-control" placeholder="Họ và tên" >
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                            </div>
                            <input name="a" type="text" class="form-control" placeholder="Số điện thoại" >
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                            </div>
                            <input name="diachi" type="text" class="form-control" placeholder="Địa chỉ" >
                        </div>
                        <!-- <div class="row align-items-center remember">
                            <input type="checkbox" >Bạn đồng ý với các điều khoản </div> -->
                        <div class="form-group">
                            <a href="" title="">
                                <input type="submit" value="Đăng ký"  class="btn float-right login_btn btn-block">
                            </a>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-center links">
                        Bạn đã có tài khoản?<a href="login.php">Đăng nhập</a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</body>

</html>
</body>

</html>