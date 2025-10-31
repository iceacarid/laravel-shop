@extends('layouts.app')

@section('title', 'Каталог товаров - MyShop')

@section('content')
    <h1 class="main-title">Наши товары</h1>

    @if($products->count() > 0)
        <div class="products-grid">
            @foreach($products as $product)
                <div class="product-card">
                    <h3 class="product-title">{{ $product->name }}</h3>
                    <div class="product-category">Артикул: #{{ $product->id }}</div>

                    @if($product->description)
                        <p class="product-description">{{ $product->description }}</p>
                    @else
                        <p class="product-description text-muted">Описание отсутствует</p>
                    @endif

                    <div class="product-price">{{ number_format($product->price, 0, '', ' ') }} ₽</div>

                    <div class="product-actions">
                        @if($product->amount > 0)
                            <span class="in-stock">В наличии: {{ $product->amount }} шт.</span>
                            <button class="btn btn-primary">В корзину</button>
                        @else
                            <span class="out-of-stock">Товар не в наличии</span>
                            <button class="btn btn-secondary" disabled>Нет в наличии</button>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="no-products">
            <h2>Товары пока не добавлены</h2>
            <p>Скоро здесь появятся новые товары</p>
        </div>
    @endif
@endsection
