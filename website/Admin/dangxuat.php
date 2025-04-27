<?php 
	session_start();
	unset($_SESSION['IDadmin'] );
	header('location: ../Admin/ ');
 ?>