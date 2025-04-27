<?php 
	session_start();
	include_once 'module/conn.php';
 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sản phẩm</title>
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
		include 'module/heder.php';
		include 'module/navbar.php';
		if (isset($_GET['ID'])) {
			$IDsp=$_GET['ID'];
			foreach($con->query("select * from sanpham where IdSanPham = '$IDsp'") as $row)
                {
                    $ID=$row['IdSanPham'];
                    $name=$row['TenSanPham'];
                    $IDnh=$row['IdNhanHieu'];
                    $IDloai=$row['IdLoaiHang'];
                    $price=$row['Gia'];
                    $sale=$row['GiamGia']; 
                    $img=$row['Img'];
                    foreach($con->query("select * from loaihang where IdLoaiHang = '$IDloai'") as $row){
                    	$title=$row['Title'];
                    }
                    foreach($con->query("select * from nhanhieu where IdNhanHieu = '$IDnh'") as $row){
                    	$hang=$row['TenNhanHieu'];
                    }
                }
		}
	?>
	<div class="container">
		<ul class="nav nav-pills  bg-danger ">
        	<li>
                <dt class="nav-link text-white">Thông tin sản phẩm</dt>
        	</li>
    	</ul>
		<div class="col-12 pt-4">
			<div class="col-4 float-left">
				<img src="<?php echo $img ?>" alt="" width="250" hight="250">
			</div>
			<div class="col-8 float-right pl-5r">
				<SPAN class="h4">Tên sản phẩm:</SPAN>
				<span class="h5"> <?php echo "$name"; ?></span>
				<br>
				<br>
				<span class="h4">Hãng sản xuất:</span>
				<span class="h5"> <?php echo "$hang"; ?></span>
				<br>
				<br>
				<span class="h4">Loại sản phẩm:</span>
				<span class="h5"> <?php echo "$title"; ?></span>
				<br>
				<br>
				<span class="h4">Giá bán của sản phẩm:</span>
				<?php if ($sale==0) { ?>
				<span class="h5"> <?php echo  number_format($price); ?> </span>
				<?php } else{ $gia=($price/100)*(100-$sale); ?>
				<span class="h4 text-danger"><?php echo number_format($gia); ?></span>
				<span class="h4">đ đã giảm</span> 
				<span class="h4 text-danger"><?php echo "$sale" ; ?></span>
				<span class="h4">% so với giá gốc</span>
				<br>
				<br>
				<?php } ?>
				<form  method="get" accept-charset="utf-8">
                    <?php if (isset($_SESSION['IDtv'])) { ?>
                         <button type="button" id="<?php echo $ID; ?>" ID class="btn btn-warning mt-1 addcart btn-block w-50" >
                            <i class="fas fa-cart-plus h1"></i>
                        </button>
                    </button>
                    <?php } else { ?>
                         <button type="button" ID class="btn btn-warning mt-1 addcartno btn-block w-50" >
                            <i class="fas fa-cart-plus h1"></i>
                        </button>
                    <?php } ?>
                   </form>
			</div>
		</div>	
		
	</div>
	
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