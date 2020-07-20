<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DealStatus extends Model
{
    protected $fillable = ['name'];

    public function deals()
    {
        return $this->hasMany('App\Models\Deal', 'status_id');
    }
}
