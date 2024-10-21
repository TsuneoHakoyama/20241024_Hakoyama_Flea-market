@extends('layouts.app')

@section('page-title')
購入完了
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/purchase-complete.css') }}">
@endsection

@section('logo')
<div class="logo-link">
    <a href="{{ route('home') }}"><img src="{{ asset('storage/images/logo.svg') }}" alt=""></a>
</div>
@endsection

@section('content')
<main class="main-board">
    <div class="message">
        購入が完了しました
    </div>
    <div class="for-home">
        <a href="{{ route('home') }}">Homeへ</a>
    </div>
</main>
@endsection