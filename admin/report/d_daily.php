<head>
    <script src="https://code.highcharts.com/highcharts.js"></script>
</head>

<?php require('database/dbconfig.php');
$query = " SELECT * FROM sale_order_detail";
$result = mysqli_query($connection, $query);

$DataName = array();
$DataTime = array();
while ($row = mysqli_fetch_assoc($result)) {
    $DataName[] = $row['d_date'];
    $DataTime[] = $row['total'];
}

?>
<div id="daily" style="width:100%; height:400px;"></div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const chart = Highcharts.chart('daily', {
            chart: {
                type: 'line'
            },
            title: {
                text: 'ລາຍຮັບຈາການຂາຍເຄື່ອງດື່ມ'
            },
            xAxis: {
                categories: [<?php echo "'" . implode("','", $DataName) . "'"; ?>]
            },
            yAxis: {
                title: {
                    text: 'ຈຳນວນເງິນ'
                }
            },
            colors: ['#08ECB1'],
            plotOptions: {
                column: {
                    colorByPoint: true
                }
            },
            series: [{
                name: 'ຈຳນວນເງິນ',
                data: [<?php echo implode(",", $DataTime); ?>]
            }],
        });
    }, );
</script>
