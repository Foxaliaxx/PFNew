// <?php 
// include("./includer/watermark.html"); 
// #include("./includer/var-collection.php");
// ?>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/body_style.css"/>
    <link rel="stylesheet" href="css/user/connexion_style.css"/>
    <link rel="icon" type="image/svg" href="asset/img/logo-ems.svg" />
    <title>Connexion</title> 
</head>
<body>
    <div class="connection">
        <center><h1>Connexion</h1></center>
        <form action="account/account-connect.php" method="POST">
            <label>Identifiant</label><br><br>
            <input name="user" type="text" placeholder="Username"><br><br>
            <label>Mot de passe</label><br><br>
            <input name="password" type="password" placeholder="Password"><br><br>
            <button type="submit" name="submit">Connexion</button>
        </form> 
        <p>Pas encore de compte ? <a href="inscription.php">Inscrivez-vous ici</a></p>
    </div>
</body>
</html>