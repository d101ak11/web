<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/sanpham.css">
	<title>shoppe</title>
</head>
<body>
  <?php include ('header.php') ?>
  <div class="contenr">
  <div class="content__top">
           <a href="../index.html">Shopee</a>
           <span>></span>
           <a href="./content__sanPham.php">Thiết bị điện tử</a>
           <span>></span>
           <a href="#">Tai nghe</a>
   </div>
   <div class="content">
       <div class="content__left">
       <div id="one" class="img">
        <img src="../img/icon_nho/29.jpg" alt="">
      </div>
      <div id="two" class="img" style="display:none">
        <img src="../img/icon_nho/28.jpg">
      </div>
      <div id="there" class="img" style="display:none">
        <img src="../img/icon_nho/27.jpg" alt="">
      </div>
      <div id="4" class="img" style="display:none">
        <img src=".../img/icon_nho/26.jpg" alt="">
      </div>
      <div id="5" class="img" style="display:none">
        <img src=".../img/icon_nho/25.jpg" alt="">
      </div>
      <div class=" w3-black">
        <img src="../img/icon_nho/29.jpg" onclick="openCity('one')">
        <img src="../img/icon_nho/28.jpg" width="50px" height="50px" alt="" onclick="openCity('two')">
        <img src="../img/icon_nho/27.jpg" width="50px" height="50px" alt="" onclick="openCity('there')">
        <img src="../img/icon_nho/26.jpg" width="50px" height="50px" alt="" onclick="openCity('4')">
        <img src="../img/icon_nho/25.jpg" width="50px" height="50px" alt="" onclick="openCity('5')">
      </div>
       </div>
       <div class="content__right">
           <h3><span id = "yt">Yêu thích</span>Áo sweater nam nữ , áo hoodie form rộng tay dài</h3>
            <h1>₫239.000</h1>
             <p><span>Deal Sốc   </span>Mua để nhận quà</p>
            <p><span> Vận chuyển </span> Miễn phí vận chuyển cho đơn hàng trên ₫300.000</p> 
            <div class="buttom__right">
                <span>Só lượng</span> <input type="button" value="+">
                <input type="input" value="1" id="number">
                <input type="button" value="-" onclick="var()">
                <span>30 sản phẩm có sắn</span>
            </div>
            <div class="botton">
                <input type="button" value="Thêm vào giỏ hàng" class="hover">
                <input type="button" value="Mua ngay" id="now">
            </div>
            </div>
   </div>
   <?php include ('chi_tiet.php') ?>
   <?php include 'comment.php' ?>
   <?php include 'sanphamtuongtu.php' ?>
    <?php include ('footer.php') ?>
  <script src="../js/main.js"></script>
</body>
</html>