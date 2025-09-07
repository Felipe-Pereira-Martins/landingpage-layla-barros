<?php
// Detecta se o usuário está em um dispositivo móvel
$user_agent = $_SERVER['HTTP_USER_AGENT'];
$is_mobile = preg_match('/iPhone|Android|webOS|BlackBerry|iPod/i', $user_agent);

// Número real da Nutri com DDD (formato internacional)
$number = '5522999222310'; // <-- Atualize com o número correto dela

// Mensagem refinada e profissional
$mensagem = urlencode("Olá, Layla! Vi seu site e gostaria de saber mais sobre suas consultas nutricionais.");

// Redireciona conforme o dispositivo
$link = $is_mobile
  ? "https://api.whatsapp.com/send?phone=$number&text=$mensagem"
  : "https://web.whatsapp.com/send?phone=$number&text=$mensagem";

header("Location: $link");
exit;
?>