<div class="module-20">
    <div class="container">
        <div class="row">
            
            <div class="col-md-6">
                <?php foreach ($thucdons as $thucdon): ?>
                <div class="banner">
                    <h2 class="heading"><?php echo $thucdon->thucdon_title ?></h2>
                    <div class="menu">
                        <div class="item">
                            <h3 class="name"><?php echo $thucdon->thucdon_name ?></h3>
                            <span class="price"><?php echo $thucdon->thucdon_price ?></span>
                            <div class="desc">
                                <?php echo $thucdon->thucdon_desc ?>
                            </div>
                        </div>      
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            
            <div class="col-md-6">
                <?php foreach ($thucdons as $thucdon): ?>
                <div class="banner">
                    <h2 class="heading"><?php echo $thucdon->thucdon_title ?></h2>
                    <div class="menu">
                        <div class="item">
                            <h3 class="name"><?php echo $thucdon->thucdon_name ?></h3>
                            <span class="price"><?php echo $thucdon->thucdon_price ?></span>
                            <div class="desc">
                                <?php echo $thucdon->thucdon_desc ?>
                            </div>
                        </div>      
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
             
        </div>
    </div>
</div>