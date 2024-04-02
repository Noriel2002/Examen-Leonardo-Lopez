<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

//Generated By PlantUML Command
class Especie extends Model
{
    protected $fillable = [
        'name',
        'description',
        'recinto_id',
    ];

    public function animals()
    {
        return $this->hasMany('App\Models\Animal', 'especie_id');
    }

    public function recinto()
    {
        return $this->belongsTo('App\Models\Recinto', 'recinto_id');
    }
}
