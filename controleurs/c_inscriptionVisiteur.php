<?php
include("vues/v_sommaire.php");
if (!isset($_REQUEST['action'])) {
    $_REQUEST['action'] = 'demandeConnexion';
}
$action = $_REQUEST['action'];
switch($action){
	case 'demandeInscription':{
		include("vues/v_inscription.php");
		break;
	}
	case 'valideInscription':{
		$id = $_REQUEST['id'];
		$nom = $_REQUEST['nom'];
                $prenom = $_REQUEST['prenom'];
                $adresse = $_REQUEST['adresse'];
                $cp = $_REQUEST['cp'];
                $ville = $_REQUEST['ville'];
                $dateEmbauche = $_REQUEST['dateEmbauche'];
   
     $verife = $pdo->getRecuperationIdVisiteur($id);
 //if(empty($verife)){
   if(empty($verife)){     
        
        $pdo->inscriptionVisiteur($id, $nom, $prenom, $adresse, $cp, $ville, $dateEmbauche);                     
        $login = $prenom[0].$nom;
        $mdp="";
        for($i= 1;$i<=5;$i++){
        do{
            $n=rand(49,122); 
        
          }while( ($n>57&&$n<65)||($n>90 && $n<97));
        $mdp=$mdp.chr($n);
        }
    $pdo->insertionVisiteur($login, $mdp, $id);
    echo "<h2>Information générer par le seveur pour l'utilisitateur , veuillez les sauvegardez : <br></h2>";
    echo " login : ".$login."<br>Mot de passe : ".$mdp."<br>";
    echo "<h2>Information sur l'utilisateur inscrit : <br></h2>";
    echo "Nom  : ".$nom."<br>";
    echo "Prénom : ".$prenom."<br>";
    echo "Adresse : ".$adresse."<br>";
    echo "Code Postale : ".$cp."<br>";
    echo "Ville : ".$ville."<br>";
    echo "Date embauche : ".$dateEmbauche."<br>";
}
else{
    echo "<h2>Erreur de création du nouveau visiteur l'id est deja occuper";
    echo "<BR>";
    echo "Veullez modifier l'id s'il vous plait</h2>";
    echo "<form>";
    echo "<input type='button' value='Retour' onclick='history.go(-1)'>";
    echo "</form>";

}
 //}else{
    // echo "<h2>Des Informations sur l'utilisateur sont manquant veuillez les renseigner</h2>";
    // echo "<form>";
     //echo "<input type='button' value='Retour' onclick='history.go(-1)'>";
     //echo "</form>";
 //}
    
   
    
}
}



?>
