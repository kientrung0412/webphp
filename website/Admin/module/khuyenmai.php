
<body>
    <div class="card mb-3 ">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example1" class="table table-bordered table-hover display">
                    <thead>
                        <tr>
                            <td style="width: auto">Id quang cáo</td>
                            <td style="width: auto">Title</td>
                            <td style="width: auto">Ảnh</td>
                            <td style="width: auto">Ngày thêm</td>
                            <td style="width: 2%">Sửa</td>
                            <td style="width: 2%">Xóa</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach($con->query("select * from quangcao") as $row)
                                    {
                                        $ID=$row['IdQuangCao'];
                                        $title=$row['Title'];
                                        $img=$row['Img'];
                                        $date=$row['Date'];
                                        $date = date_create($date);
                                        $date=date_format($date, 'd/m/Y H:i:s');
                         ?>
                         <tr>
                            <td><?php echo "$ID"; ?></td>
                            <td><?php echo "$title"; ?></td>
                            <td><img src="<?php echo "$img"; ?>" alt="" hight="50" width="120"></td>
                            <td><?php echo "$date"; ?></td>
                            <td><i class="fas fa-edit"></i></td>
                            <td >
                                <a href="?load=yes&fun=xoa&item=khuyenmai&active=item&ID=<?php echo "$ID"?>" onClick="return confirm('Bạn có thực sự muốn xóa ?');">
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
            $('#example1').DataTable();
        });
        // END CODE FOR BASIC DATA TABLE
        </script>
    </div>
</body>