<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="css/category.css">
    <link rel="stylesheet" href="css/products.css">
    <link rel="stylesheet" href="css/footer.css">
    <title>Tin tức</title>
</head>

<body>
    <?php include_once "header.php" ?>
    <!-- banner  -->
    <div class="banner_category mb-5">
        <div class="fuild-container">
            <div class="banner">
                <h4 class="text-uppercase text-center image_banner">Trang chủ > Tin tức</h4>
                <img src="images/images_category_skin/image_category_skin.jpg" alt="" width="100%" height="150px">
            </div>
        </div>
    </div>
    <!-- End banner -->
    <div class="container">
        <div class="content_news d-flex">
            <div class="col-lg-9">
                <h4 class="title_products font-weight-bold pb-4">TIN TỨC</h4>
                <!-- Sản phẩm -->
                <div class="products_item">
                    <div class="row">
                        <div class="col-lg-4">
                            <a href="detailNews.php">
                                <img src="images/images_news/image_news_1.jpg" alt="image_hot_1" width="100%">
                            </a>
                            <div class="products_meta text-center">
                                <h5 class="name">
                                    <a class="products_name text-center" href="detailNews.php" title="Tinh chất dưỡng chống lão hóa da Eco
                                    Science Serum">Trong khoảng 5 năm trở lại đây, măt nạ giấy đang ngày càng được
                                        những tín đồ làm đẹp ưa chuộng nhờ......</a>
                                </h5>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <a href="#">
                                <img src="images/images_news/image_news_2.jpg" alt="image_hot_2" width="100%">
                            </a>
                            <div class="products_meta text-center">
                                <h5 class="name">
                                    <a class="products_name text-center" href="#"
                                        title="Kem chống nắng Missha All-around Safe Block">Trang điểm theo phong cách
                                        Hàn
                                        Quốc như một làn gió mát thổi vào ngành công nghiệp làm đẹp trên toàn châu Á nói
                                        riêng và thế giới nói chung. Từ khắp</a>
                                </h5>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <a href="#">
                                <img src="images/images_news/image_news_3.jpg" alt="image_hot_3" width="100%">
                            </a>
                            <div class="products_meta text-center">
                                <h5 class="name">
                                    <a class="products_name text-center" href="#"
                                        title="Chống Nắng A'pieu Pure Block Natural Daily">Đứng đầu danh sách các kẻ thù
                                        của
                                        làn da chính là ánh nắng mặt trời. Bởi các tia cực tím trong ánh nắng sẽ
                                        ......</a>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Kết thúc sản phẩm -->
            </div>
            <div class="col-lg-3">
                <div class="price_category ">
                    <h3 class="border-bottom pb-2">Danh mục</h3>
                    <p>Tin làm đẹp</p>
                </div>
                <div class="category_menu">
                    <h3 class="border-bottom pb-2">Bài viết mới nhất</h3>
                    <ul class="list-unstyled">
                        <li class="pb-3">BÍ MẬT ĐẰNG SAU NHỮNG CHIẾC MẶT NẠ GIẤY</li>
                        <li class="pb-3">PHONG CÁCH TRANG ĐIỂM MÙA XUÂN HÚT MẮT</li>
                        <li class="pb-3">LÃO HÓA DA KHÔNG NHƯ CHÚNG TA NGHĨ</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <?php include_once "footer.php" ?>
    <script src="js/header.js"></script>
    <script src="js/sticky_navbar.js"></script>
</body>

</html>