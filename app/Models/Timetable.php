<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timetable extends Model
{
    use HasFactory;

    protected $fillable = [
        'userId',
        'name'
    ];

    public function getTTElements() {
        return $this->hasMany(TTElements::class, 'ttid', 'id');
    }

    protected $fillable = [
        'userId',
        'name'
    ];
}
