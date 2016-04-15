<?php 

    include ('inc/head.php')

 ?>

<?php 

    include ('inc/mainslider.php')

 ?>
<script src="dist/js/angular.js"></script>
<script>
var app = angular.module("mainApp",[]);
app.controller("appctrl",function($http,$scope){
	$scope.kirim=function(){
		var nama = $scope.nama;
		var email = $scope.email;
		var subject = $scope.subject;
		var pesan = $scope.pesan;
		$http.post("kirim_email",{nama:nama,email:email,subject:subject,pesan:pesan}).success(function(){
			alert("terkirim");
		});
	}
});
</script>
<div ng-app= "mainApp">
    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-left">
                    <h2 class="section-heading wow fadeInDown animated">About Us</h2>
                    <hr class="light">
                    <p class="text-faded wow fadeInDown animated">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea quas quisquam molestias repellat eius, quod laboriosam veniam officia consequuntur! Molestias ipsum esse dolor optio odit pariatur officia sit cum inventore.</p>
                    <a href="#" class="btn btn-default btn-xl">Read More</a>
                </div>
                 <div class="col-lg-6 text-center">
					<img src="images/cir01.jpg" alt="about-us" class="img-circle wow fadeInUp animated">
                </div>               
            </div>
        </div>
    </section>

    <section id="services">

        <div class="services">

        	<div class="container">
        	    <div class="row">
        	        <div class="col-lg-12 text-center">
        	            <h2 class="section-heading wow fadeInDown animated">At Your Service</h2>
        	            <p class="text-faded">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea quas quisquam molestias repellat eius, quod laboriosam veniam officia consequuntur! Molestias ipsum esse dolor optio odit pariatur officia sit cum inventore.</p>
        	            <hr class="primary">
        	        </div>
        	    </div>
        	</div>
        	<div class="hidden-sm p50"></div>
        	<div class="container">
        	    <div class="row">
        	        <div class="col-xs-12 col-sm-6 col-lg-3 col-md-6 text-center">
        	            <div class="service-box wow fadeInUp  animated">
        	                <i class="wow rotateIn text-primary"><img src="images/serv-ico01.png" height="38" width="40" alt="gambar icon gimmovers"></i>
        	                <h3>Venus x Mars</h3>
        	                <p class="text-muted">Women are from Venus, Man are from Mars.</p>
        	            </div>
        	        </div>
        	        <div class="col-xs-12 col-sm-6 col-lg-3 col-md-6 text-center">
        	            <div class="service-box wow fadeInUp  animated">
        	                <i class="wow rotateIn text-primary"><img src="images/serv-ico02.png" height="38" width="40" alt="gambar icon gimmovers"></i>
        	                <h3>Venus x Mars</h3>
        	                <p class="text-muted">Women are from Venus, Man are from Mars.</p>
        	            </div>
        	        </div>
        	        <div class="col-xs-12 col-sm-6 col-lg-3 col-md-6 text-center">
        	            <div class="service-box wow fadeInUp  animated">
        	                <i class="wow rotateIn text-primary"><img src="images/serv-ico03.png" height="38" width="40" alt="gambar icon gimmovers"></i>
        	                <h3>Venus x Mars</h3>
        	                <p class="text-muted">Women are from Venus, Man are from Mars.</p>
        	            </div>
        	        </div>
        	        <div class="col-xs-12 col-sm-6 col-lg-3 col-md-6 text-center">
        	            <div class="service-box wow fadeInUp  animated">
        	                <i class="wow rotateIn text-primary"><img src="images/serv-ico04.png" height="38" width="40" alt="gambar icon gimmovers"></i>
        	                <h3>Venus x Mars</h3>
        	                <p class="text-muted">Women are from Venus, Man are from Mars.</p>
        	            </div>
        	        </div>        	               	        
        	    </div>
        	</div>

        </div>

        <div class="service-button">
        	
        		<div class="container">
        			
					<div class="row">
						
						<div class="col-lg-8 col-lg-offset-2 col-md-6 text-center">
							
							<a class="btn btn-primary btn-lg btn-services" href="javascript:void(0)">Pick Your Services!</a>

						</div>

					</div>

        		</div>

        </div>

    </section>

        <!-- Testimonial Mereka -->

    <section id="testimonial" class="gimmovers">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">

                    <div id="carousel-testimonial" class="carousel slide text-center" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <?php for ($i=1; $i <= 10 ; $i++) { 
                             ?>
                            <div class="item">
                                <p><img class="img-circle img-thumbnail" src="images/cirtesti01.jpg" alt="testi"></p>
                                <h4>Don Jough</h4>
                                <small>Pegawai Salah Satu Bank Swasta</small>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua. Ut enim ad minim veniam</p>
                            </div>
                            
                            <?php } ?>

                            <div class="item active">
                                <p><img class="img-circle img-thumbnail" src="images/cirtesti01.jpg" alt="testi"></p>
                                <h4>Leonardo Dicaprio</h4>
                                <small>Artis Hollywood</small>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua. Ut enim ad minim veniam</p>
                            </div>
                        </div>

                        <!-- Controls -->
                        <div class="btns">
                            <a class="btn btn-primary btn-sm" href="#carousel-testimonial" role="button" data-slide="prev">
                                <span class="fa fa-angle-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="btn btn-primary btn-sm" href="#carousel-testimonial" role="button" data-slide="next">
                                <span class="fa fa-angle-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Us -->


	<section id="contact">

		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 col-md-6 text-center">

					<h2>Contact Us</h2>

					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto rem nihil molestias deserunt, sint inventore non commodi quo voluptatem. Non vel ducimus repellat. Unde, sed nihil corporis ab ratione nesciunt.</p>

				</div>
			</div>
		</div>
		
		<div id="google-map" style="height:650px" data-latitude="-6.224997" data-longitude="106.847434"></div>

        <div class="wrapper" ng-controller="appctrl">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-8">
                        <div class="contact-form">
                            <h3>Contact Info</h3>

                            <address>
                              <strong>PT. GIMMOVERS</strong><br>
                              Jl. Dr. Saharjo No. 25, <br>
                              Jakarta Selatan 12850<br>
                              <abbr title="Phone">P:</abbr> +62 21 8312408
                              <br>
                              <abbr title="Mobile">M:</abbr> +62 85210102325
                            </address>

                            <form id="main-contact-form" name="contact-form" method="post" action="#">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Name" ng-model="nama" required> 
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email" ng-model="email" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="subject" class="form-control" placeholder="Subject" ng-model="subject" required>
                                </div>
                                <div class="form-group">
                                    <textarea name="message" class="form-control" rows="8" placeholder="Message" ng-model="pesan" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary" ng-click="kirim()">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

	</section>


</div>

<?php 

	include ('inc/footer.php')

 ?>