// <?php 
// #Importation
// include("../../db-connect.php");
// #include("../ressources/includer/var-collection.php");

// #Creation variable repétitive
// $coDec= $_POST['co-dec'];
// $projectDec= $_POST['project-dec'];
// $MajPro= $_POST['MajPro'];
// $DatePro= $_POST['DatePro'];
// $button= $_POST['button'];
// $id=$_POST['id'];

// if(empty($coDec)){
//     $coDec="Aucune-information.";
// }elseif(empty($projectDec)){
//     $projectDec="Aucune-information.";
// }elseif(empty($MajPro)){
//     $MajPro="Aucune-information.";
// }elseif(empty($DatePro)){
//     $DatePro="Aucune-information.";
// }
// if(!isset($_POST['HTML'])){
//     $HTML="off";
// }else{$HTML=$_POST['HTML'];}
// if(!isset($_POST['CSS'])){
//     $CSS="off";
// }else{$CSS=$_POST['CSS'];}
// if(!isset($_POST['PHP'])){
//     $PHP="off";
// }else{$PHP=$_POST['PHP'];}
// if(!isset($_POST['SQL'])){
//     $SQL="off";
// }else{$SQL=$_POST['SQL'];}
// if(!isset($_POST['JS'])){
//     $JS="off";
// }else{$JS=$_POST['JS'];}
// if(!isset($_POST['NSJ'])){
//     $NJS="off";
// }else{$NJS=$_POST['NJS'];}

// if(isset($button)){
//     $moreExist = $bdd->prepare("SELECT ID FROM `portfoliomore` WHERE IDProject = ? ");
//     $moreExist-> execute(array($id));
//     $exist = $moreExist->rowCount();

//     if($exist == 1){

//         $update = $bdd->prepare('UPDATE `portfoliomore` SET `DatePublication`= :DatePublication, `DateMaJ`= :DateMaJ,`DescEntreprise`= :DescEntreprise, `DescProjet`= :DescProjet, `HTML`= :HTML, `CSS`= :CSS, `JS`= :JS, `NJS`= :NJS, `BDD`= :BDD, `PHP`= :PHP WHERE IDProject='.$id.'');
//         $update->execute([
//             'DatePublication' => ''.$DatePro.'',
//             'DateMaJ' => ''.$MajPro.'',
//             'DescEntreprise' => ''.$coDec.'',
//             'DescProjet' => ''.$projectDec.'',
//             'HTML' => ''.$HTML.'',
//             'CSS' => ''.$CSS.'',
//             'JS' => ''.$JS.'',
//             'NJS' => ''.$NJS.'',
//             'BDD' => ''.$SQL.'',
//             'PHP' => ''.$PHP.'',
//         ]);

//     }else{
//         $morePF = $bdd->prepare('INSERT INTO `portfoliomore`(IDProject, DatePublication, DateMaJ, DescEntreprise, DescProjet, HTML, CSS, JS, NJS, BDD, PHP) 
//                                 VALUES (:IDProject, :DatePublication, :DateMaJ, :DescEntreprise, :DescProjet, :HTML, :CSS, :JS, :NJS, :BDD, :PHP)');
//         $morePF->execute([
//             'IDProject' => ''.$id.'',
//             'DatePublication' => ''.$DatePro.'',
//             'DateMaJ' => ''.$MajPro.'',
//             'DescEntreprise' => ''.$coDec.'',
//             'DescProjet' => ''.$projectDec.'',
//             'HTML' => ''.$HTML.'',
//             'CSS' => ''.$CSS.'',
//             'JS' => ''.$JS.'',
//             'NJS' => ''.$NJS.'',
//             'BDD' => ''.$SQL.'',
//             'PHP' => ''.$PHP.'',
//         ]);

//     }
// }
    

// header('Location: ../../../portfolio')
// ?>