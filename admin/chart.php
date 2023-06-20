<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/drilldown.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<figure class="highcharts-figure">
  <div id="container"></div>
  <p class="highcharts-description">
    Pie chart where the individual slices can be clicked to expose more
    detailed data.
  </p>
</figure>

<?php require('database/dbconfig.php');
    $query = " SELECT price_court, SUM(price_court) AS totol, DATE_FORMAT(date_booking, '%d-%M-%Y') AS datesave
    FROM booking
    GROUP BY DATE_FORMAT(date_booking, '%m%')
    ORDER BY DATE_FORMAT(date_booking, '%Y-%m-%d') DESC
    ";
    $result = mysqli_query($connection, $query);
    $datesave = array();
    $totol = array();

    while($row=mysqli_fetch_assoc($result)){
        $datesave[] = $row['datesave'];
        $totol[] = $row['totol'];
    
    }
    ?>

<script>
  Highcharts.chart('container', {
					chart: {
					plotBackgroundColor: null,
					plotBorderWidth: null,
					plotShadow: false,
					type: 'pie'
					},
					title: {
					text: 'รายงานยอดขายแยกตาม............................'
					},
					tooltip: {
					pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
					},
					accessibility: {
					point: {
					valueSuffix: '%'
					}
					},
					plotOptions: {
					pie: {
					allowPointSelect: true,
					cursor: 'pointer',
					dataLabels: {
					enabled: true,
					format: '<b>{point.name}</b>: {point.percentage:.1f} %'
					}
					}
					},
					series: [{
					name: 'Brands',
					colorByPoint: true,
					data: [<?php echo $data;?>]
					}]
					});
</script>



<div class="container">
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10">
 
					<h4>  Pie charts from https://www.highcharts.com </h4>
					<h4>แสดงโครงสร้างข้อมูลที่จะนำไปแสดงในกราฟ</h4>
					<?php echo $report_data;?>
					<figure class="highcharts-figure">
						    <div id="containerchart"></div>
						     
						</figure>
					<script>
						Highcharts.chart('containerchart', {
					chart: {
					plotBackgroundColor: null,
					plotBorderWidth: null,
					plotShadow: false,
					type: 'pie'
					},
					title: {
					text: 'รายงานยอดขายแยกตาม............................'
					},
					tooltip: {
					pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
					},
					accessibility: {
					point: {
					valueSuffix: '%'
					}
					},
					plotOptions: {
					pie: {
					allowPointSelect: true,
					cursor: 'pointer',
					dataLabels: {
					enabled: true,
					format: '<b>{point.name}</b>: {point.percentage:.1f} %'
					}
					}
					},
					series: [{
					name: 'Brands',
					colorByPoint: true,
					data: [<?php echo $report_data;?>]
					}]
					});
					</script>
					
				</div>
			</div>
		</div>