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
            $leVisiteur = $_REQUEST['lstVisit']; 
            $leVisiteur;
            include("vues/v_listeVisiteur.php");
            include("vues/v_listeFicheVisiteur.php"); 
            break;
        }
        case'detailFicheVisiteur':{
            include("vues/v_listeVisiteur.php");
            include("vues/v_listeFicheVisiteur.php"); 
            include("vues/v_detailFicheVisiteur.php");
            break;
        }




}




?>