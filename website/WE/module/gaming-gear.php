<div class="r mt-2">
    <ul class="nav nav-pills mb-3 bg-danger ">
        <li>
                <dt class="nav-link text-white">Phụ kiện</dt>

        </li>
    </ul>
    <div class="">
                <a href="?action=item&item=9&typesp=Phụ%20kiện" title="" class="text-dark text-secondary ">
                Xem thêm
            </a>

    <div class="row">
        <?php
            foreach($con->query('select * from sanpham where IdLoaiHang = 9 limit 4') as $row)
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