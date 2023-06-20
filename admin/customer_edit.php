<?php
session_start(); 
include('includes/header.php');
 include('includes/navbar.php');
include ('database/dbconfig.php');
 ?>
<style>

</style>

<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> ແກ້ໄຂຂໍ້ມູນລູກຄ້າ </h6>
        </div>
        <div class="card-body">
        <?php

            if(isset($_POST['edit_btn']))
            {
                $id = $_POST['edit_id'];
                
                $query = "SELECT * FROM customer WHERE id='$id' ";
                $query_run = mysqli_query($connection, $query);

                foreach($query_run as $row)
                {
                    ?>

                        <form action="customer_db.php" method="POST">

                            <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>">

                            <div class="form-group">
                                <label> ຊື່່ລູກຄ້າ / ຊື່ທີມ </label>
                                <input type="text" name="edit_name" value="<?php echo $row['name'] ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label> ເບີໂທລະສັບ </label>
                                <input type="tel" name="edit_tel" placeholder="020--" pattern="[0-9]{11}" value="<?php echo $row['tel'] ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label> ທີ່ຢູ່ </label>
                                <input type="text" name="edit_address" value="<?php echo $row['address'] ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label> ລະຫັດຜ່ານ</label>
                                <input type="password" name="edit_password" value="<?php echo $row['password'] ?>" class="form-control">
                            </div>
                           

                            <a href="customer.php" class="btn btn-danger"> ຍົກເລີກ </a>
                            <button type="submit" name="updatebtnteam" class="btn btn-success"><i class="bi bi-save"></i>ບັນທຶກ </button>

                        </form>
                        <?php
                }
            }
        ?>
        </div>
    </div>
</div>

</div>
<?php include ('includes/script.php');
include ('includes/footer.php');
?>