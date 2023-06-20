<html>
<head>
<title>TPC FOOTBALL </title>
<? date_default_timezone_set('Asia/Bangkok');?>
<script type="text/javascript"> 
function display_c(){
var refresh=1000; // Refresh rate in milli seconds
mytime=setTimeout('display_ct()',refresh)
}
function display_ct() {
var x = new Date()
var x1=x.getDate() + "/" + x.getMonth() + "/" + x.getFullYear(); 
x1 = x1 + " - " +  x.getHours( )+ ":" +  x.getMinutes() + ":" +  x.getSeconds();
document.getElementById('ct').innerHTML = x1;
display_c();
 }
</script>
</head>

<body onload=display_ct();>
<span id='ct' ></span>

<?php
 require('db.php');
 $arrTime = array('08:00-09:00','09:00-10:00', '10:00-11:00', '11:00-12:00', '12:00-13:00', '13:00-14:00',
 '14:00-15:00', '15:00-16:00', '16:00-17:00', '17:00-18:00', '18:00-19:00', '19:00-20:00',
 '20:00-21:00', '21:00-22:00');
$arrCourt=array(1,2); 
$mydate = $_POST['ckDate'];

if(!function_exists('mysqli_result')){
    function mysqli_result($source,$row,$column=0){
       $source ->data_seek($row);
       $datarow = $source->fetch_array();
       return $datarow[$column];
   }  
}
?>
<h4>ຕາຕະລາງການຈອງວັນທີ <?php echo $mydate?></h4>
<?php 
$strTable = '<table border="1" width="1000"><tr bgcolor="#E5E5DF">
<td bgcolor="#E5E5DF">ສະໜາມ/ເວລາ</td>';
foreach($arrTime as $time){ //ສ້າງຫົວຕາລາງ
    $strTable.='<td>'.$time.'</td>'; 
}
$strTable.='</tr>';
foreach($arrCourt as $courtNum){
    $strTable.='<tr><td>'.$courtNum.'</td>';
    $sql = "SELECT * FROM court_booking WHERE court_num={$courtNum} 
     AND date_booking='{$_POST['ckDate']}' ORDER BY time_booking ASC ";

    $rs = mysqli_query($connection,$sql);

    $run=0;
    foreach($arrTime as $time){
        // if( mysqli_num_rows($rs) > $run && $time === mysqli_result($rs,$run,2)){
        //      $strTable.='<td bgcolor="red">ຈອງແລ້ວ</td>';
        // $run++;
        // }else{
        //     $strTable.='<td bgcolor="green">ວ່າງ</td>';
            if(mysqli_num_rows($rs) > $run && $time == mysqli_result($rs,$run,2)){ //if booking
                $strTable .= '<td bgcolor="#FF0000">ຈອງແລ້ວ</td>';
                $run++;
            } else { // if no booking
                $strTable .= '<td bgcolor="#00c28a"><a href="ck.php">ວ່າງ</a></td>';
            }
        } //end foreach
    $strTable.='<tr>';
}
echo $strTable.'</table>';
?>
</body>
</html>