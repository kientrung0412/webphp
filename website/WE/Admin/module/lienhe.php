
<body>
    <div class="card mb-3 ">
        <div class="card-body">
            <?php include('module/edit.php') ?>
            <div class="table-responsive">
                <table id="example1" class="table table-bordered table-hover display">
                    <thead>
                        <tr>
                            <td style="width: auto">ID</td>
                            <td style="width: auto">Email</td>
                            <td style="width: auto">Số điện thoại</td>
                            <td style="width: auto">Địa chỉ</td>
                            <td style="width: 2%">Sửa</td>
                            <td style="width: 2%">Xóa</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach($con->query("select * from lienhe") as $row)
                                    {
                                        $ID=$row['ID'];
                                        $email=$row['Email'];
                                        $sdt=$row['Sdt'];
                                        $diachi=$row['DiaChi'];
                                        
                         ?>
                         <tr>
                            <td><?php echo "$ID"; ?></td>
                            <td><?php echo "$email"; ?></td>
                            <td><?php echo "$sdt"; ?></td>
                            <td><?php echo "$diachi"; ?></td>
                            <td>
                                <a href="?fun=sua&item=lienhe&active=item&ID=<?php echo "$ID"?>" title="">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </td>
                            <td >
                                <a href="?fun=xoa&item=lienhe&active=item&ID=<?php echo "$ID"?>" onClick="return confirm('Bạn có thực sự muốn xóa ?');">
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