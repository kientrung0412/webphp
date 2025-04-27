
<body>
    <div class="card mb-3 ">
        <div class="card-body">
            <?php include('module/edit.php') ?>
            <div class="table-responsive">
                <table id="example1" class="table table-bordered table-hover display">
                    <thead>
                        <tr>
                            <td style="width: auto">Id đơn hàng</td>
                            <td style="width: auto">Id thành viên</td>
                            <td style="width: auto">Id sản phẩm</td>
                            <td style="width: auto">Số lượng</td>
                            <td style="width: auto">Thành tiền</td>
                            <td style="width: auto">Thời đặt</td>
                            <td style="width: auto">Thời gian giao</td>
                            <td style="width: 2%">Sửa</td>
                            <td style="width: 2%">Xóa</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach($con->query("select * from donhang") as $row)
                                    {
                                        $ID=$row['IdDonHang'];
                                        $IDtv=$row['IdThanhVien'];
                                        $IDsp=$row['IdSanPham'];
                                        $num=$row['SoLuong'];
                                        $gia=$row['Gia'];
                                        $tgd=$row['TgDat'];
                                        $tgd = date_create($tgd);
                                        $tgd=date_format($tgd, 'd/m/Y H:i:s');
                                        $tgg=$row['TgGiao'];
                                        $tgg = date_create($tgg);
                                        $tgg=date_format($tgg, 'd/m/Y H:i:s');
                         ?>
                         <tr>
                            <td><?php echo "$ID"; ?></td>
                            <td><?php echo "$IDtv"; ?></td>
                            <td><?php echo "$IDsp"; ?></td>
                            <td><?php echo "$num"; ?></td>
                            <td><?php echo "$gia"; ?></td>
                            <td><?php echo "$tgd"; ?></td>
                            <td><?php echo "$tgg"; ?></td>
                            
                            <td>
                                <a href="?fun=sua&item=donhang&active=item&ID=<?php echo "$ID"?>" title="">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </td>
                            <td >
                                <a href="?load=yes&fun=xoa&item=donhang&active=item&ID=<?php echo "$ID"?>" onClick="return confirm('Bạn có thực sự muốn xóa ?');">
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
        $(document).ready(function() {
            $('#example1').DataTable();
        });
        </script>
    </div>
</body>