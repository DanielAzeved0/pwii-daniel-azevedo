<?php     

    $a = (int) "12";

    echo $a;
    echo "<br>";
    echo $a + 10 ;
    echo "<br>";

    if($a === 12) {
        echo "A é idéntico a 12 <br>";
    }

    $b = (float) "3.14843824";

    if ($b === 3.14843824) {
        echo "B é idéntico a 3.14 <br>";
    }

    $c = (string) 34;

    echo $c;
    echo "<br>";

    if ($c === "34") {
        echo "C é idéntico a 34 <br>";
    }

?>