<?php

if (!isset($_REQUEST['action'])) {
    $_REQUEST['action'] = 'demandeConnexion';
}
$action = $_REQUEST['action'];
switch ($action) {
    case 'demandeConnexion': {
            include("vues/v_connexion.php");
            break;
        }
    case 'valideConnexion': {
            $login = $_REQUEST['login'];
            $mdp = md5($_REQUEST['mdp']);

//            $type=$pdo->getValeurType($_SESSION['id']);
            $type = 'vi';
            if ($type == 'vi') {
                $visiteur = $pdo->getConnexionVisiteur($login, $mdp);
                if (!is_array($visiteur)) {
                    ajouterErreur("Login ou mot de passe incorrect", "connexion");
                    include("vues/v_connexion.php");
                } else {
                    $id = $visiteur['id'];
                    $nom = $visiteur['nom'];
                    $prenom = $visiteur['prenom'];
                    connecter($id, $nom, $prenom);
                    include("vues/v_sommaire.php");
                }
                break;
            } else {
                $comptable = $pdo->getConnexionComptable($login, $mdp);
                if (!is_array($comptable)) {
                    ajouterErreur("Login ou mot de passe incorrect", "connexion");
                    include("vues/v_connexion.php");
                } else {
                    $id = $comptable['id'];
                    $nom = $comptable['nom'];
                    $prenom = $comptable['prenom'];
                    connecter($id, $nom, $prenom);
                    include("vues/v_sommaire.php");
                }
                break;
            }
        }

    default : {
            include("vues/v_connexion.php");
            break;
        }
}
?>