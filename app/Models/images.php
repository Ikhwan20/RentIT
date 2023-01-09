<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\ImageController;

class images extends Model
{
    use HasFactory;

    protected $fillable = ['image_path', 'image_path2'];
}
