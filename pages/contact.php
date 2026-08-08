<?php $page = 'contact'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
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
        <span>SDI Votre Partenaire Numérique à Madagascar</span>
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
<div style="background: linear-gradient(135deg, #1a252f 0%, #2980b9 55%, #3498db 100%);">
<div class="hero" style="background: transparent;">
    <h1>Me <span>Contacter</span></h1>
    <p>Envoyez-moi un message !</p>
     <a class="btn-hero" href="equipe_sdi.php">EQUIPE SDI</a>
</div>
<div class="section" style="background: transparent;">
    <h2 style="color: #ffffff;">Formulaire de contact</h2>
    <div class="ligne-bleu" style="background-color: #ffffff;"></div>
<div class="contact-intro-wrapper reveal-on-scroll">
    <div class="card" style="background-color: #1a252f; text-align: left;">
        <h2 style="color: #ffffff;">🔴 Un message WhatsApp (+261 34 13 726 57) suffit pour lancer votre projet digital !</h2>
        <h3 style="color: #f5ab0c; margin-top: 15px;">
            Chez S.D.I, nous ne vendons pas juste un site web…
            Nous PILOTONS votre projet de A à Z !
            De la conception jusqu'à la mise en ligne
        </h3>
        <h3 style="color: #ffffff; margin-top: 15px;">✅ DEVIS GRATUIT & SANS ENGAGEMENT</h3>
        <p style="color: #ffffff; margin-top: 10px;">Votre projet entre de bonnes mains :</p>
        <ul style="text-align: left; list-style: none; padding-left: 0; margin-top: 10px;">
            <li style="color: #ffffff;">✔️ Sites internet modernes & rapides</li>
            <li style="color: #ffffff;">✔️ Application Web sur mesure</li>
            <li style="color: #ffffff;">✔️ Référencement SEO inclus</li>
            <li style="color: #ffffff;">✔️ Hébergement sécurisé</li>
            <li style="color: #ffffff;">✔️ Nom de domaine</li>
            <li style="color: #ffffff;">✔️ Maintenance & support continu</li>
            <li style="color: #ffffff;">✔️ Service sécurisé</li>
            <li style="color: #ffffff;">✔️ Livraison instantanée</li>
        </ul>
    </div>

    <div class="form-contact">
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nom     = htmlspecialchars($_POST['nom']);
            $email   = htmlspecialchars($_POST['email']);
            $sujet   = htmlspecialchars($_POST['sujet']);
            $message = htmlspecialchars($_POST['message']);

            if (!empty($nom) && !empty($email) 
                && !empty($message)) {
                echo "<div class='succes'>
                    ✅ Merci <strong>$nom</strong> !
                    Votre message a été envoyé avec succès !
                </div>";
            }
        }
        ?>

        <form method="POST">
            <div class="form-group">
                <label> Nom complet</label>
                <input type="text" name="nom"
                       placeholder="Votre nom" required>
            </div>
            <div class="form-group">
                <label> Email</label>
                <input type="email" name="email"
                       placeholder="votre@email.com" required>
            </div>
            <div class="form-group">
                <label> Sujet</label>
                <input type="text" name="sujet"
                       placeholder="Sujet du message">
            </div>
            <div class="form-group">
                <label>Message</label>
                <textarea name="message"
                    placeholder="Écrivez votre message..." 
                    required></textarea>
            </div>
            <button type="submit" class="btn-envoyer">
                 Envoyer le message
            </button>
        </form>
    </div>
</div>

    <br>
<div class="contact-cards reveal-on-scroll">
    <a href="mailto:sdiservicesmada@gmail.com" class="card" style="background-color: #3498db; text-decoration: none; display: block;">
        <div class="icone">📧</div>
        <h3>Email</h3>
        <p>
            <span style="background-color: #3498db; color: white; padding: 8px 16px; border-radius: 20px; font-size: 14px;">
                sdiservicesmada@gmail.com
            </span>
        </p>
    </a>

    <a href="https://wa.me/261341372657" target="_blank" class="card" style="background-color: #3498db; text-decoration: none; display: block;">
        <div class="icone"></div>
        <h3>WhatsApp</h3>
        <p>
            <span style="background-color: #25D366; color: white; padding: 8px 16px; border-radius: 20px; font-size: 14px;">
                M'écrire sur WhatsApp
            </span>
        </p>
    </a>

    <a href="https://www.facebook.com/profile.php?id=61591050893761" target="_blank" class="card" style="background-color: #3498db; text-decoration: none; display: block;">
        <div class="icone"></div>
        <h3>Facebook</h3>
        <p>
            <span style="background-color: #1877F2; color: white; padding: 8px 16px; border-radius: 20px; font-size: 14px;">
                Ma page Facebook
            </span>
        </p>
    </a>
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
