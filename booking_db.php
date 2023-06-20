<mate charset ="utf-8" />
<?php include ('script.php'); //ໃຊ້ເພື່ອການແຈ້ງເຕືອນ
 include ('db.php');

// //สร้างตัวแปร
// echo "<pre>";
// 	print_r($_POST);
// echo "</pre>";
// exit();

    $name = $_POST['name'];
    $call = $_POST['tel'];
    $address = $_POST['address'];
    $court = $_POST['court'];
    $date = $_POST['date'];
    $time = $_POST['time'];

//ເຊັກຂໍ້ມູນວ່າມີຫຼືບໍ່ 
$check = "SELECT tel FROM customer WHERE tel = '$call' ";
$result1 = mysqli_query($connection, $check) or die(mysqli_error($connection));
$num=mysqli_num_rows($result1);

if($num > 0)
{
    echo "<script>";
			echo "alert(' มีผู้ใช้ ເບີໂທລະສັບ นี้แล้ว กรุณาสมัครใหม่อีกครั้ง !');";
			 echo "window.location='booking.php';";
          	 echo "</script>";
}else{
    //Add data table1
    $sql1 = " INSERT INTO customer  (name,tel,address)
    VALUES ('$name', '$call','$address')";
$result = mysqli_query($connection, $sql1) or die ("Error in query: $sql1 " . mysqli_error($connection));

}


//add data  teble2
$queryy = "SELECT time_booking FROM court_booking WHERE time_booking='$time' AND court_num='$court' AND date_booking='$date' ";
    $result = mysqli_query($connection, $queryy);
    if(mysqli_num_rows($result) > 0)
    {
        echo ("<script LANGUAGE='JavaScript'>
          window.alert('me khn ຈອງແລ້ວ');
             window.location='booking.php';
             </script>");
    }
    else
    {
            $query = "INSERT INTO court_booking (court_num,date_booking,time_booking)
             VALUES  ('$court','$date','$time')";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                echo ("<script LANGUAGE='JavaScript'>
                           window.alert('success');
                            window.location='s.php';
                           </script>");
            }else{
                echo ("<script LANGUAGE='JavaScript'>
                    window.alert('Error');
                    window.location='booking.php';
                             </script>");
            }
        
    }
?>
 