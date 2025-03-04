<?php

use \BD\SupabaseLoader;
$pdo = SupabaseLoader::getConnection();
$email = $_POST['email'];
$password = $_POST['password'];

$req = $pdo->prepare('SELECT mdp FROM user WHERE mail = :mail');
$req->bindParam('mail', $email, PDO::PARAM_STR);
$res = $req->execute();
var_dump($res);

?>