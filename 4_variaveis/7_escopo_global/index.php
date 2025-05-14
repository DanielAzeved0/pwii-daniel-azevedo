<?php

$teste = "asd";

echo "$teste goblal 1 <br>";

if (5 > 2 ) {

    $teste = "dsa";

    echo "$teste if <br>";

}

echo "$teste goblal 2 <br>";

function fundo () {

    $teste = "xsxs";

    echo "$teste local <br>";

}

funcao ();

    function testendoGlobal() {

        global  $teste;

        $teste = 2;

        echo "$teste global função <br>";

    }

testendoGlobal ();

echo "$teste global 3 <br>";

?>