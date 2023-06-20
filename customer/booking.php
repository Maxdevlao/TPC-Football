<head>
    <!-- css bs for shadow card -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<?php
session_start();

//include('security.php');
require('includes/navbar.php');
require('includes/banner.php');
include('db.php');
?>
<hr>
<div class="container">
    <div class="shadow p-3 mb-5 bg-white rounded">
        <div class="card">
            <div class="card-header text-white bg-info mb-3">
                ຈອງເດີ່ນເຕະບານ TPC
            </div>
            <div class="row">
                <div class="col-md-6">
                    <img class="rounded mx-auto d-block" src="images/logo.jpg" height="100" width="auto">
                    <div class="card-body">
                        <form action="booking_detail.php" method="POST">
                            <?php
                            $sql = "SELECT * FROM customer WHERE username = '" . $_SESSION['username'] . "'";
                            $query = mysqli_query($connection, $sql);
                            $result = mysqli_fetch_array($query);
                            ?>
                            <div class="form-group">
                                <img class="rounded" src="images/document.png" width="40px" alt="">
                            </div>

                            <div class="form-group">
                                <label for="name">ຊື່່ ແລະ ນາມສະກຸນ : &nbsp;<?php echo $result['name']; ?></label>
                                <input type="hidden" class="form-control" name="name" value="<?php echo $result['username']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="">ຈອງວັນທີ &nbsp;<i class="bi bi-calendar2-event-fill text-success" style="font-size: 1.3rem;"></i></label>
                                <input type="date" class="form-control" name="date" id="" min="<?php echo date('Y-m-d'); ?>" max="2023-12-31" required>
                            </div>
                            <div class="form-group">
                                <label for="">ເລືອກເດີ່ນ &nbsp;<img src="images/court.png" width="50px"></label>
                                <?php
                                $sql = "SELECT * FROM  court";
                                $query = mysqli_query($connection, $sql);
                                ?>
                                <select class="custom-select" name="court" id="court" required>
                                    <option value="" selected="" disabled="">ເລືອກເດີ່ນ</option>
                                    <?php foreach ($query as $value) { ?>
                                        <option value="<?= $value['court_num'] ?>"><?= $value['court_detail'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="" for="inputGroupSelect01">ເວລາ &nbsp;<i class="bi bi-alarm-fill text-success"></i></label>
                                <select class="custom-select" name="time" id="time" required></select>
                            </div>
                            <label>ລາຄາ &nbsp;<i class="bi bi-wallet2 text-success"></i></label>
                            <div class="form-group">
                                <input class="form-control" type="text" name="price" id="price" readonly="" style="color: blue;">
                            </div>

                            <!-- Code Ajax -->
                            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                            <script type="text/javascript">
                                $('#court').change(function() {
                                    var id_court = $(this).val();
                                    $.ajax({
                                        type: "post",
                                        url: "ajax.php",
                                        data: {
                                            id: id_court,
                                            function: 'courts'
                                        },
                                        success: function(data) {
                                            console.log(data)
                                            $('#time').html(data); //show data in select
                                            $('#price').val(''); //empty data in input
                                        }
                                    });
                                });
                                $('#time').change(function() {
                                    var id_time = $(this).val();
                                    var id_court = $('#court').val();
                                    console.log(id_time);
                                    console.log(id_court);
                                    $.ajax({
                                        type: "post",
                                        url: "ajax.php",
                                        data: {
                                            id: id_time,
                                            court: id_court,
                                            function: 'times'
                                        },
                                        success: function(data) {
                                            //console.log(data)
                                            $('#price').val(data);
                                        }
                                    });
                                });
                            </script>
                            <!-- End ajax -->

                            <div class="text-right">
                                <button type="submit" name="btnbooking" class="btn btn-outline-primary mb-2">ຈອງເດີ່ນ</button>

                            </div>
                        </form>
                    </div>

                </div>
            </div>
            <div class="card-footer text-muted">
                TPC FOOBALL
            </div>
        </div>
    </div>
</div>
<br><br>
<hr color="#25D366">









<?php require('includes/footer.php'); ?>