  <div class="logo">
                                <a href="index.php"><img src="vues/images/logo.png" alt="Photo" /> </a>
                             </div>
                             <div class="logins">
                                   <?php 
                                       if(!(isset($_SESSION['role'])))
                                       {
                                            echo '<a href="index.php?action=authentification&ctrlaction=inscr_ou_conn" class="login"><i class="fa fa-user"></i></a>';
                                       }
                                       else
                                       {
                                           echo '<a href="#" style="margin-right:70px" class="login dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i></a>';
                                           echo ' <ul class="dropdown-menu dropdown-menu-right">
                                                 <li><a href="" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Mes Infos</a></li>';
                                            if($_SESSION['role']=="recruteur") 
                                            {
                                               echo '<li><a href="index.php?action=offres&ctrlaction=mes_offres">Mes Offres</a></li>'; 
                                            }
          
                                             echo' <li><a href="index.php?action=authentification&ctrlaction=deconnexion">Deconnexion</a></li>
                                                </ul>';
                                       }
                                   ?>

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
                                    <li><a href="index.php">Par secteurs</a></li>
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
			 
                               
                            <li class="mobile-menu"><a href="index.php?action=offres&ctrlaction=poster_offre">POSTER VOTRE CV!</a></li>
                     
                            <li class="mobile-menu"><a href="index.php?action=authentification&ctrlaction=inscr_ou_conn">Register User</a></li>
                          </ul>
                     
                    </div><!-- navbar-collapse -->
     
                    
