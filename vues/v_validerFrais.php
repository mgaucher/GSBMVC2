<h2>Valider une fiche de frais :</h2>

<form class="form-vertical" method="POST" action="index.php?uc=validerFrais&action=validerMaFicheFrais">
      <div class="corpsForm">

          <label>Les visiteurs ayant des fiches frais à l'état "clôturée" :</label>
          <br/>
          
          <table class="table table-bordered">
              <thead>
                  <th>Nom d'utilisateur :</th>
                  <th>Mois :</th>
                  <th></th>
              </thead>
              
              <br/>
              
              <tbody>
           <?php
           $var = "";
           
         foreach ( $visiteursAvecFicheCloturee as $unVisiteur ) 
	{           
            echo "<tbody class='ligneFicheFraisForfaisCloturee'>";
            if ($var != $unVisiteur['id'])
            {                
                echo "<td>".$unVisiteur['nom']."</td>"; 
            }
            
             else 
             {
                 echo "<td></td>";
             }
            echo "<td>".$unVisiteur['mois']."</td>";
            
            //parcourir les lignes résultats tant que le visiteur a encore des fiches frais cloturées.
            $var = $unVisiteur['id'];
            
            echo "<td>Valider</td>";
            echo "</tbody>";
        }
            ?>
           </tbody>
          </table>
              
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
     

  