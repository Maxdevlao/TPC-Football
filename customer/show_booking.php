<?php
session_start();
 //include('security.php');
 require('includes/navbar.php'); 
 require('includes/banner.php'); 
 require('db.php'); //Database
?>
<?php
// $arrTime = array('08:00-09:00', '09:00-10:00', '10:00-11:00', '11:00-12:00', '12:00-13:00', '13:00-14:00', '14:00-15:00', '15:00-16:00', '16:00-17:00', '17:00-18:00', '18:00-19:00', '19:00-20:00', '20:00-21:00', '21:00-22:00');
// $arrCourt = array(1, 2);
$mydate = $_POST['ckDate'];
// ດຶງຂໍ້ມູນຈາກຖານມາເກັບໄວ້ໃນ ARRAY
$query1 = "SELECT court_num FROM court";
$result = mysqli_query($connection, $query1);

while ($row = mysqli_fetch_assoc($result)) {
   $arrCourt[] = $row['court_num'];
}

$query2 = "SELECT time FROM time";
$result = mysqli_query($connection, $query2);

while ($row = mysqli_fetch_assoc($result)) {
   $arrTime[] = $row['time'];
}
// ສິ້ນສຸດດຶງຂໍ້ມູນຈາກຖານມາເກັບໄວ້ໃນ ARRAY


?>
<div class="container" style="margin-bottom: 100px;">
    <h4 class="text-center">ເດີ່ນກິລາເຕະບານທິບພະຈັນ TPC</h4>
    <h6>ຕາຕະລາງການຈອງວັນທີ <?php echo $mydate ?></h6>
    <p>1: ໝາຍເຖິງເດີ່ນໃນຮົ່ມ</p>
    <p>2: ໝາຍເຖິງເດີ່ນກາງແຈ້ງ</p>
    

    <?php
    $strTable = '<div class="table-responsive"><table class="table table-borderless"><tr bgcolor="#E5E5DF">
<td>ສະໜາມ/ເວລາ</td>';
    foreach ($arrTime as $time) { //ສ້າງຫົວຕາຕະລາງ
        $strTable .= '<td>' . $time . '</td>';
    }
    $strTable .= '</tr>';
    //loop data to table
    foreach ($arrCourt as $courtNum) {
        $strTable .= '<tr><td bgcolor="#06c87488;">' . $courtNum . '</td>'; //Show stadium 1,2
        $sql = "SELECT * FROM booking WHERE court_num IN ('$courtNum')
        AND date_booking = '$mydate' ORDER BY court_num ASC ";

        $rs = mysqli_query($connection, $sql);
        $run = 0;
        $num = mysqli_num_rows($rs);
        $re = mysqli_fetch_array($rs);
        foreach ($arrTime as $times) {
            $sql_ = "SELECT COUNT(*) AS cc FROM booking WHERE time_booking IN ('$times') AND court_num IN ('$courtNum')
            AND date_booking = '$mydate' ORDER BY court_num ASC ";
            $rs_ = mysqli_query($connection, $sql_);
            while ($re_ = mysqli_fetch_array($rs_)) {
                if ($re_['cc'] > 0) { //if booking
                    $strTable .= '<td id="b" bgcolor="#FF0000">ຈອງແລ້ວ</td>';
                    $run++;
                } else { // if no booking
                    $strTable .= '<td bgcolor="#00c28a"><a id="b"  href="booking.php">ວ່າງ</a></td>';
                }
            }
        } //end foreach
        $strTable .= '</tr>';
    }
    echo $strTable . '</table></div>';

    ?>
</div>
<?php require('includes/footer.php'); ?>
<style>
    
    #b{
        color: #fff;
    }
    h4 {
        margin-top: 40px;
    }

