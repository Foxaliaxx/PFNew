<?php 
include("./includer/watermark.html"); 
include("./includer/var-collection.php");
include("./includer/db-connect.php");

?>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="css/body_style.css"/>
        <link rel="stylesheet" href="css/portfolio/portfolio_style.css"/>
        <link rel="stylesheet" href="css/includercss/nav_allpage.css">
        <link rel="stylesheet" href="css/portfolio/popup-pf-add_style.css"/>
        <link rel="icon" type="image/png" href="asset/img/logo.png"/>
        <title>Portfolio</title>
    </head>
    <body>
    <?php 
    include 'includer/nav_allpage.php';
        if(isset($_SESSION['user'])){
            $class = "edit";
        }else{
            $class="enable";
        }
    ?>
    <iframe name="votar" style="display:none"></iframe>
    <div class="container">
        <div class="card">
            <div class="imgbox">
                <img class="on" src="asset/img/portfolio/logo-ems.png">
            </div>
            <div class="content">
                <div>
                    <h1>Empire Media Science</h1>
                    <p>Page de contact d'Empire Media Science, entreprise d'audio-visuel et traitement audio principalement pour
                        les créateurs de contenus sur les nouveaux médias.</p>
                    <a class="disable enable" href="#">Plus D'informations</a>
                </div>  
            </div>
        </div>
        // <?php
        // $reponse = $bdd->query('SELECT * FROM portfolio ORDER BY `ID` ASC');
        // while ($donnes = $reponse->fetch()){
        //         echo '<div class="card">';
        //             echo '<div class="imgbox"><img class="'.$donnes['Monochrome'].'" src="'.$donnes['img_link'].'"></div>';
        //             echo '<div class="content">';
        //                 echo '<div>';
        //                     echo '<h1>'.$donnes['Title'].'</h1>';
        //                     echo '<p>' . $donnes['Description'] . '</p>';
        //                     echo '<form action="./includer/popup/popup_pf_more.php" method="POST"><input type="hidden" name="id" value="'.$donnes['ID'].'"><input type="hidden" name="name" value="'.$donnes['Title'].'">';
        //                     echo '<button class="'.$class.'" >Plus D\'informations</button></form>';
        //                 echo '</div>' ;
        //             echo '</div>';
        //         echo '</div>';			
        // }
        // ?>
    </div>
    <?php 
        if(isset($_SESSION['user'])){
            echo'<button class="modal-btn-add modal-trigger-add"><div class="add_project">'.$more.'</div></button>';
            $class = "edit";
        }
        include("./includer/popup/popup_pf_add.php");
    ?>
    <script src="./includer/js/popup_add.js"></script>
    </body>
</html> 