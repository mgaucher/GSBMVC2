<?php
	// Connexion à la base de données
	include("../include/fct.inc.php");
	include("../include/class.pdogsb.inc.php");
	$pdo = PdoGsb::getPdoGsb();
	extract($_POST);

    // Execution de la fonction permettant de changer l'état de la fiche frais en Validée
 	$validerSuppressionFraisHorsForfait = $pdo->updateSuppressionLigneFraisHorsForfait($idLigneFraisHF, $motif);
?>