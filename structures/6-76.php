<div class="titulo">Desafio Operadores Lógicos</div>

<!-- 
    Dois trabalhos -> terça e quinta!
    - Se os dois forem executados -> TV 50' e Sorvete
    - Se os um for executado -> TV 32' e Sorvete liberado
    - Se nenhum for executado -> Fica em casa!

-->

<?php

echo "19/07/2021<br><br>";

?>

<form action='#' method="post">
    <div>
        <label for='t1'>Trabalho 1 (terça): </label>
        <select name='t1' id='t1'>
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <div>
        <label for='t2'>Trabalho 2 (quinta): </label>
        <select name='t2' id='t2'>
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <button>Executar</button>

</form>

<style>
    button,
    select {
        font-size: 1.8rem;
    }
</style>


<?php

//Meu código com 'problema'
//Undefined array key

/*
$ans1 = $_POST['t1'];
$ans2 = $_POST['t2'];

if ($ans1 == '1' && $ans2 == '1') {
    echo "TV 50' e Sorvete!<br><br>";
} else if (($ans1 != '1' && $ans2 == '1') || ($ans1 == '1' && $ans2 != '1')) {
    echo "TV 32' e Sorvete!<br><br>";
} else {
    echo "Em casa!<br><br>";
}
*/

if (isset($_POST['t1']) && isset($_POST['t2'])) {
    $t1 = $_POST['t1'] === '1';
    $t2 = !!$_POST['t2'];
    $tv = '';
    $sorvete = false;

    if ($t1 && $t2) {
        $tv = '50"';
    } elseif ($t1 xor $t2) {
        $tv = '32"';
    }

    if ($t1 or $t2) {
        $sorvete = true;
    }

    if ($tv) {
        $resultado = "Vamos comprar uma TV de $tv";
    } else {
        $resultado = "Sem TV dessa vez :(";
    }

    $saudavel = !$sorvete;

    if ($saudavel) {
        $resultado .= '<br>Estamos mais saudáveis!';
    } else {
        $resultado .= '<br>Sorvete liberado \o/';
    }

    echo "<p>$resultado</p>";
}
?>