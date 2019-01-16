<?php include('../../layout/header.php');?>
<?php
                                $conn = mysqli_connect('localhost', 'root', '', 'banhang') or die ('Không thể kết nối tới database');
                                    mysqli_set_charset($conn, 'UTF8');
                                if (isset($_GET['sua'])) {
                                    $sua=$_GET['sua'];
                                
                                    $user="SELECT * FROM user WHERE id= $sua ";
                                    $run=mysqli_query($conn, $user);

                                    $n_items = mysqli_fetch_array($run);
                                    
                                                          
                                 ?>


<?php if(isset($_SESSION['username']) && ($_SESSION['status'])==1){

                    ?>
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Sửa
                            <small>User</small>
                        </h1>
                    </div>
                    
                    <div class="col-lg-7" style="padding-bottom:120px">
                        
                        <form action="xuliSuaus.php" method="POST" enctype="multipart/from-data">
                            <div class="form-group">
                                <label>ID</label>
                                <input class="form-control ckeditor" name="id" <?php echo'value = "'.$n_items["id"].'"' ?>  />
                            </div>
                            
                           
                            <div class="form-group">
                                <label>Tên</label>
                                <input class="form-control ckeditor" name="username" <?php echo'value = "'.$n_items["username"].'"' ?>  />
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <input class="form-control ckeditor" name="status" <?php echo'value = "'.$n_items["status"].'"' ?> />
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control ckeditor" name="email" <?php echo'value = "'.$n_items["email"].'"' ?> />
                            </div>
                            <div class="form-group">
                                <label>Địa Chỉ</label>
                                <input class="form-control ckeditor" name="dc" <?php echo'value = "'.$n_items["diachi"].'"' ?> />
                            </div>
                            <div class="form-group">
                                <label>Số Điện Thoại</label>
                                <input class="form-control ckeditor" name="sdt" <?php echo'value = "'.$n_items["sodienthoai"].'"' ?> />
                            </div>
                            
                            
                            
                            <button  name="suaus" type="submit" class="btn btn-default"> Sửa </a></button>
                            
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