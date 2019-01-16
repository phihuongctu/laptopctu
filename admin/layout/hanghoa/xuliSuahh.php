<?php 
	session_start();
		if (isset($_POST['suahh'])) {
			$conn = mysqli_connect('localhost', 'root', '', 'banhang') or die ('Không thể kết nối tới database');
            mysqli_set_charset($conn, 'UTF8');
			                                 $mshh = $_POST['mshh'];
                                             $tenhh= $_POST['tenhh'];
                                             $loaihang  =$_POST['loaihang'];
                                             $gia   = $_POST['gia'];
                                             $slhang = $_POST['soluonghang'];
                                             $ghichu = $_POST['ghichu'];
                                             $hinh = $_POST['hinh'];
                                             $CPU = $_POST['CPU'];
                                             $ram = $_POST['RAM'];
                                             $manhinh = $_POST['manhinh'];

        $sql = "UPDATE hanghoa SET tenhh='$tenhh', loaihang='$loaihang',gia='$gia',soluonghang='$slhang', ghichu='$ghichu', hinh='$hinh',CPU='$CPU',RAM = '$ram',manhinh='$manhinh' WHERE mshh ='".$mshh."'";
                           
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