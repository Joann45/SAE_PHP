<?php
namespace Modele;
use BD\DBLoader;
class User{

    private int $id_user;
    private string $nom_user;
    private string $prenom_user;
    private string $email_user;
    private string $tel_user;
    private string $mdp_user;

    public function __construct($nom_user, $prenom_user, $email_user, $tel_user, $mdp_user){
        $this->id_user = User::getLastId(DBLoader::getConnection());
        $this->nom_user = $nom_user;
        $this->prenom_user = $prenom_user;
        $this->email_user = $email_user;
        $this->tel_user = $tel_user;
        $this->mdp_user = $mdp_user;
    }

    public static function getLastId($BD){
        $res = 0;
        $req = $BD->prepare("SELECT id_user FROM user");
        $query_res = $req->execute();
        foreach ($query_res as $row){
            if ($row > $res){
                $res = $row;
            }
        }
        return $res + 1; 
    }

    public function getId(){
        return $this->id_user;
    }

    public function getNom(){
        return $this->nom_user;
    }

    public function getPrenom(){
        return $this->prenom_user;
    }

    public function getEmail(){
        return $this->email_user;
    }

    public function getTel(){
        return $this->tel_user;
    }

    public function getMdp(){
        return $this->mdp_user;
    }

    public static function addUser($BD, $User){
        $req = $BD->prepare("INSERT INTO user VALUES ($User->getId, $User->getNom, $User->getPrenom, $User->getEmail, $User->getMdp, $User->getTel)");
        $req -> execute();
    }

    public static function getUsers($BD){
        $req = $BD->prepare("SELECT * FROM user");
        $res = $req->execute();
        return $res;
    }

    public static function getUser($BD, $id){
        $req = $BD->prepare("SELECT * FRoM user WHERE id_user = $id");
        $res = $req->execute();
        return $res;
    }

    public static function updateUser($BD, $User){
        $req = $BD->prepare("UPDATE user SET nom = $User->getNom, prenom = $User->getPrenom, mail = $User->getEmail, mdp = $User->getMdp, telephone = $User->getTel WHERE id_user = $User->getId");
        $res = $req->execute();
    }

    public static function deleteUser($BD, $id){
        $req = $BD->prepare("DELETE FROM user WHERE id_user = $id");
        $res = $req->execute();
    }




}