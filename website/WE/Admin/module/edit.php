<?php if (isset($sua) and $sua=="lienhe") { ?>
	<div class="container alert alert-info alert-dismissible "> 
	  	<table class="table-bordered table text-dark">
	  		<thead>
	        	<tr>
	                <td style="width: auto">ID</td>
	                <td style="width: auto">Email</td>
	                <td style="width: auto">Số điện thoại</td>
	                <td style="width: auto">Địa chỉ</td>
	            </tr>
	        </thead>
	        <tbody>
	            <?php
	                foreach($con->query("select * from lienhe where ID=$ID") as $row)
	                {
	                    $ID=$row['ID'];
	                    $email=$row['Email'];
	                    $sdt=$row['Sdt'];
	                    $diachi=$row['DiaChi'];                      
	            ?>
	            <thead>
	            	<tr>
	            		<form  method="POST" accept-charset="utf-8">
                            <td><?php echo "$ID"; ?></td>
                            <td><input type="text" name="email" class="form-control" value="<?php echo "$email"; ?>"></td>
                            <td><input type="text" name="sdt" class="form-control" value="<?php echo "$sdt"; ?>"></td>
                            <td><input type="text" name="diachi" class="form-control" value="<?php echo "$diachi"; ?>"></td>
                            <td><input type="submit" name="submit" class="btn btn-primary float-right" value="Sửa"></td>
                        </form>
	            	</tr>
	            </thead>
	        <?php } ?>
	        <?php 
                if ($_SERVER['REQUEST_METHOD']=='POST') {
                $email=$_POST['email'];
                $sdt=$_POST['sdt'];
                $diachi=$_POST['diachi'];
                $sql = "UPDATE lienhe SET Email=?, Sdt=?, DiaChi=? WHERE id=?";
                $stmt= $con->prepare($sql);
                $stmt->execute([$email, $sdt, $diachi, $ID]);                           
                }
            ?>
	        </tbody>
	  	</table>
	  	<button type="button" class="close" data-dismiss="alert">&times;</button> </div>
<?php } ?>


<?php if (isset($sua) and $sua=="sanpham") { ?>
    <div class="container alert alert-info alert-dismissible "> 
        <table class="table-bordered table text-dark">
            <thead>
                <tr>
                    <td style="width: auto">Id sản phẩm</td>
                    <td style="width: auto">Tên sản phẩm</td>
                    <td style="width: auto">Loại sản phẩm</td>
                    <td style="width: auto">Nhãn hiệu</td>
                    <td style="width: auto">Ảnh</td>
                    <td style="width: auto">Giá bán</td>
                    <td style="width: auto">Sale(%)</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($con->query("select * from sanpham where IdSanPham=$ID") as $row)
                    {
                        $ID=$row['IdSanPham'];
                        $name=$row['TenSanPham'];
                        $price=$row['Gia'];
                        $sale=$row['GiamGia'];
                        $loai=$row['IdLoaiHang'];
                        $nhan=$row['IdNhanHieu'];                      
                        $img=$row['Img'];                      
                ?>
                <thead>
                    <tr>
                        <form  method="POST" accept-charset="utf-8">
                            <td><?php echo "$ID"; ?></td>
                            <td><input type="text" class="form-control" name="tensp" value="<?php echo "$name" ?>"></td>
                            <td><input type="text" class="form-control" name="idloai" value="<?php echo "$loai" ?>"></td>
                            <td><input type="text" class="form-control" name="idhang" value="<?php echo "$nhan" ?>"></td>
                            <td><input type="text" class="form-control" name="img" value="<?php echo "$img" ?>"></td>
                            <td><input type="text" class="form-control" name="gia" value="<?php echo "$price" ?>"></td>
                            <td><input type="text" class="form-control" name="sale" value="<?php echo "$sale" ?>"></td>
                            <td><input type="submit" name="submit" class="btn btn-primary float-right" value="Lưu"></td>
                        </form>
                    </tr>
                </thead>
            <?php } ?>


<?php if (isset($sua) and $sua=="loaisanpham") { ?>
    <div class="container alert alert-info alert-dismissible "> 
        <table class="table-bordered table text-dark">
            <thead>
                <tr>
                    <td style="width: auto">STT</td>
                    <td style="width: auto">CPU</td>
                    <td style="width: auto">Bộ xử lí</td>
                    <td style="width: auto">img/Icon/Logo_cpu.png</td>
                    <td style="width: auto">Sale(%)</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($con->query("select * from loaihang where STT=$ID") as $row)
                    {
                        $ID=$row['IdSanPham'];
                        $name=$row['TenSanPham'];
                        $price=$row['Gia'];
                        $sale=$row['GiamGia'];
                        $loai=$row['IdLoaiHang'];
                        $nhan=$row['IdNhanHieu'];                      
                        $img=$row['Img'];                      
                ?>
                <thead>
                    <tr>
                        <form  method="POST" accept-charset="utf-8">
                            <td><?php echo "$ID"; ?></td>
                            <td><input type="text" class="form-control" name="tensp" value="<?php echo "$name" ?>"></td>
                            <td><input type="text" class="form-control" name="idloai" value="<?php echo "$loai" ?>"></td>
                            <td><input type="text" class="form-control" name="idhang" value="<?php echo "$nhan" ?>"></td>
                            <td><input type="text" class="form-control" name="img" value="<?php echo "$img" ?>"></td>
                            <td><input type="text" class="form-control" name="gia" value="<?php echo "$price" ?>"></td>
                            <td><input type="text" class="form-control" name="sale" value="<?php echo "$sale" ?>"></td>
                            <td><input type="submit" name="submit" class="btn btn-primary float-right" value="Lưu"></td>
                        </form>
                    </tr>
                </thead>
            <?php } ?>


<?php if (isset($sua) and $sua=="donhang") { ?>
    <div class="container alert alert-info alert-dismissible "> 
        <table class="table-bordered table text-dark">
            <thead>
                <tr>
                    <td style="width: auto"></td>
                    <td style="width: auto">Tên sản phẩm</td>
                    <td style="width: auto">Loại sản phẩm</td>
                    <td style="width: auto">Nhãn hiệu</td>
                    <td style="width: auto">Ảnh</td>
                    <td style="width: auto">Giá bán</td>
                    <td style="width: auto">Sale(%)</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($con->query("select * from sanpham where IdSanPham=$ID") as $row)
                    {
                        $ID=$row['IdSanPham'];
                        $name=$row['TenSanPham'];
                        $price=$row['Gia'];
                        $sale=$row['GiamGia'];
                        $loai=$row['IdLoaiHang'];
                        $nhan=$row['IdNhanHieu'];                      
                        $img=$row['Img'];                      
                ?>
                <thead>
                    <tr>
                        <form  method="POST" accept-charset="utf-8">
                            <td><?php echo "$ID"; ?></td>
                            <td><input type="text" class="form-control" name="tensp" value="<?php echo "$name" ?>"></td>
                            <td><input type="text" class="form-control" name="idloai" value="<?php echo "$loai" ?>"></td>
                            <td><input type="text" class="form-control" name="idhang" value="<?php echo "$nhan" ?>"></td>
                            <td><input type="text" class="form-control" name="img" value="<?php echo "$img" ?>"></td>
                            <td><input type="text" class="form-control" name="gia" value="<?php echo "$price" ?>"></td>
                            <td><input type="text" class="form-control" name="sale" value="<?php echo "$sale" ?>"></td>
                            <td><input type="submit" name="submit" class="btn btn-primary float-right" value="Lưu"></td>
                        </form>
                    </tr>
                </thead>
            <?php } ?>

	        <?php 
                if ($_SERVER['REQUEST_METHOD']=='POST') {
                $name=$_POST['tensp'];
                $idloai=$_POST['idloai']; 
                $idhang=$_POST['idhang'];
                $img=$_POST['img']; 
                $gia=$_POST['gia']; 
                $sale=$_POST['sale'];
                date_default_timezone_set('Asia/Ho_Chi_Minh');
                $date = date('Y-m-d H:i');
                $sql = "UPDATE sanpham SET TenSanPham=?, IdLoaiHang=?, IdNhanHieu=?, Img =?, Gia=?, GiamGia=?, NgayNhap=? WHERE IdSanPham= $ID";
                $stmt= $con->prepare($sql);
                $stmt->execute([$name, $idloai, $idhang, $img, $gia, $sale, $date]);                           
                }
            ?>
	        </tbody>
	  	</table>
	  	<button type="button" class="close" data-dismiss="alert">&times;</button> </div>
<?php } ?>	