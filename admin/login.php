<?php
session_start();
include('includes/header.php');
?>
<style>

</style>
 <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-9 col-lg-9 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login"><img src="../images/logo.png" width="70%" style="margin-left: 90px; margin-top: 80px; "></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">ເຂົ້າສູ່ລະບົບ</h1>
                                    </div>
                                    <?php
                   					 if(isset($_SESSION['status']) && $_SESSION['status'] !='') 
                  					  {
                  			            echo '<p class="bg-danger text-white"> '.$_SESSION['status'].' </p>';
                 			            unset($_SESSION['status']);
                 				         }
           					     ?>
                                    <form class="user" action="admin_db.php" method="POST">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control form-control-user"
                                                aria-describedby="emailHelp" autocomplete="off"
                                                placeholder="Email adress...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user"
                                                 placeholder="password" autocomplete="off">
                                        </div>
                                        <button type="submit"  name="login_btn"  class="btn btn-primary btn-user btn-block">
                                            ເຂົ້າສູ່ລະບົບ
                                        </button>
                                        <hr>
                                      
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>



<?php
include('includes/script.php');

?>