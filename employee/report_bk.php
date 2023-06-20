<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
include('database/dbconfig.php');
?>
<head>
    <script src="https://code.highcharts.com/highcharts.js"></script>
</head>
  <body>
  <div class="container">
	<div class="row">
		<div class="col-md-12">
			<h2 align="left" style="margin-top: 20px"> ລາຍງານຈາກການຈອງເດີ່ນ </h2>
			<a href="report_bk.php?r=daily" class="btn btn-info">ລາຍງານການຈອງເດີ່ນປະຈຳວັນ</a> 
			<a href="report_bk.php?r=monthy" class="btn btn-success">ລາຍງານການຈອງເດີ່ນປະຈຳເດືອນ</a> 
			<a href="report_bk.php?r=yearly" class="btn btn-warning">ລາຍງານການຈອງເດີ່ນປະຈຳປີ</a> 
		</div>
	</div>
</div>
    <?php
    $p = (isset($_GET['r']) ? $_GET['r'] : '');
    if($p=='daily'){
      include('report/bk_daily.php');
    }elseif($p=='monthy'){
      include('report/bk_monthly.php');
    }elseif($p=='yearly'){
      include('report/bk_yearly.php');
    }else{
      include('report/bk_daily.php');
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