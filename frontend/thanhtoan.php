<!DOCTYPE html>
<html>
    <head>
        
        <title>Đặt Hàng</title>
        
        
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

       <link rel="stylesheet" type="text/css" href="frontend/css/home.css">
       <link rel="stylesheet" type="text/css" href="frontend/css/menu.css">
       
        <link rel="stylesheet" href="css/main-stylesheet.css" type="text/css" />


        <link href="../frontend/css/bootstrap.min.css" rel="stylesheet">

   
    <link href="../frontend/css/sb-admin.css" rel="stylesheet">

   
    

   <style type="text/css">
           a {
            color: black;
            font-weight: bold;
        }
          .menu_t {
       top: 0px;
       position: fixed;
       background-color: grey;
       width: 100%;
       z-index: 1;
       height: 50px;
    }
       .item_l1 {
       float: left;
       cursor: pointer;
       list-style-type: none;
       padding: 2px 50px 0;
       margin-top: 10px;
    }
       .item_l {
       margin-top: 10px !important;
       float: left;
       cursor: pointer;
       list-style-type: none;
       padding: 2px 50px 0;
       height: 50px;
       border-radius: 5px;
    }
       .item_r {
       float: right;
       cursor: pointer;
       list-style-type: none;
       right: 10px;
       padding: 2px 10px 0px;
       margin-top: 10px;
    }
          .form{
            position: absolute;
            top: 500px;
            left: 700px;
            float: left;

          }
          .menu{
                background-color: #FE980F !important;
                width: 97.5%;
                margin-left: 15px;
                top: 460px !important;
                position: absolute;
                
            }
            .sp{
              position: absolute;
              top: 500px;
              float: left;
              left: 300px;
            }
          body{
            background-color: white;
          }
   </style>


<?php
    session_start();

    
   if(empty($_SESSION['username'])) {
    
  
   $conn = mysqli_connect('localhost', 'root', '', 'banhang') or die ('Không thể kết nối tới database');
   mysqli_set_charset($conn, 'UTF8');
       if(isset($_POST['login']))
       {   
           
           $username=$_POST['username'];
           $pass = mysqli_real_escape_string($conn, $_POST['pass']);
           // $pass=md5($pass);
           
           if($username && $pass){
                 
                 $sql="select * from user where username='".$username."' and pass='".$pass."'";
                 $query = mysqli_query($conn,$sql);
                 $result = mysqli_num_rows($query);
                 if($result == 0)
                 {
                  echo "<center><h3>Bạn đã nhập sai Username hoặc password</h3></center>";
                  header('Refresh:2; url=thanhtoan.php');
                 }
                 else //đăng nhap thanh công
                 {
                 $row=$query->fetch_object();
                   session_start();
                   $_SESSION['username'] = $row->username;
                   $_SESSION['status'] = $row->status;
                   if($row->status==1){
                       echo "<center><h3>Xin chào Admin. Đang chuyển đến trang quản trị...</h3></center>";
                       header('Location:../admin/layout/nhanvien/danhsach.php');
                   }
                   else{
                       header('Location:home.php');
                   }
                   
                 
                 }
   
           }
       }

   ?>
        
        
</head>
    
       
    <body class="top">
            
            <div class="main-body-color-mask"></div>
            <div class="lightbox"></div>

            
            
            </div>
            
            
            <div class="main-body-wrapper">
                
                
                <section class="main-navigation clearfix">
                    <nav>
                        <div class="navigation">
                            <a href="home.php">Home</a>
                        </div>
                        <div class="title">
                            <h4>Đăng nhập</h4>
                        </div>
                    </nav>
                
                </section>
                
                
                <section class="main-content-wrapper clearfix">
                    
                    
                    <section class="single-full-width clearfix">
                        
                        
                        <div class="main-login">
                            <form action="" class="login" method="post">
                                <p>
                                    <label>Tài khoản:</label>
                                    <input name="username" type="text" />
                                </p>
                                <p>
                                    <label>Mật khẩu:</label>
                                    <input name="pass" type="password" />
                                </p>
                                <p>
                                    <label></label>
                                    <a href="forgot-password.php">Quên mật khẩu?</a>
                                </p>
                                <p class="sign-in">
                                    <label></label>
                                    <button name="login" type="submit">Đăng nhập</button>
                                    <b>or <a href="home.php">Quay lại cửa hàng</a></b>
                                </p>
                            </form>
                        
                        </div>
                          
                        </div>
                    
                   
                    </section>

                
                </section>
            </div>
    </body>

  <?php

        }else {
            include('header.php');

            include('menu.php');
?>    
       
         

                                      <!-- form Thông tin Khách Hàng -->
<?php                
      
                 if(isset($_SESSION["username"])){   //hien thi thong tin user
                    $tonggia = $_GET['tonggia'];
                    $sumsp = $_GET['sl'];
                    $id = $_GET['idsp1'];
                    $username = $_SESSION["username"];
                    $conn = mysqli_connect('localhost', 'root', '', 'banhang') or die ('Không thể kết nối tới database');
                    mysqli_set_charset($conn, 'UTF8');
                    $sql = mysqli_query($conn,"SELECT * FROM user WHERE username ='$username'");
                    $kh = mysqli_fetch_array($sql);

                    $sqlnv = mysqli_query($conn,"SELECT * FROM nhanvien");
                    $nv = mysqli_fetch_array($sqlnv);

                    $sqldh = mysqli_query($conn,"SELECT * FROM dathang");
                    $dh = mysqli_fetch_array($sqldh);
                    $sqlhh = mysqli_query($conn,"SELECT * FROM hanghoa");
                    $hh = mysqli_fetch_array($sqlhh);
?>
      
           <form action="xuliThanhToan.php" method="POST" enctype="multipart/from-data">               

            <div class="form">
              
                        <h1 class="page-header">Thông Tin Mua Hàng
                            
                        </h1>
                    
                    
                    
                    <div class="" style="padding-bottom:120px">

                        <div class="form-sgroup">
                                <!-- mã số hàng hóa -->
                                
                                <input type="hidden" class="form-control ckeditor" name="mshh" placeholder="Mời nhập...." <?php echo'value = "'.$id.'"'?>/>
                            </div>
                            
                            <div class="form-sgroup">
                                <!-- mã số nhân viên -->
                                
                                <input type="hidden" class="form-control ckeditor" name="msnv" placeholder="Mời nhập...." <?php echo'value = "'.$nv["msnv"].'"'?>/>
                            </div>
                            <div class="form-sgroup">
                                
                                <input type="hidden" class="form-control ckeditor" name="madh" placeholder="Mời nhập...." <?php echo'value = "'.$dh["sodonhang"].'"' ?>/>
                            </div>
                            <div class="form-sgroup">
                                <label>Mã Khách Hàng</label>
                                <input class="form-control ckeditor" name="makh" placeholder="Mời nhập...." <?php echo'value = "'.$kh["id"].'"' ?>/>
                            </div>
                           
                            <div class="form-sgroup">
                                <label>Tên Khách Hàng</label>
                                <input class="form-control ckeditor" name="tenkh" placeholder="Mời nhập...." <?php echo'value = "'.$kh["username"].'"' ?>/>
                            </div>
                            <div class="form-group">
                                <label>Địa Chỉ Email</label>
                                <input class="form-control ckeditor" name="email" placeholder="Mời nhập...." <?php echo'value = "'.$kh["email"].'"' ?>/>
                            </div>
                            <div class="form-group">
                                <label>Số Điện Thoại</label>
                                <input class="form-control ckeditor" name="sdt" placeholder="Mời nhập...." <?php echo'value = "'.$kh["sodienthoai"].'"' ?> />
                            </div>
                            <div class="form-group">
                                <label>Địa Chỉ Giao Hàng</label>
                                <input class="form-control ckeditor" name="dc" placeholder="Mời nhập...." <?php echo'value = "'.$kh["diachi"].'"' ?>/>
                            </div>                  
                            
                             <button name="mua" type="submit" class="btn btn-default mua">Mua</button>
                            
                             <a class="btn btn-default" style="color: orange;" href="card2.php">Quay về giỏ hàng</a>
                        
                    </div>
              
            </div>


            <!-- form  Thông Tin Sản phẩm -->
        <div class="sp">
            <div class="sp1" style="padding-bottom:120px">

              <h1 class="page-header">Thông Tin Giỏ Hàng
                            
                        </h1>

                        
                            
                            
                               <?php 
                                $id = $_GET['idsp1'];
                                
                                $item_query = "SELECT * FROM  hanghoa WHERE mshh IN ($id) ORDER BY mshh ASC";
                                $item_result = mysqli_query($conn,$item_query) or die ('Cannot select table!');

                                while ($rows = mysqli_fetch_array($item_result))
                                {
                                  $slmoi_sp=$_SESSION['cart'][$rows['mshh']];
                               
                                
                                ?>
                          

                          
                              <div class="form-group">
                                <label name="tensp"> Bạn mua <i style="color: orange;" name="slmoisp"> <?php echo ''.$slmoi_sp.' '.$rows['tenhh'].'</i>'?></label>
                                <input  class="form-control ckeditor giamoisp" name="giamoisp" placeholder="Mời nhập...."<?php echo'value = "'.number_format($rows['gia']).' (VND)"'?> readonly/>
                            </div>

                            
                               
                                
                                
                              <?php } ?>
                                 
                                
                            
                             

                            <div class="form-group">
                                <label>Thời Gian Đặt Hàng</label>
                                <input class="form-control ckeditor" name="ngayDH" type="" class="input-text-1" <?php echo'value = "'.date('Y-m-d H:i:s').'"'?> readonly/>
                            </div>  
                            
                            <div class="form-group">
                                <label>Tống Số Lượng Sản Phẩm</label>
                                <input class="form-control ckeditor" name="tongsp" placeholder="Mời nhập...." <?php echo'value = "'.number_format($sumsp).'"' ?> readonly/>
                            </div>
                            <div class="form-group">
                                <label>Tổng Giá (VND) </label>
                                <input class="form-control ckeditor" name="tonggia" placeholder="Mời nhập...." <?php echo'value = "'.number_format($tonggia).'"'?> readonly/>
                                  
                                
                                  
                            </div>
                            <div class="form-group">
                                <h4><b>Giao hàng từ 1-3 ngày kể từ khi đặt hàng</b></h4>
                                
                            </div>
                            
                        
                    </div>
              </div>
                         
</form>



                <?php 

                  }

                ?>
            

<?php

   }


  ?>
   <script src="js/home.js"></script>
   <button onclick="topFunction()" id="myBtn" title="Go to top"><img src="../hinh/top.png" alt="placeholder+image"></button>

<script>

window.onscroll = function() {scrollFunction()};
      // khi roll xuống 300px sẽ hiện button
function scrollFunction() {
    if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}
    // lên top
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>
    </html>

