// <?php 
// #Importation
// include("../../db-connect.php");
// #include("../ressources/includer/var-collection.php");

// #Creation variable repétitive
// $image= $_POST['image'];
// $color= $_POST['monochrome'];
// $title= $_POST['title'];
// $desc= $_POST['description'];
// $button= $_POST['button'];

// if(isset($button)){
//     if(!empty($image) AND !empty($color) AND !empty($title) AND !empty($desc)){
//         $addPF = $bdd->prepare('INSERT INTO portfolio(Title, Description, Monochrome, img_link) VALUES(:Title, :Description, :Monochrome, :img_link)');
//         $addPF->execute([
//             'Title' => $title,
//             'Description' => $desc,
//             'Monochrome' => $color,
//             'img_link' => $image,
//         ]);
//     }
// }

// header('Location: ../../../portfolio')
// ?>