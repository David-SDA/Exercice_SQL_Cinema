<?php
    ob_start();
    $contenu = ob_get_clean();
    require "view/Accueil/viewAccueil.php";
?>