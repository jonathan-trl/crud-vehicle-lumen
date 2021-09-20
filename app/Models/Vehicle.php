<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
   protected $table = 'Vehicle';

   protected $fillable = [
       'placa',
       'combustivel',
       'fabricante'
   ];
}
