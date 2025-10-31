<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Указываем имя таблицы (необязательно, если совпадает с именем модели)
    protected $table = 'products';

    // Разрешаем массовое присвоение для этих полей
    protected $fillable = [
        'name',
        'description',
        'price',
        'amount'
    ];

    // Поля которые должны быть датами (добавляем к стандартным created_at/updated_at)
    protected $dates = [
        'created_at',
        'updated_at'
    ];
}
