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
            <input type="text" name="pseudo" id="pseudo" />
            <br />
            <label for="message">Message</label> :
            <input type="text" name="message" id="message" />
            <br />
            <input type="submit" value="Envoyer" />
        </p>
    </form>
<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=TP;charset=utf8', 'root', 'DarkShot666');
} catch (Exception $e) {
    die('Erreur : '.$e->getMessage());
}

?>

</body>

</html>
