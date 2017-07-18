<div class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                  <div class="modal-dialog " role="document">
                    <div class="modal-content">

                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="exampleModalLabel"><h3>Mes Informations</h3></h4>
                      </div>
                      <div class="modal-body">
                        <form enctype="multipart/form-data" id="inscription" name="contact_us" class="contact_us" action="index.php?action=authentification&ctrlaction=modifier_infos_etudiant" method="POST">
      
                                            
                                         <div class="form-group etudiant ">
                                            <label>Secteur</label>
                                          
                                                <div class="form-group">
                                                    <select name="secteur" class="form-control " id="secteur">

                                                          <?php foreach ($secteurs as $secteur) 
                                                             {
                                                                 if($secteur['ID_SECTEUR']==$_SESSION['id_secteur'])  
                                                                 {
                                                                    echo "<option value=".$secteur['ID_SECTEUR']." selected>".$secteur['LIBELLE_SECTEUR']."</option>"; 
                                                                 }
                                                                 else
                                                                 {
                                                                      echo "<option value=".$secteur['ID_SECTEUR'].">".$secteur['LIBELLE_SECTEUR']."</option>"; 
                                                                 }


                                                            } ?>

                                                    </select>
                                                </div>
                                            
                                        </div>
                                           <div class="form-group etudiant">
                                            <label>Type de contrat recherché</label>
                                            

                                                <div class="form-group">
                                                    <select name="type_contrat" class="form-control" id="sel1">
                                                   <?php foreach ($types_contrat as $type_contrat) {
                                                       if($type_contrat['LIBELLE_CONTRAT']!="Aucun")
                                                       {
                                                            if($type_contrat['ID_CONTRAT']==$_SESSION['id_contrat'])  
                                                            {
                                                                 echo "<option value=".$type_contrat['ID_TYPE_CONTRAT'].">".$type_contrat['LIBELLE_CONTRAT']."</option>"; 
                                                            }
                                                            else
                                                            {
                                                                echo "<option value=".$type_contrat['ID_TYPE_CONTRAT']." selected>".$type_contrat['LIBELLE_CONTRAT']."</option>"; 
                                                            }

                                                       }

                                                     } ?>


                                                    </select>
                                                </div>
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Pays de résidence</label>
                                          
                                                <div class="form-group">
                                                    <select name= "pays" class="form-control " id="pays">

                                                   <?php foreach ($tous_les_pays as $pays) {
                                                       if($pays['ID_PAYS']==$_SESSION['id_pays'])
                                                       {
                                                           echo "<option value=".$pays['ID_PAYS']." selected>".$pays['NOM_FR_FR']."</option>"; 
                                                       }
                                                       else
                                                       {
                                                           echo "<option value=".$pays['ID_PAYS'].">".$pays['NOM_FR_FR']."</option>"; 
                                                       }

                                                     } ?>


                                                    </select>
                                                     <span class="message_erreur pays"  style="color:red;font-family:LatoRegular;font-size:16px">Choississez un pays de résidence</span>
                                                </div>
                                               
                                           

                                        </div>

                                         <div class="form-group etudiant">
                                            <label>Comment avez vous connu Rhopen ?</label>
                                           
                                                <div class="form-group ">
                                                    <select name="role_partenaire" class="form-control" id="role_partenaire">
                                                        <?php 

                                                                echo "<option value='0'>----------------------------------</option>";
                                                                foreach ($roles_partenaires as $role_partenaire) 
                                                                {
                                                                    if($_SESSION['id_partenaire']!=NULL)
                                                                    {
                                                                            if($role_partenaire['ID_ROLE_PARTENAIRE']==1)
                                                                            { 
                                                                                echo "<option value=".$role_partenaire['ID_ROLE_PARTENAIRE']." selected>".$role_partenaire['LIBELLE_ROLE']."</option>"; 

                                                                            }
                                                                            else
                                                                            {
                                                                                echo "<option value=".$role_partenaire['ID_ROLE_PARTENAIRE'].">".$role_partenaire['LIBELLE_ROLE']."</option>"; 
                                                                            }
                                                                    }
                                                                    else
                                                                    {
                                                                        echo "<option value=".$role_partenaire['ID_ROLE_PARTENAIRE'].">".$role_partenaire['LIBELLE_ROLE']."</option>"; 
                                                                    }
                                                                
                                                                } 

                                                        ?>

                                                       <?php ?>

                                                    </select>
                                                </div>
                                           
                                        </div>
                                        <div class="form-group partenaire">
                                            <label>Nom partenaire</label>
                                            
                                                <div class="form-group ">
                                                    <select name="nom_partenaire" class="form-control" id="nom_partenaire">

                                                       <?php
                                                           echo "<option value='0'>----------------------------------</option>";
                                                            foreach ($liste_partenaires as $liste_partenaire) 
                                                           {
                                                            if($liste_partenaire['ID_PARTENAIRE']==$_SESSION['id_partenaire'])
                                                            { 
                                                               echo "<option value=".$liste_partenaire['ID_PARTENAIRE']." selected>".$liste_partenaire['NOM_PARTENAIRE']."</option>"; 
                                                            }
                                                            else
                                                            {
                                                                 echo "<option value=".$liste_partenaire['ID_PARTENAIRE'].">".$liste_partenaire['NOM_PARTENAIRE']."</option>"; 
                                                            }
                                                         } 
                                                       ?>

                                                    </select>
                                                </div>
                                                <div class="form-group partenaire_m">
                                                       <span  style="color:red;font-family:LatoRegular;font-size:13px">Choississez un partenaire</span>
                                                </div>
                                           

                                        </div>
                                        <div class="form-group">
                                            <label>Prénom</label>
                                            <input type="text" name="prenom" value="<?php echo $_SESSION['prenom'];?>">
                                        </div>
                                        <div class="form-group" >
                                            <label>Nom</label>
                                            <input type="text" name="nom" value="<?php echo $_SESSION['nom'];?>" required>
                                        </div>

                                        <div class="form-group">
                                            <label>E-mail</label>
                                            <input type="email" name="email" id="email" value="<?php echo $_SESSION['email'];?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label></label>
                                            <span id="verifEmail" style="color:red"></span>
                                        </div>
                                        <div class="form-group">
                                            <label>Mot de passe</label>
                                            <input type="password" name="password" id="password" value="<?php echo $_SESSION['mot_de_passe'];?>" minlength=6/>
                                        </div>
                                         <div class="form-group">
                                            <label>Mot de passe</label>
                                            <input type="password" name="cpassword" id="cpassword" value="<?php echo $_SESSION['mot_de_passe'];?>" minlength=6/>

                                        </div>
                                        <div class="message_erreur password form-group">

                                            <label></label>
                                             <span  id="pays1" style="color:red;font-family:LatoRegular;font-size:16px">Les mots de passe ne sont pas identiques</span>
                                        </div>
                                         <div class="form-group etudiant">
                                            <label>Envoyer votre cv :</label>
                                              <input name="userfile" type="file"/>
                                        </div>

                            <div class="form-group">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                                    <button type="submit" class="btn btn-primary" id="modifier">Modifier mes informations</button>
                            </div>
                         </form>
                      </div>

                    </div>
                  </div>
                </div>


