 <h2>Suivie paiement fiche frais</h2>
      <form class="form-inline" action="index.php?uc=suivrePaiement&action=voirEtatfrais" method="post">   
      <div class="corpsForm">  
      <fieldset>	 
        <legend>Visiteur à sélectionner: </legend>
        <div class="form-group">
        <label for="visiteur">Visiteur :</label> 
        <select id="lstVisit" name="lstVisit" class="form-control">
      
		<?php	
           foreach ($lesVisiteurs as $unVisiteur)
			{
			        $visiteur = $unVisiteur['nom'];
				
				if($visiteur == $visiteurASelectionner){
				?>
				<option selected value="<?php echo $visiteur ?>"><?php echo  $visiteur ?> </option>
				<?php 
				}
				else{ ?>
				<option value="<?php echo $visiteur ?>"><?php echo  $visiteur ?> </option>
				<?php 
				}
			
			}
           
	  ?>
            
        </select> 
        <button type="submit" class="btn btn-primary">Valider</button>        
       </div>
      </fieldset>	 
      </div>       
      </form>
      