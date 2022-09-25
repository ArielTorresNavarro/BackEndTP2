<?php
//Escribir un algoritmo que con solo ingresar los lados de un triángulo rectángulo le dice al usuario si
//es isoceles, escaleno o equilatero

$L1= readline('Ingrese el largo del lado 1: ');
$L2= readline('Ingrese el largo del lado 2: ');
$L3= readline('Ingrese el largo del lado 3: ');

if ($L1!=$L2 && $L1!=$L3) {
    if ($L2!=$L3) {
        echo "El Triangulo es escaleno";
    } else {
        echo "El Triangulo es isosceles";
    }
}elseif ($L1==$L2){
    if ($L2!=$L3) {
        echo "El Triangulo es isosceles";
    }else {
        echo "El Triangulo es equilatero";
    }
}else {
    if ($L2!=$L1) {
        echo "El Triangulo es isosceles";
    } else {
        echo "El Triangulo es equilatero";
    }
}


?>