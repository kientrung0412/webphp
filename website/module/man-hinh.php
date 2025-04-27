<div class="container mt-2">
    <ul class="nav nav-pills  bg-danger ">
        <li>
                <dt class="nav-link text-white">Màn hình</dt>

        </li>
    </ul>
    <div class="">
                <a href="?action=item&item=8&typesp=Màn%20hình" title="" class="text-dark text-secondary ">
                Xem thêm
            </a>
    <div class="row">
        <?php

            foreach($con->query('select * from sanpham where IdLoaiHang = 8 limit 4') as $row)
                {
                     $ID=$row['IdSanPham'];
                    $name=$row['TenSanPham'];
                    $price=$row['Gia'];
                    $sale=$row['GiamGia']; 
                    $img=$row['Img']; 
                    include 'module/product-item.php';
                }
        ?>
    </div>
</div>