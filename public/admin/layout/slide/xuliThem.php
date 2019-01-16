<?php
    // gioi han file upload khong qua 100kb
    $conn = mysqli_connect('localhost', 'root', '', 'banhang') or die ('Không thể kết nối tới database');

    if (isset($_POST['submit'])) {
        if(isset($_FILES['file'])&&$_FILES['file']["name"]!=null){
                //lấy tên của file:
                $file_name=$_FILES['file']["name"];
                $file_size=$_FILES['file']["size"];
                $file_type=$_FILES['file']["type"];
                //lấy đường dẫn tạm lưu nội dung file:
                $file_tmp =$_FILES['file']['tmp_name'];
                //tạo đường dẫn lưu file trên host:
                $path ="upAnh_php/".$file_name;
                //upload nội dung file từ đường dẫn tạm vào đường dẫn vừa tạo:
                move_uploaded_file($file_tmp,$path);
                mysqli_query($conn, "insert into slide(ten,type,location,size) values('$file_name',$file_type,'$path','$file_size')");
                header('Location:slide.php');  //khi thêm thành công sẽ trỏ ts vị trí mn đến
                echo 'up thanh cong';
            }
        }
?>