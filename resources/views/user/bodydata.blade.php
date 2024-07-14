@extends('layouts.app')

@section('content')
    <div>
        <h2>体型データの確認・変更</h2>
        <!--更新完了後のアラート-->
        @if (session('success'))
                        <script>
                            alert('{{ session('success') }}');
                        </script>
                    @endif
        <!-- ユーザーの体型データを表示 -->
        <!--<form action="{{ route('user.profile') }}" method="POST" class="w-full max-w-lg">-->
        <form method="POST" action="{{ route('user.bodydata.update') }}">
                @csrf
                <!-- 身長 -->
                  <!--<div class="flex flex-col px-2 py-2">-->
                   <!-- カラム１ -->
                  <!--  <div class="w-full md:w-1/1 px-3 mb-2 md:mb-0">-->
                  <!--    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">-->
                  <!--    ⭐️ 身長-->
                  <!--    </label>-->
                  <!--    <p><input name="user_name" class="appearance-none block w-full text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="text" placeholder="cm"></p>-->
                  <!--  </div>-->
                  <div class="mb-4">
                            <label for="height" class="block text-gray-700 text-sm font-bold mb-2">身長</label>
                            <p><input id="height" type="text" name="height" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('height', optional($bodyMeasurement)->height ?? '') }}" required></p>
                            @error('height')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                    <!-- ⭐️体重 -->
                    <!--<div class="w-full md:w-1/1 px-3 mb-2 md:mb-0">-->
                    <!--  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">-->
                    <!--   体重-->
                    <!--  </label>-->
                    <!--  <p><input name="user_name" class="appearance-none block w-full text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="text" placeholder="kg"></p>-->
                    <!--</div>-->
                    <div class="mb-4">
                            <label for="weight" class="block text-gray-700 text-sm font-bold mb-2">体重</label>
                            <p><input id="weight" type="text" name="weight" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('weight', optional($bodyMeasurement)->weight ?? '') }}" required></p>
                            @error('weight')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                   <!-- ⭐️バスト -->
                    <!--<div class="w-full md:w-1/1 px-3 mb-2 md:mb-0">-->
                    <!--  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">-->
                    <!--   バスト-->
                    <!--  </label>-->
                    <!--  <p><input name="user_name" class="appearance-none block w-full text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="text" placeholder="cm"></p>-->
                    <!--</div>-->
                    <div class="mb-4">
                            <label for="bust" class="block text-gray-700 text-sm font-bold mb-2">バスト</label>
                            <p><input id="bust" type="text" name="bust" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('bust', optional($bodyMeasurement)->bust ?? '') }}" required></p>
                            @error('bust')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                    <!-- ⭐️アンダーバスト -->
                    <div class="mb-4">
                            <label for="under_bust" class="block text-gray-700 text-sm font-bold mb-2">アンダーバスト</label>
                            <p><input id="under_bust" type="text" name="under_bust" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('under_bust', optional($bodyMeasurement)->under_bust ?? '') }}" ></p>
                            @error('under_bust')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                    <!-- ⭐️ウエスト -->
                    <!--<div class="w-full md:w-1/1 px-3 mb-2 md:mb-0">-->
                    <!--  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">-->
                    <!--   ウエスト-->
                    <!--  </label>-->
                    <!--  <p><input name="user_name" class="appearance-none block w-full text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="text" placeholder="cm"></p>-->
                    <!--</div>-->
                    <div class="mb-4">
                            <label for="waist" class="block text-gray-700 text-sm font-bold mb-2">ウエスト</label>
                            <p><input id="waist" type="text" name="waist" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('waist', optional($bodyMeasurement)->waist ?? '') }}" required></p>
                            @error('waist')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                    <!-- ⭐️ヒップ -->
                    <!--<div class="w-full md:w-1/1 px-3 mb-2 md:mb-0">-->
                    <!--  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">-->
                    <!--   ヒップ-->
                    <!--  </label>-->
                    <!--  <p><input name="user_name" class="appearance-none block w-full text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="text" placeholder="cm"></p>-->
                    <!--</div>-->
                    <div class="mb-4">
                            <label for="hips" class="block text-gray-700 text-sm font-bold mb-2">ヒップ</label>
                            <p><input id="hips" type="text" name="hips" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('hips', optional($bodyMeasurement)->hips ?? '') }}" required></p>
                            @error('hips')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                    <!-- ⭐️股下 -->
                    <div class="w-full md:w-1/1 px-3 mb-2 md:mb-0">
                    <!--  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">-->
                    <!--   股下-->
                    <!--  </label>-->
                    <!--  <p><input name="user_name" class="appearance-none block w-full text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="text" placeholder="cm"></p>-->
                    <!--</div>-->
                    <div class="mb-4">
                            <label for="inseam" class="block text-gray-700 text-sm font-bold mb-2">股下</label>
                            <p><input id="inseam" type="text" name="inseam" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('inseam', optional($bodyMeasurement)->inseam ?? '') }}" ></p>
                            @error('inseam')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                    <!-- ⭐️肩幅 -->
                    <!--<div class="w-full md:w-1/1 px-3 mb-2 md:mb-0">-->
                    <!--  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">-->
                    <!--   肩幅-->
                    <!--  </label>-->
                    <!--  <p><input name="user_name" class="appearance-none block w-full text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="text" placeholder="cm"></p>-->
                    <!--</div>-->
                    <div class="mb-4">
                            <label for="shoulder_width" class="block text-gray-700 text-sm font-bold mb-2">肩幅</label>
                            <p><input id="shoulder_width" type="text" name="shoulder_width" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('shoulder_width', optional($bodyMeasurement)->shoulder_width ?? '') }}" ></p>
                            @error('shoulder_width')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                    <!-- ⭐️袖丈 -->
                    <!--<div class="w-full md:w-1/1 px-3 mb-2 md:mb-0">-->
                    <!--  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">-->
                    <!--   袖丈-->
                    <!--  </label>-->
                    <!--  <p><input name="user_name" class="appearance-none block w-full text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="text" placeholder="cm"></p>-->
                    <!--</div>-->
                    <div class="mb-4">
                            <label for="sleeve_length" class="block text-gray-700 text-sm font-bold mb-2">袖丈</label>
                            <p><input id="sleeve_length" type="text" name="sleeve_length" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('sleeve_length', optional($bodyMeasurement)->sleeve_length ?? '') }}" ></p>
                            @error('sleeve_length')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                    <!-- ⭐️足のサイズ -->
                    <div class="mb-4">
                            <label for="foot_size" class="block text-gray-700 text-sm font-bold mb-2">足のサイズ</label>
                            <input id="foot_size" type="text" name="foot_size" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('foot_size', optional($bodyMeasurement)->foot_size ?? '') }}" >
                            @error('foot_size')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                    <!-- ⭐️お悩み情報 -->
                    <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2">お悩み情報</label>
                            <div class="flex flex-wrap">
                                @php
                                    $concerns = ['胸が大きい', '肩幅が大きい', '腕が長い', '腕が短い', 'ヒップが大きい', '脚が短い', '脚が長い'];
                                    $userConcerns = optional($bodyMeasurement)->concerns ?? [];
                                    // $userConcerns = json_decode(optional($bodyMeasurement)->concerns ?? '', true) ?? [];
                                @endphp
                                @foreach ($concerns as $concern)
                                    <label class="mr-4">
                                        <input type="checkbox" name="concerns[]" value="{{ $concern }}" class="mr-1" {{ in_array($concern, $userConcerns) ? 'checked' : '' }}>
                                        {{ $concern }}
                                    </label>
                                @endforeach
                            </div>
                            @error('concerns')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                    <!-- ⭐️更新ボタン -->
    <!--              <div class="flex flex-col">-->
    <!--                  <div class="text-gray-700 text-center px-4 py-2 m-2">-->
    <!--                         <x-button class="bg-blue-500 rounded-lg">編集</x-button>-->
    <!--                  </div>-->
    <!--</div>-->
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
