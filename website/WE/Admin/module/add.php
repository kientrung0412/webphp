<?php
    include('module/conn.php');
    $fun=""; 
    if ($active=="item") {
 ?>
 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    <i class="fas fa-plus-circle"></i>
</button>

<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered">


        <?php if ($item=="hang"  and $fun!="sua") { ?>
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Thêm nhãn hiệu</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
              <form method="Post" accept-charset="utf-8">
                <strong>Tên nhãn hiệu:</strong>
                <input type="text" class="form-control" name="tennhan">
                <br>
                <input type="submit" name="submit" class="btn btn-primary float-right" value="Thêm nhãn hiệu">
              </form>
            </div>
            <?php
                if ($_SERVER['REQUEST_METHOD']=='POST') {
                $name=$_POST['tennhan']; 
                $stmt = $con->prepare('INSERT INTO nhanhieu (TenNhanHieu) values (?)');
                $stmt->bindParam(1, $name);
                $stmt->execute();
              }
             ?>
        </div>
        <?php } ?>


        <?php if ($item=="sanpham" and $fun!="sua") { ?>
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Thêm sản phẩm</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
              <form method="Post" accept-charset="utf-8">
                <strong>Tên sản phẩm:</strong>
                <input type="text" class="form-control" id="usr" name="tensp">
                <strong>ID loại hàng:</strong>
                <input type="number" name="idloai" class="form-control">
                <strong>ID hãng:</strong>
                <input type="number" name="idhang" class="form-control">
                <strong>Ảnh:</strong>
                <input type="text" name="img" class="form-control">
                <strong>Giá:</strong>
                <input type="number" name="gia" class="form-control">
                <strong>Sale(%)</strong>
                <input type="number" name="sale" class="form-control">
                <br>
                <input type="submit" name="submit" class="btn btn-primary float-right" value="Thêm sản phẩm">
              </form>
            </div>
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
                $sql = "INSERT INTO sanpham (TenSanPham, IdNhanHieu, IdLoaiHang, img, Gia, GiamGia, NgayNhap ) values (?,?,?,?,?,?,?)";
                $stmt= $con->prepare($sql);
                $stmt->execute([$name, $idloai, $idhang, $img, $gia, $sale, $date]);
              }
             ?>    
        </div>
        <?php } ?>


        <?php if ($item=="loaisanpham" and $fun!="sua") { ?>
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Thêm loại sản phẩm</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
              <form method="Post" accept-charset="utf-8">
                <strong>Tên loại sản phẩm:</strong>
                <input type="text" class="form-control" name="tenloai">
                <br>
                <strong>Title:</strong>
                <input type="text" class="form-control" name="title">
                <br>
                <strong>Logo:</strong>
                <input type="text" class="form-control" name="img">
                <br>
                <input type="submit" name="submit" class="btn btn-primary float-right" value="Thêm nhãn hiệu">
              </form>
            </div>
            <?php
                if ($_SERVER['REQUEST_METHOD']=='POST') {
                $name=$_POST['tenloai'];
                $title=$_POST['title']; 
                $img=$_POST['img']; 
                $sql = "INSERT INTO loaihang (TenLoaiHang, title, img) values (?,?,?)";
                $stmt= $con->prepare($sql);
                $stmt->execute([$name, $title, $img]);
              }
             ?>
        </div>
        <?php } ?>

        
        <?php if ($item=="donhang" and $fun!="sua") { ?>
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Thêm sản phẩm</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
              <form method="Post" accept-charset="utf-8">
                <strong>ID thành viên:</strong>
                <input type="text" class="form-control" id="usr" name="idtv">
                <strong>ID sản phẩm:</strong>
                <input type="number" name="idsp" class="form-control">
                <strong>Số lượng:</strong>
                <input type="number" name="sl" class="form-control">
                <br>
                <input type="submit" name="submit" class="btn btn-primary float-right" value="Thêm sản phẩm">
              </form>
            </div>
            <?php
                if ($_SERVER['REQUEST_METHOD']=='POST') {
                $idtv=$_POST['idtv'];
                $idsp=$_POST['idsp']; 
                $sl=$_POST['sl'];
                date_default_timezone_set('Asia/Ho_Chi_Minh');
                $date = date('Y-m-d H:i');
                $gia=10;
                $stmt = $con->prepare('SELECT * from sanpham WHERE IdSanPham= :ID');

                 //Thiết lập kiểu dữ liệu trả về
                $stmt->setFetchMode(PDO::FETCH_ASSOC);

                //Gán giá trị và thực thi
                $stmt->execute(array('ID' => $idsp));

                //Hiển thị kết quả, vòng lặp sau đây sẽ dừng lại khi đã duyệt qua toàn bộ kết quả
                $row = $stmt->fetch();
                $gia=$row['Gia'];
                $sale = $row['GiamGia'];
                $gia= $gia/100*(100-$sale)*$sl;
                echo "$gia";
                $sql = "INSERT INTO donhang (IdThanhVien, IdSanPham, SoLuong, TgDat, Gia) values (?,?,?,?,?)";
                $stmt= $con->prepare($sql);
                $stmt->execute([$idtv, $idsp, $sl, $date, $gia]);
              }
             ?>    
        </div>
        <?php } ?>


        <?php if ($item=="khuyenmai" and $fun!="sua") { ?>
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Thêm quảng cáo</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
              <form method="Post" accept-charset="utf-8">
                <strong>Tên quảng cáo:</strong>
                <input type="text" class="form-control" name="title">
                <strong>Ảnh:</strong>
                <input type="text" class="form-control" name="img">
                <br>
                <input type="submit" name="submit" class="btn btn-primary float-right" value="Thêm nhãn hiệu">
              </form>
            </div>
            <?php
                if ($_SERVER['REQUEST_METHOD']=='POST') {
                $name=$_POST['title'];
                $img=$_POST['img'];
                date_default_timezone_set('Asia/Ho_Chi_Minh');
                $date = date('Y-m-d H:i'); 
                $sql = "INSERT INTO quangcao ( Title, Img , Date) values (?,?,?)";
                $stmt= $con->prepare($sql);
                $stmt->execute([$name, $img, $date]);
              }
             ?>
        </div>
        <?php } ?>
</div>
<?php } ?>