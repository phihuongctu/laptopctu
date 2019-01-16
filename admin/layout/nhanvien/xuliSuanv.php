<?php 
	session_start();
		if (isset($_POST['suanv'])) {
			$conn = mysqli_connect('localhost', 'root', '', 'banhang') or die ('Không thể kết nối tới database');
            mysqli_set_charset($conn, 'UTF8');
			$manv   = $_POST['msnv'];
        	$tennv   = $_POST['tennv'];
        	$cv  = $_POST['cv'];
       	 	$dc   = $_POST['dc'];
        	$sdt  = $_POST['sdt'];

        $sql = "UPDATE nhanvien SET tennv = '$tennv', chucvu='$cv', diachi='$dc', sodienthoai='$sdt' WHERE msnv ='".$manv."'";
                           
    //Thông báo quá trình lưu
    if (mysqli_query($conn,$sql))
    {
        echo ' Chúc mừng bạn đã sữa thành công';
        header('Location: danhsach.php');
        
    }		
}else{
	echo 'ko ttai hđ sửa';
}

		
	



 ?>