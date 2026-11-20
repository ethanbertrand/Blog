<?php
$page = $_GET['page'] ?? 'accueil';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ethan BERTRAND - Etudiant en informatique</title>

    <!-- Icône de l'onglet du navigateur -->
    <link rel="icon" type="image/png" href="limage.png?v=2">

    <!-- Feuille de style -->
    <link rel="stylesheet" href="style/styles.css?v=3">
</head>

<body class="<?= htmlspecialchars($page) ?>">

    <!-- NAVBAR -->
    <nav class="navbar">
        <ul>
            <li><a href="index.php?page=accueil">Accueil</a></li>
            <li><a href="index.php?page=page0">À propos </a></li>
            <li><a href="index.php?page=competences">Compétences</a></li>
            <li><a href="index.php?page=projet">Mes Projets</a></li>
            <li><a href="index.php?page=stage">Stages réalisés</a></li>
            <li><a href="index.php?page=experience">Expériences professionnelles</a></li>
            <li><a href="index.php?page=passion"> Mes autres centres d'intérêt</a></li>
            <li><a href="index.php?page=programme">BTS SIO</a></li>
        </ul>
    </nav>

    <!-- HEADER -->
    <header class="header-cv">
        <div class="header-inner">
            <img src="limage.png" alt="Photo de profil" class="photo-profil">
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
                include 'Page/page0site.php';
                break;
            case 'projet':
                include 'Page/projet.php';
                break;
            case 'jeux':
                include 'Page/jeux.php';
                break;
            case 'passion':
                include 'Page/passion.php';
                break;
            case 'cols':
                include 'Page/col.php';
                break;
            case 'experience':
                include 'Page/experience.php';
                break;
            case 'stage':
                include 'Page/stage.php';
                break;
            case 'competences':
                include 'Page/competences.php';
                break;
            case 'skills':
                include 'Page/skills.php';
                break;
            case 'programme':
                include 'Page/programme.php';
                break;
            case 'accueil':
            default:
                include 'Page/accueil.php';
                break;
            
        }
        ?>
    </main>

</body>
</html>
