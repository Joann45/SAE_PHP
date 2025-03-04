<?php

use \BD\DBLoader;
$pdo = DBLoader::getConnection();
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$telephone = $_POST['telephone'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];

if ($password!= $password_confirm) {
    echo 'Les mots de passe ne sont pas identiques';
    exit();
}

$req = $pdo->prepare('INSERT INTO USERA (USE_NOM, USE_PRENOM, USE_EMAIL, USE_MDP, USE_TELEPHONE) 
                            VALUES (:nom, :prenom, :email, :mdp, :telephone)');
$req->execute(array(
    'nom' => $nom,
    'prenom' => $prenom,
    'email' => $email,
    'mdp' => $password,
    'telephone' => $telephone
));

header('Location: /connexion');


?>