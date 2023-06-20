<?php
session_start();
include('includes/header.php');
include('includes/navbar.php');
include('database/dbconfig.php');
?>
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> ແກ້ໄຂຂໍ້ມູນຂອງພະນັກງານ </h6>
        </div>
        <div class="card-body">
            <?php
            if (isset($_POST['edit_btn'])) {
                $id = $_POST['edit_id'];
                $query = "SELECT * FROM employee WHERE id='$id' ";
                $query_run = mysqli_query($connection, $query);

                foreach ($query_run as $row) {
            ?>

                    <form action="admin_db.php" method="POST">

                        <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>">
                        <div class="form-group">
                            <label> ຊື່ ແລະ ນາມສະກຸນ </label>
                            <input type="text" name="edit_fullname" value="<?php echo $row['fullname'] ?>" class="form-control" placeholder="">
                        </div>
                        <div class="form-group">
                            <label> ເບີໂທລະສັບ </label>
                            <input type="tel" name="edit_tel" value="<?php echo $row['tel'] ?>"  class="form-control" pattern="[0-9]{11}" placeholder="020 xxx xxx xx">
                        </div>
                        <div class="form-group">
                            <label> ທີ່ຢູ່ </label>
                            <input type="text" name="edit_address" class="form-control" value="<?php echo $row['address'] ?>" placeholder="">
                        </div>
                        <div class="form-group">
                            <label>ອີເມວ</label>
                            <input type="email" name="edit_email" class="form-control checking_email" value="<?php echo $row['email'] ?>"  placeholder="example@gmail.com">
                            <!-- <small class="error_email" style="color: red;"></small> -->
                        </div>
                        <div class="form-group">
                            <label>ລະຫັດຜ່ານ</label>
                            <input type="password" name="edit_password" class="form-control" value="<?php echo $row['password'] ?>" placeholder="">
                        </div>
                        <div class="form-group">
                            <label> ສະຖານະ</label>
                            <select class="form-control" name="edit_status" id="">
                                <option value="1">ADMIN</option>
                                <option value="2">EMPLOYEE</option>
                            </select>
                        </div>
                        <a href="admin.php" class="btn btn-outline-danger  btn-sm"> ຍົກເລີກ </a>
                        <button type="submit" name="updatebtn" class="btn btn-outline-success  btn-sm"> ຕົກລົງ </button>

                    </form>
            <?php
                }
            }
            ?>
        </div>
    </div>
</div>

</div>
<?php include('includes/script.php');
include('includes/footer.php');
?>