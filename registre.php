<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription/Connexion</title>
    <link rel="stylesheet" href="css/styleR.css">
</head>
<body>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="#">
                <h1>Créer un compte</h1>
                <input type="text" placeholder="Nom complet" />
                <input type="email" placeholder="Adresse e-mail" />
                <input type="password" placeholder="Mot de passe" />
                <button>S'inscrire</button>
                <button class="google-btn">Se connecter avec Google</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="#">
                <h1>Déjà un compte?</h1>
                <input type="email" placeholder="Adresse e-mail" />
                <input type="password" placeholder="Mot de passe" />
                <button>Se connecter</button>
                <a href="#">Mot de passe oublié?</a>
            </form>
        </div>
        
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Bienvenue !</h1>
                    <p>Pour rester connecté avec nous, veuillez vous connecter avec vos informations personnelles</p>
                    <button class="ghost" id="signIn">Se connecter</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Créer un compte</h1>
                    <p>Entrez vos informations personnelles pour commencer</p>
                    <button class="ghost" id="signUp">S'inscrire</button>
                </div>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
