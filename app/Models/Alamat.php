<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alamat extends Model
{
    use HasFactory;
    protected $table = 'alamats';

    protected $fillable = [
        'provinsi',
        'kotaorkab',
        'latitude',
        'longitude',
    ];
}
