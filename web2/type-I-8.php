<!DOCTYPE html>

<html style="background-color: #f3f3f4;">

    <head>
        <title>footer</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/type-I-8.less', 'css/type-3.css');
        ?>
        <link href="css/type-3.css" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <footer>
            <div class="footer_widgets">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="content">
                                <h2 class="widget-title">Address</h2>
                                <div class="textwidget">
                                    <p>15 Beaufain Street<br>Charleston, SC 29401</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="content dg">
                                <h2 class="widget-title">Follow Us</h2>
                                <div class="social-list">
                                    <ul>
                                        <a href="" target="_blank" original-title="thong"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        <a href=""><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                                        <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                        <a href=""><i class="fa fa-envelope" aria-hidden="true"></i></a>
                                    </ul>
                                </div>
                                <div class="textwidget">
                                    <p>© 2017 Made by WiThemes.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="content">
                                <h2 class="widget-title">Contact Us</h2>
                                <div class="textwidget">
                                    <p>info@domain.com<br>843-212-0920</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="footer_bottom">
                <div class="container">
                    <div class="logo">
                        <a href=""><img src="images/logo.png" class="img-responsive"></a>
                    </div>

                    <div class="dine-divider">
                        <div class="divider-inner">
                            <div class="divider-line line-left"></div>
                            <div class="icon-wrapper">
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <div class="divider-line line-right"></div>
                        </div>
                    </div>

                    <div class="footernav">
                        <ul class="menu">
                            <li class="cach"><a href="">Home</a></li>
                            <li class="cach"><a href="">About</a></li>
                            <li class="cach"><a href="">Menu</a></li>
                            <li class="cach"><a href="">Reservation</a></li>
                            <li class="cach"><a href="">Contact</a></li>
                            <li class="buy"><a href="">Buy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>