
<?php
require('db.php');
session_start();

if (isset($_POST['btnsend'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];
}
$sql = "INSERT INTO message (name,email,message) VALUES ('$name','$email','$msg')";
$query = mysqli_query($connection, $sql) or die("Error in query:" . mysqli_error($connection));

if ($query) {
    $_SESSION['status'] = "ສົ່ງຂໍ້ຄວາມແລ້ວ";
    $_SESSION['status_code'] = "success";
    header('Location: contact.php'); 
} else {
    $_SESSION['status'] = "ແກ້ໄຂບໍ່ສຳເລັດ";
    $_SESSION['status_code'] = "error";
    header('Location: contact.php'); 
}
mysqli_close($connection);
?>