<!--Fazer:
 - ok - Caixa de jogada sumir ao finalizar jogo.
 - ok - Trocar o wallpaper.
 -    - Opção de jogo single player com uma IA foda (3 dificuldades?).
 - ok - Cor em X e O diferentes.
 -    - Alert do javascript não dar tela branca.
 - ok - Alinhamento da grade não ficar se mexendo.
 --><!-- MELHORIAS -->

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
        $player = $_POST["player"] ?? null;//lê o valor informado na tela home.php

        include "functions.php";

        if ($player == 1){
            $_SESSION['player'] = 1;
        }elseif($player == 2){
            $_SESSION['player'] = 2;
        }//coloca o valor passado pela tela home em uma variavel global.

        $_SESSION ['tabuleiro'] = $_SESSION ['tabuleiro'] ?? null;

        if ($_SESSION ['tabuleiro'] == null) {
            $_SESSION ['j'] = [array(1, 2, 3), array(4, 5, 6), array(7, 8, 9)];
        }//Cria o Array do tabuleiro e numera as casas.

        /*function tabuleiro (): void {
            echo "<h1 class='background_grade'>";
            echo "<br><hr class='linha_horizontal_1'></br>";
            echo $_SESSION['j'][0][0] . "<span class='transparente'>.....</span>" .
                 $_SESSION['j'][0][1] . "<span class='transparente'>.....</span>" .
                 $_SESSION['j'][0][2]."</br></br>";
            echo "<br><hr class='linha_horizontal_2'></br>";
            echo $_SESSION['j'][1][0] . "<span class='transparente'>.....</span>" .
                 $_SESSION['j'][1][1] . "<span class='transparente'>.....</span>" .
                 $_SESSION['j'][1][2]."</br></br>";
            echo "<br><hr class='linha_horizontal_3'></br>";
            echo $_SESSION['j'][2][0] . "<span class='transparente'>.....</span>" .
                 $_SESSION['j'][2][1] . "<span class='transparente'>.....</span>" .
                 $_SESSION['j'][2][2]."</br></br>";
            echo "</h1>";
        }//função para exibir o tabuleiro com as posições.*/

        /*function fim_jogo (): void {
            if (($_SESSION['j'][0][0] == '<span class="x">X</span>' && $_SESSION['j'][0][1] == '<span class="x">X</span>' && $_SESSION['j'][0][2] == '<span class="x">X</span>')
                || ($_SESSION['j'][1][0] == '<span class="x">X</span>' && $_SESSION['j'][1][1] == '<span class="x">X</span>' && $_SESSION['j'][1][2] == '<span class="x">X</span>')
                || ($_SESSION['j'][2][0] == '<span class="x">X</span>' && $_SESSION['j'][2][1] == '<span class="x">X</span>' && $_SESSION['j'][2][2] == '<span class="x">X</span>')
                || ($_SESSION['j'][0][0] == '<span class="x">X</span>' && $_SESSION['j'][1][0] == '<span class="x">X</span>' && $_SESSION['j'][2][0] == '<span class="x">X</span>')
                || ($_SESSION['j'][0][1] == '<span class="x">X</span>' && $_SESSION['j'][1][1] == '<span class="x">X</span>' && $_SESSION['j'][2][1] == '<span class="x">X</span>')
                || ($_SESSION['j'][0][2] == '<span class="x">X</span>' && $_SESSION['j'][1][2] == '<span class="x">X</span>' && $_SESSION['j'][2][2] == '<span class="x">X</span>')
                || ($_SESSION['j'][0][0] == '<span class="x">X</span>' && $_SESSION['j'][1][1] == '<span class="x">X</span>' && $_SESSION['j'][2][2] == '<span class="x">X</span>')
                || ($_SESSION['j'][2][0] == '<span class="x">X</span>' && $_SESSION['j'][1][1] == '<span class="x">X</span>' && $_SESSION['j'][0][2] == '<span class="x">X</span>')) {
                $_SESSION['x/o'] = 3;
                echo "<h2 class='center'>Parabéns jogador de '<span class='x'>X</span>'</br>" . "Você ganhou!!!</h2></br>";

            } elseif (($_SESSION['j'][0][0] == '<span class="o">O</span>' && $_SESSION['j'][0][1] == '<span class="o">O</span>' && $_SESSION['j'][0][2] == '<span class="o">O</span>')
                || ($_SESSION['j'][1][0] == '<span class="o">O</span>' && $_SESSION['j'][1][1] == '<span class="o">O</span>' && $_SESSION['j'][1][2] == '<span class="o">O</span>')
                || ($_SESSION['j'][2][0] == '<span class="o">O</span>' && $_SESSION['j'][2][1] == '<span class="o">O</span>' && $_SESSION['j'][2][2] == '<span class="o">O</span>')
                || ($_SESSION['j'][0][0] == '<span class="o">O</span>' && $_SESSION['j'][1][0] == '<span class="o">O</span>' && $_SESSION['j'][2][0] == '<span class="o">O</span>')
                || ($_SESSION['j'][0][1] == '<span class="o">O</span>' && $_SESSION['j'][1][1] == '<span class="o">O</span>' && $_SESSION['j'][2][1] == '<span class="o">O</span>')
                || ($_SESSION['j'][0][2] == '<span class="o">O</span>' && $_SESSION['j'][1][2] == '<span class="o">O</span>' && $_SESSION['j'][2][2] == '<span class="o">O</span>')
                || ($_SESSION['j'][0][0] == '<span class="o">O</span>' && $_SESSION['j'][1][1] == '<span class="o">O</span>' && $_SESSION['j'][2][2] == '<span class="o">O</span>')
                || ($_SESSION['j'][2][0] == '<span class="o">O</span>' && $_SESSION['j'][1][1] == '<span class="o">O</span>' && $_SESSION['j'][0][2] == '<span class="o">O</span>')) {
                $_SESSION['x/o'] = 3;
                echo "<h2 class='center'>Parabéns jogador de '<span class='o'>O</span>'</br>" . "Você ganhou!!!</h2></br>";

            }elseif ($_SESSION['deu_velha'] == 9) {
                $_SESSION['x/o'] = 3;
                echo "<h2 class='center'>Deu Velha</br>" . "Ninguém ganhou!!!</h2></br>";
            }
        }//faz a validação de fim de partida.*/

        /*function jogada_invalida (): void{
            echo "
               <script>
                  alert('Jogada inválida, a casa que você escolheu já está ocupada!!!');
               </script>
            ";
        }//javascript de jogada inválida.*/

        ////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////TWO PLAYER////////////////////////////////////////////////////
        ////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        if ($_SESSION ['player'] == 2){
            $_SESSION ['tabuleiro'] = true;
            $x = $_POST['X'] ?? null; //pega o valor digitado por 'X' no formulário.
            $o = $_POST['O'] ?? null; //pega o valor digitado por 'O' no formulário.
            $_SESSION['deu_velha'] = $_SESSION['deu_velha'] ?? null;
            $_SESSION['x/o'] = $_SESSION['x/o'] ?? 1;//variável que faz a troca dos formulários de jogada.

            if ($x == 1) {
                if ($_SESSION['j'][0][0] == '<span class="x">X</span>' || $_SESSION['j'][0][0] == '<span class="o">O</span>'){
                    jogada_invalida();
                }elseif ($_SESSION['j'][0][0] == 1) {
                    $_SESSION['j'][0][0] = '<span class="x">X</span>';
                    $_SESSION['deu_velha']++;
                    $_SESSION['x/o'] = 2;
                }
            }elseif ($x == 2){
                if ($_SESSION['j'][0][1] == '<span class="x">X</span>' || $_SESSION['j'][0][1] == '<span class="o">O</span>'){
                    jogada_invalida();
                }elseif ($_SESSION['j'][0][1] == 2) {
                    $_SESSION['j'][0][1] = '<span class="x">X</span>';
                    $_SESSION['deu_velha']++;
                    $_SESSION['x/o'] = 2;
                }
            }elseif ($x == 3){
                if ($_SESSION['j'][0][2] == '<span class="x">X</span>' || $_SESSION['j'][0][2] == '<span class="o">O</span>'){
                    jogada_invalida();
                }elseif ($_SESSION['j'][0][2] == 3) {
                    $_SESSION['j'][0][2] = '<span class="x">X</span>';
                    $_SESSION['deu_velha']++;
                    $_SESSION['x/o'] = 2;
                }
            }elseif ($x == 4){
                if ($_SESSION['j'][1][0] == '<span class="x">X</span>' || $_SESSION['j'][1][0] == '<span class="o">O</span>'){
                    jogada_invalida();
                }elseif ($_SESSION['j'][1][0] == 4) {
                    $_SESSION['j'][1][0] = '<span class="x">X</span>';
                    $_SESSION['deu_velha']++;
                    $_SESSION['x/o'] = 2;
                }
            }elseif ($x == 5){
                if ($_SESSION['j'][1][1] == '<span class="x">X</span>' || $_SESSION['j'][1][1] == '<span class="o">O</span>'){
                    jogada_invalida();
                }elseif ($_SESSION['j'][1][1] == 5) {
                    $_SESSION['j'][1][1] = '<span class="x">X</span>';
                    $_SESSION['deu_velha']++;
                    $_SESSION['x/o'] = 2;
                }
            }elseif ($x == 6){
                if ($_SESSION['j'][1][2] == '<span class="x">X</span>' || $_SESSION['j'][1][2] == '<span class="o">O</span>'){
                    jogada_invalida();
                }elseif ($_SESSION['j'][1][2] == 6) {
                    $_SESSION['j'][1][2] = '<span class="x">X</span>';
                    $_SESSION['deu_velha']++;
                    $_SESSION['x/o'] = 2;
                }
            }elseif ($x == 7){
                if ($_SESSION['j'][2][0] == '<span class="x">X</span>' || $_SESSION['j'][2][0] == '<span class="o">O</span>'){
                    jogada_invalida();
                }elseif ($_SESSION['j'][2][0] == 7) {
                    $_SESSION['j'][2][0] = '<span class="x">X</span>';
                    $_SESSION['deu_velha']++;
                    $_SESSION['x/o'] = 2;
                }
            }elseif ($x == 8){
                if ($_SESSION['j'][2][1] == '<span class="x">X</span>' || $_SESSION['j'][2][1] == '<span class="o">O</span>'){
                    jogada_invalida();
                }elseif ($_SESSION['j'][2][1] == 8) {
                    $_SESSION['j'][2][1] = '<span class="x">X</span>';
                    $_SESSION['deu_velha']++;
                    $_SESSION['x/o'] = 2;
                }
            }elseif ($x == 9){
                if ($_SESSION['j'][2][2] == '<span class="x">X</span>' || $_SESSION['j'][2][2] == '<span class="o">O</span>'){
                    jogada_invalida();
                }elseif ($_SESSION['j'][2][2] == 9) {
                    $_SESSION['j'][2][2] = '<span class="x">X</span>';
                    $_SESSION['deu_velha']++;
                    $_SESSION['x/o'] = 2;
                }
            }//jogadas de 'X'.

            if ($o == 1){
                if ($_SESSION['j'][0][0] == '<span class="x">X</span>' || $_SESSION['j'][0][0] == '<span class="o">O</span>'){
                    jogada_invalida();
                }elseif ($_SESSION['j'][0][0] == 1) {
                    $_SESSION['j'][0][0] = '<span class="o">O</span>';
                    $_SESSION['deu_velha']++;
                    $_SESSION['x/o'] = 1;
                }
            }elseif ($o == 2){
                if ($_SESSION['j'][0][1] == '<span class="x">X</span>' || $_SESSION['j'][0][1] == '<span class="o">O</span>'){
                    jogada_invalida();
                }elseif ($_SESSION['j'][0][1] == 2) {
                    $_SESSION['j'][0][1] = '<span class="o">O</span>';
                    $_SESSION['deu_velha']++;
                    $_SESSION['x/o'] = 1;
                }
            }elseif ($o == 3){
                if ($_SESSION['j'][0][2] == '<span class="x">X</span>' || $_SESSION['j'][0][2] == '<span class="o">O</span>'){
                    jogada_invalida();
                }elseif ($_SESSION['j'][0][2] == 3) {
                    $_SESSION['j'][0][2] = '<span class="o">O</span>';
                    $_SESSION['deu_velha']++;
                    $_SESSION['x/o'] = 1;
                }
            }elseif ($o == 4){
                if ($_SESSION['j'][1][0] == '<span class="x">X</span>' || $_SESSION['j'][1][0] == '<span class="o">O</span>'){
                    jogada_invalida();
                }elseif ($_SESSION['j'][1][0] == 4) {
                    $_SESSION['j'][1][0] = '<span class="o">O</span>';
                    $_SESSION['deu_velha']++;
                    $_SESSION['x/o'] = 1;
                }
            }elseif ($o == 5){
                if ($_SESSION['j'][1][1] == '<span class="x">X</span>' || $_SESSION['j'][1][1] == '<span class="o">O</span>'){
                    jogada_invalida();
                }elseif ($_SESSION['j'][1][1] == 5) {
                    $_SESSION['j'][1][1] = '<span class="o">O</span>';
                    $_SESSION['deu_velha']++;
                    $_SESSION['x/o'] = 1;
                }
            }elseif ($o == 6){
                if ($_SESSION['j'][1][2] == '<span class="x">X</span>' || $_SESSION['j'][1][2] == '<span class="o">O</span>'){
                    jogada_invalida();
                }elseif ($_SESSION['j'][1][2] == 6) {
                    $_SESSION['j'][1][2] = '<span class="o">O</span>';
                    $_SESSION['deu_velha']++;
                    $_SESSION['x/o'] = 1;
                }
            }elseif ($o == 7){
                if ($_SESSION['j'][2][0] == '<span class="x">X</span>' || $_SESSION['j'][2][0] == '<span class="o">O</span>'){
                    jogada_invalida();
                }elseif ($_SESSION['j'][2][0] == 7) {
                    $_SESSION['j'][2][0] = '<span class="o">O</span>';
                    $_SESSION['deu_velha']++;
                    $_SESSION['x/o'] = 1;
                }
            }elseif ($o == 8){
                if ($_SESSION['j'][2][1] == '<span class="x">X</span>' || $_SESSION['j'][2][1] == '<span class="o">O</span>'){
                    jogada_invalida();
                }elseif ($_SESSION['j'][2][1] == 8) {
                    $_SESSION['j'][2][1] = '<span class="o">O</span>';
                    $_SESSION['deu_velha']++;
                    $_SESSION['x/o'] = 1;
                }
            }elseif ($o == 9){
                if ($_SESSION['j'][2][2] == '<span class="x">X</span>' || $_SESSION['j'][2][2] == '<span class="o">O</span>'){
                    jogada_invalida();
                }elseif ($_SESSION['j'][2][2] == 9) {
                    $_SESSION['j'][2][2] = '<span class="o">O</span>';
                    $_SESSION['deu_velha']++;
                    $_SESSION['x/o'] = 1;
                }
            }//jogadas de 'O'.

            fim_jogo ();//valida o fim da partida.

            if ($_SESSION['x/o'] == 1){
                echo "<form class='center' method='post' action='main.php'>
                        <label>
                            Informe o local para '<b><span class='x'>X</span></b>':<br>
                            <input type='number' name='X' placeholder='num.' max='9' min='1' required>
                            <input type='submit' value='Jogar'>
                        </label>
                      </form>
                ";//formulário que captura as jogadas de 'X'.
            }elseif ($_SESSION['x/o'] == 2) {
            echo "<form class='center' method = 'post' action = 'main.php' >
                    <label>
                        Informe o local para '<b><span class='o'>O</span></b>':<br >
                        <input type = 'number' name = 'O' placeholder = 'num.' max = '9' min = '1' required>
                        <input type = 'submit' value = 'Jogar' >
                    </label>
                  </form >
                ";//formulário que captura as jogadas de 'O'.
            }//formulários que captura as jogadas de 'X' e 'O'.
        }//jogadas two players

       tabuleiro ();//mostra o tabuleiro.
    ?>

    <form class="reset" method="post" action="Reset.php">
        <label>
            <input type="submit" value="Reset!">
        </label>
    </form><!--formulário de reset que encaminha para reset.php-->

</div>
</body>
</html>