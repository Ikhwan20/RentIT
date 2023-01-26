<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $table = 'images';

    protected $fillable = ['image_before', 'image_after'];

    public function order()
{
    return $this->belongsTo(Order::class);
}

}
