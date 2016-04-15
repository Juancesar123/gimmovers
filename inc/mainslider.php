     <section id="main-slider">
     	<div class="overlay-slider"></div>
        <div class="owl-carousel">
        	<?php for ($i=1; $i <= 6 ; $i++) { ?>
            <div class="item" style="background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(images/bg<?php echo rand(1, 6); ?>.jpg);">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 main-slider-title">
                                <div class="carousel-content">
                                    <h2>We’ll Help Carry Your Load</h2>
                                    <p class="hidden-xs">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et  dolore magna incididunt ut labore aliqua. </p>
                                    <a class="btn btn-primary btn-lg" href="javascript:void(0)">Start</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
            <?php } ?>
        </div><!--/.owl-carousel-->
    </section><!--/#main-slider-->