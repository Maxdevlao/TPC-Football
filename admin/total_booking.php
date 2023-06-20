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
          <form method="POST" action="export/export_booking.php">
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
              <th> ລຳດັບ </th>
              <th> ID </th>
              <th> ຊື່ຜູ້ຈອງ </th>
              <th> ວັນທີ </th>
              <th> ເດີ່ນ </th>
              <th> ເວລາ </th>
              <th>ລົບ</th>
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
                  <td><?php echo $row['id']; ?></td>
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
                    <!-- <?php $time = $row['time_booking'];
                        if ($time == 1) {
                          echo "08.00-09.00";
                        } elseif ($time == 2) {
                          echo  "09.00-10.00";
                        } elseif ($time == 3) {
                          echo  "10.00-11.00";
                        } elseif ($time == 4) {
                          echo  "11.00-12.00";
                        } elseif ($time == 5) {
                          echo  "12.00-13.00";
                        } elseif ($time == 6) {
                          echo  "13.00-14.00";
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
                        ?> -->
                        </td>

                  <td>
                    <form action="" method="post">
                      <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                      <button type="submit" name="delete_btn" class="btn btn-danger btn-sm " onclick="return confirm('ຍຶນຍັນການລົບ')"><i class="bi bi-trash3"></i></button>
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
  if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM booking WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);
    if($query_run)
    {
        $_SESSION['status'] = "ລົບຂໍ້ມູນສຳເລັດແລ້ວ";
        $_SESSION['status_code'] = "success";
        header('Location: employee.php'); 
    }
    else
    {
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