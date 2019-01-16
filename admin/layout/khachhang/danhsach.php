<?php 
    // $conn = mysqli_connect('localhost', 'root', '', 'banhang') or die ('Không thể kết nối tới database');
    // mysqli_set_charset($conn, 'UTF8');
    include('../../connect.php');
    $sql =" select * from khachhang";
    
    include('../../layout/header.php');

 ?>



<?php if(isset($_SESSION['username']) && ($_SESSION['status'])==1){

                    ?>
<div id="page-wrapper">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Danh Sách
                            <small>Khách Hàng</small>
                        </h1>
                    </div>
                   
                    
                                <div class="alert alert-success">
                                    <strong>
                                        <?php
                                            if (isset($error)) {
                                                 echo "<span style='color:red;'> $error </span>";
                                             } 
                                            else if (isset($suscess)) {
                                                 echo "<span style='color:green;'> $suscess </span>";
                                             } 
                                         ?>
                                    </strong>
                                </div>
                  
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                
                                <th>Mã Khách Hàng</th>
                                <th>Họ Tên Khách Hàng</th>
                                <th>Tên Công Ty</th>
                                <th>Địa Chỉ</th>
                                <th>Số Điện Thoại</th>
                                <th>Số Fax</th>
                                <th>Xóa</th>
                                <th>Sửa</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                                $i=0;
                                $result = mysqli_query($conn, $sql);
                                while ($dong=mysqli_fetch_array($result)) {
                            ?>
                            <tr class="odd gradeX" align="center">
                                
                                <td><?php echo $dong['mskh']; ?></td>
                                <td><?php echo $dong['hotenkh']; ?></td>
                                <td><?php echo $dong['tencongty'];?></td>
                                <td><?php echo $dong['diachi'];?></td>
                                <td><?php echo $dong['sodienthoai'];?></td>
                                 <td><?php echo $dong['sofax'];?></td>

                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="xoa.php?xoa=<?php echo $dong['mskh']; ?>"> Xóa </a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="suakh.php?sua=<?php echo $dong['mskh']; ?>"> Sửa </a></td>
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
</div>
';
    } ?>
<?php include('../../layout/footer.php') ?>