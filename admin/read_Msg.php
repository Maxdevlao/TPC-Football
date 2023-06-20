<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
include('database/dbconfig.php');

if (isset($_GET['id'])) {
    $main_id = $_GET['id'];
    $sql_update = mysqli_query($connection, "UPDATE message SET status=1 WHERE id='$main_id' ");
}
?>

<div class="container-fluid">
    <?php
    $sql = "SELECT * FROM message WHERE id='$main_id'";
    $query = mysqli_query($connection, $sql);
    $result = mysqli_fetch_array($query);
    ?>
    <a class="dropdown-item d-flex align-items-center">
        <div class="dropdown-list-image mr-3">
            <img class="rounded-circle" src="img/undraw_profile.svg">
            <div class="status-indicator bg-success"></div>
        </div>
        <div class="font-weight-bold">
            <div class="text-truncate"><?php echo $result['message'] ?></div>
            <div class="small text-gray-500"><?php echo $result['name'] ?>.<?php echo $result['date_create'] ?></div>
        </div>
    </a>
    <div class="text-center">
        <button type="submit" class="btn btn-primary">ຕອບກັບ</button>

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