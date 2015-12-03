<?php
if(!isset($_REQUEST['action'])){
	$_REQUEST['action'] = 'demandeConnexion';
}
$action = $_REQUEST['action'];
switch($action){
	case 'demandeConnexion':{
		include("vues/v_connexion.php");
		break;
	}
	case 'valideConnexion':{
		$login = $_REQUEST['login'];
		$mdp = md5($_REQUEST['mdp']);
                
                               
            $info =$pdo->getInfosVisiteur($login,$mdp);
           
             if($info['type']== 'vi')
             {
                 $visiteur = $pdo->getConnexionVisiteur($login,$mdp);
                        $id = $visiteur['id'];
			$nom =  $visiteur['nom'];
			$prenom = $visiteur['prenom'];
                        $identite='Visteur médical';
                        $derniereco = $visiteur['derniereco'];
			connecter($id,$nom,$prenom);
			include("vues/v_sommaire.php");
		
		
             }    
             else if ($info['type']== 'co'){
                 $comptable = $pdo->getConnexionComptable($login,$mdp);
			$id = $comptable['id'];
			$nom =  $comptable['nom'];
			$prenom = $comptable['prenom'];
                        $identite='comptable';
                        $derniereco = $comptable['derniereco'];
			connecter($id,$nom,$prenom);
			include("vues/v_sommaire.php");
		
		
                }
            else{               
			ajouterErreur("Login ou mot de passe incorrect","connexion");
            }
            $pdo->UpdateDate($id);
            break;
	}
        
	default :{
		include("vues/v_connexion.php");
		break;
	}
}
?>