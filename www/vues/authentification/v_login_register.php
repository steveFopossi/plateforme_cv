<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from deximlabs.com/dexjobs/light/login_register.html by HTTrack Website Copier/3.x [XR&CO'2013], Wed, 17 May 2017 14:59:54 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<?php require("vues/accueil/v_entete.php");?>

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
    
    <div class="container-fluid login_register header_area deximJobs_tabs">
    	<div class="row">
            <div class="container main-container-home">
                    <div class="col-lg-offset-1 col-lg-11 col-md-12 col-sm-12 col-xs-12">
                        <ul class="nav nav-pills ">
                            <li ><a data-toggle="tab" href="#register-account">s'inscrire</a></li>
                            <li class="active"><a data-toggle="tab" href="#login" >se connecter</a></li>
                           
                        </ul>

                    <div class="tab-content">
                        <div id="register-account" class="tab-pane fade in  white-text">
                        	
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 zero-padding-left">
                            	<!--<p>Login to your Recruiter account.</p>-->
                                        <form enctype="multipart/form-data" id="inscription" name="contact_us" class="contact_us" action="index.php?action=authentification&ctrlaction=inscription" method="POST">
                                             <div class="form-group">
                                                <label>Vous êtes ?</label>
                                                <div class="dropdown">
                                                    
                                                    <div class="form-group">
                                                        <select name="role" class="form-control" id="roles">
                                                             
                                                              <?php foreach ($roles as $role) {
                                                                        /*if($role['ID_ROLE']!=3)
                                                                        {*/
                                                                            echo "<option value=".$role['ID_ROLE'].">".$role['LIBELLE_ROLE']."</option>"; 
                                                                        /*}*/
                                                                          
                                                                } ?>
                                                            
                                                            <!--<option value="1">Etudiant</option>
                                                            <option value="3">Recruteur</option>-->
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                             <div class="form-group etudiant">
                                                <label>Secteur</label>
                                                <div class="dropdown">
                                                    
                                                    <div class="form-group">
                                                        <select name="secteur" class="form-control" id="secteur">
                                                             
                                                              <?php foreach ($secteurs as $secteur) {
                                                                       
                                                                            echo "<option value=".$secteur['ID_SECTEUR'].">".$secteur['LIBELLE_SECTEUR']."</option>"; 
                                                                       
                                                                          
                                                                } ?>
                                                            
                                                            <!--<option value="1">Etudiant</option>
                                                            <option value="3">Recruteur</option>-->
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Prénom</label>
                                                <input type="text" name="prenom" >
                                            </div>
                                            <div class="form-group" >
                                                <label>Nom</label>
                                                <input type="text" name="nom" required>
                                            </div>
                                            
                                            <div class="form-group recruteur">
                                                <label>Nom Société</label>
                                                <input type="text" name="nom_societe" >
                                            </div>
                                            <div class="form-group">
                                                <label>E-mail</label>
                                                <input type="email" name="email" id="email" required>
                                            </div>
                                            <div class="form-group">
                                                <label></label>
                                                <span id="verifEmail" style="color:red"></span>
                                            </div>
                                            <div class="form-group">
                                                <label>Mot de passe</label>
                                                <input type="password" name="password" id="password" minlength=6/>
                                            </div>
                                             <div class="form-group">
                                                <label>Mot de passe</label>
                                                <input type="password" name="cpassword" id="cpassword" minlength=6/>
                                            
                                            </div>
                                            <div class="message_erreur password form-group">
                                               
                                                <label></label>
                                                 <span  id="pays1" style="color:red;font-family:LatoRegular;font-size:16px">Les mots de passe ne sont pas identiques</span>
                                            </div>
                                             <div class="form-group etudiant">
                                                <label>Envoyer votre cv :</label>
                                                  <input name="userfile" type="file" />
                                            </div>
                                            
                                            
                                            <div class="form-group etudiant">
                                                <label>Type de contrat recherché</label>
                                                <div class="dropdown">
                                                    
                                                    <div class="form-group">
                                                        <select name="type_contrat" class="form-control" id="sel1">
                                                       <?php foreach ($types_contrat as $type_contrat) {
                                                           if($type_contrat['LIBELLE_CONTRAT']!="Aucun")
                                                           {
                                                               echo "<option value=".$type_contrat['ID_TYPE_CONTRAT'].">".$type_contrat['LIBELLE_CONTRAT']."</option>"; 
                                                           }
                                                           
                                                         } ?>
                                                        
                                                         
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label>Pays de résidence</label>
                                                <div class="dropdown">
                                                    
                                                    <div class="form-group">
                                                        <select name= "pays" class="form-control " id="pays">
                                                         <option value="0">----------------------------------</option>"; 
                                                       <?php foreach ($les_pays as $pays) {
                                                           
                                                             echo "<option value=".$pays['ID_PAYS'].">".$pays['NOM_FR_FR']."</option>"; 
                                                           
                                                           
                                                         } ?>
                                                        
                                                         
                                                        </select>
                                                    </div>
                                                    <span class="message_erreur pays"  style="color:red;font-family:LatoRegular;font-size:16px">Choississez un pays de résidence</span>
                                                </div>
                                                
                                            </div>
                                          
                                             <div class="form-group etudiant">
                                                <label>Comment avez vous connu Rhopen ?</label>
                                                <div class="dropdown">
                                                        
                                                    <div class="form-group ">
                                                        <select name="role_partenaire" class="form-control" id="role_partenaire">
                                                            <option value="0">----------------------------------</option>
                                                           <?php foreach ($roles_partenaires as $role_partenaire) {
                                                              
                                                                   echo "<option value=".$role_partenaire['ID_ROLE_PARTENAIRE'].">".$role_partenaire['LIBELLE_ROLE']."</option>"; 
                                                              

                                                             } ?>
                                                        
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group partenaire">
                                                <label>Nom partenaire</label>
                                                <div class="dropdown">
                                                        
                                                    <div class="form-group ">
                                                        <select name="nom_partenaire" class="form-control" id="nom_partenaire">
                                                           <option value="0">----------------------------------</option>
                                                           <?php foreach ($liste_partenaires as $liste_partenaire) 
                                                               {
                                                              
                                                                   echo "<option value=".$liste_partenaire['ID_PARTENAIRE'].">".$liste_partenaire['NOM_PARTENAIRE']."</option>"; 
                                                              
                                                             } 
                                                           ?>
                                                        
                                                        </select>
                                                    </div>
                                                </div>
                                          
                                                  <div class="form-group partenaire_m">
                                                    <label></label>
                                                           <span  style="color:red;font-family:LatoRegular;font-size:16px">Choississez un partenaire</span>
                                                </div>
                                            </div>
                                            <div class="form-group submit">
                                                <label>Submit</label>
                                                <input type="submit" name="submit" value="S'enregistrer" class="register" id="enregistrer">
                                                <a href="lost-password.html" class="lost_password">Mot de passe oublié?</a>
                                            </div>
                                 </form>
                        	</div>
                            <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12  pull-right sidebar">
                            	<div class="widget">
                                	<h3>Pourquoi nous envoyer votre profil? </h3>
                                    <ul>
                                    	<li><p><i class="fa fa-clock-o"></i>Un examen de votre profil est rapidement réalisé
</p></li>
										<li><p><i class="fa fa-child"></i>L'Agence prend contact avec vous
</p></li>

										<li><p><i class="fa fa-check-circle-o"></i>Nos experts vous proposent un projet personnalisé pour aboutir à travailler en France dans les meilleures conditions
</p></li>
                                    </ul>
                                   
                           		</div> 
                            </div>
                        </div>
                        <div id="login" class="tab-pane fade in active white-text">
                        	
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 zero-padding-left">
                            	<!--<p>Login to your Recruiter account.</p>-->
                                <form method ="POST" name="contact_us" class="contact_us" action="index.php?action=authentification&ctrlaction=connexion">
                        	<div class="form-group">
                            	<label>Email</label>
                            	<input type="email" name="email">
                            </div>
                           
                            <div class="form-group">
                            	<label>Mot de passe</label>
                            	<input type="password" name="password" id="password-2"/>
                            </div>
                                                        
                            <div class="form-group submit">
                            	<label>Submit</label>
                            	<div class="cbox">
                                	<input type="checkbox" name="checkbox"/>
                                	<span>Remember me</span>
                               </div>
                            </div>
                            <div class="form-group submit">
                            	<label>Submit</label>
                            	<input type="submit" name="submit" value="Connexion" class="signin" id="signin">
                                <a href="lost-password.html" class="lost_password">Mot de passe oublié?</a>
                            </div>
                           
                        
                        	</form>
                        	</div>
                            <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12  pull-right sidebar">
                            	<div class="widget">
                                	<h3>Vous n'avez pas de compte?</h3>
                                    <ul>
                                    	<li>
                                        <p> Si tu as envie de trouver un emploi en France ou recruter dans un pays étranger, rejoins notre communauté. </p></li>
										<li><p>L'un de nos experts te contactera dans les meilleurs délais </p></li>
										<li>
                                        
                                        </li>
                                    </ul>
                                   
                           		</div> 
                            </div>
                        </div>
                       
                    </div>
                        
                        
                    </div>
                    
			</div>
       </div>
        <!-- Button trigger modal -->

    </div> 
	
     
<?php require("vues/footer/v_footer.php");?>
    	
    <!-- Scripts
================================================== -->
    <!--Last Footer Area----> 

             <!--  jQuery 1.7+  -->
     <script type="text/javascript" src="vues/style/assets/js/jquery-1.9.1.min.js"></script>
      <script type="text/javascript" src="vues/jquery/selectChampsInscription.js"></script>
      <script type="text/javascript" src="vues/jquery/partenaires.js"></script>
      <script type="text/javascript" src="vues/jquery/verificationFormulaireInscription.js"></script>
      <script type="text/javascript" src="vues/jquery/verifierExistenceEmail.js"></script>
   
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

<!-- Mirrored from deximlabs.com/dexjobs/light/login_register.html by HTTrack Website Copier/3.x [XR&CO'2013], Wed, 17 May 2017 14:59:54 GMT -->
</html>
