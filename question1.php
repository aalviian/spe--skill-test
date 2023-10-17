<?php

function narcissisticNumber($strval) {
    $sum = 0;
    $length = strlen($strval);

    for ($i = 0; $i < $length; $i++) {
        $sum = $sum + pow(intval($strval[$i]), $length);
    }
    $number = intval($strval);
    if ($number != $sum) {
        return "false";
    }

    return "true";
}

$strval = "153";
echo narcissisticNumber($strval);