<?php $page = 'equipe_sdi'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipe SDI</title>
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
<div class="hero">
    <h1>À <span>Propos de nous</span></h1>
    <p>Notre histoire, notre équipe, notre mission</p>
    <a class="btn-hero" href="contact.php">Me contacter</a>
</div>
<!-- MISSION -->
<div class="section">
    <h1>Notre Mission</h1>
    <div class="ligne-verte"></div>
    <div class="mission-card">
        <img src="badge2.jpg" alt="badge">
        <div class="texte">
            <h2>S.D.I Services Developpement web et Infographie</h2>
            <p style="line-height:1.8;">
                <strong>SDI</strong> est une agence web
                fondée à Antananarivo avec la mission d'aider les
                entreprises à avoir une présence digitale
                forte et professionnelle.
            </p>
            <br>
            <p style="line-height:1.8;">
                Nous croyons que chaque entreprise mérite un site web
                de qualité, accessible et adapté à son budget.
            </p>
        </div>
    </div>
</div>
<!-- SLIDER SERVICES -->
<div class="cs-slider-container">
    <div class="cs-slider-wrapper" id="sliderWrapper">
        <div class="cs-slide" style="background:linear-gradient(135deg,#27ae60,#1a2e1a)">
            <div class="icone"></div>
            <img src="FR6_PDG.jpg" class="slide-img" alt="Slide 1">
        </div>
        <div class="cs-slide" style="background:linear-gradient(135deg,#3498db,#1a252f)">
            <div class="icone"></div>
            <img src="ioby.jpg" class="slide-img" alt="Slide 2">
        </div>
        <div class="cs-slide" style="background:linear-gradient(135deg,#8e44ad,#2c3e50)">
            <div class="icone"></div>
            <img src="patrick.jpg" class="slide-img" alt="Slide 3">
        </div>
         <div class="cs-slide" style="background:linear-gradient(135deg,#8e44ad,#2c3e50)">
            <div class="icone"></div>
            <img src="miora.jpg" class="slide-img" alt="Slide 4">
        </div>
        <div class="cs-slide" style="background:linear-gradient(135deg,#e74c3c,#c0392b)">
            <div class="icone"></div>
            <img src="dadaoly.jpg" class="slide-img" alt="Slide 5">
        </div>
        <div class="cs-slide" style="background:linear-gradient(135deg,#f39c12,#e67e22)">
            <div class="icone"></div>
          <img src="erick.jpg" class="slide-img" alt="Slide 6">
        </div>
    </div>
    <button class="cs-btn-prev" onclick="changerSlide(-1)">❮</button>
    <button class="cs-btn-next" onclick="changerSlide(1)">❯</button>
    <div class="cs-dots" id="dots"></div>
</div>
<!-- SLIDER TÉMOIGNAGES -->
<div class="temoignages">
    <h2>Témoignages clients</h2>
    <div class="ligne-verte"></div>
    <div class="temoignage-slider">
        <div class="temoignage-wrapper" id="temoWrapper">
            <div class="temoignage">
                <div class="temoignage-card">
                    <div class="temoignage-avatar"></div>
                    <div class="stars">⭐⭐⭐⭐⭐</div>
                    <p>"SDI a créé notre site en 2 semaines. Résultat excellent, nos clients adorent !"</p>
                    <h4>Jean Rakoto</h4>
                    <span>Directeur - Clinique Soamasoandro</span>
                </div>
            </div>
            <div class="temoignage">
                <div class="temoignage-card">
                    <div class="temoignage-avatar"></div>
                    <div class="stars">⭐⭐⭐⭐⭐</div>
                    <p>"Équipe très professionnelle. Notre boutique en ligne fonctionne parfaitement depuis 6 mois !"</p>
                    <h4>Marie Rasoa</h4>
                    <span>Gérante - Boutique Mozika</span>
                </div>
            </div>
            <div class="temoignage">
                <div class="temoignage-card">
                    <div class="temoignage-avatar"></div>
                    <div class="stars">⭐⭐⭐⭐⭐</div>
                    <p>"Tarifs abordables et qualité au rendez-vous. Je recommande vivement cette agence !"</p>
                    <h4>Paul Andriamaro</h4>
                    <span>Chef - Restaurant Sakafo</span>
                </div>
            </div>
        </div>
    </div>
    <div class="temo-nav">
        <button class="temo-btn" onclick="changerTemo(-1)">❮</button>
        <button class="temo-btn" onclick="changerTemo(1)">❯</button>
    </div>
    <div class="temo-dots" id="temoDots"></div>
</div>
<!-- VALEURS -->
<div class="section-grise">
<div class="section">
    <h2> Nos Valeurs</h2>
    <div class="ligne-verte"></div>
    <div class="cards">
        <div class="card">
            <div class="icone"></div>
            <h3>Confiance</h3>
            <p>Relation transparente et honnête avec nos clients.</p>
        </div>
        <div class="card">
            <div class="icone"></div>
            <h3>Innovation</h3>
            <p>Technologies modernes pour des solutions performantes.</p>
        </div>
        <div class="card">
            <div class="icone">❤️</div>
            <h3>Passion</h3>
            <p>Nous aimons ce que nous faisons et ça se voit !</p>
        </div>
                <div class="card">
            <div class="icone"></div>
            <h3>NOTRE STRATÉGIE</h3>
            <p>
Nous analysons votre marché.
Nous créons votre présence digitale.
Nous optimisons votre visibilité SEO.
Nous concevons des outils qui convertissent.
Nous assurons votre croissance en ligne.</p>
        </div>
    </div>
</div>
</div>
<!-- EQUIPE -->
<div class="section">
    <h2> Notre Équipe</h2>
    <div class="ligne-verte"></div>
  <div class="equipe">
<div class="membre">
    <img src="FR6_PDG.jpg" alt="BOKOARIVELO Francis" class="avatar-badge">
    <h3>BOKOARIVELO Francis</h3>
    <p>Fondateur & Developpeur Web</p>
</div>
    <div class="membre">
        <img src="ioby.jpg" alt="Ioby" class="avatar-badge">
        <h3>RASOAFANIRY Ioby</h3>
        <p>Responsable communication Reseaux Sociaux</p>
    </div>
    <div class="membre">
        <img src="patrick.jpg" alt="Patrick" class="avatar-badge">
        <h3>FARALAHY Patrick</h3>
        <p>Chef de projet</p>
    </div>
    <div class="membre">
        <img src="miora.jpg" alt="Miora" class="avatar-badge">
        <h3>RASOARIMALALA Miora Norine</h3>
        <p>Créateur/Concepteur de site statistique HTML(front-end)</p>
    </div>
        <div class="membre">
        <img src="dadaoly.jpg" alt="Dadaoly" class="avatar-badge">
        <h3>Rinah Franchiel</h3>
        <p>graphiste, monteur vidéo, photographe</p></p>
    </div>
    <div class="membre">
        <img src="erick.jpg" alt="Erick" class="avatar-badge">
        <h3>RAKOTONDRAZAFY Jean Erick</h3>
        <p>Developpeur Back-end</p>
    </div>
</div>
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
}, { threshold: 0.1 });

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
var slideActuel = 0;
var totalSlides = document.querySelectorAll('.cs-slide').length;
var dotsContainer = document.getElementById('dots');
for (var i = 0; i < totalSlides; i++) {
    var dot = document.createElement('div');
    dot.className = 'cs-dot' + (i === 0 ? ' actif' : '');
    dot.setAttribute('data-index', i);
    dot.onclick = function() { allerSlide(parseInt(this.dataset.index)); };
    dotsContainer.appendChild(dot);
}
function allerSlide(index) {
    slideActuel = index;
    document.getElementById('sliderWrapper').style.transform = 'translateX(-' + (slideActuel * 100) + '%)';
    document.querySelectorAll('.cs-dot').forEach(function(d, i) { d.classList.toggle('actif', i === slideActuel); });
}
function changerSlide(direction) {
    slideActuel = (slideActuel + direction + totalSlides) % totalSlides;
    allerSlide(slideActuel);
}
setInterval(function() { changerSlide(1); }, 4000);

var temoActuel = 0;
var totalTemos = document.querySelectorAll('.temoignage').length;
var temoDotsContainer = document.getElementById('temoDots');
for (var j = 0; j < totalTemos; j++) {
    var tdot = document.createElement('div');
    tdot.className = 'temo-dot' + (j === 0 ? ' actif' : '');
    tdot.setAttribute('data-index', j);
    tdot.onclick = function() { allerTemo(parseInt(this.dataset.index)); };
    temoDotsContainer.appendChild(tdot);
}
function allerTemo(index) {
    temoActuel = index;
    document.getElementById('temoWrapper').style.transform = 'translateX(-' + (temoActuel * 100) + '%)';
    document.querySelectorAll('.temo-dot').forEach(function(d, i) { d.classList.toggle('actif', i === temoActuel); });
}
function changerTemo(direction) {
    temoActuel = (temoActuel + direction + totalTemos) % totalTemos;
    allerTemo(temoActuel);
}
setInterval(function() { changerTemo(1); }, 5000);
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