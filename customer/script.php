
    <!--Sweet alert button-->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- <script>
       
Swal.fire(
  'The Internet?',
  'That thing is still around?',
  'question'
)
    </script> -->
    <?php
        if (isset($_SESSION['success']) && $_SESSION['success']!="")
     {
        ?>
            <script >
            swal({
             title: "<?php echo $_SESSION['success'];  ?>",
              //text: "You clicked the button!",
             icon: "<?php echo $_SESSION['sucess_code'];  ?>",
             button: "ຕົກລົງ",
            });
          </script>
    <?php
         unset($_SESSION['status']);
    }

    ?>

