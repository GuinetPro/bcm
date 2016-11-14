<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
  /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'regiones';

	protected $fillable = ['nombre'];

    public function comunas(){
        return $this->hasMany('App\Model\Comuna');
    }
}
