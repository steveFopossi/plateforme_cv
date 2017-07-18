<div class="jobs-result"> 
                       <!--Search Result 01-->
                        <div class="col-lg-12">
                       
                          
                            <!--jobs result--> 
                            
                            <?php
                                foreach ($offres_emploi as $info) 
                                { 
                                     echo "<a href='index.php?action=offres&ctrlaction=details_offre&id=".$info['ID_EMPLOI']."'> <div class='filter-result 04'>
                                    <div class='col-lg-6 col-md-6 col-sm-7 col-xs-12 pull-left'>
                                    <div class='company-left-info pull-left'>
                                        <img  src='vues/images/logo_miniature.png' alt=''/>
                                    </div>
                                    <div class='desig'> ";
                                    
                                       echo "<h3>".$titre_offre[$compteur]."</h3>";
                                       if(isset($modifierOffre) && isset($supprimerOffre))
                                       {
                                           echo "<a href='index.php?action=offres&ctrlaction=a_modifierOffre&id=".$info['ID_EMPLOI']."'> <h4><img src='vues/images/modifier.png'></h4></a>";
                                       }
                                       else
                                       {
                                           echo "<a target='_blank' href="."> <h4>a</h4></a>";
                                       }
                                       
                                        echo "</div>";
                                echo "</div>
                                <div class='col-lg-6 col-md-6 col-sm-5 col-xs-12 pull-right'>
                                    <div class='pull-right location'>
                                        <p>".$nom_ville[$compteur]."</p>
                                    </div>
                                    <div class='data-job'>
                                    <h3>".$salaire_min[$compteur]."-".$salaire_max[$compteur]." €</h3>
                                        <span class='label job-type job-fulltime '>".$libelle_contrat[$compteur++]."</span>
                                    </div>
                                    
                                </div>
                            </div> </a>";
                                }
                            ?>
                           
                         
              <div class="clearfix"></div>
                            <div class="col-lg-12">
                            <button class="btn btn-default dropdown-toggle" type="button" id="load_more" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Voir Plus <span class="glyphicon glyphicon-menu-down"></span>
                                        </button>     </div>               
                            
                         </div> </a>
                         <!--Search Result 01-->
                    </div>
