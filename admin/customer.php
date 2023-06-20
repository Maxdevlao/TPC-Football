<?php
include('security.php');
include('includes/header.php');
 include('includes/navbar.php');
 ?>


<div class="container-fluid">

  <!--Data Table Example-->
<div class="card shadow mb-4">
  <div class="card-header py3 border-success">
    <h6 class="m-0 font-weight-bold text-primary">ຂໍ້ມູນລູກຄ້າ
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">--
    </button>
      <div class="text-right">
        <form method="post" action="export/export.php">
        <button type="submit" name="export" class="btn btn-success">
        <i class="bi bi-arrow-down-circle"></i></button>
        </form>
      </div>
    </h6>
  </div>
<div class="card-body">
  <div class="table-responsive">
     <?php
        include ('database/dbconfig.php');
                $query = "SELECT * FROM customer";
                $query_run = mysqli_query($connection, $query);
         ?>
    <table class="table " id="dataTable" width="100%" cellspacing="0">
      <thead>
    <tr>
       <th> # </th>
       <th> ຊື່ ແລະ ນາມສະກຸນ </th>
       <th> ເບີໂທ </th>
       <th> ທີ່ຢູ່ </th>
       <th> ຊື່ຜູ້ໃຊ້ </th>
       <th>ແກ້ໄຂ</th>
       <th>ລົບ</th>
    </tr>
  </thead>
  <tbody>
     <?php
                        if(mysqli_num_rows($query_run) > 0)        
                        {
                            while($row = mysqli_fetch_assoc($query_run))
                            {
                        ?>
                            <tr>
                                <td><?php  echo $row['id']; ?></td>
                                <td><?php  echo $row['name']; ?></td>
                                <td><?php  echo $row['tel']; ?></td>
                                <td><?php  echo $row['address']; ?></td>
                                <td><?php  echo $row['username']; ?></td>
                               
                                <!-- <td>
                                        <a href="record_booking.php?id=<?php echo $row['id'] ?>" class="btn btn-success btn-sm"><i class="bi bi-search-heart-fill" ></i></a>
                                </td> -->
                                <td>
                                    <form action="customer_edit.php" method="post">
                                        <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                                        <button type="submit" name="edit_btn" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i></i></button>
                                    </form>
                                </td>
                                <td>
                                    <form action="customer_db.php" method="post">
                                        <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                                        <button type="submit" name="delete_btn" class="btn btn-danger btn-sm " onclick="return confirm('ຍຶນຍັນການລົບ')"><i class="bi bi-person-x"></i></button>
                                    </form>
                                </td>
                            </tr>
                        <?php
                            } 
                        }
                        else {
                            echo "No Record Found";
                        }
                        ?>
  </tbody>
    </table>
  </div>
  </div>
</div>


<!--container-fluid-->
<?php include ('includes/script.php');
include ('includes/footer.php');
?>

</div>