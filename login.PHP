<?php
session_start();
if(isset($_SESSION['user'])){
    header("Location: index.php") ;
}
$username = "kelyan";
$password = "KELYAN";
$error = "";

if(isset($_POST['login'])){
    if(isset($_POST["username"]) && isset($_POST["password"])){
    $input_username = $_POST["username"];
    $input_password = $_POST["password"];
    if($username == $input_username && $password == $input_password ){
        header("Location: index.php");
        var_dump($_SESSION);
    }

        else{
            $error = "Informations de connexion incorrectes";
        }
    }else{
        $error = "Merci de bien vouloir renseigner tous les champs";
    }
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
    <form  action="login.php" method="post">
        <input name="username" type="text" placeholder="Nom d'utilsateur"/>
        <br></br>  
        <input name="passwoed" type="text" placeholder="Mot de passe"/>
        <br></br>
        <input name="Login" type="submit" value="connexion"/>
    </form>
</body>
</html>


