<?php  
//export.php  
include('database/dbconfig.php');
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM customer";
 $result = mysqli_query($connection, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                    <th> ID </th>
                    <th> ຊື່ ແລະ ນາມສະກຸນ </th>
                    <th> ເບີໂທ </th>
                    <th> ທີ່ຢູ່ </th>
                    <th> ຊື່ຜູ້ໃຊ້ </th>
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>   
                         <td>'.$row["id"].'</td>
                         <td>'.$row["name"].'</td>  
                         <td>'.$row["tel"].'</td>  
                         <td>'.$row["address"].'</td>  
                         <td>'.$row["username"].'</td>  

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
