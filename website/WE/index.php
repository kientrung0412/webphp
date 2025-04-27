<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/new-product.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
</head>

<body>
    <?php
    session_start();
    $action="";
    include 'module/xuly.php';
    include 'module/conn.php'; 
    include 'module/heder.php';
    include 'module/navbar.php';
    ?>
    <div class="danhsach ">
    <?php
    if (isset($_GET['action'])) 
    {
        include 'module/item.php';
        
    }
    else
    {
        include 'module/slide.php';
        include 'module/top-tag.php';
        include 'module/item-pc.php';
        include 'module/man-hinh.php';
        include 'module/gaming-gear.php';
    } 
    ?>
    </div>
    <?php include 'module/footer.php'; ?>
    <div class="cart"></div>
</body>
</html>
<script >
    $(document).ready(function(){
        $('.addcart').click(function(event){
            var ID = $(this).attr('id');
            $.post('addcart.php', {data: ID}, function(data){
            });
            alert('Bạn đã thêm thành công sản phẩm vào giỏ hàng')
        });
        $('.addcartno').click(function(){
            alert('Bạn phải đăng nhập để sử dụng tính năng này')
        });
    });
</script>
