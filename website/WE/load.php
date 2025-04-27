<?php 
	session_start();
	$ID=17;
	$IDtv=$_SESSION['IDtv'];
	$sl=$_POST['upload'];
	include('module/conn.php');
	$sql = "UPDATE giohang SET SoLuong = ? WHERE IdSanPham = ? and IdThanhVien = ?";
    $stmt= $con->prepare($sql);
    $stmt->execute([$sl, $ID, $IDtv]);
 ?>
 	