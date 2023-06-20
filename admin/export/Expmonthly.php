<?php  
//export.php  
include('../database/dbconfig.php');
$output = '';
if(isset($_POST["export"]))
{
    $sql=" SELECT price_court, SUM(price_court) AS totol, DATE_FORMAT(date_booking, '%d-%M-%Y') AS datesave
    FROM booking
        GROUP BY DATE_FORMAT(date_booking, '%m%')
        ORDER BY DATE_FORMAT(date_booking, '%Y-%m-%d') DESC"   ;
 $result = mysqli_query($connection, $sql);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                    <th> No</th>
                    <th>Month</th>
                    <th> Income </th>
                   
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
 
    <tr>   
                         <td>'.''.'</td>
                         <td>'.$row["datesave"].'</td>  
                         <td>'.$row["totol"].'</td>  
                         

                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download.xls');
  echo $output;
 }
}
?>
