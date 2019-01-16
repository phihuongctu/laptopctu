<?php 
    // $conn = mysqli_connect('localhost', 'root', '', 'banhang') or die ('Không thể kết nối tới database');
    // mysqli_set_charset($conn, 'UTF8');
    include('../../connect.php');
    
    require_once('../../layout/header.php');

 ?>


<?php if(isset($_SESSION['username']) && ($_SESSION['status'])==1){

                    ?>

<div id="page-wrapper">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Danh Sách
                            <small>Hàng Hóa </small>
                        </h1>
                    </div>
                    
                    
                                
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                
                                <th>Mã Hàng Hóa</th>
                                <th>Tên Hàng Hóa</th>
                                <th>Loại Hàng</th>
                                <th>Giá</th>
                                <th>Số Lượng Hàng</th>
                                <th>Ghi Chú</th>
                                
                                <th>CPU</th>
                                <th>RAM</th>
                                <th>Màn Hình</th>
                                <th>hinh</th>
                                <th>Xóa</th>
                                <th>Sửa</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <?php
                                    $query="select * from hanghoa";
                                    $run=mysqli_query($conn, $query);
                                    if(mysqli_num_rows($run)> 0) {
                                        while ($row=mysqli_fetch_array($run)) {
                                             $mshh = $row['mshh'];
                                             $tenhh= $row['tenhh'];
                                             $loaihang  = $row['loaihang'];
                                             $gia   = $row['gia'];
                                             $slhang = $row['soluonghang'];
                                             $ghichu = $row['ghichu'];
                                             $hinh = $row['hinh'];
                                             $CPU = $row['CPU'];
                                             $ram = $row['RAM'];
                                             $manhinh = $row['manhinh'];


                                                            
                                    
                                 ?>
                            
                            <tr class="odd gradeX" align="center">

                                
                                
                                
                                <td><?php echo $mshh; ?></td>
                                <td><?php echo $tenhh; ?></td>
                                <td><?php echo $loaihang;?></td>             
                                <td><?php echo $gia;?></td>
                                <td><?php echo $slhang;?></td>
                                 <td><?php echo $ghichu;?></td>
                                 <td><?php echo $CPU;?></td>
                                 <td><?php echo $ram;?></td>
                                <td><?php echo $manhinh;?></td>
                                 <td><?php echo "<img width='100px' src=../../../hinh/".$hinh.">"?></td>

                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="xoa.php?xoa= <?php echo $mshh; ?>"> Xóa </a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="suahh.php?sua= <?php echo $mshh; ?>"> Sửa </a></td>
                            </tr>
                            <?php
                                    }
                                }else {
                                    echo 'Lỗi';
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
<?php require_once('../../layout/footer.php') ?>