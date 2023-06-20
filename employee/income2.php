<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
include('database/dbconfig.php');
?>
<div class="container-fluid">
   <div class="card-body">
      <div class="table-responsive">
         <?php
         $laoMonth = array("ມກ", "ກພ", "ມນ", "ມສ", "ພສ", "ມນ", "ກດ", "ສຫ", "ກຍ", "ຕລ", "ພຈ", "ທວ");
         $laoMonth_full = array("ມັງກອນ", "ກຸມພາ", "ມນ", "ມສ", "ພສ", "ມິຖຸນາ", "ກໍລະກົດ", "ສິງຫາ", "ກັນຍາ", "ຕລ", "ພຈ", "ທວ");
         $sql = "SELECT DISTINCT month(date_booking) as month FROM booking ORDER BY month ASC";
         $query = mysqli_query($connection, $sql);
         while ($data = mysqli_fetch_array($query)) {
            $str_month = sprintf("%02d",$data['month']);
            echo "<button type='button' class='btn btn-outline-info' onClick='window.location.href=./?M=$str_month\"'>".$laoMonth_full[(int)($data['month'] - 1)] . "</button>";
         }
         ?>
      </div>
   </div>
</div>