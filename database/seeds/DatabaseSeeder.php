<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(ManagerSeeder::class);
         $this->call(DealSeeder::class);
         $this->call(DealStatusesSeeder::class);
    }
}
