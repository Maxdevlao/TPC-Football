<!-- ປ່ຽນແປງລະຫັດຜ່ານລົງຖານຂໍ້ມູນ -->
<?php
include('db.php');
include('script.php');
	$c_id  = $_POST["c_id"];
	$c_pass1  =  sha1($_POST["pass1"]);
	$c_pass2  = sha1($_POST["pass2"]);

	if($c_pass1 != $c_pass2){
		echo "<script type='text/javascript'>";
		echo "alert('password ບໍ່ຄືກັນ ກະລຸຸນາໃສ່ໃໝ່ ');";
		echo "window.location = 'edit_pass.php'; ";
		echo "</script>";
       
	}else{
	$sql = "UPDATE customer SET 
	password ='$c_pass1' WHERE id=$c_id";

	$result = mysqli_query($connection, $sql);
	}
	mysqli_close($connection);
	if($result){
	// echo "<script type='text/javascript'>";
	// echo "alert('ແກ້ໄຂ password ສຳເລັດແລ້ວ');";
	// echo "window.location = 'profile.php'; ";
	// echo "</script>";
    $_SESSION['status'] = "ແກ້ໄຂສຳເລັດ";
    $_SESSION['status_code'] = "success";
    header('Location: profile.php');
	}else{
	// echo "<script type='text/javascript'>";
	// echo "window.location = 'profile.php'; ";
	// echo "</script>";
    $_SESSION['status'] = "ແກ້ໄຂບໍ່ສຳເລັດ";
    $_SESSION['status_code'] = "error";
    header('Location: edit_pass.php'); 
}
?>