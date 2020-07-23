<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function clientSellApp(Request $request)
    {
        if ($request->has(['name', 'phone', 'text'])) {

            echo response()->json([
                'name' => $request->get('name'),
                'phone' => $request->get('phone'),
                'text' => $request->get('text'),
            ])->getContent();
        }
    }

    public function clientOwnPrice()
    {

    }
}
