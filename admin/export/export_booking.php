<?php  
//export to excel 
include('../database/dbconfig.php');
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM booking";
 $result = mysqli_query($connection, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                   
                    <th>  ຊື່ຜູ້ຈອງ </th>
                    <th> ວັນທີຈອງ </th>
                    <th> ເດີນ </th>
                    <th> ເວລາ </th>
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>   
                         
                         <td>'.$row["username"].'</td>  
                         <td>'.$row["date_booking"].'</td>  
                         <td>'.$row["court_num"].'</td>  
                         <td>'.$row["time_booking"].'</td>  
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
<!-- End export -->