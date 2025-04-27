<?php include('conn.php'); ?>
<div class="row">
                        <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                            <div class="card-box noradius noborder bg-default">
                                <i class="fa fa-file-text float-right text-white"></i>
                                <h6 class="text-white text-uppercase m-b-20">
                                <?php 
                                $dem = "SELECT COUNT(*) FROM `sanpham`";
                                 ?>
                            </h6>
                                <h1 class="m-b-20 text-white counter"><?php echo "$dem"; ?></h1>
                                
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                            <div class="card-box noradius noborder bg-warning">
                                <i class="fa fa-bar-chart float-right text-white"></i>
                                <h6 class="text-white text-uppercase m-b-20">Số đơn hàng
                                    <?php 
                                    $em ="SELECT COUNT(*) FROM `donhang`";

                                     ?>

                                </h6>
                                <h1 class="m-b-20 text-white counter"><?php echo "$em"; ?></h1>
                                
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                            <div class="card-box noradius noborder bg-info">
                                <i class="fa fas fa-users float-right text-white"></i>
                                <h6 class="text-white text-uppercase m-b-20">Số thành viên
                                    <?php 
                                    $cong = "SELECT COUNT(*) FROM `thanhvien`";
                                     ?>

                                </h6>
                                <h1 class="m-b-20 text-white counter"><?php echo "$cong"; ?></h1>
                                
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                            <div class="card-box noradius noborder bg-danger">
                                <i class="fa fa-bell float-right text-white"></i>
                                <h6 class="text-white text-uppercase m-b-20">Số khuyến mại
                                    <?php 
                                    $m = "SELECT COUNT(*) FROM `khuyenmai`";
                                     ?>

                                </h6>
                                <h1 class="m-b-20 text-white counter"><?php echo "$m"; ?></h1>
                                
                            </div>
                        </div>
                    </div>