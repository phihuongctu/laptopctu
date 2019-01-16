<?php include('../../layout/header.php');?>
        <?php
                                $conn = mysqli_connect('localhost', 'root', '', 'banhang') or die ('Không thể kết nối tới database');
                                mysqli_set_charset($conn, 'UTF8');
                                if (isset($_GET['sua'])) {
                                    $sua= $_GET['sua'];
                                
                                    mysqli_set_charset($conn, 'UTF8');
                                    $khachhang="SELECT * FROM khachhang WHERE mskh= $sua";
                                    $run=mysqli_query($conn, $khachhang);

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

                        <form action="xuliSuakh.php" method="POST" enctype="multipart/from-data">
                            
                            
                           
                            <div class="form-group">
                                <label>Mã Số Khách Hàng</label>
                                <input class="form-control ckeditor" name="mskh" <?php echo'value = "'.$nv_items["mskh"].'"' ?>  />
                            </div>
                            <div class="form-group">
                                <label>Tên Khách Hàng</label>
                                <input class="form-control ckeditor" name="hotenkh" <?php echo'value = "'.$nv_items["hotenkh"].'"' ?> />
                            </div>
                            <div class="form-group">
                                <label>Tên Công Ty</label>
                                <input class="form-control ckeditor" name="tencongty" <?php echo'value = "'.$nv_items["tencongty"].'"' ?> />
                            </div>
                            <div class="form-group">
                                <label>Địa Chỉ</label>
                                <input class="form-control ckeditor" name="diachi" <?php echo'value = "'.$nv_items["diachi"].'"' ?> />
                            </div>
                            <div class="form-group">
                                <label>Số Điện Thoại</label>
                                <input class="form-control ckeditor" name="sodienthoai" <?php echo'value = "'.$nv_items["sodienthoai"].'"' ?> />
                            </div>
                            <div class="form-group">
                                <label>Số Fax</label>
                                <input class="form-control ckeditor" name="sofax" <?php echo'value = "'.$nv_items["sofax"].'"' ?> />
                            </div>
                            
                            
                            
                            <button name="suakh" type="submit" class="btn btn-default">Sửa</button>
                            
                        <form>
                    </div>
                </div>
               
            </div>
           
        </div>
                        <?php } ?>
                        <?php }else {
        echo '<div class="alert alert-danger">
  <strong>Bạn cần đăng nhập tài khoản admin</strong>
</div>';
}
      ?>
<?php include('../../layout/footer.php') ?>