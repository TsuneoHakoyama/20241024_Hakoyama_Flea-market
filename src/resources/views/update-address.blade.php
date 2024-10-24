@extends('layouts.app')

@section('page-title')
住所登録
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/update-address.css') }}">
@endsection

@section('content')
<main class="main-board">
    <div class="title">
        <p>住所の変更</p>
    </div>
    <form action="/purchase/address/update" method="post" class="input-form">
        @csrf
        <input type="hidden" name="item_id" value="{{ $item_id }}">
        <div class="input-postcode">
            郵便番号<br>
            <div class="error-message">
                @if ($errors->has('postcode'))
                {{ $errors->first('postcode')}}
                @endif
            </div>
            <input type="text" name="postcode" value="{{ optional($profile)->postcode }}">
        </div>
        <div class="input-address">
            住所<br>
            <div class="error-message">
                @if ($errors->has('address'))
                {{ $errors->first('address')}}
                @endif
            </div>
            <input type="text" name="address" value="{{ optional($profile)->address }}">
        </div>
        <div class="input-building">
            建物名<br>
            <input type="text" name="building" value="{{ optional($profile)->building }}">
        </div>
        <div class="submit">
            <button type="submit">更新する</button>
        </div>
    </form>
</main>
@endsection