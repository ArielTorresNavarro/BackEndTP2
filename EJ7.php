

<?php

// En un hospital se ha hecho un estudio sobre los pacientes registrados durante los últimos 10 años,
// con el objeto de hacer una aproximación de los costos de internación por paciente. Se obtuvo un
// costo promedio diario según el tipo de enfermedad que aqueja al paciente. La siguiente tabla
// expresa los costos diarios, según el tipo de enfermedad.
// Construya un algoritmo que calcule e imprima el costo total que representa un paciente. 

// Tipo de Enfermedad Costo/Paciente/Día
// 1 125
// 2 116
// 3 120
// 4 132
// 5 138

#Entradas

$enfermedad = readline('Ingrese el número correspondiente al tipo de enfermedad: ');
$diasDeInternacion = readline('Ingrese la cantidad de días de internacion: ');

#Proceso
if ($enfermedad> 0 && $enfermedad<=5) {
    switch ($enfermedad) {
        case 1:
            $costoTotal = $diasDeInternacion * 125;
            echo "El costo de internación es de $costoTotal";
            break;
        case 2:
            $costoTotal = $diasDeInternacion * 116;
            echo "El costo de internación es de $costoTotal";
            break;
        case 3:
            $costoTotal = $diasDeInternacion * 120;
            echo "El costo de internación es de $costoTotal";
            break;
        case 4:
            $costoTotal = $diasDeInternacion * 132;
            echo "El costo de internación es de $costoTotal";
            break;
        case 5:
            $costoTotal = $diasDeInternacion * 138;
            echo "El costo de internación es de $costoTotal";
            break;
        }
    }else {
        echo "Ha ingresado un tipo de enfermedad inválido";
    }

?>