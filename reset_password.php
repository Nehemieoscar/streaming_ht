<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réinitialiser le mot de passe</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="form-container">
            <form action="auth.php" method="POST">
                <h1>Réinitialiser le mot de passe</h1>
                <input type="email" name="email" placeholder="Adresse e-mail" required>
                <button type="submit" name="reset_password">Envoyer le lien</button>
            </form>
        </div>
    </div>
</body>
</html>
