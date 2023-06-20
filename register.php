<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<!-- Link icon -->
<link rel="icon" href="images/logo.jpg" type="image/jpg" sizes="16x16">
<!--font Noto san Lao -->
<!--boostrap icon -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
<link rel="stylesheet" type="text/css" href="font/main.css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<?php session_start();?>
<div class="container register">
    <div class="row">
        <div class="col-md-3 register-left">
            <img src="images/logo.jpg" alt="" />
            <h6>ຍິນດີ ຕ້ອນຮັບສູ່ເດີ່ນເຕະບານທິບພະຈັນ</h6>
            <p>ຈອງເດີ່ນເຕະບານຢ່າງງ່າຍດາຍ ສະດວກສະບາຍ ພຽງແຕ່ 2-3 ຂັ້ນຕອນ</p>
            <a href="index.php"><input type="submit" name="" value="ກັບຄືນໜ້າຫຼັກ" /><br /></a>
        </div>
        <div class="col-md-9 register-right">
            <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="true">ລົງທະບຽນ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="false">ເຂົ້າສູ່ລະບົບ</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="register" role="tabpanel" aria-labelledby="home-tab">
                    <h3 class="register-heading">ລົງທະບຽນ <img class="" src="images/football.png" width="30px"></h3>
                    <form action="register_db.php" method="POST">
                        <div class="row register-form">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="username" placeholder="Username *" pattern="^[a-zA-Z0-9]+$" value="" required />
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" name="tel" pattern="[0-9]{11}" placeholder="020 xx xxx xxx " value="" required />
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" pattern="^[a-zA-Z0-9]+$" name="password" placeholder="ລະຫັດຜ່ານ *" value="" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" minlength="5" placeholder="ຊື່ ແລະ ນາມສະກຸນ *" value="" name="registername" required />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" minlength="5" name="address" placeholder="ທີ່ຢູ່ *" required />
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="ຢືນຢັນລະຫັດຜ່ານ *" name="confirmpassword" value="" required />
                                </div>
                                <input type="submit" class="btnRegister" name="registerbtn" value="ລົງທະບຽນ" />
                            </div>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade show" id="login" role="tabpanel" aria-labelledby="profile-tab">
                    <h3 class="register-heading">ເຂົ້າສູ່ລະບົບ <img class="" src="images/football.png" width="30px"></h3>
                    <?php
                    if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
                        echo '<span class="badge badge-danger text-white"> ' . $_SESSION['status'] . ' </span>';
                        unset($_SESSION['status']);
                    }
                    ?>
                    <form class="user" action="customer/c_login.php" method="POST">
                        <div class="row register-form">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder=" Userame *" name="username" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password *" name="password" required id="id_password"/>
                                </div>
                                <i class="bi bi-eye-slash-fill" id="togglePassword" style="margin-top:50px;cursor: pointer;"></i>

                                <input type="submit" class="btnRegister" name="btn_login" value="ເຂົ້າສູ່ລະບົບ" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    //script for eye password
    const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('#id_password');

    togglePassword.addEventListener('click', function(e) {
        // toggle the type attribute
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);
        // toggle the eye slash icon
        this.classList.toggle('fa-eye-slash');
    });
</script>


<style>
    .register {
        background: -webkit-linear-gradient(left, #3931af, #00c6ff);
        margin-top: 3%;
        padding: 3%;
    }

    .register-left {
        text-align: center;
        color: #fff;
        margin-top: 4%;
    }

    .register-left input {
        border: none;
        border-radius: 1.5rem;
        padding: 2%;
        width: 60%;
        background: #f8f9fa;
        font-weight: bold;
        color: #383d41;
        margin-top: 30%;
        margin-bottom: 3%;
        cursor: pointer;
    }

    .register-right {
        background: #f8f9fa;
        border-top-left-radius: 10% 50%;
        border-bottom-left-radius: 10% 50%;
    }

    .register-left img {
        margin-top: 15%;
        margin-bottom: 5%;
        width: 25%;
        -webkit-animation: mover 2s infinite alternate;
        animation: mover 1s infinite alternate;
    }

    @-webkit-keyframes mover {
        0% {
            transform: translateY(0);
        }

        100% {
            transform: translateY(-20px);
        }
    }

    @keyframes mover {
        0% {
            transform: translateY(0);
        }

        100% {
            transform: translateY(-20px);
        }
    }

    .register-left p {
        font-weight: lighter;
        padding: 12%;
        margin-top: -9%;
    }

    .register .register-form {
        padding: 10%;
        margin-top: 10%;
    }

    .btnRegister {
        float: right;
        margin-top: 10%;
        border: none;
        border-radius: 1.5rem;
        padding: 2%;
        background: #0062cc;
        color: #fff;
        font-weight: 600;
        width: 50%;
        cursor: pointer;
    }

    .register .nav-tabs {
        margin-top: 3%;
        border: none;
        background: #0062cc;
        border-radius: 1.5rem;
        width: 28%;
        float: right;
    }

    .register .nav-tabs .nav-link {
        padding: 2%;
        height: 34px;
        font-weight: 600;
        color: #fff;
        border-top-right-radius: 1.5rem;
        border-bottom-right-radius: 1.5rem;
    }

    .register .nav-tabs .nav-link:hover {
        border: none;
    }

    .register .nav-tabs .nav-link.active {
        width: 100px;
        color: #0062cc;
        border: 2px solid #0062cc;
        border-top-left-radius: 1.5rem;
        border-bottom-left-radius: 1.5rem;
    }

    .register-heading {
        text-align: center;
        margin-top: 8%;
        margin-bottom: -15%;
        color: #495057;
    }
</style>