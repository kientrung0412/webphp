<!DOCTYPE html>
<html>

<head>
    <title></title>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Trang chủ</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
</head>

<body>
    <div class="card mb-3 ">
        <div class="card-body">
            <?php include'module/edit.php' ?>
            <div class="table-responsive">
                <table id="example1" class="table table-bordered table-hover display">
                    <thead>
                        <tr>
                            <td style="width: auto">ID loại sản phẩm</td>
                            <td style="width: auto">Tên loại sản phẩm</td>
                            <td style="width: auto">Title</td>
                            <td style="width: auto">Ảnh icon</td>
                            <td style="width: 2%">Sửa</td>
                            <td style="width: 2%">Xóa</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach($con->query("select * from loaihang") as $row)
                                    {
                                        $ID=$row['IdLoaiHang'];
                                        $name=$row['TenLoaiHang'];
                                        $title=$row['Title'];
                                        $Img=$row['Img'];

                         ?>
                         <tr>
                            <td><?php echo "$ID"; ?></td>
                            <td><?php echo "$name"; ?></td>
                            <td><?php echo "$title"; ?></td>
                            <td><?php echo "$Img"; ?></td>
                            
                                <td>
                                <a href="?fun=sua&item=loaisanpham&active=item&ID=<?php echo "$ID"?>" title="">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </td>
                            
                            <td >
                                <a href="?load=yes&fun=xoa&item=loaisanpham&active=item&ID=<?php echo "$ID"?>" onClick="return confirm('Bạn có thực sự muốn xóa ?');">
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

</html>