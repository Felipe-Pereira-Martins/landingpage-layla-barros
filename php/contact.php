<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/phpmailer/Exception.php';
require __DIR__ . '/phpmailer/PHPMailer.php';
require __DIR__ . '/phpmailer/SMTP.php';

date_default_timezone_set('America/Sao_Paulo');

$nome     = $_POST['contact_names'] ?? '';
$email    = $_POST['contact_email'] ?? '';
$telefone = $_POST['contact_phone'] ?? '';
$mensagem = $_POST['contact_message'] ?? '';

$log = "=============================\n";
$log .= "Formulário chegou em: " . date("Y-m-d H:i:s") . "\n";
$log .= "Nome: $nome\nEmail: $email\nTelefone: $telefone\nMensagem: $mensagem\n\n";
file_put_contents("log.txt", $log, FILE_APPEND);

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'felipeablet2@gmail.com';
    $mail->Password   = "nmcj xgzx geqq eand"; // com aspas duplas!
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;

    $mail->setFrom($mail->Username, 'Formulário do Site');
    $mail->addAddress('felipeablet2@gmail.com');

    $mail->isHTML(true);
    $mail->Subject = 'Mensagem de Contato - Site';
    $mail->Body    = "<b>Nome:</b> $nome<br><b>Email:</b> $email<br><b>Telefone:</b> $telefone<br><b>Mensagem:</b><br>$mensagem";
    $mail->AltBody = "Nome: $nome\nEmail: $email\nTelefone: $telefone\nMensagem:\n$mensagem";

    // ... (envio do e-mail)
    $mail->send();
    echo json_encode(['status' => 'sucesso']);
    exit;
		} catch (Exception $e) {
    echo json_encode(['status' => 'erro']);
    exit;
	}

?>