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

      
<nav style=" margin-top:-20px ;   box-shadow:1px 1px 5px  #7e878d "  class="container-fluid navdrop  navbar-expand-lg navbar-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="  collapse navbar-collapse" id="navbarTogglerDemo01">
      
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Trang chủ <span class="sr-only"></span></a>
        </li>
      
        <li class="nav-item">
          <a class="nav-link" href="sanphamnav.php">Mua Sắm</a>
        </li>
      
      
     <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dịch vụ
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Cún </a></li>
            <li><a class="dropdown-item" href="#">Áo quần cho cún</a></li>
            <li><a class="dropdown-item" href="#">Đồ chơi cho cún</a></li>
            <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Các đồ vật khác cho cún</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Thuốc</a></li>
                <li><a class="dropdown-item" href="#">Khăn </a></li>
  
  
           
  
  
              </ul>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Giới thiệu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="#">Thông tin</a>
        </li>
      </ul>
    
    </div>


    
  </nav>
  <?php
                extract($onesp);
            ?>
            <?php
            $img = $img_path.$img;
            echo ' <div class="flex-box">
            <div class="left">
                <div class="big-img">
                    <img src="'.$img.'">
                </div>
                </div>'

            ?>
    <!-- <div class="flex-box">
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
        </div> -->

        <div class="right">
            
            <?php 
            echo'
            
            <div class="pname">'.$name.'</div>
            <div class="ratings">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            
            <div class="price"> <strong style="font-size:20px">'.$price.' VNĐ</strong></div>
            <div class="size">
                <p>Size :</p>
                <div class="psize active">M</div>
                <div class="psize">L</div>
                <div class="psize">XL</div>
                <div class="psize">XXL</div>
            </div>
            
            <Strong>Mô tả:</Strong>
            <p style="width:40rem;">'.$mota.'</p>
            '
            
            
            
            ?>
           
            <div class="quantity">
                <p>Số lượng :</p>
                <div class="quantity-input">
  <button class="quantity-btn" onclick="decreaseQuantity()">-</button>
  <input name="quantity" id="quantity" type="text" value="1" readonly>
  <button class="quantity-btn" onclick="increaseQuantity()">+</button>
</div>
            </div>
            <div class="btn-box">
            <?php
           echo '<div class="btn-group flex-wrap">
           <button class="btn btn-secondary  m-1 rounded buy-now" data-product-id="1"><strong>Thêm vào giỏ Hàng</strong></button>
           <div class="btnaddtocart2 mt">
           <form action="index.php?act=addtocart" method="post">
           <input type="hidden" name="id" value="'.$id.'">
           <input class="card-title" type="hidden" name="name" value="'.$name.'">
           <input type="hidden" name="img" value="'.$img.'">
           <input type="hidden" name="price" value="'.$price.'">
           <input type="hidden" name="quantity" value="1"> <!-- Đặt giá trị số lượng mặc định là 1 -->
           <div class="btn-group flex-wrap">
           <input class="btn btn-secondary m-1 rounded" type="submit" value="Mua ngay"  data-product-id="1" name="addtocart">
            
           </div>
           </form>
           </div> 
           </div>';
          ?>

            </div>
        </div>
        
    </div>
    <div class=" container mt-5 comment"><h1>Đánh giá sản phẩm</h1>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script>
            $(document).ready(function()
            {
               $("#binhluan").load("view/binhluan/binhluanform.php",{idpro:<?=$id?>});
            });

        </script>
        <div class="" id="binhluan">
                           
        </div>



</div>
</div>

    <script>
      function decreaseQuantity() {
    var quantityInput = document.getElementById('quantity');
    var currentQuantity = parseInt(quantityInput.value);
    if (currentQuantity > 1) {
      quantityInput.value = currentQuantity - 1;
    }
  }

  function increaseQuantity() {
    var quantityInput = document.getElementById('quantity');
    var currentQuantity = parseInt(quantityInput.value);
    quantityInput.value = currentQuantity + 1;
  }
        let bigImg = document.querySelector('.big-img img');
        function showImg(pic){
            bigImg.src = pic;
        }
    </script>




<section>
    <div class="section">
 
 <div class="container-fluid">
  <div class="   vinh">
     <h2 class="   H2Sp">Sản Phẩm liên quan</h2>
   </div>
    
   <div style=" box-shadow: 2px 2px 8px rgb(150, 143, 117); border-radius: 10px;" class=" mt-3 container ">
    <div class="direction">
      <button id="prev"> < </button>
      <button id="next"> > </button>
  </div>
    <div  id="formList">
       
  
      <div id="list">
      <?php
                foreach($sp_cung_loai as $sp_cung_loai){
                    extract($sp_cung_loai);
                    $linksp="index.php?act=sanphamct&idsp=".$id;
                    $img = $img_path.$img;
                    echo'
                 
                    <div class="item text-center flex-wrap">
            
                    <a href="'.$linksp.'"> <img src="'.$img.'" class="avatar">   </a>   
                        <div class="content">
                            <table width="100%" cellspacing="0">
                                <tr>
                                    <td>Tên</td>
                                    <td>'.$name.'</td>
                                </tr>
                                <tr>
                                    <td>Giá</td>
                                    <td>'.$price.'</td>
                                </tr>
                              
                            
                            </table><br>
                    
                            <a href="'.$linksp.'"> <button   class=" btn btn-secondary" ><strong>Xem chi tiết</strong></button></a>
                            </div>
                        </div>
                    
                    ';
                    }
                ?>
      
         



    </div>
  </div>
  
</div>
</div>
   
  <script >
    var cartItems = []; // Array to store products in the cart

// Function to update the cart count on the icon and in the modal
function updateCartCount() {
  var totalCount = 0;
  for (var i = 0; i < cartItems.length; i++) {
    totalCount += cartItems[i].quantity;
  }
  $('#cart-count').text(totalCount); // Update cart icon count
  $('#cart-quantity').text(totalCount); // Update modal count
}

// Function to show toastr notification
function showNotification(productName) {
  toastr.success('Thêm "' + productName.trim() + '" vào giỏ hàng thành công!', 'Thông báo', {
    closeButton: true,
    progressBar: true,
    positionClass: 'toast-top-right'
  });
}

// Event listener for "Mua Ngay" button
$(document).on('click', '.buy-now', function () {
  var productId = $(this).data('product-id');
  var existingItem = cartItems.find(item => item.productId === productId);

  if (existingItem) {
    existingItem.quantity += 1;
  } else {
    cartItems.push({ productId: productId, quantity: 1 });
  }

  updateCartCount(); // Update cart count

  // Customized notification message
  var productName = $(this).closest('.card').find('.card-title').text();
  showNotification(productName);

  // You might want to replace the notification with a more user-friendly UI, like a toast or a modal.
});
  </script>
</section>





   </div>
 </div>
</div>
</body>
