// <?php 
// include("./includer/watermark.html"); 
// #include("./includer/var-collection.php");
// ?>
// <html>
// <head>
//     <meta charset="utf-8" />
//     <link rel="stylesheet" href="css/body_style.css"/>
//     <link rel="stylesheet" href="css/user/inscription_style.css"/>
//     <link rel="icon" type="image/png" href="asset/img/logo.png" />
//     <title>Inscription</title> 
// </head>
// <body>
//     <div class="base">
//         <?php 
//         if(isset($_GET['messcode'])){
//             $message = $_GET['messcode'];
//             echo '<p>'.$message.'</p>';
//         }

        
//         ?>
//         <center><h1>Inscription</h1></center>
//         <form action="account/account-register.php" method="POST">
//             <label>Identifiant</label><br><br>
//             <input name="pseudo" type="text" placeholder="Silvus_tv" require><br>
//             <table>
//                 <tr>
//                     <td class="label"><label>Email</label><br></td>
//                     <td class="label"><label>Confirmation Email</label><br></td>
//                 </tr>
//                 <tr></tr>
//                 <tr>
//                     <td class="input"><input name="mail" type="text" placeholder="votre.email@exemple.com"require></td>
//                     <td class="input"><input name="confirm-mail" type="text" placeholder="votre.email@exemple.com"require></td>
//                 </tr>
//                 <tr>
//                     <td class="label"><label>Mot de Passe</label><br></td>
//                     <td class="label"><label>Confirmation email</label><br></td>
//                 </tr>
//                 <tr>
//                     <td class="input"><input name="password" type="password" placeholder="Password"require></td>
//                     <td class="input"><input name="confirm-password" type="password" placeholder="Password"require></td>
//                 </tr>
//             </table>
            
//             <button type="submit" name="submit">Inscription</button>
//         </form> 
//         <p>Deja inscrit ? <a href="connexion.php">Connectez-vous ici !</a></p>
//     </div>
// </body>
// </html>