<?php 
	session_start();
		if (isset($_POST['suaus'])) {
			$conn = mysqli_connect('localhost', 'root', '', 'banhang') or die ('Không thể kết nối tới database');
            mysqli_set_charset($conn, 'UTF8');
			$id   = $_POST['id'];
            $username = $_POST['username'];
        	$status   = $_POST['status'];
        	$email  = $_POST['email'];
       	 	$dc   = $_POST['dc'];
        	$sdt  = $_POST['sdt'];

        $sql = "UPDATE user SET username='$username',status = '$status', email='$email', diachi='$dc', sodienthoai='$sdt' WHERE id ='".$id."'";
                           
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