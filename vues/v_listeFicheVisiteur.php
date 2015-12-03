<h2>Liste fiche visiteur</h2>
<form class="form-inline" action="index.php?uc=suivrePaiement&action=detailFicheVisiteur" method="post">   
    <div class="corpsForm">  
        <fieldset>	 
            <legend>Visiteur à sélectionner: </legend>
            <div class="form-group">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th> mois</th>
                            <th >nbJustificatifs</th>
                            <th >montantValide</th>  
                            <th>date Modif</th>  
                            <th>Etat</th> 
                            <th>Voir les détails</th>
                        </tr>
                    </thead>
                    <tbody>  
                        <?php
                        foreach ($listeFicheVisiteur as $uneFicheVisiteur) {
                            ?>
                            <tr>


    <?php
    $idVisiteur = $uneFicheVisiteur['idVisiteur'];
    $mois = $uneFicheVisiteur['mois'];
    $nbJustificatifs = $uneFicheVisiteur['nbJustificatifs'];
    $montantValide = $uneFicheVisiteur['montantValide'];
    $dateModif = $uneFicheVisiteur['dateModif'];
    $etat = $uneFicheVisiteur['idEtat'];
    ?>

                                <td><?php echo $mois ?></td>
                                <td><?php echo $nbJustificatifs ?></td>
                                <td><?php echo $montantValide ?></td>
                                <td><?php echo $dateModif ?></td>
                                <td><?php echo $etat ?></td>
                        <input type="hidden" name="idVisiteur" value="<?php echo $idVisiteur ?>">
                        <input type="hidden" name="mois" value="<?php echo $mois ?>">
                        <td> <button type="submit" class="btn btn-primary" >Voir les détails</button>  </td>


                        </tr>
    <?php
}
?>

                    </tbody>
                </table>

            </div>
        </fieldset>	 
    </div>       
</form>