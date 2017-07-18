

<div class="jobs_filters">
                    <div class="container">
                        	<form class="" action="index.php?action=offres&ctrlaction=trier" method="POST">
                                  
                    	<!--col-lg-3 filter_width -->
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 filter_width bgicon">
                            <div class="form-group">
                                <div class="dropdown">
                                        
                                        <div class="form-group">
                                                        <select name="secteur" class="form-control" id="sel1" style="height:60px">
                                                            <option value="0">Secteur</option>
                                                       <?php foreach ($secteurs as $secteur) {
                                                           
                                                               echo "<option value=".$secteur['ID_SECTEUR'].">".$secteur['LIBELLE_SECTEUR']."</option>"; 
                                                           
                                                           
                                                         } ?>
                                                        
                                                         
                                                        </select>
                                        </div>
                                  
                                </div>
                            </div>
                         
                            <span>e.g. Designer</span>
                        </div>
                         <!--col-lg-3 filter_width -->
                         
                         <!-- col-lg-5 filter_width -->
                            <!--<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 filter_width bgicon">
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
                                <span>e.g. Designer</span>
                            </div>-->
                         <!-- col-lg-5 filter_width -->
                  
                        <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12 filter_width bgicon">
                            <div class="form-group">
                                <div class="dropdown">
                                        
                                        <div class="form-group">
                                            <input type="text" name="date_min" value="" class="datepicker" placeholder="date minimale" readonly>
                                        </div>
                                  
                                </div>
                            </div>
                         
                            <span>e.x. 10/06/2017</span>
                        </div>
                           <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12 filter_width bgicon">
                            <div class="form-group">
                                <div class="dropdown">
                                        
                                        <div class="form-group">
                                            <input type="text" name="date_max" value="" class="datepicker" placeholder="date maximale" readonly>
                                        </div>
                                  
                                </div>
                            </div>
                         
                            <span>e.x. 15/06/2017</span>
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

