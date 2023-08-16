<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<?php
/////OUVRIR LA BASE DE DONNEES/////

//déclaration de la variable $table comme un tableau
$table = array();
//si le fichier CSV est trouvé
if (($handle = fopen("Films.csv", "r")) !== FALSE) {
    //déclarer la variable index à 0
	$index = 0;
    //et tant que les données recherchées sur 10000 caractères et séparée par des ";"
    //sont trouvées, récupérer les données autant de fois qu'il y en a jusqu'à la fin
    //du tableau.
	while (($data = fgetcsv($handle, 10000, ";")) !== FALSE) {
		if($index>0){
		$table[] = $data;
		}
		$index++;
	}
    //puis fermer le fichier.
	fclose($handle);
}
?>
<?php
    /////RECUPERER LES DONNEES CORRESPONDANT A L'ID DE L'URL/////

    //savoir si la variable "id" existe dans l'url (avec GET)
    if(isset($_GET["id"])){
        //création d'un tableau temporaire
        $temp = array();
        //pour chaque valeur de la base de données
        foreach($table as $value){ 
            // si la valeur indexé en 0 est la meme que celle indiqué en id dans l'URL
            if($value[0]==$_GET["id"]) {
?>
	

    <article class="container">
        <article class="backgroundimage"style="background: url('<?php print $value[11]?>'); background-size: cover; background-repeat: no-repeat;"> 
            <article id="bouton">
                <a href="traitement.php">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    RETOUR
                </a>
            </article>
            <article class="content">
                <article class="affiche">
                    <img src=<?php print $value[10] ?> alt="" id="jackette">
                </article>
                <article class="info">
                    <div class="cardWrap">
                        <div class="card cardLeft">
                          <h1 id="titlecard">Fiche <span>Cinema</span></h1>
                          <div class="title">
                            <h2 id="titrefilm"><?php print $value[1] ?></h2>
                            <span>Titre</span>
                          </div>
                          <div class="name">
                            <h2 id="realisateur"><?php print $value[5] ?></h2>
                            <span>Réalisateur</span>
                          </div>                                                 
                        </div>
                        <div class="card cardRight">
                          <div class="eye"></div>
                          <div class="number">
                            <h3 id="annee"><?php print $value[2] ?></h3>
                            <span>Année</span>
                          </div>
                          <div class="barcode"></div>
                        </div>
                      </div>
                </article>
            </article>
        </article>
        <article class="boitefin">
            <article class="synopsis">
                <h1 id="titresynopsis"></h1>
                <p><?php print (utf8_encode ($value[9])) ?></p>
            </article>
            <article class="acteur">
                <article class="boite">
                    <img src=<?php print $value[12] ?> alt="" width="180px">
                    <h3><?php print $value[6] ?></h3>
                </article>
                <article class="boite">
                    <img src=<?php print $value[13] ?> alt="" width="180px">
                    <h3><?php print $value[7] ?></h3> 
                </article>
                <article class="boite">
                    <img src=<?php print $value[14] ?> alt="" width="180px"> 
                    <h3><?php print $value[8] ?></h3>
                </article>
            </article>
        </article>
        </article>   
</body>

</html>
<?php }?>
<?php }
    $table=$temp; } ?>

