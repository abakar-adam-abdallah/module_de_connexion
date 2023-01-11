<!DOCTYPE html>
<html>
<head>
<title><?php echo "Inscription" ?></title>
<link rel="stylesheet" href="default.css">
</head>

<body>
    <header>
        <li><a href="index.php" target=_blank><b>Accueil</li></a>
        <li><a href="connexion.php" target=_blank>Connecter</li></a>
    </header>

    <main>

    <div class="formulaire">
        <form action="Inserts/insert_inscription.php" method="post">
        <br>
        <li>Nom :</li><br><input type="text" placeholder="Nom" name="nom" autocomplete="off"/>
        <br/>
        <br/>
        <li>Prenom :</li><br/><input type="text" placeholder="Prénom" name="prenom" autocomplete="off"/>
        <br/>
        <br/>
        <li>Login :</li><br/><input type="text" placeholder="Login" name="login" autocomplete="off"/>
        <br/>
        <br/>
        <li>Password:</li><br/><input type="password" placeholder="*****" name="password" autocomplete="off"/>
        <br/>
        <br/>
        <li>Password_confirm :</li><br/><input type="password" placeholder="*****" name="confirmed_password" autocomplete="off"/>
        <br>
        <br>
        <input type="submit" name="Envoyer" value="Confirmer">
        <br>
        <br>    
        </form>
    </div>

    </main>

    <footer>
        <li><a href="https://laplateforme.io/"><img src="Images/logo_laplateforme_bleu3.png" height=100px width=400px></a>
    </footer>
</body>