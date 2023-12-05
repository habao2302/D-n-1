
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: auto;
            display: flex;
            justify-content: space-between;
        }

        .boxtrai {
            width: 48%; /* Adjusted width */
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            margin-right: 10px; /* Adjusted margin */
        }

        .boxphai {
            width: 48%; /* Adjusted width */
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
        }

        .boxtitle {
           
            color:  #d1963d;
            padding: 10px;
            border-radius: 5px 5px 0 0;
        }

        .boxcontent {
            padding: 20px;
        }

        .tttv table {
            width: 100%;
        }

        .tttv td {
            padding: 10px;
        }

        .tttv input[type="text"] {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            margin-top: 5px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .tttv input[type="submit"] {
            background-color: #d1963d;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .tttv input[type="submit"]:hover {
            background-color: #d1963d;
        }

        .mr {
            margin-right: 0;
        }

        .mb {
            margin-bottom: 20px;
        }

        .bill table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .bill th,
        .bill td {
            padding: 15px;
            border: 1px solid #ddd;
            text-align: left;
        }

        .bill th {
            background-color: #333;
            color: white;
        }

        .bill input[type="submit"] {
            background-color: #d1963d;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 20px;
        }

        .bill input[type="submit"]:hover {
            background-color: #d1963d;
        }
    </style>
</head>


    

<nav style="margin-top:px;   box-shadow:1px 1px 5px  #7e878d "  class="container-fluid navdrop  navbar-expand-lg navbar-light">
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


    <div style='margin-top:20px;' class="container ">
        <div class="boxtrai">
            <form action="index.php?act=billcomfirm" method="post">
                <div class="row mb ">
                    <div class="boxtitle">
                        <h3>THÔNG TIN ĐẶT HÀNG</h3>
                    </div>
                    <div class="boxcontent tttv">
                        <table class="table table-hover">
                            <?php
                            if (isset($_SESSION['user'])) {
                                $name = $_SESSION['user']['user'];
                                $address = $_SESSION['user']['address'];
                                $email = $_SESSION['user']['email'];
                                $tel = isset($_SESSION['user']['tel']) ? $_SESSION['user']['tel'] : "";
                            } else {
                                $name = "";
                                $address = "";
                                $email = "";
                                $tel = "";
                            }
                            ?>
                            <tr>
                                <td>Người đặt hàng</td>
                                <td><input type="text" name="name" value="<?= $name ?>"></td>
                            </tr>
                            <tr>
                                <td>Địa chỉ</td>
                                <td><input type="text" name="address" value="<?= $address ?>"></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td><input type="text" name="email" value="<?= $email ?>"></td>
                            </tr>
                            <tr>
                                <td>Số điện thoại</td>
                                <td><input type="text" name="tel" value="<?= $tel ?>"></td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div class="row mb  ">
                    <div class="boxtitle"><h3>PHƯƠNG THỨC THANH TOÁN</div>
                    <div class="boxcontent bill">
                        <table>
                            <tr>
                                <td><input type="radio" name="pttt" checked>Trả tiền khi nhận hàng</td>
                                <td></td>
                                <td><input type="radio" name="pttt">Thanh toán bằng tài khoản ngân hàng</td>
                            </tr>
                        </table>
                    </div>
                </div>
           
        </div>

        <div class="boxphai">
            <div class="row mb ">
                <div class="boxtitle"><h3>THÔNG TIN GIỎ HÀNG</div>
                <div class="boxcontent cart">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <?php
                                $totalAmount = 0;
                                foreach ($_SESSION['mycart'] as $index => $cartItem) {
                                    echo '<tr class="cart_item clearfix">';
                                    echo '<td class="cart_item_image"><img src="' . $cartItem[2] . '" alt=""></td>';
                                    echo '<td class="cart_item_info">';
                                    echo '<div class="cart_item_text">' . $cartItem[1] . '</div>';
                                    echo '</td>';
                                    echo '<td class="cart_item_info">';
                                    $price = str_replace(['VND', ',', ' '], '', $cartItem[3]);
                                    $price = floatval($price);
                                    echo '<div class="cart_item_text" id="price_' . $index . '" data-price="' . $price . '">' . (is_numeric($price) ? number_format($price * $cartItem[4]) . '₫' : 'Giá không hợp lệ') . '</div>';
                                    echo '</td>';
                                    echo '<td class="cart_item_info">';
                                    echo '<div class="cart_item_text">';
                                    echo '<span id="quantity_' . $index . '">' . $cartItem[4] . '</span>';
                                    echo '</div>';
                                    echo '</td>';
                                    echo '<td class="cart_item_info">';
                                    echo '</td>';
                                    echo '</tr>';
                                    $totalAmount += is_numeric($cartItem[3]) && is_numeric($cartItem[4]) ? $cartItem[3] * $cartItem[4] : 0;
                                }
                                echo '<tr>';
                                echo '<th></th>';
                                echo '<th>Tổng tiền:</th>';
                                echo '<th></th>';
                                echo '<th>  <strong>' . $totalAmount . ' ₫  </strong></th>';
                                echo '<th></th>';
                                echo '<th></th>';
                                echo '</tr>';
                                ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // Additional content if needed for the right column
                            ?>
                        </tbody>
                        
                    </table>
                </div>
                <div class="mb bill margin-top:200px;">
    <input type="submit" name="dongydathang" value="ĐỒNG Ý ĐẶT HÀNG">
</div>

</form>
            </div>
            
        </div>
    </div>

