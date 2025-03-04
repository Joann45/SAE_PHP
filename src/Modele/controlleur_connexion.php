<?php

use \BD\DBLoader;
$pdo = DBLoader::getConnection();
$email = $_POST['email'];
$password = $_POST['password'];

$req = $pdo->prepare('SELECT USE_MDP FROM USERA WHERE USE_EMAIL = :mail');
$req->bindParam('mail', $email, PDO::PARAM_STR);
$req->execute();
$res = $req->fetch();
if ($password == $res['USE_MDP']) {
    session_start();
    $_SESSION['email'] = $email;
    header('Location: /');
} else {
    echo 'Mauvais identifiants';
}

?>