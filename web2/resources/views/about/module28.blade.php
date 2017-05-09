<div class="module28">
    <div class="container">
        <div class="row">
            <?php foreach ($newdata4 as $items): ?>
                <div class="col-md-3">
                    <div class="gd1">
                        <h1><?php echo $items->module28_tieude ?></h1>
                        <p><?php echo $items->module28_chitiet ?></p>
                        <a href="">Read More »</a>
                    </div>
                </div>                   
                <div class="col-md-3">
                    <div class="gd2">                          
                        <div class="n1">
                            <p><?php echo $items->module28_kvien ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <img src="<?php echo $items->module28_img1 ?>" alt=""/>
                </div>
                <div class="col-md-3">
                    <img src="<?php echo $items->module28_img2 ?>" alt=""/>                       
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

