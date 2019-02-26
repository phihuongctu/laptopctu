



<link rel="stylesheet" type="text/css" href="css/back_top.css">

<style type="text/css">
.item_l1{
    float: left;
    cursor: pointer;
    list-style-type: none;
    padding: 2px 50px 0;

}
.item_l1 img{
  margin-top: -17px;
  margin-left: -30px;
}
.item_l{
    margin-top: -5px;
    float: left;
    cursor: pointer;
    list-style-type: none;
    padding: 2px 50px 0;
    height: 50px;
    
}
input[type=text] {                    /*search*/
    width: 200px;
    
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 15px;
    background-color: white;
    height: 30px;
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    /*padding: 12px 20px 12px 40px;*/
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}
</style>
      
<div class="menu_t">

                <?php
                             
                                $conn = mysqli_connect('localhost', 'root', '', 'banhang') or die ('Không thể kết nối tới database');
                                    $query="SELECT * FROM hanghoa ORDER BY mshh ASC LIMIT 4 ";
                                    $run=mysqli_query($conn, $query);
                                    if(mysqli_num_rows($run)> 0) {
                                        if($row=mysqli_fetch_array($run)){
                                             $mshh = $row['mshh'];
                                             $tenhh= $row['tenhh'];
                                             $created  = $row['created'];
                                             $gia   = $row['gia'];
                                             $slhang = $row['soluonghang'];
                                             $ghichu = $row['ghichu'];
                                             $hinh = $row['hinh'];
                                             $CPU=$row['CPU'];

                                                          
                                 ?>
                <ul>
                    <li  class="item_l1"><i class=""><a href="home.php"></i> <img width="150px;" height="50px;" src="../hinh/logo.jpg"></a></li>
                    <form action="search.php" method="GET">
                        <li class="item_l">
                            <input type="submit" name="timkiem" class="timkiem" value="Tìm">
                            <input type="text" name="search" placeholder="Nhập dell,macbook,hp...">
                        </li>
                    </form>
                    <li class="item_r"><i class="fab fa-gratipay"></i> <a href="https://www.facebook.com/phihuong.tu">Liên Hệ</a></li>
                    <?php 
                    
                    if(empty($_SESSION['username'])){
                    ?>
                        <li class="item_r"><i class="fas fa-user-tie"></i> <a href="login.php">Đăng Nhập</a></li>
                        <li class="item_r"><i class="fas fa-user-plus"></i> <a href="dangki.php">Đăng Kí</a></li>
                    <?php 

                        }else{

                        echo '<li class="item_r"> <i class="fas fa-user-tie"> </i> <a href="profile.php"><strong>'.$_SESSION['username']. '</a> </strong>
                             <a href="logout.php"> Đăng xuất</a>';
                    }
                }
            }
                     ?>

                    
                    
                    
                </ul>
</div>                              
    


    <!-- Slide -->
    
    <div class=" w3-content w3-display-container">
      <?php
                                    $query="select * from slide";
                                    $run=mysqli_query($conn, $query);
                                    if(mysqli_num_rows($run)> 0) {
                                        while ($row=mysqli_fetch_array($run)) {
                                             $ten = $row['ten'];
                                          
                                                            
                                    
                                 ?>
          <img style="width: 1300px; height: 325px;" class="mySlides" src="../hinh/<?php echo $ten ?>">
                              <?php 
                            }
                                }else {
                                    echo 'Lỗi';
                                }
          ?>

          <div class="w3-left  w3-display-left w3-grey " onclick="plusDivs(-1)">&#10094;</div>
                <div class="w3-right w3-display-right w3-grey " onclick="plusDivs(1)">&#10095;</div>

                <div class="w3-center w3-display-bottommiddle" style="width:100%">
                
                <span class="w3-badge demo w3-border" onclick="currentDiv(1)"></span>
                <span class="w3-badge demo w3-border" onclick="currentDiv(2)"></span>
                <span class="w3-badge demo w3-border" onclick="currentDiv(3)"></span>
          </div>
    </div>