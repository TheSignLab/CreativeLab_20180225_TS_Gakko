<?php




// ------------------------------------------------------ //
// Set Headers
// ------------------------------------------------------ //
    header('Access-Control-Allow-Origin: *'); 
// ------------------------------------------------------ //




// ------------------------------------------------------ //
// Lib and Imports
// ------------------------------------------------------ //
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP; 
    use PHPMailer\PHPMailer\POP3;
    use PHPMailer\PHPMailer\OAuth;      
    require 'PHPMailer/PHPMailer.php';
    require 'PHPMailer/Exception.php';
    require 'PHPMailer/SMTP.php';
    require 'PHPMailer/POP3.php';
    require 'PHPMailer/OAuth.php';
// ------------------------------------------------------ //








// ------------------------------------------------------ //
// General Settings
// ------------------------------------------------------ //       
   date_default_timezone_set('Etc/UTC');
// ------------------------------------------------------ //


$isOk = false;

/* Getting file name */
if($_FILES['file']){

    $filename = time().$_FILES['file']['name'];

    /* Location */
    $location = "./upload/".$filename;
    $uploadOk = 1;

     /* Upload file */
     if(move_uploaded_file($_FILES['file']['tmp_name'],$location)){
        $isOk = true;
        $uploadStatus = "OK";
        $uploadMessage = "";
     }else{
        $isOk = false;
         $uploadStatus = "ERROR";
        $uploadMessage = "Archivo no pudo subirse";
     }

  }else{
    $isOk = false;
             $uploadStatus = "ERROR";
        $uploadMessage = "Archivo no existe";
} 













// ------------------------------------------------------ //
// Iniciar Cliente PHP Mailer
// ------------------------------------------------------ //
$mail = new PHPMailer(true); 
$mail -> CharSet = "UTF-8";
// ------------------------------------------------------ //

if($isOk == true){


try {
    //Server settings

    $mail->SMTPDebug = 1;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Mailer = "smtp"; 
    $mail->Host = 'mail.colegiotecnologicodesuba.edu.co';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'admissions@colegiotecnologicodesuba.edu.co';                 // SMTP username
    $mail->Password = '11.62.0.35';                           // SMTP password

    $mail->Port =25;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('admissions@colegiotecnologicodesuba.edu.co', 'Mensaje por Hoja de Vida');
    //''
    // Add a recipient
    $mail->addAddress('admissions@colegiotecnologicodesuba.edu.co');
    //$mail->addAddress('wallamejorge@hotmail.com');  
    $mail->addReplyTo('admissions@colegiotecnologicodesuba.edu.co');


    $message = file_get_contents('templates/emailCV.html'); 


    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Mensaje por Hoja de Vida  - Colegio Tecnologico de Suba';

    $mail->Body    = 'Mensaje por Hoja de Vida';
    $mail->msgHTML($message, dirname(__FILE__));
    $mail->AltBody = 'Mensaje por Hoja de Vida';
    

    $mail->send();
    $emailStatus = "OK";
    $emailMessage = "";
} catch (Exception $e) {
    $emailStatus = "ERROR";
    $emailMessage = $mail->ErrorInfo;

}    



}else{
     $emailStatus = "ERROR";
    $emailMessage = "No se envio correo, pues no se subio nada.";
}
$ajaxResponse->status = "CASO INDEFINIDO";
$ajaxResponse->message = "UPLOAD STATUS :".$uploadStatus." EMAIL STATUS:".$emailStatus;

if($uploadStatus == "OK" && $emailStatus == "OK"){
    $ajaxResponse->status = "OK";
    $ajaxResponse->message = "ARCHIVO SUBIDO EXITOSAMENTE, PRONTO TE CONTACTAREMOS";
}
if($uploadStatus == "OK" && $emailStatus == "ERROR"){
    $ajaxResponse->status = "ERROR";
    $ajaxResponse->message = "SE SUBIO ARCHIVO, NO SE ENVIO ....".$emailMessage;
}
if($uploadStatus == "ERROR" && $emailStatus == "OK"){
    $ajaxResponse->status = "ERROR";
    $ajaxResponse->message = "NO SE SUBIO ARCHIVO, PERO SE ENVIO EL EMAIL";
}
if($uploadStatus == "ERROR" && $emailStatus == "ERROR"){
    $ajaxResponse->status = "ERROR";
    $ajaxResponse->message = "NI SUBIMOS ARCHIVO NI ENVIAMOS NAH";
}
$myJSON = json_encode($ajaxResponse);

echo $myJSON;


?>
