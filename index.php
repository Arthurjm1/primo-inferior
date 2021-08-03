<?php

function PrimoInferior(int $num): int
{
    if ($num < 0) {
        return 0;
    }

    $inferior = $num - 1;
    $divisores = 0;
    for ($i = 2; $i < $inferior; $i++) {
        if ($inferior % $i == 0) {
            $divisores++;
        }
    }

    if ($divisores != 0) {
        return primoInferior($inferior);
    }

    return $inferior;
}