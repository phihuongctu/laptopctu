<?php 
    session_start();
    if(isset($_POST['mua'])){    
        $conn = mysqli_connect('localhost', 'root', '', 'banhang') or die ('Không thể kết nối tới database');

         mysqli_set_charset($conn, 'UTF8'); 
         $msnv = addslashes($_POST['msnv']);     
        $makh = addslashes($_POST['makh']);
        

        $sodonhang = addslashes($_POST['madh']);
        $mshh = addslashes($_POST['mshh']);
        $sl = addslashes($_POST['tongsp']);
        $gia =  $_POST['tonggia'];
        

        $sql = "insert into dathang(mskh, msnv, ngayGH)values(
            '{$makh}',
            '{$msnv}',
            curdate()+3
        )";
        $sqlhh = "insert into chitietdathang(mshh, soluong, giadathang)values(
            '{$mshh}',
            '{$sl}',
            '{$gia}'

        )";
                           
    //Thông báo quá trình lưu
    if ( mysqli_query($conn,$sql) && mysqli_query($conn,$sqlhh))
    {
        echo '<center><h2>Chúc mừng bạn đã đặt hàng thành công. Trở về trang chủ sau vài giây</h2><center>';
        header('Refresh:2; url=home.php');
        
    }
}else{
        echo "Có lỗi xảy ra trong quá trình đăng ký";
                          
    
    }
 ?>