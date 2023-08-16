
<!--2EME PARTIE DE LA PAGE PRINCIPALE-->

<main>
		<!--DEBUT DE LA BOUCLE : pour chaque valeur trouvée dans la BDD-->
		<?php foreach($table as $value) {?>
			<!--incorporer un lien vers une image à mettre en background. /!\ pour appliquer des propriétés à ce background image,
			incorporer ici le style, et non en css (on ne peut pas appeler de php en css)-->
			<article class ="filmzzz" style="background: url('<?php print $value[10]?>'); background-size: cover; background-repeat: no-repeat;">
				<div id="infos-jackette">
					<div id=texte-jackette>
						<!--Afficher les données voulues dans l'article-->
						<h1 id="titrefilm"> <?php print utf8_encode($value[1])?> </h1>
						<h2 id ="sortie"> <?php print $value[2] ?> </h2>
					</div>
					<div id="bouton-lienfiche">
						<!--lien vers une page unique qui, en récupérant la donnée ID en index 0,
						va permettre de récupérer les données correspondantes dans le tableau -->
						<a id="lienfiche" href="fiche.php?id=<?php print $value[0] ?>"> Voir Plus </a>
					</div>
				</div>				
			</article>

		<?php
		/////FIN DE LA BOUCLE/////
		} ?>
	</main>

		
	</body>
</html>

<?php /*
		<article id = origine>
		<?php print $value[2] ?>
		</article>
		<article id = categorie>
			<?php print $value[3] ?>
		</article>
		<article id = realisateur>
			<?php print $value[4] ?>
		</article>
		<article id = acteur>
			<?php print $value[5] ?>
		</article>
		<article id = synopsis>
			<?php print $value[6] ?>
		</article>
		<article id = synopsis>
			<?php print $value[7] ?>

			*/

			?>