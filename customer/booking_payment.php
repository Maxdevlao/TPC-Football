
<head>
    <!-- css bs for shadow card -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head><?php
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
<div class="container" style="margin-top:40px">
  <div class="shadow p-3 mb-5 bg-white rounded">
    <div class="card mb-3">
      <div class="card-header text-white text-center bg-info mb-3">
      ລາຍລະອຽດການຈອງ ແລະ ການຊຳລະເງິນ
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-md-12">
            <form action="booking_db.php" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="name" id="" value="<?php echo $_POST['name']; ?>" readonly>
              <input type="hidden" class="" name="date" id="" value="<?php echo $_POST['date']; ?>" readonly>
              <input type="hidden" class="" name="court" id="" value="<?php echo $_POST['court']; ?>">
              <input type="hidden" class="" name="time" id="" value="<?php echo $_POST['time'];  ?>" readonly>
              <div class="form-group col-md-8">
                <label for="name">ລາຄາເດີ່ນ : &nbsp;</label>
                <input type="text" class="form-control" name="price_court" value="<?php echo $_POST['price_court']; ?>" readonly>
              </div>
              <div class="col-md-8">
                <dt>
                  <h4><b class="border-bottom border-primary">ແຈ້ງຊຳລະເງິນ</b></h4>
                </dt>
                <p class="text-danger">*ລູກຄ້າຕ້ອງໂອນເງິນມັດຈຳໃຫ້ທາງເດີ່ນກ່ອນຈຳນວນເງິນ 50.000 ກີບ ຫຼື ສາມາດໂອນເຕັມຈຳນວນເງິນກໍ່ໄດ້ ຈຶ່ງຈະສາມາດຈອງໄດ້ສຳເລັດ</p>
                <img src="images/QR.jpeg" class="img-fluid" width="140px" alt="QRPAYMENT">
                <p class="text-info">ເລກບັນຊີ: 160120001546862001</p>
                <div class="form-group">
                  <label class="form-inline" for="">*ຈຳນວນເງິນທີ່ທ່ານໂອນມາ :</label>
                  <input type="number" name="price" class="form-control" min="50000" step="any" max="" value="" required>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlFile1">*ອັບໂຫຼດຮູບພາບການໂອນເງິນ</label>
                  <input type="file" name="image" class="form-control-file" required>
                </div>
                <!-- <input type="hidden" class="form-control" name="status" value=""> -->
                <hr>
                <p class="text-danger">*ເມື່ອທ່ານຢືນຢັນການຈອງແລ້ວຈະບໍ່ສາມາດຍົກເລີກການຈອງໄດ້ ກວດສອບການຈອງໃຫ້ແນ່ໃຈແລ້ວຈຶ່ງຈອງ! <br>
                <p class="text-center text-info">ຂໍຂອບໃຈ</p>
                </p>
                <div class="form-group">
                  <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#cancel">
                    ຍົກເລີກການຈອງ</button>
                  <button class="btn btn-outline-info btn-sm" name="btnBooking">ຢືນຢັນການຈອງ</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal for cancel btn -->
<div class="modal fade" id="cancel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ລາຍລະອຽດການຈອງ</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ທ່ານຕ້ອງການຍົກເລີກການຈອງແທ້ບໍ່!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">ບໍ່</button>
        <button type="button" class="btn btn-info"><a style="color:#FFF ;" href="booking.php">ແມ່ນ</a></button>
      </div>
    </div>
  </div>
</div>

<hr><br><br>
<?php
require('script.php');
require('includes/footer.php'); ?>