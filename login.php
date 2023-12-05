<header>
    <?php
    include "header.php";
    ?>
</header>
<head>
    <style>
        /* CSS cho form */
.formtaikhoan {
    max-width: 300px;
    margin: 0 auto;
}

.formtaikhoan label {
    display: block;
    margin-bottom: 5px;
}

.formtaikhoan input[type="text"],
.formtaikhoan input[type="password"] {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    box-sizing: border-box;
}

.formtaikhoan input[type="checkbox"] {
    margin-bottom: 10px;
}



/* CSS cho thông báo */
.thongbao {
    color: red;
    text-align: center;
    margin-top: 50px;
}

    </style>
</head>
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
<div style="margin-top:50px" class="row mb ">
                <div class="boxtitle"><h1>Đăng nhập</h1></div>
                <div class="boxcontent formtaikhoan">
                  
                    <form action="index.php?act=dangnhap" method="post">
                        <label for="">Tên Đăng nhập</label>
                        <input type="text" name="user"><br><br>
                        <label for="">Mật khẩu</label>
                        <input type="password" name="pass"><br>
                        <input type="checkbox" name="" id="">Ghi nhớ tài khoản? <br>
                        <input type="submit" class="" name="dangnhap" value="Đăng nhập"></input>
                    </form>
                    <li><a href="#">Quên Mật khẩu</a></li>
                    <li><a href="index.php?act=dangky">Đăng kí thành viên</a></li>

                  
                </div>
                <h2 class="thongbao">
                    <?php
                           if(isset($thongbao1)&&($thongbao1!="")){
                            echo $thongbao1;
                           }
                    ?>
                    </h2>
            </div>
               
            <?php
            include "footer.php"
            ?>
            <!--   <div class="boxcontent formtaikhoan">
           