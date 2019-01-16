<?php include('../../layout/header.php');?>
<?php
                                $conn = mysqli_connect('localhost', 'root', '', 'banhang') or die ('Không thể kết nối tới database');
                                    mysqli_set_charset($conn, 'UTF8');
                                if (isset($_GET['sua'])) {
                                    $sua=$_GET['sua'];
                                
                                    $nhanvien="SELECT * FROM nhanvien WHERE msnv= $sua ";
                                    $run=mysqli_query($conn, $nhanvien);

                                    $nv_items = mysqli_fetch_array($run);
                                    
                                                          
                                 ?>

<?php if(isset($_SESSION['username']) && ($_SESSION['status'])==1){

                    ?>
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Thêm
                            <small>Khách Hàng</small>
                        </h1>
                    </div>
                    
                    <div class="col-lg-7" style="padding-bottom:120px">
                        
                        <form action="xuliSuanv.php" method="POST" enctype="multipart/from-data">
                            
                            
                           
                            <div class="form-group">
                                <label>Mã Số Nhân Viên</label>
                                <input class="form-control ckeditor" name="msnv" <?php echo'value = "'.$nv_items["msnv"].'"' ?>  />
                            </div>
                            <div class="form-group">
                                <label>Tên Nhân Viên</label>
                                <input class="form-control ckeditor" name="tennv" <?php echo'value = "'.$nv_items["tennv"].'"' ?> />
                            </div>
                            <div class="form-group">
                                <label>Chức Vụ</label>
                                <input class="form-control ckeditor" name="cv" <?php echo'value = "'.$nv_items["chucvu"].'"' ?> />
                            </div>
                            <div class="form-group">
                                <label>Địa Chỉ</label>
                                <input class="form-control ckeditor" name="dc" <?php echo'value = "'.$nv_items["diachi"].'"' ?> />
                            </div>
                            <div class="form-group">
                                <label>Số Điện Thoại</label>
                                <input class="form-control ckeditor" name="sdt" <?php echo'value = "'.$nv_items["sodienthoai"].'"' ?> />
                            </div>
                            
                            
                            
                            <button  name="suanv" type="submit" class="btn btn-default" href="xiliSuanv.php?suaa= <?php echo $nv_items['msnv']; ?>"> Sửa </a></button>
                            
                        <form>
                        
                    </div>
                </div>
               
            </div>
           
        </div>
                   <?php
                         }
                    ?>     
        <?php }else {
        echo '<div class="alert alert-danger">
          <strong>Bạn cần đăng nhập tài khoản admin</strong>
        </div>';
    }
?>
<?php include('../../layout/footer.php') ?>