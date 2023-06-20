<?php
include('security.php');
include('includes/header.php');
include('database/dbconfig.php');
date_default_timezone_set('Asia/Bangkok');
?>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3 body-main">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p><small>ສາທາລະນະລັດ ປະຊາທິປະໄຕ ປະຊາຊົນລາວ<br>
                                ສັນຕິພາບ ເອກະລາດ ປະຊາທິປະໄຕ ເອກະພາບ ວັດທະນາຖາວອນ</small></p>
                    </div>
                </div>
                <div class="row">
                    <?php
                    $id = "";
                    if (isset($_GET['id'])) {
                        $id = $_GET['id'];
                    }
                    $sql = "SELECT * FROM `booking` WHERE id=$id";
                    $result = mysqli_query($connection, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                            <div class="col-md-4">
                                <img class="img" alt="Invoce Template" src="img/logo.png" width="40px" />
                                <p><small>ເດີ່ນເຕະບານທິບພະຈັນ TPC <br>
                                        ບ້ານອີ່ໄລໃຕ້ ເມືອງນາຊາຍທອງ ນະຄອນຫຼວງວຽງຈັນ</small></p>
                            </div>
                            <div class="col-md-8 text-right"><br><br>
                                <p><small>ເລກທີ 0000<?php echo $row['id'] ?><br>
                                        ວັນທີ <?php echo date('d/m/Y'); ?></small></p>
                            </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h5>ໃບບິນເກັບເງິນ</h5>
                    </div>
                </div>
                <div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ເດີ່ນ</th>
                                <th>ເວລາ</th>
                                <th>ລາຄາເດີ່ນ</th>
                                <th>ຈຳນວນເງິນທີ່ໂອນມາ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="col-md-9"><?php $court = $row['court_num'];
                                                        if ($court == 1) {
                                                            echo "ເດີ່ນໃນຮົ່ມ";
                                                        } elseif ($court == 2) {
                                                            echo  "ເດີ່ນກາງແຈ້ງ";
                                                        }
                                                        ?></td>
                                <td class="col-md-9"> <?php echo $row['time_booking']; ?>
                                     <!--<?php $time = $row['time_id'];
                                                        if ($time == 1) {
                                                            echo "08.00-09.00";
                                                        } elseif ($time == 2) {
                                                            echo  "09.00-10.00";
                                                        } elseif ($time == 3) {
                                                            echo  "10.00-11.00";
                                                        } elseif ($time == 4) {
                                                            echo  "11.00-12.00";
                                                        } elseif ($time == 5) {
                                                            echo  "12.00-13.00";
                                                        } elseif ($time == 6) {
                                                            echo  "13.00-14.00";
                                                        } elseif ($time == 7) {
                                                            echo  "14:00-15:00";
                                                        } elseif ($time == 8) {
                                                            echo  "15:00-16:00";
                                                        } elseif ($time == 9) {
                                                            echo  "16:00-17:00";
                                                        } elseif ($time == 10) {
                                                            echo  "17:00-18:00";
                                                        } elseif ($time == 11) {
                                                            echo  "18:00-19:00";
                                                        } elseif ($time == 12) {
                                                            echo  "19:00-20:00";
                                                        } elseif ($time == 13) {
                                                            echo  "20:00-21:00";
                                                        } elseif ($time == 14) {
                                                            echo  "21:00-22:00";
                                                        }
                                                        ?>-->
                                                        </td> 
                                <td class="col-md-3"><?php echo $row['price_court']; ?>ກີບ</td>
                                <td class="col-md-3"><?php echo $row['price']; ?>ກີບ</td>
                            </tr>
                           
                            <tr style="color: #F81D2D;">
                                <td>
                                
                                </td>
                                <td class="col-md-4">
                                    <p><strong>ຈຳນວນເງິນທີ່ຕ້ອງຈ່າຍ:</strong></p>
                                </td>
                                <td class="text-left">
                                    <p><strong>
                                        <?php $sum = $row['price_court'] - $row['price'];
                                       echo $sum;?>.00ກີບ
                                     </strong>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td align="center"><small></small></td>
                                <td align="center"><small>ຂໍຂອບໃຈ</small></td>
                            </tr>
                            <tr>
                                <td align="left"><small>ຜູ້ຈ່າຍເງິນ</small></td>
                                <td></td>
                                <td></td>
                                <td align="right"><small>ຜູ້ຮັບເງິນ</small></td>
                            </tr>
                        </tbody>
                    
                <?php
                        }
                    } else {
                        echo "ຍັງບໍ່ມີລາຍການຈອງ!";
                    }
                ?>
                    </table>
                </div>


                <div class="col-md-12 text-right">
                    <a href="booking_today.php" id="printbtn"><i class="bi bi-arrow-bar-left"></i>&nbsp;&nbsp; </a>
                        <button class="btn btn-primary" id="printbtn" onclick="window.print()"><i class="bi bi-printer"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
<style type="text/css">
@media print {
    #printbtn {
        display :  none;
    }
}
</style>