<head>
    <script src="https://code.highcharts.com/highcharts.js"></script>
</head>

<?php require('database/dbconfig.php');
 $query = "SELECT * FROM booking";
 $result = mysqli_query($connection, $query);
 
$DataName = array();
$DataTime = array();
while($row=mysqli_fetch_assoc($result)){
    $DataName[] = $row['date_booking'];
    $DataTime[] = $row['price_court'];

}
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
                type: 'bar'
            },
            title: {
                text: 'ລາຍງານການຈອງເດີ່ນປະຈຳເດືອນ'
            },
            xAxis: {
                categories: [<?php echo "'" . implode("','", $DataTime) . "'"; ?>]
            },
            yAxis: {
                title: {
                    text: 'ເດີ່ນ'
                }
            },
            colors: ['#35FE15'],
            plotOptions: {
                column: {
                    colorByPoint: true
                }
            },
            series: [{
                name: 'ເດີ່ນ',
                data: [<?php echo implode(",", $DataCourt); ?>],
            }],
        });
    }, );
</script>
