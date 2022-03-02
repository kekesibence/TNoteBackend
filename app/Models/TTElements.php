<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TTElements extends Model
{
    use HasFactory;

    protected $fillable = [
        'ttid',
        'day',
        'title',
        'description',
        'start',
        'end',
        'repeating'
    ];
}
