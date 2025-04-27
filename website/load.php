
 	 <?php
 	 	$con = new PDO("mysql:host=localhost; dbname=banpc","root","");
        $con->exec("set names utf8");
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "DELETE FROM giohang WHERE IdSanPham = '$IDsp' AND IdThanhVien = '$IDtv";
       $con->exec($sql);
   
    ?>
 	   