
<?php
include('includes/script.php');
include('security.php');
include('database/dbconfig.php');

if(isset($_POST['update']))
{
    $id = $_POST['edit_id'];
    $price1= $_POST['edit_peice1'];
    $price2 =$_POST['edit_peice2'];

    $query = "UPDATE price SET price_court1='$price1',price_court2='$price2' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);
    if($query_run)
    {
        $_SESSION['status'] = "ແກ້ໄຂສຳເລັດແລ້ວ";
        $_SESSION['status_code'] = "success";
        header('Location: price.php'); 
    }
    else
    {
        $_SESSION['status'] = "ແກ້ໄຂບໍ່ສຳເລັດ";
        $_SESSION['status_code'] = "error";
        header('Location: price.php'); 
    }
}
//This is delete  ////////////////////////////////


   ?>
