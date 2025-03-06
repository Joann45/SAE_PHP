<?php
namespace Provider;
use BD\DBLoader;
use Modele\Avis;
use Provider\JsonProvider;
use Modele\User;
class JsonCreate{
    private static $bdd;
    public function __construct(){
        self::$bdd = DBLoader::getConnection();
    }

    public function createUser(int $index){
        $provider = new JsonProvider(RESSOURCES_PATH.'/json/users.json');
        $data = $provider->getData();
        $userJson = $data[(string)$index];
        if ($userJson === null) {
            throw new \Exception("L'utilisateur n°$index n'existe pas.");
        }
        $user = new User($userJson['nom'], 
                        $userJson['prenom'], 
                        $userJson['email'], 
                        $userJson['telephone'], 
                        $userJson['mdp']
                    );
        User::addUser(self::$bdd, $user);
    }

    public function createRestaurant(int $index){
        //TODO: à implémenter
    }

    public function createAvis(int $index){
        $provider = new JsonProvider(RESSOURCES_PATH.'/json/avis_restos_orleans.json');
        $data = $provider->getData();
        $avisJson = $data[(string)$index];
        if ($avisJson === null) {
            throw new \Exception("L'avis n°$index n'existe pas.");
        }
        $avis = new Avis($avisJson['id'], 
                        $avisJson['note'], 
                        $avisJson['critique'], 
                        $avisJson['id_utilisateur'], 
                        $avisJson['id_restaurant'], 
                        self::$bdd
                    );
        $idU = $avis->getIdUtilisateur();
        $this->createUser($idU);
        $idR = $avis->getIdrestaurant();
        $this->createRestaurant($idR);
    }

}
?>