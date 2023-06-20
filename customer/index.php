<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>TPC FOOTBALL</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="font/main.css">
</head>
<?php 
 session_start();
 require('includes/navbar.php'); 
 require('includes/banner.php'); 

 ?>

<hr color="">

<div class="container">
	<div class="text-center">
		<h2 id="type" style="text-align:center;color:#25D366;text-shadow: 1px 1px 2px yellow, 0 0 25px blue, 0 0 5px #25D366;">ຍິນດີຕ້ອນຮັບສູ່ເດີ່ນກິລາເຕະບານ TPC</h2>
	</div>
	<div class="row">
	<div class="col-md-8">
				<div class="card" style="width: 28rem;">
					<div class="shadow p-3 bg-white rounded">
						<img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTzvgwk_UpPPLWwWci_Ex1YfL2SNSqQq-ghsRXQkZMSRFOd9Zxf103NaKcYPcdEwsa87vA&usqp=CAU" alt="Card image cap" height="200px">
						<div class="card-body">
							<p class="card-text">ເດີ່ນໃນຮົ່ມ</p>
							<li class="card-text">ເວລາ 08:00 – 18:00 ລາຄາ 320.000 ກີບ/ຊົ່ວໂມງ/ນ້ຳດື່ມ 1 ແພັກ </li>
							<li class="card-text">ເວລາ 18:00 – 22:00 ລາຄາ 400.000 ກີບ/ຊົ່ວໂມງ/ນ້ຳດື່ມ 1 ແພັກ </li>
						</div>
						<div class="card-footer text-muted">
							<a href="booking.php" class="btn btn-info">ຈອງເດີ່ນ</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card" style="width: 28rem;">
					<div class="shadow p-3 bg-white rounded">
						<img class="card-img-top" src="images/court2.jpg" alt="Card image cap" height="200px">
						<div class="card-body">
							<p class="card-text">ເດີ່ນກາງແຈ້ງ</p>
							<li class="card-text">ເວລາ 08:00 – 18:00 ລາຄາ 280.000 ກີບ/ຊົ່ວໂມງ/ນ້ຳດື່ມ 1 ແພັກ </li>
							<li class="card-text">ເວລາ 18:00 – 22:00 ລາຄາ 300.000 ກີບ/ຊົ່ວໂມງ/ນ້ຳດື່ມ 1 ແພັກ </li>
						</div>
						<div class="card-footer text-muted ">
							<a href="booking.php" class="btn btn-info">ຈອງເດີ່ນ</a>
						</div>
					</div>
				</div>
			</div>
	</div>

	<div class="section white center">
		<h4 class="header text-center  font-weight-light " style="padding:20px; padding-bottom: 30px;"><u class="text-info">ເດີ່ນກິລາເຕະບານ TPC</u>
			<img src="images/logo.png" width="40px" />
		</h4>
		<div class="shadow p-3 mb-5 bg-white rounded">
			<div class="row container center">
				<div class="col center l8 s12">
					<h6>ສູນອອກກຳລັງກາຍທິບພະຈັນ TPC ຕັ້ງຢູ່ບ້ານອີ່ໄລໃຕ້ ເມືອງນາຊາຍທອງ ນະຄອນຫຼວງວຽງຈັນ ເປີດບໍລິການວັນຈັນ - ວັນອາທິດ ຕັ້ງແຕ່ 08:00 – 22:00.
						ສູນອອກກຳລັງກາຍ TPC ເປັນສູນອອກກຳລັງກາຍຄົບວົງຈອນທີ່ມີທັງເດີ່ນໃນຮົ່ມ ແລະ ກາງແຈ້ງເຊັ່ນ: ສະລອຍນ້ຳ, ເດີ່ນຕີດອກປີກໄກ່, ສູນອອກກຳລັງກາຍ, ເດີ່ນຕີບານ, ໂຮງຮຽນອະນຸບານ-ປະຖົມ, ຮ້ານອາຫານ ແລະ ສະຖານທີ່ຈັດງານ
						ສະໜາມກິລາເຕະບານກໍ່ເປັນສະຖານທີ່ໜຶ່ງທີ່ມີຄົນມາໃຊ້ບໍລິການຢ່າງຫຼວງຫຼາຍໃນແຕ່ລະມື້.</h6>
					<p> ເດີ່ນເຕະບານຈະມີ 2 ເດີ່ນຄື: ເດີ່ນໃນຮົ່ມຂະໜາດ 80x40 ແລະ ເດີ່ນກາງແຈ້ງຂະໜາດ 60x40 ສ່ວນລາຍລະອຽດ ແລະ ຄ່າອັດຕາບໍລິການມີດັ່ງນີ້:</p>
					<div class="col">
						<ul>
							<li> ເດີ່ນກາງແຈ້ງຕອນສວາຍ 08:00 – 18:00 ລາຄາ 280.000 ກີບ/ຊົ່ວໂມງ/ນ້ຳດື່ມ 1 ແພັກ</li>
							<li> ເດີ່ນໃນກາງແຈ້ງຕອນຄ່ຳ 18:00 – 22:00 ລາຄາ 300.000 ກີບ/ຊົ່ວໂມງ/ນ້ຳດື່ມ 1 ແພັກ</li>
							<li> ເດີ່ນໃນຮົ່ມຕອນສວາຍ 08:00 – 18:00 ລາຄາ 320.000 ກີບ/ຊົ່ວໂມງ/ນ້ຳດື່ມ 1 ແພັກ</li>
							<li> ເດີ່ນໃນຮົ່ມຕອນຄ່ຳ 18:00 – 22:00 ລາຄາ 400.000 ກີບ/ຊົ່ວໂມງ/ນ້ຳດື່ມ 1 ແພັກ</li>
						</ul>
						<p class="text-center">ຂໍຂອບໃຈ</p>
					</div>
				</div>
				<div class="col text-right text-primary">
					<p class="text-center"><u>ແຜນທີ່ເດີ່ນເຕະບານ</u></p>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3791.631000376157!2d102.50072511419837!3d18.134823685592252!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x312447e531fccd51%3A0x3e0e1a5fbc7c9f0!2z4LuA4LqU4Lq14LuI4LqZ4LuA4LqV4Lqw4Lqa4Lqy4LqZVFBD!5e0!3m2!1sth!2sla!4v1644464313100!5m2!1sth!2sla" width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				</div>
			</div>
		</div>
	</div>

	<div class="section white center">
		<h4 class="header text-center font-weight-light " style="padding:20px; padding-bottom: 30px;"><u class="text-info">ກົດລະບຽບຂອງເດີ່ນກິລາເຕະບານ TPC </u></h4>
		<div class="row">
			<div class="col-sm-12">
				<div class="shadow p-3 mb-5 bg-white rounded">
					<div class="card-body">
						<h5 class="text-center">ເດີ່ນເຕະບານ TPC <img src="images/football.png" width="30px"></h5>
						<p class="card-text">1. ແຕ່ລະທີມທີ່ຈະໃຊ້ບໍລິການເດີ່ນເຕະບານ ຕ້ອງໄດ້ຕິດຕໍ່ຈອງເດີ່ນກ່ອນລ່ວງໜ້າ ເພາະທາງສູນກິລາຂອງ
							ພວກເຮົາຈະຕ້ອງຈັດການຕາຕະລາງໃຫ້ຄັກແດ່.
						</p>
						<p class="card-text">2. ການຍົກເລີກການຈອງເດີ່ນແມ່ນສາມາດເຮັດໄດ້ ແຕ່ຕ້ອງຕິດຕໍ່ຍົກເລີກກ່ອນທີ່ຈະຮອດມື້ທີ່ໄດ້ນັດໝາຍນັ້ນຢ່າງໜ້ອຍ2ວັນ
						</p>
						<p class="card-text">3. ຖ້າຫາກທີມໃດຈອງເດີ່ນແລ້ວແຕ່ບໍ່ມາຕາມນັດ ເຖິງວ່າຈະບໍ່ໄດ້ລົງເຕະກໍ່ຕາມ ຈະຕ້ອງໄດ້ຮັບຜິດຊອບຈ່າຍຄ່າເດີ່ນ 50%
						</p>
						<p class="card-text">4. ຖ້າຫາກແຕ່ລະທີມມາຊ້າ ກາຍເວລາທີ່ນັດໄວ້ ກຳມະການຈະຕ້ອງໄດ້ຄວບຄຸມເວລາ ໂດຍອີງຕາມເວລາທີ່ຍັງເຫຼືອຕົວຈິງ
						</p>
						<p class="card-text">5. ກຳນົດເວລາເລີ່ມຕົ້ນວອມອັບ 5 ນາທີ,ແຂ່ງຂັນຕົວຈິງຕັ້ງລະ 25 ນາທີ, ພັກເຄິ່ງ 5 ນາທີ ລວມເວລາທັງໝົກ 60 ນາທີ
							(ເພື່ອຄວບຄຸມເວລາໃຫ້ແກ່ຄູ່ຕໍ່ໆໄປ)
						</p>
						<p class="card-text">6. ນັກກິລາທຸກໆຄົນຕ້ອງຫຼິ້ນພາຍໃຕ້ກະຕິກາ ແລະ ຢູ່ພາຍໃນການຄວບຄຸມຂອງກຳມະການຢ່າງເຂັັ້ມງວດ. ກໍລະນີທີ່ນັກກິລາຫາກຫຼິ້ນ
							ເກີນກະຕິກາ ຫຼື ເຮັດຟາວ ອາດຈະເຈດຕະນາ ຫຼື ບໍ່ເຈດຕະນາ ກຳມະການມີສິດຕັດສິນ ແລະ ອາດຈະໃຫ້ບັດເຫຼືອງ-ບັດແດງ ຕາມແຕ່ລະກໍລະນີໜັກເບົາ
						</p>
						<p class="card-text">7. ກໍລະນີນັກກິລາຄົນໃດຫາກຖືກໃຫ້ບັດເຫຼືອງ-ແດງ ຈະຕ້ອງໄດ້ຈ່າຍເງິນຄ່າບັດ(ປັບໃໝ) ໃຫ້ແກ່ທາງສູນກິລາ ບັກເຫຼືອງ = 10.000 ກີບ
							ບັດແດງ 50.000 ກີບ
						</p>
						<p class="card-text">8. ນັກກິລາທຸກໆຄົນ ຕ້ອງຮັບປະກັນຄວາມປອດໄພໃຫ້ແກ່ຕົນເອງ ໃນກໍລະນີມີການປະທະຈົນບາດເຈັບທາງສູນຈະບໍ່ໄດ້ຮັບຜິດຊອບຕໍ່ເຫດ
							ການດັັ່ງກ່າວ ແຕ່ຈະຊ່ວຍປະຖົມພະຍາບານໃຫ້ເບື້ອງຕົ້ນຕາມຄວາມສາມາດ
						</p>
						<p class="card-text">9. ຖ້າຫາກນັກກິລາຄົນໃດມີພຶດຕິກຳບໍ່ດີ ຫຼື ກໍ່ຄວາມວຸ້ນວາຍຢູ່ພາຍໃນສູນກິລາແຫ່ງນີ້ຜູ້ກ່ຽວຈະຖືກກ່າວເຕືອນ ຫຼື ຖືກລົງໂທດໂດຍຈະ
							ງົດບໍ່ໃຫ້ຜູ້ກ່ຽວເຂົ້າມາໃນສູນກິລາອີກ
						</p>
						<p class="card-text">10. ກໍລະນີມີການອາລະວາດຕີກັນ ຢູ່ພາຍໃນສູນກິລາ ຈະໄດ້ຮັບໂທດປັບໄໝ ຝ່າຍລະ 10.000.000 ກີບ ແລະ ຖືກດຳເນີນຄະດີ
							ຕາມລະບຽບກົດໝາຍຕໍ່ໄປ
						</p>
						<p class="text-center">(ຂໍຂອບໃຈ)
						</p>
					</div>

				</div>
			</div>

		</div>
	</div>
</div>
<?php require('includes/footer.php'); ?>
<style>
	.container {
		margin-bottom: 40px;
		margin-top: 40px;
	}
</style>
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>
<script>
	var typed = new Typed('#type', {
		// Waits 1000ms after typing "First"
		strings: ['ຍິນດີຕ້ອນຮັບສູ່ເດີ່ນກິລາເຕະບານ TPC'],
		smartBackspace: true,
		loop: true,
		typeSpeed: 100,
		backSpeed: 100,
		fadeOut: true,
	});
</script>