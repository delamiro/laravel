<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class festival extends Model
{
    use HasFactory;
    protected $fillable = [
        'naam',
        'adres',
        'max_mensen',
        'verkocht',
        'style',
        'kosten',
        'begin_datum',
        'eind_datum',
    ];
}
