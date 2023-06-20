<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
include('database/dbconfig.php');
?>

<div class="container-fluid">

  <!--Data Table Example-->
  <div class="card shadow mb-4">
    <div class="card-header py3 border-success">
      <h6 class="m-0 font-weight-bold text-primary">ຂໍ້ມູນລາຍການຈອງທັງໝົດ
        <?php
        $query = "SELECT id FROM booking ORDER BY id";
        $query_run = mysqli_query($connection, $query);
        $row = mysqli_num_rows($query_run);
        echo '<h4> ' . $row . '</h4>';
        ?>
        <div class="text-right">
          <form method="POST" action="export_booking.php">
            <button type="submit" name="export" class="btn btn-success">
              <i class="bi bi-arrow-down-circle"></i></button>
          </form>
        </div>
      </h6>
    </div>
    <div class="card-body">


      <div class="table-responsive">
        <?php
        $query = "SELECT * FROM booking";
        $query_run = mysqli_query($connection, $query);
        ?>
        <table class="table " id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th> # </th>
              <!-- <th> ID </th> -->
              <th> ຊື່ຜູ້ຈອງ </th>
              <th> ວັນທີ </th>
              <th> ເດີ່ນ </th>
              <th> ເວລາ </th>
              <th>ສະຖານະ</th>
              <th>ກວດສອບ</th>
              <th>ໃບບິນ</th>


            </tr>
          </thead>
          <tbody>
            <?php
            $No = 1;
            if (mysqli_num_rows($query_run) > 0) {
              while ($row = mysqli_fetch_assoc($query_run)) {
            ?>
                <tr>

                  <td><?php echo $No++; ?></td>
                  <!-- <td><?php echo $row['id']; ?></td> -->
                  <td><?php echo $row['username']; ?></td>
                  <td><?php echo $row['date_booking']; ?></td>
                  <td>
                    <?php $court = $row['court_num'];
                    if ($court == 1) {
                      echo "ເດີ່ນໃນຮົ່ມ";
                    } elseif ($court == 2) {
                      echo  "ເດີ່ນກາງແຈ້ງ";
                    }
                    ?>
                  </td>
                  <td> <?php echo $row['time_booking']; ?>

                  </td>
                  <td> <?php $status = $row['status'];
                        if ($status == 1) {
                          echo "<span class='badge badge-warning'>ລໍຖ້າການກວດສອບ</span>";
                        } elseif ($status == 2) {
                          echo  "<span class='badge badge-success'>ກວດສອບແລ້ວ</span>";
                        } elseif ($status == 3) {
                          echo  "<span class='badge badge-danger'>ຖືກປະຕິເສດ</span>";
                        }
                        ?>
                  </td>

                  <td>
                    <form action="check_booking.php?=&id=<?php echo $row['id']; ?>" method="POST">
                      <input type="hidden" name="view_id" value="<?php echo $row['id']; ?>">
                      <button type="submit" name="view_btn" class="btn btn-warning btn-sm"><i class="bi bi-search">
                        </i> </button>
                    </form>
                  </td>
                  <td>
                    <form action="bill.php?=view_bill&id=<?php echo $row['id']; ?>" method="post">
                      <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                      <button type="submit" name="edit_btn" class="btn btn-success btn-sm"><i class="bi bi-printer">
                        </i></button>
                    </form>
                  </td>
                </tr>
            <?php
              }
            } else {
              echo "ບໍ່ມີລາຍການຈອງ!";
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- DELETE -->
  <?php
  if (isset($_POST['delete_btn'])) {
    $id = $_POST['delete_id'];

    $query = "DELETE FROM booking WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);
    if ($query_run) {
      $_SESSION['status'] = "ລົບຂໍ້ມູນສຳເລັດແລ້ວ";
      $_SESSION['status_code'] = "success";
      header('Location: employee.php');
    } else {
      $_SESSION['status'] = "ຍັງບໍ່ໄດ້ລົບຂໍ້ມູນ";
      $_SESSION['status_code'] = "error";
      header('Location: employee.php');
    }
  }
  ?>

  <!--container-fluid-->
  <?php include('includes/script.php');
  include('includes/footer.php');
  ?>

</div>