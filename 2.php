<?php
// Defina a string que deseja verificar
$string = "Zallpy"; // Substitua por qualquer texto

// Converte a string para minúsculas e conta quantas letras 'a' existem
$contador = substr_count(strtolower($string), 'a');

// Verifica se a letra 'a' foi encontrada e exibe o resultado
if ($contador > 0) {
    echo "A letra 'a' foi encontrada {$contador} vez(es) na string.";
} else {
    echo "A letra 'a' não foi encontrada na string.";
}

