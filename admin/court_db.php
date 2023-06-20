
<?php
include('includes/script.php');
include('security.php');
include('database/dbconfig.php');

// This is add court
if(isset($_POST['savebtn']))
{    
    $c_name = $_POST['court_num'];
    $c_detail =$_POST['detail'];
     $sql = "INSERT INTO court (court_num,court_detail)
     VALUES ('$c_name','$c_detail')";

     if (mysqli_query($connection, $sql)) {
         echo "ເພີ່ນຂໍ້ມູນສຳເລັດແລ້ວ !";
         header('Location: court.php'); 
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($connection);
     }
     mysqli_close($connection);
}
//This is edit ////////////////////////////////////////////

if(isset($_POST['updatebtncourt']))
{
    $id = $_POST['edit_id'];
    $num = $_POST['edit_num'];
    $detail =$_POST['edit_detail'];

    $query = "UPDATE court SET court_num='$num',court_detail='$detail' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);
    if($query_run)
    {
        $_SESSION['status'] = "ແກ້ໄຂສຳເລັດແລ້ວ";
        $_SESSION['status_code'] = "success";
        header('Location: court.php'); 
    }
    else
    {
        $_SESSION['status'] = "ແກ້ໄຂບໍ່ສຳເລັດ";
        $_SESSION['status_code'] = "error";
        header('Location: court.php'); 
    }
}
//This is delete  ////////////////////////////////
if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM court WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "ລົບຂໍ້ມູນສຳເລັດແລ້ວ";
        $_SESSION['status_code'] = "success";
        header('Location: court.php'); 
    }
    else
    {
        $_SESSION['status'] = "ຍັງບໍ່ໄດ້ລົບຂໍ້ມູນ";       
        $_SESSION['status_code'] = "error";
        header('Location: court.php'); 
    }    
}



   ?>
