<div class="right col-sm-9 bg-white">
                <!-- Right column content outside the navbar-collapse -->
                <div class="p-3">
                 <h2>Sản phẩm  </h2>
                 <div class="sanpham">
                    <div class="row">
                        <!-- Product Card 1 -->
                        <div  class=" col-md-4  mt-2">
                            <div style="box-shadow: 1px 1px 8px   #acacac;"  class="card">
                                <a href="sanpham.php"><img src="img/bn1.jpg" class="card-img-top product-img" alt="..."></a>
                               <!-- Trong phần mã HTML của sản phẩm -->
                           <div class="card-body">
                         <a href="sanpham.php" class="card-title">Chó con</a>
                    <p class="card-text">1.000.000 VND</p>
                  <div class="btn-group flex-wrap">
                        <button class="btn btn-secondary  m-1 rounded buy-now" data-product-id="1"><strong>Mua Ngay</strong></button>
                          <button class="btn btn-secondary m-1 rounded"> <a style="  text-decoration: none;" href="sanpham.php"><strong>Chi tiết Sản phẩm</strong></a></button>  
                       </div>
                     </div>

                            </div>
                        </div>

                        <!-- Product Card 2 -->
                        <div  class=" col-md-4  mt-2">
                            <div style="box-shadow: 1px 1px 8px   #acacac;"  class="card">
                                <a href="sanpham.php"><img src="img/bn1.jpg" class="card-img-top product-img" alt="..."></a>
                               <!-- Trong phần mã HTML của sản phẩm -->
                           <div class="card-body">
                         <a href="sanpham.php" class="card-title">Chó con</a>
                    <p class="card-text">1.000.000 VND</p>
                  <div class="btn-group flex-wrap">
                        <button class="btn btn-secondary  m-1 rounded buy-now" data-product-id="1"><strong>Mua Ngay</strong></button>
                          <button class="btn btn-secondary m-1 rounded"> <a style="  text-decoration: none;" href="sanpham.php"><strong>Chi tiết Sản phẩm</strong></a></button>  
                       </div>
                     </div>

                            </div>
                        </div>
                        <div  class=" col-md-4  mt-2">
                            <div style="box-shadow: 1px 1px 8px   #acacac;"  class="card">
                                <a href="sanpham.php"><img src="img/bn1.jpg" class="card-img-top product-img" alt="..."></a>
                               <!-- Trong phần mã HTML của sản phẩm -->
                           <div class="card-body">
                         <a href="sanpham.php" class="card-title">Chó con</a>
                    <p class="card-text">1.000.000 VND</p>
                  <div class="btn-group flex-wrap">
                        <button class="btn btn-secondary  m-1 rounded buy-now" data-product-id="1"><strong>Mua Ngay</strong></button>
                          <button class="btn btn-secondary m-1 rounded"> <a style="  text-decoration: none;" href="sanpham.php"><strong>Chi tiết Sản phẩm</strong></a></button>  
                       </div>
                     </div>

                            </div>
                        </div>
                        <div  class=" col-md-4  mt-2">
                            <div style="box-shadow: 1px 1px 8px   #acacac;"  class="card">
                                <a href="sanpham.php"><img src="img/bn1.jpg" class="card-img-top product-img" alt="..."></a>
                               <!-- Trong phần mã HTML của sản phẩm -->
                           <div class="card-body">
                         <a href="sanpham.php" class="card-title">Chó con</a>
                    <p class="card-text">1.000.000 VND</p>
                  <div class="btn-group flex-wrap">
                        <button class="btn btn-secondary  m-1 rounded buy-now" data-product-id="1"><strong>Mua Ngay</strong></button>
                          <button class="btn btn-secondary m-1 rounded"> <a style="  text-decoration: none;" href="sanpham.php"><strong>Chi tiết Sản phẩm</strong></a></button>  
                       </div>
                     </div>

                            </div>
                        </div>
                        <div  class=" col-md-4  mt-2">
                            <div style="box-shadow: 1px 1px 8px   #acacac;"  class="card">
                                <a href="sanpham.php"><img src="img/bn1.jpg" class="card-img-top product-img" alt="..."></a>
                               <!-- Trong phần mã HTML của sản phẩm -->
                           <div class="card-body">
                         <a href="sanpham.php" class="card-title">Chó con</a>
                    <p class="card-text">1.000.000 VND</p>
                  <div class="btn-group flex-wrap">
                        <button class="btn btn-secondary  m-1 rounded buy-now" data-product-id="1"><strong>Mua Ngay</strong></button>
                          <button class="btn btn-secondary m-1 rounded"> <a style="  text-decoration: none;" href="sanpham.php"><strong>Chi tiết Sản phẩm</strong></a></button>  
                       </div>
                     </div>

                            </div>
                        </div>
                        <div  class=" col-md-4  mt-2">
                            <div style="box-shadow: 1px 1px 8px   #acacac;"  class="card">
                                <a href="sanpham.php"><img src="img/bn1.jpg" class="card-img-top product-img" alt="..."></a>
                               <!-- Trong phần mã HTML của sản phẩm -->
                           <div class="card-body">
                         <a href="sanpham.php" class="card-title">Chó con</a>
                    <p class="card-text">1.000.000 VND</p>
                  <div class="btn-group flex-wrap">
                        <button class="btn btn-secondary  m-1 rounded buy-now" data-product-id="1"><strong>Mua Ngay</strong></button>
                          <button class="btn btn-secondary m-1 rounded"> <a style="  text-decoration: none;" href="sanpham.php"><strong>Chi tiết Sản phẩm</strong></a></button>  
                       </div>
                     </div>

                            </div>
                        </div>
                        


                        <!-- Add more product cards as needed -->
                    </div>
                </div>

                </div>
            </div>
        </div>
    </div>
</body>
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
<footer>
    <?php
    include "footer.php";
    ?>
</footer>
</html>