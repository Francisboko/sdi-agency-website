<?php $page = 'apropos'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A propos</title>
    <link rel="stylesheet" href="style.css?v=36">
    <div class="boutons-action">
    <a href="contact.php" class="btn-action btn-inscription">
        <i class="fa-solid fa-user-plus"></i> Inscription
    </a>
    <a href="https://wa.me/261341372657" target="_blank" class="btn-action btn-connexion">
        <i class="fa-brands fa-whatsapp"></i> Connexion
    </a>
    <a href="maps.php" class="btn-action btn-localisation">
        <i class="fa-solid fa-location-dot"></i> Localisation
    </a>
</div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body class="apropos2">
<!-- NAVBAR -->
<nav>
    <div class="nav-left">
        <a class="logo" href="index.php">
            <img src="logo-sdi2.png" alt="Logo SDI" style="height: 45px; vertical-align: middle;">
        </a>
<div class="titre-simple">
        <span><h2>SDI Votre Partenaire Numérique à Madagascar</h2></span>
</div>
</div>
    <div class="nav-right">
        <div class="search-box">
            <input type="text" placeholder="Rechercher...">
            <button type="button"><i class="fa-solid fa-magnifying-glass"></i></button>
        </div>
        <button class="menu-toggle" onclick="event.stopPropagation(); document.querySelector('.nav-links').classList.toggle('active')">☰</button>
        <div class="nav-links">
            <a href="index.php" class="actif">Accueil</a>
            <a href="apropos.php">À propos</a>
            <a href="services.php">Services</a>
            <a href="contact.php">Contact</a>
            <a href="portfolio.php">Portfolio</a>
            <a href="galerie.php">Galerie-Photo</a>
            <a href="equipe_sdi.php">EQUIPE SDI</a>
        </div>

</div>
</nav>
<div class="hero">
    <h1>À <span>Propos de moi</span></h1>
    <p>Découvrez mon parcours et ma passion</p>
    <a class="btn-hero" href="equipe_sdi.php">EQUIPE SDI</a>
</div>
<div class="section">
    <h2 style="color: orange;">QUI SUIS-JE</h2>
    <div class="ligne-bleu" style="background-color: white;"></div>

    <!-- Photo à gauche + texte à droite -->
    <div class="card card-split reveal-on-scroll">
        <div class="card-image">
            <img src="Francis_B.jpg" alt="Francis">
        </div>
        <div class="card-text">
            <p>Je m'appelle <span class="nom-accent">BOKOARIVELO Francis</span>, développeur web et infographiste passionné en informatique. J'apprends chaque jour de nouvelles technologies comme HTML, CSS, PHP, MySQL, Java, Python et JavaScript.</p>
            <p>Mon objectif est de créer des sites web, applications web, applications mobile et outil graphisme utiles et performantes pour aider les gens dans leur vie quotidienne.</p>
        </div>
    </div>

    <br><br>
    <h2 style="color: orange;">Informations</h2>
    <div class="ligne-bleu" style="background-color: white;"></div>

    <!-- Formation : photo à gauche + texte à droite -->
      <div class="card card-split reveal-on-scroll" style="background-color: #010101;">
        <div class="card-image">
            <img src="master.jpg" alt="Formation">
        </div>
        <div class="card-text">
            <h3 style="color: white;">Formation</h3>
            <p style="color: orange;">Master en informatique parcours génie logiciel et base des données</p>
            <h2><p style="color: orange;">Profil professionnel</p></h2>
<p style="color: white;">Professionnel du numérique avec plus de 10 ans d'expérience en développement web, infographie et communication digitale. Passionné par l'innovation et les nouvelles technologies, j'accompagne les entreprises, organisations et particuliers dans la création de solutions numériques modernes, performantes et adaptées à leurs besoins.</p>
</div>
</div>
<br>
    <!-- Double texte : texte à gauche + texte à droite -->
    <div class="card card-split reveal-on-scroll" style="background-color: #3a3a45;">
        <div class="card-text">
            <h3 style="color: orange;">INFOGRAPHIE</h3>
            <p><span style="color: orange;">Graphisme</span> <span style="color: white;">Au cours de mon parcours, j'ai développé une solide expertise dans la conception de sites internet, de plateformes e-commerce, de portfolios professionnels, ainsi que dans la création d'identités visuelles et de supports de communication (logos, affiches, flyers, brochures, bannières et contenus pour les réseaux sociaux). Je maîtrise également les outils de conception graphique et les technologies web les plus utilisées afin de proposer des solutions esthétiques, fonctionnelles et optimisées.</span></p>
        </div>
        <div class="card-text">
            <h3 style="color: orange;">LANGAGE INFORMATIQUE</h3>
            <p><span style="color: orange;">Développement Front-end :</span> <span style="color: white;">Compétences clés
 HTML5, CSS3, JavaScript, Bootstrap.
Développement Back-end : PHP, MySQL.
Conception de sites vitrines, e-commerce et portfolios.
UI/UX Design et conception d'interfaces modernes.
Infographie et identité visuelle.
Maîtrise de Canva Pro, Adobe Photoshop, Adobe Illustrator et Adobe Premiere Pro.
Création de contenus digitaux et optimisation de la présence en ligne.
Capacité à travailler en équipe, à gérer des projets et à respecter les délais.</span></p>
        </div>
    </div>
    <br>
        <!--Capcut et outils :texte à droite et photo gauche -->
    <div class="card card-split reveal-on-scroll" style="background-color: #010101;">
        <div class="card-text">
            <h3 style="color: orange;">LES OUTILS</h3></h3>
            <p><span style="color: orange;">CAPCUT</span> <span style="color: white;">CapCut est une application de montage vidéo simple et puissante, adaptée aussi bien aux débutants qu'aux professionnels. Elle permet de créer des vidéos de haute qualité pour les réseaux sociaux, le marketing, la publicité et les projets personnels.

Fonctionnalités principales :

Montage vidéo rapide et intuitif.
Ajout de textes, sous-titres, transitions et effets visuels.
Bibliothèque de musiques et d'effets sonores.
Outils d'intelligence artificielle (suppression de l'arrière-plan, sous-titres automatiques, amélioration vidéo, etc.).
Export en haute résolution (jusqu'à 4K selon l'appareil et la version).
Formats adaptés à TikTok, Facebook, Instagram, YouTube et autres plateformes.</span></p>
        </div>
         <div class="card-image">
            <img src="outils.jpg" alt="Ma passion">
        </div>
    </div>
    <br>
    <!-- Ma passion : photo à gauche + texte à droite -->
    <div class="card card-split reveal-on-scroll" style="background-color: #3a3a45;">
        <div class="card-image">
            <img src="claude.jpg" alt="Ma passion">
        </div>
        <div class="card-text">
            <h3 style="color: orange;">MA PASSION</h3>
            <p><span style="color: orange;">Intelligence Artificielle</span> <span style="color: white;">(Claude AI, Gemini, ChatGPT, Capcut, Grok, KlingAI, Canva Pro...)</span></p>
        </div>
    </div>
    <br>

    <!-- Spécialité : bloc pleine largeur avec fond image -->
    <div class="card reveal-on-scroll" style="background-image: url('fond4.jpg'); background-size: cover; background-position: center;">
        <div class="icone" style="font-size: 2.5em; filter: drop-shadow(0 0 6px black);">💻</div>
        <h2 style="color: #ffffff; text-shadow: 2px 2px 8px black, 0 0 10px black; font-weight: 900;">SPECIALITE</h2>
        <p style="color: #ffffff; text-shadow: 1px 1px 6px black, 0 0 6px black; font-weight: 600;">Développement Web / Graphisme</p>
    </div>
    <br>

    <h2 style="color: orange;">CLIC ICI</h2>
    <div class="ligne-bleu" style="background-color: white;"></div>
    <a href="maps.php" style="text-decoration:none;">
        <div class="card reveal-on-scroll" style="background-image: url('fond3.jpg'); background-size: cover; background-position: center;">
            <h1 style="color: #ffffff; text-shadow: 2px 2px 8px black, 0 0 10px black; font-weight: 900;">LOCALISATION</h1>
            <p style="color: #ffffff; text-shadow: 1px 1px 6px black, 0 0 6px black; font-weight: 600;">Antananarivo-Madagascar</p>
        </div>
    </a>
</div>
<!-- RUBAN OUTILS -->
<div class="outils-section">
    <h2 class="outils-title">Les outils utilisés par <span>SDI</span></h2>
    <div class="outils-grid">
        <div class="outil-card"><i class="fa-solid fa-robot"></i><span>Claude AI</span></div>
        <div class="outil-card"><i class="fa-solid fa-robot"></i><span>ChatGPT</span></div>
        <div class="outil-card"><i class="fa-solid fa-wand-magic-sparkles"></i><span>Gemini</span></div>
        <div class="outil-card"><i class="fa-solid fa-palette"></i><span>Canva Pro</span></div>
        <div class="outil-card"><i class="fa-solid fa-image"></i><span>Adobe Photoshop</span></div>
        <div class="outil-card"><i class="fa-solid fa-bezier-curve"></i><span>Adobe Illustrator</span></div>
        <div class="outil-card"><i class="fa-solid fa-film"></i><span>CapCut</span></div>
        <div class="outil-card"><i class="fa-solid fa-clapperboard"></i><span>Adobe Premiere Pro</span></div>
        <div class="outil-card"><i class="fa-solid fa-diagram-project"></i><span>n8n</span></div>
        <div class="outil-card"><i class="fa-solid fa-terminal"></i><span>Termux</span></div>
        <div class="outil-card"><i class="fa-solid fa-code"></i><span>Acode</span></div>
        <div class="outil-card"><i class="fa-solid fa-server"></i><span>AWebServer</span></div>
        <div class="outil-card"><i class="fa-brands fa-meta"></i><span>Meta AI</span></div>
        <div class="outil-card"><i class="fa-solid fa-video"></i><span>AI Vidéo Generator</span></div>
        <div class="outil-card"><i class="fa-solid fa-robot"></i><span>Vivago AI</span></div>
        <div class="outil-card"><i class="fa-solid fa-wand-magic-sparkles"></i><span>UMagic</span></div>
        <div class="outil-card"><i class="fa-brands fa-x-twitter"></i><span>Grok</span></div>
        <div class="outil-card"><i class="fa-solid fa-clapperboard"></i><span>KlingAI</span></div>
        <div class="outil-card"><i class="fa-solid fa-code"></i><span>Eclipse ADT</span></div>
        <div class="outil-card"><i class="fa-solid fa-cubes"></i><span>Odoo</span></div>
        <div class="outil-card"><i class="fa-solid fa-laptop-code"></i><span>VS Code</span></div>
    </div>
</div>
<!-- FOOTER -->
<footer>
    <div class="footer-container">
        <div class="footer-col">
            <img src="logo-sdi2.png" alt="Logo SDI" style="height: 50px;">
            <h3>SDI</h3>
        </div>
        <div class="footer-col">
            <h4>À propos</h4>
            <p>
                Le spécialiste des services de développement web et d'infographie à Madagascar. 
                Notre engagement : la réussite de vos projets grâce à des solutions sur-mesure.
            </p>
        </div>
        <div class="footer-col">
            <h4>Suivez-nous</h4>
            <div class="footer-socials">
                <a href="https://wa.me/261341372657" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
                <a href="https://www.facebook.com/profile.php?id=61591050893761" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                <a href="https://instagram.com/sdi.madagascar" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://www.linkedin.com/in/francis-bokoarivelo-b239b0171" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
            </div>
        </div>
    </div>
    <p class="footer-copy">© 2026 <span>BOKOARIVELO Francis</span> — Tous droits réservés</p>
</footer>

<script>
document.addEventListener('click', function(event) {
    const navLinks = document.querySelector('.nav-links');
    if (navLinks.classList.contains('active')) {
        navLinks.classList.remove('active');
    }
});
document.querySelector('.nav-links').addEventListener('click', function(event) {
    event.stopPropagation();
});
</script>
<!-- ANIMATION AU SCROLL -->
<script>
const revealElements = document.querySelectorAll('.reveal-on-scroll');
const revealObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('visible');
        }
    });
}, { threshold: 0.15 });

revealElements.forEach(el => revealObserver.observe(el));
</script>
<script>
document.querySelectorAll('.search-box').forEach(function(box) {
    const input = box.querySelector('input');
    const button = box.querySelector('button');

    function viderRecherche() {
        // Ici tu peux ajouter une action avec la valeur avant de vider, si besoin
        console.log('Recherche :', input.value);
        input.value = '';
    }

    button.addEventListener('click', viderRecherche);

    input.addEventListener('keypress', function(event) {
        if (event.key === 'Enter') {
            event.preventDefault();
            viderRecherche();
        }
    });
});
</script>
<script>
document.querySelectorAll('.search-box').forEach(function(box) {
    var input = box.querySelector('input');
    var btn = box.querySelector('button');

    input.addEventListener('focus', function() {
        box.classList.add('focus-actif');
    });
    input.addEventListener('blur', function() {
        box.classList.remove('focus-actif');
    });
    btn.addEventListener('click', function() {
        btn.classList.add('tourne');
        setTimeout(function() {
            btn.classList.remove('tourne');
        }, 400);
    });
});
</script>
<script>
document.querySelectorAll('.search-box').forEach(function(box) {
    var input = box.querySelector('input');
    var btn = box.querySelector('button');

    input.addEventListener('focus', function() {
        box.classList.add('focus-actif');
    });
    input.addEventListener('blur', function() {
        box.classList.remove('focus-actif');
    });
    btn.addEventListener('click', function() {
        btn.classList.add('tourne');
        setTimeout(function() {
            btn.classList.remove('tourne');
        }, 400);
    });
});
</script>
</body>
</html>
