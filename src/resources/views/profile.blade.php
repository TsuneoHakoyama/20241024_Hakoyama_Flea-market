@extends('layouts.app')

@section('page-title')
プロフィール編集ページ
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endsection

@section('logo')
<div class="logo-link">
    <a href="{{ route('home') }}"><img src="{{ asset('storage/images/logo.svg') }}" alt=""></a>
</div>
@endsection

@section('search')
<form action="/search" method="post" class="search-form">
    @csrf
    <input type="text" name="keyword" placeholder="なにをお探しですか？">
    <button type="submit">検索</button>
</form>
@endsection

@section('link')
<div class="link-list">
    <li><a href="{{ route('logout') }}">ログアウト</a></li>
    <li><a href="{{ route('mypage') }}">マイページ</a></li>
    <li><a href="{{ route('sell') }}" class="put-up">出品</a></li>
</div>
@endsection

@section('content')
<main class="main-board">
    <div class="title">
        <p>プロフィール設定</p>
    </div>
    <div class="input-form">
        <form action="/profile/store" method="post" enctype="multipart/form-data">
            @csrf
            <div class="user-image">
                <img src="{{ asset('storage/images/users/default_user_icon.png') }}" alt="ユーザー画像">
                <div class="label-card">
                    <label class="label" for="image">
                        <input type="file" name="image" id="image">画像を選択する
                    </label>
                    <p id="upload-file">選択されていません</p>
                    <script src="{{ asset('js/filename.js') }}"></script>
                </div>
            </div>
            <div class="user-name">
                ユーザー名<br>
                <div class="error-message">
                    @if ($errors->has('name'))
                    {{ $errors->first('name')}}
                    @endif
                </div>
                <input type="text" name="name" value="{{ optional($profile)->name }}">
            </div>
            <div class="postcode">
                郵便番号<br>
                <div class="error-message">
                    @if ($errors->has('postcode'))
                    {{ $errors->first('postcode')}}
                    @endif
                </div>
                <input type="text" name="postcode" value="{{ optional($profile)->postcode }}">
            </div>
            <div class="address">
                住所<br>
                <div class="error-message">
                    @if ($errors->has('address'))
                    {{ $errors->first('address')}}
                    @endif
                </div>
                <input type="text" name="address" value="{{ optional($profile)->address }}">
            </div>
            <div class="building">
                建物名<br>
                <input type="text" name="building" value="{{ optional($profile)->building }}">
            </div>
            <div class="submit">
                <button type="submit">更新する</button>
            </div>
        </form>
    </div>


</main>
@endsection