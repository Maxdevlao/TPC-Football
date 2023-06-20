<?php  
//export.php  
include('../database/dbconfig.php');
$output = '';
if(isset($_POST["export"]))
{
    $sql = "SELECT * FROM booking";
 $result = mysqli_query($connection, $sql);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                    <th> No</th>
                    <th>DATE</th>
                    <th> Income </th>
                   
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
 
    <tr>   
                         <td>'.''.'</td>
                         <td>'.$row["date_booking"].'</td>  
                         <td>'.$row["price_court"].'</td>  
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
