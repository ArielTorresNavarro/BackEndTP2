<?php

// Una institución de educación, con carreras tanto diurnas como vespertinas, considera lo siguiente en
// su proceso académico: si un estudiante de carrera vespertina tiene una nota de presentación mayor
// o igual a 6, se exime, y si no alcanza el 6 pero tiene una nota de presentación igual o mayor a 3.5,
// rinde examen. Si el estudiante es de carrera diurna y si su nota de presentación es mayor o igual a
// 3.5, rinde examen (no hay posibilidad de eximirse). En ambos regímenes, si la nota de presentación
// es menor que 3.5, reprueba. Hacer la tabla de decisión y escriba el algoritmo correspondiente

// Entradas
$T = readline('Ingrese V si asisten en turno vespertino o D si lo ahce en diurno: ');
$N = readline('Ingrese su nota: ');

if ($N < 3.5) {
    echo "Ud. se encuentra reprobado";
} else {
    if ($T == 'V') {
        if ($N >= 6) {
            echo "Ud. se encuentra eximido y no dede rendir examen";
        } else {
            echo "Ud. se debe rendir examen";
        }
    } else {
        echo "Ud. se debe rendir examen";
    }
}    
?>