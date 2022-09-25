
<?php

// Leer una variable N de tipo entero e informar si el numero es positivo negativo o cero y también si es
// par, impar o cero. El número cero no es ni positivo ni negativo ni par ni impar.

//Entrada
$N= readline('Ingrese el valor de N: ');

if ($N== 0) {
        echo "El número ingresado es el cero";
    } elseif ($N>0) {
        if ($N%2==0) {
        echo "El número ingresado es positivo y par";
        } else {
            echo "El número ingresado es positivo e impar";
        }
    } else {
        if ($N%2==0) {
            echo "El número ingresado es negativo y par";
            } else {
                echo "El número ingresado es negativo e impar";
            }
    };

?>