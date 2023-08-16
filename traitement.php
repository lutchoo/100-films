<?php
//ouvrir la base de donnee.
$table = array();
if (($handle = fopen("Films.csv", "r")) !== FALSE) {
	$index = 0;
	while (($data = fgetcsv($handle, 3000, ";")) !== FALSE) {
		if($index>0){
		$table[] = $data;
		}
		$index++;	
	}
	fclose($handle);
}
//creation d'un tableau pour les categories de film 
$categories=array();

foreach($table as $value){
	//tri le tableau $categorie par ordre alphabetique
	asort($categories);
	//Mettre une seule fois la $value[4] du csv dans le nouveau tableau $categories
	if (in_array($value[4],$categories)==false) {
		$categories[]=$value[4];
	
	}
}
//var_dump($categories);

// Ajout du header
 require_once('mel.php') ;

//Trier les films 
if(empty($_POST["tri"])){
 	unset($_POST["tri"]);
}
// De A a Z 
elseif ($_POST["tri"]=="nomAZ") {
	$titre = array();
	foreach($table as $value){
		$titre[]=$value[1];
	}
	array_multisort($titre, SORT_ASC,
					$table);
}
//De Z a A 
elseif ($_POST["tri"]=="nomZA") {
	$titre = array();
	foreach($table as $value){
		$titre[]=$value[1];
	}
	array_multisort($titre, SORT_DESC,
						$table);
}
// Par date croissante
elseif($_POST["tri"]=="dateCroissant"){
	$date = array();
	foreach($table as $value){
		$date[]=$value[2];
	}
	array_multisort($date, SORT_ASC,
					$table);
}
//Par date decroissante
elseif($_POST["tri"]=="dateDecroissant"){
	$date = array();
	foreach($table as $value){
		$date[]=$value[2];
	}
	array_multisort($date, SORT_DESC,
					$table);
}

//Par categorie
if(isset($_POST["tri_categories"])&&$_POST["tri_categories"]!= "tous"){
	$temp = array();
	foreach($table as $value){
		if ($value[4]==$_POST["tri_categories"]) {
			$temp[]=$value;
		}	
	}
	$table=$temp;		
}
require_once("marceau.php");
//print $_POST["tri_categories"];
?>  


