<?php 
	session_start();
	if(isset($_SESSION['s_email'])){
		echo ("<script> location.href ='beranda.php';</script>");
	}else if(isset($_SESSION['s_pesan'])){
		require('header.php'); 
		require('isi_index.php'); 
		require('footer.php');
		echo "<script> alert('".$_SESSION['s_pesan']."') </script>";
		unset($_SESSION['s_pesan']);
	}else{
		require('header.php'); 
		require('isi_index.php'); 
		require('footer.php');
	}?>