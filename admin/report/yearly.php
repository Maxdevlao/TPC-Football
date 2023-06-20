<script src="https://code.highcharts.com/highcharts.js"></script>
<figure class="highcharts-figure">
      <div id="yearly"></div>
      <p class="highcharts-description">

      </p>
  </figure>
<?php 
require('database/dbconfig.php');
    // $query = " SELECT date_booking, price_court AS totol, DATE_FORMAT(date_booking, '%Y') AS datesave
    // FROM booking
    // GROUP BY DATE_FORMAT(datesave, '%Y%')
    // ORDER BY DATE_FORMAT(datesave, '%Y') DESC
    // ";
     $query = " SELECT price_court, SUM(price_court) AS totol, DATE_FORMAT(date_booking, '%Y') AS datesave
     FROM booking
     GROUP BY DATE_FORMAT(datesave, '%Y%')
     ORDER BY DATE_FORMAT(datesave, '%Y') DESC
     ";
   //$result = mysqli_query($connection, $query);
   $resultchart = mysqli_query($connection, $query);
   //for chart
   $datesave = array();
   $totol = array();
   while($rs = mysqli_fetch_array($resultchart)){
   $datesave[] = "\"".$rs['datesave']."\"";
   $totol[] = "\"".$rs['totol']."\"";
   }
   $datesave = implode(",", $datesave);
   $totol = implode(",", $totol);
   
?>
<script>
     Highcharts.chart('yearly', {
          chart: {
              type: 'line'
          },
          title: {
              text: 'ລາຍຮັບຈາກການຈອງເດີ່ນປະຈຳປີ'
          },
        //   subtitle: {
        //     text: 'ໃສ່ລາຍລະອຽດ'
        //   },
          yAxis: {
              title: {
                  text: 'ຈຳນວນເງິນ'
              }
          },
          xAxis: {
              categories:  [<?php echo $datesave;?>]
          },

          legend: {
              layout: 'vertical',
              align: 'right',
              verticalAlign: 'middle'
          },
          
          series: [{
              name: 'ຈຳນວນເງິນ',
              data: [<?php echo $totol;?>]
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
                        $sql1="SELECT 
                        EXTRACT(YEAR FROM date_booking) AS year,
                        FROM booking";
                        $query_run = mysqli_query($connection, $query);

                        if (mysqli_num_rows($query_run) > 0) {
                            while ($row = mysqli_fetch_assoc($query_run)) {
                        ?>
                                <tr>
                                    <td><?php echo $row['datesave']; ?></td>
                                    <td><?php echo number_format($row['totol'],2);?> ກີບ</td>
                                </tr>
                                </tr>
                        <?php
                         $total += $row['totol'];
                    }
                    ?>
                    <tr class="table-danger">
                        <td>ລວມ</td>
                        <td><b>
                        <?php echo number_format($total,2);?></b></td></td>
                    </tr>
                        <?php
                            
                        } else {
                            echo " ";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php mysqli_close($connection); ?>

