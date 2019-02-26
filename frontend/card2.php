<!DOCTYPE html>
<html lang="vi">
<head>
  <title>Giỏ Hàng Của Bạn</title>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/reset.css" rel="stylesheet" type="text/css">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="css/owl.carousel.min.css" rel="stylesheet">
    <link href="css/owl.theme.default.min.css" rel="stylesheet">
    <link href="css/home.css" rel="stylesheet" type="text/css">
    <link href="css/menu.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/back_top.css">
    <style type="text/css">
      #myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: purple;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 10px;

}

#myBtn:hover {
  background-color: #555;
}
      
      .item_l1 img{
      
     width: 150px;
     height: 55px; 
}     

       .cart_oder_1 ul li {
           float: left;
           padding-right: 10px;
           padding-left: 10px;
           padding-top: 0px;
           list-style:none;
           text-align: center;
       }
       .cart_oder_1 ul li.sl_cart {
       width: 233px;
       text-align: center;
       }
       .bottom_cart .capnhatCartTxt {
       border: 1px solid #ddd;
       height: 20px;
       line-height: 20px;
       margin-top: 17px;
       text-align: left;
       width: 100px;
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
    li img {
       float: left;
       width: 60px;
       height: 60px;
    }
    </style>
</head>
<?php
        
        session_start();
        $prd = 0;
        if(!empty($_SESSION['cart'])) 
            $prd = count($_SESSION['cart']);
        if (isset($_GET['id']) && $_GET['id'] != NULL) {
            $id = $_GET['id'];
            $prd = NULL;
            if (!empty($_SESSION['cart'][$id])) {
                $prd = $_SESSION['cart'][$id] + 1;
            } else {
                $prd = 1;
                echo "Bạn chưa chọn sản phẩm";
            }
            $_SESSION['cart'][$id] = $prd;
            
        }
        else{echo "Lỗi";
        }

        $prd = 0;
            if(!empty($_SESSION['cart'])) 
            $prd = count($_SESSION['cart']);
        ?>
<body>
    <?php
            include('header.php');
            $conn = mysqli_connect('localhost', 'root', '', 'banhang') or die ('Không thể kết nối tới database');
            
            ?>
    <div class="navigation"></div>
    <form method="post">
        <div class="main-shopping">
            <p class="cart_info"><?php 
                    if($_SESSION['cart'] != NULL) 

                      {
                        echo "Thông tin chi tiết giỏ hàng!";

                    }else{
                        echo"Hiện tại bạn chưa có sản phẩm nào!";
                    } ?></p>
            <div class="cart_oder_1">
                <ul class="table_cart">
                    <li class="sp_cart">SẢN PHẨM</li>
                    <li class="dg_cart">ĐƠN GIÁ</li>
                    <li class="sl_cart">SỐ LƯỢNG</li>
                    <li class="tt_cart">THÀNH TIỀN</li>
                </ul><?php
                    $sum_all = 0;
                    $sum_sp = 0;
                    if($_SESSION['cart'] != NULL)
                    {
                        foreach($_SESSION['cart'] as $id =>$prd)
                        {   
                            
                            $arr_id[] = $id;

                        }
                        $str_id = implode(',',$arr_id);
                        $id = implode($arr_id);

                        $item_query = "SELECT * FROM  hanghoa WHERE mshh IN ($str_id) ORDER BY mshh ASC";
                        $item_result = mysqli_query($conn,$item_query) or die ('Cannot select table!');

                        while ($rows = mysqli_fetch_array($item_result))
                        {
                            ?>
                            <!-- Hiển thị card -->
                <ul class="bottom_cart">
                    <li class="sp_cart">
                        <img src="../hinh/<?php echo $rows['hinh'];?>"> <b class="Cart_title_pro"><?php echo $rows['tenhh']; ?></b>
                        <div class="delete_Cart" style="text-align: center;font-size: 15px;">
                            <a class="del_sp" href="xoa_card.php?id=<?php echo $rows['mshh'];?>">Xóa</a>
                        </div>
                    </li>
                    <li class="dg_cart"><?php echo number_format($rows['gia']); ?>VNĐ</li>
                    <li class="sl_cart"><input class="capnhatCartTxt" name="num[&lt;?php echo $rows['mshh']; ?&gt;]" size="3" type="text" value="<?php echo $_SESSION['cart'][$rows['mshh']]; ?>"></li>
                    <li class="tt_cart"><?php echo number_format($rows['gia'] * $_SESSION['cart'][$rows['mshh']]); ?>VNĐ</li>
                </ul>
                <?php
                            $sltungsp[]=$_SESSION['cart'][$rows['mshh']];
                            $sum_sp += $_SESSION['cart'][$rows['mshh']];
                            $sum_all += $rows['gia']*$_SESSION['cart'][$rows['mshh']];
                        }

                        echo '</div>

                            <div class="bottom_button">
                            <p class="update_cart">
                                <input type="submit" name="update_cart" value="Cập nhật giỏ hàng" class="cap_nhat_cart"/>
                                    <a href="thanhtoan.php?tonggia='.$sum_all.'&sl='.$sum_sp.'&idsp1='.$str_id.'"class="dat_hang" style="display:block;">Thanh toán</a>

                                
                            </p>

                            <p class="sum_money">Tổng sản phẩm:<strong class="sum_sp"> '.$sum_sp.'</strong><br/>Tổng tiền:<strong class="sum_sp"> '.number_format($sum_all).' VNĐ</strong></p>
                            <a href="home.php" class="back_page"> Tiếp tục mua hàng</a>
                            <a href="xoa_card.php?id=0" class="delete_all">Xóa giỏ hàng</a>
                            </div>
                                    <div class="clear10px"></div> ';
                                }

                                                                ?>
                                    
            </div>
        </div>
    </form>
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