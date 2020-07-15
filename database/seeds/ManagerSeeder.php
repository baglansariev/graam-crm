<?php

use Illuminate\Database\Seeder;
use App\Models\Manager;

class ManagerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Manager::create([
            'name' => 'Иванов Александр',
            'email' => 'alex.mail@example.com',
            'phone' => '(925) 505 05 05',
            'photo' => 'images/managers/sasha.jpg',
        ]);
        Manager::create([
            'name' => 'Алена Цветкова',
            'email' => 'alyona.mail@example.com',
            'phone' => '(925) 400 03 05',
            'photo' => 'images/managers/alyona.jpg',
        ]);
        Manager::create([
            'name' => 'Мария Артемова',
            'email' => 'marry.mail@example.com',
            'phone' => '(925) 300 03 05',
            'photo' => 'images/managers/mariya.jpg',
        ]);
        Manager::create([
            'name' => 'Иван Белов',
            'email' => 'ivan.mail@example.com',
            'phone' => '(925) 120 03 05',
            'photo' => 'images/managers/ivan.jpg',
        ]);
        Manager::create([
            'name' => 'Виктория Александрова',
            'email' => 'vika.mail@example.com',
            'phone' => '(925) 128 05 05',
            'photo' => 'images/managers/vika.jpg',
        ]);
    }
}
