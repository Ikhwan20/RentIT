<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'order';

    protected $fillable = [
        'duration',
        'start',
        'end',
        'totalPrice',
        'renter',
        'utility',
        'active',
        'ended'
    ];

    public function utility()
    {
        return $this->belongsTo(Utility::class);
    }

    public function image()
{
    return $this->hasOne(Image::class);
}

}
