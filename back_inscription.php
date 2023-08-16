<?php
function verifmail($mail){
    if(preg_match("#^[a-z0-9_-]+((\.[a-z0-9_-]+){1,})?@[a-z0-9_-]+((\.[a-z0-9_-]+){1,})?\.[a-z]{2,30}$#i",$mail)) {
        return true;
    } else {
        return false;
    }
}

if(isset($_POST['name'])&& isset($_POST['mail'])&& isset($_POST['mdp'])){
    if(filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)&&verifmail($_POST['mail'])){
        $mail = $_POST["mail"];
        $nom = $_POST["name"];
        $mdp = $_POST["mdp"];
        $mdp=password_hash($mdp,PASSWORD_ARGON2I);
        $line = array($nom, $mail, $mdp);

    }else{
        header("location:error.php");
    }
}else{
    header("location:error.php");
}

$fp = fopen('data.csv', 'a+');

    fputcsv($fp, $line, ";");

fclose($fp);
//var_dump($_POST);
header("location:connexion.php");

?>