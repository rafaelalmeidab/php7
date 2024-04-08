<div class="titulo">Op. Relacionais</div>

<?php

echo "20/06/2021<br><br>";

var_dump(1 == 1); //true
var_dump(1 > 1); //false
var_dump(1 >= 1); //true
var_dump(1 != 1); //false
var_dump(4 <= 1); //false
var_dump(1 <> 1); //false

var_dump("111" == 111); //true
var_dump("111" === 111); //false
var_dump("111" != 111); //false
var_dump("111" !== 111); //true

echo "<p>Relacionais no If Else</p><hr>";
$idade = 25;
if ($idade < 18) {
    echo "Menor de idade = $idade anos!<br>";
} else if ($idade <= 65) {
    echo "Adulto = $idade anos!<br>";
} else {
    echo "Terceira idade = $idade anos!<br>";
}

echo '<p>Spaceship</p><hr>';
var_dump(500 <=> 3);
var_dump(50 <=> 50);
var_dump(5 <=> 30);

echo '<p>Valores podem ser verdadeiro ou falso</p><hr>';
var_dump(!!5);
var_dump(!!0);
var_dump(!!"");
var_dump(!!" ");



?>

<style>
    p {
        margin-bottom: -5px;
    }

    hr {
        margin-top: 0px;
    }
</style>