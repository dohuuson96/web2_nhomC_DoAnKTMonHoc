 <div class="module-10">
    <div class="container">
        <div class="gallery">
            <div class="row">
               <?php foreach ($gallerys as $gal): ?>
                <div class="col-md-3 aa">
                    <div class="dine-gallery-item-inner">
                        <a href=""><img src="<?php  echo $gal->gallery_images1?>" class="img-responsive"></a>
                    </div>
                </div>

            <?php endforeach; ?>
            
        </div>
            <div class="row">
               <?php foreach ($gallerys as $gal1): ?>
                <div class="col-md-3 aa">
                    <div class="dine-gallery-item-inner">
                        <a href=""><img src="<?php  echo $gal1->gallery_images2?>" class="img-responsive"></a>
                    </div>
                </div>

            <?php endforeach; ?>
            
        </div>
    </div>
 </div>   
</div>


