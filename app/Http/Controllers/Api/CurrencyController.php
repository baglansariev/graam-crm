<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    public function getRates()
    {
        $data = [
            'dollar' => [
                'value' => 71.43
            ],
            'gold' => [
                'value' => 1816.89
            ],
        ];

        echo response()->json($data)->getContent();
    }
}
