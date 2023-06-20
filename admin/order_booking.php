<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
date_default_timezone_set('Asia/Bangkok');
?>
<div class="container-fluid">

  <!--Data Table Example-->
  <div class="card shadow mb-4">
    <div class="card-header py3">
      <h6 class="m-0 font-weight-bold text-primary">ຄົ້ນຫາເວລາການຈອງ
      </h6>
    </div>
    <div class="card-body">

      <form class="" action="show_order.php" method="POST">
        <p class="text-start"><?php echo date("l d/m/y . h:i:s"); ?> <span><i class="bi bi-alarm text-success"></i></span></p>
        <div class="form-group col-md-6">
          <label for="">ວັນທີ : <i class="bi bi-calendar-date text-success"></i></label>
          <input type="date" class="form-control" name="startDate">
        </div>
        <div class="d-grid gap-2 col-6 mx-auto">
          <button class="btn btn-outline-success btn-sm " type="submit" name="btnbill" id="btnCheck">ຄົ້ນຫາ</button>
        </div>

      </form>

    </div>
  </div>


  <!--container-fluid-->
  <?php include('includes/script.php');
  include('includes/footer.php');
  ?>

</div>