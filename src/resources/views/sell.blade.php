@extends('layouts.app')

@section('page-title')
出品ページ
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/sell.css') }}">
@endsection

@section('logo')
<div class="logo-link">
    <a href="{{ route('home') }}"><img src="{{ asset('storage/images/logo.svg') }}" alt=""></a>
</div>
@endsection

@section('content')
<main class="main-board">
    <form action="/sell" method="post" enctype="multipart/form-data" accept="image/png, image/jpeg">
        @csrf
        <div class="title">
            <p>商品の出品</p>
        </div>
        <div class="item-image">
            商品画像<br>
            <div class="image-card">
                <label class="label" for="image">
                    <input type="file" name="image" id="image">画像を選択する
                </label>
                <p id="upload-file">選択されていません</p>
                <script src="{{ asset('js/filename.js') }}"></script>
            </div>
            <div class="error-message">
                @if ($errors->has('image'))
                {{ $errors->first('image')}}
                @endif
            </div>
        </div>
        <div class="input-form">
            <div class="item-class">
                <div class="sub-title">
                    <p>商品の詳細</p>
                </div>
                <p>カテゴリー</p>
                <div class="error-message">
                    @if ($errors->has('category_id'))
                    {{ $errors->first('category_id')}}
                    @endif
                </div>
                <select name="category_id" id="">
                    <option value="">選択してください</option>
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->category }}</option>
                    @endforeach
                </select>
                <p>商品の状態</p>
                <div class="error-message">
                    @if ($errors->has('condition_id'))
                    {{ $errors->first('condition_id')}}
                    @endif
                </div>
                <select name="condition_id" id="">
                    <option value="">選択してください</option>
                    @foreach ($conditions as $condition)
                    <option value="{{ $condition->id }}">{{ $condition->condition }}</option>
                    @endforeach
                </select>
            </div>
            <div class="item-info">
                <div class="sub-title">
                    <p>商品名と説明</p>
                </div>
                <p>商品名</p>
                <div class="error-message">
                    @if ($errors->has('name'))
                    {{ $errors->first('name')}}
                    @endif
                </div>
                <input type="text" name="name">
                <p>ブランド名</p>
                <div class="error-message">
                    @if ($errors->has('company_id'))
                    {{ $errors->first('company_id')}}
                    @endif
                </div>
                <select name="company_id" id="">
                    <option value="">選択してください</option>
                    @foreach ($companies as $company)
                    <option value="{{ $company->id }}">{{ $company->name }}</option>
                    @endforeach
                </select>
                <p>商品の説明</p>
                <div class="error-message">
                    @if ($errors->has('description'))
                    {{ $errors->first('description')}}
                    @endif
                </div>
                <input type="text" name="description">
            </div>
            <div class="item-price">
                <div class="sub-title">
                    <p>販売価格</p>
                </div>
                <p>販売価格</p>
                <div class="error-message">
                    @if ($errors->has('price'))
                    {{ $errors->first('price')}}
                    @endif
                </div>
                <input type="text" name="price">
            </div>
            <div class="submit">
                <button type="submit">出品する</button>
            </div>
        </div>
    </form>
</main>
@endsection