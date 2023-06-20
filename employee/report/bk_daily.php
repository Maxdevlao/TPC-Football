<head>
    <script src="https://code.highcharts.com/highcharts.js"></script>
</head>

<?php require('database/dbconfig.php');
 $todaysDate = date("Y-m-d");
 $query = "SELECT time_booking,court_num FROM booking WHERE date_booking = '$todaysDate' ORDER BY id";
$result = mysqli_query($connection, $query);

$DataCourt = array();
$DataTime = array();
while ($row = mysqli_fetch_assoc($result)) {
    $DataTime[] = $row['time_booking'];
    $DataCourt[] = $row['court_num'];
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
                text: 'ລາຍງານການຈອງເດີ່ນປະຈຳວັນ'
            },
            xAxis: {
                categories: [<?php echo "'" . implode("','", $DataTime) . "'"; ?>]
            },
            yAxis: {
                title: {
                    text: 'ເດີ່ນ'
                }
            },
            colors: ['#2BFDE4'],
            plotOptions: {
                column: {
                    colorByPoint: true
                }
            },
            series: [{
                name: 'ເດີ່ນ',
                data: [<?php echo implode(",", $DataCourt); ?>]
            }],
        });
    }, );
</script>
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
                            <th> ຊື່ຜູ້ຈອງ </th>
                            <th>ວັນທີ </th>
                            <th>ເດີ່ນ </th>
                            <th>ເວລາ </th>
                            
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
                                    <td><?php echo $row['username']; ?></td>
                                    <td><?php echo $row['date_booking']; ?></td>
                                    <td><?php echo $row['court_num']; ?></td>
                                    <td><?php echo $row['time_booking']; ?></td>
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
<?php mysqli_close($connection); ?>