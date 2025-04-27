<div class="container mt-3">
    <ul class="nav nav-pills bg-danger " id="item-tag" role="tablist">
    <?php
        foreach($con->query('select * from loaihang where IdLoaiHang != 8 && IdLoaiHang !=9') as $row)
        {
            $ID=$row['IdLoaiHang'];
            $type=$row['TenLoaiHang'];
            $title=$row['Title'];
            if ($ID==1) {
                $active="active";
             }
             else{
                $active="";
             } 
    ?>
        <li class="nav-item">
            <a class="nav-link text-white <?php echo"$active" ?> " id="item-<?php echo"$ID" ?>-tab" data-toggle="pill" href="#item-<?php echo"$ID" ?>" role="tab" aria-controls="item-<?php echo"$ID" ?>" aria-selected="true">
                <dt><?php echo "$title"; ?></dt>
            </a>
        </li>
    <?php } ?>
    </ul>
    <div class="tab-content" id="item-tagContent">
        <?php
        foreach($con->query('select * from loaihang where IdLoaiHang != 8 && IdLoaiHang !=9') as $row)
        {
            $ID=$row['IdLoaiHang'];
            $title=$row['Title'];
            if ($ID==1) {
                $active="active";
             }
             else{
                $active="";
             } 
    ?>
        <div class="tab-pane fade show <?php echo"$active" ?> " id="item-<?php echo"$ID"; ?>" role="tabpanel" aria-labelledby="item-<?php echo"$ID"; ?>-tab">
            <div class="">
                <a href="?action=item&item=<?php echo"$ID"; ?>&typesp=<?php echo"$title" ?> " title="" class="text-dark text-secondary ">
                Xem thêm
                </a>
            </div>
            <div class="row ">
                <?php
                    foreach($con->query("select * from sanpham where IdLoaiHang = '$ID' limit 4") as $row)
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
    <?php } ?>

    </div>
</div>