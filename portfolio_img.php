<<<<<<< HEAD
<?php include $_SERVER['DOCUMENT_ROOT']."/board/board/db.php";?>
<?php
    session_start(); 
    if(!isset($_SESSION['userid'])) {
        sleep(2);
        echo "<script>alert('로그인해주세요.');</script>";
        header('Location:login.php');
    } else {
        
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <link href="css/index.css" rel="stylesheet" type="text/css">
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- <link href="css/sb-admin-2.min.css" rel="stylesheet"> -->
    <link href="css/sb-admin-2.css" rel="stylesheet">
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <!-- <script src="js/jquery.bpopup-0.1.1.min.js"></script> -->
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    

</head>

<body id="page-top">



    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Main</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>추가</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">추가</h6>
                        <a class="collapse-item" href="buttons.html">Buttons</a>
                        <a class="collapse-item" href="cards.html">Cards</a>
                    </div>
                </div>
            </li>

           

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                IMG 관리
            </div>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="slide_img.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>slide_img</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="portfolio_img.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>portfolio_img</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <div>
                        <?php
                            $user_id = $_SESSION['userid'];
                            // $user_name = $_SESSION['user_name'];
                            // echo "<p><strong>$user_id</strong> 님 환영합니다.";
                            // echo "<a href=\"logout.php\">[로그아웃]</a></p>";
                        ?>
                    </div>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php
                                echo "<span class='mr-2 d-none d-lg-inline text-gray-600 large'><strong>관리자($user_id)</strong> 계정으로 로그인하셨습니다</span>";
                                ?>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logout.php" >
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
<!-- //--------------------------------------------------------------------------------------------------------- -->
<div class="card shadow mb-4">
            <!-- <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div> -->
    <div class= slide_body2>        
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="80%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>슬라이드 이미지</th>
                                <th>수정날짜</th>
                                <th>순서</th>
                                <th>수정하기</th>
                            </tr>
                        </thead>   
                        <tbody>
                            <?php
                                $index = 0;
                                $sql = mq("select * from board");
                                // $sql2 = mq("select * from board ORDER BY idx DESC LIMIT $start_num, $list");
                                while($board = $sql->fetch_array()){
                                    if($board["file"] == null){
                                        // $src2 = $board["idx"];
                                        // $title =$board["title"];
                                        // echo "<div class = 'slide_img'><a href='read.php?idx=$src2';><img src=/board/img/noimg.png></a></div>";

                                    } else {
                                        $src = $board["file"];
                                        $src2 = $board["content"];
                                        $src3 = $board["view"];
                                        $index++;
                                       
                                        echo "<tr><th>
                                                <img id = 'pf_img' src=/board/upload/$src>
                                                </th>"; 
                                        echo "<th id=slide_text>$src2</th>";
                                        echo "<th id=slide_text>$src3</th>";
                                        echo "<th id=slide_text>
                                                    <a href='#' class='btn btn-primary btn-icon-split btn-lg'>
                                                    <span class='icon text-white-50'>
                                                        <i class='fas fa-flag'></i>
                                                    </span>
                                                    <span id='popup_open_btn$index'> 이미지 수정하기 </span>
                                                    </a>
                                                </th></tr>";
                                        ?>
                                    <?php
                                    echo
                                       "<div id='my_modal$index'>
                                                <form action='pf_modify_ok.php?view=$index' method='post' enctype='multipart/form-data'>
                                                    <div class='modal-header'>
                                                        <h2>$index 번 이미지 바꾸기</h2>
                                                    </div>
                                                    <div class='modal-body'>
                                                        <div class = 'slide_img'><img src=/board/upload/$src></div>
                                                            <input type='file' name='b_file'/>
                                                    </div>
                                                    <div class='modal-footer'>
                                                        <div class='bt_se'>
                                                                <button type='submit'>수정하기</button>
                                                        </div>
                                                        <div>
                                                            <a class='modal_close_btn'>닫기</a>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>";
                                            ?>
                                           
                                        
                                        <script>
                                                function modal(id){
                                                    var zIndex = 9999;
                                                    var modal = $('#' + id);
                                                    var bg = $('<div>')
                                                        .css({
                                                            position: 'fixed',
                                                            zIndex: zIndex,
                                                            left: '0px',
                                                            top: '0px',
                                                            width: '100%',
                                                            height: '100%',
                                                            overflow: 'auto',
                                                            backgroundColor: 'rgba(0,3,50,0.4)'
                                                        })
                                                        .appendTo('body');
                                                    modal
                                                        .css({
                                                            position: 'fixed',
                                                            boxShadow: '0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)',
                                                            zIndex: zIndex + 1,
                                                            top: '50%',
                                                            left: '50%',
                                                            transform: 'translate(-50%, -50%)',
                                                            msTransform: 'translate(-50%, -50%)',
                                                            webkitTransform: 'translate(-50%, -50%)'
                                                        })
                                                        .show()
                                                        .find('.modal_close_btn')
                                                        .on('click', function() {
                                                            bg.remove();
                                                            modal.hide();
                                                        });
                                                }
                                            <?php     
                                            echo  "$('#popup_open_btn$index').on('click', function() {
                                                            modal('my_modal$index');
                                                        });
                                                    ";
                                            ?>
                                       </script>
                                <?php
                                    }
                                }
                                ?>
                            
                            
                        </tbody>
                    </table>
            </div>
        </div>

</div>


        
<!-- -------------------------------------------------------------------------------------------------------- -->
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
</body>

</html>
=======
<?php include $_SERVER['DOCUMENT_ROOT']."/board/db.php";?>
<?php
    session_start(); 
    if(!isset($_SESSION['userid'])) {
        sleep(2);
        echo "<script>alert('로그인해주세요.');</script>";
        header('Location:login.php');
    } else {
        
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <link href="css/index.css" rel="stylesheet" type="text/css">
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- <link href="css/sb-admin-2.min.css" rel="stylesheet"> -->
    <link href="css/sb-admin-2.css" rel="stylesheet">
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <!-- <script src="js/jquery.bpopup-0.1.1.min.js"></script> -->
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    

</head>

<body id="page-top">



    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Main</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>추가</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">추가</h6>
                        <a class="collapse-item" href="buttons.html">Buttons</a>
                        <a class="collapse-item" href="cards.html">Cards</a>
                    </div>
                </div>
            </li>

           

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                IMG 관리
            </div>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="slide_img.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>slide_img</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="portfolio_img.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>portfolio_img</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <div>
                        <?php
                            $user_id = $_SESSION['userid'];
                            // $user_name = $_SESSION['user_name'];
                            // echo "<p><strong>$user_id</strong> 님 환영합니다.";
                            // echo "<a href=\"logout.php\">[로그아웃]</a></p>";
                        ?>
                    </div>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php
                                echo "<span class='mr-2 d-none d-lg-inline text-gray-600 large'><strong>관리자($user_id)</strong> 계정으로 로그인하셨습니다</span>";
                                ?>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logout.php" >
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
<!-- //--------------------------------------------------------------------------------------------------------- -->
<div class="card shadow mb-4">
            <!-- <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div> -->
    <div class= slide_body2>        
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="80%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>슬라이드 이미지</th>
                                <th>수정날짜</th>
                                <th>순서</th>
                                <th>수정하기</th>
                            </tr>
                        </thead>   
                        <tbody>
                            <?php
                                $index = 0;
                                $sql = mq("select * from board");
                                // $sql2 = mq("select * from board ORDER BY idx DESC LIMIT $start_num, $list");
                                while($board = $sql->fetch_array()){
                                    if($board["file"] == null){
                                        // $src2 = $board["idx"];
                                        // $title =$board["title"];
                                        // echo "<div class = 'slide_img'><a href='read.php?idx=$src2';><img src=/board/img/noimg.png></a></div>";

                                    } else {
                                        $src = $board["file"];
                                        $src2 = $board["content"];
                                        $src3 = $board["view"];
                                        $index++;
                                       
                                        echo "<tr><th>
                                                <img id = 'pf_img' src=/board/upload/$src>
                                                </th>"; 
                                        echo "<th id=slide_text>$src2</th>";
                                        echo "<th id=slide_text>$src3</th>";
                                        echo "<th id=slide_text>
                                                    <a href='#' class='btn btn-primary btn-icon-split btn-lg'>
                                                    <span class='icon text-white-50'>
                                                        <i class='fas fa-flag'></i>
                                                    </span>
                                                    <span id='popup_open_btn$index'> 이미지 수정하기 </span>
                                                    </a>
                                                </th></tr>";
                                        ?>
                                    <?php
                                    echo
                                       "<div id='my_modal$index'>
                                                <form action='pf_modify_ok.php?view=$index' method='post' enctype='multipart/form-data'>
                                                    <div class='modal-header'>
                                                        <h2>$index 번 이미지 바꾸기</h2>
                                                    </div>
                                                    <div class='modal-body'>
                                                        <div class = 'slide_img'><img src=/board/upload/$src></div>
                                                            <input type='file' name='b_file'/>
                                                    </div>
                                                    <div class='modal-footer'>
                                                        <div class='bt_se'>
                                                                <button type='submit'>수정하기</button>
                                                        </div>
                                                        <div>
                                                            <a class='modal_close_btn'>닫기</a>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>";
                                            ?>
                                           <?php  
                                           $style = "
                                                    <style>
                                                            #my_modal$index{
                                                                display: none; 
                                                                width: 850px;
                                                                padding: 20px 60px;
                                                                background-color: #fefefe;
                                                                border: 1px solid #888;
                                                                border-radius: 3px;
                                                            }
                                                            #my_modal$index img{
                                                                width: 500px;
                                                            }
                                                            #my_modal$index .modal_close_btn{
                                                                top: 10px;
                                                                right: 10px;
                                                            }
                                                        </style> ";
                                            echo $style;
                                            ?>
                                        
                                        <script>
                                                function modal(id){
                                                    var zIndex = 9999;
                                                    var modal = $('#' + id);
                                                    var bg = $('<div>')
                                                        .css({
                                                            position: 'fixed',
                                                            zIndex: zIndex,
                                                            left: '0px',
                                                            top: '0px',
                                                            width: '100%',
                                                            height: '100%',
                                                            overflow: 'auto',
                                                            backgroundColor: 'rgba(0,3,50,0.4)'
                                                        })
                                                        .appendTo('body');
                                                    modal
                                                        .css({
                                                            position: 'fixed',
                                                            boxShadow: '0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)',
                                                            zIndex: zIndex + 1,
                                                            top: '50%',
                                                            left: '50%',
                                                            transform: 'translate(-50%, -50%)',
                                                            msTransform: 'translate(-50%, -50%)',
                                                            webkitTransform: 'translate(-50%, -50%)'
                                                        })
                                                        .show()
                                                        .find('.modal_close_btn')
                                                        .on('click', function() {
                                                            bg.remove();
                                                            modal.hide();
                                                        });
                                                }
                                            <?php     
                                            echo  "$('#popup_open_btn$index').on('click', function() {
                                                            modal('my_modal$index');
                                                        });
                                                    ";
                                            ?>
                                       </script>
                                <?php
                                    }
                                }
                                ?>
                            
                            
                        </tbody>
                    </table>
            </div>
        </div>

</div>


        
<!-- -------------------------------------------------------------------------------------------------------- -->
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
</body>

</html>
>>>>>>> cfb9286351bd1816c7e7cdc30410ce6061476535
