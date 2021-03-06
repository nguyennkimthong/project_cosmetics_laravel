<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Import header.css, menu.css-->

    <link rel="stylesheet" href="css/header/header.css" />
    <link rel="stylesheet" href="css/header/menu.css">
    <link rel="stylesheet" href="css/header/search.css">

    <!-- W3.CSS -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>Header</title>
</head>

<body>
    <!-- Liên hệ, đăng nhập, đăng ký, tra cứu đơn hàng -->
    <div class="nav border-bottom-0">
        <div class="contactnav">
            <span class="hidden-sp hidden-xs">
                <i class="fas fa-envelope"> contact@nhanh.vn </i>
                <i class="fas fa-phone"> 0984 870 647 </i>
            </span>
        </div>
        <div class="header_user_info e-scale">
            <ul class="links list-unstyled">
                <li>
                    <a id="customer_login_link" href="#" title="Đăng nhập">
                        <i class="fa fa-unlock-alt"></i>
                        Đăng nhập
                    </a>
                </li>
                <li>
                    <a id="customer_register_link" href="#" title="Đăng ký">
                        <i class="fa fa-edit"></i>
                        Đăng ký
                    </a>
                </li>
                <li>
                    <a id="orders-search" href="#" title="Kiểm tra đơn hàng">
                        Tra cứu đơn hàng
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- Tên thương hiệu -->
    <div class="header-main mb-4">
        <div class="header-wrap">
            <div class="header-left">
                <div class="header_logo">
                    <h1>
                        <a href="index.php">
                            <img src="images/image_title/YAPPUNI.png" alt="" />
                        </a>
                    </h1>
                </div>
            </div>
            <!-- Tìm kiếm, giỏ hàng -->
            <div class="header-right">
                <!-- Giỏ hàng -->
                <div id="cart" class="blockcart_top clearfix">
                    <div class="media heading">
                        <a href="#" id="CartToggle" title="Giỏ hàng">
                            <div class="title-cart">
                                <span class="fa fa-shopping-cart"></span>
                            </div>
                            <div class="cart-inner media-body">
                                <span class="cart-title">Giỏ hàng</span>
                                <span id="CartCount">0</span>
                                <span>item - </span>
                                <span id="CartCost">0đ</span>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- Tìm kiếm -->
                <div id="wrap">
                    <form action="" autocomplete="on">
                        <input id="search" name="search" type="text" placeholder="Tìm kiếm..."><input
                            id="search_submit" value="Rechercher" type="submit">
                            <i class="fas fa-search"></i>
                    </form>
                </div>
                <!-- Kết thúc tìm kiếm -->
            </div>
        </div>
    </div>
    <!-- Menu -->
    <div class="w3-bar w3-white font-weight-bold d-flex justify-content-center pb-2" id="menu_header">
        <div class="w3-dropdown-hover w3-mobile">
            <button class="w3-button">CHĂM SÓC DA <i class="fa fa-caret-down"></i></button>
            <div class="w3-dropdown-content w3-bar-block w3-white font-weight-normal w3-font">
                <a href="category.php" class="w3-bar-item w3-button w3-mobile">Dưỡng da</a>
                <a href="#" class="w3-bar-item w3-button w3-mobile">Làm sạch da</a>
                <a href="#" class="w3-bar-item w3-button w3-mobile">Mask - mặt nạ</a>
            </div>
        </div>
        <a href="#" class="w3-bar-item w3-button w3-mobile">CHĂM SÓC TOÀN THÂN</a>
        <a href="#" class="w3-bar-item w3-button w3-mobile">NƯỚC HOA</a>
        <div class="w3-dropdown-hover w3-mobile">
            <button class="w3-button">PHỤ KIỆN <i class="fa fa-caret-down"></i></button>
            <div class="w3-dropdown-content w3-bar-block w3-white font-weight-normal w3-font">
                <a href="#" class="w3-bar-item w3-button w3-mobile">Dụng cụ trang điểm</a>
                <a href="#" class="w3-bar-item w3-button w3-mobile">Phụ kiện làm đẹp</a>
            </div>
        </div>
        <a href="#" class="w3-bar-item w3-button w3-mobile">KHUYẾN MÃI</a>
        <a href="news.php" class="w3-bar-item w3-button w3-mobile">TIN TỨC</a>
    </div>
    <script src="js/header.js"></script>
    <script src="js/sticky_navbar.js"></script>
</body>

</html>