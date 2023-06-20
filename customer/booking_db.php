<mate charset ="utf-8" />
<?php 
 include ('db.php');
// echo "<pre>";
// 	print_r($_POST);
// echo "</pre>";
// exit();
if(isset($_POST['btnBooking'])){
    //$id = $_POST['id'];
    $username = $_POST['name'];
    $court = $_POST['court'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $price_c = $_POST['price_court'];
    $price_pay = $_POST['price'];
    $image =$_FILES['image']['name'];

//check data from teble
$queryy = "SELECT time_booking FROM booking WHERE time_booking='$time' AND court_num='$court' AND date_booking='$date' ";
    $result = mysqli_query($connection, $queryy);
    if(mysqli_num_rows($result) > 0)
    { 
          echo ("<script LANGUAGE='JavaScript'>
          window.alert('ມີຄົນຈອງແລ້ວ');
             window.location='booking.php';
             </script>");
    }
    else
    {
            //book data to teble
            $query = "INSERT INTO booking (username,court_num ,date_booking,time_booking,price_court,price,slip_payment)
             VALUES  ('$username','$court','$date','$time','$price_c','$price_pay','$image')";
            $query_run = mysqli_query($connection, $query);                            
            // if($query_run)
            // {       
            //     echo ("<script LANGUAGE='JavaScript'>
            //                window.alert('success');
            //                 window.location='index.php';
            //                </script>");
            // }else{
            //     echo ("<script LANGUAGE='JavaScript'>
            //         window.alert('Error');
            //         window.location='booking.php';
            //                  </script>");
            // }
            if($query_run){
                move_uploaded_file($_FILES["image"]["tmp_name"],"images/upload-qr/".$_FILES["image"]["name"]);
                echo ("<script LANGUAGE='JavaScript'>
                        window.alert('ການຈອງເດີ່ນສຳເລັດແລ້ວກະລຸນາລໍຖ້າ ADMIN ກວດສອບ!');
                        window.location='history.php';
                        </script>");

                // echo("<script LANGUAGE='JavaScript'>
                // echo "Swal.fire({
                //     position: 'top-end',
                //     icon: 'success',
                //     title: 'Your work has been saved',
                //     showConfirmButton: false,
                //     timer: 1500
                //   }).then((result) => {
                //     if (result.isDismissed) {
                //      window.location.href='history.php'
                //       )";
                // </script>");
                
                // $_SESSION['success'] = "ການຈອງເດີ່ນສຳເລັດແລ້ວ";
                // $_SESSION['status_code'] = "success";
                // header('Location: history.php'); 
            }
            else
            {
                echo ("<script LANGUAGE='JavaScript'>
                window.alert('ການຈອງເດີ່ນບໍ່ສຳເລັດ');
                window.location='booking.php';
                </script>");
                // $_SESSION['success'] = "ຈອງເດີ່ນບໍ່ສຳເລັດ";
                // $_SESSION['`sucess_code`'] = "error";
                // header('Location: booking.php');
               
            }
    }
        
}
?>
 