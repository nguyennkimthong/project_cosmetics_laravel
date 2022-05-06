<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/category.css">
    <link rel="stylesheet" href="css/products.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/detailProducts.css">
    <title>Chi tiết sản phẩm</title>
</head>

<body>
    <?php include_once "header.php" ?>
    <div class="banner_category mb-5">
        <div class="fuild-container">
            <div class="banner">
                <h4 class="text-uppercase text-center image_banner">Trang chủ > Dưỡng da</h4>
                <img src="images/images_category_skin/image_category_skin.jpg" alt="" width="100%" height="150px">
            </div>
        </div>
    </div>
    <!-- Chi tiết sản phẩm -->
    <div class="container">
        <div class="content d-flex">
            <div class="col-5">
                <div class="image-detail">
                    <a href="#">
                        <img src="images/images_products/images_product_skin/images_products_skin_mask/image_product_skin_1.jpg"
                            alt="" width="100%">
                    </a>
                </div>
            </div>
            <div class="col-7">
                <div class="content-detail">
                    <div class="title-detail border-bottom pb-3">
                        <h1>MẶT NẠ THANH LỌC VÀ LÀM SÁNG DA KIEHL'S TURMERIC&CRANBERRY SEED ENERGIZING RADIANCE
                            MASQUE
                        </h1>
                        <div class="like-share d-flex ">
                            <a href="#" class="text-decoration-none mr-2"><span class="far fa-thumbs-up">Like</span></a>
                            <a href="#" class="text-decoration-none position-relative"><span
                                    class="share position-absolute">Share</span></a>
                        </div>
                    </div>
                    <div class="price border-bottom pb-3">
                        <h3 class="border-bottom-0">390,000đ</h3>
                        <div class="brand">
                            <h5 class="">Thương hiệu: Khác</h5>
                        </div>
                    </div>
                    <div class="count d-flex mt-3">
                        <span class="fix">Số lượng: </span>
                        <button class="fix">1</button>
                        <button class="asc pr-2">-</button>
                        <button class="asc">+</button>
                    </div>
                    <div class="payment">
                        <button class="border-0 bg-white mt-3 position-relative">
                            <a href="#">
                                <span class="fas fa-cart-plus position-absolute"></span>
                                <p class="add-cart">Thêm vào giỏ hàng</p>
                            </a>
                        </button>
                        <button class="border-0 bg-white mt-3 position-relative">
                            <a href="#">
                                <span class="fas fa-shopping-cart position-absolute"></span>
                                <p class="add-cart">Mua ngay</p>
                            </a>
                        </button>
                    </div>
                </div>
            </div>

        </div>
        <!-- Sản phẩm liên quan -->
        <h4 class="title_products text-center font-weight-bold pb-4">SẢN PHẨM LIÊN QUAN</h4>
        <!-- Sản phẩm -->
        <div class="products_item pb-4">
            <div class="row">
                <div class="col-lg-3">
                    <a href="#">
                        <img src="images/images_products/images_product_hot/image_hot_1.jpg" alt="image_hot_1"
                            width="100%">
                    </a>
                    <div class="products_meta text-center">
                        <h5 class="name">
                            <a class="products_name text-center" href="#" title="Tinh chất dưỡng chống lão hóa da Eco
                                    Science Serum">Tinh chất dưỡng chống lão hóa da Eco
                                Science Serum</a>
                        </h5>
                        <div class="products_price">
                            <span>30.000.000đ</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <a href="#">
                        <img src="images/images_products/images_product_hot/image_hot_2.jpg" alt="image_hot_2"
                            width="100%">
                    </a>
                    <div class="products_meta text-center">
                        <h5 class="name">
                            <a class="products_name text-center" href="#"
                                title="Kem chống nắng Missha All-around Safe Block">Kem chống nắng Missha All-around
                                Safe Block</a>
                        </h5>
                        <div class="products_price">
                            <span>2.000.000đ</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <a href="#">
                        <img src="images/images_products/images_product_hot/image_hot_3.jpg" alt="image_hot_3"
                            width="100%">
                    </a>
                    <div class="products_meta text-center">
                        <h5 class="name">
                            <a class="products_name text-center" href="#"
                                title="Chống Nắng A'pieu Pure Block Natural Daily">Chống Nắng A'pieu Pure Block
                                Natural Daily</a>
                        </h5>
                        <div class="products_price">
                            <span>1.700.000đ</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <a href="#">
                        <img src="images/images_products/images_product_hot/image_hot_4.jpg" alt="image_hot_4"
                            width="100%">
                    </a>
                    <div class="products_meta text-center">
                        <h5 class="name">
                            <a class="products_name text-center" href="#"
                                title="Kem chống nắng A'pieu Pure Block Natural">Kem chống nắng A'pieu Pure Block
                                Natural</a>
                        </h5>
                        <div class="products_price">
                            <span>200.000đ</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Kết thúc sản phẩm -->
    </div>
</body>
<?php include_once "footer.php" ?>
<script src="js/header.js"></script>
<script src="js/sticky_navbar.js"></script>

</html>