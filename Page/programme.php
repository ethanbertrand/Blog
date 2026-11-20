<?php


$competences = [
    [
        "nom" => "Développer des applications",
        "description" => "Créer des applications web et logicielles en utilisant différents langages de programmation."
    ],
    [
        "nom" => "Concevoir des bases de données",
        "description" => "Créer et administrer des bases de données, écrire des requêtes SQL et organiser les informations."
    ],
    [
        "nom" => "Développer des sites web",
        "description" => "Créer des sites web dynamiques avec HTML, CSS, JavaScript, Symfony, PHP et des bases de données."
    ],
    [
        "nom" => "Travailler en équipe",
        "description" => "Collaborer sur des projets informatiques, organiser son travail et utiliser des outils de gestion de versions."
    ],
    [
        "nom" => "Assurer la maintenance",
        "description" => "Corriger les erreurs, améliorer les applications et assurer leur évolution."
    ],
    [
        "nom" => "Sécuriser les applications",
        "description" => "Appliquer les bonnes pratiques de sécurité pour protéger les données et les utilisateurs."
    ]
];

$projets = [
    [
        "nom" => "Développement d'un site web",
        "description" => "Concevoir et réaliser un site web en utilisant HTML, CSS, Symfony, PHP et éventuellement JavaScript."
    ],
    [
        "nom" => "Gestion d'une base de données",
        "description" => "Créer une base de données, organiser les informations et réaliser des opérations avec SQL."
    ],
    [
        "nom" => "Création d'une application (Windows Form)",
        "description" => "Développer une application répondant à un besoin précis en respectant les étapes d'un projet informatique."
    ]
];

$debouches = [
    [
        "nom" => "Développeur web",
        "description" => "Conçoit et développe des sites et applications web."
    ],
    [
        "nom" => "Développeur d'applications",
        "description" => "Crée des logiciels et des applications répondant aux besoins des utilisateurs."
    ],
    [
        "nom" => "Analyste programmeur",
        "description" => "Analyse les besoins, conçoit des solutions informatiques et développe les programmes correspondants."
    ],
    [
        "nom" => "Technicien développeur",
        "description" => "Participe à la réalisation, aux tests et à la maintenance des applications."
    ],
    [
        "nom" => "Intégrateur web",
        "description" => "Assemble les éléments graphiques et techniques d'un site web."
    ]
];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>BTS SIO - Option SLAM</title>

    <link rel="stylesheet" href="style/styles.css?v=3">
</head>

<body>

    <!-- EN-TÊTE -->
    <header class="header-cv">
        <div class="header-inner">
            <div class="entete-cv">
                <h1>Le BTS SIO</h1>
                <h2>Option SLAM</h2>
                <p>Services Informatiques aux Organisations</p>
                <p>Je suis actuellement en recherche de stage en tant que développeur du <strong>4 Janvier </strong> au <strong> 26 février 2027. </strong></p>
            </div>
        </div>
    </header>

    <!-- MENU DE NAVIGATION -->
    <nav class="navbar">
        <ul>
            <li><a href="#presentation">Présentation</a></li>
            <li><a href="#competences">Compétences</a></li>
            <li><a href="#projets">Projets</a></li>
            <li><a href="#stages">Stages</a></li>
            <li><a href="#debouches">Débouchés</a></li>
        </ul>
    </nav>

    <main>

        <!-- PRÉSENTATION -->
        <section id="presentation" class="card">
            <h1>Présentation du BTS SIO</h1>

            <p>
                Le BTS Services Informatiques aux Organisations (SIO) est un
                diplôme de niveau Bac+2 qui forme des professionnels de
                l'informatique capables de répondre aux besoins des
                organisations.
            </p>

            <p>
                Cette formation permet d'acquérir des compétences techniques
                et professionnelles dans les domaines du développement,
                des réseaux et des systèmes informatiques.
            </p>

            <p>
                Au lycée Fulbert, les étudiants peuvent choisir entre deux
                spécialités : SISR et SLAM.
            </p>

            <h2>Qu'est-ce que l'option SLAM ?</h2>

            <p>
                SLAM signifie « Solutions Logicielles et Applications
                Métiers ». Cette spécialité est orientée vers le développement
                informatique.
            </p>

            <p>
                Elle permet d'apprendre à concevoir, développer, tester et
                maintenir des applications informatiques adaptées aux besoins
                des entreprises et des utilisateurs.
            </p>

            <h2>À qui s'adresse cette formation ?</h2>

            <p>
                L'option SLAM s'adresse aux personnes intéressées par la
                programmation, la création de sites web, les bases de données
                et la conception de logiciels.
            </p>
        </section>

        

        <!-- COMPÉTENCES -->
        <section id="competences" class="card">
            <h1>Les compétences développées en SLAM</h1>

            <p>
                L'option SLAM permet d'acquérir différentes compétences
                nécessaires pour travailler dans le domaine du développement
                informatique.
            </p>

            <?php foreach ($competences as $competence): ?>
                <article class="carte">
                    <h3>
                        <?= htmlspecialchars($competence["nom"]) ?>
                    </h3>

                    <p>
                        <?= htmlspecialchars($competence["description"]) ?>
                    </p>
                </article>
            <?php endforeach; ?>
        </section>

        <!-- PROJETS -->
        <section id="projets" class="card">
            <h1>Les projets informatiques</h1>

            <p>
                Pendant la formation, les étudiants réalisent différents
                projets afin de mettre en pratique les connaissances
                acquises en cours.
            </p>

            <?php foreach ($projets as $projet): ?>
                <article class="projet">
                    <h3>
                        <?= htmlspecialchars($projet["nom"]) ?>
                    </h3>

                    <p>
                        <?= htmlspecialchars($projet["description"]) ?>
                    </p>
                </article>
            <?php endforeach; ?>
        </section>

        <!-- STAGES -->
        <section id="stages" class="card">
            <h1>Les stages en entreprise</h1>

            <p>
                Le BTS SIO comprend des périodes de stage en entreprise.
                Elles permettent de découvrir le monde professionnel et
                de mettre en pratique les compétences acquises pendant
                la formation.
            </p>

            <h2>Les objectifs des stages</h2>

            <ul>
                <li>Découvrir le fonctionnement d'une entreprise informatique.</li>
                <li>Participer à des missions professionnelles.</li>
                <li>Développer son autonomie.</li>
                <li>Mettre en pratique ses connaissances techniques.</li>
                <li>Découvrir les métiers liés au développement informatique.</li>
            </ul>
        </section>

        <!-- DÉBOUCHÉS -->
        <section id="debouches" class="card">
            <h1>Les débouchés professionnels</h1>

            <p>
                Après l'obtention du BTS SIO option SLAM, plusieurs métiers
                du secteur informatique sont accessibles.
            </p>

            <?php foreach ($debouches as $debouche): ?>
                <article class="carte">
                    <h3>
                        <?= htmlspecialchars($debouche["nom"]) ?>
                    </h3>

                    <p>
                        <?= htmlspecialchars($debouche["description"]) ?>
                    </p>
                </article>
            <?php endforeach; ?>
        </section>

    </main>

    <!-- PIED DE PAGE -->
    <footer>
        <p>
            BTS SIO - Option SLAM | Lycée Fulbert
        </p>
        
    </footer>

</body>
</html>