<?php
$comail = $_POST['comail'];
$comdp = $_POST['comdp'];

$table = array();
if (($handle = fopen("data.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
       $table[]=$data;
    }
    fclose($handle);
}

foreach($table as $log){
   if($log[1]==$comail && password_verify($comdp,$log[2])){
    session_start();
    $_SESSION["user"]=$log[0];
    header("location:traitement.php");
   }elseif($log[1]!=$comail || $log[2]!=$comdp){
    header("location:connexion.php?message= Mauvais identifiants");
   }
}

?>



