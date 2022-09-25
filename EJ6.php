<?php
#Escribir un algoritmo que permita dada la fecha de nacimiento de una persona saber cuál es su signo
#zodiacal.

$dia = readline('Ingrese el día de su cumpleaños: ');
$mes = readline('Ingrese el mes de su cumpleaños: ');

if ($dia>=1 && $dia<=31) {
    switch ($mes) {
        case 1:
            if ($dia <=20) {
                echo "Ud es de Capricornio";
            }else {"Ud es de Acuario";
            }
            break;
        case 2:
            if ($dia <=19) {
                echo "Ud es de Acuario";
            }else {"Ud es de Pisis";
            }
            break;
        case 3:
            if ($dia <=20) {
                echo "Ud es de Pisis";
            }else {"Ud es de Aries";
            }
            break;
        case 4:
            if ($dia <=20) {
                echo "Ud es de Aries";
            }else {"Ud es de Tauro";
            }
            break;
        case 5:
            if ($dia <=19) {
                echo "Ud es de Tauro";
            }else {"Ud es de Geminis";
            }
            break;
        case 6:
            if ($dia <=20) {
                echo "Ud es de Geminis";
            }else {"Ud es de Cáncer";
            }
            break;
        case 7:
            if ($dia <=20) {
                echo "Ud es de Cáncer";
            }else {"Ud es de Leo";
            }
            break;
        case 8:
            if ($dia <=19) {
                echo "Ud es de Leo";
            }else {"Ud es de Virgo";
            }
            break;
        case 9:
            if ($dia <=20) {
                echo "Ud es de Virgo";
            }else {"Ud es de Libra";
            }
            break;
        case 10:
            if ($dia <=20) {
                echo "Ud es de Libra";
            }else {"Ud es de Escorpio";
            }
            break;
        case 11:
            if ($dia <=19) {
                echo "Ud es de Escorpio";
            }else {"Ud es de Sagitario";
            }
            break;
        case 12:
            if ($dia <=20) {
                echo "Ud es de Sagitario";
            }else {"Ud es de Capricornio";
            }
            break;
        default:
            echo "Mes inválido";
        }
    }else{
        echo "Ha ingresado una fecha inválida";
}



?>