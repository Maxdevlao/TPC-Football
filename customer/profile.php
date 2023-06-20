<?php
session_start();
include('includes/navbar.php');
include('includes/banner.php');
include('db.php');
//include('security.php');//ຄຳສັ່ງໃນການກວດສອບໃຫ້ລ໋ອກອິນກ່ອນເຂົ້າໃຊ້ງານ
?>
<!DOCTYPE html>
<html lang="en">
    <title>CUSTOMER PAGE</title>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="images/document.png" width="auto" height="300px">
            </div>
            <div class="col-md-8">
                <!-- ຂໍ້ໃູນສ່ວນຕົວຂອງລູກຄ້າ -->
                <?php
                $sql = "SELECT * FROM customer WHERE username = '" . $_SESSION['username'] . "'";
                $query = mysqli_query($connection, $sql);
                $result = mysqli_fetch_array($query);
                ?>
                <div class="card shadow p-3 mb-5 bg-white rounded">
                    <div class="card-header bg-info">
                        ຂໍ້ມູນສ່ວນຕົວ
                    </div>
                    <div class="card-body">
                        <p class="card-title">ຊື່ຜູ້ໃຊ້ : <span class="badge bg-primary"><?php echo $result[1]; ?></span></p>
                        <p class="card-title">ຊື່ ແລະ ນາມສະກຸນ: <span class="badge bg-primary"><?php echo $result[2]; ?></span></p>
                        <p class="card-text">ເບີໂທລະສັບ : <span class="badge bg-primary"><?php echo $result[3] ?></span></p>
                        <p class="card-text">ທີ່ຢູ່ ບ້ານ : <span class="badge bg-primary"><?php echo $result[4]; ?></span></p>
                       <hr>
                        <a href="profile_edit.php" class="btn btn-outline-success btn-sm">ແກ້ໄຂຂໍ້ມູນ</a> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .container{
            margin-top: 40px;
            margin-bottom: 200px;
        }
    </style>
   
</body>
</html>
<?php include('includes/footer.php')?>
