<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skate extends Model
{
    use HasFactory;

    
    protected $fillable = ['title', 'description', 'category', 'price', 'img', 'owner'];
}
