<?php
session_start();
unset($_SESSION["user"]);
?>
<button><a href="<?php header('Location:traitement.php')?>">Retour</a></button>