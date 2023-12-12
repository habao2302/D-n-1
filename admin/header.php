<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Trị Website</title>
    <link rel="stylesheet" href="./css/admin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>
<body>
    <!-- <style>
        a{
            color:black;
        }
        
    </style> -->
    <!-- <div class="container">
        <div class="row mb-4 headeradmin">
            <div class="col">
                <h1>QUẢN TRỊ WEBSITE</h1>
            </div>
        </div>

        <div class="row mb-4 container-fluid bg-dark">
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?act=adddm">Danh mục</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?act=addsp">Hàng hóa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?act=dskh">Khách hàng</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?act=dsbl">Bình luận</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?act=thongke">Thống kê</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?act=dsdh">Danh sách đơn hàng</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div> -->
    
    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <img src="images/Tlogo.png" alt="">
            </div>

            <span class="logo_name">PAU-GET</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="index.php">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Trang chủ</span>
                </a></li>
                <li><a href="index.php?act=adddm">
                    <i class="uil uil-files-landscapes"></i>
                    <span class="link-name">Danh mục</span>
                </a></li>
                <li><a href="index.php?act=addsp">
                    <i class="uil uil-store"></i>
                    <span class="link-name">Hàng hóa</span>
                </a></li>
                <li><a href="index.php?act=dskh">
                    <i class="uil uil-user"></i>
                    <span class="link-name">Khách hàng</span>
                </a></li>
                <li><a href="index.php?act=dsbl">
                    <i class="uil uil-comments"></i>
                    <span class="link-name">Bình luận</span>
                </a></li>
                <li><a href="index.php?act=thongke">
                    <i class="uil uil-chart"></i>
                    <span class="link-name">Thống kê</span>
                </a></li>
            </ul>
            
            <ul class="logout-mode">
                <li><a href="#">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">Logout</span>
                </a></li>

                <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                    <span class="link-name">Dark Mode</span>
                </a>

                <div class="mode-toggle">
                  <span class="switch"></span>
                </div>
            </li>
            </ul>
        </div>
    </nav>  
    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Search here...">
            </div>
            
            <img src="images/profile.jpg" alt="">
        </div>
    <script src="script.js"></script>
</body>
</html>
