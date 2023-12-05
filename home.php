<body>
 
      
<nav style="    box-shadow:1px 1px 5px  #7e878d "  class="container-fluid navdrop  navbar-expand-lg navbar-light">
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
<div  style="margin-top:0px;" class="slider-container">
  <div class="slider">
  <div><img src="img/bn0.jpg" alt="Slide 2"></div>
 
    <div><img src="img/bannerto.jpg" alt="Slide 1"></div>
   
    <div><img src="img/bn1.webp" alt="Slide 3"></div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

<script>
  $(document).ready(function(){
    $('.slider').slick({
      autoplay: true,
      autoplaySpeed: 2500,
      dots: true,
      prevArrow: null, // Ẩn cả nút "prev"
      nextArrow: null, // Ẩn cả nút "next"
      slidesToShow: 1,
      slidesToScroll: 1,
      adaptiveHeight: true
    });
  });
</script>
  <!-- End SlidesJS Required: Start Slides -->

  <!-- SlidesJS Required: Link to jQuery -->
  
  
  <!-- End SlidesJS Required -->
  
  <div class="container-fuild ">
 
        <div class="right bg-white">
          <div class="shop ">
      <b></b><h1>Khám Phá Shop</h1> <b></b>
    
 
    </div>
       
    <div class="shop1 ">
      <div class="img"><a href=""><img src="img/happy-paws-03.png" alt=""></a></div>
      <div class="img"><a href=""><img src="img/happy-paws-04.png" alt=""></a></div>
      <div class="img"><a href=""><img src="img/happy-paws-05-05.png" alt=""></a></div>
    </div>
    
            <!-- Right column content outside the navbar-collapse -->
            <div class="p-3">
            <div class=" vinh">
      <h2 class="   H2Sp">Sản Phẩm Nổi bật</h2>
    </div>
    <div class="sanpham">
    <div class="row">
   
    <?php
                $i=0;
                    foreach($spnew as $sp){
                        extract($sp);
                        if(($i==2) ||($i==5) ||($i==8)){
                            $mr="";
                        }else{
                            $mr= "mr";

                        };
                        $linksp="index.php?act=sanphamct&idsp=".$id;
                        $hinh=$img_path.$img; 
echo '  <div  class="col-lg-3 col-md-4 col-sm-6 mt-2">
<div style="box-shadow: 1px 1px 8px   #acacac;"  class="card">
    <a href="'.$linksp.'"><img src='.$hinh.' class="card-img-top product-img" alt=""></a>
   
<div class="card-body">
<a href="'.$linksp.'" class="card-title">'.$name.'</a>
<p class="card-text">'.$price.' VND</p>
<div class="btn-group flex-wrap">
<button class="btn btn-secondary  m-1 rounded buy-now" data-product-id="1"><strong>Thêm vào giỏ Hàng</strong></button>
<div class="btnaddtocart mt">
<form action="index.php?act=addtocart" method="post">
<input type="hidden" name="id" value="'.$id.'">
<input type="hidden" name="name" value="'.$name.'">
<input type="hidden" name="img" value="'.$hinh.'">
<input type="hidden" name="price" value="'.$price.'">
<input type="hidden" name="quantity" value="1"> <!-- Đặt giá trị số lượng mặc định là 1 -->
<div class="btn-group flex-wrap">
<input class="btn btn-secondary m-1 rounded" type="submit" value="Mua ngay"  data-product-id="1" name="addtocart">
 
</div>
</form>
</div> 
</div>

        </div>
    </div>
</div>
';
                        $i+=1;
                        
                      }
                    
                        ?>
                        
                        <div class="right bg-white">
          <div class="shop mt-5 ">
      <b></b><input type="submit" value="Xem thêm >" > </input><b></b>
    
 
    </div>


                        
                        <!-- Repeat the above structure for more products -->

                    </div>
                </div>
            </div>
        </div>
    </div>
 

    <!-- Thêm sản phẩm khác vào đây -->

  </div>
</div>
<div class="container-fluid p-1">
  <div class="banner1">
  <a href=""><img src="img/baner1.jpg" alt=""></a>
</div>
</div>
</div>

<div class="container-fluid">

        <div class="right bg-white">
            <!-- Right column content outside the navbar-collapse -->
            <div class="p-3">
            <div class=" vinh">
      <h2 class="   H2Sp">Thức ăn cho chó</h2>
      
    </div>
                <div class="sanpham">
                    <div class="row">
                        <!-- Product Card 1 -->
                        <?php
                         $spid=load_sp_dm($id, $iddm);
                         foreach($spid as $spid){
                           extract($spid);
                           $linksp="index.php?act=sanphamct&idsp=".$id;
                           $img = $img_path.$img;
                        echo'  <div  class="col-lg-3 col-md-4 col-sm-6 mt-2">
                        <div style="box-shadow: 1px 1px 8px   #acacac;"  class="card">
                            <a href="'.$linksp.'"><img src="'.$img.'" class="card-img-top product-img" alt="..."></a>
                            <div class="card-body">
                                <a href="'.$linksp.'" class="card-title">'.$name.'</a>
                                <p class="card-text">'.$price.'</p>
                                
                                <div class="btn-group flex-wrap">
                    <button class="btn btn-secondary  m-1 rounded buy-now" data-product-id="1"><strong>Thêm vào giỏ Hàng</strong></button>
                    <div class="btnaddtocart2 mt">
                    <form action="index.php?act=addtocart" method="post">
                    <input type="hidden" name="id" value="'.$id.'">
                    <input type="hidden" name="name" value="'.$name.'">
                    <input type="hidden" name="img" value="'.$img.'">
                    <input type="hidden" name="price" value="'.$price.'">
                    <input type="hidden" name="quantity" value="1"> <!-- Đặt giá trị số lượng mặc định là 1 -->
                    <div class="btn-group flex-wrap">
                    <input class="btn btn-secondary m-1 rounded" type="submit" value="Mua ngay"  data-product-id="1" name="addtocart">
                     
                   </div>
                    </form>
                    </div> 
                   </div>
                   
                            </div>
                        </div>
                    </div>
                    ';
                 
             
                  
                  }
                        ?>
                        <!-- <div  class="col-lg-3 col-md-4 col-sm-6 mt-2">
                            <div style="box-shadow: 1px 1px 8px   #acacac;"  class="card">
                                <a href="sanpham.php"><img src="img/bn0.jpg" class="card-img-top product-img" alt="..."></a>
                                <div class="card-body">
                                    <a href="sanpham.php" class="card-title">Chó ssssscon</a>
                                    <p class="card-text">1.000.000 VND</p>
                                    <div class="btn-group flex-wrap">
                        <button class="btn btn-secondary  m-1 rounded buy-now" data-product-id="1"><strong>Mua Ngay</strong></button>
                          <button class="btn btn-secondary m-1 rounded"> <a style="  text-decoration: none;" href="sanpham.php"><strong>Chi tiết Sản phẩm</strong></a></button>  
                       </div>
                                </div>
                            </div>
                        </div>
                         -->

    <!-- Thêm sản phẩm khác vào đây -->

  </div>
  <div class="shop mt-5 ">
      <b></b><input type="submit" value="Xem thêm >" > </input><b></b>
    
 
    </div>
</div>
</div>

<div class="section">
 
  <div class="container-fluid">
   <div class="   vinh">
      <h2 class="   H2Sp">Giống chó thịnh hành</h2>
    </div>
    <div style=" box-shadow: 2px 2px 8px rgb(150, 143, 117); border-radius: 10px;" class=" mt-3 container ">
    <div class="direction">
      <button id="prev"> < </button>
      <button id="next"> > </button>
  </div>
    <div  id="formList">
       
  
      <div id="list">
      <?php
      $iddm=23;
                         $spio=load_sp_dm_23($id, $iddm);
                         foreach($spio as $spio){
                           extract($spio);
                           $linksp="index.php?act=sanphamct&idsp=".$id;
                           $img = $img_path.$img;
                           echo'<div class="item text-center flex-wrap">
            
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
                           </div>';}
                           ?>
          
      



    </div>
  </div>
  
</div>


</div>

    <script src="scroll.js"></script>
    
    <!-- Thêm vào phần cuối cùng của mã HTML -->
    <script>
      
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



</body>