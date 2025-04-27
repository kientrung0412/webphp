<?php 
   include '../module/conn.php';
   $pass = password_hash($pass, PASSWORD_DEFAULT);
    $stmt = $con->prepare('INSERT INTO thanhvien (Email, HoVaTen, Sdt, DiaChi, Password) values (?, ?, ?, ?, ?)');
    $data = array($email, $name, $a, $diachi, $pass);
    $stmt->execute($data);
 ?>