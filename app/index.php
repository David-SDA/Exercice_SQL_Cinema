<?php
    /* Ajout de tout les contrôleurs */
    require_once("controller/AccueilController.php");
    require_once("controller/GenreController.php");

    /* Création des objets contrôleurs */
    $controleurAccueil = new AccueilController();
    $controleurGenre = new GenreController();

    /* Si on a une action définie */
    if(isset($_GET['action'])){
        /* On effectue un switch sur celle-ci */
        switch($_GET['action']){
            /* Action pour les genres */
            case "listerGenre":
                $controleurGenre->listerGenres();
        }
    }
    else{ // Sinon cela veut dire qu'on va à l'acceuil
        $controleurAccueil->allerAccueil();
    }
?>