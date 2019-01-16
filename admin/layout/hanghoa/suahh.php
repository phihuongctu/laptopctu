<?php include('../../layout/header.php');?>
<?php
                                $conn = mysqli_connect('localhost', 'root', '', 'banhang') or die ('Không thể kết nối tới database');
                                    mysqli_set_charset($conn, 'UTF8');
                                if (isset($_GET['sua'])) {
                                    $sua=$_GET['sua'];
                                
                                    $hanghoa="SELECT * FROM hanghoa WHERE mshh= $sua ";
                                    $run=mysqli_query($conn, $hanghoa);

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

                        <form action="xuliSuahh.php" method="POST" enctype="multipart/from-data">
                            <input type="hidden" name="_token" value="{{ csrf_token()}}">
                            
                           
                            <div class="form-group">
                                <label>Mã Số Hàng Hóa</label>
                                <input class="form-control ckeditor" name="mshh" <?php echo'value = "'.$nv_items["mshh"].'"' ?>  />
                            </div>
                            <div class="form-group">
                                <label>Tên Hàng Hóa</label>
                                <input class="form-control ckeditor" name="tenhh" <?php echo'value = "'.$nv_items["tenhh"].'"' ?> />
                            </div>
                            <div class="form-group">
                                <label>Loai Hạng</label>
                                <input class="form-control ckeditor" name="loaihang" <?php echo'value = "'.$nv_items["loaihang"].'"' ?> />
                            </div>
                            <div class="form-group">
                                <label>Giá</label>
                                <input class="form-control ckeditor" name="gia" <?php echo'value = "'.$nv_items["gia"].'"' ?> />
                            </div>
                            <div class="form-group">
                                <label>Số Lượng</label>
                                <input class="form-control ckeditor" name="soluonghang" <?php echo'value = "'.$nv_items["soluonghang"].'"' ?> />
                            </div>
                            <div class="form-group">
                                <label>Link Hình</label>
                                <input class="form-control ckeditor" name="hinh" <?php echo'value = "'.$nv_items["hinh"].'"' ?> />
                            </div>
                            <div class="form-group">
                                <label>CPU</label>
                                <input class="form-control ckeditor" name="CPU" <?php echo'value = "'.$nv_items["CPU"].'"' ?> />
                            </div>
                            <div class="form-group">
                                <label>RAM</label>
                                <input class="form-control ckeditor" name="RAM" <?php echo'value = "'.$nv_items["RAM"].'"' ?> />
                            </div>
                            <div class="form-group">
                                <label>Màn Hình</label>
                                <input class="form-control ckeditor" name="manhinh" <?php echo'value = "'.$nv_items["manhinh"].'"' ?> />
                            </div>
                            <div class="form-group">
                                <label>Ghi Chú</label>
                                <input class="form-control ckeditor" name="ghichu" <?php echo'value = "'.$nv_items["ghichu"].'"' ?> />
                            </div>
                            
                            
                            
                            <button name="suahh" type="submit" class="btn btn-default">Sửa</button>
                            <button type="reset" class="btn btn-default">Reset</button>
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