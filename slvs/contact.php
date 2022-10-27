
// <?php 
// include("./includer/watermark.html");
// #include("./includer/var-collection.php");
// ?>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/body_style.css"/>
    <link rel="stylesheet" href="css/contact/mail_style.css"/>
    <link rel="stylesheet" href="css/contact/reseaux_style.css"/>
    <link rel="stylesheet" href="css/includercss/nav_allpage.css">
    <link rel="icon" type="image/png" href="asset/img/logo.png" />
    <title>Contact</title> 
</head>
<body>
// <?php 
// include("includer/nav_allpage.php");?>
<a href="#mail" class="mail_clicker_box"><div>
<img class="mail_icon" src="asset/img/contact/mail/mail_icon.svg">
</div></a>
<section id="social" class="reseaux_bloc"> 

        <div class="social_bloc">
            <img class="social_img" src="./asset/img/contact/social/svg/instagram.svg">
            <h1 class="social_title" id="instagram">Instagram</h1>
            <p class="social_desc"> J'y poste ma vie. C'est aussi un moyen de me contacter grâce aux instagrams directs ou au messages privés.</p>
            <a href="https://instagram.com/_emeake" class="social_link" target="_BLANK">Visiter</a> 
        </div>

        <div class="social_bloc">
            <h1 class="social_title" id="discord">Discord</h1>
            <p class="social_desc"> C'est également un moyen facile et rapide de rentrer en contact avec moi, encore une fois grace aux messages privés ou appel privés.</p>
            <img class="social_img" src="./asset/img/contact/social/svg/discord.svg">
            <a href="https://twitter.com/silvus_tv" class="social_link" target="_BLANK">Visiter</a>
        </div>
        <div class="social_bloc">
            <h1 class="social_title" id="twitch">Twitch</h1>
            <p class="social_desc">Petit créateur de contenus sur twicth, je fais des lives sur plusieurs sujet tel: le jeu video, le code, de la gestion de serveurs et bien d'autres !</p>
            <img class="social_img" src="./asset/img/contact/social/svg/twitch.svg">
            <a href="https://twitch.tv/silvus_tv" class="social_link" target="_BLANK">Visiter</a>
        </div>
        <div class="social_bloc">
            <h1 class="social_title" id="youtube">Youtube</h1>
            <p class="social_desc">Prochainement !</p>
            <img class="social_img" src="./asset/img/contact/social/svg/youtube.svg">
            <a href="https://www.youtube.com/channel/UCsKT8MuJX4w6szxV0SRIkzA" class="social_link" target="_BLANK">Visiter</a>
        </div>
        <div class="mail_clicker">
            <a href="#mail"><img class="mail_arrow" src="./asset/img/contact/mail/arrow_bot.svg">
            <p class="mail_message">Formulaire de mail</p></a>
        </div>
</section>
<section id="mail" class="mail_bloc">
    <div class="mail_form_bloc">
		<h4 class="sent-notification"></h4>
        <center><h2 class="title_form">Me contacter</h2>
		<form id="myForm" method="POST" action="sendEmail.php">
			<input name="name" id="name" type="text" placeholder="Nom">
			<input name="phone-number" id="phone-number" type="tel" placeholder="Telephone (facultatif)">
			<br><br>
			<input name="email" id="email" type="email" placeholder="E-mail">
			<br><br>
            <input name="subject" id="subject" type="text" placeholder="Sujet">
            <br><br>
			<textarea name="body" id="body" rows="5" placeholder="Votre message"></textarea>
			<br><br>
			<button type="submit" value="." onclick="sendEmail()">Envoyer</button>
		</form></center>
    </div>
</section>
</body>
</html>