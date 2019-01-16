<?php include('../../layout/header.php');?>
<?php
if(isset($_POST['but_upload'])){
  $con = mysqli_connect('localhost', 'root', '', 'banhang') or die ('Không thể kết nối tới database');
  mysqli_set_charset($con, 'UTF8');
 $name = $_FILES['file']['name'];
 $target_dir = "../../../hinh/";
 $target_file = $target_dir . basename($_FILES["file"]["name"]);
    $size=$_FILES['file']["size"];
    $type=$_FILES['file']["type"];
 // Select file type
 $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

 // Valid file extensions
 $extensions_arr = array("jpg","jpeg","png","gif");

 // Check extension
 if( in_array($imageFileType,$extensions_arr) ){
 
  // Insert record
  $query = "insert into slide(ten,size,type) values('".$name."','".$size."','".$type."')";
  mysqli_query($con,$query);
  $mess='Upload thành công';
  // Upload file
  move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
  
 }
 
}
?>

<?php if(isset($_SESSION['username']) && ($_SESSION['status'])==1){

                    ?>

        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Thêm
                            <small>Slide</small>
                        </h1>
                    </div>
                    
                       <div class="alert alert-success">
                        
                          <strong>
                        <?php if (isset($mess))
                            echo $mess;
                          ?>
                          </strong>
                            
                        </div>
                                      
                    <div class="col-lg-7" style="padding-bottom:120px">
                        
                        <form method="post" action="" enctype='multipart/form-data'>
                          <input  class="form-control ckeditor" type='file' name='file' />
                          <input  class="btn btn-default" type='submit' value='Uploa ảnh' name='but_upload'>
                        </form>
                   
                    </div>
                </div>
                
            </div>
            
        </div>
        <?php }else {
        echo '<div class="alert alert-danger">
          <strong>Bạn cần đăng nhập tài khoản admin</strong>
        </div>';
    }
?>
        <?php include('../../layout/footer.php') ?>