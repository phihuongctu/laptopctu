<?php
$conn = mysqli_connect('localhost', 'root', '', 'banhang') or die ('Không thể kết nối tới database');
	if (isset($_GET['xoa'])) {
		$xoa= $_GET['xoa'];
		$query="delete from hanghoa where mshh= $xoa";
		if (mysqli_query($conn, $query)) {
			$suscess="Thành Công";
		} else {
			$error="Lỗi";
		}
		header("Location: danhsach.php");
	}
	
			

?>