<link rel="stylesheet" type="text/css" href="css/menu.css">
<ul class="nav navbr-nav menu">
   <?php
      $conn = mysqli_connect('localhost', 'root', '', 'banhang') or die ('Không thể kết nối tới database');
          $query="select * from loaisp";
          $run=mysqli_query($conn, $query);

          
          if(mysqli_num_rows($run)> 0) {
              while ($row=mysqli_fetch_array($run)) {
                   $idsp = $row['idsp'];
                   $tensp= $row['tensp'];                              
      ?>
   <div class="dropdown">
      <button type="submit" class="dropbtn">
      <a href="loaisp.php?idsp=<?php echo $tensp ?>">
      <?php echo $tensp;?>
      </a>
      </button>
   </div>
   <?php
      }
      }else {
      echo 'Lỗi';
      }
      ?>
      
   <div class="dropdown">
      <button class="dropbtn">Loại Giá</button>
      <div class="dropdown-content">
         <a href="giasp.php?giamin=10000000&giamax=15000000">10 triệu-15 triệu</a>
         <a href="giasp.php?giamin=15000000&giamax=20000000">15 triệu-20 triệu</a>
         <a href="giasp.php?giamin=20000000&giamax=100000000">20triệu-100triệu</a>
      </div>
   </div>
</ul>