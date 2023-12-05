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
  <head>
    <style>
        .formdk {
  max-width: 300px;
  margin: 0 auto;
}
.thongbao{
    font-size:20px;
    text-align: center;
}
    </style>
  </head>
<div style="margin-top:50px;" class="">

           <div class=" ">
           <div class="row mb ">
                <div class="boxtitle"><h2>ĐĂNG KÝ THÀNH VIÊN</div>
                <div class=" boxcontent formdk">
                    <form action="index.php?act=dangky" method="post">
                    <div class="form-group">
                        <label >Email:</label>
                        <input type="email" name ="email" class="form-control"><br>
                        <label >User:</label>
                        <input type="text" name="user" class="form-control"><br>
                        <label >Password:</label>
                        <input type="password" name="pass" class="form-control" ><br>
                      
                        <input type="submit" class="btn btn-primary" name="dangky" value= "Đăng ký" ><br><br>
                        <input type="reset" class="btn btn-info" name="Nhập lại" >
                    </div>
                    </form>
                   
                </div>
                <h2 class="thongbao">
                    <?php
                           if(isset($thongbao)&&($thongbao!="")){
                            echo $thongbao;
                           }
                    ?>
                    </h2>
            </div>
    
           </div>
          
