<?php
   session_start();
   ?><?php
   $conn = mysqli_connect('localhost', 'root', '', 'banhang') or die ('Không thể kết nối tới database');
   mysqli_set_charset($conn, 'UTF8');
   $query="SELECT * FROM hanghoa ORDER BY mshh ASC LIMIT 4 ";
                                    $run=mysqli_query($conn, $query);
                                    if(mysqli_num_rows($run)> 0) {
                                        while ($row=mysqli_fetch_array($run)) {
                                             $mshh = $row['mshh'];
                                             

       if(isset($_POST['login']))
       {   
           
           $username=$_POST['username'];
           $pass = mysqli_real_escape_string($conn, $_POST['pass']);
           // $pass=md5($pass);
           
           if($username && $pass){
                 
                 $sql="select * from user where username='".$username."' and pass='".$pass."'";
                 $query = mysqli_query($conn,$sql);
                 $result = mysqli_num_rows($query);
                 if($result == 0)
                 {
                  echo "<center><h3>Bạn đã nhập sai Username hoặc password</h3></center>";
                  header('Refresh:2; url=login.php');
                 }
                 else //đăng nhap thanh công
                 {
                 $row=$query->fetch_object();
                   session_start();
                   $_SESSION['username'] = $row->username;
                   $_SESSION['status'] = $row->status;
                   if($row->status==1){
                       echo "<center><h3>Xin chào Admin. Đang chuyển đến trang quản trị...</h3></center>";
                       header('Location:../admin/layout/nhanvien/danhsach.php');
                   }
                   else{
                       header("Location:home.php");
                   }
                   
                 
                 }
   
           }
       }
   }
                                          }

       
           
   
           
        
   
   ?>