<!DOCTYPE HTML>
<html lang="vi">
    <title>Chi Tiết Sản Phẩm</title>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="stylesheet" type="text/css" href="css/reset.css"/>
    
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <link rel="stylesheet" type="text/css" href="css/menu.css">
    <style type="text/css">
.proDha .yctv {
    background: #fafafa none repeat scroll 0 0;
    border: 1px solid #f1f1f1;
    color: #777777;
    cursor: pointer;
    float: left;
    font-size: 5px;
    font-weight: bold;
    height: 71px;
    line-height: 51px;
    margin-left: 10px;
    text-align: center;
    width: 212px;
}
.right_roduct_hd {
    clear: both;
    height: 300px;
}
.right_roduct_hd .btDah, .right_roduct_hd .yctv {
    background: #ef4679 none repeat scroll 0 0;
    color: #fff;
    cursor: pointer;
    clear: both;
    height: 70px;
    margin-top: 5px;
    padding: 7px 6px 12px;
    text-align: center;
}
.right_roduct_hd .phone_product {
    background: #f87062 none repeat scroll 0 0;
    clear: both;
    color: #fff;
    cursor: pointer;
    font-size: 16px;
    font-weight: bold;
    height: 70px;
    line-height: 32px;
    margin-top: 5px;
    padding: 7px 6px 12px;
    text-align: center;
}
.pr_det_price {
    float: left;
    line-height: 120px;
    margin-top: 10px;
    padding-bottom: 5px;
}
.pr_det_price .price {
    float: left;
    margin-top: 50px;
    font-size: 40px;
}
.goituvan {
    clear: both;
    font-size: 14px;
    padding-top: 6px;
    text-align: left;
    width: 200px;
}
.hotro {
    clear: both;
    display: table;
    height: 10px;
    margin-top: 6px;
    width: 100px;
    text-align: center;
    margin-left: 200px;
}
.menu_t {
    top: 0px;
    position: fixed;
    background-color: grey;
    width: 100%;
    z-index: 1;
    height: 50px;
}
.item_l1 {
    float: left;
    cursor: pointer;
    list-style-type: none;
    padding: 2px 50px 0;
    margin-top: 10px;
}
.item_l {
    margin-top: 10px !important;
    float: left;
    cursor: pointer;
    list-style-type: none;
    padding: 2px 50px 0;
    height: 50px;
}
.item_r {
    float: right;
    cursor: pointer;
    list-style-type: none;
    right: 10px;
    padding: 2px 10px 0px;
    margin-top: 10px;
}
section.product_d .images_d img {
    width: 350px;
    /*height: auto !important;*/
    margin-top: 100px;
    height: 300px !important;
}
section.product_d .images_d {
    float: left;
    max-height: none !important;
    overflow: hidden;
    text-align: center;
    width: 356px;
}


    </style>
    
<?php

    $prd = 0;
    if(!empty($_SESSION['cart'])) $prd = count($_SESSION['cart']);
?>
<body>
    
<?php

        include_once('header.php');
        $conn = mysqli_connect('localhost', 'root', '', 'banhang') or die ('Không thể kết nối tới database');
        mysqli_set_charset($conn, 'UTF8');
        
?>


 <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.2&appId=127050114536145&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>

<div class="navigation">
    <div class="blackRum">
        	<span class="home1">
            	<a href="index.php">Trang chủ</a>
                 ›
            </span>
        <span class="home1">
            	<?php
                $conn = mysqli_connect('localhost', 'root', '', 'banhang') or die ('Không thể kết nối tới database');
                $id = $_GET['id'];
                $sanpham_query ="SELECT * FROM hanghoa where mshh=".$id;
                mysqli_set_charset($conn, 'UTF8');
                $sanpham_res = mysqli_query($conn,$sanpham_query) or die("Không chọn được bảng dữ liệu!");
                while ($sanpham_items = mysqli_fetch_array($sanpham_res))
                {
                    echo '<a href="loaisp.php?idsp='.$sanpham_items["loaihang"].'">'.$sanpham_items["loaihang"].'</a>';

                

                echo '›';
                ?>
            
            </span>
       

        
            
        <span class="tittleRum">
            	<?php
                echo ''.$sanpham_items["tenhh"].'';
                }
                ?>
            </span>
    </div>
</div> 
<br>
<section class="product_d content_ld">
    <div class="detailP">
        <aside class="images_d">
            <div class="images_d_list owl-carousel owl-theme" style="opacity: 1; display: block;">
                <div class="owl-wrapper-outer">
                    <div class="owl-wrapper" style="width: 712px; left: 0px; display: block; transition: all 1000ms ease; transform: translate3d(0px, 0px, 0px);">
                        <div class="owl-item" style="width: 356px;">
                            <?php
                            $id = $_GET['id'];
                            
                            $sanpham_query ="SELECT * FROM hanghoa where mshh=$id";
                            $sanpham_res = mysqli_query($conn,$sanpham_query) or die("Không chọn được bảng dữ liệu!");
                            mysqli_set_charset($conn, 'UTF8');
                            while ($sanpham_items = mysqli_fetch_array($sanpham_res))
                            {
                                
                            echo'<img src="../hinh/'.$sanpham_items["hinh"].'">';

                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
        <aside class="desProduct">
            <h1 class="proFtiter">
                <?php
                echo $sanpham_items["tenhh"];

                ?>
                <hr>
            </h1>
            <div class="proFtiter">
                <?php
                echo 'RAM: ';
                echo "<span>".$sanpham_items['RAM']."</span>";

                ?>
            </div>
            <div class="proFtiter">
                <?php
                echo 'CPU: ';
                echo "<span>".$sanpham_items['CPU']."</span>";

                ?>
            </div>
            <div class="proFtiter">
                <?php
                echo 'Màn Hình: ';
                echo "<span>".$sanpham_items['manhinh']."</span>";

                ?>
            </div>

            

             
            <div class="pr_det_price ">
                <span class="tittle">Giá bán:</span>
                <div class="price">
                    <?php
                    echo "".number_format($sanpham_items['gia'])." VNĐ";
                    }
                    ?>
                </div>
            </div>
            <div class="pro_dg">
                <div class="pro_dg_tt">
                    <div class="pro_dg_tt">
                        <div class='ratings'>
                            <div class='rating-box'>
                            </div>
                        </div>
                    </div>
                </div>
                <a target="_blank" href="http://www.facebook.com/sharer.php?u=http://localhost:8080/webbanhang/chitiet.php?id=<?php echo $mshh; ?>" class="fb shareFa"></a>
                <a target="_blank" href="http://twitter.com/share?url=http://localhost:8080/webbanhang/chitiet.php?id=<?php echo $mshh; ?>" class="tw shareFa"></a>
                <a target="_blank" href="https://plus.google.com/share?url=http://sanphammtlpro.16mb.com/san-pham/page-chitiet.php?id=<?php echo $mshh; ?>" class="gg shareFa"></a>
            </div>
            <div class="proDha">
                <div class="btDah">
                    <?php echo '<span class="bttOp"><a href="card2.php?id='.$id.'">Mua Ngay</a></span>'?>
                    
                </div>

        
            </div>
            <div class="goituvan">
                <i class="icon"></i>GỌI TƯ VẤN
                <span>01697367647</span>
            </div>
            
        </aside>
        <aside class="ckProduct">
            <div class="titile">
                CAM KẾT KHI MUA HÀNG

            </div>
            <div class="deCk deCkTtct">
                <span class="icon"></span>
                <span class="ttCK">Nhận hàng trong vòng <b>12 giờ</b> tại Hà Nội và <b>48 giờ</b> tại các tỉnh thành khác (Thanh toán Tiền mặt)</span>
            </div>
            <div class="deCk deCkGhMpTq">
                <span class="icon"></span>
                <span class="ttCK">Giao hàng miễn phí trên toàn Quốc</span>
            </div>

            <div class="deCk deCkHln">
                <span class="icon"></span>
                <span class="ttCK">Xem hàng tại nhà hài lòng mới thanh toán</span>
            </div>
            <div class="deCk deCkHlndt">
                <span class="icon"></span>
                <span class="ttCK">Được đổi trả trong vòng 7 ngày (Xem chính sách đổi trả)</span><!--end ttCK-->
            </div>

            <div class="deCk deCkTlnq">
                <span class="icon"></span>
                <span class="ttCK">Tích lũy nhận quà - Mua ngay kẻo lỡ</span>
            </div>
        </aside>
    </div>
    <div class="clear10px"></div>
    <div class="metaproduct">
    <aside class="product">
        <article>
            <?php
            $id = $_GET['id'];
            $sanpham_query ="SELECT * FROM hanghoa where mshh=".$id;
            $sanpham_res = mysqli_query($conn,$sanpham_query) or die("Cannot select table!");
            mysqli_set_charset($conn, 'UTF8');
            while ($sanpham_items = mysqli_fetch_array($sanpham_res))
            {
                echo '<h2 style="text-align: center;" class="uppercaseh2"><strong><span style="font-size:20px">'.$sanpham_items['tenhh'].'</span></strong></h2>';
                echo $sanpham_items["ghichu"];
            }
            ?>
        </article>
        
        <div class="rightDetailHA">
            <b class="cmt">BÌNH LUẬN</b>
            <div class="fb-comments" data-href="page-chitiet.php?id=<?php echo $mshh; ?>" data-width="100%" data-numposts="6">
            <div class="fb-comments" data-href="https://www.facebook.com/permalink.php?story_fbid=513568175773719&amp;id=383978545399350&amp;comment_tracking=%7B%22tn%22%3A%22O%22%7D" data-numposts="5"></div>
            </div>
        </div>
    </aside>
    <aside class="productEdit">
        <div class="pright_product_pos">
            <div class="right_roduct_hd">
                <div class="btDah">
                    <span class="bttOp">ĐẶT HÀNG NHANH GIAO HÀNG NGAY</span>
                    
                </div>
                <div class="yctv">
                    <span class="bttOp">YÊU CẦU CHUYÊN GIA TƯ VẤN </span>
                    
                </div>
                <div class="phone_product">
                    01697367647
                </div>
                <a href="#" target="_blank" class="detRight_ban_bt">
                    <img src=""/>
                </a>
            </div>
        </div>

    </aside>
    </div>
</section>
<script src="js/home.js"></script>
        <?php include('footer.php') ?>
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
