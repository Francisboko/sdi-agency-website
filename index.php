<?php $page = 'accueil'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="style.css?v=40">
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
<body>
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
<!-- HERO -->
<div class="hero">
    <!-- Texte du haut -->
    <p style="font-size: 20px; color: #f3b92e; margin-bottom: 15px;">
        Bonjour, je suis
    </p>
    <!-- PHOTO AU MILIEU -->
    <div style="margin: 15px auto;">
        <img src="photo.jpg" 
             alt="BOKOARIVELO Francis"
             style="
                width: 150px;
                height: 150px;
                border-radius: 50%;
                border: 4px solid #f3b92e;
                box-shadow: 0 0 20px rgba(52,152,219,0.5);
                object-fit: cover;
             ">
    </div>
    <!-- Nom -->
    <h1><span>BOKOARIVELO Francis</span></h1>
    <!-- Titre -->
    <p style="font-size: 18px; color: #fdfdfc; margin: 15px 0 30px 0;">
        ingenieur informatique,Développeur full stack | fondateur S.D.I 
    </p>
    <p class="titre-degrade-ia" style="font-size: 20px; margin-bottom: 15px;">EXPERT INTELLIGENCE ARTIFICIELLE</p><br>
<a class="btn-hero" href="contact.php" id="btnContact">
    <span id="btnContactText">Me contacter</span>
    <span class="spinner"></span>
</a>
</div>
<!-- COMPETENCES -->
<div class="section">
    <h2>Mes Compétences</h2>
    <div class="ligne-orange"></div>

    <div class="competences-wrapper reveal-on-scroll">
        <!-- Carte explication à gauche -->
        <div class="competences-info">
            <h3>Mon expertise technique</h3>
            <ul>
                <li><strong>HTML / CSS</strong> — Structure et mise en forme des sites web, responsive design.</li>
                <li><strong>PHP / MySQL</strong> — Développement backend et gestion de bases de données.</li>
                <li><strong>Python</strong> — Automatisation, scripts et traitement de données.</li>
                <li><strong>Java</strong> — Applications orientées objet et robustes.</li>
                <li><strong>JavaScript</strong> — Interactivité et dynamisme côté client.</li>
            </ul>
        </div>

        <!-- Barres de compétences à droite -->
        <div class="competences-barres">
            <div class="competence">
                <label>HTML / CSS</label>
                <div class="barre">
                    <div class="barre-remplie" style="width: 90%"></div>
                </div>
            </div>
            <div class="competence">
                <label>PHP/MySql</label>
                <div class="barre">
                    <div class="barre-remplie" style="width: 75%"></div>
                </div>
            </div>
            <div class="competence">
                <label>Python</label>
                <div class="barre">
                    <div class="barre-remplie" style="width: 50%"></div>
                </div>
            </div>
            <div class="competence">
                <label>Java</label>
                <div class="barre">
                    <div class="barre-remplie" style="width: 70%"></div>
                </div>
            </div>
            <div class="competence">
                <label>JavaScript</label>
                <div class="barre">
                    <div class="barre-remplie" style="width: 60%"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- SLIDER PHOTOS -->
<div class="slider-container reveal-on-scroll">
    <div class="slider-wrapper" id="sliderWrapper">
        <img src="fr6.jpg" class="slide-img" alt="Slide 1">
        <img src="domaine.jpg" class="slide-img" alt="Slide 2">
        <img src="Github.jpg" class="slide-img" alt="Slide 3">
        <img src="https.jpg" class="slide-img" alt="Slide 4">
        <img src="projet-login.jpg" class="slide-img" alt="Slide 5">
    </div>
    <button class="slider-btn prev" onclick="changeSlide(-1)">&#10094;</button>
    <button class="slider-btn next" onclick="changeSlide(1)">&#10095;</button>
    <div class="slider-dots" id="sliderDots"></div>
</div>
<!-- PROJETS -->
<!-- CARTE 1 : Agence Digitale -->
<div class="card card-split reveal-on-scroll">
    <div class="card-text">
        <h3>Agence Digitale</h3>
        <p>
            🎯 <strong>Offre spéciale du mois</strong><br><br>
            Obtenez un site internet professionnel à partir de <strong>140 €</strong>, 
            avec une maintenance mensuelle à seulement <strong>28 €/mois</strong>
        </p>
        <p>
            ✅ <strong>Devis gratuit, sans engagement</strong>
        </p>
        <p style="text-align: left; margin-top: 15px;">
            Votre projet, entre de bonnes mains :
        </p>
        <ul style="text-align: left; list-style: none; padding-left: 0; margin-top: 10px;">
            <li>✔️ Sites internet modernes et rapides</li>
            <li>✔️ Applications web sur mesure</li>
            <li>✔️ Hébergement sécurisé</li>
            <li>✔️ Nom de domaine inclus</li>
        </ul>
    </div>
    <div class="card-image">
        <img src="projet-gestion.jpg" alt="Gestion de projet">
    </div>
</div><br>
<!-- CARTE 2 : Tarifs (déjà faite, on la garde) -->
<div class="card card-split reveal-on-scroll">
    <div class="card-text">
        <h3>Nos tarifs création de sites web</h3>
        <p><strong>Site Vitrine</strong> — Basique (3-5 pages) 140€, Standard (5-10 pages) 280€, Premium (10+ pages) 465€</p>
        <p><strong>Site E-commerce</strong> — Starter 370€, Business 650€, Pro (illimité) 1115€</p>
        <p><strong>Portfolio</strong> — Simple 93€, Avancé 232€</p>
        <p><strong>Application Web</strong> — Simple 465€, Complexe 1395€</p>
        <a href="contact.php" class="btn-commander">Commandez maintenant</a>
    </div>
    <div class="card-image">
        <img src="projet-upload.jpg" alt="Tarifs SDI">
    </div>
</div><br>
<!-- CARTE 3 : Hébergement -->
<div class="card card-split reveal-on-scroll">
    <div class="card-text">
        <h1 class="titre-degrade">HEBERGEMENT SITE WEB RAPIDE</h1>
        <p>POURQUOI CHOISIR S.D.I ?</p>
        <ul style="text-align: left; list-style: none; padding-left: 0; margin-top: 10px;">
            <li>✔️ Hébergement haute performance</li>
            <li>✔️ Hébergement fiable & sécurisé</li>
            <li>✔️ Hébergement WordPress optimisé</li>
            <li>✔️ Prix imbattable dès 2€/mois</li>
            <li>✔️ Domaine gratuit la 1ère année !</li>
        </ul>
    </div>
    <div class="card-image">
        <img src="hebergement.jpg" alt="Hébergement rapide">
    </div>
</div><br>

<!-- CARTE 4 : Infographie -->
<div class="card card-split reveal-on-scroll" style="background-color: #3a3a45;">
    <div class="card-text">
        <h1 class="titre-degrade">INFOGRAPHIE</h1>
        <p style="text-align:center; color:white;">Formateur montage vidéo, audio et image</p>
        <ul>
            <li style="color: yellow;">Adobe Photoshop</li>
            <li style="color: yellow;">Canva Pro</li>
            <li style="color: yellow;">Adobe Premier</li>
            <li style="color: yellow;">Capcut</li>
        </ul>
    </div>
    <div class="card-image">
        <img src="formation.jpg" alt="Formation infographie">
    </div>
</div>
<br>
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
    const menuToggle = document.querySelector('.menu-toggle');
    
    if (navLinks.classList.contains('active')) {
        navLinks.classList.remove('active');
    }
});
document.querySelector('.nav-links').addEventListener('click', function(event) {
    event.stopPropagation();
});
</script>
<script>
let currentSlide = 0;
const slides = document.querySelectorAll('.slide-img');
const totalSlides = slides.length;
const sliderWrapper = document.getElementById('sliderWrapper');
const dotsContainer = document.getElementById('sliderDots');

for (let i = 0; i < totalSlides; i++) {
    const dot = document.createElement('span');
    dot.classList.add('dot');
    if (i === 0) dot.classList.add('active');
    dot.onclick = () => goToSlide(i);
    dotsContainer.appendChild(dot);
}

function updateSlider() {
    sliderWrapper.style.transform = `translateX(-${currentSlide * 100}%)`;
    document.querySelectorAll('.dot').forEach((dot, index) => {
        dot.classList.toggle('active', index === currentSlide);
    });
}

function changeSlide(direction) {
    currentSlide = (currentSlide + direction + totalSlides) % totalSlides;
    updateSlider();
}

function goToSlide(index) {
    currentSlide = index;
    updateSlider();
}

setInterval(() => {
    changeSlide(1);
}, 4000);
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
document.getElementById('btnContact').addEventListener('click', function(e) {
    e.preventDefault();
    var lien = this;
    var texte = document.getElementById('btnContactText');
    lien.classList.add('loading');
    texte.textContent = 'Redirection...';
    setTimeout(function() {
        window.location.href = lien.href;
    }, 800);
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