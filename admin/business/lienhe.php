<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function contact_index()
{
    $sql = "select * from feedback";
    $itemcontacts = select_page($sql);
    admin_render('contact/index.php', compact('itemcontacts'), 'admin-assets/custom/category_index.js');
}

function contact_remove()
{
    $id = $_GET['id'];
    $sql = "delete from feedback where id = $id";
    select_page($sql);
    header("location: " . ADMIN_URL . 'contact');
}

function feedback()
{
    $id = isset($_GET['id']) ? $_GET['id'] : "";
    $sql = "select * from feedback where id = $id";
    $feedback = executeQuery($sql);
    admin_render('contact/feedback.php', compact('feedback'), 'admin-assets/custom/category_index.js');
}

function email_form()
{
    admin_render('email/send-email.php', []);
}

function send_email()
{
    $recciever = $_POST['recciever'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->CharSet = 'UTF-8';
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'nguyenvanviet28072001@gmail.com';                     //SMTP username
        $mail->Password   = 'povmtsijsiajlcrn';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        //Recipients
        $mail->setFrom('nguyenvanviet28072001@gmail.com', 'Nguyen Viet');
        $arrEmail = explode(',', $recciever);
        foreach ($arrEmail as $em) {
            $mail->addAddress(trim($em));
        }
        $mail->addReplyTo('vietnvph13644@fpt.edu.vn', 'viet');
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject =  $title;
        $mail->Body    = $content;
        $mail->AltBody = $content;
        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>