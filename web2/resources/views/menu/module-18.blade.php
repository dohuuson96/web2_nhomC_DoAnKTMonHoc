
<div class="module-18">
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="container aa">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span> 
                    </button>
                    <a class="navbar-brand" href="http://localhost/web2/public/home"><img src="<?php echo $menus[0]['menu_images'] ?>" class="img-responsive"></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-left">
                        <li class="active dropdown">
                            <a href="http://localhost/web2/public/home" class="dropdown-toggle" data-toggle="dropdown"><?php echo $menus[0]['menu_dropdown'] ?></a>
                            <ul class="dropdown-menu">
                                <li><a href="#"><?php echo $menus[0]['menu_condd'] ?></a></li>
                                <li><a href="#"><?php echo $menus[1]['menu_condd'] ?></a></li>
                            </ul>
                        </li>
                        <li><a href="http://localhost/web2/public/about"><?php echo $menus[1]['menu_dropdown'] ?></a></li>
                        <li><a href="http://localhost/web2/public/menu" style="color: #ab3f1b;"><?php echo $menus[2]['menu_dropdown'] ?></a></li> 
                        <li><a href="#"><?php echo $menus[3]['menu_dropdown'] ?></a></li> 
                        <li><a href="#"><?php echo $menus[4]['menu_dropdown'] ?></a></li> 
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Elements</a>
                            <ul class="dropdown-menu">
                                <li><a href="#"><?php echo $menus[2]['menu_condd'] ?></a></li>
                                <li><a href="#"><?php echo $menus[3]['menu_condd'] ?></a></li>
                                <li><a href="#"><?php echo $menus[4]['menu_condd'] ?></a></li>
                            </ul>
                        </li>
                        <li><a href="#">Contact</a></li> 

                        <div class="social-list navbar-right">
                            <ul>
                                <a href="" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="<?php echo $menus[0]['menu_icon'] ?>" aria-hidden="true"></i></a>
                                <a href="" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="<?php echo $menus[1]['menu_icon'] ?>" aria-hidden="true"></i></a>
                                <a href="" data-toggle="tooltip" data-placement="top" title="Tripadvisor"><i class="<?php echo $menus[2]['menu_icon'] ?>" aria-hidden="true"></i></a>

                                <div class="header-cta navbar-right">
                                    <a href="">
                                        <span><?php echo $menus[0]['menu_bigic'] ?></span>
                                        <p><?php echo $menus[1]['menu_bigic'] ?></p>
                                    </a>
                                </div>
                            </ul>           
                        </div>                      
                    </ul>
                    <div class="clear"></div>           
                </div>
            </div>
        </nav>
    </div>
</div>