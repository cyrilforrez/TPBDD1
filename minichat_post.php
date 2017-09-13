<?php

try {
    $bdd = new PDO('mysql:host=localhost;dbname=TP;charset=utf8', 'root', 'DarkShot666');
} catch (Exception $e) {
    die('Erreur : '.$e->getMessage());
}


//

$req = $bdd->prepare('INSERT INTO minichat (pseudo, message) VALUES(?, ?)');

$req->execute(array($_POST['pseudo'], $_POST['message']));


// Redirection du visiteur vers la page du minichat

header('Location: minichat.php');
