<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Maison de la copie</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="logo">
                <h1><a href="index.html">Maison-Copie</a></h1>
                <h2>Commerce indépendant depuis 1987</h2>
            </div>
            <div class="nav">
                <ul>
                  <li><a href="index.html">Acceuil</a></li>
                  <li><a href="infos.html">Infos pratiques</a></li>
                  <li><a href="#"></a></li>
                  <li style="float: right"><a class="active" href="inscription.html">Inscription / Connexion</a></li>
                </ul>
            </div>
        </div>
        <div class="intro">
           <h2>Inscription &bull; Connexion</h2>
        </div>
        <div class="sign_up">
            <form action="inscription.html" method="post">
                <h2>S'inscrire</h2>
                <p>Nom</p>
                <input type="text" name="last_name">
                <p> Mot de passe</p>
                <input type="text" name="pass">
                <p>Confirmation du mot de passe</p>
                <input type="text" name="pass_confirm">
                <input type="submit" value="S'inscrire">
            </form>
        </div>
        <div class="sign_up">
            <form action="index_users.html" method="post">
                <h2>Se connecter</h2>
                <p>Nom</p>
                <input type="text" name="last_name">
                <p> Mot de passe</p>
                <input type="text" name="pass">
                <p>Confirmation du mot de passe</p>
                <input type="text" name="pass_confirm">
                <input type="submit" value="Se connecter">
            </form>
        </div>
        
    </div>
</body>
</html>
