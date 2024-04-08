<div class="titulo">Desafio Int/Div</div>

<?php
echo '03-10-2021<br><hr>';

include_once 'desafioIntDivNamespace.php';

use function \Aritmetica\intdiv;

try {
    echo intdiv(8, 3) . '<br>';
} catch (\Aritmetica\NaoInteiroException $e) {
    echo 'Resultado não é um número inteiro<br>';
}

try {
    echo intdiv(8, 0) . '<br>';
} catch (DivisionByZeroError $e) {
    echo 'Divisão por zero<br>';
}

echo intdiv(8, 2) . '<br>';
echo \intdiv(8, 2) . '<br>';
echo \intdiv(8, 3) . '<br>';
