<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <link rel="stylesheet" href="css/style.css">
 
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

  <title>Shop thú cưng</title>

</head>
<style>
    .card-text {
            font-size: 18px;
            color: #007bff;
            font-weight: bold;
        }
      .product-img {
            height: 200px; /* Adjust the height as needed */
            object-fit: cover;
        }
 
 

.zalo-container{
  position: fixed;
  bottom: 20px;
 left: 15px;
  display: flex;
  flex-direction: column;
  animation: bounce 1s infinite alternate;
  z-index: 1000;
}

.zalo-icon {
  width: 50px; /* Điều chỉnh kích thước của biểu tượng Zalo */
  margin-top: 20px;

}

@keyframes bounce {
  to {
    transform: translateY(-10px);
  }
}

   .dropdown-submenu {
  position: relative;
 
}

.dropdown-submenu a::after {
  transform: rotate(-90deg);
  position: absolute;
  right: 6px;
  top: .8em;
  
}
@media screen and (max-width: 1066px){
.navbar-nav{
  display: none;
}

.navbar-toggler :hover+ .navbar-nav{
  display: block;
}
}

.dropdown-submenu .dropdown-menu {
  top: 0;
  left: 100%;
  margin-left: .1rem;
  margin-right: .1rem;
  
}
    .input-group {
      width: 50%;
      box-shadow: 3px 3px 8px #2e2e2d;
     border-radius: 6px;
     
    }
    .navbar-nav .nav-link{
    text-decoration: none;
    transition: 0.3s;
    margin-bottom: 0.2rem;
    margin-left: 20px;
    font-size: 1.25rem ;
    padding-bottom: 0.2rem;
    
    font-family: Verdana, Geneva, Tahoma, sans-serif;
   }
   .navbar-nav .nav-link:hover{
   
 
  
   }
   .collapse{
   
   }
   .navbar-collapse{

    display: flex;
    justify-content: space-between;
   }
 .navbar-expand-lg{
  padding: 11px;
 }
 .slider-container {
      width: 100%;
      margin: auto;
      overflow: hidden;
     
    }

    .slick-slide img {
      width: 100%;
      height: 400px; /* Điều chỉnh chiều cao của slide tại đây */
      border-radius: 8px;
      
    }

    .slick-prev,
    .slick-next {
      font-size: 24px;
      color: #fff;
      background-color: #007bff;
      border: none;
      border-radius: 50%;
      padding: 10px;
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      cursor: pointer;
    }

    .slick-prev {
      left: 10px;
    }

    .slick-next {
      right: 10px;
    }
</style>

<header>
<!-- <div style="box-shadow: 1px 1px 3px #070707;"  class="container-fluid   text-dark ">
<div style="border-bottom: 1px #f7f4f4 solid; " class=" head">
  <div>
    Email hỗ trợ: 
    <a href="">shop@gmail...</a>
  
  </div>
  <div>
Thoát
  </div>
</div> -->




</div>
<div style=" " class="container-fluid bg-secondary   text-white text-center">
<div class="container header   text-center">  
  <div style="    filter: drop-shadow(0.5px 5px 0.1em #000000 );" class="img">
   <a href=""> <img src="img/Tlogo.png" alt="logo" height="120px" ></a>
  </div>
 
  <div class="input-group">
  <input type="text" class="form-control" placeholder="Bạn đang tìm gì">
  <div class="input-group-btn rounded-end">
    <button class="btn btn-dark" type="submit">
      <i class="fas fa-search p-1"> </i>
    </button>
  </div>
</div>

      
  
   
    <div style="text-shadow: 2px 1px 8px #111111;" class="iconhd">
      <a style="text-decoration: none;" class="p-1 " href="login.php"><i style="font-size: 20px;" class="  p-1 fas fa-user ">
      
      </i>Đăng nhập</a>
      <a style="text-decoration: none;" class="p-1" href="cart.php"><i style="font-size: 20px;" class="  p-1 fas fa-shopping-cart">
      
      </i> Giỏ hàng</a>
      <a style="text-decoration: none;" class="p-1 " href=""><i style="font-size: 20px;" class="  p-1 fa fa-cog fa-spin">
      
      </i> Cài đặt</a>
     
        </div>
      </div>
</div>


</div>

  
      
<nav style="    box-shadow:1px 1px 5px  #7e878d "  class=" navbar-expand-lg navbar-light bg-light">
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
</div>
<div class="modal fade" id="cartModal" tabindex="-1" aria-labelledby="cartModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="cartModalLabel">Giỏ hàng của bạn
          <div id="cart-count-container">
    <span id="cart-count">0</span>
</div>
          </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
       
      <!-- Thêm vào phần modal-body để hiển thị số lượng sản phẩm -->
<div class="modal-body">
  <ul>
    <li>Sản phẩm 1 (Số lượng: <span id="cart-quantity">0</span>)</li>
    <!-- Add more items as needed -->
  </ul>
</div>

          <ul>
            <li>Sản phẩm 1</li>
            <li>Sản phẩm 2</li>
            <!-- Add more items as needed -->
          </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
          <button type="button" class="btn btn-primary">Thanh toán</button>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <!-- Include Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    // Add an event listener to the shopping cart icon
    document.querySelector('.fa-shopping-cart').addEventListener('click', function () {
      // Show the cart modal when the icon is clicked
      var myModal = new bootstrap.Modal(document.getElementById('cartModal'));
      myModal.show();
    });
  </script>
</header>


<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
  <!-- End SlidesJS Required -->

  <!-- SlidesJS Required: Link to jquery.slides.js -->
  <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/139719/jquery.slides.min.js"></script>
  <!-- End SlidesJS Required -->

   <!-- SlidesJS Required: Initialize SlidesJS with a jQuery doc ready -->
  <script>
    $(function() {
      $('#slides').slidesjs({
        width: 940,
        height: 528,
        navigation: false,
        play: { auto: true,interval: 6000, },
    effect: {
      slide: {speed: 1500},
      fade: { speed: 300, },
            }
      });
    });
  </script>
   <div class="zalo-container">
    <a href=""><img src="img/zalo_icon.png" alt="Zalo Icon" class="zalo-icon"></a>
    <a href=""> <img src="img/face_icon.png" alt="face Icon" class="zalo-icon"></a>
    
  </div>
  