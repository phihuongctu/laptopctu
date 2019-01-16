<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tìm Kiếm</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" type="text/css" href="frontend/css/home.css">
	<link rel="stylesheet" type="text/css" href="frontend/css/menu.css">
	<style type="text/css">
	       .noibat:before{
	   content: "";
	   position: absolute;
	   background: #fff;
	   bottom: -6px;
	   width: 250px;
	   height: 30px;
	   z-index: -1;
	   left: 48%;
	   margin-left: -110px;
	}
	</style>
</head>
<body>
	<?php 
		session_start();
		include('header.php') ;
	      include('menu.php');     
	?>
	<?php
	                             
	                                if (isset($_REQUEST['timkiem'])) {
	                                    $search= addslashes($_GET['search']);
	                                    
	                                        
	                                            $conn = mysqli_connect('localhost', 'root', '', 'banhang') or die ('Không thể kết nối tới database');
	                                            $query = "select * from hanghoa WHERE loaihang like '$search' OR RAM LIKE '$search' OR CPU LIKE '$search' OR tenhh LIKE '$search'";
	                                            $sql = mysqli_query($conn,$query);
	                                            $num = mysqli_num_rows($sql);
	    ?>
 <?php echo '<div class="noibat">' ?>

	    <?php
	        if ($num > 0 && $search != "") {     
	            echo '<h1>Có '.$num.' sản phẩm '.$search.'</h1>';
	        
	        ?>

	        <?php echo '</div> <div class="container">' ?>

	    <?php 
	                                    
	                                        
	                                        
	                                        while ($row = mysqli_fetch_assoc($sql)) {
	                                             $mshh = $row['mshh'];
	                                             $tenhh= $row['tenhh'];
	                                             $created  = $row['created'];
	                                             $gia   = $row['gia'];
	                                             $slhang = $row['soluonghang'];
	                                             $ghichu = $row['ghichu'];
	                                             $hinh = $row['hinh'];
	                                             $CPU=$row['CPU'];
	                                             $loaihang=['loaihang'];

	                                                          
	                                                        
	                                                                

	                                                       
	                                 ?>
		<div class="card">
			<div class="img-box">
				<?php echo '<img style="width: 200px;" class="avatar" src="../hinh/'.$hinh.' " alt="placeholder+image"><div class="TTIN">'?>
				<p style="text-align: center;"><?php echo $tenhh;?></p>
				<p style="text-align: center;"><?php echo $CPU; ?></p>
			</div>
			<div class="gia">
				<h1><?php echo number_format($gia).'&nbspVND'; ?></h1>
			</div>
			<br>
			<br>
		</div>
		<div class="content">
			<ul class="shop">
				<?php echo '<li class="item"><a href="card2.php?id='.$mshh. '">
				<i class="fas fa-shopping-cart"></i></a></li>'?>
				<li class="item">
					<a href="card_chitiet.php?id=<?php echo $mshh;?>"><i class="fas fa-search-plus"></i></a>
				</li>
			</ul>
		</div>
</div>
			<?php
	                            
	                                }
	                            }else {
	                                echo '<center><h1>Không tìm thấy sản phẩm <strong>'.$search.'</strong> nào</h1></center>';
	                            }
	                                        
	                                        
	                                        
	                    }           
	                                
	?>
	<script src="js/home.js">
	</script> 

<button onclick="topFunction()" id="myBtn" title="Go to top"><img src="../hinh/top.png" alt="placeholder+image"></button>

<script>

window.onscroll = function() {scrollFunction()};
      // khi roll xuống 300px sẽ hiện button
function scrollFunction() {
    if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}
    // lên top
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>
</body>
</html>