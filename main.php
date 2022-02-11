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
    <?php
        $player=$_POST["player"];//lê o valor informado na tela home.php

        if ($player == 1){
            $_SESSION['player'] = 1;
        }elseif($player == 2){
            $_SESSION['player'] = 2;
        }//coloca o valor passado pela tela home em uma variavel global.

        if ($_SESSION ['tabuleiro'] == null) {
            $_SESSION ['j'] = [array(1, 2, 3), array(4, 5, 6), array(7, 8, 9)];
        }//Cria o Array do tabuleiro e numera as casas.

        function tabuleiro (): void{
            echo "<h1>";
            echo $_SESSION['j'][0][0] . " | " . $_SESSION['j'][0][1] . " | " . $_SESSION['j'][0][2];
            echo "<br>-----------</br>";
            echo $_SESSION['j'][1][0] . " | " . $_SESSION['j'][1][1] . " | " . $_SESSION['j'][1][2];
            echo "<br>-----------</br>";
            echo $_SESSION['j'][2][0] . " | " . $_SESSION['j'][2][1] . " | " . $_SESSION['j'][2][2];
            echo "</h1>";
        }//função para exibir o tabuleiro com as posições.

        function fim_jogo (): void
        {
            if (($_SESSION['j'][0][0] == "X" && $_SESSION['j'][0][1] == "X" && $_SESSION['j'][0][2] == "X")
                || ($_SESSION['j'][1][0] == "X" && $_SESSION['j'][1][1] == "X" && $_SESSION['j'][1][2] == "X")
                || ($_SESSION['j'][2][0] == "X" && $_SESSION['j'][2][1] == "X" && $_SESSION['j'][2][2] == "X")
                || ($_SESSION['j'][0][0] == "X" && $_SESSION['j'][1][0] == "X" && $_SESSION['j'][2][0] == "X")
                || ($_SESSION['j'][0][1] == "X" && $_SESSION['j'][1][1] == "X" && $_SESSION['j'][2][1] == "X")
                || ($_SESSION['j'][0][2] == "X" && $_SESSION['j'][1][2] == "X" && $_SESSION['j'][2][2] == "X")
                || ($_SESSION['j'][0][0] == "X" && $_SESSION['j'][1][1] == "X" && $_SESSION['j'][2][2] == "X")
                || ($_SESSION['j'][2][0] == "X" && $_SESSION['j'][1][1] == "X" && $_SESSION['j'][0][2] == "X")) {
                echo "<h2 class='center'>Parabéns jogador de 'X'</br>" . "Você ganhou!!!</h2>";
            } elseif (($_SESSION['j'][0][0] == "O" && $_SESSION['j'][0][1] == "O" && $_SESSION['j'][0][2] == "O")
                || ($_SESSION['j'][1][0] == "O" && $_SESSION['j'][1][1] == "O" && $_SESSION['j'][1][2] == "O")
                || ($_SESSION['j'][2][0] == "O" && $_SESSION['j'][2][1] == "O" && $_SESSION['j'][2][2] == "O")
                || ($_SESSION['j'][0][0] == "O" && $_SESSION['j'][1][0] == "O" && $_SESSION['j'][2][0] == "O")
                || ($_SESSION['j'][0][1] == "O" && $_SESSION['j'][1][1] == "O" && $_SESSION['j'][2][1] == "O")
                || ($_SESSION['j'][0][2] == "O" && $_SESSION['j'][1][2] == "O" && $_SESSION['j'][2][2] == "O")
                || ($_SESSION['j'][0][0] == "O" && $_SESSION['j'][1][1] == "O" && $_SESSION['j'][2][2] == "O")
                || ($_SESSION['j'][2][0] == "O" && $_SESSION['j'][1][1] == "O" && $_SESSION['j'][0][2] == "O")) {
                echo "<h2 class='center'>Parabéns jogador de 'O'</br>" . "Você ganhou!!!</h2>";
            }elseif ($_SESSION['deu_velha'] == 9) {
                echo "<h2 class='center'>Deu Velha</br>" . "Ningém ganhou!!!</h2>";
            }
        }//faz a validação de fim de partida.

        ////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////TWO PLAYER////////////////////////////////////////////////////
        ////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        if ($_SESSION ['player'] == 2){
            $_SESSION ['tabuleiro'] = true;
            $x = $_POST['X']; //pega o valor digitado por 'X' no formulário.
            $o = $_POST['O']; //pega o valor digitado por 'O' no formulário.

            if ($x == 1){
                $_SESSION['j'][0][0] = "X";
                $_SESSION['deu_velha'] ++;
            }elseif ($x == 2){
                $_SESSION['j'][0][1] = "X";
                $_SESSION['deu_velha'] ++;
            }elseif ($x == 3){
                $_SESSION['j'][0][2] = "X";
                $_SESSION['deu_velha'] ++;
            }elseif ($x == 4){
                $_SESSION['j'][1][0] = "X";
                $_SESSION['deu_velha'] ++;
            }elseif ($x == 5){
                $_SESSION['j'][1][1] = "X";
                $_SESSION['deu_velha'] ++;
            }elseif ($x == 6){
                $_SESSION['j'][1][2] = "X";
                $_SESSION['deu_velha'] ++;
            }elseif ($x == 7){
                $_SESSION['j'][2][0] = "X";
                $_SESSION['deu_velha'] ++;
            }elseif ($x == 8){
                $_SESSION['j'][2][1] = "X";
                $_SESSION['deu_velha'] ++;
            }elseif ($x == 9){
                $_SESSION['j'][2][2] = "X";
                $_SESSION['deu_velha'] ++;
            }//jogadas de 'X'.

            if ($o == 1){
                $_SESSION['j'][0][0] = "O";
                $_SESSION['deu_velha'] ++;
            }elseif ($o == 2){
                $_SESSION['j'][0][1] = "O";
                $_SESSION['deu_velha'] ++;
            }elseif ($o == 3){
                $_SESSION['j'][0][2] = "O";
                $_SESSION['deu_velha'] ++;
            }elseif ($o == 4){
                $_SESSION['j'][1][0] = "O";
                $_SESSION['deu_velha'] ++;
            }elseif ($o == 5){
                $_SESSION['j'][1][1] = "O";
                $_SESSION['deu_velha'] ++;
            }elseif ($o == 6){
                $_SESSION['j'][1][2] = "O";
                $_SESSION['deu_velha'] ++;
            }elseif ($o == 7){
                $_SESSION['j'][2][0] = "O";
                $_SESSION['deu_velha'] ++;
            }elseif ($o == 8){
                $_SESSION['j'][2][1] = "O";
                $_SESSION['deu_velha'] ++;
            }elseif ($o == 9){
                $_SESSION['j'][2][2] = "O";
                $_SESSION['deu_velha'] ++;
            }//jogadas de 'O'.
            echo $_SESSION['deu_velha'];
        }//jogadas two players
    ?>


    <form class="center" method="post" action="main.php">
        <label>
            Informe o local para 'X':<br>
            <input type="number" name="X" placeholder="num." max='9' min='1' required>
            <input type="submit" value="Jogar">
        </label>
    </form><!--formulário que capta a jogada de X.-->

    <form class="center" method="post" action="main.php">
        <label>
            Informe o local para 'O':<br>
            <input type="number" name="O" placeholder="num." max='9' min='1' required>
            <input type="submit" value="Jogar">
        </label>
    </form><!--formulário que capta a jogada de O.-->

    <?php
       tabuleiro ();
       fim_jogo ();
    ?><!--Mostra o tabuleiro-->

    <form class="reset" method="post" action="Reset.php">
        <label>
            <input type="submit" value="Reset!">
        </label>
    </form><!--formulário de reset que encaminha para reset.php-->

</div>
</body>
</html>