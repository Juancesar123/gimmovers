<?php 

include ('inc/head1.php')

 ?>

	<!-- Service Start -->
<script src="dist/js/angular.js"></script>
<script  src="http://vitalets.github.io/checklist-model/checklist-model.js"></script>
<script>
var app = angular.module("App",["checklist-model"]);
app.controller("appctrl",function($http,$scope){
	
});
</script>
<div ng-app="App">
    <section id="xizmetkar">
        
              <div class="xizmetkar">

                <div class="container">
                    <div class="row">
                        
                    <div class="col-sm-8 col-sm-offset-2" ng-controller="appctrl">
                        <div class="contact-form">
                            <h3>PLEASE CONTACT ME FOR YOUR REQUEST:</h3>

                            <form id="main-contact-form" name="contact-form" method="post" action="#">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Name" ng-model="nama" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Company" ng-model="email"required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="subject" class="form-control" placeholder="Phone" required>
                                </div>
                                <div class="form-group">
                                    <input name="message" class="form-control" placeholder="Email" required></input>
                                </div>
                                
                                 <div class="checkbox">
								  <label><input type="checkbox"  checklist-model="user.service" checklist-value="Sea Freight">Sea Freight</label>
                                </div>
                                <div class="checkbox disabled">
                                  <label><input type="checkbox" value="">FCR = Full Container Load</label>
                                </div>
                                <div class="checkbox disabled">
                                  <label><input type="checkbox" value="" disabled>FCL = Full less Container Load</label>
                                </div>
                                <div class="checkbox-inline disabled">
                                  <label><input type="checkbox" value="" disabled>Air Freight</label>
                                </div>
                                <div class="checkbox-inline disabled">
                                  <label><input type="checkbox" value="" disabled>Sea-Air Freight</label>
                                </div>
                                <div class="checkbox-inline disabled">
                                  <label><input type="checkbox" value="" disabled>Road Freight</label>
                                </div>
                                <div class="checkbox disabled">
                                  <label><input type="checkbox" value="" disabled>Custom Clearance</label>
                                </div>
                                <div class="checkbox disabled">
                                  <label><input type="checkbox" value="" disabled>Office Moves</label>
                                </div>
                                <div class="checkbox disabled">
                                  <label><input type="checkbox" value="" disabled>Freight Consolidation Service</label>
                                </div>
                                <div class="checkbox disabled">
                                  <label><input type="checkbox" value="" disabled>LCL to FCL Convertion</label>
                                </div>
                                <div class="checkbox disabled">
                                  <label><input type="checkbox" value="" disabled>Warehouse Services</label>
                                </div>
                                <div class="checkbox disabled">
                                  <label><input type="checkbox" value="" disabled>Plan B for Road Freight</label>
                                </div>
                                <div class="checkbox disabled">
                                  <label><input type="checkbox" value="" disabled>Local Removal</label>
                                </div>                                                         







                                <button type="submit" class="btn btn-primary">Send</button>
                            </form>
                        </div>
                    </div>                        


                    </div>
                </div>
                  



              </div>      



    </section>


	<section id="xizmetawe">

        <div class="pickservice-titlebox">
            <div class="pickservice-stroke">
                <div class="pickservice-title">
                    PICK YOUR SERVICE
                </div>
            </div>
        </div>   

		<div class="container">        

            <div class="row">

                <div class="p20">
                    
                </div>
                <?php for($i=0;$i<count($raw_data);$i++){  ?>

                    <div class="pickservice-gallery col-lg-4 col-sm-6 wow fadeInUp animated">
                        
                        <a href="" class="xizmetawe" data-toggle="modal" data-target="#pick<?php echo $i+1; ?>">
                            <img class="img-responsive" src="<?php echo $raw_data[$i]->gambar  ?>" alt="<?php echo $raw_data[$i]->nama_service;?>"></img>
                            <div class="xizmetawe-box-caption">
                                <div class="xizmetawe-box-caption-content">
                                    <div class="pickservice-choose text-faded">
                                      <?php echo $raw_data[$i]->nama_service;?>
                                    </div>
                                    <div class="pickservice-view">
                                        View More
                                    </div>
                                </div>
                            </div>
                        </a>
                        

                    </div>

                    <div class="xizmetawe-modal modal fade" id="pick<?php echo $i+1; ?>" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="babi">
                         <div class="modal-content">
                                <div class="close-modal" data-dismiss="modal">
                                    <div class="lr">
                                        <div class="rl">
                                        </div>
                                    </div>
                                </div>
                                 <div class="container">
                                    <div class="row">
                                         <div class="col-lg-8 col-lg-offset-2">
                                                <div class="modal-body">
                                                    <h2>Under Supervision</h2>
                                                    <img src="<?php echo $raw_data[$i]->gambar  ?>" class="img-responsive img-centered" alt="<?php echo $raw_data[$i]->nama_service;?>">
                                                    <p class="titlemodal">
                                                       <?php echo $raw_data[$i]->nama_service;?>
                                                    </p>
                                                    <p>
                                                       <?php echo $raw_data[$i]->deskripsi;?>
                                                    </p>
                                                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                                                </div>
                                         </div>
                                    </div>
                                </div>
                        </div>
                    </div>                   


                <?php } ?>

                

            </div> <!-- row -->

		</div> <!-- container -->

	</section>

	<section>
		
		<div class="p50"></div>

	</section>



 <?php 

include ('inc/footer.php')

  ?>