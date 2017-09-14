<?php

try {
    $bdd = new PDO('mysql:host=localhost;dbname=TP;charset=utf8', 'root', 'DarkShot666');
} catch (Exception $e) {
    die('Erreur : '.$e->getMessage());
}


$req = $bdd->prepare('INSERT INTO minichat (pseudo, message, date) VALUES(?, ?, NOW())');
$req->execute(array($_POST['pseudo'], $_POST['message']));

header('Location: minichat.php');
