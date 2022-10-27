// <?php
//     if (isset($_POST['name']) && isset($_POST['email'])) {
//         #prepare var
//         $name = $_POST['name'];
//         $email = $_POST['email'];
//         $subject = $_POST['subject'];
//         $body = $_POST['body'];
//         $number = $_POST['number'];
//         $body = wordwrap($body, 70, "\n\r");

//         #prepare mail
//         $to = "contact.silvus@gmail.com";
//         $subject = 'Web Site : '.$subject.'';
//         $headers = [
//             "From" => ''.$email.'',
//             "Reply-To" => ''.$email.'',
//             "Content-Type" => "text/html; charset=utf-8",
//         ];
//         $message = ''.$body.' <br> <br> ------------ <br> <br> → Nom : '.$name.' <br> → E-Mail : '.$email.' <br> → Téléphone : '.$number.'';
        
//         #send mail / erreur
//         ini_set("sendmail_from","contact.silvus@gmail.com");
//         if (mail($to, $subject, $message, $headers )) {
//             $status = "success";
//             $response = "Email is sent!";
//             header("Location: contact#mail");
//         } else {
//             $status = "failed";
//             $response = "Something is wrong: <br><br>";
//         }

//         #send to js
//         exit(json_encode(array("status" => $status, "response" => $response)));
        
//     }else{
//         echo'error';
//     }
// ?>

