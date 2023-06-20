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
            <h6 class="m-0 font-weight-bold text-primary">ຊ່ວງເວລາການຈອງວັນທີ-ວັນທີ
            </h6>
            <div class="text-right">
                <form method="post" action="index.php">
                    <button type="submit" name="export" class="btn btn-success">
                        <i class="bi bi-arrow-down-circle"></i></button>
                </form>
            </div>
        </div>
        <div class="card-body"> 
            <p>ວັນທີ :<?php echo $_POST['startDate'] ?> ຫາວັນທີ : <?php echo $_POST['endDate'] ?></p>
            <div class="table-responsive">
                <?php
                $stDate = $_POST['startDate'];
                $endDate = $_POST['endDate'];

                $sql = "SELECT * FROM `booking` WHERE `date_booking`>='{$stDate}' AND `date_booking`<='{$endDate}' AND time_booking";
                $result = mysqli_query($connection, $sql);
                ?>
                <table class="table " id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th> No </th>
                            <th> Booking_ID </th>
                            <th> ເດີ່ນ </th>
                            <th> ວັນທີ </th>
                            <th> ເວລາ </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $No=1;
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                                <tr>
                                    <td><?php echo $No++ ?></td>
                                    <td><?php echo $row['id'] ?></td>
                                    <td> <?php $court = $row['court_num'];
                                            if ($court == 1) {
                                                echo "<span class='badge badge-primary'>ເດີ່ນໃນຮົ່ມ</span>";
                                            } elseif ($court == 2) {
                                                echo  "<span class='badge badge-success'>ເດີ່ນກາງແຈ້ງ</span>";
                                            }
                                            ?>
                                    </td>
                                    <td><?php echo $row['date_booking']; ?></td>
                                    <td><?php  echo $row['time_booking'];
                                        // if ($time == 1) {
                                        //     echo "08.00-09.00";
                                        // } elseif ($time == 2) {
                                        //     echo  "09.00-10.00";
                                        // } elseif ($time == 3) {
                                        //     echo  "10.00-11.00";
                                        // } elseif ($time == 4) {
                                        //     echo  "11.00-12.00";
                                        // } elseif ($time == 5) {
                                        //     echo  "12.00-13.00";
                                        // } elseif ($time == 6) {
                                        //     echo  "13.00-14.00";
                                        // } elseif ($time == 7) {
                                        //     echo  "14:00-15:00";
                                        // } elseif ($time == 8) {
                                        //     echo  "15:00-16:00";
                                        // } elseif ($time == 9) {
                                        //     echo  "16:00-17:00";
                                        // } elseif ($time == 10) {
                                        //     echo  "17:00-18:00";
                                        // } elseif ($time == 11) {
                                        //     echo  "18:00-19:00";
                                        // } elseif ($time == 12) {
                                        //     echo  "19:00-20:00";
                                        // } elseif ($time == 13) {
                                        //     echo  "20:00-21:00";
                                        // } elseif ($time == 14) {
                                        //     echo  "21:00-22:00";
                                        // }
                                        ?>
                                    </td>
                                </tr>
                        <?php
                            }
                        } else {
                            echo "<span class='text-danger'>ບໍມີການຈອງ</span>";
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