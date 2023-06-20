<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
include('database/dbconfig.php');
?>
<div class="container-fluid">
  <!--Data Table Example-->
  <div class="card shadow mb-4">
    <div class="card-header py3">
      <h6 class="m-0 font-weight-bold text-primary">ຂໍ້ມູນລາຄາເດີ່ນ
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
          +
        </button>
      </h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <?php
        $query = "SELECT * FROM price";
        $query_run = mysqli_query($connection, $query);

        $query_run = mysqli_query($connection, $query);
        ?>
        <table class="table " id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th> # </th>
              <th> ເວລາ</th>
              <th> ລາຄາເດີ່ນໃນຮົ່ມ </th>
              <th> ລາຄາເດີ່ນກາງແຈ້ງ </th>
              <th>ແກ້ໄຂ</th>
            </tr>
          </thead>
          <tbody>
            <?php
            if (mysqli_num_rows($query_run) > 0) {
              while ($row = mysqli_fetch_assoc($query_run)) {
            ?>
                <tr>
                  <td><?php echo $row['id']; ?></td>
                  <td><?php $time = $row['time_id'];
                      if ($time == 1) {
                        echo "08:00-09:00";
                      } elseif ($time == 2) {
                        echo  "09:00-10:00";
                      } elseif ($time == 3) {
                        echo  "10:00-11:00";
                      } elseif ($time == 4) {
                        echo  "11:00-12:00";
                      } elseif ($time == 5) {
                        echo  "12:00-13:00";
                      } elseif ($time == 6) {
                        echo  "13:00-14:00";
                      } elseif ($time == 7) {
                        echo  "14:00-15:00";
                      } elseif ($time == 8) {
                        echo  "15:00-16:00";
                      } elseif ($time == 9) {
                        echo  "16:00-17:00";
                      } elseif ($time == 10) {
                        echo  "17:00-18:00";
                      } elseif ($time == 11) {
                        echo  "18:00-19:00";
                      } elseif ($time == 12) {
                        echo  "19:00-20:00";
                      } elseif ($time == 13) {
                        echo  "20:00-21:00";
                      } elseif ($time == 14) {
                        echo  "21:00-22:00";
                      }
                      ?>


                  ໂມງ</td>
                  <td><?php echo $row['price_court1']; ?> ກີບ</td>
                  <td><?php echo $row['price_court2']; ?> ກີບ</td>
                  <td>
                    <form action="price_edit.php" method="post">
                      <input type="hidden" name="edit_id" value="<?php echo $row['time_id']; ?>">
                      <button type="submit" name="edit_btn" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square">
                        </i></button>
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