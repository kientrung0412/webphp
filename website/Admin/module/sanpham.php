
<body>
    <div class="card mb-3 ">
        <div class="card-body">
            <?php include('module/edit.php') ?>
            <div class="table-responsive">
                <table id="sanpham" class="table table-bordered table-hover display">
                    <thead>
                        <tr>
                            <td style="width: 10%">ID sản phẩm</td>
                            <td style="width: auto">Tên sản phẩm</td>
                            <td style="width: auto">Loại sản phẩm</td>
                            <td style="width: auto">Nhãn hiệu</td>
                            <td style="width: 10%">Ảnh</td>
                            <td style="width: auto">Giá bán</td>
                            <td style="width: auto">Sale(%)</td>
                            <td style="width: auto">Ngày nhập</td>
                            <td style="width: 2%">Sửa</td>
                            <td style="width: 2%">Xóa</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach($con->query("select * from sanpham") as $row)
                                    {
                                        $ID=$row['IdSanPham'];
                                        $name=$row['TenSanPham'];
                                        $price=$row['Gia'];
                                        $sale=$row['GiamGia'];
                                        $loai=$row['IdLoaiHang'];
                                        $nhan=$row['IdNhanHieu'];
                                        $img=$row['Img'];
                                        $date=$row['NgayNhap'];
                                        $date = date_create($date);
                                        $date=date_format($date, 'd/m/Y H:i:s');
                                        $stmt = $con->prepare('SELECT * from nhanhieu WHERE IdNhanHieu= :ID');

                                        //Thiết lập kiểu dữ liệu trả về
                                        $stmt->setFetchMode(PDO::FETCH_ASSOC);

                                        //Gán giá trị và thực thi
                                        $stmt->execute(array('ID' => $nhan));

                                        //Hiển thị kết quả, vòng lặp sau đây sẽ dừng lại khi đã duyệt qua toàn bộ kết quả
                                        while($row = $stmt->fetch()) {
                                        $nhan= $row['TenNhanHieu'];
                                    }
                                        $stmt = $con->prepare('SELECT * from loaihang WHERE IdLoaiHang= :ID');

                                        //Thiết lập kiểu dữ liệu trả về
                                        $stmt->setFetchMode(PDO::FETCH_ASSOC);

                                        //Gán giá trị và thực thi
                                        $stmt->execute(array('ID' => $loai));

                                        //Hiển thị kết quả, vòng lặp sau đây sẽ dừng lại khi đã duyệt qua toàn bộ kết quả
                                        while($row = $stmt->fetch()) {
                                            $loai= $row['TenLoaiHang'];
                                        }

                         ?>
                         <tr>
                            <td><?php echo "$ID"; ?></td>
                            <td><?php echo "$name"; ?></td>
                            <td><?php echo "$loai"; ?></td>
                            <td><?php echo "$nhan"; ?></td>
                            <td><img src="<?php echo "$img"; ?>" width="50" hight="50" alt=""></td>
                            <td><?php echo "$price"; ?></td>
                            <td><?php echo "$sale"; ?></td>
                            <td><?php echo "$date"; ?></td>
                            <td>
                                <a href="?fun=sua&item=sanpham&active=item&ID=<?php echo "$ID"?>" title="">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </td>
                            <td >
                                <a href="?load=yes&fun=xoa&item=sanpham&active=item&ID=<?php echo "$ID"?>" onClick="return confirm('Bạn có thực sự muốn xóa ?');">
                                        <i class="fas fa-trash-alt"></i>
                                </a>
                                
                            </td>
                        </tr>
                        <?php } ?>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- BEGIN Java Script for this page -->
        <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
        <script>
        // START CODE FOR BASIC DATA TABLE 
        $(document).ready(function() {
            $('#sanpham').DataTable();
        });
        // END CODE FOR BASIC DATA TABLE
        </script>
    </div>
</body>