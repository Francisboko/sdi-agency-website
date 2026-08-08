<?php $page = 'galerie'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo Galerie</title>
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
        * { margin:0; padding:0; box-sizing:border-box; }

        body {
            font-family: Arial, sans-serif;
            background-color: #000000;
        }
        .galerie-wrap {
            padding: 30px;
        }
        h2 {
            text-align: center;
            color: #ffffff;
            margin-bottom: 10px;
            font-size: 28px;
        }
        .ligne {
            width: 60px;
            height: 4px;
            background-color: #27ae60;
            margin: 0 auto 30px auto;
            border-radius: 2px;
        }
        /* FILTRE BOUTONS */
        .filtres {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 10px;
            margin-bottom: 30px;
        }
        .filtre-btn {
            padding: 8px 20px;
            border: 2px solid #27ae60;
            border-radius: 25px;
            background: #111111;
            color: #27ae60;
            cursor: pointer;
            font-size: 14px;
            transition: all 0.3s;
        }
        .filtre-btn:hover,
        .filtre-btn.actif {
            background-color: #27ae60;
            color: white;
        }
        /* GRILLE */
        .galerie {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 15px;
            max-width: 960px;
            margin: 0 auto;
        }
        .galerie-item {
            position: relative;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.4);
            cursor: pointer;
            aspect-ratio: 1;
        }
        .galerie-item .img-box {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 60px;
            transition: transform 0.3s;
        }
        .galerie-item:hover .img-box {
            transform: scale(1.1);
        }
        .galerie-item .overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(transparent, rgba(0,0,0,0.7));
            color: white;
            padding: 15px 10px 10px;
            transform: translateY(100%);
            transition: transform 0.3s;
        }
        .galerie-item:hover .overlay {
            transform: translateY(0);
        }
        .overlay h3 {
            font-size: 14px;
            margin-bottom: 3px;
        }
        .overlay p {
            font-size: 12px;
            color: #a9dfbf;
        }
        /* LIGHTBOX */
        .lightbox {
            display: none;
            position: fixed;
            top: 0; left: 0;
            width: 100%; height: 100%;
            background: rgba(0,0,0,0.9);
            z-index: 1000;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
        .lightbox.actif {
            display: flex;
        }
        .lightbox-content {
            font-size: 120px;
            margin-bottom: 20px;
        }
        .lightbox h3 {
            color: white;
            font-size: 20px;
            margin-bottom: 10px;
        }
        .lightbox p {
            color: #a9dfbf;
            font-size: 14px;
        }
        .lightbox-close {
            position: absolute;
            top: 20px;
            right: 25px;
            color: white;
            font-size: 35px;
            cursor: pointer;
            background: none;
            border: none;
        }
        .img-box img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }
        .lightbox-content img {
            max-width: 90vw;
            max-height: 70vh;
            border-radius: 10px;
        }
        /* HIDDEN */
        .hidden { display: none; }
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

<div class="galerie-wrap">
<h2>Galerie Photos</h2>
<div class="ligne"></div>
<!-- FILTRES -->
<div class="filtres">
    <button class="filtre-btn actif" 
            onclick="filtrer('tous', this)">
            TOUS
    </button>
    <button class="filtre-btn" 
            onclick="filtrer('nature', this)">
            Pub 1
    </button>
    <button class="filtre-btn" 
            onclick="filtrer('ville', this)">
            Pub 2
    </button>
    <button class="filtre-btn" 
            onclick="filtrer('animal', this)">
            Pub 3
    </button>
    <button class="filtre-btn" 
            onclick="filtrer('tech', this)">
            Pub 4
    </button>
</div>
<!-- GRILLE -->
<div class="galerie" id="galerie">

    <div class="galerie-item" 
         data-categorie="nature"
         style="background:linear-gradient(135deg,#010101)"
         onclick="ouvrirLightbox('projet-login.jpg','Création par SDI','whatsapp  +261 34 13 726 57')">
        <div class="img-box"><img src="projet-login.jpg" alt="Forêt tropicale"></div>
        <div class="overlay">
            <h3>Publication</h3>
            <p>infographie</p>
        </div>
    </div>
    <div class="galerie-item"
         data-categorie="ville"
         style="background:linear-gradient(135deg,#010101)"
         onclick="ouvrirLightbox('partenaire.jpg','Création par SDI','whatsapp  +261 34 13 726 57')">
        <div class="img-box"><img src="partenaire.jpg" alt="Antananarivo"></div>
        <div class="overlay">
            <h3>Publication 2</h3>
            <p>infographie</p>
        </div>
    </div>
    <div class="galerie-item"
         data-categorie="animal"
         style="background:linear-gradient(135deg,#010101)"
         onclick="ouvrirLightbox('site_pro.jpg','Création par SDI','whatsapp  +261 34 13 726 57')">
        <div class="img-box"><img src="site_pro.jpg" alt="Caméléon"></div>
        <div class="overlay">
            <h3>Publication 3</h3>
            <p>infographie</p>
        </div>
    </div>
    <div class="galerie-item"
         data-categorie="tech"
         style="background:linear-gradient(135deg,#010101)"
         onclick="ouvrirLightbox('pub1.jpg','Création par SDI','whatsapp  +261 34 13 726 57')">
        <div class="img-box"><img src="pub1.jpg" alt="Code PHP"></div>
        <div class="overlay">
            <h3>Publication 4</h3>
            <p>infographie</p>
        </div>
    </div>
    <div class="galerie-item"
         data-categorie="nature"
         style="background:linear-gradient(135deg,#010101)"
         onclick="ouvrirLightbox('rinah.jpg','Création par SDI','whatsapp  +261 34 13 726 57')">
        <div class="img-box"><img src="rinah.jpg" alt="Fleur sauvage"></div>
        <div class="overlay">
            <h3>Publication 5</h3>
            <p>infographie</p>
        </div>
    </div>
    <div class="galerie-item"
         data-categorie="animal"
         style="background:linear-gradient(135deg,#010101)"
         onclick="ouvrirLightbox('pub2.jpg','Création par SDI','whatsapp  +261 34 13 726 57')">
        <div class="img-box"><img src="pub2.jpg" alt="Lémurien"></div>
        <div class="overlay">
            <h3>Publication 6</h3>
            <p>infographie</p>
        </div>
    </div>
    <div class="galerie-item"
         data-categorie="ville"
         style="background:linear-gradient(135deg,#010101)"
         onclick="ouvrirLightbox('web2.jpg','Création par SDI','whatsapp  +261 34 13 726 57')">
        <div class="img-box"><img src="web2.jpg" alt="Plage Ifaty"></div>
        <div class="overlay">
            <h3>Publication 7</h3>
            <p>infographie</p>
        </div>
    </div>
    <div class="galerie-item"
         data-categorie="tech"
         style="background:linear-gradient(135deg,#010101)"
         onclick="ouvrirLightbox('balle.jpg','Création par SDI','whatsapp  +261 34 13 726 57')">
        <div class="img-box"><img src="balle.jpg" alt="Application Mobile"></div>
        <div class="overlay">
            <h3>Publication 8</h3>
            <p>infographie</p>
        </div>
    </div>
    <div class="galerie-item"
         data-categorie="nature"
         style="background:linear-gradient(135deg,#010101)"
         onclick="ouvrirLightbox('personnage.jpg','Création par SDI','whatsapp  +261 34 13 726 57')">
        <div class="img-box"><img src="personnage.jpg" alt="Mer de Tuléar"></div>
        <div class="overlay">
            <h3>Publication 9</h3>
            <p>infographie</p>
        </div>
    </div>
    <div class="galerie-item"
         data-categorie="tech"
         style="background:linear-gradient(135deg,#010101)"
         onclick="ouvrirLightbox('transparent.jpg','Création par SDI','whatsapp  +261 34 13 726 57')">
        <div class="img-box"><img src="transparent.jpg" alt="Mer de Tuléar"></div>
        <div class="overlay">
            <h3>Publication 10</h3>
            <p>infographie</p>
        </div>
    </div>
        <div class="galerie-item"
         data-categorie="tech"
         style="background:linear-gradient(135deg,#010101)"
         onclick="ouvrirLightbox('tricouleur.jpg','Création par SDI','whatsapp  +261 34 13 726 57')">
        <div class="img-box"><img src="tricouleur.jpg" alt="Mer de Tuléar"></div>
        <div class="overlay">
            <h3>Publication 11</h3>
            <p>infographie</p>
        </div>
    </div>
        <div class="galerie-item"
         data-categorie="tech"
         style="background:linear-gradient(135deg,#16a085,#010101)"
         onclick="ouvrirLightbox('week-end.jpg','Création par SDI','whatsapp  +261 34 13 726 57')">
        <div class="img-box"><img src="week-end.jpg" alt="Mer de Tuléar"></div>
        <div class="overlay">
            <h3>Publication 12</h3>
            <p>infographie</p>
        </div>
    </div>
        <div class="galerie-item"
         data-categorie="tech"
         style="background:linear-gradient(135deg,#010101)"
         onclick="ouvrirLightbox('bureau.jpg','Création par SDI','whatsapp  +261 34 13 726 57')">
        <div class="img-box"><img src="bureau.jpg" alt="Mer de Tuléar"></div>
        <div class="overlay">
            <h3>Publication 13</h3>
            <p>infographie</p>
        </div>
    </div>
        <div class="galerie-item"
         data-categorie="tech"
         style="background:linear-gradient(135deg,#010101)"
         onclick="ouvrirLightbox('DG.jpg','Création par SDI','whatsapp  +261 34 13 726 57')">
        <div class="img-box"><img src="DG.jpg" alt="Mer de Tuléar"></div>
        <div class="overlay">
            <h3>Publication 14</h3>
            <p>infographie</p>
        </div>
    </div>
        <div class="galerie-item"
         data-categorie="tech"
         style="background:linear-gradient(135deg,#010101)"
         onclick="ouvrirLightbox('KFG.jpg','Création par SDI','whatsapp  +261 34 13 726 57')">
        <div class="img-box"><img src="KFG.jpg" alt="Mer de Tuléar"></div>
        <div class="overlay">
            <h3>Publication 15</h3>
            <p>infographie</p>
        </div>
    </div>
        <div class="galerie-item"
         data-categorie="tech"
         style="background:linear-gradient(135deg,#010101)"
         onclick="ouvrirLightbox('spectacle.jpg','Création par SDI','whatsapp  +261 34 13 726 57')">
        <div class="img-box"><img src="spectacle.jpg" alt="Mer de Tuléar"></div>
        <div class="overlay">
            <h3>Publication 16</h3>
            <p>infographie</p>
        </div>
    </div>
            <div class="galerie-item"
         data-categorie="tech"
         style="background:linear-gradient(135deg,#010101)"
         onclick="ouvrirLightbox('claudeIA.jpg','Création par SDI','whatsapp  +261 34 13 726 57')">
        <div class="img-box"><img src="claudeIA.jpg" alt="Mer de Tuléar"></div>
        <div class="overlay">
            <h3>Publication 17</h3>
            <p>infographie</p>
        </div>
    </div>
        <div class="galerie-item"
         data-categorie="tech"
         style="background:linear-gradient(135deg,#010101)"
         onclick="ouvrirLightbox('hanao.jpg','Création par SDI','whatsapp  +261 34 13 726 57')">
        <div class="img-box"><img src="hanao.jpg" alt="Mer de Tuléar"></div>
        <div class="overlay">
            <h3>Publication 18</h3>
            <p>infographie</p>
        </div>
    </div>
        <div class="galerie-item"
         data-categorie="tech"
         style="background:linear-gradient(135deg,#010101)"
         onclick="ouvrirLightbox('anniversaire.jpg','Création par SDI','whatsapp  +261 34 13 726 57')">
        <div class="img-box"><img src="anniversaire.jpg" alt="Mer de Tuléar"></div>
        <div class="overlay">
            <h3>Publication 19</h3>
            <p>infographie</p>
        </div>
    </div>
        <div class="galerie-item"
         data-categorie="tech"
         style="background:linear-gradient(135deg,#010101)"
         onclick="ouvrirLightbox('sport.jpg','Création par SDI','whatsapp  +261 34 13 726 57')">
        <div class="img-box"><img src="sport.jpg" alt="sport"></div>
        <div class="overlay">
            <h3>Publication 20</h3>
            <p>infographie</p>
        </div>
    </div>
</div>
</div>
<!-- UPLOAD PHOTO -->
<div class="upload-section">
    <h3>📸 Ajouter une photo à la galerie</h3>
    <p class="sous-titre">Exemple de démonstration — envoi d'image en direct</p>

    <form method="POST" enctype="multipart/form-data" id="formUpload">
        <label for="fichierImage">
            <div class="zone-upload" id="zoneUpload">
                <i class="fa-solid fa-cloud-arrow-up"></i>
                <p>Cliquez ou glissez une image ici</p>
                <div class="formats-info">JPG, PNG, GIF, WEBP — 2MB max</div>
            </div>
        </label>
        <input type="file" name="image" id="fichierImage" accept="image/*" required>

        <div class="apercu-preview" id="apercuPreview">
            <img id="apercuImg" src="" alt="Aperçu">
            <div class="nom-fichier" id="apercuNom"></div>
        </div>

        <button type="submit" class="btn-upload">📤 Envoyer l'image</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['image'])) {

        if ($_FILES['image']['error'] == 0) {
            $nom_fichier  = $_FILES['image']['name'];
            $taille       = $_FILES['image']['size'];
            $type         = $_FILES['image']['type'];
            $fichier_temp = $_FILES['image']['tmp_name'];

            $types_autorises = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];
            $taille_max = 2 * 1024 * 1024; // 2MB

            if (!in_array($type, $types_autorises)) {
                echo "<div class='upload-erreur'>❌ Type de fichier non autorisé ! Formats acceptés : JPG, PNG, GIF, WEBP</div>";
            } elseif ($taille > $taille_max) {
                echo "<div class='upload-erreur'>❌ Fichier trop grand ! Taille maximum : 2MB</div>";
            } else {
                $dossier = 'uploads/';
                if (!is_dir($dossier)) {
                    mkdir($dossier, 0777, true);
                }

                $nouveau_nom = time() . '_' . $nom_fichier;
                $destination = $dossier . $nouveau_nom;

                if (move_uploaded_file($fichier_temp, $destination)) {
                    echo "<div class='upload-succes'>
                            ✅ Image envoyée avec succès !<br>
                            📄 Fichier : <strong>$nouveau_nom</strong><br>
                            📦 Taille : " . round($taille/1024, 2) . " KB<br>
                            <small>Chemin complet : $destination</small>
                          </div>";
                } else {
                    echo "<div class='upload-erreur'>❌ Erreur lors de l'envoi du fichier !</div>";
                }
            }
        } else {
            echo "<div class='upload-erreur'>❌ Aucune image sélectionnée !</div>";
        }
    }
    ?>
</div>
<!-- LIGHTBOX -->
<div class="lightbox" id="lightbox" 
     onclick="fermerLightbox()">
    <button class="lightbox-close">✕</button>
    <div class="lightbox-content" id="lb-emoji"></div>
    <h3 id="lb-titre"></h3>
    <p id="lb-desc"></p>
    <p style="color:#7f8c8d; margin-top:10px; font-size:12px;">
        Appuyer pour fermer
    </p>
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
// Filtrer par catégorie
function filtrer(categorie, btn) {
    // Changer bouton actif
    document.querySelectorAll('.filtre-btn')
            .forEach(b => b.classList.remove('actif'));
    btn.classList.add('actif');
    // Filtrer les items
    document.querySelectorAll('.galerie-item')
            .forEach(item => {
        if (categorie === 'tous' || 
            item.dataset.categorie === categorie) {
            item.style.display = 'block';
        } else {
            item.style.display = 'none';
        }
    });
}
// Ouvrir lightbox
function ouvrirLightbox(image, titre, desc) {
    document.getElementById('lb-emoji').innerHTML = '<img src="' + image + '" alt="' + titre + '">';
    document.getElementById('lb-titre').textContent = titre;
    document.getElementById('lb-desc').textContent = desc;
    document.getElementById('lightbox')
            .classList.add('actif');
}
// Fermer lightbox
function fermerLightbox() {
    document.getElementById('lightbox')
            .classList.remove('actif');
}
// Fermer le menu au clic extérieur (comme les autres pages)
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
const fichierImage = document.getElementById('fichierImage');
const zoneUpload = document.getElementById('zoneUpload');
const apercuPreview = document.getElementById('apercuPreview');
const apercuImg = document.getElementById('apercuImg');
const apercuNom = document.getElementById('apercuNom');

fichierImage.addEventListener('change', function() {
    if (this.files && this.files[0]) {
        const reader = new FileReader();
        reader.onload = function(e) {
            apercuImg.src = e.target.result;
            apercuNom.textContent = fichierImage.files[0].name;
            apercuPreview.style.display = 'block';
        };
        reader.readAsDataURL(this.files[0]);
    }
});

// Effet glisser-déposer visuel
zoneUpload.addEventListener('dragover', function(e) {
    e.preventDefault();
    zoneUpload.classList.add('dragover');
});

zoneUpload.addEventListener('dragleave', function() {
    zoneUpload.classList.remove('dragover');
});

zoneUpload.addEventListener('drop', function(e) {
    e.preventDefault();
    zoneUpload.classList.remove('dragover');
    if (e.dataTransfer.files.length) {
        fichierImage.files = e.dataTransfer.files;
        fichierImage.dispatchEvent(new Event('change'));
    }
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
