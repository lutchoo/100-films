<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style100.css">
    <link rel="shortcut icon" href="icons/pop-corn.png" type="image/x-icon">
    <title>Les 100 films à voir</title>
</head>
<body>
    <header>
        <section>
            <?php
            //ouvrir la session utilisateur
            session_start();
            // si la session est active
            if(isset($_SESSION["user"])){
                ?>
                <article id="session_co">
                    <?php
                        print ("<p>Bonjour " . $_SESSION["user"] . " ! " . "Session connectée.</p>");
                       // var_dump($_SESSION);
                    ?>
                    <form id="form_authentification" action="back_deconnexion.php" method="post">
                        <button type="submit" value="Se déconnecter">Déconnexion</button>
                    </form>
                </article>
            <?php
            //si on se déconnecte ou qu'elle est inactive
            } else { ?>
            <nav id="inscriptionConnexion">
                <p>Inscrivez-vous ! <button id="btn-inscription"><a href="inscription.php">Inscription</a></button></p>
                <p>Déjà un compte ? <button id="btn-connexion"><a href="connexion.php">Connexion</a></button></p>
            </nav>
            <?php
            }
            //Fin de session utilisateur
            ?>
        </section>
        
        <section id="titreDuSite">
            <h1 id="maintitle"><span>La</span> liste des 100 films <br><span>à voir !</span></h1>
            <h3>En bon cinéphile qui se respecte,<br>votre devoir est d'avoir vu ces 100 films considérés par notre dream team comme films cultes.</h3>
            <h3>Si vous ne savez pas par où commencer,<br>testez votre culture cinématographique dans notre quizz cinéma ! </h3>
        </section>
        <nav id="topNav">
            <ul>
                <li id="form-tri">
                <article class="selecteurs">
                    <!--utilisation dans le formulaire de la methode POST pour récuperer des données
                de toutes sortes dans un tableau -->
                    <form method="POST" enctype='multipart/form-data'>
                        <label for="selecteurDeTri_categorie">Catégories :</label>
                        <select name="tri_categories" id="selecteurDeTri_categorie">
                            <option value="tous">Tous</option>
                            <!--Pour chaque catégorie trouvée, renvoyer la catégorie en option-->
                            <?php foreach($categories as $c) { ?>
                                <option value="<?php echo $c ?>"><?php echo  $c ?></option>
                            <?php } ?>
                        </select>
                        <form method="POST" enctype='multipart/form-data'>
                            <label for="selecteurDeTri">Trier :</label>
                            <select name="tri" id="selecteurDeTri">
                                <option value="nomAZ">par titre de A à Z</option>
                                <option value="nomZA">par titre de Z à A </option>
                                <option value="dateCroissant">du plus ancien au plus récent</option>
                                <option value="dateDecroissant">du plus récent au plus ancien</option>
                            </select>
                            <button id="btn-appliquer">Appliquer</button>
                        </form>
                    </form>
                </article>        
                </li>
                <?php if(isset($_SESSION["user"])){?>
                <li id="lien-quizz"><a href="quizz100films.php">Quizz</a></li>
                <?php }else{?>
                    <li id="lien-quizz"><a href="connexion.php">Quizz</a></li>
                    <?php }?>
            </ul>
    </header>