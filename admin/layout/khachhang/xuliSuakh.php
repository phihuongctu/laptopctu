<?php 
	session_start();
		if (isset($_POST['suakh'])) {
			$conn = mysqli_connect('localhost', 'root', '', 'banhang') or die ('Không thể kết nối tới database');
            mysqli_set_charset($conn, 'UTF8');
			$mskh   = $_POST['mskh'];
        	$hotenkh   = $_POST['hotenkh'];
        	$tencongty  = $_POST['tencongty'];
       	 	$diachi   = $_POST['diachi'];
            $sodienthoai = $_POST['sodienthoai'];
        	$sofax  = $_POST['sofax'];

        $sql = "UPDATE khachhang SET hotenkh='$hotenkh', tencongty='$tencongty', diachi='$diachi',sodienthoai='$sodienthoai',sofax = '$sofax' WHERE mskh ='".$mskh."'";
                           
    //Thông báo quá trình lưu
    if (mysqli_query($conn,$sql))
    {
        echo ' Chúc mừng bạn đã sữa thành công';
        header('Location: danhsach.php');
        
    }		
}else{
	echo 'ko tồn tại hđ sửa';
}

		
	



 ?>