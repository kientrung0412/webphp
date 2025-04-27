<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/new-product.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
</head>
    <?php
    if (isset($_GET['txttim'])) {
        $a=$_GET['txttim'];
        include 'module/conn.php'; 
        include 'module/heder.php';
        include 'module/navbar.php';
    }
    ?>
    <div class="row">
    <div class="container mt-2">
    <div class="col-12">
        <ul class="nav nav-pills mb-3 bg-danger  ">
            <li>
                <dt class="nav-link text-white">
                    Hiển thị kết quả tìm kiếm cho <?php echo "$a"; ?>:
                </dt>
            </li>
        </ul>
        <div class="row">
    <?php
        $max =20; 
            $con = mysqli_connect('localhost','root','','banpc');
            mysqli_set_charset($con, 'UTF8');
            $sql = "select * from sanpham where TenSanPham like '%$a%'";
            $rs = mysqli_query($con, $sql);
            $num_rows= mysqli_num_rows($rs);
            $page = ceil($num_rows/$max);
        ?>
        <?php
         	if ($num_rows > 0) {
         		if (isset($_GET['trang'])) 
                {
                    $trang = $_GET['trang'];
                }
                else 
                {
                $trang = "";
                }
                if ($trang == 1 || $trang == "") {
                $star=0;
                }
                else{
                $star = $trang * $max - $max;
                }
                $sql = "select * from sanpham where TenSanPham like '%$a%' limit $star,$max ";
                $rs = mysqli_query($con, $sql);
                ?>
            <?php 
 			while ($row = mysqli_fetch_assoc($rs)) 
        	{
            	$ID=$row['IdSanPham'];
            	$name=$row['TenSanPham'];
            	$price=$row['Gia'];
            	$sale=$row['GiamGia']; 
     			include 'module/product-item.php';
        	}?>
            <div class="col-12">
                <nav aria-label="Page navigation example ">
                <ul class="pagination pt-3">
                    <?php for ($i=1; $i <= $page; $i++) { ?>
                        <li class="page-item ">
                            <a href=" ?trang=<?php echo "$i" ?>&txttim=<?php echo"$a" ?>" class="page-link text-white bg-danger">
                                <?php echo "$i"; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </nav>   
            </div>    
        <?php }
            else{
                echo "Không có sản phẩm nào phù hợp với từ khóa $a";
            }
            include('module/footer.php')
         ?>

       