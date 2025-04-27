<?php


    if ($item=="hang") {
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "DELETE FROM nhanhieu WHERE IdNhanHieu='$ID'";
        $con->exec($sql);}


    elseif ($item=="sanpham") {
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "DELETE FROM sanpham WHERE IdSanPham='$ID'";
        $con->exec($sql);}


    elseif ($item=="loaisanpham") {
        $con = new PDO("mysql:host=localhost; dbname=banpc","root","");
        $con->exec("set names utf8");
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "DELETE FROM loaihang WHERE IdLoaiHang='$ID'";
        $con->exec($sql);}


    elseif ($item=="donhang") {
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "DELETE FROM donhang WHERE IdDonHang='$ID'";
        $con->exec($sql);}


    elseif ($item=="nguoidung") {
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "DELETE FROM thanhvien WHERE IdThanhVien='$ID'";
        $con->exec($sql);}


    elseif ($item=="khuyenmai") {
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "DELETE FROM quangcao WHERE IdQuangCao='$ID'";
        $con->exec($sql);}


    elseif ($item=="lienhe") {
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "DELETE FROM lienhe WHERE ID='$ID'";
        $con->exec($sql);}


 ?>