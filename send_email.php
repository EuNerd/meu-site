<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    
    $to = "lucasalvessilva@outlook.com";
    $subject = "Nova mensagem de: $name";
    $body = "Nome: $name\nE-mail: $email\nTelefone: $phone\n\nMensagem:\n$message";
    
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "E-mail enviado com sucesso!";
    } else {
        echo "Falha ao enviar o e-mail.";
    }
}
?>
