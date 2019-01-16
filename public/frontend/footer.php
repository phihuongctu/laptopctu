
<style type="text/css">
	.footer_chinh {
    position: absolute;
    padding: 44px 0 61px 0;
    background-color: grey;
    bottom: 0px;
    top: 1800px;
    height: 400px;
    width: 100%;

}
.dieuhuong{
	float: left;
	padding: 0px 40px 0px;
	list-style: none;
	width: 250px;
}
.dieuhuong1{
	float: left;
	padding: 0px 150px 0px;
	list-style: none;
	width: 650px;
	left: 200px;
}
.dieuhuong1 .ten{
	float: left;
	margin-top: -40px;
	margin-left: 100px;
	cursor: pointer;
}
.dieuhuong ul li{
	list-style: none;
}
.dieuhuong1 ul li{
	list-style: none;
}
.dieuhuong3 ul li{
	list-style: none;
}
.dieuhuong3{
	float: left;
	list-style: none;
	width: 400px;
	margin-right : 0px;
}
.ten{
	float: left;
}
</style>
			<footer>
				
				
				<div class="footer_chinh clearfix">
					
					
					<div class="dieuhuong">
						<div class="-title clearfix">
							<b><img width="220px;" height="120px;" src="../hinh/logo.jpg"></b>
							<b><p>Website bán laptop</p></b>
						</div>
						
						<ul>
							
							<li><a href="home.php">Trang chủ</a></li>
							<li><a href="https://www.facebook.com/phihuong.tu">Contact &amp; Info</a></li>
						</ul>
					
					
					</div>
					
					<div class="dieuhuong1">
						<div class="-title clearfix">
							<b>Sản Phẩm Mới</b>
						</div>
						<br>
						<ul>
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
							<li>
								<a href="card_chitiet.php?id=<?php echo $mshh; ?>"><?php echo '<img style="width: 70px;" class="avatar" src="../hinh/'.$hinh.' " alt="placeholder+image">'?>		
								</a>
								<a href="card_chitiet.php?id=<?php echo $mshh; ?>" class="ten"><?php echo $tenhh;?></a>
							</li>
							<br>
							 <?php
                                    }
                                }else {
                                    echo 'Lỗi';
                                }
                            ?>
						</ul>
					
					</div>


					
					<div class="dieuhuong3">
						
						<ul>
								<p><b>Để đăng ký nhận sản phẩm mới, hãy nhập Email</b></p>
								<p>Thông tin cá nhân của quý khách luôn được giữ kín</p>
							<li>
								
								<form>
									<input name="subscribe" type="email" placeholder="Hãy nhập địa chỉ email của bạn" />
									<button type="submit">Gửi</button>
								</form>
							</li>
							<hr>

							<li>
								<a href="https://www.facebook.com/phihuong.tu"><i class="fab fa-facebook" style="color: white;font-size: 25px;"> Facebook</i></a>
							</li>
							<li>
								<a href="https://www.instagram.com/phi_huong/?hl=en"><i class="fab fa-instagram" style="color: white;font-size: 25px;"> Intagram</i></a>
							</li>							
							<li>
								<a href="https://www.youtube.com/channel/UC6EC0OLQBdjCr8McNfhimNA/featured?view_as=subscriber"><i class="fab fa-youtube" style="color: white;font-size: 25px;"> Youtube</i></a>
							</li>
							<li>
								<a href="https://www.youtube.com/channel/UC6EC0OLQBdjCr8McNfhimNA/featured?view_as=subscriber"><i class="fab fa-twitter" style="color: white;font-size: 25px;"> Twitter</i></a>
							</li>
							
						</ul>
					
					</div>
				</div>
				
			</footer>
			

