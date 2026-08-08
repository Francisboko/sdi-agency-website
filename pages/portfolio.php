<?php $page = 'portfolio'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
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
    <style>
        body {
            background-color: #000000;
            background-image:
                url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='90' height='90'%3E%3Ctext x='5' y='20' font-family='monospace' font-size='16' fill='rgba(0,255,180,0.28)'%3E01%3C/text%3E%3Ctext x='48' y='45' font-family='monospace' font-size='16' fill='rgba(0,255,180,0.22)'%3E10%3C/text%3E%3Ctext x='15' y='75' font-family='monospace' font-size='16' fill='rgba(0,255,180,0.25)'%3E11%3C/text%3E%3Ctext x='60' y='85' font-family='monospace' font-size='16' fill='rgba(0,255,180,0.18)'%3E00%3C/text%3E%3C/svg%3E"),
                linear-gradient(rgba(0, 200, 255, 0.14) 1px, transparent 1px),
                linear-gradient(90deg, rgba(0, 200, 255, 0.14) 1px, transparent 1px);
            background-size: 90px 90px, 30px 30px, 30px 30px;
            background-repeat: repeat;
        }
        nav, footer {
            background: rgba(0, 0, 0, 0.55) !important;
            backdrop-filter: blur(2px);
        }
        .section h2,
        .section > p,
        .portfolio-info h3,
        .portfolio-info p {
            color: #ffffff !important;
        }
        .portfolio-item {
            background: rgba(255, 255, 255, 0.06);
            border: 1px solid rgba(0, 255, 180, 0.25);
            border-radius: 10px;
            padding: 15px;
        }
        .tag {
            display: inline-block;
            background: rgba(0, 200, 255, 0.2);
            color: #ffffff !important;
            border: 1px solid rgba(0, 200, 255, 0.4);
            border-radius: 12px;
            padding: 3px 10px;
            margin: 3px 4px 0 0;
            font-size: 12px;
        }
        @media (min-width: 769px) {
    .section {
        padding-bottom: 20px;
    }
    .portfolio-grid {
        margin-bottom: 0;
    }
    .badge-item {
        margin-top: 10px;
        margin-bottom: 0;
    }
}
</style>
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
    <h1>Notre <span>Portfolio</span></h1>
    <p>Découvrez nos réalisations</p>
    <a class="btn-hero" href="equipe_sdi.php">EQUIPE SDI</a>
</div>
<div class="section">
    <h2>Nos Projets</h2>
    <div class="ligne-verte"></div>
    <div class="portfolio-grid reveal-on-scroll">
        <div class="portfolio-item">
            <div class="portfolio-img"></div>
            <div class="portfolio-info">
                <center><h3>Clinique Soamasoandro</h3>
                <p>Site vitrine pour une clinique médicale à Tana.</p>
                <span class="tag">HTML</span>
                <span class="tag">CSS</span>
                <span class="tag">PHP</span></center>
            </div>
        </div>
        <div class="portfolio-item">
            <div class="portfolio-img"></div>
            <div class="portfolio-info">
                <center><h3>Boutique Mozika</h3>
                <p>E-commerce de vêtements et accessoires.</p>
                <span class="tag">PHP</span>
                <span class="tag">MySQL</span>
                <span class="tag">CSS</span></center>
            </div>
        </div>
        <div class="portfolio-item">
            <div class="portfolio-img"></div>
            <div class="portfolio-info">
                <center><h3>Hôtel Vakoka</h3>
                <p>Site de réservation pour un hôtel à Fianarantsoa.</p>
                <span class="tag">PHP</span>
                <span class="tag">MySQL</span>
                <span class="tag">JS</span></center>
            </div>
        </div>
        <div class="portfolio-item">
            <div class="portfolio-img"></div>
            <div class="portfolio-info">
                <center><h3>École Fanantenana</h3>
                <p>Système de gestion scolaire complet.</p>
                <span class="tag">PHP</span>
                <span class="tag">MySQL</span>
                <span class="tag">CSS</span></center>
            </div>
        </div>
        
        <div class="portfolio-item">
            <div class="portfolio-img"></div>
            <div class="portfolio-info">
                <center><h3>Rinah Multi-services</h3>
                <p>E-commerce Tissu personnalisé.</p>
                <span class="tag">PHP</span>
                <span class="tag">MySQL</span>
                <span class="tag">CSS</span></center>
            </div>
        </div>
        <div class="portfolio-item">
            <div class="portfolio-img"></div>
            <div class="portfolio-info">
                <center><h3>FDI Scol</h3>
                <p>Formation Professionnel.</p>
                <span class="tag">PHP</span>
                <span class="tag">MySQL</span>
                <span class="tag">CSS</span></center>
            </div>
        </div>
        <div class="portfolio-item">
            <div class="portfolio-img"></div>
            <div class="portfolio-info">
                <center><h3>Radio et Tevision</h3>
                <p>Communication local à Manakara</p>
                <span class="tag">PHP</span>
                <span class="tag">MySQL</span>
                <span class="tag">JS</span></center>
            </div>
        </div>
        
          <div class="portfolio-item">
            <div class="portfolio-img"></div>
            <div class="portfolio-info">
                <center><h3>Fasha Artiste</h3>
                <p>Montage clip</p>
                <span class="tag">Cyberlink</span>
                <span class="tag">FL Studio</span>
                <span class="tag">Adobe Premier</span></center>
            </div>
        </div>
        <div class="portfolio-item">
            <div class="portfolio-img"></div>
            <div class="portfolio-info">
                <center><h3>Mickael Freelence</h3>
                <p>Gestion Reseaux Sociaux</p>
                <span class="tag">PHP</span>
                <span class="tag">MySQL</span>
                <span class="tag">CSS</span></center>
            </div>
        </div>
        <div class="portfolio-item">
            <div class="portfolio-img"></div>
            <div class="portfolio-info">
                <center><h3>Mirindra Groupe</h3>
                <p>Charge des affaire entreprise (NIF et STAT)</p>
                <span class="tag">PHP</span>
                <span class="tag">MySQL</span>
                <span class="tag">JS</span></center>
            </div>
        </div>
        
          <div class="portfolio-item">
            <div class="portfolio-img"></div>
            <div class="portfolio-info">
                <center><h3>Univer Image Andravoangy</h3>
                <p>Montage video</p>
                <span class="tag">Capcut Pro</span>
                <span class="tag">Gemin Pro</span>
                <span class="tag">Adobe Premier</span></center>
            </div>
        </div>
        <div class="portfolio-item">
            <div class="portfolio-img"></div>
            <div class="portfolio-info">
                <center><h3>Contenue Page Face</h3>
                <p>Rinah Multi-Services</p>
                <span class="tag">Photoshop</span>
                <span class="tag">Illustrator</span>
                <span class="tag">ChaGPT</span></center>
            </div>
        </div>
        <div class="portfolio-item">
            <div class="portfolio-img"></div>
            <div class="portfolio-info">
                <center><h3>Formation association J.E.M</h3>
                <p>Jeunes Espoirs de Madagascar</p>
                <span class="tag">Photoshop</span>
                <span class="tag">Capcut</span>
                <span class="tag">Adobe Primier</span></center>
            </div>
        </div>
        
          <div class="portfolio-item">
            <div class="portfolio-img"></div>
            <div class="portfolio-info">
                <center><h3>Miel Purcent</h3>
                <p>Grossiste Export du Mielle</p>
                <span class="tag">Odoo</span>
                <span class="tag">Phyton</span>
                <span class="tag">Github</span></center>
            </div>
        </div>
        <div class="portfolio-item">
            <div class="portfolio-img"></div>
            <div class="portfolio-info">
                <center><h3>Eveligne ROSA</h3>
                <p>Etudient Master one</p>
                <span class="tag">Odoo</span>
                <span class="tag">Python</span>
                <span class="tag">Github</span></center>
            </div>
        </div>
        <div class="portfolio-item">
            <div class="portfolio-img"></div>
            <div class="portfolio-info">
                <center><h3>Flavien Naval</h3>
                <p>Etudian informatique(formation en ligne)</p>
                <span class="tag">Java Eclips</span>
                <span class="tag">postgres</span>
                <span class="tag">XML, JSP</span></center>
            </div>
        </div>     
        
                <div class="portfolio-item">
            <div class="portfolio-img"></div>
            <div class="portfolio-info">
                <center><h3>Rado freelence</h3>
                <p>Treteur basse des données en ligne</p>
                <span class="tag">PHP</span>
                <span class="tag">MySQL</span>
                <span class="tag">CSS</span></center>
            </div>
        </div>
        <div class="portfolio-item">
            <div class="portfolio-img"></div>
            <div class="portfolio-info">
                <center><h3>I.M.A Ambohipo</h3>
                <p>Infotech Multilingue Ambohipo</p>
                <span class="tag">PHP</span>
                <span class="tag">MySQL</span>
                <span class="tag">CSS</span></center>
            </div>
        </div>
        <div class="portfolio-item">
            <div class="portfolio-img"></div>
            <div class="portfolio-info">
                <center><h3>Resto Chan-gu à Tamatave</h3>
                <p>retaurant et chambre hotel</p>
                <span class="tag">PHP</span>
                <span class="tag">MySQL</span>
                <span class="tag">JS</span></center>
            </div>
        </div>

        <div class="portfolio-item">
            <div class="portfolio-img">️</div>
            <div class="portfolio-info">
                <center><h3>Restaurant Sakafo</h3>
                <p>Site vitrine avec menu en ligne.</p>
                <span class="tag">HTML</span>
                <span class="tag">CSS</span>
                <span class="tag">JS</span></center>
            </div>
        </div>
        <div class="portfolio-item">
            <div class="portfolio-img"></div>
            <div class="portfolio-info">
                <center><h3>Cabinet Lalam-Barotra</h3>
                <p>Site professionnel pour cabinet d'avocats.</p>
                <span class="tag">PHP</span>
                <span class="tag">CSS</span>
                <span class="tag">MySQL</span></center>
            </div>
        </div>
        <br>
   <div class="portfolio-item badge-item">
    <img src="badge.jpg" alt="Badge Agence Digitale SDI" class="badge-img">
</div>
</div>
</div><br>
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
}, { threshold: 0.05 });

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
</body>
</html>
