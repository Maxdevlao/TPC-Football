<?php
session_start(); 
//include('security.php');
include('includes/navbar.php');  
include('db.php'); 
$sql = "SELECT * FROM customer WHERE username = '" . $_SESSION['username'] . "'";
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_array($result);
extract($row);
?>
<!-- Form Edit Pass -->
<div class="container" >
<h3> ຟອມແກ້ໄຂລະຫັດຜ່ານ </h3>
<form action="edit_pass_db.php" method="POST" class="form-horizontal">
  <div class="form-group">
    <div class="col-sm-2 control-label">
      ຊື່ຜູ້ໃຊ້ :
    </div>
    <div class="col-sm-5">
      <input type="text" name="c_user" required class="form-control" autocomplete="off" value="<?php echo $row['username'];?>" disabled>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-5 control-label">
     ລະຫັດຜ່ານໃໝ່:
    </div>
    <div class="col-sm-5">
      <input type="password" name="pass1" class="form-control" autocomplete="off" pattern="^[a-zA-Z0-9]+$" required>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-5 control-label">
     ຢືນຢັນລະຫັດຜ່ານ :
    </div>
    <div class="col-sm-5">
      <input type="password" name="pass2"  class="form-control" required>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-4">
      <input type="hidden" name="c_id" value="<?php echo $row['id'];?>">
      <button type="submit" class="btn btn-outline-success">ບັນທຶກລະຫັດຜ່ານ</button>
    </div>
  </div>
</form>
</div>
<?php include('includes/footer.php');  ?>