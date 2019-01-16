<style type="text/css">
  .row {
    margin-right: -15px;
    margin-left: -15px;
    background-color: white;
    height: 100%;
}
</style>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="../css/bootstrap.min.css" rel="stylesheet">

   
    <link href="../css/sb-admin.css" rel="stylesheet">

   
    <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="../css/sb-admin.css">

<?php include('header.php') ;
    $conn = mysqli_connect('localhost', 'root', '', 'banhang') or die ('Không thể kết nối tới database');
    $user = mysqli_num_rows(mysqli_query($conn,"SELECT * from user "));
    
    $sp = mysqli_num_rows(mysqli_query($conn,"SELECT * from hanghoa"));
    $donhang = mysqli_num_rows(mysqli_query($conn,"SELECT * from dathang"));
    
?>
<?php if(isset($_SESSION['username']) && ($_SESSION['status'])==1){

                    ?>

 <div class="row">
            <div class="col-lg-1 col-xs-6"></div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <br>
                  <h3 class="card-category"><i class="fas fa-users"></i>Tổng Số Khách Hàng</h3>
                  <hr>
                  <h2><?php echo ''.$user.''; ?></h2>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    
                    <a href="admin/TinTuc/DanhSach">Chi tiết </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-4">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <br>
                  <h3 class="card-category"><i class="fas fa-laptop"></i> Số Sản Phẩm</h3>
                  <hr>
                  <h2><?php echo ''.$sp.''; ?></h2>
                  <a href="admin/User/DanhSach">Chi tiết </a>
                </div>
                    
              </div>
            </div>
            <div class="col-lg-3 col-md-5 col-sm-5">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <br>
                  <h3 class="card-category"><i class="fab fa-wpforms"></i> Tổng Đơn Hàng</h3>
                  <hr>
                  <h2><?php echo ''.$donhang.''; ?></h2>
                  <a href="admin/Slide/DanhSach">Chi tiết </a>
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