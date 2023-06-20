<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
include('database/dbconfig.php');

if (isset($_GET['id'])) {
    $main_id = $_GET['id'];
    $sql_update = mysqli_query($connection, "UPDATE booking SET ntf=1 WHERE id='$main_id' ");
}
?>

<div class="container-fluid">
    <?php
    $sql = "SELECT * FROM booking WHERE id='$main_id'";
    $query = mysqli_query($connection, $sql);
    $result = mysqli_fetch_array($query);
    ?>
    <a class="dropdown-item d-flex align-items-center">
        <div class="dropdown-list-image mr-3">
            <img class="rounded-circle" width="60px" src="img/customer.png">
            <div class="status-indicator bg-success"></div>
        </div>
        <div class="font-weight-bold">
            <div class="text-truncate">ຊື່ຜູ້ຈອງ : <?php echo $result['username'] ?></div>
            <div class="small text-gray-500"><?php echo $result['date_booking'] ?> ເວລາ: &nbsp;<?php echo $result['time_booking'] ?></div>
        </div>
    </a>
    <div class="text-center">
    <button class="btn btn-info"><a style="color: #FFF;" href="booking_today.php">ກວດສອບການຊຳລະເງິນ</a></button>
    </div>
    <hr>

</div>
<!--container-fluid-->
<?php include('includes/script.php');
include('includes/footer.php');
?>
<style>
    .container-fluid {
        margin-bottom: 500px;
    }
</style>