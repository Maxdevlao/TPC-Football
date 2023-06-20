<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
require('database/dbconfig.php');
?>

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
        <!-- Admin Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text font-weight-bold text-primary text-uppercase mb-1"><a class="text-primary" href="emoloyee.php">
                                    ພະນັກງານທັງໝົດ</a></div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php
                                $query = "SELECT id FROM employee WHERE status='2' ORDER BY id";
                                $query_run = mysqli_query($connection, $query);

                                $row = mysqli_num_rows($query_run);

                                echo '<h2> ' . $row . '</h2>';
                                ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <img src="img/employee.png" width="40px">
                            <!-- <i class="bi bi-person-circle  fa-2x text-primary "></i> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- booking today Card Example -->
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
                                $query = "SELECT id FROM booking WHERE date_booking = '$todaysDate' ORDER BY id";
                                $query_run = mysqli_query($connection, $query);
                                $row = mysqli_num_rows($query_run);
                                echo '<h2> ' . $row . '</h2>';
                                ?>

                            </div>
                        </div>
                        <div class="col-auto">
                            <img src="img/table.png" width="40px">
                            <!-- <i class="bi bi-person-video2 fa-2x text-primary "></i> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Customer Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text font-weight-bold text-info text-uppercase mb-1">
                                <a class="text-info" href="customer.php">ລູກຄ້າທັງໝົດ</a>
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php

                                $query = "SELECT id FROM customer ORDER BY id";
                                $query_run = mysqli_query($connection, $query);
                                $row = mysqli_num_rows($query_run);
                                echo '<h2> ' . $row . '</h2>';
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

        <!-- booking Card Example -->
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

                                $query = "SELECT  id FROM booking ORDER BY id";
                                $query_run = mysqli_query($connection, $query);

                                $row = mysqli_num_rows($query_run);

                                echo '<h2> ' . $row . '</h2>';
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
        <!-- income Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text font-weight-bold text-danger text-uppercase mb-1"><a class="text-danger " href="income.php">
                                    ລາຍຮັບທັງໝົດຈາກການຈອງເດີ່ນ</a>
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php
                                $query = "SELECT  price_court, SUM(price_court) AS total FROM booking ORDER BY id";
                                $query_run = mysqli_query($connection, $query);
                                $total = 0;
                                while ($row = mysqli_fetch_assoc($query_run)) {
                                    $total += $row['total'];
                                    echo '<h3>' . number_format($total, 2) . '</h4>' . 'ກີບ';
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="bi bi-currency-exchange fa-2x text-danger "></i>
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
                    <script src="https://code.highcharts.com/highcharts.js"></script>
                    <?php require('database/dbconfig.php');
                    $query = "SELECT * FROM booking";
                    $result = mysqli_query($connection, $query);

                    $DataName = array();
                    $DataTime = array();
                    while ($row = mysqli_fetch_assoc($result)) {
                        $DataName[] = $row['date_booking'];
                        $DataTime[] = $row['price_court'];
                    }

                    ?>
                    <div id="container" style="width:100%; height:400px;"></div>
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            const chart = Highcharts.chart('container', {
                                chart: {
                                    type: 'line'
                                },
                                title: {
                                    text: 'ລາຍຮັບຈາກການຈອງເດີ່ນປະຈຳວັນ'
                                },
                                xAxis: {
                                    categories: [<?php echo "'" . implode("','", $DataName) . "'"; ?>]
                                },
                                yAxis: {
                                    title: {
                                        text: 'ຈຳນວນເງິນ'
                                    }
                                },
                                series: [{
                                    name: 'ຈຳນວນເງິນ',
                                    data: [<?php echo implode(",", $DataTime); ?>]
                                }],
                            });
                        }, );
                    </script>
                    <code>ລາຍຮັບຈາກການຈອງເດີ່ນແຍກຕາມມື້</code>
                </div>
            </div>

            <hr>
            <!-- Bar Chart -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Bar Chart</h6>
                </div>
                <div class="card-body">
                    <?php
                    $query = " SELECT price_court, SUM(price_court) AS totol, DATE_FORMAT(date_booking, '%d-%M-%Y') AS datesave
                    FROM booking
                     GROUP BY DATE_FORMAT(date_booking, '%m%')
                     ORDER BY DATE_FORMAT(date_booking, '%Y-%m-%d') DESC ";
                    $result = mysqli_query($connection, $query);
                    $datesave = array();
                    $totol = array();
                    while ($row = mysqli_fetch_assoc($result)) {
                        $datesave[] = $row['datesave'];
                        $totol[] = $row['totol'];
                    }
                    ?>
                    <figure class="highcharts-figure">
                        <div id="month"></div>
                        <p class="highcharts-description">
                        </p>
                    </figure>
                    <script>
                        Highcharts.chart('month', {
                            chart: {
                                type: 'bar'
                            },
                            title: {
                                text: 'ລາຍຮັບຈາການຈອງເດີ່ນປະຈຳເດືອນ'
                            },
                            yAxis: {
                                title: {
                                    text: 'ຈຳນວນເງິນ'
                                }
                            },
                            xAxis: {
                                categories: [<?php echo "'" . implode("','", $datesave) . "'"; ?>]
                            },
                            legend: {
                                layout: 'vertical',
                                align: 'right',
                                verticalAlign: 'middle'
                            },

                            series: [{
                                name: 'ຈຳນວນເງິນ',
                                data: [<?php echo implode(",", $totol); ?>]
                            }],
                            responsive: {
                                rules: [{
                                    condition: {
                                        maxWidth: 500
                                    },
                                    chartOptions: {
                                        legend: {
                                            layout: 'horizontal',
                                            align: 'center',
                                            verticalAlign: 'bottom'
                                        }
                                    }
                                }]
                            }

                        });
                    </script>
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
                    <script src="https://code.highcharts.com/highcharts.js"></script>
                    <?php
                    $query = " SELECT price_court, SUM(price_court) AS totol, DATE_FORMAT(date_booking, '%d-%M-%Y') AS datesave
                    FROM booking
                     GROUP BY DATE_FORMAT(date_booking, '%m%')
                     ORDER BY DATE_FORMAT(date_booking, '%Y-%m-%d') DESC ";
                    $result = mysqli_query($connection, $query);
                    $datesave = array();
                    $totol = array();
                    while ($row = mysqli_fetch_assoc($result)) {
                        $datesave[] = $row['datesave'];
                        $totol[] = $row['totol'];
                    }
                    ?>
                     <figure class="highcharts-figure">
                        <div id=""></div>
                      
                    </figure>
                       
                    </div>
                    <hr>
                    <code>ລາຍຮັບຈາກການຈອງເດີ່ນແຍກຕາມປີ</code>
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
                    $sum_price = $sum_price + $arr['price'];
                ?>
                  <tr>
                     <td><?= $num ?></td>
                     <td><?= $arr['court_num']; ?></td>
                     <td><?= $arr['date_booking']; ?></td>
                     <td><?= $arr['time_booking']; ?></td>
                     <td><?= $arr['price']; ?> ກີບ</td>
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