<?php

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
   
   $valide=$pdo->getRecuperationIdVisiteur($id);    
   if(!empty($valide)){     
        echo "Erreur de création du nouveau visiteur l'id est deja occuper";
    echo "<BR>";
    echo "Veullez modifier l'id s'il vous plait";
   }
else{
    $pdo->inscriptionVisiteur($id, $nom, $prenom, $adresse, $cp, $ville, $dateEmbauche);                     
        $login = $prenom[0].$nom;
        $mdp="";
        for($i= 1;$i<=4;$i++){
        do{
            $n=rand(49,122); 
        
          }while( ($n>57&&$n<65)||($n>90 && $n<97));
        $mdp=$mdp.chr($n);
        }
        
    
         $pdo->insertionVisiteur($login, $mdp, $id);
        
    echo " login : ".$login."<br>Mot de passe : ".$mdp."<BR>";
    echo " Prenom : ".$prenom."<BR>";
    echo " Nom : ".$nom."<BR>";
    echo " adresse : ".$adresse."<BR>";
    echo " Code Postale : ".$cp."<BR>";
    echo " Ville : ".$ville."<BR>";
    echo " Date Embauche : ".$dateembauche."<BR>";
    echo " login : ".$login."<br>Mot de passe : ".$mdp."<BR>";
    echo "Votre nouveau visiteur a bien été enregistrer ";
}
}
}
?>
