<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from deximlabs.com/dexjobs/light/post-a-job.html by HTTrack Website Copier/3.x [XR&CO'2013], Wed, 17 May 2017 14:59:52 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>RHOPEN</title>
    <link rel="icon" href="vues/images/miniature_logo.png">
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
     

	<!--Select 2-->
    <link rel="stylesheet" type="text/css" href="vues/style/assets/webcss/select2.css"/>
    <link rel="stylesheet" type="text/css" href="vues/style/assets/webcss/select2-bootstrap.css"/>
 
     <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <link rel="stylesheet" href="vues/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <!--Select 2-->
  
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
                   
                   <!-- Collect the nav links, forms, and other content for toggling -->
                    <?php require ("vues/accueil/v_menu.php");?>
                    </div><!-- .container-fluid -->
                    </nav>
                 </div>
                 
                
            </div>
       	</div>
	<!-- Header Image Or May be Slider-->
    
    <!--header section -->
    	<div class="container-fluid page-title">
			<div class="row green-banner">
            	<div class="container main-container">
                	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                		<h4 class="white-heading">Publier une offre</h4>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-6 colxs-12 capital">
                    	<h5>Notre base de données vous permet d'atteindre des millions d'utilisateurs</h5>
                    </div>
                </div>
            </div> 
        </div> 
  	 <!--header section -->

    
   <!-- full width section forms -->
    	<div class="container-fluid  contact_us">
        	<form  name="contact_us" id="form-style-2" method="POST" action="index.php?action=offres&ctrlaction=enregistrer_offre">
            	<div class="row user-information">
            	<div class="container main-container-home">
                	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        	<div class="form-group">
                            	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                	<label>Titre de l'annonce</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                            		<input type="text" name="titre_emploi" required/>
                            	</div>
                            </div>
                            <div class="form-group">
                              	
                         	<!--<div class="form-group">
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                            <label>Categorie emploi</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                        <select class="form-control" id="tagPicker" multiple="multiple" name="categories_emploi[]">
                                          <?php foreach ($categories_emploi as $categorie) {
                                                   if($categorie['LIBELLE_EMPLOI']!="Aucun")
                                                   {
                                                       echo "<option value=".$categorie['ID_CATEGORIE_EMPLOI'].">".$categorie['LIBELLE_EMPLOI']."</option>"; 
                                                   }
                                                           
                                            } ?>
                                        </select>
                                    </div>
                                </div>-->
                                 <div class="form-group">
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                            <label>Secteur emploi</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                        <select class="form-control"  name="secteur_emploi">
                                          <?php foreach ($secteurs_emploi as $secteur) {
                                                   
                                                echo "<option value=".$secteur['ID_SECTEUR'].">".$secteur['LIBELLE_SECTEUR']."</option>"; 
                                                           
                                            } ?>
                                        </select>
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                            <label>Type contrat</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                        <select class="form-control"  name="type_contrat">
                                          <?php foreach ($types_contrat as $type_contrat) {
                                                if($type_contrat['ID_TYPE_CONTRAT']!=1)
                                                {
                                                    echo "<option value=".$type_contrat['ID_TYPE_CONTRAT'].">".$type_contrat['LIBELLE_CONTRAT']."</option>"; 
                                                }           
                                            } ?>
                                        </select>
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                            <label>Ville emploi</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 ui-widget">
                                        <input type="text" name="ville" id="ville"/>
                                    </div>
                                </div>
                            <!--<div class="form-group">
                            	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                    <label>Votre email</label>
                            	</div>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                	<input type="email" name="email" placeholder="votreEmail@email"/>
                           		</div> 
                            </div>-->
                            <div class="form-group">
                            	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                    <label>Salaire Min</label>
                            	</div>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                	<input type="number" name="salaire_min" />
                           		</div> 
                            </div>
                            <div class="form-group">
                            	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                    <label>Salaire Max</label>
                            	</div>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                	<input type="number" name="salaire_max" />
                           		</div> 
                            </div>
                     </div>
                </div>
            </div>
            <!-- User Data Row-->
            	
                <!-- Company Details-->
                <div class="row company-details">
                	<div class="container main-container-home">
                    	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        	 <div class="form-group">
                              <label class="heading">Details Entreprise</label>
                            </div>
                             <div class="form-group">
                            	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                	<label class="">Nom Entreprise</label>
                            	</div>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                	<input type="text" name="nom" required/>
                            	</div>
                            </div>
                            <!--<div class="form-group">
                            	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                	<label class="default">Website <br /><span>(optional)</span></label>
                            	</div>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                	<input type="text" name="website" />
                            	</div>
                            </div>
                            <div class="form-group">
                            	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                	<label class="default">Recruter name <br /><span>(optional)</span></label>
                            	</div>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                	<input type="text" name="Recruter-name" />
                            	</div>
                            </div>
                            <div class="clearfix"></div>
                             <div class="form-group ">
                            	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 zero-padding-left">
                                	<label class="default">The position of recruiter<br /><span>(optional)</span></label>
                            	</div>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                	<input type="text" name="position-of-recruiter" />
                            	</div>
                            </div>-->
                            <div class="clearfix"></div>
                             <div class="form-group ">
                            	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 zero-padding-left">
                                	<label class="default">Description<br /><span>(obligatoire)</span></label>
                            	</div>
                                <!--<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                    <textarea name="description_emploi" rows="10" cols="50" placeholder="description du job">
                                      
                                    </textarea>
                            	</div>-->
                             <div class="box box-info">
                                
                                <div class="box-body pad col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                  
                                    <textarea id="editor1" name="description_emploi" rows="10" cols="80" required>
                                          Decrivez votre offre
                                    </textarea>
                                
                                </div>
                              </div>
                            </div>
                           
                            
                        </div>
                    </div>	
                </div>
                
                <div class="container-fluid green-banner job-page">
                    <div class="row">
                            <div class="container main-container">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center white-text">
                                    <p>Relisez les informations et appuyez sur le bouton pour poster l'offre </p>
                                    <input type="submit" class="btn btn-getstarted bg-red center-small">
                            </div>
                        </div>
                    </div>
                </div>
             </form>
        </div>
   <!-- full width section forms -->
   
 
   <?php require("vues/footer/v_footer.php");?>

    <!--Last Footer Area --> 

    <!-- Scripts
================================================== -->
   
    <!--  jQuery 1.7+  -->
    <script type="text/javascript" src="vues/style/assets/js/jquery-1.9.1.min.js"></script>
     <!--Select 2-->
    <script type="text/javascript" src="vues/style/assets/js/select2.min.js"></script>
     <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="vues/style/assets/tinymce/tinymce.min.js"></script>
    <script type="text/javascript" src="vues/jquery/autoComplete_villes.js"></script>
    <!-- Html Editor -->
      <!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script>-->
   
    <script>
		 tinymce.init({
		  selector: '.textarea',
		   templates: "modern",
		  menubar: false,
		 
		  toolbar: 'styleselect | bold italic | alignleft aligncenter alignright alignjustify | fontselect | bullist numlist outdent indent | link image',
		});
	</script>
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
    <script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
    <script src="vues/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <script>
          $(function () {
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace('editor1');
            //bootstrap WYSIHTML5 - text editor
            $(".textarea").wysihtml5();
          });
    </script>
    
    <!-- Scripts
================================================== -->
        
</body>

<!-- Mirrored from deximlabs.com/dexjobs/light/post-a-job.html by HTTrack Website Copier/3.x [XR&CO'2013], Wed, 17 May 2017 14:59:53 GMT -->
</html>

