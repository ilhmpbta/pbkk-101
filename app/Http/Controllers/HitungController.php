<?php

namespace App\Http\Controllers;

class HitungController extends Controller {
    public function hitung($number1, $number2, $operation) {
        $result = 0;
        $operation = strtolower($operation);
        if ($operation === 'tambah') $result = $number1 + $number2;
        if ($operation === 'kurang') $result = $number1 - $number2;
        if ($operation === 'kali') $result = $number1 * $number2;
        if ($operation === 'bagi') {
            if ($number2 != 0) $result = $number1 / $number2;
            else $result = 'Error: Division by zero';
        }

        return "Hasil dari $number1 $operation $number2 adalah $result";
    }
}
