<div class="kkkkkk">
    <div class="sanpham padding-80">
        <div class="title">Giỏ hàng của bạn</div>
    <div class="row">
        <div class="viewcart padding-80">
            <div class="roww">
        <div class="cartleft">
        <table class="table table-borderless">
    <thead>
      <tr>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
      </tr>
    </thead>
    <tbody>
        <?php
        global $img_path;
        $tong=0;
        $i=0;
        foreach($_SESSION['mycart'] as $cart){

           $hinh=$img_path.$cart[2];
           $ttien=intval($cart[3])*$cart[4];
           $tong+=$ttien;
      echo '<tr>
        <td><img src="'.$hinh.'" width=100px height=100px alt="" srcset=""></td>
        <td><h3>'.$cart[1].'</h3>
             <p>'.$cart[3].'</p>
             <div class="buttons_added">
            <input class="minus is-form" type="button" value="-">
            <input aria-label="quantity" class="input-qty" max="10" min="1" name="" type="number" value="1">
            <input class="plus is-form" type="button" value="+">
          </div>
             
        </td>
        <td class="right">
            <i class="fa-solid fa-xmark"></i>
            <p>'.$cart[4].'</p>
        </td>
        
      </tr>';
      $i+=1;
        }
      ?>
    </tbody>
  </table>
            <hr>
        </div>
        <div class="cartright">
            <div class="trongcart">
            <h4>Thông tin đơn hàng</h4>
            <hr>
            <div class="total">
                <p class="total_tt">Tổng tiền:</p>
                <span class="total_price">147000</span>
            </div>
            <hr>
            <div class="total_text">
                <p>Phí vận chuyển sẽ được tính ở trang thanh toán. <br>
                Bạn cũng có thể nhập mã giảm giá ở trang thanh toán.</p>
            </div>
            <div class="custom-buttonnn left">
                <input type="submit" name="dangky" value= "Thanh toán" ><span class="thanhtoan">THANH TOÁN</span>
            </div>
            <div class="quaylai">
            <a class="btnhomee" href="index.php"><i class="fa-solid fa-left-long"></i>Tiếp tục mua hàng</a>
            </div>
            </div>

        </div>
        </div>
 
        </div>
    
    </div>
    </div>
    <script>//<![CDATA[
$('input.input-qty').each(function() {
  var $this = $(this),
    qty = $this.parent().find('.is-form'),
    min = Number($this.attr('min')),
    max = Number($this.attr('max'))
  if (min == 0) {
    var d = 0
  } else d = min
  $(qty).on('click', function() {
    if ($(this).hasClass('minus')) {
      if (d > min) d += -1
    } else if ($(this).hasClass('plus')) {
      var x = Number($this.val()) + 1
      if (x <= max) d += 1
    }
    $this.attr('value', d).val(d)
  })
})
//]]></script>