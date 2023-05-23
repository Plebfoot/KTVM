<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{
    use HasFactory;
    protected $table = 'contact_messages';
    protected $fillable = [
        'occasion',
        'comments',
        'contact_name',
        'contact_email',
        'contact_infix',
        'contact_lastname',
        'contact_phone',
    ];
}