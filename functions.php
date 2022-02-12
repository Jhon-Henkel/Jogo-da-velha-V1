<?php
function tabuleiro (): void {
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
}//função para exibir o tabuleiro com as posições.

function fim_jogo (): void {
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
}//faz a validação de fim de partida.

function jogada_invalida (): void{
    echo "
               <script>
                  alert('Jogada inválida, a casa que você escolheu já está ocupada!!!');
               </script>
            ";
}//javascript de jogada inválida.


