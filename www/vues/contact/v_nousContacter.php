<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from deximlabs.com/dexjobs/light/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2013], Wed, 17 May 2017 15:01:28 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>DEXJOBS- Contact US</title>
    <link rel="icon" href="vues/style/assets/images/favicon.png">
    <!-- Bootstrap -->
    <link href="vues/style/assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--Custom template CSS-->
     <link href="vues/style/style.css" rel="stylesheet" />
      <!--Custom template CSS Responsive-->
      <link href="vues/style/assets/webcss/site-responsive.css" rel="stylesheet" />
     <!--Owsome Fonts -->
     <link rel="stylesheet" href="vues/style/assets/font-awesome/css/font-awesome.min.css" />
      <!-- Important Owl stylesheet -->
    <link rel="stylesheet" href="vues/style/assets/owlslider/owl-carousel/owl.carousel.css" />
     
    <!-- Default template -->
    <link rel="stylesheet" href="vues/style/assets/owlslider/owl-carousel/owl.template.css" />


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

<body class="title-image">
	<!-- Header Image Or May be Slider-->
    	<div id="header" class="container-fluid pages">
              <div class="row">
             <!-- Header Image Or May be Slider-->
                <div class="top_header">
                    <nav class="navbar navbar-fixed-top">
                         <div class="container">
                   
                             <?php 
                               if(isset($_POST['nom']))
                               {
                                   require("vues/contact/v_confirmation_mail_envoye.php"); 
                               }
                               
                                require ("vues/accueil/v_menu.php");
                            ?>
                    
                    </div><!-- .container-fluid -->
                    </nav>
                 </div>
                 
                
            </div>
       	</div>
	<!-- Header Image Or May be Slider-->
    
    <!--header section -->
    	<div class="container-fluid page-title">
			<div class="row blue-banner">
            	<div class="container main-container">
                	<div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                		<h3 class="white-heading">Contactez nous </h3>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                    	<h5>Laissez nous un message et nous vous repondrons dans les meilleurs delais</h5>
                    </div>
                </div>
            </div> 
        </div> 
  	 <!--header section -->
    
    
   <!-- full width section forms -->
    	<div class="container-fluid  contact_us">
        	<div class="row">
            	<div class="container main-container" id="form-style-2">
                	<div class="col-lg-9 col-lg-push-1">
                    	<form  name="contact_us" method="POST" action="index.php?action=contacter&ctrlaction=envoyerMessage">
                        	<div class="form-group">
                            	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12"><label>Nom:</label></div>
                            	<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12"><input type="text" name="nom"></div>
                            </div>
                            <div class="form-group">
                            	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12"><label>Email:</label></div>
                            	<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12"><input type="email" name="email"/></div>
                            </div>
                            <div class="form-group">
                            	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12"><label>Message:</label></div>
                            	<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12"><textarea rows="5" name="message"></textarea></div>
                            </div>
                              <div class="form-group submit">
                              	
                            	<div class="col-lg-10 col-lg-push-2 col-md-10 col-md-push-2 col-sm-10 col-sm-push-2 col-xs-12"><input type="submit" name="submit" value="Send message"/></div>
                            </div>
                        
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php require("vues/footer/v_footer.php");?>
        <!-- Scripts
================================================== -->
   	<!--  jQuery 1.7+  -->
     <script type="text/javascript" src="vues/style/assets/js/jquery-1.9.1.min.js"></script>
     <script type="text/javascript" src="vues/jquery/cacherMessageConfirmation.js"></script>
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
        <!-- Scripts
================================================== -->
        
</body>

<!-- Mirrored from deximlabs.com/dexjobs/light/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2013], Wed, 17 May 2017 15:01:28 GMT -->
</html>
