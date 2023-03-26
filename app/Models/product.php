<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'price', 'img', 'description']; //столбики в базе данных "имя, цена, картинка, описание"
}
