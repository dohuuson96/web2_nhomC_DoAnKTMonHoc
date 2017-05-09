<footer>
    <div class="module-25">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="content">
                            <h2 class="title"><?php echo $footers[0]['footer_title'] ?></h2>
                            <div class="name">
                                <p><?php echo $footers[0]['footer_name'] ?><br>Charleston, SC 29401</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="content ic">
                            <h2 class="title"><?php echo $footers[1]['footer_title'] ?></h2>
                            <div class="icon">
                                <ul>
                                    
                                        <a href="" data-toggle="tooltip" data-placement="top" title="<?php echo $footers[0]['footer_ic'] ?>"><i class="<?php echo $footers[0]['footer_icon'] ?>" aria-hidden="true"></i></a>
                                        <a href="" data-toggle="tooltip" data-placement="top" title="<?php echo $footers[1]['footer_ic'] ?>"><i class="<?php echo $footers[1]['footer_icon'] ?>" aria-hidden="true"></i></a>
                                        <a href="" data-toggle="tooltip" data-placement="top" title="<?php echo $footers[2]['footer_ic'] ?>"><i class="<?php echo $footers[2]['footer_icon'] ?>" aria-hidden="true"></i></a>
                                        <a href="" data-toggle="tooltip" data-placement="top" title="<?php echo $footers[3]['footer_ic'] ?>"><i class="<?php echo $footers[3]['footer_icon'] ?>" aria-hidden="true"></i></a>
                                        <a href="" data-toggle="tooltip" data-placement="top" title="<?php echo $footers[4]['footer_ic'] ?>"><i class="<?php echo $footers[4]['footer_icon'] ?>" aria-hidden="true"></i></a>
                                </ul>
                            </div>
                            <div class="name">
                                <p><?php echo $footers[1]['footer_name'] ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="content">
                            <h2 class="title"><?php echo $footers[2]['footer_title'] ?></h2>
                            <div class="name">
                                <p><?php echo $footers[2]['footer_name'] ?><br>843-212-0920</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer_bottom">
            <div class="container">
                <div class="logo">
                    <a href=""><img src="<?php echo $footers[0]['footer_images'] ?>" class="img-responsive"></a>
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
                        <?php foreach ($footers as $ft): ?>
                            <li class="mn"><a href=""><?php echo $ft->footer_menu ?></a></li>
                            <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>  
    </div>
</footer>