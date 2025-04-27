<?php
	include('module/conn.php'); 
	$active="";
	if (isset($_GET['active'])) {
		$item=$_GET['item'];
		$active=$_GET['active'];
	}
	if (isset($_GET['fun'])) 
	{
        $fun=$_GET['fun'];
        $ID=$_GET['ID'];
        if ($fun=="xoa") {
        	include 'module/delete.php';
        }
        if ($fun=="sua" and $item=="lienhe") {
           $sua="lienhe";
        }
        if ($fun=="sua" and $item=="sanpham") {
           $sua="sanpham";
        }

    }	
 ?>