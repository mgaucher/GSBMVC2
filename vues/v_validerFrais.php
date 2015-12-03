<h2>Valider une fiche de frais :</h2>

<form class="form-vertical" method="POST" action="index.php?uc=validerFrais&action=validerMaFicheFrais">
      <div class="corpsForm">

          <label>Les visiteurs ayant des fiches frais à l'état "clôturée" :</label>
          <br/>
           <?php
         foreach ( $visiteursAvecFicheCloturee as $unVisiteur ) 
	{            
           	
            echo $unVisiteur['id']." ".$unVisiteur['nom']." ".$unVisiteur['prenom']."<br/>"; 
            echo "fiche de frais cloturée : <br/><br/>";
            
        }
            ?>
              
<?php 
    if (isset($_REQUEST['erreurs'])&& $_REQUEST['erreurForm']=="FraisForfait") 
    {    
        foreach($_REQUEST['erreurs'] as $erreur)
            {
             echo '<h3 class="text-danger">'.$erreur.'</h3>';
            }
     }
?>
      </div>
      <div class="piedForm">
      <p>                  
        <button type="submit" class="btn btn-primary">Valider</button>
        <button type="reset" class="btn btn-primary">Annuler</button>
      </p> 
      </div>
        
      </form>
     

  