<?php
// Choisir la classe du body selon la page
$body_class = 'accueil'; 
if (isset($_GET['menu'])) {
    switch($_GET['menu']) {
        case '1':
        case '2':
            $body_class = 'autre';
            break;
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="author" content="Ethan Bertrand">
    <link rel="stylesheet" href="style/styles.css">

    <?php 
    // Inclure l’en-tête spécifique à la page
    if (isset($_GET['menu'])) {
        switch($_GET['menu']) {
            case '1': include('page/page1-h.php'); break;
            case '2': include('page/page2-h.php'); break;
            default: include('page/page0-h.php');
        }
    } else {
        include('page/page0-h.php');
    }
    ?>
</head>

<body class="<?= $body_class ?>">

    <?php 
    include("include/header.php");
    include("include/nav.php"); 

    // Chargement des pages principales
    if (isset($_GET['menu'])) {
        switch($_GET['menu']) {
            case '1': include("page/page1.php"); break;
            case '2': include("page/page2.php"); break;
            default: include("page/page0.php");
        }
    } else {
        include("page/page0.php");
    }

    include("include/footer.php");
    include("include/javascript.php");
    ?>

</body>
</html>

