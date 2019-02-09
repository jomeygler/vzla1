<?php

namespace vzla1;

use Illuminate\Database\Eloquent\Model;

class Activo extends Model
{
    protected $fillable = ['descrip','cod','fecha_ini','fecha_fin','valor','foto'];
}
