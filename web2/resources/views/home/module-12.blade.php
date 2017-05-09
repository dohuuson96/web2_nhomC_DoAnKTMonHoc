 <div class="module-12">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                <div class="col-md-6 aa">
                        <div class="us"> 
                            <h2>About Us</h2>
                            <p>Corper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio</p>
                        </div>
                        <div class="paint">
                            <p></p>
                        </div>
                        <div class="write">
                            <a href="">Read More</a>
                        </div>
                    </div>

                    <div class="col-md-6 ab">
                        <div class="diamond">
                            <div class="diamond-bg"><span></span></div>
                            <div class="diamond-content">
                                <?php foreach ($buaans as $buaan): ?>

                                    <p><?php  echo $buaan->buaan_ba." :".$buaan->buaan_thoigian  ?></p>

                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="container-fluid">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">

                                    <img src="images/h5.jpg" alt="First slide"/>
                                    <!-- Static Header -->
                                </div>
                                <div class="item">

                                    <img src="images/h6.jpg" alt="Second slide"/>
                                    <!-- Static Header -->
                                </div>
                                <div class="item">

                                    <img src="images/h1.jpg" alt="Third slide"/>
                                    <!-- Static Header -->
                                </div>
                            </div>
                            <!-- Controls -->
                            <a class="left carousel-control left-mobile" href="#carousel-example-generic" data-slide="prev">
                                <span class="fa fa-angle-left iconleft"></span>
                            </a>
                            <a class="right carousel-control right-mobile" href="#carousel-example-generic" data-slide="next">
                                <span class="fa fa-angle-right iconright"></span>
                            </a>
                        </div><!-- /carousel -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    
