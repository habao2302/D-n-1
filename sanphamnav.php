
<header> <?php include "header.php";?></header>
<div style="" class="container-fluid p-0">
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

        <div class="row">
            <div style="margin-top:50px"class="left col-sm-2 mt-9  ">
                <nav class="navbar navbar-expand-lg  p-3 ">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse " id="navbarNav">
                        <div id="accordion">
                            <!-- Card 1 -->
                            <div class="card ">
                                <div class="card-header">
                                    <a class="btn" data-bs-toggle="collapse" href="#collapseOne">
                                        Thức Ăn Cho chó
                                    </a>
                                </div>
                                <div id="collapseOne" class="collapse show" data-bs-parent="#accordion">
                                    <div class="card-body">
                                        <a href="#">Thức Ăn Cho chó Cảnh</a>
                                    </div>
                                    <div class="card-body">
                                        Thức Ăn Cho chó cỏ
                                    </div>
                                    <div class="card-body">
                                        Chó đang bệnh
                                    </div>
                                </div>
                            </div>

                            <!-- Card 2 -->
                            <div class="card">
                                <div class="card-header">
                                    <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseTwo">
                                        Áo Quần
                                    </a>
                                </div>
                                <div id="collapseTwo" class="collapse" data-bs-parent="#accordion">
                                    <div class="card-body">
                                        <a href="#">Đồ ngủ</a>
                                    </div>
                                    <div class="card-body">
                                        <a href="#">Đồ đi chơi</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 3 -->
                            <div class="card">
                                <div class="card-header">
                                    <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseThree">
                                        Đồ chơi
                                    </a>
                                </div>
                            </div>

                            <!-- Card 4 -->
                            <div class="card">
                                <div class="card-header">
                                    <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseFour">
                                        Thuốc
                                    </a>
                                </div>
                                <div id="collapseFour" class="collapse" data-bs-parent="#accordion">
                                    <div class="card-body">
                                        <a href="#">Đồ đi chơi</a>
                                    </div>
                                </div>
                            </div>
                             <!-- Card 4 -->
                             <div class="card">
                                <div class="card-header">
                                    <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseFive">
                                        Thuốc
                                    </a>
                                </div>
                                <div id="collapseFive" class="collapse" data-bs-parent="#accordion">
                                    <div class="card-body">
                                        <a href="#">Đồ đi chơi</a>
                                    </div>
                                </div>
                            </div>
                             <!-- Card 4 -->
                             <div class="card">
                                <div class="card-header">
                                    <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseSix">
                                        Thuốc
                                    </a>
                                </div>
                                <div id="collapseSix" class="collapse" data-bs-parent="#accordion">
                                    <div class="card-body">
                                        <a href="#">Đồ đi chơi</a>
                                    </div>
                                </div>
                            </div>
                             <!-- Card 4 -->
                             <div class="card">
                                <div class="card-header">
                                    <a class="collapsed btn" data-bs-toggle="collapse" href="#collapsed">
                                        Thuốc
                                    </a>
                                </div>
                                <div id="collapsed" class="collapse" data-bs-parent="#accordion">
                                    <div class="card-body">
                                        <a href="#">Đồ đi chơi</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Add more cards as needed -->
                        </div>
                    </div>
                </nav>
            </div>

         
                <?php
include "boxright.php";
                ?>
