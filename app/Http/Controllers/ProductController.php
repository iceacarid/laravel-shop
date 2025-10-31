<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the products.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // НОВЫЙ КОД - данные из базы данных
        $products = Product::all();

        return view('products.index', compact('products'));
    }
}
