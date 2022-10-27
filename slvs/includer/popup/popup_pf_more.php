// <?php  #All Request 
// include("../watermark.html"); 
// include("../var-collection.php");
// include("../db-connect.php");
// include '../nav_allpage.php';
//     if(isset($_POST['id'])){       
//         $id = $_POST['id'];
//         $name = $_POST['name'];
//     }else{
//         $id="";
//         $name="";
//     }
//     if(isset($_SESSION['user'])){
//         $editable = "yes";
//         $disable="";
//     }else{
//         $editable = "no";
//         $disable="disabled";
//     }
// #Get logo 
// $response = $bdd->prepare("SELECT * FROM `portfolio` WHERE Title = ?");
// $response-> execute(array($name));
// while ($pfData = $response->fetch()){ 
// ?>

<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../../css/portfolio/popup-pf-more_style.css"/>
        <link rel="stylesheet" href="../../css/body_style.css"/>
        <link rel="icon" type="image/png" href="../../asset/img/logo.png"/>
        <title>Plus d'informations</title>
    </head>         
    // <?php 
    // #get les informations des value
    // $response2 = $bdd->prepare("SELECT * FROM `portfoliomore` WHERE IDProject = ?");
    // $response2-> execute(array($id));
    // while ($pfDatas = $response2->fetch()){
                
    // ?>
    <div class="modal-container-more">
    <div class="modal-more">
        <a class="close-modal-more modal-trigger-more" href="../../portfolio"><?php echo''.$close.''; ?></a>
        <form action="action/more-pf.php" method="POST">
            <div class="left">
                <img src="../../asset/img/portfolio/<?php echo''.$pfData['img_name'].''; ?>">
                <input type="hidden" name="id" value="<?php echo''.$id.'' ?>">
                <span class="datePub"><label class="datePubTitle">Date de Publication : </label><input name="DatePro" type="text" class="datePubValue <?php echo''.$editable.''; ?>" <?php echo''.$disable.''; ?> value="<?php echo''.$pfDatas['DatePublication'].''; ?>"></span>
                <span class="dateMaj"><label class="dateMajTitle">Dernière Mise à Jour : </label><input name="MajPro" type="text" class="dateMajValue <?php echo''.$editable.''; ?>" <?php echo''.$disable.''; ?> value="<?php echo''.$pfDatas['DateMaJ'].''; ?>"></span>
                <div class="tech">
                    <label class="techTitle"> Langage(s) utilisé(s) :</label>
                    <table>
                        <tr>
                            <td align="right" class="checkbox <?php echo''.$editable.''; ?>"><input type="checkbox" id="HTML" name="HTML"></td>
                            <td align="left" class="Title <?php echo''.$editable.''; ?>"><label class="Ab-txt ">HTML</label></td>
                            <td align="center" class="icon <?php echo''.$editable.''; ?>"><ion-icon <?php echo'class="'.$pfDatas['HTML'].'"'; ?> name="logo-html5"></ion-icon></td>
                        </tr>
                        <tr>
                            <td align="right" class="checkbox <?php echo''.$editable.''; ?>"><input type="checkbox" id="CSS" name="CSS"></td>
                            <td align="left" class="Title <?php echo''.$editable.''; ?>"><label class="Ab-txt ">CSS</label></td>
                            <td align="center" class="icon <?php echo''.$editable.''; ?>"><ion-icon <?php echo'class="'.$pfDatas['CSS'].'"'; ?> name="logo-css3"></ion-icon></td>
                        </tr>
                        <tr>
                            <td align="right" class="checkbox <?php echo''.$editable.''; ?>"><input type="checkbox" id="PHP" name="PHP"></td>
                            <td align="left" class="Title <?php echo''.$editable.''; ?>"><label class="Ab-txt ">PHP</label></td>
                            <td align="center" class="icon <?php echo''.$editable.''; ?>"><i class="fa-brands fa-php <?php echo''.$pfDatas['PHP'].''; ?>"></i></td>
                        </tr>
                        <tr>
                            <td align="right" class="checkbox <?php echo''.$editable.''; ?>"><input type="checkbox" id="SQL" name="SQL"></td>
                            <td align="left" class="Title <?php echo''.$editable.''; ?>"><label class="Ab-txt ">SQL</label></td>
                            <td align="center" class="icon <?php echo''.$editable.''; ?>"><i class="fa-solid fa-database <?php echo''.$pfDatas['BDD'].'';?>"></i></td>
                        </tr>
                        <tr>
                            <td align="right" class="checkbox <?php echo''.$editable.''; ?>"><input type="checkbox" id="JS" name="JS"></td>
                            <td align="left" class="Title <?php echo''.$editable.''; ?>"><label class="Ab-txt ">Java Script</label></td>
                            <td align="center" class="icon <?php echo''.$editable.''; ?>"><i class="fa-brands fa-js <?php echo''.$pfDatas['JS'].''; ?>"></i></td>
                        </tr>
                        <tr>
                            <td align="right" class="checkbox <?php echo''.$editable.''; ?>"><input type="checkbox" id="NJS" name="NJS"></td>
                            <td align="left" class="Title <?php echo''.$editable.''; ?>"><label class="Ab-txt ">Node JS</label></td>
                            <td align="center" class="icon <?php echo''.$editable.''; ?>"><ion-icon <?php echo'class="'.$pfDatas['NJS'].'"'; ?> name="logo-nodejs"></ion-icon></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="right">
                <h1><?php echo''.$name.''; ?></h1>
                <div class="textContainer">
                    <section class="entreprise">
                        <h2 class="co-title">Qui sont-il ?</h2>
                        <textarea class="<?php echo''.$editable.''; ?>" name="co-dec"  rows="5" <?php echo''.$disable.''; ?> wrap="off" ><?php echo''.$pfDatas['DescEntreprise'].''; ?></textarea>
                    </section>
                    <section class="projet">
                        <h2 class="project-title">Qu'est ce qu'est ce projet ?</h2> 
                        <textarea class="<?php echo''.$editable.''; ?>" name="project-dec"  rows="5" <?php echo''.$disable.''; ?> wrap="off" ><?php echo''.$pfDatas['DescProjet'].''; ?></textarea> 
                    </section>
                    <a class="click" href="<?php echo''.$pfDatas['link'].''; ?>" target="_BLANK">Essayer</a>
                </div> 
            </div>
            <button name="button" type="submit" class="save <?php echo''.$editable.''; ?>"><?php echo''.$save.''; ?></button>
        </form>
        
    </div>
    </body>
</html> 
// <?php 
// }
// }
// ?>