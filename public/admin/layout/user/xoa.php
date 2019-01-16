<?php
$conn = mysqli_connect('localhost', 'root', '', 'banhang') or die ('Không thể kết nối tới database');
		
	
	if (isset($_GET['xoa'])) {
		$xoa= $_GET['xoa'];
		$query="delete from user where id= $xoa";
		if (mysqli_query($conn, $query)) {
			
			header("Location:danhsach.php");
		} else {
			
		}
		
	}
			

?>