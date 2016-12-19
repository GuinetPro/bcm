<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Comuna extends Model
{
    protected $fillable = ['nombre','region_id'];

    public function region()
    {
        return $this->belongsTo('App\Model\Region','region_id');
    }
}
