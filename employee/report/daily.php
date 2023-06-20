<head>
<script src="https://code.highcharts.com/highcharts.js"></script>
</head>

<?php  require('database/dbconfig.php');
 $query = "SELECT * FROM booking";
 $result = mysqli_query($connection, $query);
 
$DataName = array();
$DataTime = array();
while($row=mysqli_fetch_assoc($result)){
    $DataName[] = $row['date_booking'];
    $DataTime[] = $row['price_court'];

}

?>
<div id="container" style="width:100%; height:400px;"></div>
<script>
document.addEventListener('DOMContentLoaded', function () {
        const chart = Highcharts.chart('container', {
            chart: {
                type: 'line'
            },
            title: {
                text: 'ລາຍຮັບຈາກການຈອງເດີ່ນປະຈຳວັນ'
            },
            xAxis: {
                categories: [<?php echo "'" . implode("','",$DataName)."'"; ?>]
            },
            yAxis: {
                title: {
                    text: 'ຈຳນວນເງິນ'
                }
            },
            series: [{
                name: 'ຈຳນວນເງິນ',
                data: [<?php echo implode(",",$DataTime); ?>]
            }],
        });
    },
);
  </script>
 