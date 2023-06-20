<!-- Script for image zoom -->
<script src="https://unpkg.com/js-image-zoom@0.7.0/js-image-zoom.js" type="application/javascript"></script>


<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
include('database/dbconfig.php');
?>
<div class="container-fluid">
  <?php
  $id = "";
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
  }
  $sql = "SELECT * FROM booking WHERE id='$id'";
  $query = mysqli_query($connection, $sql);
  $result = mysqli_fetch_array($query);
  ?>
  <div class="col-lg-12" style="margin-left:80px">
    <p class="dropdown-item d-flex align-items-center">
    <div class="dropdown-list-image mr-3">
      <img class="rounded-circle" width="60px" src="img/customer.png">
      <div class="status-indicator bg-success"></div>
    </div>
    <div class="font-weight-bold">
      <div class="text-truncate">ຊື່ຜູ້ຈອງ : <?php echo $result['username'] ?></div>
      <div class="text-info">ເດີ່ນ : <?php echo $result['court_num'] ?></div>
      <div class="text-info">ວັນທີ :<?php echo $result['date_booking'] ?> ເວລາ: &nbsp;<?php echo $result['time_booking'] ?></div>
      <div class="text-danger">ຈຳນວນເງິນທີ່ລູກຄ້າໂອນ : <?php echo $result['price'] ?></div>
    </div>
    </p>
    <div id="img-container" style="width: 100px">
      <?php echo '<img src="../customer/images/upload-qr/' . $result['slip_payment'] . '"  alt="SlipPayment">' ?>
    </div>
    <br>
    <div>
      <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#refuse">ປະຕິເສດການຈອງ
      </button>
      <!-- <a href="refuse_booking.php?id=<?php echo $result['id'] ?>">
            <button type="submit" class="btn btn-danger">ປະຕິເສດການຈອງ</button>
            </a> -->
      <a href="booking_today.php?id=<?php echo $result['id'] ?>">
        <button type="submit" class="btn btn-success">ອະນຸມັດການຈອງ</button>
      </a>
    </div>
    <!-- script for image Zoom -->
    <script>
      var options1 = {
        width: 200,
        zoomWidth: 400,
        offset: {
          vertical: 0,
          horizontal: 10
        }
      };
      new ImageZoom(document.getElementById("img-container"), options1);
    </script>
    <hr>

    <!-- Modal For refuse bk-->
    <div class="modal fade" id="refuse" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">ປະຕິເສດການຈອງ</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            ຕ້ອງການປະຕິເສດການຈອງແທ້ບໍ່!!
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">ປິດ</button>
            <a href="refuse_booking.php?id=<?php echo $result['id'] ?>">
              <button type="submit" class="btn btn-danger">ປະຕິເສດການຈອງ</button>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- End modal -->

    <!-- <div class="form-group col-md-6 text-danger">
                <label for="">*ເຫດຜົນທີ່ປະຕິເສດການຈອງ</label>
                <input type="text" class="form-control">
        </div> -->


  </div>

</div>
<!--container-fluid-->
<?php include('includes/script.php');
include('includes/footer.php');
?>