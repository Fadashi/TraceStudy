<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institusi extends Model
{
    use HasFactory;

    protected $table = 'institusis';

    protected $fillable = [
        'nama',
        'logo',
        'alamat',
        'email',
    ];
} 