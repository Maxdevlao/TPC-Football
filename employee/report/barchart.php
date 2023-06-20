  <!-- Bar chart   ///////////////////////////////// -->
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
    // while ($rs = mysqli_fetch_array($result)) {
    //     $datesave[] = "\"" . $rs['datesave'] . "\"";
    //     $totol[] = "\"" . $rs['totol'] . "\"";
    // }
    // $datesave = implode(",", $datesave);
    // $totol = implode(",", $totol);


    ?>

  <figure class="highcharts-figure">
      <div id="month"></div>
      <p class="highcharts-description">

      </p>
  </figure>
  <script>
      Highcharts.chart('month', {
          chart: {
              type: 'bar'
          },
          title: {
              text: 'ລາຍຮັບຈາການຈອງເດີ່ນ'
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