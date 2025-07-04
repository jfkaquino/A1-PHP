<?php
require_once 'includes/autenticacao_usuario.php';
require_once 'includes/funcoes.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="ico/camera-reels-fill.svg" type="image/x-icon">
    <title>Início</title>
</head>

<body>
    <?php include 'includes/header.php'; ?>
    <section class="container primary">
        <img class="icoprimary" src="ico/movie.svg" alt="">
        <h1 class="label">Bem-vindo ao gerenciador de filmes do cinema</h1>
        <p class="label">Crie, edite ou apague a lista de filmes disponíveis no cinema.</p>
    </section>
    <?php include 'includes/toast.php'; ?>
</body>

</html>