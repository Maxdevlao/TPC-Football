<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
include('database/dbconfig.php');
?>
<head>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/drilldown.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
</head>
  <body>
  <div class="container">
	<div class="row">
		<div class="col-md-12">
			<h2 align="left" style="margin-top: 20px"> ລາຍງານລາຍຮັບຈາກການຈອງເດີ່ນ </h2>
      <a href="income.php?p=today" class="btn btn-info">ລາຍຮັບມື້ນີ້</a> 
			<a href="income.php?p=daily" class="btn btn-info">ລາຍງານລາຍຮັບປະຈຳວັນ</a> 
			<a href="income.php?p=monthy" class="btn btn-success">ລາຍງານລາຍຮັບປະຈຳເດືອນ</a> 
			<a href="income.php?p=yearly" class="btn btn-warning">ລາຍງານລາຍຮັບປະຈຳປີ</a> 
		</div>
	</div>
</div>
<?php
    $p = (isset($_GET['p']) ? $_GET['p'] : '');
    if($p=='daily'){
      include('report/daily.php');
    }elseif($p=='monthy'){
      include('report/monthly.php');
    }elseif($p=='yearly'){
      include('report/yearly.php');
    }elseif($p=='today'){
      include('report/today.php');
    }else{
      include('report/daily.php');
    }
    ?>
    
  </body>
</html>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

<!--container-fluid-->
<?php include('includes/script.php');
include('includes/footer.php');
?>

</div>