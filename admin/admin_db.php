
<?php
include('security.php');
include('database/dbconfig.php');

// Add employee//
if(isset($_POST['adminbtn']))
{
    $name = $_POST['fullname'];
    $gender = $_POST['gender'];
    $tel = $_POST['tel'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $password = SHA1($_POST['password']);
    $cpassword = SHA1($_POST['confirmpassword']);
    $status = $_POST['status'];

    $email_query = "SELECT * FROM employee WHERE email='$email' ";
    $email_query_run = mysqli_query($connection, $email_query);
    if(mysqli_num_rows($email_query_run) > 0)
    {
        $_SESSION['status'] = "Email ນີ້ມີຜູ້ໃຊ້ແລ້ວ ກະລຸນາໃຊ້ Email ອື່ນ.";
        $_SESSION['status_code'] = "error";
        header('Location: admin.php');  
    }
    else 
    {
        if($password === $cpassword)
        {
            $query = "INSERT INTO employee (fullname,gender,tel,address,email,password,status)
             VALUES ('$name','$gender','$tel','$address','$email','$password','$status')";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['status'] = "ເພີ່ມຂໍ້ມູນສຳເລັດ";
                $_SESSION['status_code'] = "success";
                header('Location: employee.php');
            }
            else 
            {
                $_SESSION['status'] = "ຍັງບໍ່ໄດ້ເພີ່ມຂໍ້ມູນ";
                $_SESSION['status_code'] = "error";
                header('Location: employee.php');  
            }
        }
        else 
        {
            $_SESSION['status'] = "ລະຫັດຜ່ານບໍ່ຕົງກັນ";
            $_SESSION['status_code'] = "warning";
            header('Location: register.php');  
        }
    }

}
//This is edit ////////////////////////////////

if(isset($_POST['updatebtn']))
{
    $id = $_POST['edit_id'];
    $name = $_POST['edit_fullname'];
    $tel = $_POST['edit_tel'];
    $address = $_POST['edit_address'];
    $email = $_POST['edit_email'];
    $password = SHA1($_POST['edit_password']);
    $status = $_POST['edit_status'];
    $query = "UPDATE employee SET fullname='$name',tel='$tel',address='$address',email='$email' ,password='$password' ,status='$status'  WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);
    if($query_run)
    {
        $_SESSION['status'] = "ແກ້ໄຂສຳເລັດ";
        $_SESSION['status_code'] = "success";
        header('Location: employee.php'); 
    }
    else
    {
        $_SESSION['status'] = "ແກ້ໄຂບໍ່ສຳເລັດ";
        $_SESSION['status_code'] = "error";
        header('Location: employee.php'); 
    }
}
//This is delete data ////////////////////////////////
if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];
    $query = "DELETE FROM employee WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);
    if($query_run)
    {
        $_SESSION['status'] = "ລົບຂໍ້ມູນສຳເລັດ";
        $_SESSION['status_code'] = "success";
        header('Location: admin.php'); 
    }
    else
    {
        $_SESSION['status'] = "ບໍ່ສຳເລັດ";       
        $_SESSION['status_code'] = "error";
        header('Location: admin.php'); 
    }    
}
//This is login admin////////////////////////////////
if(isset($_POST['login_btn']))
{
    $email_login = $_POST['email']; 
    $password_login = SHA1($_POST['password']);// ເຂົ້າລະຫັດແບບ SHA1 

    $sql = "SELECT * FROM employee WHERE email='$email_login' AND password='$password_login'";
    $query = mysqli_query($connection, $sql);
    $row = mysqli_fetch_array($query);
    $userTyp = $row['status'];
    
   if($userTyp == 1)
   {
        $_SESSION['name'] = $email_login;
        header('Location: index.php');//Login for admin
   } 
  elseif($userTyp == 2)
  {
        $_SESSION['name'] = $email_login;
        header('Location: ../employee/index.php');//Login for employee
  }
  else
   {
        $_SESSION['status'] = "Email / Password ບໍ່ຖືກຕ້ອງ";
        header('Location: login.php');
   }
                  

}


   ?>
