<div class="jobs-result"> 
                       <!--Search Result 01-->
                        <div class="col-lg-12">

                            <!--jobs result--> 
                            
                            <?php
                                foreach ($infos_users as $info) 
                                { 
                                     echo "<a href='#'> <div class='filter-result 04'>
                                    <div class='col-lg-6 col-md-6 col-sm-7 col-xs-12 pull-left'>
                                    <div class='company-left-info pull-left'>
                                        <img src='vues/style/assets/images/company-logo.png' alt=''/>
                                    </div>
                                    <div class='desig'> ";
                                    
                                       echo "<h3>".$info['PRENOM_USER']."</h3>";
                                       
                                       echo "<a target='_blank' href=".$info['LIEN_CV']."> <h4>Voir CV</h4></a>";
                                        echo "</div>";
                                echo "</div>
                                <div class='col-lg-6 col-md-6 col-sm-5 col-xs-12 pull-right'>
                                    <div class='pull-right location'>
                                        <p>".$pays_user[$compteur]."</p>
                                    </div>
                                    <div class='data-job'>
                                    <h3>".$nom_secteur[$compteur]."</h3>
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
