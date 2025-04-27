
<div class="container mt-3">
    <ul class="nav nav-pills bg-danger " id="pills-tab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active text-white" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"><dt>Sản phẩm hot</dt></a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false"><dt>Sản phẩm mới</dt></a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false"><dt>Sản phẩm khuyến mại</dt></a>
        </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active " id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class="row">
                <?php
                    foreach($con->query('select * from sanpham  order by GiamGia DESC limit 4') as $row)
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
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <div class="row">
                <?php
                    foreach($con->query('select * from sanpham order by NgayNhap DESC limit 4') as $row)
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
        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
            <div class="row">
                <?php
                    foreach($con->query('select * from sanpham limit 4') as $row)
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
    </div>
</div>
