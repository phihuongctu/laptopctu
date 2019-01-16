<?php include('../../layout/header.php');?>


<?php if(isset($_SESSION['username']) && ($_SESSION['status'])==1){

                    ?>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Thêm
                            <small>Khách Hàng</small>
                        </h1>
                    </div>
                   
                    <div class="col-lg-7" style="padding-bottom:120px">

                        <form action="xuliThem.php" method="POST" enctype="multipart/from-data">
                            <input type="hidden" name="_token" value="{{ csrf_token()}}">
                            
                           
                            <div class="form-group">
                                <label>Mã Khách Hàng</label>
                                <input class="form-control ckeditor" name="mskh" placeholder="Mời nhập...." />
                            </div>
                            <div class="form-group">
                                <label>Họ Tên Khách Hàng</label>
                                <input class="form-control ckeditor" name="htkh" placeholder="Mời nhập...." />
                            </div>
                            <div class="form-group">
                                <label>Tên Công Ty</label>
                                <input class="form-control ckeditor" name="tencty" placeholder="Mời nhập...." />
                            </div>
                            <div class="form-group">
                                <label>Địa Chỉ</label>
                                <input class="form-control ckeditor" name="dc" placeholder="Mời nhập...." />
                            </div>
                            <div class="form-group">
                                <label>Số Điện Thoại</label>
                                <input class="form-control ckeditor" name="sdt" placeholder="Mời nhập...." />
                            </div>
                            
                            
                            <div class="form-group">
                                <label>Số Fax</label>
                                <input class="form-control ckeditor" name="sofax" placeholder="Mời nhập...." />
                            </div>
                            <div class="form-group">
                                <label>Hình Ảnh</label>
                                <input id="Hinh" type="file" class="form-control ckeditor" name="Hinh" />
                            </div>
                            <div class="form-group">
                                <label>Nổi Bật</label>
                                <label class="radio-inline">
                                    <input name="NoiBat" value="0" checked="" type="radio">Có
                                </label>
                                <label class="radio-inline">
                                    <input name="NoiBat" value="1" type="radio">Không
                                </label>
                            </div>
                            <button name="themkh" type="submit" class="btn btn-default">Thêm</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
                </div>
                
            </div>
            
        </div>

    <?php }else {
        echo '<div class="alert alert-danger">
          <strong>Bạn cần đăng nhập tài khoản admin</strong>
        </div>';
    }
?>
<?php include('../../layout/footer.php') ?>