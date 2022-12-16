<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utility extends Model
{
    use HasFactory;

    protected $table = 'utility';

    protected $fillable = [
        'name',
        'brand',
        'prices',
        'photo',
        'category',
        'description',
    ];
}
