<?php require('includes/navbar.php');
require('includes/banner.php');
require('db.php');
?>

<hr>
<!-- Modal show plese log in -->
<div class="modal fade" id="plslogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
                <div class="modal-content">
                        <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">TPC FOOTBALL</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                        <div class="modal-body">
                                ກະລຸນາເຂົ້າສູ່ລະບົບກ່ອນຈຶ່ງສາມາດຈອງເດີ່ນໄດ້ !<br>
                                ຖ້າທ່ານຍັງບໍ່ມີບັນຊີ ລົງທະບຽນໄດ້ທີ່່ <a href="register.php">ລົງທະບຽນ</a>
                        </div>
                        <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">ປິດ</button>
                                <a href="login.php"><button type="button" class="btn btn-primary">ເຂົ້າສູ່ລະບົບ</button></a>
                        </div>
                </div>
        </div>
</div>

<div class="container">
        <div class="shadow p-3 mb-5 bg-white rounded">

                <div class="card-header text-white bg-info mb-3">
                        ຈອງເດີ່ນເຕະບານ TPC
                </div>
                <div class="row">
                        <div class="col-md-6">
                                <h4 class="text-center"> ຈອງເດີ່ນເຕະບານ TPC</h4>
                                <img class="rounded mx-auto d-block" src="images/logo.png" height="100" width="auto">
                                <form action="booking_db.php" method="POST">
                                        <div class="form-row">
                                                <div class="form-group col-md-6">
                                                        <label for="name">ຊື່ ແລະ ນາມສະກຸນ &nbsp;<i class="bi bi-file-person-fill text-primary" style="font-size: 1.3rem;"></i></label>
                                                        <input type="text" class="form-control" name="name" placeholder="" required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                        <label for="tel">ເບີໂທລະສັບ &nbsp;<i class="bi bi-telephone-fill text-primary" style="font-size: 1.3rem;"></i> </label>
                                                        <input type="tel" placeholder="020 xx xxx xxx" name="tel" pattern="[0-9]{11}" class="form-control" id="" required>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                                <label for="address">ທີ່ຢູ່ &nbsp;<i class="bi bi-geo-alt-fill " style="font-size: 1.3rem; color: red;"></i></label>
                                                <input type="text" class="form-control" name="address" id="" placeholder="ບ້ານ" required>
                                        </div>
                                        <div class="form-group">
                                                <label for="">ຈອງວັນທີ &nbsp;<i class="bi bi-calendar2-event-fill text-warning" style="font-size: 1.3rem;"></i></label>
                                                <input type="date" class="form-control" name="date" id="" min="<?php echo date('Y-m-d'); ?>" required>
                                        </div>
                                        <div class="form-group">
                                                <label for="">ເລືອກເດີ່ນ &nbsp;<img src="images/court.png" width="50px"></label>

                                                <select class="custom-select" name="time" required>
                                                        <option disabled selected class="bg-warning">ເລືອກເດີ່ນ</option>
                                                        <?php
                                                        $query = "SELECT * FROM court";
                                                        $query_run = mysqli_query($connection, $query);
                                                        ?>
                                                        <?php while ($row_court = mysqli_fetch_assoc($query_run)) { ?>
                                                                <option value="<?php echo $row_court['court_num'] ?>">
                                                                        <?php echo $row_court['court_detail'] ?>
                                                                </option>
                                                        <?php } ?>
                                                </select>
                                        </div>
                                        <!-- <div class="form-group">
                                                <label class="" for="inputGroupSelect01">ເວລາ &nbsp;<i class="bi bi-alarm-fill text-warning"></i></label>
                                                <select class="custom-select" name="time" required>
                                                        <option disabled selected class="bg-warning">ເລືອກເວລາ</option>
                                                        <?php

                                                        $query = "SELECT * FROM time1";
                                                        $query_run = mysqli_query($connection, $query);
                                                        ?>
                                                        <?php while ($row_court = mysqli_fetch_assoc($query_run)) { ?>
                                                                <option value="<?php echo $row_court['time'] ?>">
                                                                        <?php echo $row_court['time'] ?>
                                                                </option>
                                                        <?php } ?>
                                                </select>
                                        </div> -->
                                        <div class="form-group">
                                                <label class="" for="inputGroupSelect01">ເວລາ &nbsp;<i class="bi bi-alarm-fill text-success"></i></label>
                                                <select class="custom-select" name="time" id="time" required></select>
                                        </div>
                                        <div class="form-group">
                                                <label>ລາຄາ &nbsp;<i class="bi bi-wallet2 text-success"></i></label>
                                                <div class="form-group">
                                                        <input class="form-control" type="text" name="price" id="price" readonly="" style="color: blue;">
                                                </div>
                                        </div>

                                        <div class="text-right">
                                                <a href="" data-toggle="modal" data-target="#plslogin"><button class="btn btn-success">ຈອງ</button></a>
                                        </div>
                                        <div class="form-group text-center">
                                                <div class="col-sm-12 mt-3">
                                                        ເຂົ້າສູ່ລະບົບກ່ອນຈຶ່ງສາມາດຈອງໄດ້
                                                        <a href="login.php">ເຂົ້າສູ່ລະບົບ</a>
                                                </div>
                                        </div>
                                        <hr color="#25D366">

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


                                </form>
                        </div>
                </div>

        </div>
</div>


<br><br>
<hr color="#25D366">









<?php require('includes/footer.php'); ?>