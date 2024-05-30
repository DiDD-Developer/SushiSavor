<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dishes extends Model
{
    protected $table = 'dishes';

    protected $fillable = ['name', 'weight', 'price', 'category_id', 'image'];
    use HasFactory;
}
