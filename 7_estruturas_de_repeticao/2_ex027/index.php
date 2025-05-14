<?php

$arr = ["Igor", true, false, true, 10, 'A', 20.3, "Mateus", "Eduardo", 8];
$i = 0;
$x = count($arr);
while ($i <= $x) {
    if (is_string($arr[$y])) {
        echo $arr[$y] . "<br>";
    } 
    $y++;
}
?>