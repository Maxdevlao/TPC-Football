<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
        </div>
        <div class="sidebar-brand-text mx-3">TPC FOOTBALL <i class="bi bi-life-preserver text-primary"></i>
        </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="index.php">
            <i class="bi bi-cash-stack"></i>
            <span>ໜ້າຫຼັກ</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        TPC
    </div>
    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="bi bi-table  text-info"></i>
            <span class="booking">ກວດສອບການຈອງ></span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="booking_today.php">
        <i class="bi bi-calendar2-event text-info"></i>
            <span>ລາຍການຈອງມື້ນີ້</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="total_booking.php">
        <i class="bi bi-calendar-week text-info"></i>
            <span>ລາຍການຈອງທັງໝົດ</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="dulation_booking.php">
        <i class="bi bi-binoculars text-info"></i>
            <span>ຄົ້ນຫາຊ່ວງເວລາການຈອງ</span></a>
    </li>
    <hr class="sidebar-divider">
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="bi bi-receipt text-info"></i>
            <span>ລາຍງານ</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <!-- <a class="collapse-item" href="order_booking.php">ພິມໃບບິນ</a> -->
                <a class="collapse-item" href="report_bk.php"><i class="bi bi-dribbble text-info"></i>ລາຍງານການຈອງເດີ່ນ</a>
                <!-- <a class="collapse-item" href="#"><i class="bi bi-graph-up-arrow text-info"></i> ລາຍຮັບຈາກການຈອງເດີ່ນ</a> -->
                <a class="collapse-item" href="income.php"><i class="bi bi-graph-up-arrow text-info"></i> ລາຍຮັບຈາກການຈອງເດີ່ນ</a>
            </div>
        </div>
    </li>
    

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Addons
    </div>

    <!-- Nav Item - Pages Collapse Menu -->


    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="index.php">
            <i class="bi bi-bar-chart-line-fill"></i>
            <span>Charts</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="tables.php" data-toggle="modal" data-target="#TableModal">
            <i class="bi bi-table"></i>
            <span>Tables</span></a>
    </li>
     <!-- Nav Item - logout -->
    <li  class="nav-item ">
    <a class="nav-link text-danger" href="logout.php" data-toggle="modal" data-target="#logoutModal"><i class="bi bi-door-open-fill text-danger"></i>ອອກຈາກລະບົບ</a>
    </li>

    <!-- Modal Table booking -->
    <div class="modal fade" id="TableModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">TPC FOOTBALL</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                <form action="tables.php" method="POST">
                        <label for="lname">* ຄົ້ນຫາເດີ່ນ ແລະ ເວລາວ່າງ:</label>
                        <div class="form-group">
                            <input type="date" class="form-control" name="ckDate" min="" max="2022-12-31">
                        </div>
                        <div class="text-right">
                            <button class="btn btn-outline-success btn-sm " type="submit" name="btncheck" id="btnCheck">ຄົ້ນຫາ</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger btn-sm" type="button" data-dismiss="modal">ຍົກເລີກ</button>
                 
                </div>
            </div>
        </div>
    </div>
    <!-- END Modal Table booking -->

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


</ul>
<!-- End of Sidebar -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="bi bi-capslock"></i>
</a>


<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ອອກຈາກລະບົບ</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">ຕ້ອງການອອກຈາກລະບົບບໍ່ ?</div>
            <div class="modal-footer">
                <button class="btn btn-danger" type="button" data-dismiss="modal">ຍົກເລີກ</button>

                <form action="logout.php" method="POST">
                    <button type="submit" name="logout_btn" class="btn btn-primary">ອອກຈາກລະບົບ</button>
                </form>

            </div>
        </div>
    </div>
</div>

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="bi bi-chevron-bar-left"></i>
            </button>

            <!-- Topbar Search -->
            <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                            <i class="bi bi-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">

                <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                <li class="nav-item dropdown no-arrow d-sm-none">
                    <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-search fa-fw"></i>
                    </a>
                    <!-- Dropdown - Messages -->
                    <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                        <form class="form-inline mr-auto w-100 navbar-search">
                            <div class="input-group">
                                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <!-- Nav Item - Alerts -->
                <li class="nav-item dropdown no-arrow mx-1">
                    <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bi bi-bell-fill text-success"></i>
                        <!-- Counter - Alerts -->
                        <?php
                        include('database/dbconfig.php');
                        $sql_get = mysqli_query($connection, "SELECT * FROM booking WHERE ntf=0");
                        $count = mysqli_num_rows($sql_get);
                        ?>
                        <span class="badge badge-danger badge-counter"><?php echo $count ?></span>
                    </a>
                    <!-- Dropdown - Alerts -->
                    <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                        <h6 class="dropdown-header">
                            ລາຍການຈອງ
                        </h6>
                        <?php
                        include('database/dbconfig.php');
                        $query = "SELECT * FROM booking WHERE ntf=0";
                        $query_run = mysqli_query($connection, $query);
                        ?>
                        <?php
                        if (mysqli_num_rows($query_run) > 0) {
                            while ($row = mysqli_fetch_assoc($query_run)) {
                        ?>
                                <a class="dropdown-item d-flex align-items-center" href="ntf_booking.php?id=<?php echo $row['id'] ?>">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-secondary">
                                            <i class="bi bi-calendar4-event text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">ເດີ່ນ: <?php echo $row['court_num'] ?> </div>
                                        <div class="small text-gray-500"><?php echo $row['date_booking'] ?> ເວລາ:<?php echo $row['time_booking'] ?></div>
                                        <span class="font-weight-bold"><?php echo $row['username'] ?></span>
                                    </div>
                                </a>
                        <?php
                            }
                        } else {
                            echo "ຍັງບໍ່ມີການຈອງ!";
                        }
                        ?>
                        <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                    </div>
                </li>

                <!-- Nav Item - Messages -->
                <li class="nav-item dropdown no-arrow mx-1">
                    <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bi bi-chat-dots-fill text-success"></i>
                        <!-- Counter - Messages -->
                        <?php
                        include('database/dbconfig.php');
                        $sql_get = mysqli_query($connection, "SELECT * FROM message WHERE status=0");
                        $count = mysqli_num_rows($sql_get);
                        ?>
                        <span class="badge badge-danger badge-counter"><?php echo $count ?></span>
                    </a>
                    <!-- Dropdown - Messages -->
                    <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                        <h6 class="dropdown-header">
                            ຂໍ້ຄວາມຈາກຜູ້ໃຊ້ງານ
                        </h6>
                        <?php
                        include('database/dbconfig.php');
                        $query = "SELECT * FROM message WHERE  status=0 ";
                        $query_run = mysqli_query($connection, $query);
                        ?>
                        <?php
                        if (mysqli_num_rows($query_run) > 0) {
                            while ($row = mysqli_fetch_assoc($query_run)) {
                        ?>
                                <a class="dropdown-item d-flex align-items-center" href="read_Msg.php?id=<?php echo $row['id'] ?>">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/customer.png">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate"><?php echo $row['message'] ?></div>
                                        <div class="small text-gray-500"><?php echo $row['name'] ?>:<?php echo $row['date_create'] ?></div>
                                    </div>
                                </a>
                        <?php
                            }
                        } else {
                            echo "ບໍ່ມີຂໍ້ຄວາມ!";
                        }
                        ?>
                        <a class="dropdown-item text-center small text-gray-500" href="#">Read More </a>
                    </div>
                </li>

                <div class="topbar-divider d-none d-sm-block"></div>

                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                            <?php echo $_SESSION['name']; ?>
                        </span>
                        <img class="img-profile rounded-circle" src="img/employee.png">

                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                            <i class="bi bi-door-open-fill  fa-sm fa-fw mr-2 text-danger"></i>
                            ອອກຈາກລະບົບ
                        </a>
                    </div>
                </li>

            </ul>

        </nav>
        <!-- End of Topbar -->