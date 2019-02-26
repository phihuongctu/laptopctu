<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laptop Anywhere</title>

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link rel="stylesheet" type="text/css" href="css/menu.css">
	<link rel="stylesheet" type="text/css" href="css/back_top.css">

	
<style type="text/css">
	.item_l1 img{
  margin-top: -17px;
  margin-left: -70px !important;
}


#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 10px !important;
  border: none;
  outline: none;
  background-color: purple;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 10px;
  box-shadow: 1px 3px 5px 0px rgba(0, 0, 0, 0.3);
  opacity: 0.85;

}

#myBtn:hover {
  background-color: #555;
}
</style>
        

	
	
    
</head>
<body>
		
		<?php 
		session_start();
		include('header.php') ?>	
		<?php include('menu.php') ?>	

										<!-- menu -->


		
		<?php include('content.php') ?>					<!-- container -->	
			
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
<script src="js/home.js"></script>
	

	
</body>

</html>
