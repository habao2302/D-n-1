<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details Page</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<header>
<?php
include "header.php";
?>
</header>
<body>


    <div class="flex-box">
        <div class="left">
            <div class="big-img">
                <img src="img/a1.jpeg">
            </div>
            <div class="images">
                <div class="small-img">
                    <img src="img/a2.jpeg" onclick="showImg(this.src)">
                </div>
                <div class="small-img">
                    <img src="img/a3.jpeg" onclick="showImg(this.src)">
                </div>
                <div class="small-img">
                    <img src="img/a4.jpeg" onclick="showImg(this.src)">
                </div>
                <div class="small-img">
                    <img src="img/a5.jpeg" onclick="showImg(this.src)">
                </div>
            </div>
        </div>

        <div class="right">
            <div class="url">Home > Product > Dog</div>
            <div class="pname">Dog pet</div>
            <div class="ratings">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price">$40</div>
            <div class="size">
                <p>Size :</p>
                <div class="psize active">M</div>
                <div class="psize">L</div>
                <div class="psize">XL</div>
                <div class="psize">XXL</div>
            </div>
            <div class="quantity">
                <p>Quantity :</p>
                <input type="number" min="1" max="5" value="1">
            </div>
            <div class="btn-box">
                <button class="cart-btn">Add to Cart</button>
                <button class="buy-btn">Buy Now</button>
            </div>
        </div>
        
    </div>
    <div class=" container mt-5 comment"><h1>Đánh giá sản phẩm</h1>
<div class="m-4  usercmt">
<div style="   width:max-content;" class="user1 m-3  ">
    <i class="fas fa-user">  </i>Name user1
    <li style=" padding-2px;  margin-left:5px; border-bottom:0.1rem solid black">
   Con này sống dai
    </li>
</div>
<div style="   width:max-content;" class="user1 m-3  ">
    <i class="fas fa-user">  </i>Name user1
    <li style=" padding-2px;  margin-left:5px; border-bottom:0.1rem solid black">
   Con này sống dai
    </li>
</div>
<div style="   width:max-content;" class="user1 m-3  ">
    <i class="fas fa-user">  </i>Name user1
    <li style=" padding-2px;  margin-left:5px; border-bottom:0.1rem solid black">
   Con này sống dai
    </li>
</div>





</div>
</div>

    <script>
        let bigImg = document.querySelector('.big-img img');
        function showImg(pic){
            bigImg.src = pic;
        }
    </script>





    <div class="section">
 
 <div class="container-fluid">
  <div class="   vinh">
     <h2 class="   H2Sp">Sản Phẩm liên quan</h2>
   </div>
    
     <div style="box-shadow: 2px 2px 8px black; border-radius: 10px;" class=" mt-3 container ">
   <div  id="formList">
       <div class="direction">
       <button id="prev"> < </button>
       <button id="next"> > </button>
   </div>
 
     <div id="list">
     
         <div class="item text-center">
           <a href="#">
             <img src="img/anh-cho1.jpg" class="avatar">     </a>
             <div class="content">
                 <table width="100%" cellspacing="0">
                     <tr>
                         <td>Tên</td>
                         <td>Bully</td>
                     </tr>
                     <tr>
                         <td>Giá</td>
                         <td>2.000.000</td>
                     </tr>
                     <tr>
                         <td>Tuổi</td>
                         <td>5 tháng</td>
                     </tr>
                 
                 </table><br>
                 <button   class="  btn btn-secondary" >Xem chi tiết</button>
             </div>
         </div>
      
         <div class="item text-center">
           <a href="#">
             <img src="img/anh-cho1.jpg" class="avatar">     </a>
             <div class="content">
                 <table width="100%" cellspacing="0">
                     <tr>
                         <td>Tên</td>
                         <td>Bully</td>
                     </tr>
                     <tr>
                         <td>Giá</td>
                         <td>2.000.000</td>
                     </tr>
                     <tr>
                         <td>Tuổi</td>
                         <td>5 tháng</td>
                     </tr>
                 
                 </table><br>
                 <button   class="  btn btn-secondary" >Xem chi tiết</button>
             </div>
         </div>
         <div class="item text-center">
           <a href="#">
             <img src="img/anh-cho1.jpg" class="avatar">     </a>
             <div class="content">
                 <table width="100%" cellspacing="0">
                     <tr>
                         <td>Tên</td>
                         <td>Bully</td>
                     </tr>
                     <tr>
                         <td>Giá</td>
                         <td>2.000.000</td>
                     </tr>
                     <tr>
                         <td>Tuổi</td>
                         <td>5 tháng</td>
                     </tr>
                 
                 </table><br>
                 <button   class="  btn btn-secondary" >Xem chi tiết</button>
             </div>
         </div>
         <div class="item text-center">
           <a href="#">
             <img src="img/anh-cho1.jpg" class="avatar">     </a>
             <div class="content">
                 <table width="100%" cellspacing="0">
                     <tr>
                         <td>Tên</td>
                         <td>Bully</td>
                     </tr>
                     <tr>
                         <td>Giá</td>
                         <td>2.000.000</td>
                     </tr>
                     <tr>
                         <td>Tuổi</td>
                         <td>5 tháng</td>
                     </tr>
                 
                 </table><br>
                 <button   class="  btn btn-secondary" >Xem chi tiết</button>
             </div>
         </div>
         <div class="item text-center">
           <a href="#">
             <img src="img/anh-cho1.jpg" class="avatar">     </a>
             <div class="content">
                 <table width="100%" cellspacing="0">
                     <tr>
                         <td>Tên</td>
                         <td>Bully</td>
                     </tr>
                     <tr>
                         <td>Giá</td>
                         <td>2.000.000</td>
                     </tr>
                     <tr>
                         <td>Tuổi</td>
                         <td>5 tháng</td>
                     </tr>
                 
                 </table><br>
                 <button   class="  btn btn-secondary" >Xem chi tiết</button>
             </div>
         </div>
         <div class="item text-center">
           <a href="#">
             <img src="img/anh-cho1.jpg" class="avatar">     </a>
             <div class="content">
                 <table width="100%" cellspacing="0">
                     <tr>
                         <td>Tên</td>
                         <td>Bully</td>
                     </tr>
                     <tr>
                         <td>Giá</td>
                         <td>2.000.000</td>
                     </tr>
                     <tr>
                         <td>Tuổi</td>
                         <td>5 tháng</td>
                     </tr>
                 
                 </table><br>
                 <button   class="  btn btn-secondary" >Xem chi tiết</button>
             </div>
         </div>
     </div>
   
 </div>

 






   </div>
 </div>
</div>
</body>
<footer>
 <?php 
 include "footer.php";
 ?>
</footer>
</html>