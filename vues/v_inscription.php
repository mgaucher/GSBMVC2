<div class="row">
               
    <div class ="col-md-12 col-md-offset-2" id="contenu">
<?php 
if (isset($_REQUEST['erreurs'])) 
    {    
        foreach($_REQUEST['erreurs'] as $erreur)
            {
             echo '<h3 class="text-danger">'.$erreur.'</h3>';
            }
     }
?>
      <form class="form-vertical" method="POST" action="index.php?uc=inscriptionNouveauVisiteur&action=valideInscription">
         <fieldset>
             <legend>Veuillez inscrire les informations du visiteur: ( * : champ obligatoire )</legend>
   	 <div class="form-group"> 	
         <label for="id">Id *</label>
         <div class="row">
             <div class="col-xs-12 col-sm-6 col-md-4">
             <input class="form-control"  id="id" type="text" name="id"  size="30" maxlength="45" placeholder="id">
            </div>
         </div>
         </div>
         <div class="form-group"> 
	 <label for="nom">Nom *</label>
         <div class="row">
             <div class="col-xs-12 col-sm-6 col-md-4">
             <input class="form-control" id="nom"  type="text"  name="nom" size="30" maxlength="45" placeholder="nom">
            </div>
         </div>
         </div>
             <div class="form-group"> 
	 <label for="prenom">Prenom *</label>
         <div class="row">
             <div class="col-xs-12 col-sm-6 col-md-4">
             <input class="form-control" id="prenom"  type="text"  name="prenom" size="30" maxlength="45" placeholder="prenom">
            </div>
         </div>
         </div>
             <label for="adresse">Adresse *</label>
         <div class="row">
             <div class="col-xs-12 col-sm-6 col-md-4">
             <input class="form-control" id="adresse"  type="text"  name="adresse" size="30" maxlength="45" placeholder="adresse">
            </div>
         </div>
         
            <label for="cp">Code postale *</label>
         <div class="row">
             <div class="col-xs-12 col-sm-6 col-md-4">
             <input class="form-control" id="cp"  type="text"  name="cp" size="30" maxlength="45" placeholder="cp">
            </div>
         </div>
         
            <label for="ville">Ville *</label>
         <div class="row">
             <div class="col-xs-12 col-sm-6 col-md-4">
             <input class="form-control" id="ville"  type="text"  name="ville" size="30" maxlength="45" placeholder="ville">
            </div>
         </div>
            <label for="dateembauche">Date Embauche *</label>
         <div class="row">
             <div class="col-xs-12 col-sm-6 col-md-4">
             <input class="form-control" id="dateEmbauche"  type="text"  name="dateEmbauche" size="30" maxlength="45" placeholder="0000-00-00">
            </div>
         </div>
            <BR>
          <button type="submit" class="btn btn-primary">Valider</button>
          <button type="reset" class="btn btn-primary">annuler</button>
          <button type="reset" class="btn btn-primary">Retour</button>
         </fieldset>
      </form>

    </div>
</div>
