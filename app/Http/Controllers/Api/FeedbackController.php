<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function clientSellApp(Request $request)
    {
        if ($request->has(['name', 'phone', 'text'])) {

            // Операции с полученными данными

            echo response()->json([
                    'status' => true,
                    'message' => 'Спасибо за вашу заявку! Наш менеджер скоро вам позвонит!',
                ])->getContent();
        }
    }

    public function clientOwnPrice()
    {

    }
}
