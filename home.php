<?php session_start() ?>
<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <title>Jogo da velha</title>
</head>

<body>
<div>
    <h1>Jogo da velha</h1>
    <form class="center" method="post" action="main.php">
        <label>
            <input type="radio" name="player" value="1" checked> Single Player </br>
            <input type="radio" name="player" value="2"> Two Player's </br></br>
            <input type="submit" value="Bora Jogar!">
        </label>
    </form>
</div>
</body>
</html>