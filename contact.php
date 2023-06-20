<head>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<?php require('includes/navbar.php');
require('includes/banner.php');

?>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h4 class="text-info">ຕິດຕໍ່ພວກເຮົາ</h4>
            <p>ທ່ານສາມາດຕິດຕໍ່ຫາພວກເຮົາໄດ້ຕາມຊ່ອງທາງລຸ່ມນີ້:</p>
            <hr>
            <div class="row">
                <div class="col-md-4">
                    <p><i class="bi bi-telephone-fill text-info"></i> ໂທລະສັບ</p>
                    <p class="text-secondary"> 020 55144426 </p>
                </div>
                <div class="col-md-4">
                    <p><i class="bi bi-envelope-fill  text-info"></i> Email</p>
                    <p class="text-secondary"> tpc.sportscomplex@gmail.com </p>
                </div>
            </div>

            <hr>
            <div class="row">
                <div class="col-md-4">
                    <p><i class="bi bi-whatsapp text-info"></i> WhatSapp</p>
                    <p class="text-secondary"> 020 22579876</p>
                </div>
                <div class="col-md-4">
                    <p><i class="bi bi-facebook text-info"></i> Facebook</p>
                    <p class="text-secondary"> TPC Sports Complex </p>
                </div>
            </div>
            <hr>
            <p><i class="bi bi-geo-alt-fill text-info"></i> ທີ່ຢູ່</p>
            <p class="text-secondary"> ບ້ານ ອີ່ໄລໃຕ້ ເມືອງ ນາຊາຍທອງ ແຂວງ ນະຄອນຫຼວງວຽງຈັນ </p>
            <hr>
        </div>
        <div class="col-md-6">

            <h4 class="text-info">ສົ່ງຂໍ້ຄວາມຫາພວກເຮົາ</h4>
            <p>ກະລຸນາລະບຸລາຍລະອຽດໃນຂໍ້ຄວາມຂອງທ່ານ</p>
            <div>
                <form action="contact_db.php" method="POST">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" name="name" id="" placeholder="ຊື່ ແລະ ນາມສະກຸນ *" required>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" placeholder="Email *" name="email" class="form-control" required></input>
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea rows="8" cols="50" placeholder="ຂໍ້ຄວາມ *" name="msg" class="form-control" required></textarea>
                    </div>
                    <div class="text-left">
                        <button type="submit" name="btnsend" class="btn btn-outline-info">ສົ່ງ EMAIL</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<script>
      swal("ສົ່ງຂໍ້ຄວາມແລ້ວ", "ຂອບໃຈທີ່ສົ່ງຂໍ້ຄວາມຫາພວກເຮົາ!", "success");
</script>
<?php require('includes/footer.php'); ?>
<style>
    .container {
        margin-top: 40px;
        margin-bottom: 40px;
    }
</style>