<?php
$page = $_GET['page'] ?? 'accueil';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Internet - Ethan Bertrand</title>
    <link rel="stylesheet" href="style/styles.css">
</head>

<body class="<?= htmlspecialchars($page) ?>">

    <!-- NAVBAR -->
    <nav class="navbar">
        <ul>
            <li><a href="index.php?page=accueil">Accueil</a></li>
            <li><a href="index.php?page=page0">CV </a></li>
            <li><a href="index.php?page=premiereannee">Projets de première année</a></li>
            <li><a href="index.php?page=deuxiemeannee">Projets de deuxième année</a></li>
            <li><a href="index.php?page=stage">Stages réalisés</a></li>
            <li><a href="index.php?page=experience">Expériences professionnelles</a></li>
            <li><a href="index.php?page=passion"> Mes autres passions</a></li>
        </ul>
    </nav>

    <!-- HEADER -->
    <header class="header-cv">
        <div class="header-inner">
            <img src="photo.png" alt="Photo de profil" class="photo-profil">
            <div class="entete-cv">
                <h1>Bertrand<br>Ethan</h1>
                <h2>Étudiant</h2>
            </div>
        </div>
    </header>

    <!-- CONTENU VARIABLE -->
    <main>
        <?php
        switch ($page) {
            case 'page0':
                include 'page/page0site.php';
                break;
            case 'premiereannee':
                include 'page/premiereannee.php';
                break;
            case 'deuxiemeannee':
                include 'page/deuxiemeannee.php';
                break;
            case 'passion':
                include 'page/passion.php';
                break;
            case 'cols':
                include 'Page/col.php';
                break;
            case 'experience':
                include 'Page/experience.php';
                break;
            case 'stage':
                include 'page/stage.php';
                break;
            case 'accueil':
            default:
                include 'page/accueil.php';
                break;
            
        }
        ?>
    </main>

</body>
</html>
