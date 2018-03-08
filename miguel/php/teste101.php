<?php
$a=2;
$b=9;
$c=2;
$delta= pow($b, 2) -(4*$a*$c);
if ($delta>=0){
$x1= (-$b + sqrt($delta))/(2*$a);
$x2= (-$b - sqrt($delta))/(2*$a);
echo "X1 = $x1 e X2= $x2"; 
}
else {
    echo "O delta deu negativo";
}