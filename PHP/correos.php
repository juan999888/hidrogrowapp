<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
require 'PHPMailer-master/src/Exception.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correos = explode(',', $_POST['correo_destino']); 
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];

    $mail = new PHPMailer(true);

    try {
        
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'juandavidsandovalflorez42@gmail.com';
        $mail->Password   = 'jjwhvdnbmvrxevbz';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        $mail->setFrom('juandavidsandovalflorez42@gmail.com', 'Hidro gorw APP');
        $mail->isHTML(true);
        $mail->Subject = $asunto; 
        $mail->addAttachment('slogobw.png'); 



        
        // Cuerpo del correo con estilo
        $mail->Body = "
            <div style='font-family: Arial, sans-serif; padding: 20px; background-color: #f2f2f2; color: #333;'>
                <h2 style='color: #0066cc;'>SDLG Hidro gorw APP - Notificación</h2>
                <p><strong>Mensaje:</strong></p>
                <div style='background: #fff; padding: 15px; border-radius: 5px; border: 1px solid #ccc;'>
                    " . nl2br(htmlspecialchars($mensaje)) . "
                </div>
            </div>
        ";
        
        $mail->AltBody = $mensaje;
        
        
        foreach ($correos as $correoDestino) {
            $correoDestino = trim($correoDestino); 
            if (filter_var($correoDestino, FILTER_VALIDATE_EMAIL)) {
                $mail->addAddress($correoDestino);
            }
        }

        $mail->send();
        header("location:../correook.html");
    } catch (Exception $e) {
        header("location:../correonook.html");
    }
}
?>