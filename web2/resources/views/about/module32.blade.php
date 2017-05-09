<div class="module32">
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <?php foreach ($newdata1 as $items): ?>
                <div class="col-md-4">
                    <div class="divider-inner">
                        <div class="divider-line line-left"></div>
                        <div class="icon-wrapper">
                            <i class="fa fa-picture-o"></i>
                        </div>
                        <div class="divider-line line-right"></div>
                    </div>  

                    <p><?php echo $items->module32_chitiet ?></p>
                    <a href=""><?php echo $items->module32_ketnoi ?></a>    
                </div>
            <?php endforeach; ?>  
            <div class="col-md-4"></div>
        </div>
    </div>
</div>

