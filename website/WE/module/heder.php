
<div class="header bg-danger ">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <a href="index.php" title="">
                    <img src="img/logo_logo-hnc-tet3.png" class="img-fluid" alt="" width="120">
                </a>
            </div>
            <div class="col-md-4" id="search">
                <form class="form-inline " action="timkiem.php">
                    <input class="form-control timkiem" name="txttim" type="text" id="ipsearch" placeholder="Bạn cần tìm gì...">
                    <button class="btn bg-white" id="btsearch" type="submit" data-toggle="modal" data-target="#tim">
                        <i class="fas fa-search" style=""></i>
                    </button>

                </form>
            </div>
            <?php if (isset($_SESSION['IDtv'])) { ?>
            <div class="col-md-2 text-center">
                <a href="cart.php" title=""><i class=" fas fa-shopping-cart" id="cart"></i></a>
            </div>
            <?php } else { ?>
            <div class="col-md-2 text-center">
                <a  title="" class="addcartno"><i class=" fas fa-shopping-cart" id="cart"></i></a>
            </div>
            <?php } ?>
            <div class="col-md-1 text-center">
                <div class="dropdown" >
                    <button class="btn dropdown" type="button" id="login" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user-circle" id="user"></i>
                    </button>
                    <?php if (isset($_SESSION['IDtv'])) { ?>
                    <div class="dropdown-menu" aria-labelledby="login">
                        <a class="dropdown-item" href="#">Thông tin tài khoản</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="login/dangxuat.php">Đăng xuất</a>
                    </div>
                    <?php }
                        else{  
                     ?>
                    <div class="dropdown-menu" aria-labelledby="login">
                        <a class="dropdown-item" href="login/login.php">Đăng nhập</a>
                    </div>
                    <?php } ?>    
                </div>
            </div>
            <div class="col-md-1 text-md-right ">
                <p id="phone"><i class="fas fa-phone" style=""></p></i>
            </div>
            <div class="col-md-2 ">
                <h5 style="color: #FFDC00">Mua hàng</h5>
                <?php 
                    foreach($con->query("select * from lienhe") as $row){
                    $num=$row['Sdt'];
                    $diachi = $row['DiaChi'];
                    $email = $row['Email'];

                ?>
                <h5 style="color: #AAAAAA"><h6><?php echo "$num"; ?></h6></h5>
            <?php } ?>
            </div>
        </div>
    </div>
</div>
<!-- <script type="text/javascript">
    $(document).ready(function(){
        $('#btsearch').click(function(){
            var txt = $('#ipsearch').val();
            $.post('module/timkiem.php', {data: txt}, function(data) {
                $('.danhsach').html(data);

            });
        })
    })
</script> -->

