<?php
include("db.php");
if(isset($_POST['function']) && $_POST['function'] == 'courts') {
	$id = $_POST['id'];
	//$sql ="SELECT * FROM time WHERE court1 OR court2 = '$id' ";
	$sql = "SELECT time1.time,time1.time_id, court.id FROM time1 INNER JOIN court ";

	$query = mysqli_query($connection,$sql);
		echo '<option selected disabled >ເລືອກເວລາ</option>';
	foreach ($query as $value) {
		echo '<option value="'.$value['time_id'].'">'.$value['time'].'</option>';
		
	}
	exit();	
}

if(isset($_POST['function']) && $_POST['function'] == 'times') {
	$id = $_POST['id'];
	$court = $_POST['court'];
	$sql ="SELECT * FROM price WHERE  time_id = '$id'";

	$query = mysqli_query($connection,$sql);
	$result = mysqli_fetch_assoc($query);

	if ($court == '1') {
		echo $result['price_court1']; 
	}
	else{
	echo $result['price_court2'];

	}
	exit();	
}

?>