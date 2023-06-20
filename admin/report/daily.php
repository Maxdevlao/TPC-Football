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

    <!--Data Table Example-->
<div class="card shadow mb-4">
  <div class="card-header py3 border-success">
    <h6 class="m-0 font-weight-bold text-primary">ຂໍ້ມູນຮັບຈາກການຈອງເດີ່ນ
      <div class="text-right">
        <form method="post" action="export/Expdaily.php">
        <button type="submit" name="export" class="btn btn-success">
        <i class="bi bi-arrow-down-circle"></i></button>
        </form>
      </div>
    </h6>
  </div>
<div class="card-body">
  <div class="card shadow mb-4">
        <div class="card-header py3">
        </div>
        <div class="card-body">
    
            <div class="table-responsive">
                <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="table-success">
                            <th>ວັນທີ </th>
                            <th>ລາຍໄດ້ </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $total=0;//ຖ້າຈະໃສ່@ ແລ້ວເອົາໂຕນີ້ອອກ
                   
                        $query_run = mysqli_query($connection, $query);
                        if (mysqli_num_rows($query_run) > 0) {
                            while ($row = mysqli_fetch_assoc($query_run)) {
                        ?>
                                <tr>
                                    <td><?php echo $row['date_booking']; ?></td>
                                    <td><?php echo number_format($row['price_court'],2);?> ກີບ</td>
                                </tr>
                                </tr>
                        <?php
                            }
                            
                        } else {
                            echo "ຍັງບໍ່ມີລາຍຮັບ ";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php mysqli_close($connection); ?>
 