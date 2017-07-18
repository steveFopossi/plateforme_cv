<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="exampleModalLabel"><h3>Mes Informations</h3></h4>
                      </div>
                      <div class="modal-body">
                        <form enctype="multipart/form-data" id="inscription" name="contact_us" class="contact_us" action="index.php?action=authentification&ctrlaction=modifier_infos" method="POST">
                                            
                                             
                                            <div class="form-group">
                                                <label>Prénom</label>
                                                <input type="text" name="prenom" value="<?php echo $_SESSION['prenom'];?>">
                                            </div>
                                            <div class="form-group" >
                                                <label>Nom</label>
                                                <input type="text" name="nom" value="<?php echo $_SESSION['nom'];?>" required>
                                            </div>
                                            
                                            <div class="form-group recruteur">
                                                <label>Nom Société</label>
                                                <input type="text" name="nom_societe" value="<?php echo $_SESSION['nom_societe_user'];?>">
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
                                                <label>Nouveau Mot de passe</label>
                                                <input type="password" name="password" id="password" value="<?php echo $_SESSION['mot_de_passe'];?>" minlength=6/>
                                            </div>
                                             <div class="form-group">
                                                <label>Nouveau Mot de passe</label>
                                                <input type="password" name="cpassword" id="cpassword" value="<?php echo $_SESSION['mot_de_passe'];?>" minlength=6/>
                                            
                                            </div>
                                            <div class="message_erreur password form-group">
                                               
                                                <label></label>
                                                 <span  id="pays1" style="color:red;font-family:LatoRegular;font-size:16px">Les mots de passe ne sont pas identiques</span>
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
