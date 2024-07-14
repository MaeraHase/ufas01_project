@extends('layouts.app')

@section('content')
    <!--<x-slot name="header">-->
    <!--    <h2 class="font-semibold text-xl text-gray-800 leading-tight">-->
    <!--        プロフィール編集-->
    <!--    </h2>-->
    <!--</x-slot>-->
<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            アカウント登録情報編集
        </h2>
                   @if (session('success'))
                        <script>
                            alert('{{ session('success') }}');
                        </script>
                    @endif

                    <form method="POST" action="{{ route('user.profile') }}">
                        @csrf
                        <!-- カラム１ -->
                        <div class="mb-4">
                            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">名前</label>
                            <p><input id="name" type="text" name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('name', $user->name) }}" required></p>
                            @error('name')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- カラム２ -->
                        <div class="mb-4">
                            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">メールアドレス</label>
                            <p><input id="email" type="email" name="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('email', $user->email) }}" required></p>
                            @error('email')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- カラム３-->
                        <div class="mb-4">
                            <p>パスワード</p>
                            <!--<label for="password" class="block text-gray-700 text-sm font-bold mb-2">パスワード</label>-->
                            <!--<p><input id="password" type="password" name="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></p>-->
                            <p class="text-gray-600 text-sm">パスワードを変更する場合のみ入力してください。</p>
                            @error('password')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- カラム４ -->
                        <div class="mb-4">
                            <label for="new_password" class="block text-gray-700 text-sm font-bold mb-2">新規パスワード</label>
                            <p><input id="new_password" type="password" name="new_password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></p>
                            @error('new_password')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- カラム５ -->
                        <div class="mb-4">
                            <label for="new_password_confirmation" class="block text-gray-700 text-sm font-bold mb-2">新規パスワード確認</label>
                            <p><input id="new_password_confirmation" type="password" name="new_password_confirmation" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></p>
                            @error('new_password_confirmation')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- カラム６ -->
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2">性別</label>
                            <div class="flex items-center">
                                <label class="mr-4">
                                    <input type="radio" name="sex" value="1" class="mr-1" {{ old('sex', $user->sex) == '1' ? 'checked' : '' }}>
                                    女性
                                </label>
                                <label class="mr-4">
                                    <input type="radio" name="sex" value="2" class="mr-1" {{ old('sex', $user->sex) == '2' ? 'checked' : '' }}>
                                    男性
                                </label>
                                <label>
                                    <input type="radio" name="sex" value="0" class="mr-1" {{ old('sex', $user->sex) == '0' ? 'checked' : '' }}>
                                    その他
                                </label>
                            </div>
                            @error('gender')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- カラム７ -->
                        <div class="mb-4">
                            <p>住所</p>
                            <!--<label for="address_code" class="block text-gray-700 text-sm font-bold mb-2">郵便番号</label>-->
                            <p><input id="address_code" type="text" name="address_code" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('address_code', $user->address_code) }}" required placeholder="郵便番号"></p>
                            @error('address_code')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- カラム８ -->
                        <div class="mb-4">
                            <!--<label for="address" class="block text-gray-700 text-sm font-bold mb-2">住所</label>-->
                            <p><input id="address" type="text" name="address" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('address', $user->address) }}" required  required placeholder="住所"><p>
                            @error('address')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- カラム９ -->
                        <div class="mb-4">
                            <label for="phonenumber" class="block text-gray-700 text-sm font-bold mb-2">電話番号</label>
                            <p><input id="phonenumber" type="text" name="phonenumber" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('phonenumber', $user->phonenumber) }}" required></p>
                            @error('phonenumber')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- カラム１０ -->
                        <div class="mb-4">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                更新
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
