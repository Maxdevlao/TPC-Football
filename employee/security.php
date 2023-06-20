<?php
session_start();
//ຄຳາັ່ງໃນການກວດສອບໃຫ້ລ໋ອກອິນກ່ອນເຂົ້າໃຊ້ງານ
if(!$_SESSION['name'])
{
	header('Location:login.php');
}
?>