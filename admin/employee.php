<?php
include('security.php');
include('includes/header.php');
 include('includes/navbar.php');
 ?>

<!--Modal Add -->
<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ເພີ່ມພະນັກງານ</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="admin_db.php" method="POST">

        <div class="modal-body">
            <div class="form-group">
                <label> ຊື່ ແລະ ນາມສະກຸນ </label>
                <input type="text" name="fullname" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label> ເພດ</label>
                <select class="form-control" name="gender" id="">
                  <option value="ຊາຍ">ຊາຍ</option>
                  <option value="ຍິງ">ຍິງ</option>
                </select>
            </div>
            <div class="form-group">
                <label> ເບີໂທລະສັບ </label>
                <input type="tel" name="tel" class="form-control"  placeholder="020 xxx xxx xx">
            </div>
            <div class="form-group">
                <label> ທີ່ຢູ່ </label>
                <input type="text" name="address" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label>ອີເມວ</label>
                <input type="email" name="email" class="form-control checking_email" placeholder="example@gmail.com">
                <small class="error_email" style="color: red;"></small>
            </div>
            <div class="form-group">
                <label>ລະຫັດຜ່ານ</label>
                <input type="password" name="password" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label> ຢືນຢັນລະຫັດຜ່ານ</label>
                <input type="password" name="confirmpassword" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label> ສະຖານະ</label>
                <select  class="custom-select" name="status" id="">
                  <option value="1">ADMIN</option>
                  <option value="2">EMPLOYEE</option>
                </select>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-outline-secondary  btn-sm" data-dismiss="modal">ປິດ</button>
            <button type="submit" name="adminbtn" class="btn btn-outline-success  btn-sm">ບັນທຶກ</button>
        </div>
      </form>

    </div>
  </div>
</div>

<div class="container-fluid">

  <!--Data Table Example-->
<div class="card shadow mb-4">
  <div class="card-header py3 border-success">
    <h6 class="m-0 font-weight-bold text-info">ຂໍ້ມູນພະນັກງານ
    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#addadminprofile">
    ເພີ່ມຂໍ້ມູນພະນັກງານ +
    </button>
      <div class="text-right">
        <form method="post" action="export.php">
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
                $query = "SELECT * FROM employee WHERE status=2";
                $query_run = mysqli_query($connection, $query);
         ?>
    <table class="table " id="dataTable" width="100%" cellspacing="0">
      <thead>
    <tr>
       <th> ID </th>
       <th> ຊື່ ແລະ ນາມສະກຸນ </th>
       <th> ເພດ </th>
       <th> ເບີໂທ </th>
       <th> ທີ່ຢູ່ </th>
       <th> ອີເມວ</th>
       <th> ສະຖານະ </th>
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
                                <td><?php  echo $row['fullname']; ?></td>
                                <td><?php  echo $row['gender']; ?></td>
                                <td><?php  echo $row['tel']; ?></td>
                                <td><?php  echo $row['address']; ?></td>
                                <td><?php  echo $row['email']; ?></td>
                                <td>
                                <?php $status = $row['status'];
                                                if ($status == 1) {
                                                    echo "<span class='badge badge-primary'>ຜູ້ຈັດການ</span>";
                                                } elseif ($status == 2) {
                                                    echo  "<span class='badge badge-success'>ພະນັກງານ</span>";
                                                }
                                                ?>
                                </td>
                                <td>
                                    <form action="admin_edit.php" method="post">
                                        <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                                        <button type="submit" name="edit_btn" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i></i></button>
                                    </form>
                                </td>
                                <td>
                                    <form action="admin_db.php" method="post">
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