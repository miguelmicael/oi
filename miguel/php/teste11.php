<?php

function delta($a, $b, $c,&$delta){
    $delta= pow($b, 2) - (4 * $a * $c);}
    
    function x1($a, $b, $delta,&$x1){
        $x1= (- $b + sqrt($delta)) / (2 * $a);}
        
        function x2($a, $b, $delta,&$x2){
            $x2= (- $b - sqrt($delta)) / (2 * $a);}
            
            $a=$_POST['a'];
            $b=$_POST['b'];
            $c=$_POST['c'];
            
            delta($a, $b, $c,$delta);
            x1($a, $b, $delta,$x1);
            x2($a, $b, $delta,$x2);
            if ($delta>=0){
                echo "X1 = $x1 e X2= $x2";
            }
            else{
                echo "O delta deu negativo";
            }
            
            