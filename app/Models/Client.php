<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['external_id', 'manager_id'];

    public function manager()
    {
        return $this->belongsTo('App\Models\Manager', 'manager_id');
    }
}
