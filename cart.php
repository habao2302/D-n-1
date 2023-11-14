
  
  <title>Trang Giỏ Hàng</title>

  <style>
    /* Add your styles here */
   
    .cart-item {
      display: flex;
      justify-content: space-between;
      margin-bottom: 10px;
    }
    .product-image {
      max-width: 50px;
      max-height: 50px;
      object-fit: cover;
      margin-right: 10px;
    }
    .total-price {
      font-weight: bold;
    }
  </style>
</head>

<header> <?php include "header.php";?></header>
<body>

  <div style="margin-top:200px" class="container">
    <h2>Giỏ Hàng Của Bạn</h2>

    <!-- Danh sách sản phẩm trong giỏ hàng -->
    <div id="cart-items">
      <!-- Mỗi sản phẩm trong giỏ hàng được thêm vào đây -->
    </div>

    <!-- Tổng giá tiền -->
    <div class="total-price">
      <p>Tổng Giá Tiền: <span id="totalAmount">0</span> VND</p>
    </div>

    <!-- Nút thanh toán -->
    <button class="btn btn-primary" data-toggle="modal" data-target="#paymentModal">Thanh Toán</button>

    <!-- Modal thanh toán -->
    <div class="modal fade" id="paymentModal" tabindex="-1" aria-labelledby="paymentModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="paymentModalLabel">Chọn Phương Thức Thanh Toán và Nhập Địa Chỉ</h5>
            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form id="checkoutForm">
              <div class="form-group">
                <label for="paymentMethod">Phương Thức Thanh Toán:</label>
                <select class="form-control" id="paymentMethod" name="paymentMethod">
                  <option value="card">Thẻ Tín Dụng/Thẻ Ghi Nợ</option>
                  <option value="cash">Tiền Mặt</option>
                </select>
              </div>
              <div class="form-group">
                <label for="address">Địa Chỉ:</label>
                <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
            <button type="button" class="btn btn-primary" onclick="checkout()">Thanh Toán</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal xem thông tin sản phẩm -->
    <div class="modal fade" id="viewProductModal" tabindex="-1" aria-labelledby="viewProductModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="viewProductModalLabel">Thông Tin Sản Phẩm</h5>
            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body" id="productInfo">
            <!-- Nội dung thông tin sản phẩm được thêm vào đây -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    // Dữ liệu giỏ hàng (đây là ví dụ, bạn cần thay thế bằng dữ liệu thực tế của bạn)
    const cartItems = [
      { id: 1, name: 'Sản Phẩm 1', price: 100000, quantity: 2, image: 'path/to/image1.jpg' },
      { id: 2, name: 'Sản Phẩm 2', price: 150000, quantity: 1, image: 'path/to/image2.jpg' },
      // Thêm các sản phẩm khác nếu cần
    ];

    // Hiển thị sản phẩm trong giỏ hàng
    function displayCartItems() {
      const cartItemsContainer = document.getElementById('cart-items');
      cartItemsContainer.innerHTML = '';

      cartItems.forEach(item => {
        const cartItemElement = document.createElement('div');
        cartItemElement.className = 'cart-item';

        const productImage = document.createElement('img');
        productImage.src = item.image;
        productImage.alt = item.name;
        productImage.className = 'product-image';

        const productName = document.createElement('div');
        productName.textContent = item.name;

        const productQuantity = document.createElement('div');
        productQuantity.textContent = `Số Lượng: ${item.quantity}`;

        const productPrice = document.createElement('div');
        productPrice.textContent = `Giá: ${item.price} VND`;

        const viewProductButton = document.createElement('button');
        viewProductButton.textContent = 'Xem';
        viewProductButton.className = 'btn btn-info';
        viewProductButton.addEventListener('click', () => viewProduct(item));

        const deleteProductButton = document.createElement('button');
        deleteProductButton.textContent = 'Xóa';
        deleteProductButton.className = 'btn btn-danger';
        deleteProductButton.addEventListener('click', () => deleteProduct(item.id));

        cartItemElement.appendChild(productImage);
        cartItemElement.appendChild(productName);
        cartItemElement.appendChild(productQuantity);
        cartItemElement.appendChild(productPrice);
        cartItemElement.appendChild(viewProductButton);
        cartItemElement.appendChild(deleteProductButton);

        cartItemsContainer.appendChild(cartItemElement);
      });

      // Cập nhật tổng giá tiền
      updateTotalAmount();
    }

    // Cập nhật tổng giá tiền
    function updateTotalAmount() {
      const totalAmountElement = document.getElementById('totalAmount');
      const totalAmount = cartItems.reduce((total, item) => total + item.price * item.quantity, 0);
      totalAmountElement.textContent = totalAmount;
    }

    // Hiển thị modal xem thông tin sản phẩm
    function viewProduct(product) {
      const productInfoContainer = document.getElementById('productInfo');
      productInfoContainer.innerHTML = '';

      const productInfoTitle = document.createElement('h4');
      productInfoTitle.textContent = product.name;

      const productInfoImage = document.createElement('img');
      productInfoImage.src = product.image;
      productInfoImage.alt = product.name;
      productInfoImage.className = 'product-image';

      const productInfoQuantity = document.createElement('p');
      productInfoQuantity.textContent = `Số Lượng: ${product.quantity}`;

      const productInfoPrice = document.createElement('p');
      productInfoPrice.textContent = `Giá: ${product.price} VND`;

      productInfoContainer.appendChild(productInfoTitle);
      productInfoContainer.appendChild(productInfoImage);
      productInfoContainer.appendChild(productInfoQuantity);
      productInfoContainer.appendChild(productInfoPrice);

      $('#viewProductModal').modal({ backdrop: 'static', keyboard: false }).modal('show').css('z-index', '1050');
    }

    // Xóa sản phẩm khỏi giỏ hàng
    function deleteProduct(productId) {
      const index = cartItems.findIndex(item => item.id === productId);
      if (index !== -1) {
        cartItems.splice(index, 1);
        displayCartItems();
      }
    }

    // Xử lý sự kiện thanh toán
    function checkout() {
      const formData = new FormData(document.getElementById('checkoutForm'));
      const paymentMethod = formData.get('paymentMethod');
      const address = formData.get('address');

      // Kiểm tra xem đã nhập đủ thông tin hay chưa
      if (!paymentMethod || !address) {
        Swal.fire({
          icon: 'error',
          title: 'Lỗi',
          text: 'Vui lòng nhập đủ thông tin thanh toán và địa chỉ!',
        });
        return;
      }

      // Thực hiện các bước thanh toán ở đây, bao gồm cả địa chỉ

      // Hiển thị thông báo thanh toán thành công
      Swal.fire({
        icon: 'success',
        title: 'Thanh toán thành công!',
        text: `Cảm ơn bạn đã mua sắm! Phương thức thanh toán: ${paymentMethod}, Địa chỉ: ${address}`,
      });

      // Đóng modal
      $('#paymentModal').modal('hide');
    }

    // Hiển thị sản phẩm ban đầu khi trang được tải
    displayCartItems();

  </script>

</body>
<footer><?php include "footer.php";?></footer>


