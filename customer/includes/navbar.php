<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>TPC FOOTBALL</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap -->
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- Optional theme -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!--fontawesome -->
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <!--font Noto san Lao -->
  <link rel="stylesheet" type="text/css" href="font/main.css">
  <!--boostrap icon -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <!-- Link icon -->
  <link rel="icon" href="images/logo.jpg" type="image/jpg" sizes="16x16">

   <!-- css bs for shadow card -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<!-- <?php session_start(); ?> -->
<?php
include('secure.php');
?>
<style type="text/css">
  .navbar-brand {
    width: 30px;
  }

  .navbar {
    background-color: rgb(0, 194, 138);
  }
</style>

<nav class="navbar navbar-expand-lg navbar-light ">
  <img class="navbar-brand" src="images/Logo.png">
  <a class="navbar-brand" href="index.php" style="color:blue;">TPC</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse " id="navbarNav">
    <ul class="navbar-nav ml-auto ">
      <li class="nav-item active">
        <a class="nav-link text-white" href="index.php">ໜ້າຫຼັກ<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="booking.php">ຈອງເດີ່່ນ</a>
      </li>
      <li class="nav-item">
        <!-- <a class="nav-link" href="check_booking.php">ເວລາວ່າງ</a> -->
        <a class="nav-link text-white" href="check_booking.php" data-toggle="modal" data-target="#TableModal">ເວລາວ່າງ</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="rule.php">ກົດລະບຽບ</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="about.php">ກ່ຽວກັບ</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="contact.php">ຕິດຕໍ່</a>
      </li>
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="mr-2 d-none d-lg-inline text-gray-600  text-white">
            <?php echo $_SESSION['username']; ?>
          </span>
          <img class="img-profile rounded-circle" src="images/customer.png" width="20px;">
        </a>
        <!-- Dropdown - User Information -->
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
          <a class="dropdown-item fa-sm" href="profile.php">
            <i class="bi bi-search fa-sm fa-fw mr-2 text-primary"></i>
            ຂໍ້ມູນສ່ວນຕົວ
          </a>
          <a class="dropdown-item fa-sm" href="profile_edit.php">
            <i class="bi bi-pencil-square  fa-fw mr-2 text-primary "></i>
            ແກ້ໄຂຂໍ້ມູນສ່ວນຕົວ
          </a>
          <a class="dropdown-item fa-sm" href="edit_pass.php">
            <i class="bi bi-credit-card-2-front-fill  fa-fw mr-2 text-primary"></i>
            ແກ້ໄຂລະຫັດຜ່ານ
          </a>
          <a class="dropdown-item fa-sm" href="history.php">
            <i class="bi bi-clock-history fa-fw mr-2 text-primary"></i>
            ປະຫວັດການຈອງ
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="c_logout.php" data-toggle="modal" data-target="#logoutModal">
            <i class="bi bi-door-open-fill  fa-sm fa-fw mr-2 text-danger"></i>
            ອອກຈາກລະບົບ
          </a>
        </div>
      </li>
    </ul>
  </div>
</nav>
<!--This is Modal log out-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ອອກຈາກລະບົບ</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">ຕ້ອງການອອກຈາກລະບົບບໍ່ ?</div>
      <div class="modal-footer">
        <button class="btn btn-danger btn-sm" type="button" data-dismiss="modal">ຍົກເລີກ</button>
        <form action="c_logout.php" method="POST">
          <button type="submit" name="logout_btn" class="btn btn-primary btn-sm">ອອກຈາກລະບົບ</button>
        </form>

      </div>
    </div>
  </div>
</div>
<!-- End modal log out -->
<!-- Modal Table booking -->
<div class="modal fade" id="TableModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">TPC FOOTBALL</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="show_booking.php" method="POST">
          <label for="lname">* ຄົ້ນຫາເດີ່ນ ແລະ ເວລາວ່າງ:</label>
          <div class="form-group">
            <input type="date" class="form-control" name="ckDate" min="<?php echo date('Y-m-d'); ?>" max="2023-12-31">
          </div>
          <div class="text-right">
            <button class="btn btn-outline-success btn-sm " type="submit" name="btncheck" id="btnCheck">ຄົ້ນຫາ</button>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button class="btn btn-danger btn-sm" type="button" data-dismiss="modal">ຍົກເລີກ</button>

      </div>
    </div>
  </div>
</div>
<!-- END Modal Table booking -->