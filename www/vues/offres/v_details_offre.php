<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from deximlabs.com/dexjobs/light/job-style-one.html by HTTrack Website Copier/3.x [XR&CO'2013], Wed, 17 May 2017 15:00:22 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<?php require("vues/accueil/v_entete.php");?>

<body>
	<!-- Header Image Or May be Slider-->
    	<div id="header" class="container-fluid pages">
              <div class="row">
             <!-- Header Image Or May be Slider-->
                <div class="top_header">
                    <nav class="navbar navbar-fixed-top">
                         <div class="container">
                           <div class="logo">
                                <a href="index.php"><img src="vues/images/logo.png" alt="Photo" /> </a>
                             </div>
                              <div class="logins">

                                    <a href="index.php?action=authentification&ctrlaction=inscr_ou_conn" class="login"><i class="fa fa-user"></i></a>
                    		</div>
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                          </button>
                    </div>
                    
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                          <ul class="nav navbar-nav">
                              
                             <li><a href="index.php">ACCUEIL</a></li>
                             <li><a href="index.php?action=articles&ctrlaction=notre_demarche">NOTRE DEMARCHE</a></li>

                                <li style="color:#31ce8a !important"><a href="index.php?action=articles&ctrlaction=informatique">IT en France</a></li>
                                <div class="logins">
                                <?php 
                
                                    if(!(isset($_SESSION['role'])))
                                    {
                                        echo "<a href='index.php?action=authentification&ctrlaction=inscr_ou_conn' class='post_job'><span class='label job-type partytime'>FUTUR CANDIDAT ?</span></a> 
                                        <a href='index.php?action=authentification&ctrlaction=inscr_ou_conn' class='login'><i class='fa fa-user'></i></a>";
                                    }
                                ?>
                    		
                    		</div>
                         
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">SECTEURS QUI RECRUTENT</a>
                                  <ul class="dropdown-menu">
                                    <li><a href="index.php?action=articles&ctrlaction=informatique">Informatique</a></li>
                                    <li><a href="index.php?action=articles&ctrlaction=btp">BTP</a></li>
                                   <li><a href="index.php?action=articles&ctrlaction=sante">Sante</a></li>
                                    <li><a href="index.php?action=articles&ctrlaction=autres_secteurs">Autres Secteurs</a></li>
                                  </ul>
                            </li>
                         
                             <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">OFFRES D'EMPLOI</a>
                                  <ul class="dropdown-menu">
                                    <li><a href="job-style-one.html">Par secteurs</a></li>
                                    <?php 
                                        if(isset($_SESSION['role']) )
                                        {
                                            if($_SESSION['role']=="recruteur")
                                            {
                                                echo "<li><a href='index.php?action=offres&ctrlaction=poster_offre'>Publiez une offre</a></li>";
                                            }
                                            
                                        }
                                        
                                    ?>
                                    
                                
                                
                                  </ul>
                            </li>
			 
                                <?php if(isset($_SESSION['role']))
                                    {
                                        if($_SESSION['role']=="recruteur")
                                        {
             
                                             echo ' <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mon Compte</a>
                                                  <ul class="dropdown-menu">
                                                    <li><a href="index.php?action=articles&ctrlaction=informatique">Mes Infos</a></li>
                                                    <li><a href="index.php?action=authentification&ctrlaction=deconnexion">Deconnexion</a></li>
                                                  </ul>
                                               </li>';
                                        }
                                        else if ($_SESSION['role']=="etudiant")
                                        {
                                            //echo "<a href='index.php?action=authentification&ctrlaction=inscr_ou_conn' class='post_job'><span class='label job-type partytime'>POSTER VOTRE CV</span></a> ";
                                              echo ' <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mon Compte</a>
                                                  <ul class="dropdown-menu">
                                                    <li><a href="index.php?action=articles&ctrlaction=informatique">Mes Infos</a></li>
                                                    <li><a href="index.php?action=authentification&ctrlaction=deconnexion">Deconnexion</a></li>
                                                  </ul>
                                               </li>';
                                        }
                                    }?>   
                            <li class="mobile-menu"><a href="index.php?action=offres&ctrlaction=poster_offre">POSTER VOTRE CV!</a></li>
                     
                            <li class="mobile-menu"><a href="index.php?action=authentification&ctrlaction=inscr_ou_conn">Register User</a></li>
                          </ul>
                     
                    </div><!-- navbar-collapse -->
                    </div><!-- container-fluid -->
                    </nav>
                 </div>
                 
                
            </div>
       	</div>
	<!-- Header Image Or May be Slider-->
     
    <!-- Page Title-->
    	<div class="container-fluid page-title">
			<div class="row green-banner">
            	<div class="container main-container">
                	<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                		<h3 class="white-heading"><?php echo $infos_emploi[0]['TITRE_EMPLOI'];?></h3>
                    </div>
                    <!--<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right" >
                		<div class="favourite">Save Job<i class="fa fa-star-o"></i><span>Posted on March 2016</span></div>
                    </div>-->
                </div>
            </div> 
            
            <div class="row dashboard">
            	<div class="container main-container gery-bg">
            		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  no-padding user-data">
                        <div class="seprator ">
                            <div class="no-padding user-image"><img src="vues/style/assets/images/job-admin.png" alt=""/></div>
                            <div class="user-tag"><?php echo $infos_user[0]['NOM_SOCIETE_USER']?><span><?php echo $infos_user[0]['NOM_USER'];?></span></div>
                            <div class="job-status"><span class="label job-type job-partytime"><?php echo $libelle_contrat;?></span></div>
                        </div>
                        <div class="seprator">
                            <div class="user-tag"><label>Salaire<span><?php echo $infos_emploi[0]['SALAIRE_MIN'];echo "€-";echo $infos_emploi[0]['SALAIRE_MAX']."€";?></span></label></div>
                       	</div>
                         <!--<div class="seprator">
                            <div class="user-tag"><label>Hours<span>44h / week</span></label></div>
                       	</div>-->
                         <div class="seprator">
                            <div class="user-tag"><label>Ville<span><?php echo $infos_ville[0]['VILLE_NOM_REEL'];?></span></label></div>
                       	</div>
                	</div>
            </div>
            </div>        
        </div>
    <!--Page Title-->
    
    <!-- Job Data -->
  		<div class="container-fluid jpd-data white-bg">
        	<div class="row">
            	<div class="container main-container-job">
                	<div class="col-lg-9 col-md-9 col-sm-8">
                    	
                        <div class="content">
                        	<?php echo htmlspecialchars_decode($infos_emploi[0]['DESCRIPTION']);?>
                         </div>

                         
                    </div>
                    
                    <div class="col-lg-3 col-md-3 col-sm-4 sidebar">
						<div class="widget w1">
                        	<ul>
                            	<li>
                                	<a href="#" data-toggle="modal" data-target="#myModal"><span class="label job-type apply-job">CANDIDATER</span></a>
                                        <div class="modal fade" id="myModal" role="dialog">
                                            <!-- Popup Model-->
                                           <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h3 class="modal-title">Candidater<span></span></h3>
                                                    </div>
                                                    <form action="index.php?action=offres&ctrlaction=candidater_offre&id=<?php echo $_GET['id']?>" method="POST" enctype="multipart/form-data">
                                                    <div class="modal-body">
                                                       <div class="form-group">
                                                            <label>Nom</label>
                                                            <input type="text" name="name"/>
                                                       </div>
                                                       <div class="form-group">
                                                            <label>E-mail</label>
                                                            <input type="email" name="email"/>
                                                       </div>
                                                        <div class="form-group">
                                                            <label>Message</label>
                                                            <textarea name="message"></textarea>
                                                       </div>
                                                         <div class="form-group etudiant">
                                                            <label>Envoyer votre cv :</label>
                                                            <input name="userfile" type="file" />
                                                        </div>
                                                    </div>
                                                         <div class="modal-footer">
                                                           <input type="submit" value="Envoyer CV">
                                                       
                                                    </div>
                                                    </form>
                                                   
                                                </div>
                                           </div>
                                        </div>
                                     
                                         <!-- Popup Model-->
                               		<!--<span class="label job-type apply-link">CANDIDATER<i class="fa fa-linkedin"></i></span>-->
                                         <div class="widget w2 " style="margin-top:40px">
                                            <div class="subscribe">
                                            <form>
                                            
                                                <div class="form-group">
                                                    <input type="email" placeholder="saisir email" name="email"/>
                                                    <button type="submit" class="btn btn-print bg-blue">Envoyer a un ami</button>
                                                </div>
                                            </form>
                                            <a href="#"><i class="fa fa-print" aria-hidden="true"></i>Print Job</a>
                                        </div>
                            
                                        </div>
                                </li>
                            
                            </ul>
                                                 
                        </div>
                          <!-- Modal -->
  
                        <div class="widget w2">
                        	<div class="subscribe">
                                <form>
                                <h3>Get similar jobs by email</h3>
                                    <div class="form-group">
                                        <input type="email" placeholder="enter your email" name="email"/>
                                        <button type="submit" class="btn btn-print bg-blue">Send me a jobs</button>
                                    </div>
                                </form>
                                <a href="#"><i class="fa fa-print" aria-hidden="true"></i>Print Job</a>
                            </div>
                            
                        </div>
                        
                                            
                    </div>
                </div>
            </div>
        
        </div>
    <!--Job Data-->
    
    <!-- ob Recoended-->
 		<div class="container-fluid  job-recom">
        	<div class="row">
            	<div class="main-container">
                	<div class="col-lg-12 text-center">
                    	<h3>Recommended Jobs</h3>
                    
                    </div>
                    <div id="recommended-job" class="owl-carousel owl-template">
                	<!--Recomended job-->
                    <div class="item recom-job 01">
                        <div class="related_jos">  
                        	<h4>Web Designer at Google inc </h4>
                            <span class="label job-type job-partytime">Party Time</span>
                            <p>New Yourk<br />Google INC opening</p>
                            <span class="salary">$30,000 - $45,000 <i class="fa fa-star-o"></i><i class="fa fa-star"></i></span>
                        	
                        </div>
                    </div>
                    <!--Recomended job-->
                    	<!--Recomended job-->
                    <div class="item recom-job 02">
                        <div class="related_jos">  
                        	<h4>Web Designer at Google inc </h4>
                            <span class="label job-type job-partytime">Party Time</span>
                            <p>New Yourk<br />Google INC opening</p>
                            <span class="salary">$30,000 - $45,000 <i class="fa fa-star-o"></i><i class="fa fa-star"></i></span>
                        	
                        </div>
                    </div>
                    <!--Recomended job-->
                    	<!--Recomended job-->
                    <div class="item recom-job 03">
                        <div class="related_jos">  
                        	<h4>Web Designer at Google inc </h4>
                            <span class="label job-type job-partytime">Party Time</span>
                            <p>New Yourk<br />Google INC opening</p>
                            <span class="salary">$30,000 - $45,000 <i class="fa fa-star-o"></i><i class="fa fa-star"></i></span>
                        	
                        </div>
                    </div>
                    <!--Recomended job-->	
                    <!--Recomended job-->
                    <div class="item recom-job 04">
                        <div class="related_jos">  
                        	<h4>Web Designer at Google inc </h4>
                            <span class="label job-type job-partytime">Party Time</span>
                            <p>New Yourk<br />Google INC opening</p>
                            <span class="salary">$30,000 - $45,000 <i class="fa fa-star-o"></i><i class="fa fa-star"></i></span>
                        	
                        </div>
                    </div>
                    <!--Recomended job-->
                    <!--Recomended job-->
                    <div class="item recom-job 05">
                        <div class="related_jos">  
                        	<h4>Web Designer at Google inc </h4>
                            <span class="label job-type job-partytime">Party Time</span>
                            <p>New Yourk<br />Google INC opening</p>
                            <span class="salary">$30,000 - $45,000 <i class="fa fa-star-o"></i><i class="fa fa-star"></i></span>
                        </div>
                    </div>
                    <!--Recomended job-->
					  <div class="item recom-job 06">
                        <div class="related_jos">  
                        	<h4>Web Designer at Google inc </h4>
                            <span class="label job-type job-partytime">Party Time</span>
                            <p>New Yourk<br />Google INC opening</p>
                            <span class="salary">$30,000 - $45,000 <i class="fa fa-star-o"></i><i class="fa fa-star"></i></span>
                        	
                        </div>
                    </div>
                    <!--Recomended job-->
                    </div>
                    
                	
                </div>
            </div>
        </div>
    <!--Job Recoended-->
    
    <!--Blue Secions --> 
    <div class="container-fluid green-banner" style="background:#214f7f">
                <div class="row">
                    <div class="container main-container v-middle" id="style-2">
                        <div class="col-lg-10 col-md-8 col-sm-8 col-xs-12  ">
                            <h3 class="white-heading">Vous avez une question?<span class="call-us">Contactez nous sur <strong>contact@rhopen.fr</strong></span></h3>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-12 col-xs-12">
                            <a href="#" class="btn btn-getstarted bg-red">Commencez</a>
                        </div>
                    </div>
                </div>
            </div>
    <!--blue Section -->
    
<!--Footer Area-->
   		<?php require("vues/footer/v_footer.php");?>
   
    
    
    
    <!-- Scripts
================================================== -->
    
        <!--  jQuery 1.7+  -->
     <script type="text/javascript" src="vues/style/assets/js/jquery-1.9.1.min.js"></script>
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

<!-- Mirrored from deximlabs.com/dexjobs/light/job-style-one.html by HTTrack Website Copier/3.x [XR&CO'2013], Wed, 17 May 2017 15:00:29 GMT -->
</html>
