<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function getOffers($name, $type, $weight)
    {
        echo response()
            ->json( $this->getOffersData() )
            ->getContent();
    }

    // Просто данные которые нужно заменить
    public function getOffersData()
    {
        return [
            0 => [
                'company_name'  => 'Первый ювелирный',
                'price'         => 109000,
                'duration'      => 3,
            ],
            1 => [
                'company_name'  => 'Новосибирский аффинажный завод',
                'price'         => 125000,
                'duration'      => 14,
            ],
            2 => [
                'company_name'  => 'Красцветмет',
                'price'         => 122000,
                'duration'      => 14,
            ],
            3 => [
                'company_name'  => 'Первый ювелирный',
                'price'         => 109000,
                'duration'      => 3,
            ],
            4 => [
                'company_name'  => 'Новосибирский аффинажный завод',
                'price'         => 125000,
                'duration'      => 14,
            ],
            5 => [
                'company_name'  => 'Красцветмет',
                'price'         => 122000,
                'duration'      => 14,
            ],
        ];
    }
}
