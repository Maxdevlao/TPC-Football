<script src="https://code.highcharts.com/highcharts.js"></script>
<figure class="highcharts-figure">
      <div id="month"></div>
      <p class="highcharts-description">
      </p>
  </figure>
<?php 
require('database/dbconfig.php');
     $query = " SELECT total, SUM(total) AS sum_totol, DATE_FORMAT(d_date, '%d-%M-%Y')  AS datesave
     FROM sale_order_detail
     GROUP BY DATE_FORMAT(datesave, '%m%')
     ORDER BY DATE_FORMAT(datesave, '%Y-%m-%d') DESC
     ";
   $resultchart = mysqli_query($connection, $query);
   //for chart
   $datesave = array();
   $totol = array();
   while($rs = mysqli_fetch_array($resultchart)){
   $datesave[] = "\"".$rs['datesave']."\"";
   $totol[] = "\"".$rs['sum_totol']."\"";
   }
//    $datesave = implode(",", $datesave);
//    $totol = implode(",", $totol);
   
?>
 <script>
   
      Highcharts.chart('month', {
          chart: {
              type: 'bar'
          },
          title: {
              text: 'ລາຍຮັບຈາການຈອງເດີ່ນປະຈຳເດືອນ'
          },
          // subtitle: {
          //   text: 'ໃສ່ລາຍລະອຽດ'
          // },
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
          colors: ['#2BFDE4'],
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
                                    <td><?php echo $row['datesave']; ?></td>
                                    <td><?php echo number_format($row['sum_totol'],2);?> ກີບ</td>
                                </tr>
                                </tr>
                        <?php
                         $total += $row['sum_totol'];
                    }
                    ?>
                    <tr class="table-danger">
                        <td>ລວມ</td>
                        <td><b>
                        <?php echo number_format($total,2);?></b></td></td>
                    </tr>
                        <?php
                            
                        } else {
                            echo "ຍັງບໍ່ມີລາຍຮັບ ";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php mysqli_close($connection); ?>