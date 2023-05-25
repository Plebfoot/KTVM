<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bestuur extends Model
{
    protected $table = 'bestuurpage';
    protected $fillable = ['voornaam', 'achternaam', 'rol', 'image', 'email'];

  
}