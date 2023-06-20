<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>TPC FOOTBALL</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Optional theme -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--fontawesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <!--font Noto san Lao -->
    <link rel="stylesheet" type="text/css" href="font/main.css">
    <!--boostrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="icon" href="images/logo.jpg" type="image/jpg" sizes="16x16">
</head>
<?php session_start();?>
<div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-9 col-lg-9 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login"><img src="images/logo.png" width="70%" style="margin-left: 90px; margin-top: 40px; ">
                        <div class="text-center">
                            <br>
                        <a class="" href="admin/login.php"><i class="bi bi-door-open-fill text-info"></i>
                        ເຂົ້າສູ່ລະບົບເຈົ້າຂອງເດີ່ນ <i class="bi bi-arrow-left-circle-fill text-info"></i></a>
                        </div>
                        
                        </div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">ເຂົ້າສູ່ລະບົບ</h1>
                                    <!-- formmmmmmmmm -->
                                    <?php
                   					 if(isset($_SESSION['status']) && $_SESSION['status'] !='') 
                  					  {
                  			            echo '<p class="bg-danger text-white"> '.$_SESSION['status'].' </p>';
                 			            unset($_SESSION['status']);
                 				         }
           					     ?>
                                    <form class="user" action="customer/c_login.php" method="POST">
                                        <div class="form-group">
                                            <input type="tel" placeholder="ຊື່ຜູ້ໃຊ້" name="username"  class="form-control" id=""  required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-password" placeholder="ລະຫັດຜ່ານ" id="id_password" >
                                            <i class="bi bi-eye-slash-fill" id="togglePassword" style="margin-top:50px;cursor: pointer;"></i>
                                        </div>
                                        
                                        <button type="submit" name="btn_login" class="btn btn-primary   btn-user btn-block">
                                            ເຂົ້າສູ່ລະບົບ
                                        </button>
                                        <hr>
                                        <div class="form-group">
                                        <a href="register.php" class="">ລົງທະບຽນ</ັ>
                                        </div>
                                        
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
        <!-- Sweet alert button
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
                                        <script>
                                            swal({
  title: "Good job!",
  text: "You clicked the button!",
  icon: "success",
  button: "Aww yiss!",
});
                                        </script> -->

<?php
include('script.php');
?>
<script> //script for eye password
      const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#id_password');
 
  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});
</script>
    <style>
        .form-control {
            border-radius: 38px;
        }

        .btn-user {
            border-radius: 38px;
        }

        .btn-google {
            background-color: #ea4335;
            font-size: 14px;
            color: #FFFF;
        }

        .btn-facebook {
            background-color: #3b5998;
            font-size: 14px;
            color: #FFFF;
        }

        .card-body {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
    </style>