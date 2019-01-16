<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ADMIN-Từ Phi Hướng</title>

    
    <link href="../../css/bootstrap.min.css" rel="stylesheet">

   
    <link href="../../css/sb-admin.css" rel="stylesheet">

   
    <link href="../../css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="../../css/sb-admin.css">

    

</head>
    
<body>
    <?php session_start(); ?>
    <div id="wrapper">

       
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
          
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <?php if(empty($_SESSION['username'])){
                    ?>
                        <a class="navbar-brand" href="../../../frontend/home.php">Home</a>
                        <a class="navbar-brand" href="../../frontend/login.php">Đăng Nhập Admin</a>
                    <?php 

                        }else{
                    echo '<a class="navbar-brand" href="../../../frontend/home.php">ADMIN - <strong>'.$_SESSION['username'].'</strong></a>';
                } 
                ?>
                
            </div>
           
            <ul class="nav navbar-right top-nav">
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">thông báo <span class="label label-default">bảo mật</span></a>
                        </li>
                        
                        <li class="divider"></li>
                        <li>
                            <a href="#">xem tất cả</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">

                    <?php if(empty($_SESSION['username'])){
                    ?>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <b class="caret"></b></a>
                    <?php 

                        }else{
                            echo '<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <strong>'.$_SESSION['username'].'</strong> <b class="caret"></b></a>';
                        }?>

                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Thông tin</a>
                        </li>
                        
                        <li class="divider"></li>
                        <li>
                            <a href="../../../frontend/logout.php"><i class="fa fa-fw fa-power-off"></i>Đăng xuất</a>
                        </li>
                    </ul>
                </li>
            </ul>
            
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="../../layout/dashboard.php"><i class="fa fa-fw fa-dashboard"></i> Bảng Điều Khiển</a>
                    </li>
                    <li>
                            <a href=""><i class="fa fa-bar-chart-o fa-fw"></i> Nhân Viên <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="../nhanvien/danhsach.php">Danh Sách Nhân Viên</a>
                                </li>
                                <li>
                                    <a href="../nhanvien/Themnv.php">Thêm Nhân Viên</a>
                                </li>
                                
                            </ul>
                            
                    </li>
                    <li>
                            <a href=""><i class="fa fa-bar-chart-o fa-fw"></i> Khách Hàng <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="../khachhang/danhsach.php">Danh Sách Khách Hàng</a>
                                </li>
                                <li>
                                    <a href="../khachhang/Themkh.php">Thêm Khách Hàng</a>
                                </li>
                                
                            </ul>
                           
                    </li>
                    
                    
                    <li>
                            <a href=""><i class="fa fa-bar-chart-o fa-fw"></i> Hàng Hóa <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="../hanghoa/danhsach.php">Danh Sách Hàng Hóa</a>
                                </li>
                                <li>
                                    <a href="../hanghoa/Themhh.php">Thêm Hàng Hóa</a>
                                </li>
                                
                            </ul>
                           
                    </li>
                     
                    
                    <li>
                            <a href="../slide/slide.php"><i class="fa fa-bar-chart-o fa-fw"></i> Slide <span class="fa arrow"></span></a>
                            
                    </li>
                    <li>
                            <a href=""><i class="fa fa-bar-chart-o fa-fw"></i> User <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="../user/danhsach.php">Danh Sách User</a>
                                </li>
                                
                            </ul>
                           
                    </li>
                    
                </ul>
            </div>
            
        </nav>

        