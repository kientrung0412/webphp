<div class="row">
                        <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                            <div class="card-box noradius noborder bg-default">
                                <i class="fa fa-file-text float-right text-white"></i>
                                <?php $con = mysqli_connect('localhost','root','','banpc');
                                    mysqli_set_charset($con, 'UTF8');
                                    $sql = 'SELECT * FROM sanpham';
                                    $rs = mysqli_query($con, $sql);
                                    $num_rows= mysqli_num_rows($rs); ?>
                                <h6 class="text-white text-uppercase m-b-20"> Số sản phẩm</h6>
                                <h1 class="m-b-20 text-white counter"><?php echo "$num_rows"; ?></h1>
                                
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                            <div class="card-box noradius noborder bg-warning">
                                <i class="fa fa-bar-chart float-right text-white"></i>
                                 <?php $con = mysqli_connect('localhost','root','','banpc');
                                    mysqli_set_charset($con, 'UTF8');
                                    $sql = 'SELECT * FROM donhang';
                                    $rs = mysqli_query($con, $sql);
                                    $num_rows= mysqli_num_rows($rs); ?>
                                <h6 class="text-white text-uppercase m-b-20">Số đơn hàng</h6>
                                <h1 class="m-b-20 text-white counter"><?php echo "$num_rows"; ?></h1>
                                
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                            <div class="card-box noradius noborder bg-info">
                                <i class="fa fas fa-users float-right text-white"></i>
                                 <?php $con = mysqli_connect('localhost','root','','banpc');
                                    mysqli_set_charset($con, 'UTF8');
                                    $sql = 'SELECT * FROM thanhvien';
                                    $rs = mysqli_query($con, $sql);
                                    $num_rows= mysqli_num_rows($rs); ?>
                                <h6 class="text-white text-uppercase m-b-20">Số thành viên</h6>
                                <h1 class="m-b-20 text-white counter"><?php echo $num_rows ?></h1>
                                
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                            <div class="card-box noradius noborder bg-danger">
                                <i class="fa fa-bell float-right text-white"></i>
                                 <?php $con = mysqli_connect('localhost','root','','banpc');
                                    mysqli_set_charset($con, 'UTF8');
                                    $sql = 'SELECT * FROM sanpham WHERE GiamGia !=0';
                                    $rs = mysqli_query($con, $sql);
                                    $num_rows= mysqli_num_rows($rs); ?>
                                <h6 class="text-white text-uppercase m-b-20">Số khuyến mại</h6>
                                <h1 class="m-b-20 text-white counter"><?php echo $num_rows ?></h1>
                                
                            </div>
                        </div>
                    </div>