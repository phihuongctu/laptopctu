<?php 
    // $conn = mysqli_connect('localhost', 'root', '', 'banhang') or die ('Không thể kết nối tới database');
    // mysqli_set_charset($conn, 'UTF8');
    include('../../connect.php');
    // $sql =" select * from khachhang";
    // $result = mysqli_query($conn, $sql);
    

    if(isset($_POST['themnv'])){    
    
        $manv   = addslashes($_POST['manv']);
        $tennv   = addslashes($_POST['tennv']);
        $cv  = addslashes($_POST['cv']);
        $dc   = addslashes($_POST['dc']);
        $sdt  = addslashes($_POST['sdt']);

        $sql = "insert into nhanvien(msnv, tennv, chucvu, diachi, sodienthoai)values(
            '{$manv}',
            '{$tennv}',
            '{$cv}',
            '{$dc}',
            '{$sdt}'          
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