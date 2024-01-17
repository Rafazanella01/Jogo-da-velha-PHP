
<?php
do {
    $jogador1 = readline("Player X - Digite seu nome: ");
    $jogador2 = readline("Player O - Digite seu nome: ");

    $jogador = 'x';

    $tabela = ['.', '.', '.',
               '.', '.', '.',
               '.', '.', '.',
    ];

    $vencedor = null;

    while ($vencedor === null) {
        echo <<<EOL
               Posições:  |  Tabuleiro:
                0|1|2     |     $tabela[0] $tabela[1] $tabela[2]
                3|4|5     |     $tabela[3] $tabela[4] $tabela[5]
                6|7|8     |     $tabela[6] $tabela[7] $tabela[8]
                          |
        EOL;

        $posicao = (int)readline(" \n Jogador {$jogador}, digite a sua posição: ");

        if (!in_array($posicao, [0, 1, 2, 3, 4, 5, 6, 7, 8])) {
            echo "\n Posição inexistente, digite novamente! \n";
            continue;
        }

        if ($tabela[$posicao] !== '.') {
            echo " \n posição ocupada, digite novamente! \n";
            continue;
        }

        $tabela[$posicao] = $jogador;

        if(
            ($tabela[0] === 'x' && $tabela[1] === 'x' && $tabela[2] === 'x')||
            ($tabela[3] === 'x' && $tabela[4] === 'x' && $tabela[5] === 'x')||
            ($tabela[6] === 'x' && $tabela[7] === 'x' && $tabela[8] === 'x')||
            ($tabela[0] === 'x' && $tabela[3] === 'x' && $tabela[6] === 'x')||
            ($tabela[1] === 'x' && $tabela[4] === 'x' && $tabela[7] === 'x')||
            ($tabela[2] === 'x' && $tabela[5] === 'x' && $tabela[8] === 'x')||
            ($tabela[0] === 'x' && $tabela[4] === 'x' && $tabela[8] === 'x')||
            ($tabela[2] === 'x' && $tabela[4] === 'x' && $tabela[6] === 'x')

        ){
            $vencedor = 'x';
        }

        if(
            ($tabela[0] === 'O' && $tabela[1] === 'O' && $tabela[2] === 'O')||
            ($tabela[3] === 'O' && $tabela[4] === 'O' && $tabela[5] === 'O')||
            ($tabela[6] === 'O' && $tabela[7] === 'O' && $tabela[8] === 'O')||
            ($tabela[0] === 'O' && $tabela[3] === 'O' && $tabela[6] === 'O')||
            ($tabela[1] === 'O' && $tabela[4] === 'O' && $tabela[7] === 'O')||
            ($tabela[2] === 'O' && $tabela[5] === 'O' && $tabela[8] === 'O')||
            ($tabela[0] === 'O' && $tabela[4] === 'O' && $tabela[8] === 'O')||
            ($tabela[2] === 'O' && $tabela[4] === 'O' && $tabela[6] === 'O')

        ){
            $vencedor = 'O';

        }

        if (!in_array('.', $tabela)) {
            break;
        }

       // troca de jogador
       if($jogador === 'x'){
           $jogador = 'O';
       }else{
               $jogador = 'x';
           }
       
    }

    echo <<<EOL
               Posições:  |  Tabuleiro:
                0|1|2     |     $tabela[0] $tabela[1] $tabela[2]
                3|4|5     |     $tabela[3] $tabela[4] $tabela[5]
                6|7|8     |     $tabela[6] $tabela[7] $tabela[8]
                          |
    EOL;

    if ($vencedor === 'x') {
        echo " \n Vencedor: {$jogador1}. \n";
    } elseif ($vencedor === 'O') {
        echo " \n Vencedor: {$jogador2}. \n";
    } else {
        echo " \n Empate!";
    }

    $jogardnv = filter_var(
        readline("\n Deseja jogar novamente? (True/False): "),
        FILTER_VALIDATE_BOOLEAN
    );

    echo "\n";
} while ($jogardnv === true);

echo "Saindo do jogo, tchauuuu!";
?>
