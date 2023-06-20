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
            <h6 class="m-0 font-weight-bold text-primary"> ແກ້ໄຂຂໍ້ມູນເວລາ </h6>
        </div>
        <div class="card-body">
        <?php

            if(isset($_POST['edit_btn']))
            {
                $id = $_POST['edit_id'];
                
                $query = "SELECT * FROM time WHERE time_id='$id' ";
                $query_run = mysqli_query($connection, $query);
                foreach($query_run as $row)
                {
                    ?>
                        <form action="time_db.php" method="POST">

                            <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>">

                            <div class="form-group">
                                <label> ເວລາ </label>
                                <input type="text" name="edit_time" value="<?php echo $row['time'] ?>" class="form-control" placeholder="00:00-00:00">
                            </div>
                          
                            <a href="time.php" class="btn btn-danger"> ຍົກເລີກ </a>
                            <button type="submit" name="update" class="btn btn-success"><i class="bi bi-save"></i>ບັນທຶກ </button>

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