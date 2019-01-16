<link rel="stylesheet" type="text/css" href="frontend/css/menu.css">
<style type="text/css">
	.noibat2 {
	color: #FE980F;
    font-family: 'Roboto', sans-serif;
    font-size: 20px;
    font-weight: 700;
    margin: 0 15px;
    text-transform: uppercase;
   /* margin-bottom: 30px;*/
    position: relative;
    text-align: center;
    top: 1050px;   
}
	.container_tot{
	margin: 100px auto 1rem;
	width: 100%;
	display: grid;
	grid-template-columns: repeat( auto-fit, minmax(300px, 1fr));  /*chia dạng lưới, auto co dãn theo màn hình*/
	grid-gap: 3rem;
	float: right;
}
.noibat2:before{
	content: "Sản Phẩm Chất Lượng";
    position: absolute;
    background: #fff;
    bottom: -6px;
    width: 300px;
    height: 30px;
    z-index: -1;
    left: 48%;
    margin-left: -110px;
}.noibat2:after{
	content: " ";
    position: absolute;
    border: 1px solid #f5f5f5;
    bottom: 7px;
    left: 0;
    width: 100%;
    height: 0;
    z-index: -2;
 
}
</style>
	<div class="noibat">          <!-- sản phẩm nổi bật -->
		<h1></h1>
	</div>

	<div class="container">                      
						<?php
								$conn = mysqli_connect('localhost', 'root', '', 'banhang') or die ('Không thể kết nối tới database');
                                    $query="SELECT * FROM hanghoa ORDER BY mshh ASC LIMIT 4 ";
                                    $run=mysqli_query($conn, $query);
                                    if(mysqli_num_rows($run)> 0) {
                                        while ($row=mysqli_fetch_array($run)) {
                                             $mshh = $row['mshh'];
                                             $tenhh= $row['tenhh'];
                                             $created  = $row['created'];
                                             $gia   = $row['gia'];
                                             $slhang = $row['soluonghang'];
                                             $ghichu = $row['ghichu'];
                                             $hinh = $row['hinh'];
                                             $CPU=$row['CPU'];

                                                          
                                 ?>
		<div class="card">
			<div class="img-box">
				
				<?php echo '<img style="width: 200px;" class="avatar" src="hinh/'.$hinh.' " alt="placeholder+image">
				<div class="TTIN">'?>
					<p style="text-align: center;"><?php echo $tenhh;?></p>
				
					<P style="text-align: center;"><?php echo $CPU; ?></P>
				</div>
				<div class="gia">
					<h1><?php echo number_format($gia).'&nbspVND'; ?></h1>
				</div>
				<br>
				<br>
			</div>

			<div class="content">
				<!-- <h1>Laptop Dell</h1> -->
				<ul class="shop">
					<?php echo '<li class="item"><a href="frontend/card2.php?id='.$mshh. '"><i class="fas fa-shopping-cart"></i></a></li>'?>
					<li class="item"><a href="frontend/card_chitiet.php?id=<?php echo $mshh; ?>"><i class="fas fa-search-plus"></i></a></li>

				</ul>
			</div>
		</div>
		                            <?php
                                    }
                                }else {
                                    echo 'Lỗi';
                                }
                            ?>
		

	</div>


	<div class="noibat1">
		<h1></h1>
	</div>
	

	<div class="container_moi">          <!-- sản phẩm mới -->            
	<?php
								$conn = mysqli_connect('localhost', 'root', '', 'banhang') or die ('Không thể kết nối tới database');
                                    $query="SELECT * FROM hanghoa ORDER BY created DESC LIMIT 4 ";
                                    $run=mysqli_query($conn, $query);
                                    if(mysqli_num_rows($run)> 0) {
                                        while ($row=mysqli_fetch_array($run)) {
                                             $mshh = $row['mshh'];
                                             $tenhh= $row['tenhh'];
                                             $created  = $row['created'];
                                             $gia   = $row['gia'];
                                             $slhang = $row['soluonghang'];
                                             $ghichu = $row['ghichu'];
                                             $hinh = $row['hinh'];
                                             $CPU=$row['CPU'];

                                                          
                                 ?>
		<div class="card">
			<div class="img-box">
				
				<?php echo '<img style="width: 200px;" class="avatar" src="hinh/'.$hinh.' " alt="placeholder+image">
				<div class="TTIN">'?>
					<p style=""><?php echo $tenhh;?></p>
				
					<P style=""><?php echo $CPU; ?></P>
				</div>
				<div class="gia">
					<h1><?php echo number_format($gia).'&nbspVND'; ?></h1>
				</div>
				<br>
				<br>
			</div>
			<div class="content">
				<!-- <h1>Laptop Dell</h1> -->
				<ul class="shop">
					<?php echo '<li class="item"><a href="card2.php?id='.$mshh. '"><i class="fas fa-shopping-cart"></i></a></li>'?>
					<li class="item"><a href="card_chitiet.php?id=<?php echo $mshh; ?>"><i class="fas fa-search-plus"></i></a></li>

				</ul>
			</div>
		</div>
		<?php
                                    }
                                }else {
                                    echo 'Lỗi';
                                }
                            ?>
		
		
	</div>




	<div class="noibat2">
		<h1></h1>
	</div>
	<div class="container_tot">          <!-- sản phẩm mới -->            
	<?php
								$conn = mysqli_connect('localhost', 'root', '', 'banhang') or die ('Không thể kết nối tới database');
                                    $query="SELECT * FROM hanghoa ORDER BY gia DESC LIMIT 4 ";
                                    $run=mysqli_query($conn, $query);
                                    if(mysqli_num_rows($run)> 0) {
                                        while ($row=mysqli_fetch_array($run)) {
                                             $mshh = $row['mshh'];
                                             $tenhh= $row['tenhh'];
                                             $created  = $row['created'];
                                             $gia   = $row['gia'];
                                             $slhang = $row['soluonghang'];
                                             $ghichu = $row['ghichu'];
                                             $hinh = $row['hinh'];
                                             $CPU=$row['CPU'];

                                                          
                                 ?>
		<div class="card">
			<div class="img-box">
				
				<?php echo '<img style="width: 200px;" class="avatar" src="hinh/'.$hinh.' " alt="placeholder+image">
				<div class="TTIN">'?>
					<p style=""><?php echo $tenhh;?></p>
				
					<P style=""><?php echo $CPU; ?></P>
				</div>
				<div class="gia">
					<h1><?php echo number_format($gia).'&nbspVND'; ?></h1>
				</div>
				<br>
				<br>
			</div>
			<div class="content">
				<!-- <h1>Laptop Dell</h1> -->
				<ul class="shop">
					<?php echo '<li class="item"><a href="card2.php?id='.$mshh. '"><i class="fas fa-shopping-cart"></i></a></li>'?>
					<li class="item"><a href="card_chitiet.php?id=<?php echo $mshh; ?>"><i class="fas fa-search-plus"></i></a></li>

				</ul>
			</div>
		</div>

		<?php
                                    }
                                }else {
                                    echo 'Lỗi';
                                }
                            ?>
		
	