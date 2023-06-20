<?php require('includes/navbar.php');
      require('includes/banner.php'); ?>

<div class="container col-md-6">
    <h4 class="text-center">ແບບຟອມລົງທະບຽນ <img class="" src="images/football.png" width="30px"></h4>
    <img class="rounded mx-auto d-block" src="images/logo.png" height="100" width="auto"><br>
    <form action="register_db.php" method="POST">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="">ຊື່ຜູ້ໃຊ້ &nbsp;<i class="bi bi-file-person-fill text-primary" style="font-size: 1.3rem;"></i></label>
                <input type="text" class="form-control" name="username" placeholder="username" pattern="[A-Za-z][0-9]10}" title="ໃໍຊ້ພາສາອັງກຶດ ແລະ ໂຕເລກເທົ່ານັ້ນ" required>
            </div>
            <div class="form-group col-md-6">
                <label for="">ຊື່ ແລະ ນາມສະກຸນ &nbsp;<i class="bi bi-person-lines-fill text-primary" style="font-size: 1.3rem;"></i></label>
                <input type="text" class="form-control" id="" name="registername" placeholder="ຊື່ ແລະ ນາມສະກຸນ" required>
            </div>
          
        </div>
        <div class="form-group">
                <label for="">ເບີໂທລະສັບ &nbsp;<i class="bi bi-telephone-fill text-primary" style="font-size: 1.3rem;"></i> </label><br>
                <input type="tel" name="tel" pattern="[0-9]{11}" class="form-control" placeholder="020 xx xxx xxx" required>
            </div>
        <div class="form-group">
            <label for="">ທີ່ຢູ່ &nbsp;<i class="bi bi-geo-alt-fill " style="font-size: 1.3rem; color: red;"></i></label>
            <textarea type="text" class="form-control" id="" name="address" placeholder="ບ້ານ" required></textarea>
        </div>
        <div class="form-group">
            <label for="">ລະຫັດຜ່ານ &nbsp;<i class="bi bi-key-fill text-success" style="font-size: 1.3rem;"></i></label>
            <input type="password" class="form-control" pattern="^[a-zA-Z0-9]+$" name="password" title="ໃໍຊ້ພາສາອັງກຶດ ແລະ ໂຕເລກເທົ່ານັ້ນ" required>
        </div>
        <div class="form-group">
            <label for="">ຢືນຢັນລະຫັດຜ່ານ &nbsp;<i class="bi bi-key-fill text-success" style="font-size: 1.3rem;"></i></label>
            <input type="password" class="form-control" id="" name="confirmpassword" placeholder="" required>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary " name="registerbtn">ລົງທະບຽນ</button>
        </div>
    </form>
 
</div>
<?php include('includes/footer.php');
include('script.php');?>
<style>
    h4{
        margin-top: 40px;

    }
</style>