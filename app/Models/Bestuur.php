<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bestuur extends Model
{
    protected $table = 'bestuurpage';
    protected $fillable = ['naam', 'tussenvoegsel', 'achternaam', 'rol', 'image', 'email'];

  
}