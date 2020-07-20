<?php

use Illuminate\Database\Seeder;
use App\Models\DealStatus;

class DealStatusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DealStatus::create(['name' => 'на утверждении у координатора']);
        DealStatus::create(['name' => 'на обработке']);
        DealStatus::create(['name' => 'сделка подтверждена,пришлите документы на оплату']);
        DealStatus::create(['name' => 'новое предложение клиенту']);
        DealStatus::create(['name' => 'запрос платежного документа']);
        DealStatus::create(['name' => 'проверка платежных документов (звонок от менеджера с финальном подтверждением проведения сделки']);
        DealStatus::create(['name' => 'посылка в пути']);
        DealStatus::create(['name' => 'посылка на складе (на складе покупателя)']);
        DealStatus::create(['name' => 'получен статус плавки']);
        DealStatus::create(['name' => 'сверка веса']);
        DealStatus::create(['name' => 'сделка закрыта']);
    }
}
