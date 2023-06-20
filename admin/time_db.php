
<?php
include('includes/script.php');
include('security.php');
include('database/dbconfig.php');

// This is add time
if(isset($_POST['savebtn']))
{    
    $time = $_POST['time'];

     $sql = "INSERT INTO time (time) VALUES ('$time')";
     if (mysqli_query($connection, $sql)) {
         echo "ເພີ່ນຂໍ້ມູນສຳເລັດແລ້ວ !";
         header('Location: time.php'); 
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($connection);
     }
     mysqli_close($connection);
}
//This is edit ////////////////////////////////////////////

if(isset($_POST['update']))
{
    $id = $_POST['edit_id'];
    $time = $_POST['edit_time'];

    $query = "UPDATE time SET time='$time' WHERE time_id='$id' ";
    $query_run = mysqli_query($connection, $query);
    if($query_run)
    {
        $_SESSION['status'] = "ແກ້ໄຂສຳເລັດແລ້ວ";
        $_SESSION['status_code'] = "success";
        header('Location: time.php'); 
    }
    else
    {
        $_SESSION['status'] = "ແກ້ໄຂບໍ່ສຳເລັດ";
        $_SESSION['status_code'] = "error";
        header('Location: time_edit.php'); 
    }
}
//This is delete ////////////////////////////////
if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM time WHERE time_id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "ລົບຂໍ້ມູນສຳເລັດແລ້ວ";
        $_SESSION['status_code'] = "success";
        header('Location: time.php'); 
    }
    else
    {
        $_SESSION['status'] = "ຍັງບໍ່ໄດ້ລົບຂໍ້ມູນ";       
        $_SESSION['status_code'] = "error";
        header('Location: time.php'); 
    }    
}
   ?>
