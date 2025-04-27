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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đặt hàng</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/new-product.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
</head>
         <body>
             <div class="container">
              <div class="col-12  ">
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
                            
                        </tr>
                    <?php }} ?>
                    <?php if (isset($ok)) {
            ?>
        <div class="alert alert-success alert-dismissible text-center justify-content-cente">
            <a href="signup.php" class="close text-center" data-dismiss="alert" aria-label="close">&times;</a>
             <?php echo "$ok"; ?>
        </div>
        <?php } ?>
                    <div class="float-left">
                        Sản phẩm đã mua
                    </div>
                    <div class="float-right">
                        <a href="index.php" title="" style="text-decoration: none;" class="btn-link pl-5">Trang chủ</a>
                    </div>
                    </thead>
                </table>
            </div>
            <?php } ?>
            </div>
         </body>
         </html>         