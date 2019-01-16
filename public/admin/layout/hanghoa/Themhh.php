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

                        <form action="xuliThemhh.php" method="POST" enctype="multipart/from-data">
                            <input type="hidden" name="_token" value="{{ csrf_token()}}">
                            
                           
                            <div class="form-group">
                                <label>Mã Số Hàng Hóa</label>
                                <input class="form-control ckeditor" name="mshh" placeholder="Mời nhập...." />
                            </div>
                            <div class="form-group">
                                <label>Tên Hàng Hóa</label>
                                <input class="form-control ckeditor" name="tenhh" placeholder="Mời nhập...." />
                            </div>
                            <div class="form-group">
                                <label>Loại Hàng</label>
                                <input class="form-control ckeditor" name="loaihang" placeholder="Mời nhập...." />
                            </div>
                            <div class="form-group">
                                <label>Giá</label>
                                <input class="form-control ckeditor" name="gia" placeholder="Mời nhập...." />
                            </div>
                            <div class="form-group">
                                <label>Số Lượng Hàng</label>
                                <input class="form-control ckeditor" name="slhang" placeholder="Mời nhập...." />
                            </div>
                            
                            
                            <div class="form-group">
                                <label>Ghi Chú</label>
                                <input class="form-control ckeditor" name="ghichu" placeholder="Mời nhập...." />
                            </div>
                            <div class="form-group">
                                <label>Hình Ảnh</label>
                                <input id="Hinh"  class="form-control ckeditor" name="hinh" placeholder="Mời nhập...." />
                            </div>
                            <div class="form-group">
                                <label>CPU</label>
                                <input id="Hinh"  class="form-control ckeditor" name="CPU" placeholder="Mời nhập...." />
                            </div>
                            <div class="form-group">
                                <label>RAM</label>
                                <input id="Hinh"  class="form-control ckeditor" name="RAM" placeholder="Mời nhập...." />
                            </div>
                            <div class="form-group">
                                <label>Màn Hình</label>
                                <input id="Hinh" class="form-control ckeditor" name="manhinh" placeholder="Mời nhập...." />
                            </div>
                            <button name="themhh" type="submit" class="btn btn-default">Thêm</button>
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