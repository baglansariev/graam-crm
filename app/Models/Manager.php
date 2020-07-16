<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'photo',
    ];

    public function clients()
    {
        return $this->hasMany('App\Models\Client', 'manager_id');
    }

    public function client()
    {
        return $this->hasOne('App\Models\Client', 'manager_id');
    }

    public static function getManagerForClient() : object
    {
        $managers = self::all();
        $manager_data = [];

        // Выбираем менеджера с наименьшим количеством клиентов
        foreach ($managers as $manager) {
            $clients_count = $manager->clients()->count();
            if (!isset($manager_data['clients']) || $manager_data['clients'] > $clients_count) {
                $manager_data = [
                    'id' => $manager->id,
                    'clients' => $clients_count,
                ];
            }
        }

        return self::find($manager_data['id']);
    }
}
