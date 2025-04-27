<?php 
    if ($email="" or $pass="" or $repass="" or $name="" or $a="" or $diachi="") {
                $error="Bạn phải nhập đày đủ các trường";
            }
            elseif (strlen($pass) > 3 and strlen($pass)<26){
                $error="Mật khẩu phải dài từ 4 đến 25 ký tự";
            }
            elseif ($pass != $repass){
                $error="Xác thực mật khẩu không khớp";
            }
            elseif (strlen($name)>7){
                $error="Bạn phải nhập đúng họ và tên";
            }
            elseif ($len!=1){
                $error="Sai định dạng số điện thoại";
            }
            elseif ($fr!=10){
                $error="Bạn phải nhập đúng số điện thoại";
            }
            elseif (strlen($diachi) > 15){
                $error="Bạn hãy nhập đúng địa chỉ";
            }

 ?>