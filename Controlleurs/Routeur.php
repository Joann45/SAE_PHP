<?php

namespace Controlleurs;

class Routeur{
    public function handleRequest(){
        $data = $_SERVER['REQUEST_URI'];

        switch($data){
            case '/':
                require_once VIEWS_PATH . '/accueil.php';
                break;
            case '/connexion':
                require_once VIEWS_PATH . '/connexion.php';
                break;
            case '/inscription':
                require_once VIEWS_PATH . '/inscription.php';
                break;
            case '/controlleur_connexion':
                require_once CONTROLLEURS_PATH . '/controlleur_connexion.php';
                break;
            case '/controlleur_inscription':
                require_once CONTROLLEURS_PATH . '/controlleur_inscription.php';
                break;
            case '/deconnexion':
                require_once CONTROLLEURS_PATH . '/controlleur_deconnexion.php';
                break;
            case '/avis':
                // TODO : à implémenter quand la page sera implémentée
                // require_once VIEWS_PATH . '/avis.php';
                //break;
            case '/avis_user':
                require_once VIEWS_PATH . '/avis_user.php';
                break;
            case '/404':
                require_once VIEWS_PATH . '/404.php';
                break;
            default:
                require_once VIEWS_PATH . '/404.php';
                break;
        }
    }
}

?>