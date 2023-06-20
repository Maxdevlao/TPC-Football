<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
?>
<style>


</style>


<!--Modal add time-->
<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ເພີ່ມເວລາ</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="time_db.php" method="POST">
        <div class="modal-body">
          <div class="form-group">
            <label>ເວລາ</label>
            <input type="text" name="time" class="form-control" placeholder="00:00-00:00">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary  btn-sm" data-dismiss="modal">ປິດ</button>
          <button type="submit" name="savebtn" class="btn btn-outline-success  btn-sm">ບັນທຶກ</button>
        </div>
      </form>

    </div>
  </div>
</div>

<div class="container-fluid">

  <!--Data Table Example-->
  <div class="card shadow mb-4">
    <div class="card-header py3">
      <h6 class="m-0 font-weight-bold text-primary">ຂໍ້ມູນເວລາ
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
          ເພີ່ມເວລາ +
        </button>
      </h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <?php
        include('database/dbconfig.php');
        $query = "SELECT * FROM time";
        $query_run = mysqli_query($connection, $query);
        ?>
        <table class="table " id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th> ID </th>
              <th> ເວລາ </th>
              <th>ແກ້ໄຂ</th>
              <th>ລົບ</th>
            </tr>
          </thead>
          <tbody>
            <?php
            if (mysqli_num_rows($query_run) > 0) {
              while ($row = mysqli_fetch_assoc($query_run)) {
            ?>
                <tr>
                  <td><?php echo $row['time_id']; ?></td>
                  <td><?php echo $row['time']; ?></td>
                  <td>
                    <form action="time_edit.php" method="post">
                      <input type="hidden" name="edit_id" value="<?php echo $row['time_id']; ?>">
                      <button type="submit" name="edit_btn" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square">
                        </i></button>
                    </form>
                  </td>
                  <td>
                    <form action="time_db.php" method="post">
                      <input type="hidden" name="delete_id" value="<?php echo $row['time_id']; ?>">
                      <button type="submit" name="delete_btn" class="btn btn-danger btn-sm" onclick="return confirm('ຍຶນຍັນການລົບ')"><i class="bi bi-trash"></i></button>
                    </form>
                  </td>
                </tr>
            <?php
              }
            } else {
              echo "No Record Found";
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>


  <!--container-fluid-->
  <?php include('includes/script.php');
  include('includes/footer.php');
  ?>

</div>