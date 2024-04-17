<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../../assets/css/main.css" />
    <noscript>
        <link rel="stylesheet" href="../../assets/css/noscript.css" />
    </noscript>
    <title>Đăng nhập</title>


    <style>
        #container {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }


        input[type="text"],
        input[type="password"] {
            width: 50%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;

        }

        input[type="submit"] {
            width: 25%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;

        }

        input[type="submit"] {
            background-color: while;
            color: #fff;
            cursor: pointer;
        }

        a.button {
            display: inline-block;
            width: 25%;
            padding: 10px;
            margin-bottom: -12px;
            border-radius: 5px;
            border: 1px solid #ccc;
            background-color: #fff;
            color: #fff;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
            box-sizing: border-box;
        }

        a.button:hover {
            background-color: #fff;
        }

        a.button:active {
            background-color: #fff;
        }
    </style>

</head>

<body class="is-preload">

    <div id="wrapper">

        <!-- Header -->
        <header id="header">
            <div class="inner">

                <!-- Logo -->
                <a href="../main.php" class="logo">
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
                <li><a href="register.php">Register</a></li>
            </ul>
        </nav>

        <!-- Main -->
        <div id="main">
            <div class="inner">
                <h1>Đăng nhập</h1>
                <form method="post" action="login_process.php">
                    <label>Tên người dùng:</label>
                    <input type="text" name="username" required><br>
                    <label>Mật khẩu:</label>
                    <input type="password" name="password" required><br>
                    <input type="submit" name="login" value="Đăng nhập">
                    <a class="button" href="register.php">Đăng ký</a>
                </form>
            </div>
        </div>

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
                        <li><span class="fa fa-envelope-o"></span> <a href="#">contact@company.com</a></li>
                        <li><span class="fa fa-phone"></span> +1 333 4040 5566 </li>
                        <li><span class="fa fa-map-pin"></span> 212 Barrington Court New York, ABC 10001 United States of America</li>
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
    <script src="../../assets/js/jquery.min.js"></script>
    <script src="../../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../assets/js/jquery.scrolly.min.js"></script>
    <script src="../../assets/js/jquery.scrollex.min.js"></script>
    <script src="../../assets/js/main.js"></script>

</body>
</body>

</html>