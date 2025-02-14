<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

//Generated By PlantUML Command
class Recinto extends Model
{
    protected $fillable = [
        'capacidad',
        'name',
        'tiporecinto',
    ];

    public function recintoanimals()
    {
        return $this->hasMany('App\Models\RecintoAnimal', 'recinto_id');
    }

    public function especies()
    {
        return $this->hasMany('App\Models\Especie', 'especie_id');
    }
}
