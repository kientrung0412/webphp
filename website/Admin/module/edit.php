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


<?php if (isset($sua) and $sua=="khuyenmai") { ?>
    <div class="container alert alert-info alert-dismissible "> 
        <table class="table-bordered table text-dark">
            <thead>
                <tr>
                    <td style="width: auto">ID khuyến mại</td>
                    <td style="width: auto">Title</td>
                    <td style="width: auto">Ảnh</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($con->query("select * from quangcao where ID=$ID") as $row)
                    {
                        $ID=$row['IdQuangCao'];
                        $title=$row['Title'];
                        $img=$row['Img'];                      
                ?>
                <thead>
                    <tr>
                        <form  method="POST" accept-charset="utf-8">
                            <td><?php echo "$ID"; ?></td>
                            <td><input type="text" name="title" class="form-control" value="<?php echo "$title"; ?>"></td>
                            <td><input type="text" name="img" class="form-control" value="<?php echo "$img"; ?>"></td>
                            <td><input type="submit" name="submit" class="btn btn-primary float-right" value="Sửa"></td>
                        </form>
                    </tr>
                </thead>
            <?php } ?>
            <?php 
                if ($_SERVER['REQUEST_METHOD']=='POST') {
                $title=$_POST['title'];
                $img=$_POST['img'];
                $diachi=$_POST['diachi'];
                $sql = "UPDATE quangcao SET Title=?, Img=? WHERE IdQuangCao= $ID";
                $stmt= $con->prepare($sql);
                $stmt->execute([$title, $img]);                           
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


<?php if (isset($sua) and $sua=="donhang") { ?>
    <div class="container alert alert-info alert-dismissible "> 
        <table class="table-bordered table text-dark">
            <thead>
                <tr>
                    <td style="width: auto">Id đơn hàng</td>
                    <td style="width: auto">Id thành viên</td>
                    <td style="width: auto">Id sản phẩm</td>
                    <td style="width: auto">Số lượng</td>
                    <td style="width: auto">Đã giao hàng</td>
                    
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($con->query("select * from donhang where IdDonHang=$ID") as $row)
                    {
                        $ID=$row['IdDonHang'];
                        $IDtv=$row['IdThanhVien'];
                        $IDsp=$row['IdSanPham'];
                        $num=$row['SoLuong'];
                        $gia=$row['Gia'];
                        $tgd=$row['TgDat'];
                        $tgd = date_create($tgd);
                        $tgd=date_format($tgd, 'd/m/Y H:i:s');           
                ?>
                <thead>
                    <tr>
                        <form  method="POST" accept-charset="utf-8">
                            <td><?php echo "$ID"; ?></td>
                            <td><?php echo "$IDtv" ?></td>
                            <td><input type="text" class="form-control" name="idsp" value="<?php echo "$IDsp" ?>"></td>
                            <td><input type="text" class="form-control" name="sl" value="<?php echo "$num" ?>"></td>
                            <td><input type="checkbox" class="form-control" name="tgg"></td>
                            <td><input type="submit" name="submit" class="btn btn-primary float-right" value="Lưu"></td>
                        </form>
                    </tr>
                </thead>
            <?php } ?>
            <?php 
                if ($_SERVER['REQUEST_METHOD']=='POST') {
                    foreach($con->query("select * from sanpham where IdSanPham=$IDsp") as $row){
                        $gia=$row['Gia'];
                        $giamgia=$row['GiamGia'];
                        $giaban=($gia/100)*(100-$giamgia);
                    }
                    $IDsp=$_POST['idsp'];
                    $sl=$_POST['sl'];
                    $giaban=$sl*$giaban;
                    date_default_timezone_set('Asia/Ho_Chi_Minh');
                    if (isset($_POST['tgg'])) {
                        $date = date('Y-m-d H:i');
                    }
                    else{
                        $date="";
                    }
                    $sql = "UPDATE donhang SET IdSanPham=?, SoLuong=?, Gia=?, TgGiao=? WHERE IdDonHang= $ID";
                    $stmt= $con->prepare($sql);
                    $stmt->execute([$IDsp, $sl, $giaban, $date]);                           
                }
            ?>
            </tbody>
        </table>
        <button type="button" class="close" data-dismiss="alert">&times;</button> </div>
<?php } ?>


<?php if (isset($sua) and $sua=="loaisanpham") { ?>
    <div class="container alert alert-info alert-dismissible "> 
        <table class="table-bordered table text-dark">
            <thead>
                <tr>
                    <td style="width: auto">ID</td>
                    <td style="width: auto">Tên loại hàng</td>
                    <td style="width: auto">Title</td>
                    <td style="width: auto">Ảnh</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($con->query("select * from loaihang where IdLoaiHang=$ID") as $row)
                    {
                        $ID=$row['IdLoaiHang'];
                        $tenloai=$row['TenLoaiHang'];
                        $title=$row['Title'];
                        $img=$row['Img'];                      
                ?>
                <thead>
                    <tr>
                        <form  method="POST" accept-charset="utf-8">
                            <td><?php echo "$ID"; ?></td>
                            <td><input type="text" name="loai" class="form-control" value="<?php echo "$tenloai"; ?>"></td>
                            <td><input type="text" name="title" class="form-control" value="<?php echo "$title"; ?>"></td>
                            <td><input type="text" name="img" class="form-control" value="<?php echo "$img"; ?>"></td>
                            <td><input type="submit" name="submit" class="btn btn-primary float-right" value="Sửa"></td>
                        </form>
                    </tr>
                </thead>
            <?php } ?>
            <?php 
                if ($_SERVER['REQUEST_METHOD']=='POST') {
                $tenloai=$_POST['loai'];
                $title=$_POST['title'];
                $img=$_POST['img'];
                $sql = "UPDATE loaihang SET TenLoaiHang=? , Title = ?, Img=? WHERE IdLoaiHang=?";
                $stmt= $con->prepare($sql);
                $stmt->execute([$tenloai, $title, $img, $ID]);                           
                }
            ?>
            </tbody>
        </table>
        <button type="button" class="close" data-dismiss="alert">&times;</button> </div>
<?php } ?>	