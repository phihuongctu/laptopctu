<?php 
    // $conn = mysqli_connect('localhost', 'root', '', 'banhang') or die ('Không thể kết nối tới database');
    // mysqli_set_charset($conn, 'UTF8');
    include('../../connect.php');
    
    

    if(isset($_POST['themkh'])){    
    
        $mskh   = addslashes($_POST['mskh']);
        $htkh   = addslashes($_POST['htkh']);
        $tencty  = addslashes($_POST['tencty']);
        $dc   = addslashes($_POST['dc']);
        $sdt   = addslashes($_POST['sdt']);
        $sofax  = addslashes($_POST['sofax']);

        $sql = "insert into khachhang(mskh, hotenkh, tencongty, diachi, sodienthoai, sofax)values(
            '{$mskh}',
            '{$htkh}',
            '{$tencty}',
            '{$dc}',
            '{$sdt}',
            '{$sofax}'
        )";
                           
    //Thông báo quá trình lưu
    if (mysqli_query($conn,$sql))
    {
        echo ' Chúc mừng bạn đã đăng kí thành công';
        header('Location: danhsach.php');
        
    }
}else{
        echo "Có lỗi xảy ra trong quá trình đăng ký";
                          
    
    }
 ?>