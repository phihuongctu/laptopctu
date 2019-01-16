<?php 
    // $conn = mysqli_connect('localhost', 'root', '', 'banhang') or die ('Không thể kết nối tới database');
    // mysqli_set_charset($conn, 'UTF8');
    include('../../connect.php');
    
    
    include('../../layout/header.php');

 ?>

<?php if(isset($_SESSION['username']) && ($_SESSION['status'])==1){

                    ?>
<div id="page-wrapper">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Danh Sách
                            <small>Nhân Viên</small>
                        </h1>
                    </div>
                    

                                
                  
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Username</th>
                                <th>Status</th>
                                <th>Email</th>
                                <th>Địa Chỉ</th>
                                <th>Số Điện Thoại</th>
                                <th>Xóa</th>
                                <th>Sửa</th>
                            </tr>
                        </thead>
                        <tbody>
                                                    
                            <?php
                                $i=0;
                                $sql =" select * from user";
                                $result = mysqli_query($conn, $sql);
                                while ($dong=mysqli_fetch_array($result)) {
                            ?>
                            <tr class="odd gradeX" align="center">
                                <td><?php echo $dong['id']; ?></td>
                                <td><?php echo $dong['username']; ?></td>
                                <td><?php echo $dong['status']; ?></td>
                                <td><?php echo $dong['email'];?></td>
                                <td><?php echo $dong['diachi'];?></td>
                                <td><?php echo $dong['sodienthoai'];?></td>

                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="xoa.php?xoa=<?php echo $dong['id']; ?>"> Xóa </a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i><a href="sua.php?sua=<?php echo $dong['id']; ?>"> Sửa </a></td>
                            </tr>
                            <?php
                                $i++;
                                }
                            ?>
                        </tbody>
                    </table>
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