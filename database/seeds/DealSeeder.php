<?php

use Illuminate\Database\Seeder;
use App\Models\Deal;

class DealSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Deal::create([
            'status_id' => 1,
            'client_id' => 1,
            'name' => 'Покупка золота 999 пробы. Срочно!!!',
        ]);
        Deal::create([
            'status_id' => 2,
            'client_id' => 1,
            'name' => 'Продажа серебра 525 пробы. Срочно!!!',
        ]);
        Deal::create([
            'status_id' => 1,
            'client_id' => 3,
            'name' => 'Покупка золота 999 пробы. Срочно!!!',
        ]);
        Deal::create([
            'status_id' => 2,
            'client_id' => 3,
            'name' => 'Продажа серебра 525 пробы. Срочно!!!',
        ]);
    }
}
