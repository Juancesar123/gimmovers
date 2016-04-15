<?php 

include ('inc/head1.php')

 ?>

	<!-- Gallery Start -->
<section id="gallery">

		<div class="container">

				<div class="center">										
					<h2>Our Gallery</h2>
					<div class="p20"></div>
				</div>

				<ul class="gallery-filter text-center">
					<li><a href="#" class="btn btn-default active" data-filter="*">All</a></li>
					<li><a href="#" class="btn btn-default" data-filter=".process">Process</a></li>
					<li><a href="#" class="btn btn-default" data-filter=".storage">Storage</a></li>
					<li><a href="#" class="btn btn-default" data-filter=".trans">Trans</a></li>
				</ul>

            <div class="row">

                <div class="gallery-items">

					

					<?php for($i=0;$i<count($proses);$i++){ ?>

                    <div class="gallery-item process col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-gallery-wrap">
                            <img class="img-responsive" src="<?php echo $proses[$i]->gambar;?>" alt="<?php echo $proses[$i]->judul;?>">
                            <div class="overlay">
                                <div class="recent-gallery-inner">
                                    <h3><a href="#"><?php echo $proses[$i]->judul;?></a></h3>
                                    
                                    <a class="preview" href="<?php echo $proses[$i]->gambar;?>" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div> 
                            </div>
                        </div>
                    </div><!--/.gallery-item-->

					<?php } ?>

					<?php for($i=0;$i<count($storage);$i++){  ?>

                    <div class="gallery-item storage col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-gallery-wrap">
                            <img class="img-responsive" src="<?php echo $storage[$i]->gambar;?>" alt="<?php echo $storage[$i]->judul;?>">
                            <div class="overlay">
                                <div class="recent-gallery-inner">
                                    <h3><a href="#"><?php echo $storage[$i]->judul;?></a></h3>
                                     
                                    <a class="preview" href="<?php echo $storage[$i]->gambar;?>" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div> 
                            </div>
                        </div>
                    </div><!--/.gallery-item-->

					<?php } ?>

					<?php for($i=0;$i<count($trans);$i++){ ?>

                    <div class="gallery-item trans col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-gallery-wrap">
                            <img class="img-responsive" src="<?php echo $trans[$i]->gambar;?>" alt="<?php echo $trans[$i]->judul;?>">
                            <div class="overlay">
                                <div class="recent-gallery-inner">
                                    <h3><a href="#"><?php echo $trans[$i]->judul;?></a></h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                    <a class="preview" href="<?php echo $trans[$i]->gambar;?>" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div> 
                            </div>
                        </div>
                    </div><!--/.gallery-item-->

					<?php } ?>


                </div>

            </div> <!-- row -->

		</div> <!-- container -->

	</section>

	<section>
		
		<div class="p50"></div>

	</section>



 <?php 

include ('inc/footer.php')

  ?>