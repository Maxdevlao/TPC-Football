<?php
//session_start();
//ຄຳສັ່ງໃນການກວດສອບໃຫ້ລ໋ອກອິນກ່ອນເຂົ້າໃຊ້ງານ
if(!$_SESSION['username'])
{
	header('Location:../login.php');
}
?>