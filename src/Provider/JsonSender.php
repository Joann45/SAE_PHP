<?php
namespace Provider;

use Modele\Avis;
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
}
?>