<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style100.css">
    <link rel="shortcut icon" href="icons/pop-corn.png" type="image/x-icon">
    <title>Inscription</title>
</head>
<body>
    <header>
        <section id="titreDuSite">
            <h1 id="maintitle"><span>La</span> liste des 100 films <br><span>à voir !</span></h1>
            <h3>Inscrivez-vous pour enregistrer votre score au quizz !</h3>
        </section>
        <nav id="topNav">
            <ul>
                <li id="ul-li-unique">
                    <form id="form-inscriptionConnexion" action="back_inscription.php" method="POST" enctype="multipart/form-data" >
                        <div class="champs">
                            <label for="name"> Veuillez entrer votre nom : </label>
                            <input type="text" name="name" id="name" required>
                        </div>
                        <div class="champs">
                            <label for="mail"> Veuillez entrer votre mail : </label>
                            <input type="email" name="mail" id="mail" required>
                        </div>
                        <div class="champs">
                            <label for="mdp"> Veuillez entrer votre mot de passe : </label>
                            <input type="password" name="mdp" id="mdp" required>
                        </div>    
                        <button id="btn-inscription" type="submit">Envoyer</button>
                    </form> 
                </li>
            </ul>
        </nav>
    </header> 
</body>
</html>