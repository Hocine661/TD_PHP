<?php
include('db.php');
if (isset($_POST['register'])) {
    extract($_POST);
    $password = shal($password);
    try {
        $req = $connection->query("INSERT INTO users (name, telephone, email, password) VALUES ('$name', '$telephone', '$email', '$password')");
        $connection->exec($req);
    } catch (PDOException $e) {
        echo "une erreur est survenue. Réessayez";
    }
    echo "Inscription réussi";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="login.php" method="post">
    <input name="name" type="text" placeholder="Prénom et Nom">
    <br><br>
    <input name="email" type="email" placeholder="Adresse email">
    <br><br>
    <input name="telephone" type="tel" placeholder="Numéro de téléphone">
    <br><br>
    <input name="password" type="password" placeholder="Mot de passe">
    <br><br>
    <input name="login" type="submit" placeholder="connexion">
</form>
</body>
</html>