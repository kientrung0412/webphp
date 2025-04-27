        <?php
        $max =20; 
            $con = mysqli_connect('localhost','root','','banpc');
            mysqli_set_charset($con, 'UTF8');
            $sql = 'SELECT * FROM sanpham';
            $rs = mysqli_query($con, $sql);
            $num_rows= mysqli_num_rows($rs);
            $page = ceil($num_rows/$max);
        ?>
        <?php
         
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
        $sql = "SELECT * FROM sanpham WHERE IdLoaiHang = '$item' limit $star,$max ";
        $rs = mysqli_query($con, $sql);
        while ($row = mysqli_fetch_assoc($rs)) 
        {
            $ID=$row['IdSanPham'];
            $name=$row['TenSanPham'];
            $price=$row['Gia'];
            $sale=$row['GiamGia'];
            $idtype=$row['IdLoaiHang']; 
            $img=$row['Img']; 
            include 'module/product-item.php';
        }
        ?>