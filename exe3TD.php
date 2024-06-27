<?php 
// 3. A prefeitura de uma cidade fez uma pesquisa entre os seus habitantes, coletando dados sobre o salário e número de filhos. Faça um procedimento que leia esses dados para um número não determinado de pessoas e retorne a média de salário da população, a média do número de filhos, o maior salário e o percentual de pessoas com salário até R$350,00.
// dados das pessoas da cidade
    $dados = [ //
        [  'salario' => 1000 ,'filhos' => 1  ], //cada um sera "p"
        [  'salario' => 200  ,'filhos' => 2  ],
        [  'salario' => 3000 ,'filhos' => 6  ],
        [  'salario' => 100  ,'filhos' => 0  ],
        [  'salario' => 300  ,'filhos' => 2  ],
        [  'salario' => 10020,'filhos' => 8  ],
    ];
// funcao
    function estatistica($dados){//
        $somaSalario = 0;
        $mediaSalario = 0;
        $somaFilhos = 0;
        $mediaFilhos = 0;
        $maiorSalario = 0;
        $totalPessoas = count($dados);
        $salariosate350 = 0;
        foreach($dados as $p){
            $salario = $p['salario'];
            $filhos = $p['filhos'];

            $somaSalario += $salario;
            $somaFilhos += $filhos;

            if($salario > $maiorSalario){
                $maiorSalario = $salario;
            }

            if($salario <= 300){
                $salariosate350++;
            }
        }

            $mediaSalario = $somaSalario / $totalPessoas;
            //$mediaSalario = $somaSalario/count($dados);
            $mediaFilhos = $somaFilhos / $totalPessoas;
            $porcentagemSalario350 = ($salariosate350 / $totalPessoas ) * 100 ;

            echo "\nMédia do salário da população: R$".number_format($mediaSalario,)."\n";
            echo "\nMaior salário: R$".number_format($maiorSalario,)."";
            echo "\nMédia do número de filhos: ".number_format($mediaFilhos,0);
            echo "\nPorcentagem de pessoas com salário até 350,00: ".number_format($porcentagemSalario350,).".\n";
        
        
    }
    estatistica($dados);





?>