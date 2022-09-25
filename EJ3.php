<?php

// 3. Ordenar en forma creciente tres valores diferentes A, B, C

//entradas
$A=readline('Ingrese el valor de A: ');
$B=readline('Ingrese el valor de B: ');
$C=readline('Ingrese el valor de C: ');

//procesos
if ($A<$B && $A<$C) { #A, B, C -- #lo que está dentro del parentesis me asegura que A es la más chica, sólo me queda ver si B es más chica que C o alreves:
    if ($B<$C) { #En este caso A es la más chica, le sigue B y C es la mayor
        echo "El orden es A:, $A, B:, $B, y C: $C";
    }else{ #A, C, B --- En este caso A es la más chica, le sigue C y B es la mayor
        echo "El orden es A:, $A, C:, $C, y B: $B";
    }
} elseif ($B<$C) { #Si llegó hasta acá, es porque el if anterior era falso y A no es la más chica, entonces comparo B y C para poder ver el orden: Primero vamos a suponer que B es más chica que C y vamos a ver donde se ubica A
    if ($A<$C) { #B, A, C -- A estaría al medio, porque no puede ser la más chica
        echo "El orden es B: $B, A: $A, y C: $C";
    }else{ #B, C, A -- A sería la más grande, porque no puede ser la más chica
        echo "El orden es B: $B, C: $C, y A: $A";
    }
} else { #Esto significa que C es más chica que B, porque ya de entrada sabemos que A no puede ser la más chica. Sólo falta comparar A y B.
    if ($A<$B) { #C, A, B--Como C es la más chica, A es la del medio y B la más grande
        echo "El orden es C: $C, A: $A, y B: $B";
    }else{ #C, B, A -- Como C es la más chica, B es la del medio y C la más grande
        echo "El orden es C: $C, B: $B, y A: $A";
    }
}
?>