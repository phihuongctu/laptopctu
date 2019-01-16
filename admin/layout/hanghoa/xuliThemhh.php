<?php 
    
    include('../../connect.php');
    
    

    if(isset($_POST['themhh'])){    
    
        $mshh   = addslashes($_POST['mshh']);
        $tenhh   = addslashes($_POST['tenhh']);
        $loaihang  = addslashes($_POST['loaihang']);
        $gia   = addslashes($_POST['gia']);
        $slhang   = addslashes($_POST['slhang']);
        $ghichu  = addslashes($_POST['ghichu']);
        $hinh = $_POST['hinh'];
        $CPU = $_POST['CPU'];
        $ram = $_POST['RAM'];
        $manhinh = $_POST['manhinh'];
       
        
        $sql = "insert into hanghoa(mshh, tenhh, loaihang, gia, soluonghang, ghichu,hinh,CPU,RAM,manhinh)values(
            '{$mshh}',
            '{$tenhh}',
            '{$loaihang}',
            '{$gia}',
            '{$slhang}',
            '{$ghichu}',
            '{$hinh}',
            '{$CPU}',
            '{$ram}',
            '{$manhinh}'
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