<?php
$hostname="localhost";
$dbname = "tp1";
$dbuser = "root";
$dbpassword = "";

try{
    $connection = new PDO("mysql:host=$hostname;dbname=$dbname", $dbuser,
    $dbpassword);
    $connection-->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $req = $connection-->query("select * from users");
    var_dump($req-->fetchall();)
} catch (\throwable $th) {
    echo "<pre>";
    var_dump($e);
    echo "</pre>";
    die("stop");
    //throw $th;
}
$users = [
    [
        "Prenom" => "Hocine",
        "Nom" => "azouaou",
        "Email" => "Hocine.azouaou.fr",
        "Téléphone" => "07 54 12 39 00",
    ],
    [
        "Prenom" => "Hocine",
        "Nom" => "azouaou",
        "Email" => "Hocine.azouaou.fr",
        "Téléphone" => "07 54 12 39 00",
    ],
    [
        "Prenom" => "Hocine",
        "Nom" => "azouaou",
        "Email" => "Hocine.azouaou.fr",
        "Téléphone" => "07 54 12 39 00",
    ],

];

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <table>
        <tr>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Email</th>
            <th>Téléphone</th>
</tr>
<tr>
    <td>Hocine</td>
    <td>Azouaou</td>
    <td>hocine.azouaou.fr</td>
    <td>07 55 97 66 41</td>
</tr>
<tr>
    <td>Hocine</td>
    <td>Azouaou</td>
    <td>hocine.azouaou.fr</td>
    <td>07 55 97 66 41</td>
</tr>
<tr>
    <td>Hocine</td>
    <td>Azouaou</td>
    <td>hocine.azouaou.fr</td>
    <td>07 55 97 66 41</td>
</tr>
    
</body>
</html>
