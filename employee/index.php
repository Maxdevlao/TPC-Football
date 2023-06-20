<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
?>
<!-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> -->
<script src="https://code.highcharts.com/highcharts.js"></script>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">TPC Dashboard</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="bi bi-cloud-arrow-down-fill"></i> </a>
    </div>

    <!-- Content Row -->
    <div class="row">
        
        <!-- Customer Card  -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text font-weight-bold text-info text-uppercase mb-1">
                                <p>ລູກຄ້າທັງໝົດ</p>
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php
                                require('database/dbconfig.php');
                                $query = "SELECT id FROM customer ORDER BY id";
                                $query_run = mysqli_query($connection, $query);
                                $row = mysqli_num_rows($query_run);
                                echo '<h1> ' . $row . '</h1>';
                                ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <img src="img/customer.png" width="40px">
                            <!-- <i class="bi bi-person-video2 fa-2x text-primary "></i> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- booking today Card -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text font-weight-bold text-success text-uppercase mb-1"><a class="text-success" href="booking_today.php">
                                    ລາຍການຈອງມື້ນີ້</a>
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php
                                $todaysDate = date("Y-m-d");
                                $query = "SELECT id FROM booking WHERE date_booking = '$todaysDate' AND NOT status=3 ORDER BY id"; //And not status=3 because it refuse
                                $query_run = mysqli_query($connection, $query);
                                $row = mysqli_num_rows($query_run);
                                echo '<h1> ' . $row . '</h1>';
                                ?>

                            </div>
                        </div>
                        <div class="col-auto">
                            <img src="img/football.png" width="40px">
                            <!-- <i class="bi bi-person-video2 fa-2x text-primary "></i> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- booking Card  -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text font-weight-bold text-warning text-uppercase mb-1"><a class="text-warning" href="total_booking.php">
                                    ລວມລາຍການຈອງ</a>
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php
                                require('database/dbconfig.php');
                                $query = "SELECT id FROM booking ORDER BY id";
                                $query_run = mysqli_query($connection, $query);

                                $row = mysqli_num_rows($query_run);

                                echo '<h1> ' . $row . '</h1>';
                                ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="bi bi-table fa-2x text-primary "></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row -->

    <!-- Page Heading -->
    <h3 class="h3 mb-2 text-gray-800">Charts</h3>

    <!-- Content Row -->
    <div class="row">

        <div class="col-xl-8 col-lg-7">

            <!-- Area Chart -->
            <div class="card shadow mb-4" style="margin-bottom: 20px;">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Line Chart</h6>
                </div>
                <div class="card-body">
                    <?php include('report/daily.php')?>
                    <code>ລາຍຮັບຈາກການຈອງເດີ່ນແຍກຕາມມື້</code> 
                </div>
            </div>
            

            <!-- Bar Chart -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Bar Chart</h6>
                </div>
                <div class="card-body">
                <?php include('report/monthly.php')?>
                    
                    <code>ລາຍຮັບຈາກການຈອງເດີ່ນແຍກຕາມເດືອນ</code>
                </div>
            </div>
        </div>

        <!-- Donut Chart -->
        <div class="col-xl-4 col-lg-5">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Donut Chart</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-pie pt-4">
                        <canvas id="myPieChart"></canvas>
                    </div>
                    <hr>
                    
                    <code>/js/demo/chart-pie-demo.js</code> file.
                </div>
            </div>
        </div>
    </div>
</div>

<!-- End of Main Content -->



<!-- /.container-fluid -->

<!-- income page -->
<!-- <div class="card-body">
    <div class="table-responsive">
        <?php
        $laoMonth = array("ມກ", "ກພ", "ມນ", "ມສ", "ພສ", "ມນ", "ກດ", "ສຫ", "ກຍ", "ຕລ", "ພຈ", "ທວ");
        $laoMonth_full = array("ມັງກອນ", "ກຸມພາ", "ມນ", "ມສ", "ພສ", "ມິຖຸນາ", "ກໍລະກົດ", "ສິງຫາ", "ກັນຍາ", "ຕລ", "ພຈ", "ທວ");
        $sql = "SELECT DISTINCT month(date_booking) as month FROM booking ORDER BY month ASC";
        $query = mysqli_query($connection, $sql);
        while ($data = mysqli_fetch_array($query)) {
            $str_month = sprintf("%02d", $data['month']);
            echo "<button type='button' class='btn btn-outline-info' onClick='window.location.href=\"./?M=$str_month\"'>" . $laoMonth_full[(int)($data['month'] - 1)] . "</button>";
        }
        ?>

        <table class="table table-bordered" id="" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th> # </th>
                    <th> ເດີ່ນ </th>
                    <th> ວັນທີ </th>
                    <th> ເວລາ </th>
                    <th> ລາຄາ </th>
                </tr>
            </thead>
            <tbody>
                <?php
                $m = $_GET['M'];
                if ($m == '') {
                    $where = "";
                } else {
                    $where = "Where month(date_booking)='$m'";
                }
                $sql = "SELECT * FROM booking $where ORDER BY date_booking ASC";
                // echo $sql;
                $query = mysqli_query($connection, $sql);
                $num = 0;
                $sum_price = 0;
                while ($arr = mysqli_fetch_array($query)) {
                    $num++;
                    $sum_price = $sum_price + $arr['price_court'];
                ?>
                    <tr>
                        <td><?= $num ?></td>
                        <td><?= $arr['court_num']; ?></td>
                        <td><?= $arr['date_booking']; ?></td>
                        <td><?= $arr['time_booking']; ?></td>
                        <td><?= $arr['price_court']; ?> ກີບ</td>
                    </tr>
                <?php
                }
                ?>
                <tr style="font-weight:bold;">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="text-info">ລວມເງິນ :<?= number_format($sum_price, 2); ?> ກີບ</td>
                </tr>
            </tbody>
        </table>
    </div>
</div> -->
<!-- end income  -->

</div>
<!-- End of Main Content -->





<?php include('includes/script.php');
include('includes/footer.php');
?>