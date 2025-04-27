<?php 
    session_start();
    if (isset($_SESSION['IDtv'])) {
    include('module/conn.php');
    $IDtv=$_SESSION['IDtv'];
 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Giỏ hàng</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/new-product.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>

<body>
    <div class="container pt-5">
        <div class="row" style="padding-bottom: 150px;">
            <div class="col-12 bg-danger h-100 rounded " >
                <div class="col-3 float-left text-light mt-3 mb-3 ">
                    <i class="fas fa-shopping-cart"></i>
                    Giỏ hàng
                </div>
            </div>
            <div class="col-12 float-left">
                <table class="table mt-3 list">
                    <thead class="thead-light 3"> 
                    <?php 
                    $tong=0;
                        foreach($con->query("select * from giohang where IdThanhVien = $IDtv ") as $row){
                            $IDsp=$row['IdSanPham'];
                            $sl=$row['SoLuong'];
                            foreach($con->query("select * from sanpham where IdSanPham = $IDsp ") as $row){
                                $IDsp=$row['IdSanPham'];
                                $title=$row['TenSanPham'];
                                $gia=$row['Gia'];
                                $sale=$row['GiamGia'];
                                $giaban=($gia/100)*(100-$sale);
                                $img=$row['Img'];
                                $sl=$sl;
                                $tong=$tong+($giaban*$sl);
                     ?>
                        <tr class="" id="a">
                            <form method="GET"  accept-charset="utf-8">
                            <th class="align-top" style="width: 25%;">
                                <img src="<?php echo"$img" ?>" width="120" hight="120" alt="">
                            </th>
                            <th class="align-top" style="width: auto;">
                                <?php echo "$title"; ?>
                                    
                                </th>
                            <th class="align-top" style="width: 13%;" >
                                <?php echo"$sl";?>    
                            </th>
                            <th class="align-top" style="width: 20%;" id="gia">
                                <?php echo number_format($giaban); ?> đ
                            </th>
                            
                            <th class="align-top" style="width: 7%;">
                                <a href="cart.php?ID=<?php echo $IDsp?>&edit=xoa" title="" class="text-gray-dark">
                                    <i class="fas fa-trash-alt h4"></i>
                                </a>                          
                            </th>
                            </form>
                        </tr>
                    <?php }} ?>         
                    </thead>
                </table>
            </div>
            <div class=" col-12 float-right mt-3 mb-3 tien bg-light fixed-bottom container">
                <div class="col-12  ">
                    <div class="col-12">
                        <span>Thành tiền:</span>
                    </div>
                    <div class="col-3 float-left tong text-cent">
                        <SPAN class="h4 text-danger"><?php echo number_format($tong); ?> đ</SPAN>
                    </div>
                    <div class="col-3 float-left tong">
                        <button class="btn-danger btn-block btn-lg w-50 text-center  text-monospace. rounded h4">
                            <a href="index.php" title="" class="text-light">Mua hàng tiếp</a>
                        </button>
                        
                    </div>
                     <div class="col-3 float-left tong">
                        <button class="btn-danger btn-block btn-lg w-50 text-center  text-monospace. rounded h4">
                            <a href="cart.php" title="" class="text-light">Cập nhập giỏ hàng</a>
                        </button>
                        
                    </div>
                    <div class="col-3 float-right">
                        <a href="dathang.php" title="">
                        <button type="button" class="btn-danger btn-block btn-lg w-50 text-center rounded h4">Đặt hàng</button>
                        </a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</body>
<?php 
    if (isset($_GET['edit'])) {

        if ($_GET['edit']=="xoa") {
            $IDsp= $_GET['ID'];
            $con = new PDO("mysql:host=localhost; dbname=banpc","root","");
            $con->exec("set names utf8");
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "DELETE FROM giohang WHERE IdSanPham='$IDsp' AND IdThanhVien='$IDtv'";
            $con->exec($sql);

        }}
 ?>
</html>
<?php }
    else{
         header('location: login/login.php ');
    }
 ?>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- <script >
    // $("input[type='number']").inputSpinner();
    $(document).ready(function() {
        // $("input").click(function(){
        //     $("input").each(function(){
        //     var sl=$(this).val();
        //     alert(sl);
        //     });
        //    $.post('load.php', {upload: sl}, function(upload) {});
        // });
        $('#sl').click(function(){
           var sl = $('#sl').val();
           alert( sl);
           $.post('load.php', {upload: sl}, function(upload) {});
        });
</script>
 -->