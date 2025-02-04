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