

    

<nav style="margin-top:0px;   box-shadow:1px 1px 5px  #7e878d "  class="container-fluid navdrop  navbar-expand-lg navbar-light">
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
<div class="row ">
<div class="mb">
        <div class="boxtrai mr">
           <div class="row mb ">
                <div class="boxtitle"></div>
                <div class=" boxcontent" style="text-align:center">
                    <h2>
                        Cảm ơn quý khách đã đặt hàng!
                    </h2>
                </div>
            </div>
                    <?php
                    if(isset($bill)&&(is_array($bill))){
                        extract($bill);
                    }
                    ?>
                    <div class="row mb">
                        <div class="boxtitle">MÃ ĐƠN HÀNG</div>
                        <div class="boxcontent" >
                            <h2>
                                LOC-<?=$bill['id'];?>
                            </h2>
                        </div>
                    </div>

                    <div class="row mb">
                        <div class="boxtitle">THÔNG TIN ĐẶT HÀNG</div>
                        <div class="boxcontent" >
                        <table >
                
                    <tr>
                        <td>Người đặt hàng</td>
                        <td><?=$bill['bill_name']?></td>
                    </tr>
                    <tr>
                        <td>Địa chỉ</td>
                        <td><?=$bill['bill_address']?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><?=$bill['bill_email']?></td>
                    </tr>
                    <tr>
                        <td>Số điện thoại</td>
                        <td><?=$bill['bill_tel']?></td>
                    </tr>

                 
                  
                </table>


                        </div>
                    </div>
                
                    
                </div>
            </div>
            
            <div style='margin-top:100px;' class="row mb margin-top:200px; ">
                <div class="boxtitle">CHI TIẾT GIỎ HÀNG</div>
                <div class=" boxcontent cart">
                    
                <table class="table table-hover">
                <thead> 
                
                    </thead>   
                    <body>
                     <?php
                             bill_chi_tiet($billct);
                    
                     ?>
                     </body>
                </table>
                </div>
            </div>

                </div>

         
</div>
