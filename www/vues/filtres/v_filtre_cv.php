<div class="jobs_filters">
                    <div class="container">
                        	<form class="" action="index.php?action=cv&ctrlaction=trier" method="POST">
                                  
                    	<!--col-lg-3 filter_width -->
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 filter_width bgicon">
                            <div class="form-group">
                                <div class="dropdown">
                                        
                                        <div class="form-group">
                                                        <select name="secteur" class="form-control" id="sel1" style="height:60px">
                                                            <option value="NULL">Secteur</option>
                                                       <?php foreach ($secteurs as $secteur) {
                                                          
                                                               echo "<option value=".$secteur['ID_SECTEUR'].">".$secteur['LIBELLE_SECTEUR']."</option>"; 
                                                         
                                                         } ?>
                                                        </select>
                                        </div>
                                </div>
                            </div>
                         
                           
                        </div>
                         <!--col-lg-3 filter_width -->
                         
                         <!-- col-lg-5 filter_width -->
                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 filter_width bgicon">
                                <div class="form-group">
                                                        <select name="type_contrat" class="form-control" id="sel1" style="height:60px">
                                                            <option value="0">Type contrat</option>
                                                       <?php foreach ($types_contrat as $type_contrat) {
                                                           if($type_contrat['LIBELLE_CONTRAT']!="Aucun")
                                                           {
                                                               echo "<option value=".$type_contrat['ID_TYPE_CONTRAT'].">".$type_contrat['LIBELLE_CONTRAT']."</option>"; 
                                                           }
                                                           
                                                         } ?>
                                                        
                                                         
                                                        </select>
                                        </div>
                            
                            </div>
                         <!-- col-lg-5 filter_width -->
                         
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 filter_width bgicon">
                            <div class="form-group">
                                <div class="dropdown">
                                        
                                        <div class="form-group">
                                                        <select name="pays" class="form-control" id="sel1" style="height:60px">
                                                            <option value="0">Choisir Pays </option>
                                                           <?php foreach ( $tous_les_pays as $pays) {

                                                                   echo "<option value=".$pays['ID_PAYS'].">".$pays['NOM_FR_FR']."</option>"; 


                                                             } ?>
                                                        
                                                         
                                                        </select>
                                        </div>
                                  
                                </div>
                            </div>
                         
                           
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-5 col-xs-12 filter_width bgicon">
                            <div class="form-group">
                                <div class="dropdown">
                                        
                                        <div class="form-group">
                                            <input type="text" name="date_min" value="" class="datepicker" placeholder="Date" readonly>
                                        </div>
                                  
                                </div>
                            </div>
                         
                            <span>Déposé après le</span>
                        </div>
                           <div class="col-lg-2 col-md-2 col-sm-5 col-xs-12 filter_width bgicon">
                            <div class="form-group">
                                <div class="dropdown">
                                        
                                        <div class="form-group">
                                            <input type="text" name="date_max" value="" class="datepicker" placeholder="Date" readonly>
                                        </div>
                                  
                                </div>
                            </div>
                         
                           
                           <span>Déposé avant le</span>
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
