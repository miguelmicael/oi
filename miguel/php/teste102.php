<?php


function delta($a, $b, $c){
    return pow($b, 2) - (4 * $a * $c);}

    function x1($a, $b, $delta){
        return (- $b + sqrt($delta)) / (2 * $a);}
   
        function x2($a, $b, $delta){
            return (- $b - sqrt($delta)) / (2 * $a);}

$a = 2;
$b = 2;
$c = 2;

$delta = delta($a, $b, $c);
$x1 = x1($a, $b, $delta);
$x2 = x2($a, $b, $delta);
if ($delta>=0){
    echo "X1 = $x1 e X2= $x2"; 
}
else{
    echo "O delta deu negativo";
}

