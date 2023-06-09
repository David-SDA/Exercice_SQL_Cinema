<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="http://localhost/David/Exercice_SQL_Cinema/app/public/css/style.css">
    <title>Cinéma | <?= $titre ?></title>
</head>
    <header>
        <a href="index.php" class="titre"><button class="boutonTitre">CINÉMA</button></a>
        <nav class="navigation">
            <a href="index.php?action=listerFilms"><button>FILMS</button></a>
            <a href="index.php?action=listerActeurs"><button>ACTEURS</button></a>
            <a href="index.php?action=listerRealisateurs"><button>RÉALISATEURS</button></a>
            <a href="index.php?action=listerRoles"><button>RÔLES</button></a>
            <a href="index.php?action=listerGenres"><button>GENRES</button></a>
        </nav>
    </header>
    <body>
        <main>
            <?= $contenu ?>
        </main>
        <script src="http://localhost/David/Exercice_SQL_Cinema/app/public/js/script.js"></script>
    </body>
</html>