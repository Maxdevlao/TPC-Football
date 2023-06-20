<?php
session_start();
include('db.php');
include('script.php');
require('includes/navbar.php'); 
require('includes/banner.php'); 

$sql = "SELECT * FROM customer WHERE username  = '".$_SESSION['username']."'";
$query = mysqli_query($connection,$sql);
$result = mysqli_fetch_array($query);
// Profile Update
if(isset($_POST['save']))
{
    $id = $_POST['id'];
   // $user_name = $_POST['username'];
    $name = $_POST['name'];
    $tel = $_POST['phone'];
    $address = $_POST['address'];
    $pass = $_POST['pass'];

    $query = "UPDATE customer SET name='$name',tel='$tel',address='$address', password='$pass' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        // $_SESSION['status'] = "ແກ້ໄຂສຳເລັດ";
        // $_SESSION['status_code'] = "success";
        // header('Location: index.php');
        echo "<script>";
        echo "alert('ແກ້ໄຂສຳເລັດ');";
        echo "window.location='profile.php';";
        echo "</script>"; 
    }
    else
    {
        $_SESSION['status'] = "ແກ້ໄຂບໍ່ສຳເລັດ";
        $_SESSION['status_code'] = "error";
        header('Location: profile_edit.php'); 
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<body class="default">
  <div class="container-fluid">
    <div class="row justify-content-md-center">
      <div class="col-md-5 mb-4">
        <div class="card border-primary mt-2">
          <h5 class="card-header">ແກ້ໄຂຂໍ້ມູນສ່ວນຕົວ: <?php echo $result[2]; ?></h5>
          <div class="card-body">
            <div class="row justify-content-md-center mb-2">
              <div class="col col-lg-6">
                <img src="images/document.png" style="width: 100%;">
              </div>
            </div>
            <form method="post">
            <div class="mb-3">
                <label class="form-label"></label>
                <input type="hidden" class="form-control" name="id" value="<?php echo $result[0];?>" />
              </div>
              <div class="mb-3">
                <label class="form-label">ຊື່ຜູ້ໃຊ້</label>
                <input type="text" class="form-control" name="username" value="<?php echo $result[1];?>" disabled />
              </div>
              <div class="mb-3">
                <label class="form-label">ຊື່ ແລະ ນາມສະກຸນ</label>
                <input type="text" class="form-control" name="name" value="<?php echo $result[2];?>" />
              </div>
              <div class="mb-3">
                <label class="form-label">ເບີໂທລະສັບ</label>
                <input type="tel" class="form-control" name="phone" pattern="[0-9]{11}" value="<?php echo $result[3];?>" placeholder="020 xx xxx xxx" required />
              </div>
              <div class="mb-3">
                <label class="form-label">ທີ່ຢູ່ບ້ານ</label>
                <input type="text" class="form-control" name="address" value="<?php echo $result[4];?>" required/>
              </div>
              <div class="mb-3">
                <label class="form-label">ລະຫັດຜ່ານ</label>
                <input type="password" class="form-control" id="id_password" name="pass" value="<?php echo $result[5];?>" required/>
                <i class="bi bi-eye-slash-fill" id="togglePassword" style="margin-top:50px;cursor: pointer;"></i>
              </div>
              <button type="submit" class="btn btn-outline-success" name="save">ບັນທຶກຂໍ້ມູນ</button>
              <a href="profile.php" class="btn btn-outline-danger  "> ຍົກເລີກ </a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php mysqli_close($connection);?>
</body>
</html>
<?php include ('../script.php');
include ('includes/footer.php');
?>

<script>  //script for eye password
      const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#id_password');
 
  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});
</script>