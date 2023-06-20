<?php
session_start();
include('db.php');
include('script.php');
// register//
if(isset($_POST['registerbtn']))
{
    $username = $_POST['username'];
    $name = $_POST['registername'];
    $tel = $_POST['tel'];
    $address = $_POST['address'];
    $password = sha1($_POST['password']);
    $cpassword = sha1($_POST['confirmpassword']);
    //check phone number
    $check = "SELECT * FROM customer WHERE tel='$tel' ";
    $check_result = mysqli_query($connection, $check) or die(mysqli_error($connection));
    if(mysqli_num_rows($check_result) > 0)
    {
        // $_SESSION['status'] = "ເບີໂທລະສັບ ນີ້ມີຜູ້ໃຊ້ແລ້ວ ກະລຸນາໃຊ້ເບີອື່ນແທນ !.";
        // $_SESSION['status_code'] = "error";
        // header('Location: register.php');  
            echo "<script>";
			echo "alert(' ເບີໂທລະສັບ ນີ້ມີຜູ້ໃຊ້ແລ້ວ ກະລຸນາໃຊ້ເບີອື່ນແທນ !');";
			echo "window.location='register.php';";
          	echo "</script>";
    }else
    //check phone number
    $check = "SELECT * FROM customer WHERE username='$username' ";
    $check_result = mysqli_query($connection, $check) or die(mysqli_error($connection));
    if(mysqli_num_rows($check_result) > 0)
    {
        // $_SESSION['status'] = "ເບີໂທລະສັບ ນີ້ມີຜູ້ໃຊ້ແລ້ວ ກະລຸນາໃຊ້ເບີອື່ນແທນ !.";
        // $_SESSION['status_code'] = "error";
        // header('Location: register.php');  
            echo "<script>";
			echo "alert(' ຊື່ນີ້ມີຄົນໃຊ້ແລ້ວກະລຸນາໃຊ້ຊື່ອື່ນແທນ!');";
			echo "window.location='register.php';";
          	echo "</script>";
    }else
    {
        if($password === $cpassword)
        {
            $query = "INSERT INTO customer (username,name,tel,address,password)
             VALUES ('$username','$name','$tel','$address','$password')";
            $query_run = mysqli_query($connection, $query);
            if($query_run)
            {
                // echo "Saved";
                echo ("<script LANGUAGE='JavaScript'>
                window.alert('ລົງທະບຽນສຳເລັດແລ້ວ ເຂົ້າສູ່ລະບົບໄດ້ເລີຍ');
                window.location='login.php';
                </script>"); 
                // $_SESSION['success'] = "ລົງທະບຽນສຳເລັດແລ້ວ ເຂົ້າສູ່ລະບົບໄດ້ເລີຍ";
                // header('Location: login.php');
            }
            else 
            {
                 // echo "Not Saved";
                $_SESSION['status'] = "ລົງທະບຽນບໍ່ສຳເລັດ";
                header('Location: register.php');  
            }
        }
        else{
            // $_SESSION['status'] = "ລະຫັດຜ່ານບໍ່ຕົງກັນ";
            // header('Location: register.php'); 
            echo ("<script LANGUAGE='JavaScript'>
            window.alert('ລະຫັດຜ່ານບໍ່ຕົງກັນ');
            window.location='register.php';
            </script>"); 
        }
    }
}

?>

