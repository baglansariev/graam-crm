<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Deal extends Model
{
    protected $fillable = ['status_id', 'client_id', 'name'];

    public function client()
    {
        return $this->belongsTo('App\Models\Client');
    }

    public function status()
    {
        return $this->belongsTo('App\Models\DealStatus', 'status_id');
    }
}
