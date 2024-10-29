<?php
function pertenceFibonacci($numero) {
    $fibonacci = [0, 1]; // Começa com os dois primeiros números.
    
    // Gera a sequência até que o último número seja maior ou igual ao número informado
    while (end($fibonacci) < $numero) {
        $fibonacci[] = end($fibonacci) + prev($fibonacci);
    }
    
    // Checa se o número está na sequência
    if (in_array($numero, $fibonacci)) {
        echo "O número {$numero} pertence à sequência de Fibonacci.";
    } else {
        echo "O número {$numero} não pertence à sequência de Fibonacci.";
    }
}

// Testes para uso 
$numero = 8; // Insira o número que deseja verificar
pertenceFibonacci($numero);

