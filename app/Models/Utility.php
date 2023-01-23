<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Maize\Markable\Markable;
use Maize\Markable\Models\Favorite;

class Utility extends Model
{
    use HasFactory, Markable;

    protected $table = 'utility';

    protected $fillable = [
        'name',
        'brand',
        'prices',
        'photo',
        'category',
        'description',
    ];

    protected static $marks = [
        Favorite::class,
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
