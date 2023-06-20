<?php
include('security.php');
include('includes/header.php');
 include('includes/navbar.php');
 include('database/dbconfig.php');

//session_start();
?>

<div class="container" style="margin-top:40px;">
    <h3 class="text-centet border-bottom border-primary">ປະຫວັດການຈອງເດີ່ນເຕະບານ TPC</h3>
    <div class="col-lg-12">
        <div class="row">
            <div class="col-md-12">
                <div class="callout callout-info">
                    <div class="col-md-12"> 
                        <?php
                        $id = "";
                        if (isset($_GET['id'])) {
                            $id = $_GET['id'];
                        }
                        
                        $sql = "SELECT * FROM booking WHERE id = $id ";
                        // $sql = "SELECT booking.id, customer.username FROM booking INNER JOIN customer ON booking.username = customer.username";
                        $query_run = mysqli_query($connection, $sql);
                        if (mysqli_num_rows($query_run) > 0) {
                            while ($row = mysqli_fetch_assoc($query_run)) {
                        ?>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <dl>
                                            <!-- <dt>Booking id:<?php echo $row['id'] ?></dt> -->
                                            <dt><b class="border-bottom border-primary">ລາຍການຈອງຂອງ :</b><?php echo $row['username'] ?></dt>
                                            <dt><b class="border-bottom border-primary">ເດີ່ນ :</b><?php echo $row['court_num'] ?>
                                                <?php $court = $row['court_num'];
                                                if ($court == 1) {
                                                    echo "<span class='badge badge-primary'>ເດີ່ນໃນຮົ່ມ</span>";
                                                } elseif ($court == 2) {
                                                    echo  "<span class='badge badge-success'>ເດີ່ນກາງແຈ້ງ</span>";
                                                }
                                                ?></dt>
                                            <dt><b class="border-bottom border-primary">ວັນທີຈອງ : <?php echo $row['date_booking'] ?></b></dt>
                                            <dt><b class="border-bottom border-primary">ເວລາຈອງ : 
                                            <?php $time = $row['time_id'];
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
                                                ?>
                                            </b></dt>
                                        </dl>
                                        <hr>
                                    </div>
                                </div>
                                <?php
                            }
                        } else {
                            echo "ຍັງບໍ່ມີລາຍການຈອງ";
                        }
            ?>
                    </div>
                
                </div>
            </div>
        </div>
        <div class="text-left">
            <button type="button"  class="btn btn-success"><a href="customer.php" style="color: #fff;">ກັບຄືນ</a></button>
        </div>
    </div>
</div>






<hr color="#25D366"><br><br>
<?php require('includes/footer.php'); ?>