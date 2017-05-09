<script>
    jQuery(document).ready(function ($) {

        var TopFixMenu = $(".header");
        var p = $(".logo p");
        var logoa = $(".logo a");
        var a = $("ul li a");
        var b = $(".header-cta a");
        var c = $(".header .social-list a");
        var menua = $(".a");
        var img1 = $(".img-responsive");
        var img2 = $(".b");

        $(window).scroll(function () {
            if ($(this).scrollTop() > 10) {

                TopFixMenu.css("position", "fixed");
                TopFixMenu.css("top", "0");
                TopFixMenu.css("padding-top", "160px");
                TopFixMenu.css("background", "white");
                TopFixMenu.css("z-index", "999");
                TopFixMenu.css("width", "100%");
                a.css("color", "black");
                b.css("background", "black");
                b.css("color", "white");
                c.css("background", "black");
                img1.css("display", "none");
                img2.css("display", "block");
                c.css("color", "white");
            } else
            {
                TopFixMenu.css("top", "17px");
                img1.css("display", "block");
                img2.css("display", "none");
                a.css("color", "white");
                b.css("background", "white");
                b.css("color", "black");
                c.css("background", "white");
                c.css("color", "black");
                menua.css("color", "#ddd");
                logoa.css("color", "white");
                p.css("display", "block");
                TopFixMenu.css("background", "transparent");
                TopFixMenu.css("height", "none");
                TopFixMenu.css("box-shadow", "none");
            }
        }
        )
    })
</script>
</head>
<body>
    <div class="header">
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="container aa">
                    <div class="navbar-header" style="width:17%;">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span> 
                        </button>
                        <a class="navbar-brand" href="http://localhost/web2/public/home" style="float: right;">
                            <img src="images2/logo.png" class="img-responsive">
                            <img src="images2/logo2.png" class="img-responsive b" style="display: none;">
                        </a>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav navbar-left">
                            <li class="active dropdown">
                                <a href="http://localhost/web2/public/home" class="dropdown-toggle" data-toggle="dropdown">Home</a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Header Center</a></li>
                                    <li><a href="#">Header Dark</a></li>
                                </ul>
                            </li>
                            <li><a href="http://localhost/web2/public/about">About</a></li>
                            <li><a href="http://localhost/web2/public/menu">Menu</a></li> 
                            <li><a href="#">Reservation</a></li> 
                            <li><a href="#">Blog</a></li> 
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Elements</a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Typography</a></li>
                                    <li><a href="#">Elements 1</a></li>
                                    <li><a href="#">Elements 2</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Contact</a></li> 
                            <div class="social-list navbar-right">
                                <ul>
                                    <a href="" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href="" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="" data-toggle="tooltip" data-placement="bottom" title="Tripadvisor"><i class="fa fa-tripadvisor" aria-hidden="true"></i></a>

                                    <div class="header-cta navbar-right">
                                        <a href="">
                                            <span>Book a</span>
                                            <p>Table</p>
                                        </a>
                                    </div>
                                </ul>			
                            </div>						
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>