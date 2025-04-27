<!DOCTYPE html>
<html>
<?php 
    session_start();
    include('module/conn.php');
    $IDtv=$_SESSION['IDtv'];
 ?>
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
                        <tr class="">
                            <th class="align-top" style="width: 25%;"><img src="<?php echo"$img" ?>" alt=""></th>
                            <th class="align-top" style="width: auto;"><?php echo "$title"; ?></th>
                            <th class="align-top" style="width: 13%;">
                                <input type="number" id="sl" value="<?php echo"$sl";?>" name="sl" min="1" max="99" step="1" />
                            </th>
                            <th class="align-top" style="width: 20%;" id="gia"><?php echo "$giaban"; ?>đ</th>
                            <th class="align-top" style="width: 13%;">
                                <button class="btn btn-danger">
                                    <a href="cart.php?ID=<?php echo $IDsp;?>" title="">
                                        <i class="fas fa-trash-alt h4"></i>
                                    </a>
                                </button>                               
                            </th>
                        </tr>
                    <?php }} ?>
                    </thead>
                </table>
            </div>
            <div class=" col-12 float-right mt-3 mb-3 tien bg-light fixed-bottom">
                <div class="col-12  ">
                    <div class="col-12">
                        <span>Thành tiền:</span>
                    </div>
                    <div class="col-4 float-left tong">
                        <SPAN class="h4 text-danger"> <?php echo "$tong"; ?> đ</SPAN>
                    </div>
                    <div class="col-4 float-right">
                        <button type="button" class="btn-danger btn-block btn-lg  rounded h4">Đặt hàng</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-input-spinner.js"></script>
<script >
    // $("input[type='number']").inputSpinner();
    $(document).ready(function() {
        $('#sl').click(function(){
           var sl = $('#sl').val();
           alert(sl);
           $.post('load.php', {upload: sl}, function(upload) {});
        });
        $('#sl').keyup(function(){
           var sl = $('#sl').val();
           $.post('load.php', {upload: sl}, function(upload) {});
        });
    });
</script>
