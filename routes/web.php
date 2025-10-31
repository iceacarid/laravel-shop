<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Маршрут для страницы товаров
Route::get('/products', [ProductController::class, 'index']);

// Дополнительно: создаем заглушки для других страниц меню
Route::get('/contacts', function () {
    return "Страница контактов - скоро здесь будет информация";
});
