<?php setcookie('pseudo', 'Cyril', time() + 60, null, null, false, true);?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Mini-chat</title>
</head>
<style>
form {

    text-align: center;
}
</style>

<body>
    <form action="minichat_post.php" method="post">
        <p>
            <label for="pseudo">Pseudo</label> :
            <input type="text" name="pseudo" id="pseudo" value="Cyril"/>
            <br />
            <label for="message">Message</label> :
            <input type="text" name="message" id="message" />
            <br />
            <input type="submit" value="Envoyer" />
        </p>
    </form>
<?php
$jour = date('d');
$mois = date ('m');
$annee = date ('y');
$heure = date('H');
$minute = date('i');
try {
    $bdd = new PDO('mysql:host=localhost;dbname=TP;charset=utf8', 'root', 'DarkShot666');
} catch (Exception $e) {
    die('Erreur : '.$e->getMessage());
}


$reponse = $bdd->query('SELECT pseudo, message, DATE_FORMAT(date, \'%d/%m/%Y à %Hh%imin%ss\') AS date_fr FROM minichat ORDER BY ID DESC LIMIT 0, 10');

while ($donnees = $reponse->fetch()) {
    echo '<p><center> Le ' . $donnees['date_fr'].' ','<bold>' . htmlspecialchars($donnees['pseudo']) . '</bold> : ' . htmlspecialchars($donnees['message']) . '</p>';
}

$reponse->closeCursor();


?>

</body>

</html>
