
<?php
include('includes/script.php');
include('security.php');
include('database/dbconfig.php');


if(isset($_POST['add_btn']))
{    
     $name = $_POST['name'];
     $phone = $_POST['tel'];
     $addr = $_POST['address'];
     $username = $_POST['username'];
     $pass = $_POST['password'];
//check phone

$tel_query = "SELECT * FROM customer WHERE tel='$phone' ";
$tel_query_run = mysqli_query($connection, $tel_query);
if(mysqli_num_rows($tel_query_run) > 0)
{
    $_SESSION['status'] = "Email ນີ້ມີຜູ້ໃຊ້ແລ້ວ ກະລຸນາໃຊ້ Email ອື່ນ.";
    $_SESSION['status_code'] = "error";
    header('Location: customer.php');  
}
else 
{
   $sql = "INSERT INTO customer (username,name,tel,address,password)
        VALUES ('$username','$name','$phone',' $addr',' $pass')";
    
        $query_run = mysqli_query($connection, $sql);
        
        if($query_run)
        {
            // echo "Saved";
            $_SESSION['status'] = "ເພີ່ມຂໍ້ມູນສຳເລັດ";
            $_SESSION['status_code'] = "success";
            header('Location: customer.php');
        }
        else 
        {
            $_SESSION['status'] = "ຍັງບໍ່ໄດ້ເພີ່ມຂໍ້ມູນ";
            $_SESSION['status_code'] = "error";
            header('Location: customer.php');  
        }
}

}
//This is edit customer////////////////////////////////////////////

if(isset($_POST['updatebtnteam']))
{
    $id = $_POST['edit_id'];
    $edit_name = $_POST['edit_name'];
    $edit_tel = $_POST['edit_tel'];
    $edit_addr = $_POST['edit_address'];
    $edit_pass = $_POST['edit_password'];

    $query = "UPDATE customer SET name='$edit_name',tel='$edit_tel',address='$edit_addr',password='$edit_pass'
     WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "ແກ້ໄຂສຳເລັດແລ້ວ";
        $_SESSION['status_code'] = "success";
        header('Location: customer.php'); 
    }
    else
    {
        $_SESSION['status'] = "ແກ້ໄຂບໍ່ສຳເລັດ";
        $_SESSION['status_code'] = "error";
        header('Location: customer.php'); 
    }
}
//This is delete ////////////////////////////////
if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM customer WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "ລົບຂໍ້ມູນສຳເລັດແລ້ວ";
        $_SESSION['status_code'] = "success";
        header('Location: customer.php'); 
    }
    else
    {
        $_SESSION['status'] = "ຍັງບໍ່ໄດ້ລົບຂໍ້ມູນ";       
        $_SESSION['status_code'] = "error";
        header('Location: customer.php'); 
    }    
}



   ?>
