<?php
if (isset($_GET["message"])) {
    print $_GET ["message"];
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style100.css">
    <link rel="shortcut icon" href="icons/pop-corn.png" type="image/x-icon">
    <title>Connexion</title>
</head>
<body>
    <header>
        <section id="titreDuSite">
            <h1 id="maintitle"><span>La</span> liste des 100 films <br><span>à voir !</span></h1>
            <h3>Connectez-vous pour enregistrer votre score au quizz !</h3>
        </section>
        <nav id="topNav">
            <ul>
                <li id="ul-li-unique">
                    <form id="form-inscriptionConnexion" action="back_connexion.php" method="POST" enctype="multipart/form-data">
                        <div class="champs">
                            <label for="comail">Entrez votre email : </label>
                            <input type="email" name="comail" id="comail" required>
                        </div>
                        <div class="champs">
                            <label for="mdp">Entrez votre mot de passe : </label>
                            <input type="password" name="comdp" id="comdp" required>
                        </div>    
                        <button id="btn-connexion" type="submit" value="se connecter">Se connecter</button>
                    </form> 
                </li>
            </ul>
        </nav>
    </header> 
</body>
</html>
