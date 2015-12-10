<script type="text/javascript">
    function visibilite(thingId)
    {
        var targetElement;
        targetElement = document.getElementById(thingId);
        if (targetElement.style.display == "none")
        {
            targetElement.style.display = "";
        } else {
            targetElement.style.display = "none";
        }
    }
</script> 
<h2>Fiche de frais du mois <?php echo $numMois . "-" . $numAnnee ?> : 
</h2>
<p>

 

    <strong>Etat : </strong>  

    <?php
    if ($idEtat == 'SP') {
        ?> 
        <span id="FicheSuppr" onmouseover="javascript:visibilite('motifSuppr');
                return false;" onmouseout="javascript:visibilite('motifSuppr');
                return false;">
    <?php echo $libEtat ?>  depuis le <?php echo $dateModif ?> <br></span>
            <div id="motifSuppr" style="display:none;"> 
                Motif : Erreur de saisie 
            </div>
        

        <?php
    } else {
        echo $libEtat
        ?> depuis le <?php echo $dateModif ?> <br>
        <?php
    }

    if ($idEtat == 'CL' || $idEtat == 'CR') {
        ?>

        <strong> Montant des frais :</strong> <span class="label label-info">  <?php echo $montantValide ?> </span>       

    <?php } ?>     
</p>
<table class="table table-bordered">
    <caption>Eléments forfaitisés </caption>
    <thead>
        <tr>
            <?php
            foreach ($lesFraisForfait as $unFraisForfait) {
                $libelle = $unFraisForfait['libelle'];
                ?>	
                <th> <?php echo $libelle ?></th>
                <?php
            }
            ?>
        </tr>
    </thead>
    <tbody>
        <tr>
<?php
foreach ($lesFraisForfait as $unFraisForfait) {
    $quantite = $unFraisForfait['quantite'];
    ?>
                <td class="qteForfait"><?php echo $quantite ?> </td>
                <?php
            }
            ?>
        </tr>
    </tbody>
</table><br>
<?php
if (!empty($lesFraisHorsForfait)) {
    ?>
    <table class="table table-bordered">
        <caption>Descriptif des éléments hors forfait -<?php echo $nbJustificatifs ?> justificatifs reçus -
        </caption>
        <thead>
            <tr>
                <th class="date">Date</th>
                <th class="libelle">Libellé</th>
                <th class='montant'>Montant</th>                
            </tr>
        </thead>
        <tbody>
    <?php
    foreach ($lesFraisHorsForfait as $unFraisHorsForfait) {
        $date = $unFraisHorsForfait['date'];
        $libelle = $unFraisHorsForfait['libelle'];
        $montant = $unFraisHorsForfait['montant'];
        ?>
                <tr>
                    <td><?php echo $date ?></td>
                    <td><?php echo $libelle ?></td>
                    <td><?php echo $montant ?></td>
                </tr>

        <?php
    }
    ?>
        </tbody>
    </table>
            <?php
        } else {
            echo "<strong>Vous n'avez pas d'élément hors forfait pour ce mois.</strong>";
        }
        ?>
</div>














