@extends('layouts.app')

@section('content')
    <div>
        <h2>アカウント登録情報</h2>
        <!-- ユーザーのプロフィール情報を表示 -->
    </div>
     <div class="flex bg-gray-100">

        <!--左エリア[START]--> 
        <div class="text-gray-700 text-left px-4 py-4 m-2">
            
            <!--<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">-->
            <!--    <div class="p-6 bg-white border-b border-gray-500 font-bold">-->
            <!--        アカウント-->
            <!--    </div>-->
            <!--</div>-->


            <!-- 本のタイトル -->
            
            <form action="{{ url('user.profile') }}" method="POST" class="w-full max-w-lg">
                @csrf
                  <div class="flex flex-col px-2 py-2">
                   <!-- カラム１ -->
                    <div class="w-full md:w-1/1 px-3 mb-2 md:mb-0">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                       名前
                      </label>
                      <p><input name="user_name" class="appearance-none block w-full text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="text" placeholder=""></p>
                    </div>
                     <!-- カラム２ -->
                    <div class="w-full md:w-1/1 px-3 mb-2 md:mb-0">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                       メールアドレス
                      </label>
                      <p><input name="user_name" class="appearance-none block w-full text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="text" placeholder=""></p>
                    </div>
                    <!-- カラム３ -->
                    <div class="w-full md:w-1/1 px-3">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                        パスワード
                      </label>
                      <p><input name="email" class="appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder=""></p>
                    </div>
                    <!-- カラム３ -->
                    <!--<div class="w-full md:w-1/1 px-3 mb-2 md:mb-0">-->
                    <!--  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">-->
                    <!--    Password-->
                    <!--  </label>-->
                    <!--  <input name="password" class="appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder="">-->
                    <!--</div>-->
                    <!-- カラム４ -->
                    <div class="w-full md:w-1/1 px-3 mb-6 md:mb-0">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                        性別
                        <p><input type="radio" id="1" name="1"><label for="1">女性</label>
                        <input type="radio" id="2" name="2"><label for="2">男性</label>
                        <input type="radio" id="3" name="3"><label for="3">その他</label></p>

                         <!--<ul>-->
                         <!--<li>女性</li>-->
                         <!--<li>男性</li>-->
                         <!--<li>その他</li>-->
                         <!--</ul>-->
                      </label>
                      <!--<input name="sex" class="appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">-->
                    </div>
                  </div>
                  <!-- カラム５ -->
                  <div class="w-full md:w-1/1 px-3">
                      <p>
                        住所
                      </p>
                      <input name="email" class="appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder="郵便番号">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                        　　　
                      </label>
                      <p><input name="email" class="appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder=""><p>
                    </div>
                    <!-- カラム6 -->
                    <div class="w-full md:w-1/1 px-3">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                        電話番号
                      </label>
                      <p><input name="email" class="appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder=""></p>
                    </div>
                  <!-- カラム7 -->
                  <div class="flex flex-col">
                      <div class="text-gray-700 text-center px-4 py-2 m-2">
                             <x-button class="bg-blue-500 rounded-lg">編集</x-button>
                      </div>
                   </div>
            </form>
        </div>
        <!--左エリア[END]--> 
    
    

</div>
 <!--全エリア[END]-->
@endsection