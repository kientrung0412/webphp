<div class="container pt-5 mb-4 pb-5">
    <div class="row bg-danger">
        <?php 
            foreach($con->query("select * from lienhe") as $row){
                $num=$row['Sdt'];
                $diachi = $row['DiaChi'];
                $email = $row['Email'];

         ?>
        <div class="col-md-3  text-white pt-3 pl-5">
            <h5>Số điện thoại liên hệ:</h5>
            <h6><?php echo "$num"; ?></h6>
        </div>
        <div class="col-md-5  text-white pt-3 pl-5">
            <h5>Địa chỉ Showroom:</h5>
            <h6><?php echo "$diachi"; ?></h6>
        </div>
        <div class="col-md-4  text-white pt-3 pl-5">
            <h5>Email liên hệ:</h5>
            <h6><?php echo "$email"; ?></h6>
        </div>
    <?php } ?>
    </div>
</div>