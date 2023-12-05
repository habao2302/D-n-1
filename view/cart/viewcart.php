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
<div class="container-fluid ">
    <div class="listcart">
        <div class="giohang">
            <h3>GIỎ HÀNG</h3>
            <table>
                <thead>
               
                </thead>
                <tbody>
                    
                <?php
                
$totalAmount = 0; // Khởi tạo tổng tiền
// Lặp qua các sản phẩm trong giỏ hàng và hiển thị thông tin của chúng
foreach ($_SESSION['mycart'] as $index => $cartItem) {
    echo '<tr class="cart_item clearfix">';
    echo '<td class="cart_item_image"><img src="' . $cartItem[2] . '" alt=""></td>';
    echo '<td class="cart_item_info">';
    echo '<div class="cart_item_title">Tên sản phẩm</div>';
    echo '<div class="cart_item_text">' . $cartItem[1] . '</div>';
    echo '</td>';
    echo '<td class="cart_item_info">';
    echo '<div class="cart_item_title">Giá</div>';
    /// Thay đổi cách hiển thị giá sản phẩm
$price = str_replace(['VND', ',', ' '], '', $cartItem[3]); // Loại bỏ ký tự 'VND', dấu phẩy và khoảng trắng
$price = floatval($price); // Chuyển giá thành kiểu số (float)

// ... Đoạn mã PHP khác

// Hiển thị tổng tiền đã tính
echo '<div class="cart_item_text" id="price_' . $index . '" data-price="' . $price . '">' . (is_numeric($price) ? number_format($price * $cartItem[4]) . '₫' : 'Giá không hợp lệ') . '</div>';
    echo '</td>';
    echo '<td class="cart_item_info">';
    echo '<div class="cart_item_title">Số lượng</div>';
    echo '<div class="cart_item_text">';
    // Thêm nút tăng giảm số lượng
    echo '<button onclick="decreaseQuantity(' . $index . ')">-</button>';
    echo '<span id="quantity_' . $index . '">' . $cartItem[4] . '</span>';
    echo '<button onclick="increaseQuantity(' . $index . ')">+</button>';
    echo '</div>';
    echo '</td>';
    echo '<td class="cart_item_info">';
    echo '<a href="index.php?act=delcart&idcart=' . $index . '"><input type="button" value="XÓA"></a>';
    echo '</td>';
    echo '</tr>';

    // Tính tổng tiền cho từng sản phẩm
    // Tính tổng tiền cho từng sản phẩm
$totalAmount += is_numeric($cartItem[3]) && is_numeric($cartItem[4]) ? $cartItem[3] * $cartItem[4] : 0;

}
?>
                </tbody>
            </table>
        </div>
        <div class="ttdh">
            <h4 class="ttdt_heading">Thông tin đơn hàng</h4>
            <!-- Phần tổng tiền và thông tin vận chuyển -->
            <table>
                <tbody>
                    <!-- Dòng thông tin tổng tiền -->
                    <tr  class="ttdt_tien">
                        <td class="ttdt_tt">Tổng tiền:
                        <td class="ttdh_gia">
                            <?php
                            // Hiển thị tổng tiền đã tính
                            echo '<strong> '.$totalAmount. ' ₫  </strong>';
                            ?>
                        </td>
                    </tr>
                    <!-- Dòng thông tin vận chuyển và mã giảm giá -->
                    <tr>
                        <td colspan="2">
                            <p class="ttdt_p">.<br>
                         
                        </td>
                    </tr>
                    <!-- Button tiếp tục đặt hàng -->
                    <tr>
                        <td colspan="2">
                            <a href="index.php?act=bill"><input class="ttdt_btn" type="button" value="TIẾP TỤC ĐẶT HÀNG"></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
   
</div>
</body>
<script>
 function updateCartItemPrice(index, newQuantity) {
        var priceElement = document.getElementById('price_' + index);
        var price = parseFloat(priceElement.dataset.price); // Lấy giá sản phẩm từ data attribute
        var updatedPrice = price * newQuantity;

        // Kiểm tra xem giá có phải là số không
        if (!isNaN(updatedPrice)) {
            // Sử dụng toLocaleString để định dạng giá theo ngôn ngữ và đơn vị tiền tệ
            var formattedPrice = updatedPrice.toLocaleString('it-IT', { style: 'currency', currency: 'VND' });

            // Giữ chữ "VND" sau giá
            priceElement.innerText = formattedPrice;

            // Cập nhật tổng tiền sau mỗi lần thay đổi số lượng
            updateTotal();
        }
        // Nếu giá không phải là số, bạn có thể xử lý theo cách phù hợp với ứng dụng của bạn
    }

    function updateTotal() {
        var totalAmount = 0;
        // Tính tổng tiền từ các sản phẩm trong giỏ hàng
        var cartItems = document.querySelectorAll('.cart_item');
        cartItems.forEach(function (item) {
            var price = parseFloat(item.querySelector('.cart_item_info:nth-child(3) .cart_item_text').dataset.price);
            var quantity = parseInt(item.querySelector('.cart_item_info:nth-child(4) .cart_item_text span').innerText);
            totalAmount += price * quantity;
        });

        var formattedTotal = totalAmount.toLocaleString('it-IT', { style: 'currency', currency: 'VND' });
        document.querySelector('.ttdh_gia').innerText = formattedTotal;
    }

    function increaseQuantity(index) {
        var quantityElement = document.getElementById('quantity_' + index);
        var currentQuantity = parseInt(quantityElement.innerText);
        quantityElement.innerText = currentQuantity + 1;

        // Thêm dòng này để giữ nguyên vị trí của giá tiền khi tăng số lượng
        updateCartItemPrice(index, currentQuantity + 1);

        // Cập nhật tổng tiền ngay khi tăng số lượng
        updateTotal();
    }

    function decreaseQuantity(index) {
        var quantityElement = document.getElementById('quantity_' + index);
        var currentQuantity = parseInt(quantityElement.innerText);
        if (currentQuantity > 1) {
            quantityElement.innerText = currentQuantity - 1;

            // Thêm dòng này để giữ nguyên vị trí của giá tiền khi giảm số lượng
            updateCartItemPrice(index, currentQuantity - 1);

            // Cập nhật tổng tiền ngay khi giảm số lượng
            updateTotal();
        }
    }
</script>







