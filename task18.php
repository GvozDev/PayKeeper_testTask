<?php
error_reporting(0);

$N_number = (int)$argv[1];
$M_number = (int)$argv[2];

if ($N_number == NULL OR $M_number == NULL) {
    echo "[Ошибка!]: Вы должны ввести два числа через пробел!\n";
} else {

    if (is_numeric($N_number) AND is_numeric($M_number)) { //true - число или строка

        if (is_int($N_number) AND is_int($M_number)) { //true - целое число

            if ($N_number >= 0 AND $M_number >= 0) {

                $N_factorial = 1;
                for ($i = 1; $i <= $N_number; $i++) {
                    $N_factorial = $N_factorial * $i;
                }

                $M_factorial = 1;
                for ($i = 1; $i <= $M_number; $i++) {
                    $M_factorial = $M_factorial * $i;
                }

                $answer = $N_factorial / $M_factorial;
                echo "[Ответ]: " . $answer . "\n";

            } else { //Число является отрицательным
                echo "[Ошибка!]: Одно из чисел отрицательное!\n";
            }

        } else { //false - другое число
            echo "[Ошибка!]: Одно из чисел не целое или вовсе не число!\n";
        }

    } else { //false - строка
        echo "[Ошибка!]: Одно из чисел является строкой!\n";
    }
}
?>