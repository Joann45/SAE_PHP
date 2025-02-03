<?php

class Avis{
    private $id;
    private $note;
    private $critique;
    private $id_utilisateur;
    private $id_restaurant;
    private static $bdd;

    public function __construct($id, $note, $critique, $id_utilisateur, $id_restaurant, $bdd){
        $this->id = $id;
        $this->note = $note;
        $this->critique = $critique;
        $this->id_utilisateur = $id_utilisateur;
        $this->id_restaurant = $id_restaurant;
        self::$bdd = $bdd;
        $req = self::$bdd->prepare("INSERT INTO AVIS VALUES (:id, :note, :critique, :id_utilisateur, :id_restaurant)");
        $req->execute([
                        ':id' => $this->id,
                        ':note' => $this->note, 
                        ':critique' => $this->critique,
                        ':id_utilisateur' => $this->id_utilisateur,
                        ':id_restaurant' => $this->id_restaurant
                    ]);
    }

    public function getId(){
        return $this->id;
    }

    public function getNote(){
        return $this->note;
    }

    public function getcritique(){
        return $this->critique;
    }

    public function getIdUtilisateur(){
        return $this->id_utilisateur;
    }

    public function getIdrestaurant(){
        return $this->id_restaurant;
    }

    public static function setId($id){
        self::$id = $id;
    }

    public static function setNote($note){
        self::$note = $note;
        $req = self::$bdd->prepare("UPDATE avis SET note = :note WHERE id_avis = :id");
        $req->execute([
                        ':note' => self::$note,
                        ':id' => self::$id
                    ]);
    }

    public static function setCritique($critique){
        self::$critique = $critique;
        $req = self::$bdd->prepare("UPDATE avis SET critique = :critique WHERE id_avis = :id");
        $req->execute([
                        ':critique' => self::$critique,
                        ':id' => self::$id
                    ]);
    }

    public static function setIdU($id_utilisateur){
        self::$id_utilisateur = $id_utilisateur;
        $req = self::$bdd->prepare("UPDATE avis SET id_user = :id_utilisateur WHERE id_avis = :id");
        $req->execute([
                        ':id_utilisateur' => self::$id_utilisateur,
                        ':id' => self::$id
                    ]);
    }

    public static function setIdR($id_restaurant){
        self::$id_restaurant = $id_restaurant;
        $req = self::$bdd->prepare("UPDATE avis SET id_resto = :id_restaurant WHERE id_avis = :id");
        $req->execute([
                        ':id_restaurant' => self::$id_restaurant,
                        ':id' => self::$id
                    ]);
    }

    public function afficher(){
        //à compléter en fonction des maquettes et du dom html
    }
}

?>