<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
include('database/dbconfig.php');
           
?>
<!-- ຮັບຄ່າGET ມາຈາກຟອມກວດສອບຈາກປຸ່ມຢືນຢັນ -->
<?php
if (isset($_GET['id'])) {
    $main_id = $_GET['id'];
    $sql_update = mysqli_query($connection, "UPDATE booking SET status=2 WHERE id='$main_id' ");
}

?>
<!-- Custom styles for this page -->
<link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

<div class="container-fluid">

    <!--Data Table Example-->
    <div class="card shadow mb-4">
        <div class="card-header py3">
            <?php
                 $todaysDate = date("Y-m-d");
                 $query = "SELECT id FROM booking WHERE date_booking = '$todaysDate' ORDER BY id";
                 $query_run = mysqli_query($connection, $query);
                 $row = mysqli_num_rows($query_run);
            ?>
            <h6 class="m-0 font-weight-bold text-primary">ລາຍການຈອງມື້ນີ້ <?php echo $row ?> ລາຍການ
            </h6>
        </div>
        <div class="card-body">

            <div class="table-responsive">
                <?php
                $todaysDate = date("Y-m-d");
                $query = "SELECT * FROM booking WHERE date_booking = '$todaysDate'";
                $query_run = mysqli_query($connection, $query);
                ?>
                <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="table-success">
                            <th> No </th>
                            <th> ຊື່ຜູ້ຈອງ </th>
                            <th>ວັນທີ </th>
                            <th>ເດີ່ນ </th>
                            <th>ເວລາ </th>
                            <th>ລາຄາເດີ່ນ </th>
                            <th>ຈຳນວນເງິນທີ່ລູກຄ້າໂອນມາ </th>
                            <th>ຈຳນວນເງິນທີ່ເຫຼືອ</th>
                            <th>ຮູບພາບ Payment </th>
                            <th>ສະຖານະ</th>
                            <th>ກວດສອບ</th>
                            <th>ໃບບິນ</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $No = 1;
                        $total=0;
                        if (mysqli_num_rows($query_run) > 0) {
                            while ($row = mysqli_fetch_assoc($query_run)) {
                        ?>
                                <tr>
                                    <td><?php echo $No++ ?></td>
                                    <td><?php echo $row['username']; ?></td>
                                    <td><?php echo $row['date_booking']; ?></td>
                                    <td><?php echo $row['court_num']; ?></td>
                                    <td><?php echo $row['time_booking']; ?></td>
                                    <td><?php echo $row['price_court']; ?></td>
                                    <td><?php echo $row['price']; ?></td>
                                    <td><?php $sum = $row['price_court'] - $row['price'];
                                       echo $sum; 
                                        ?>
                                    </td>
                                    <td><?php echo '<img src="../customer/images/upload-qr/'.$row['slip_payment'].'" width=80px" height="100px" alt="SlipPayment">' ?></td>
                                    <td>   <?php $status = $row['status'];
                                        if ($status == 1) {
                                            echo "<span class='badge badge-warning'>ລໍຖ້າການກວດສອບ</span>";
                                        } elseif ($status == 2) {
                                            echo  "<span class='badge badge-success'>ກວດສອບແລ້ວ</span>";
                                        }
                                        elseif ($status == 3) {
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
                            echo "ຍັງບໍ່ມີລາຍການຈອງ ";
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