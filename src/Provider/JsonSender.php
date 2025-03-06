<?php
namespace Provider;

use Modele\Avis;
use Modele\User;
use Provider\JsonProvider;

class JsonSender{
    private JsonProvider $dataLoader;
    public function sendAvis(Avis $avis){
        $data = [];
        $data['id'] = $avis->getId();
        $data['note'] = $avis->getNote();
        $data['critique'] = $avis->getcritique();
        $data['id_utilisateur'] = $avis->getIdUtilisateur();
        $data['id_restaurant'] = $avis->getIdrestaurant();
        return $this->dataLoader->setData($data);
    }

    public function sendUser(User $user){
        $data = [];
        $data['id'] = $user->getId();
        $data['nom'] = $user->getNom();
        $data['prenom'] = $user->getPrenom();
        $data['email'] = $user->getEmail();
        $data['telephone'] = $user->getTel();
        $data['mdp'] = $user->getMdp();
        return $this->dataLoader->setData($data);
    }

    public function sendRestaurant(Restaurant $restaurant){
        // TODO: à implémenter
    }
}
?>