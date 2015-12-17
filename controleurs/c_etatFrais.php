<?php

include("vues/v_sommaire.php");
$action = $_REQUEST['action'];
$idVisiteur = $_SESSION['idVisiteur'];
switch ($action) {
    case 'selectionnerMois': {
            $lesMois = $pdo->getLesMoisDisponibles($idVisiteur);
            // Afin de sélectionner par défaut le dernier mois dans la zone de liste
            // on demande toutes les clés, et on prend la première,
            // les mois étant triés décroissants
            $lesCles = array_keys($lesMois);
            $moisASelectionner = $lesCles[0];
            include("vues/v_listeMois.php");
            include("vues/v_listeMoisFin.php");
            break;
        }
    case 'voirEtatFrais': {
            $leMois = $_REQUEST['lstMois'];
            $lesMois = $pdo->getLesMoisDisponibles($idVisiteur);
            $moisASelectionner = $leMois;
            include("vues/v_listeMois.php");
            $lesFraisHorsForfait = $pdo->getLesFraisHorsForfait($idVisiteur, $leMois);
            $lesFraisForfait = $pdo->getLesFraisForfait($idVisiteur, $leMois);
            $lesInfosFicheFrais = $pdo->getLesInfosFicheFrais($idVisiteur, $leMois);
            $numAnnee = substr($leMois, 0, 4);
            $numMois = substr($leMois, 4, 2);
            $idEtat = $lesInfosFicheFrais['idEtat'];
            $libEtat = $lesInfosFicheFrais['libEtat'];
            $montantValide = 0;
            // Calcul les montants frais si la fiche est à l'état CL ou CR
            if ($idEtat == 'CL' || $idEtat == 'CR') {
                foreach ($lesFraisForfait as $montantfrais) {
                    $montantValide += $montantfrais['montant'] * $montantfrais['quantite'];
                }
                foreach ($lesFraisHorsForfait as $montanthorsforfait){
                    $montantValide += $montanthorsforfait['montant'];
                }
            }
            else
            {
                 $montantValide = $lesInfosFicheFrais['montantValide'];
            }
               
                $nbJustificatifs = $lesInfosFicheFrais['nbJustificatifs'];
                $dateModif = $lesInfosFicheFrais['dateModif'];
                $dateModif = dateAnglaisVersFrancais($dateModif);
                include("vues/v_etatFrais.php");
            }
        }
?>