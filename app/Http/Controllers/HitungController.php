<?php

namespace App\Http\Controllers;

class HitungController extends Controller {
    public function hitung($number1, $number2, $operation) {
        $result = 0;
        $operation = strtolower($operation);
        if ($operation === 'tambah') $result = $number1 + $number2;
        elseif ($operation === 'kurang') $result = $number1 - $number2;
        elseif ($operation === 'kali') $result = $number1 * $number2;
        elseif ($operation === 'bagi') {
            if ($number2 != 0) $result = $number1 / $number2;
            else $message = 'Error: Division by zero';
        } else {
            $message = 'Error: Invalid operation';
        }

        if (isset($message)) {
            return view('pages.hitung', ['result' => $message]);
        }

        $message = "Hasil dari $number1 $operation $number2 adalah " . (is_numeric($result) ? number_format($result, 2) : $result);
        return view('pages.hitung', ['result' => $message]);
    }
}
