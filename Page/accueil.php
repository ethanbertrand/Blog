
<section class="accueil">

    <div class="accueil-intro">
        <span class="accueil-badge">
            ✦ MON BLOG PERSONNEL
        </span>

        <h1>
            Bienvenue sur mon<br>
            <span class="texte-gradient">Portefolio !</span>
        </h1>

        <p class="accueil-description">
            Bonjour, je m'appelle <strong>Ethan BERTRAND</strong>.
            Je suis étudiant en <strong>BTS Services Informatiques
            aux Organisations</strong> et je vous présente ici mon
            parcours, mes compétences,mes projets réalisés
            durant ma formation et plein d'autre.
        </p>

        
    </div>

    <div class="accueil-section-projets">
        <div class="accueil-section-titre">
            <div>
                <span class="petit-titre">DÉCOUVREZ MON TRAVAIL</span>
                <h2>Explorez mon univers</h2>
            </div>
        </div>

        <div class="accueil-grille">

            <a href="index.php?page=page0" class="accueil-carte">
                <div class="carte-icone">▤</div>
                <span class="carte-numero">01 / PARCOURS</span>
                <h3>Mon CV</h3>
                <p>
                    Découvrez mon parcours, mes compétences
                    informatiques, ma formation et mes expériences.
                </p>
                <span class="carte-lien">Consulter mon CV ↗</span>
            </a>

            <a href="index.php?page=competences" class="accueil-carte">
                <div class="carte-icone">⌘</div>
                <span class="carte-numero">02 / ACQUIS</span>
                <h3>Compétences</h3>
                <p>
                    Retrouvez toutes les compétences que j'ai acquise depuis le début de mes études.
                </p>
                <span class="carte-lien">Voir mes compétences ↗</span>
            </a>

            <a href="index.php?page=projet" class="accueil-carte">
                <div class="carte-icone">✧</div>
                <span class="carte-numero">03 / RÉALISATIONS</span>
                <h3>Projets réalisés</h3>
                <p>
                    Explorez mes réalisations, mes nouveaux acquis
                    et mon évolution durant mes deux années de BTS.
                </p>
                <span class="carte-lien">Voir mes projets ↗</span>
            </a>

            <a href="index.php?page=stage" class="accueil-carte">
                <div class="carte-icone">𖤐</div>
                <span class="carte-numero">04 / Stages</span>
                <h3>Stages</h3>
                <p>
                    Explorez mes expériences professionnelles dans l'informatique.
                </p>
                <span class="carte-lien">Explorer ↗</span>
            </a>

            <a href="index.php?page=experience" class="accueil-carte">
                <div class="carte-icone">💼</div>
                <span class="carte-numero">05 / Expériences professionnelles</span>
                <h3>Expériences professionnelles</h3>
                <p>
                    Découvrez expériences volontaires dans le monde du travail
                </p>
                <span class="carte-lien">Explorer ↗</span>
            </a>

            <a href="index.php?page=passion" class="accueil-carte">
                <div class="carte-icone">❤️</div>
                <span class="carte-numero">06 / Mes autres centres d'intérêts</span>
                <h3>Centres d'intérêts</h3>
                <p>
                    Découvrez mes centres d'intérêt en dehors du monde professionnel.
                </p>
                <span class="carte-lien">Découvrir ↗</span>
            </a>
            
        </div>
    </div>

    <div class="accueil-labyrinthe">
        <div class="labyrinthe-texte">
            <span class="petit-titre"> Linkedin</span>
            <h2>Envie d'en découvrir encore plus sur moi ? </h2>
            <p>
                Va alors regarder mon Linkedin !
            </p>
        </div>
        
        <a href="https://www.linkedin.com/in/ethan-bertrand-015606358/?isSelfProfile=true"target="_blank" rel="noopener noreferrer"class="bouton-url">
            Mon Linkedin <span>→</span>
        </a>
        
    </div>

    
</section>
<hr>

<h1 class="bouton-centre">Une petite envie de jouer ?</h1>

<style>
.mini-pfc {
    width: 30cm;
    height: 10cm;
    max-width: 100%;
    margin: 30px auto;
    padding: 12px;
    box-sizing: border-box;
    border: 1px solid #6d5dfc;
    border-radius: 14px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    gap: 10px;
    text-align: center;
    overflow: hidden;
    font-family: Arial, sans-serif;
}

.mini-pfc h2 {
    font-size: 17px;
    margin: 0;
}

.mini-pfc .pfc-choix {
    display: flex;
    justify-content: center;
    gap: 7px;
}

.mini-pfc button {
    cursor: pointer;
    padding: 8px;
    border: 1px solid #6d5dfc;
    border-radius: 8px;
    background: transparent;
    color: inherit;
    font-size: 12px;
}

.mini-pfc .pfc-choix button {
    font-size: 23px;
    padding: 8px 10px;
}

.mini-pfc button:hover {
    background: #6d5dfc;
    color: white;
}

.mini-pfc p {
    font-size: 12px;
    margin: 0;
}

@media (max-width: 380px) {
    .mini-pfc {
        width: 100%;
        height: 10cm;
    }
}
</style>

<div class="mini-pfc">
    <h2>✊ Pierre, feuille, ciseaux</h2>

    <p>Choisis ton coup !</p>

    <div class="pfc-choix">
        <button onclick="jouerPFC('Pierre')" aria-label="Pierre">✊</button>
        <button onclick="jouerPFC('Feuille')" aria-label="Feuille">✋</button>
        <button onclick="jouerPFC('Ciseaux')" aria-label="Ciseaux">✌️</button>
    </div>

    <p id="pfc-resultat" aria-live="polite">À toi de jouer !</p>
    <p>Toi : <strong id="pfc-joueur">0</strong> — Bot : <strong id="pfc-bot">0</strong></p>

    <button onclick="resetPFC()">↻ Recommencer</button>
</div>

<script>
(function () {
    let joueur = 0;
    let bot = 0;

    window.jouerPFC = function (choix) {
        const options = ["Pierre", "Feuille", "Ciseaux"];
        const adversaire = options[Math.floor(Math.random() * 3)];

        let resultat;

        if (choix === adversaire) {
            resultat = "Égalité ! 🤝";
        } else if (
            (choix === "Pierre" && adversaire === "Ciseaux") ||
            (choix === "Feuille" && adversaire === "Pierre") ||
            (choix === "Ciseaux" && adversaire === "Feuille")
        ) {
            joueur++;
            resultat = "Tu gagnes ! 🎉";
        } else {
            bot++;
            resultat = "Le bot gagne ! 🤖";
        }

        document.getElementById("pfc-resultat").textContent =
            choix + " contre " + adversaire + " — " + resultat;

        document.getElementById("pfc-joueur").textContent = joueur;
        document.getElementById("pfc-bot").textContent = bot;
    };

    window.resetPFC = function () {
        joueur = 0;
        bot = 0;
        document.getElementById("pfc-joueur").textContent = "0";
        document.getElementById("pfc-bot").textContent = "0";
        document.getElementById("pfc-resultat").textContent =
            "À toi de jouer !";
    };
})();
</script>

