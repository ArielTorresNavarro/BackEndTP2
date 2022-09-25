<?php
// Ingresar el nombre del estudiante y la nota del examen final (Nota de tipo entero). Asignar la
// calificación de acuerdo a las notas de la tabla, hacer el algoritmo y ejecutar las pruebas como se nota
// en la figura:

#entradas

$estudiante = readline('Ingrese el nombre del/la estudiante: ');
$nota = readline('Ingrese la nota: ');

if ($nota >= 0 && $nota <=10) {
    switch($nota) {
        case 0:
            echo "La calificación del estudiante". $estudiante . "es Reprobado";
            break;
        case 1:
        case 2:
        case 3:
            echo "La calificación del estudiante". $estudiante . "es Insuficiente";
            break;
        case 4:
        case 5:
            echo "La calificación del estudiante". $estudiante . "es suficiente";
            break;
        case 6:
        case 7:
            echo "La calificación del estudiante". $estudiante . "es buena";
            break;
        case 8:
        case 9:
            echo "La calificación del estudiante". $estudiante . "es Distinguido";
            break;
        case 10:
            echo "La calificación del estudiante". $estudiante . "es Sobresaliente";
            break;
    }
}else {
    echo "Ha ingresado una nota inválida";
}

?>