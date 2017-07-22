<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from deximlabs.com/dexjobs/light/ by HTTrack Website Copier/3.x [XR&CO'2013], Wed, 17 May 2017 14:57:03 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<?php require("vues/accueil/v_entete.php");?>
    <body>
      
      <div id="loadessr"><div id="loader"></div></div>
   	<!-- Header Image Or May be Slider-->
        
		<div id="header" class="container-fluid home">
              <div class="row">
              
                <div class="header_banner">
                       <div class="slides">
                       		<div class="slider_items parallax-window"  data-parallax="scroll" data-image-src="vues/style/assets/images/headerimage1.jpg"></div>
                       </div>
                 </div>
             
             <!-- Header Image Or May be Slider-->
                <div class="top_header">
                    <nav class="navbar navbar-fixed-top">
               			 
                         <div class="container">
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    
                   <?php 
                        
                       if(isset($verifierExistenceUser))
                       {
                           if(empty($verifierExistenceUser))
                            {
                             require("vues/authentification/v_confirmation_inscription.php");
                            }
                       }

                        require ("vues/accueil/v_menu.php");
                   ?>
                    
                    </div>
                    <!-- container-fluid -->
                    </nav>
                    
                    <div class="container slogan">
                        <div class="col-lg-12">
                        	<h1 class="animated fadeInDown" style="color:black;font-size: 40px">Venir travailler en France, c’est possible !</h1>
                            <h3 class="text-center"><span>Nous sommes </span>experts en migration professionnelle</h3>
                            <a href="#" >Nous avons un projet <span>personnalisé</span> pour vous!</a>
                        </div>
                    
                    </div>
                    
                 </div>

                  <div class="jobs_filters">
                      <div class="container">
                          <form class="" action="http://deximlabs.com/dexjobs/light/index.html">
                              <!--col-lg-3 filter_width -->
                              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 filter_width bgicon">
                                  <div class="form-group">
                                      <div class="dropdown">
                                          <button class="filters_feilds btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                              Categorie
                                              <span class="glyphicon glyphicon-menu-down"></span>
                                          </button>

                                          <div class="dropdown-menu "  aria-labelledby="dropdownMenu1">
                                              <ul class="tiny_scrolling" id="style-3">
                                                  <li><a href="#">Web Developer</a></li>
                                                  <li><a href="#">Graphic designer</a></li>
                                                  <li><a href="#">Developer</a></li>
                                                  <li><a href="#">UX Designer</a></li>
                                                  <li><a href="#">Web Developer</a></li>
                                                  <li><a href="#">Graphic designer</a></li>
                                                  <li><a href="#">Developer</a></li>
                                                  <li><a href="#">UX Designer</a></li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                                  <span>Ex. Finance</span>
                              </div>
                              <!--col-lg-3 filter_width -->

                              <!-- col-lg-5 filter_width -->
                              <div class="col-lg-5 col-md-4 col-sm-6 col-xs-12 filter_width bgicon">
                                  <div class="form-group">
                                      <input type="text" class="form-control" placeholder="Mot clé, métier ou compétence">
                                      <span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>
                                  </div>
                                  <span>Ex. Designer</span>
                              </div>
                              <!-- col-lg-5 filter_width -->

                              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 filter_width bgicon location">
                                  <div class="form-group">
                                      <input type="text" class="form-control" placeholder="Localisation">
                                      <span class="glyphicon fa fa-location-arrow" aria-hidden="true"></span>
                                  </div>
                                  <span>Ex. Paris</span>
                              </div>
                              <div class="col-lg-1 col-md-2 col-sm-6 col-xs-12 filter_width bgicon submit">
                                  <div class="form-group">
                                      <input type="submit" class="customsubmit" name="submit" value="Search"/>
                                      <span class="glyphicon fa fa-search" aria-hidden="true"></span>
                                  </div>
                              </div>
                          </form>
                      </div>

                  </div>
                 
                <?php
                    if(isset($_SESSION['role']))
                    {
                        if($_SESSION['role']=="recruteur")
                        {
                            if(isset($_GET['action']) && isset($_GET['ctrlaction']))
                            {
                                if($_GET['action']=="offres" && $_GET['ctrlaction']=="mes_offres")
                                {
                                    require("vues/authentification/v_modal_modifRecruteur.php");
                                    //require("vues/filtres/v_filtre_offre.php");
                                }
                                else
                                {
                                    require("vues/authentification/v_modal_modifRecruteur.php");
                                    require("vues/filtres/v_filtre_cv.php");
                                }
                            }
                            else 
                            {
                                require("vues/authentification/v_modal_modifRecruteur.php");
                                require("vues/filtres/v_filtre_cv.php");
                            } 
                        }  
                        else
                        {
                            require("vues/authentification/v_modal_modifCandidat.php");
                            require("vues/filtres/v_filtre_offre.php");
                        }
                    }
                   
                ?>
            </div>
       	</div>
    <!-- Header Section -->
	<!--maine container Section -->
        
        <div class="container main-container-home">
           
           <div class="jobs_results">
               	<!--Filters Category -->
                 
              	<!-- Filters Category --> 
                	<?php 
                            if(isset($_SESSION["role"]))
                            {
                                if($_SESSION["role"]=="recruteur")
                                {
                                    if(isset($_GET['action']) && isset($_GET['ctrlaction']))
                                    {
                                         if($_GET['action']=="offres" && $_GET['ctrlaction']=="mes_offres")
                                        {
                                            require ("vues/offres/v_offres_emploi.php") ;
                                        }
                                        else
                                        {
                                            require ("vues/etudiants/v_cv_users.php") ;
                                        }
                                    }
                                    else
                                    {
                                         require ("vues/etudiants/v_cv_users.php") ;
                                    }
                                    
                                }
                                else
                                {
                                      require ("vues/offres/v_offres_emploi.php") ;
                                }
                            }
                            else
                            {
                                require ("vues/offres/v_offres_emploi.php") ;
                            }
                         
                          
                        ?>
           </div>
        
        </div>
        <div class="container-fluid testimionals" style="background:url(vues/style/assets/images/testbg.png);">
			<div class="row">
            <div class="container main-container">
            	<div class="col-lg-12">
                    <div id="testio" class="owl-carousel owl-template">
                      <!--Slides-->
                      <div class="item">
                      		<img src="vues/style/assets/images/tes-profile.png" alt="Photo" /> 
                            <div class="info">
                            	<h5>Anna Smith</h5>
                                <span>Web Designer</span>
                                <p>Nam eu eleifend nulla. Duis consectetur sit amet risus sit amet venenatis. Pellentesque pulvinar ante a tincidunt placerat.
Donec dapibus efficitur arcu, a rhoncus lectus egestas elem</p>
                            </div>
                       </div>
                      
                      <div class="item">
                      		<img src="vues/style/assets/images/tes-profile.png" alt="Photo" /> 
                            <div class="info">
                            	<h5>Anna Smith</h5>
                                <span>Web Designer</span>
                                <p>Nam eu eleifend nulla. Duis consectetur sit amet risus sit amet venenatis. Pellentesque pulvinar ante a tincidunt placerat.
Donec dapibus efficitur arcu, a rhoncus lectus egestas elem</p>
                            </div>
                       </div>
                      
                      <div class="item">
                      		<img src="vues/style/assets/images/tes-profile.png" alt="Photo" /> 
                            <div class="info">
                            	<h5>Anna Smith</h5>
                                <span>Web Designer</span>
                                <p>Nam eu eleifend nulla. Duis consectetur sit amet risus sit amet venenatis. Pellentesque pulvinar ante a tincidunt placerat.
Donec dapibus efficitur arcu, a rhoncus lectus egestas elem</p>
                            </div>
                       </div>
                       
                      <div class="item">
                      		<img src="vues/style/assets/images/tes-profile.png" alt="Photo" /> 
                            <div class="info">
                            	<h5>Anna Smith</h5>
                                <span>Web Designer</span>
                                <p>Nam eu eleifend nulla. Duis consectetur sit amet risus sit amet venenatis. Pellentesque pulvinar ante a tincidunt placerat.
Donec dapibus efficitur arcu, a rhoncus lectus egestas elem</p>
                            </div>
                       </div>
                     
                    </div>
                </div>
            </div>     
        </div>
       </div>
          <!-- Testimionals Slider-->
    <!-- Clients Slider-->
       
	<!-- Client Slider--> 
<!--Footer Area-->
   		<?php require("vues/footer/v_footer.php");?>
    <!--Last Footer Area----> 

<!-- Scripts
================================================== -->
   <!--  jQuery 1.7+  -->
     <script type="text/javascript" src="vues/style/assets/js/jquery-1.9.1.min.js"></script>
     <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
      $( function() {
        $( ".datepicker" ).datepicker({
            dateFormat: "dd-mm-yy"
        });
      } );
    </script>
    <script type="text/javascript" src="vues/jquery/verifMotsDePasse.js"></script>
    <script type="text/javascript" src="vues/jquery/cacherMessageConfirmation.js"></script>
    <script type="text/javascript" src="vues/jquery/verificationFormulaireInscription.js"></script>
     <!--Select 2-->
    <script type="text/javascript" src="vues/style/assets/js/select2.min.js"></script>
    <!-- Html Editor -->
    <script src="vues/style/assets/tinymce/tinymce.min.js"></script>
	<!--  parallax.js-1.4.2  -->
    <script type="text/javascript" src="vues/style/assets/parallax.js-1.4.2/parallax.js"></script>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="vues/style/assets/js/bootstrap.min.js"></script>
   	<!-- Include js plugin -->
    <script type="text/javascript" src="vues/style/assets/owlslider/owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="vues/style/assets/js/waypoints.min.js"></script> 
  	<script type="text/javascript" src="vues/style/assets/counter/jquery.counterup.min.js"></script> 
    <!--Site JS-->
     <script src="vues/style/assets/js/webjs.js"></script>

     <script>
        $(window).load(function() {

           $("#loadessr").fadeOut();

        });
    </script>     
  
  <!-- Scripts
================================================== -->
	</body>

<!-- Mirrored from deximlabs.com/dexjobs/light/ by HTTrack Website Copier/3.x [XR&CO'2013], Wed, 17 May 2017 14:57:42 GMT -->
</html>