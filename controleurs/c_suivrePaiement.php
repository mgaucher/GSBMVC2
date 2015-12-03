<?php
include("vues/v_sommaire.php");
$idVisiteur = $_SESSION['idVisiteur'];
$action = $_REQUEST['action'];
switch($action){
	case 'suivrePaiement':{
          $lesVisiteurs=$pdo->getListeVisiteur();
          
          include("vues/v_listeVisiteur.php");
          break;  
        }
        case 'voirEtatfrais': {
            $lesVisiteurs=$pdo->getListeVisiteur();
            $leVisiteur = $_REQUEST['idVisiteur'];  
            $listeFicheVisiteur=$pdo->getFichesFraisUtilisateurSuiviePaiement($leVisiteur);
            
            include("vues/v_listeVisiteur.php");
            include("vues/v_listeFicheVisiteur.php"); 
            break;
        }
        case'detailFicheVisiteur':{
            $lesVisiteurs=$pdo->getListeVisiteur();
            $leVisiteur = $_REQUEST['idVisiteur']; 
            $leMois = $_REQUEST['mois'];
                $lesFraisHorsForfait = $pdo->getLesFraisHorsForfait($idVisiteur,$leMois);
		$lesFraisForfait= $pdo->getLesFraisForfait($idVisiteur,$leMois);
		$lesInfosFicheFrais = $pdo->getLesInfosFicheFrais($idVisiteur,$leMois);
                $libEtat = $lesInfosFicheFrais['libEtat'];
		$montantValide = $lesInfosFicheFrais['montantValide'];
		$nbJustificatifs = $lesInfosFicheFrais['nbJustificatifs'];
		$dateModif =  $lesInfosFicheFrais['dateModif'];
            include("vues/v_listeVisiteur.php");
            include("vues/v_detailFicheVisiteur.php");
            break;
        }




}




?>