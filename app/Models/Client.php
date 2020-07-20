<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [/*'external_id',*/'id', 'manager_id'];

    public function manager()
    {
        return $this->belongsTo('App\Models\Manager', 'manager_id');
    }

    public function deals()
    {
        return $this->hasMany('App\Models\Deal', 'client_id');
    }
}
