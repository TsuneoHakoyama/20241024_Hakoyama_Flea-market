@extends('layouts.app')

@section('page-title')
メール送信画面
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/send-email.css') }}">
@endsection

@section('logo')
<div class="logo-link">
    <a href="{{ route('home') }}"><img src="{{ asset('storage/images/logo.svg') }}" alt=""></a>
</div>
@endsection

@section('link')
<div class="link-list">
    <li><a href="{{ route('admin.index') }}">ユーザー一覧</a></li>
</div>
@endsection

@section('content')
<div class="main-board">
    <div class="title">
        <p>メール送信画面</p>
        <div class="message">
            @if(session('email_msg'))
            {{ session('email_msg')}}
            @endif
        </div>
    </div>
    <form action="{{ route('admin.email.send') }}" method="post">
        @csrf
        <div class="to">
            <p>宛先</p>
            <div class="error-message">
                @if ($errors->has('to'))
                {{ $errors->first('to')}}
                @endif
            </div>
            <select name="to" size="5">
                @foreach ($users as $user)
                <option value="{{ $user->email }}">{{ optional($user->profile)->name." ".$user->email }}</option>
                @endforeach
            </select>
        </div>
        <div class="subject">
            <p>件名</p>
            <div class="error-message">
                @if ($errors->has('subject'))
                {{ $errors->first('subject')}}
                @endif
            </div>
            <input type="text" name="subject">
        </div>
        <div class="content">
            <p>本文</p>
            <div class="error-message">
                @if ($errors->has('content'))
                {{ $errors->first('content')}}
                @endif
            </div>
            <textarea name="content" rows="10" cols="40"></textarea>
        </div>
        <div class="send">
            <button type="submit">送信</button>
        </div>
    </form>
</div>
@endsection