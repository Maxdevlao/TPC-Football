
<?php
include('secure.php');
include('db.php');
// echo '<pre>';
// print_r($_POST);
// echo '</pre>';
// exit;
session_start();
if(isset($_POST['btn_login']))
{
    $user_login = $_POST['username']; 
    $password_login = sha1($_POST['password']);// ເຂົ້າລະຫັດແບບ SHA1 

    $query = "SELECT * FROM customer WHERE username='$user_login' AND password='$password_login' LIMIT 1";
    $query_run = mysqli_query($connection, $query);

   if(mysqli_fetch_array($query_run))
   {
        $_SESSION['username'] = $user_login;
        header('Location:index.php');
   } 
  else
   {   
         $_SESSION['status'] = "Username / Password ບໍ່ຖືກຕ້ອງ";
         header('Location: ../login.php');
   
   }
                  

}