<?php
	session_start();
	$ID=$_POST['data'];
	$IDtv=$_SESSION['IDtv'];
	$sl=1;
	$con = mysqli_connect('localhost','root','','banpc');
    mysqli_set_charset($con, 'UTF8');
	$sql = "SELECT * FROM giohang WHERE IdSanPham = '$ID' and IdThanhVien = '$IDtv'";
	$rs = mysqli_query($con, $sql);
    $num_rows= mysqli_num_rows($rs);
	if ($num_rows==0) {
		include('module/conn.php');
		$stmt = $con->prepare('INSERT INTO giohang (IdSanPham, IdThanhVien, SoLuong) values (?, ?, ?)');
  		$stmt->bindParam(1, $ID);
  		$stmt->bindParam(2, $_SESSION['IDtv']);
  		$stmt->bindParam(3, $sl);
    	$stmt->execute();
	}
	else{
		include('module/conn.php');
		foreach($con->query("SELECT * FROM giohang WHERE IdSanPham = '$ID' and IdThanhVien = '$IDtv'") as $row){
			$sl=$row['SoLuong']+1;
		}
		$sql = "UPDATE giohang SET SoLuong = ? WHERE IdSanPham = ? and IdThanhVien = ?";
        $stmt= $con->prepare($sql);
        $stmt->execute([$sl, $ID, $IDtv]);                      
	}
 ?>