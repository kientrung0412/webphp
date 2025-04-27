<?php 
   include '../module/conn.php';
    $stmt = $con->prepare('INSERT INTO thanhvien (Email, HoVaTen, Sdt, DiaChi, Password) values (?, ?, ?, ?, ?)');
    $data = array($email, $name, $a, $diachi, $pass);
    $stmt->execute($data);
 ?>