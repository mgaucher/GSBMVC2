    <!-- Division pour le sommaire -->
<div class="row">
      
    <nav class='col-md-2'>
        
        <h4>
            <?php echo $_SESSION['prenom']."  ".$_SESSION['nom']."<h6><i>Vous ètes connecter en tant que :</i></h6> " .$identite. "<br><h6><i>Vous vous est connectez pour la dernière fois :</i></h6>" .$derniereco."<br>"?>
            
        </h4>
           
        <ul class="list-unstyled">
			
           <li>
              <a href="index.php?uc=gererFrais&action=saisirFrais" title="Saisie fiche de frais ">Saisie fiche de frais</a>
           </li>
           <li>
              <a href="index.php?uc=etatFrais&action=selectionnerMois" title="Consultation de mes fiches de frais">Mes fiches de frais</a>
           </li>
           
           <!-- Si l'utilisateur est un comptable alors afficher cette fonctionnalité -->
           <?php 
            if($_SESSION['prenom'])
            {
           ?>
           
           <li>
              <a href="index.php?uc=validerFrais&action=afficherFormulaireValidationFicheFrais" title="Validation de fiche de frais">Valider fiche de frais</a>
           </li>
           
           <?php        
            }
           ?>          
           
            <?php 
           //if($type == "co")
          // {
               ?>
           <li>
              <a href="index.php?uc=suivrePaiement&action=suivrePaiement" title="Se déconnecter">Suivie paiement fiche frais</a>
           </li>
        <?php // }?>
 	   <li>
              <a href="index.php?uc=connexion&action=deconnexion" title="Se déconnecter">Déconnexion</a>
           </li>
          
         </ul>
        
    </nav>
    <div id="contenu" class="col-md-10">
   
        
    
    
