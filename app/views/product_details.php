<!-- product_details.php -->
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
    <title>Product Details</title>
    <style> 
        .ttct {
            margin-top: 50px;
        }

</style>

</head>

<body>
    <div id="wrapper">

        <!-- Header -->
        <header id="header">
            <div class="inner">

                <!-- Logo -->
                <a href="main.php" class="logo">
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
            <div class="inner">
                <h1><?php echo $productdetails['product_name']; ?><span class="pull-right">$ <?php echo $productdetails['price']; ?></span></h1>

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-7">
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
                                        <img class="d-block w-100"  src="../images/hinh/<?php echo $productdetails['image']; ?>"  alt="First slide" />
                                    </div>
                                    <div class="carousel-item">
                                    <img class="d-block w-100"  src="../images/hinh/<?php echo $productdetails['image']; ?>" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                    <img class="d-block w-100"  src="../images/hinh/<?php echo $productdetails['image']; ?>" alt="Third slide">
                                    </div>
                                    <div class="carousel-item">
                                    <img class="d-block w-100"  src="../images/hinh/<?php echo $productdetails['image']; ?>" alt="Fourth slide">
                                    </div>
                                    <div class="carousel-item">
                                    <img class="d-block w-100"  src="../images/hinh/<?php echo $productdetails['image']; ?>" alt="Fifth slide">
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
                        </div>

                        <div class="col-lg-5">
                            <h3>Thông tin</h3>
                            <p><?php echo $productdetails['description']; ?></p> <br>  <p>  <h3>Giá : </h3><?php echo $productdetails['price']; ?> $</p> <br> 
                            <span><button>Thêm vào giỏ</button></span>                  
                        </div>
                    </div>
                </div>

                <br>
                <h1 class="ttct">Thông tin chi tiết</h1>


                <form action="#">
                    <div class="fields">
                        <div class="field quarter">
                            <label class="m-n">Mainbroad</label>

                            <input type="text" readonly="" value="MSI MAG Z790 TOMAHAWK MAX WIFI DDR5">
                        </div>

                        <div class="field quarter">
                            <label class="m-n">Cpu</label>

                            <input type="text" readonly="" value="	Intel Core i7 14700F">
                        </div>

                        <div class="field quarter">
                            <label class="m-n">Ram</label>

                            <input type="text" readonly="" value="	Corsair Vengeance RGB 32GB">
                        </div>

                        <div class="field quarter">
                            <label class="m-n">VGA</label>

                            <input type="text" readonly="" value="	MSI GeForce RTX 4070 SUPER">
                        </div>

                        <div class="field quarter">
                            <label class="m-n">SSD</label>

                            <input type="text" readonly="" value="MSI Spatium M450">
                        </div>

                        <div class="field quarter">
                            <label class="m-n">HDD</label>

                            <input type="text" readonly="" value="	Tùy chọn nâng cấp">
                        </div>                     
                        <div class="field quarter">
                            <label class="m-n">PSU</label>

                            <input type="text" readonly="" value="MSI MAG A850GL PCIE5">
                        </div>
                        <div class="field quarter">
                            <label class="m-n">CASE</label>

                            <input type="text" readonly="" value="	MSI MAG FORGE 320R AIRFLOW">
                        </div>
                    </div>
                </form>

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3">
                            <h3>Contact Details</h3>

                            <ul class="alt">
                                <li><span class="fa fa-user"></span>Hoang Nam</li>
                                <li><span class="fa fa-phone"></span> +1 916 113 482 </li>
                               
                                <li><span class="fa fa-envelope-o"></span> <a href="#">hoangnan19122002@gmail.com</a></li>

                            </ul>
                        </div>

                        <div class="col-md-9">
                            <h3>Thông tin thêm </h3>

                          
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer id="footer">
            <div class="inner">
                <section>
                    <ul class="icons">
                        <li><a href="#" class="icon style2 fa-twitter"><span class="label">Twitter</span></a></li>
                        <li><a href="#" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
                        <li><a href="#" class="icon style2 fa-instagram"><span class="label">Instagram</span></a></li>
                        <li><a href="#" class="icon style2 fa-linkedin"><span class="label">LinkedIn</span></a></li>
                    </ul>

                    &nbsp;
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