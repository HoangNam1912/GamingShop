<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../assets/css/main.css" />
    <noscript>
        <link rel="stylesheet" href="../assets/css/noscript.css" />
    </noscript>
    <title>Product List</title>


</head>

<body class="is-preload">
    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Header -->
        <header id="header">
            <div class="inner">

                <!-- Logo -->
                <a href="index.html" class="logo">
                    <span class="fa fa-car"></span> <span class="title">Gaming Shop</span>
                </a>

                <!-- Nav -->
                <nav>
                    <ul>
                        <li><a href="#menu">Menu</a></li>
                    </ul>
                </nav>

            </div>
        </header>

        <!-- Menu -->
        <nav id="menu">
            <h2>Menu</h2>
            <ul>
                <li><a href="../app/main.php" class="active">Home</a></li>

                <li><a href="cars.html">San Pham</a></li>
                <li><a href="../app/cart.php?cartId=1">Gio Hang</a></li>
                <li>
                    <a href="#" class="dropdown-toggle">Loại máy</a>
                    <ul>
                        <li><a href="laptop.php">Pc</a></li>
                        <li><a href="pc.php">Laptop</a></li>
                    </ul>
                </li>
                <li><a href="views/login.php">Login</a></li>
                <li><a href="views/register.php">Register</a></li>
                <li><a href="danhsachsanpham.php">Admin Page</a></li>
            </ul>
        </nav>
        <!-- Main -->
        <div id="main">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="../images/banner6.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../images/banner5.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../images/banner3.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../images/banner4.jpg" alt="Second slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <br>
            <br>
            <div class="inner">
                <!-- About Us -->
                <header id="inner">
                    <h1>Về Chúng Tôi!</h1>
                    <p>Chào mừng bạn đến với trải nghiệm đỉnh cao của game thủ tại Pc Gaming Shop!

                        Tại đây, chúng tôi tự hào giới thiệu bộ sưu tập các PC Gaming hàng đầu, đáp ứng mọi nhu cầu của cộng đồng game thủ đam mê công nghệ. Với sứ mệnh đem đến sự hoàn hảo và tiện ích cho từng trải nghiệm chơi game, chúng tôi không ngừng nỗ lực cập nhật và phát triển dịch vụ của mình.

                        Tại Pc Gaming Shop, bạn sẽ khám phá một thế giới đa dạng với những sản phẩm chất lượng cao, từ các dòng PC Gaming tiêu chuẩn cho đến những bộ PC tùy chỉnh độc đáo, đáp ứng mọi nhu cầu và ngân sách của bạn.

                        Chúng tôi không chỉ cung cấp các sản phẩm hàng đầu, mà còn cam kết đảm bảo sự hài lòng của khách hàng thông qua dịch vụ hỗ trợ chuyên nghiệp và chăm sóc sau bán hàng tận tình.

                        Hãy bắt đầu hành trình của bạn vào thế giới game với Pc Gaming Shop ngay hôm nay và trải nghiệm sức mạnh của công nghệ tại ngón tay bạn!</p>
                </header>
                <br>

                <h2 class="h2">Featured Cars</h2>

                <section class="tiles">
                    <?php foreach ($products as $product) { ?>
                        <article class="style1">
                            <span class="image">
                                <img src="../images/hinh/<?php echo $product['image']; ?>" alt="Ảnh sản phẩm" />
                            </span>
                            <!-- Chuyển hướng đến trang product-details.php với ID sản phẩm được truyền qua URL -->
                            <a href="product_process.php?productId=<?php echo $product['product_id']; ?>">
                                <h2><?php echo $product['product_name']; ?></h2>
                                <p><strong>$<?php echo $product['price']; ?></strong></p>
                                <p>
                                    <i class="fa fa-dashboard"></i> 130,000km &nbsp;&nbsp;&nbsp;&nbsp;
                                    <i class="fa fa-cube"></i> 1800cc&nbsp;&nbsp;&nbsp;&nbsp;
                                    <i class="fa fa-cog"></i> Manual
                                </p>
                            </a>
                        </article>
                    <?php } ?>
                </section>


                <!-- Footer -->
                <footer id="footer">
                    <div class="inner">
                        <section>
                            <h2>Contact Us</h2>
                            <form method="post" action="#">
                                <div class="fields">
                                    <div class="field half">
                                        <input type="text" name="name" id="name" placeholder="Name" />
                                    </div>

                                    <div class="field half">
                                        <input type="text" name="email" id="email" placeholder="Email" />
                                    </div>

                                    <div class="field">
                                        <input type="text" name="subject" id="subject" placeholder="subject" />
                                    </div>

                                    <div class="field">
                                        <textarea name="message" id="message" rows="3" placeholder="Notes"></textarea>
                                    </div>

                                    <div class="field text-right">
                                        <label>&nbsp;</label>

                                        <ul class="actions">
                                            <li><input type="submit" value="Send Message" class="primary" /></li>
                                        </ul>
                                    </div>
                                </div>
                            </form>
                        </section>
                        <section>
                            <h2>Contact Info</h2>

                            <ul class="alt">
                                <li><span class="fa fa-envelope-o"></span> <a href="#">hoangnan19122002@gmail.com</a></li>
                                <li><span class="fa fa-phone"></span> + 916 113 482</li>
                                <li><span class="fa fa-map-pin"></span> Hutech - Thu Duc</li>
                            </ul>

                            <h2>Follow Us</h2>

                            <ul class="icons">
                                <li><a href="#" class="icon style2 fa-twitter"><span class="label">Twitter</span></a></li>
                                <li><a href="#" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
                                <li><a href="#" class="icon style2 fa-instagram"><span class="label">Instagram</span></a></li>
                                <li><a href="#" class="icon style2 fa-linkedin"><span class="label">LinkedIn</span></a></li>
                            </ul>
                        </section>

                        <ul class="copyright">
                            <li>Copyright © 2020 Company Name </li>
                            <li>Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a></li>
                        </ul>
                    </div>
                </footer>

            </div>



            <!-- Scripts -->
            <script src="../assets/js/jquery.min.js"></script>
            <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="../assets/js/jquery.scrolly.min.js"></script>
            <script src="../assets/js/jquery.scrollex.min.js"></script>
            <script src="../assets/js/main.js"></script>
</body>

</html>