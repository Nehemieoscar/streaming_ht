<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Streaming Platforms</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
        /* Styles globaux */
        body, html {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background-color: #333;
            color: white;
        }

        .logo img {
            height: 40px;
        }

        .login-btn {
            background-color: #e50914;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .login-btn:hover {
            background-color: #f40612;
        }

        /* Section Accueil */
        .hero {
            background-image: url('assets/images/background/BgPrinc.jpeg');
            background-size: cover;
            background-position: center;
            color: white;
            text-align: center;
            padding: 150px 20px;
        }

        .hero-text {
            max-width: 600px;
            margin: 0 auto;
        }

        .cta-btn {
            background-color: #e50914;
            color: white;
            padding: 15px 30px;
            border: none;
            cursor: pointer;
            font-size: 18px;
            margin-top: 20px;
            transition: background-color 0.3s ease;
        }

        .cta-btn:hover {
            background-color: #f40612;
        }

        /* Section 2 */
        .features {
            display: flex;
            padding: 50px 20px;
            background-color: #f5f5f5;
        }

        .carousel {
            flex: 1;
            height:430px;
            margin-right: 20px;
            position: relative;
            
        }

        .carousel img {
            width: 100%;
            height:430px;
            display: none;
            position: absolute;
            top: 0;
            left: 0;
        }

        .carousel img:first-child {
            display: block;
        }

        .description {
            flex: 1;
            padding: 20px;
        }

        .description h2 {
            margin-bottom: 20px;
        }

        .description p {
            font-size: 16px;
        }

        /* Pied de page */
        footer {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
            margin-top: 160px;
            border:2px solid red;
        }

        .footer-links {
            list-style: none;
            padding: 0;
        }

        .footer-links li {
            display: inline;
            margin: 0 10px;
        }

        .footer-links a {
            color: white;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-links a:hover {
            color: #e50914;
        }

        .social-media {
    display: flex;
    gap: 10px;
}

.social-media a {
    font-size: 24px; /* Ajustez la taille des icônes selon vos besoins */
    text-decoration: none;
}

.social-media .facebook {
    color: #3b5998; /* Couleur Facebook */
}

.social-media .twitter {
    color: #1da1f2; /* Couleur Twitter */
}

.social-media .instagram {
    color: #e1306c; /* Couleur Instagram */
}

.social-media .youtube {
    color: #ff0000; /* Couleur YouTube */
}


        .platform-name {
    font-size: 24px; /* Ajustez la taille de la police selon vos besoins */
    color: #007bff; /* Changez la couleur selon vos préférences */
    font-weight: bold;
    animation: fadeIn 2s ease-in-out;
  }

   @keyframes fadeIn {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
   }

    </style>

</head>
<body>
    <!-- Header -->

    <header>
    <div class="platform-name">
        Streaming_ht
    </div>
    <!-- <button class="login-btn" onclick="window.location.href = 'registre.php';">Connexion</button>-->
</header>


    <!-- Section Accueil -->
    <section class="hero">
        <div class="hero-text">
            <h1>Bienvenue sur notre plateforme de streaming</h1>
            <p>Regardez vos films et séries TV préférés, où que vous soyez.</p>
            <button class="cta-btn" onclick="window.location.href = 'registre.php';">Commencer dès maintenant</button>
        </div>
    </section>

    <!-- Section 2 -->
    <section class="features">
        <div class="carousel">
            <img src="assets/images/background/mockup1.jpeg" alt="Scène de film 1">
            <img src="assets/images/background/mockup2.jpeg" alt="Scène de film 2">
            <img src="assets/images/background/mockup3.jpeg" alt="Scène de film 3">
        </div>
        <div class="description">
            <h2>Découvrez les avantages de notre plateforme</h2>
            <p>Accédez à des milliers de films et séries TV à tout moment, sur n'importe quel appareil. Profitez de la meilleure expérience de visionnage grâce à nos recommandations personnalisées.</p>
        </div>
    </section>

    <!-- Pied de page -->
    <footer>
        <ul class="footer-links">
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Conditions d'utilisation</a></li>
            <li><a href="#">Politique de confidentialité</a></li>
        </ul>
        <div class="social-media">
    <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
    <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
    <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
    <a href="#" class="youtube"><i class="fab fa-youtube"></i></a>
</div>

    </footer>

    <script>
        // Carrousel d'images
        let currentImageIndex = 0;
        const images = document.querySelectorAll('.carousel img');

        function changeImage() {
            images[currentImageIndex].style.display = 'none';
            currentImageIndex = (currentImageIndex + 1) % images.length;
            images[currentImageIndex].style.display = 'block';
        }

        setInterval(changeImage, 3000); // Changer d'image toutes les 3 secondes
    </script>
</body>
</html>
