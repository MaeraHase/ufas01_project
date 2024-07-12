<!-- resources/views/user/menu.blade.php -->

@extends('layouts.app') <!-- レイアウトを適宜指定 -->

@section('content')
    <div>
        <h1>ユーザーメニュー</h1>

        <ul>
            <li><a href="{{ route('user.profile') }}">アカウント登録情報</a></li>
            <li><a href="{{ route('user.bodydata') }}">体型データの確認・変更</a></li>
        </ul>
    </div>
@endsection