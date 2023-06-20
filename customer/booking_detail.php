<head>
    <!-- css bs for shadow card -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<?php
include('includes/navbar.php');
require('includes/banner.php');
include('db.php');
?>
<?php
// echo '<pre>';
// print_r($_POST);
// echo '</pre>';
// exit();
?>

<!-- CSS for iput -->
<style>
    .container {
        margin-top: 40px;
    }

    * {
        box-sizing: border-box;
        font-family: "Arial";
    }

    form {
        width: 100%;
        max-width: 350px;
        padding: 2%;
    }

    .single-input {
        position: relative;
        margin: 30px 0;
    }

    .single-input label {
        position: absolute;
        bottom: 5px;
        left: 0;
        color: rgb(150, 150, 150);
        cursor: text;
        transition: 0.5s ease-in-out;
    }

    .input {
        text-align: center;
        width: 100%;
        padding: 5px;
        border: 0;
        border-bottom: 2px solid rgb(200, 200, 200);
        outline: 0;
        font-size: 16px;
        color: rgb(80, 80, 80);
        transition: 0.5s ease-in-out;
    }

    .input:focus,
    .input:valid {
        border-bottom: 2px solid cornflowerblue;
    }

    .input:focus~label,
    .input:valid~label {
        transform: translateY(-24px);
        font-size: 12px;
        color: cornflowerblue;
    }
</style>
<!-- End -->

<div class="container">
    <div class="shadow p-3 mb-5 bg-white rounded">
        <div class="card mb-3">
            <div class="card-header text-white text-center bg-info mb-3">
                ລາຍລະອຽດການຈອງ
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <form action="booking_payment.php" method="POST">
                            <div class="single-input">
                                <input type="text" class="input" name="name" id="" value="<?php echo $_POST['name']; ?>" readonly>
                                <label for="name">ຊື່ຜູ້ຈອງ</label>
                            </div>
                            <div class="single-input">
                                <input type="text" class="input" name="date" id="" value="<?php echo $_POST['date']; ?>" readonly>
                                <label for="date">ວັນທີຈອງ</label>
                            </div>
                            <div class="single-input">
                                <?php
                                $sql = "SELECT * FROM court";
                                $query_run = mysqli_query($connection, $sql);
                                $result = mysqli_fetch_assoc($query_run);
                                ?>
                                <input type="text" class="input" name="court" id="" value="<?php echo $_POST['court']; ?>" readonly>
                                <label for="">ເດີ່ນ</label>
                            </div>
                            <div class="single-input">
                                <input type="text" class="input" name="time" id="" value="<?php $time = $_POST['time'];
                                                                                            if ($time == 1) {
                                                                                                echo "08:00-09:00";
                                                                                            } elseif ($time == 2) {
                                                                                                echo  "09:00-10:00";
                                                                                            } elseif ($time == 3) {
                                                                                                echo  "10:00-11:00";
                                                                                            } elseif ($time == 4) {
                                                                                                echo  "11:00-12:00";
                                                                                            } elseif ($time == 5) {
                                                                                                echo  "12:00-13:00";
                                                                                            } elseif ($time == 6) {
                                                                                                echo  "13:00-14:00";
                                                                                            } elseif ($time == 7) {
                                                                                                echo  "14:00-15:00";
                                                                                            } elseif ($time == 8) {
                                                                                                echo  "15:00-16:00";
                                                                                            } elseif ($time == 9) {
                                                                                                echo  "16:00-17:00";
                                                                                            } elseif ($time == 10) {
                                                                                                echo  "17:00-18:00";
                                                                                            } elseif ($time == 11) {
                                                                                                echo  "18:00-19:00";
                                                                                            } elseif ($time == 12) {
                                                                                                echo  "19:00-20:00";
                                                                                            } elseif ($time == 13) {
                                                                                                echo  "20:00-21:00";
                                                                                            } elseif ($time == 14) {
                                                                                                echo  "21:00-22:00";
                                                                                            }
                                                                                            ?>" readonly>
                                <label for="">ເວລາຈອງ</label>
                            </div>
                            <div class="single-input">
                                <input type="text" class="input" name="price_court" id="" value="<?php echo $_POST['price']; ?>" readonly>
                                <label for="">ລາຄາເດີ່ນ</label>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-danger"><a href="booking.php" style="color:aliceblue">ຍົກເລີກການຈອງ</a> </button>
                                <button class="btn btn-outline-info" name="">ຢືນຢັນການຈອງ</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<hr><br><br>
<?php
require('script.php');
require('includes/footer.php'); ?>