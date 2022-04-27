<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/footer.css">
    <title>Footer</title>
</head>

<body>
    <!-- Import -->
    <?php include_once "news_hot.php" ?>
    <div class="footer pb-3">
        <div class="container">
            <h5 class="text-center scroll"><a href="#top"><i class="fas fa-caret-square-up text-dark justify-content"></i></a></h5>
            <script>
            $("a[href='#top']").click(function() {
                $("html, body").animate({
                    scrollTop: 0
                }, "slow");
                return false;
            });
            </script>
            <div class="row">
                <div class="col-5">
                    <div class="block_aboutshop block">
                        <h4 class="title_block">THÔNG TIN</h4>
                        <div class="block_content">
                            <div class="maps">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.7575043695438!2d105.80347671440697!3d21.002355494056275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac9787f94819%3A0xe1a088e2cd819dc0!2sViettel%20IDC!5e0!3m2!1svi!2s!4v1651033070995!5m2!1svi!2s"
                                    width="400" height="auto" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade">#document</iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="block footer-block footerAccordion">
                        <div class="block_content">
                            <ul class="list-unstyled text-dark">
                                <li><a href="#" class="text-decoration-none text-dark">Mới nhất</a></li>
                                <li><a href="#" class="text-decoration-none text-dark">Bán chạy</a></li>
                                <li><a href="#" class="text-decoration-none text-dark">Sản phẩm</a></li>
                                <li><a href="#" class="text-decoration-none text-dark">Big Sale</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="block footer-block footerAccordion">
                        <div class="block_content">
                            <ul class="list-unstyled">
                                <li><a href="#" class="text-decoration-none text-dark">Mới nhất</a></li>
                                <li><a href="#" class="text-decoration-none text-dark">Bán chạy</a></li>
                                <li><a href="#" class="text-decoration-none text-dark">Sản phẩm</a></li>
                                <li><a href="#" class="text-decoration-none text-dark">Big Sale</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="block inline">
                        <h4 class="pb-4">ĐĂNG KÝ NHẬN TIN</h4>
                        <div class="block_content">
                            <form action="" class="form_newsletter">
                                <input type="email" placeholder="Nhập email của bạn...">
                                <button class="border-0 bg-white" type="submit"><span
                                        class="fas fa-mail-bulk"></span></button>
                            </form>
                            <div class="social_footer mt-4">
                                <div class="social_block block">
                                    <div class="block_content">
                                        <ul class="list-unstyled d-flex">
                                            <li class="pr-4">
                                                <a href="#">
                                                    <i class="fab fa-facebook-f text-dark"></i>
                                                </a>
                                            </li>
                                            <li class="pr-4">
                                                <a href="#">
                                                    <i class="fab fa-instagram text-dark"></i>
                                                </a>
                                            </li>
                                            <li class="pr-4">
                                                <a href="#">
                                                    <i class="fab fa-google text-dark"></i>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="#">
                                                    <i class="fab fa-youtube text-dark"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>