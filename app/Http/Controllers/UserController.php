<?php

namespace App\Http\Controllers;

// use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\User;
use Validator;  //この2行を追加！
use Auth;       //この2行を追加！

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register.form');
Route::post('/register', [RegisterController::class, 'register'])->name('register');

class UserController extends Controller
{
    public function index()
    {
        //
        return view('user.menu');
        // return view('user.profile');
    //     $users = Users::orderBy('created_at', 'asc')->get();
    // return view('users', [
    //     'users' => $users
    // ]);
    }
    public function showProfile()
    {
        // ユーザーのプロフィール情報を取得するなどの処理を実装する
        return view('user.profile');
    }

    public function showBodyData()
    {
        // ユーザーの体型データを取得するなどの処理を実装する
        return view('user.bodydata');
    }
    public function editBodyData()
    {
        // ユーザーの体型データを編集するなどの処理を実装する
        return view('user.bodydata.edit');
    }
}


// class UsersController extends Controller
// {
//     /**
//      * Display a listing of the resource.
//      */
//     public function index()
//     {
//         //
//         $users = Users::orderBy('created_at', 'asc')->get();
//     return view('users', [
//         'users' => $users
//     ]);
//     }

//     /**
//      * Show the form for creating a new resource.
//      */
//     public function create()
//     {
//         //
//     }

//     /**
//      * Store a newly created resource in storage.
//      */
//     public function store(Request $request)
//     {
//         //
//         //バリデーション
//     $validator = Validator::make($request->all(), [
//          'item_name' => 'required|min:3|max:255',
//          'item_number' => 'required | min:1 | max:3',
//          'item_amount' => 'required | max:6',
//          'published'   => 'required',
//     ]);

//     //バリデーション:エラー 
//     if ($validator->fails()) {
//         return redirect('/')
//             ->withInput()
//             ->withErrors($validator);
//     }
//     //以下に登録処理を記述（Eloquentモデル）

//   // Eloquentモデル
//   $books = new User;
//   $books->item_name   = $request->item_name;
//   $books->item_number = $request->item_number;
//   $books->item_amount = $request->item_amount;
//   $books->published   = $request->published;
//   $books->save(); 
// //   return redirect('/');
//     }

//     /**
//      * Display the specified resource.
//      */
//     public function show(users $users)
//     {
//         //
//     }

//     /**
//      * Show the form for editing the specified resource.
//      */
//     public function edit(users $users)
//     {
//         //
//     }

//     /**
//      * Update the specified resource in storage.
//      */
//     public function update(Request $request, users $users)
//     {
//         //
//     }

//     /**
//      * Remove the specified resource from storage.
//      */
//     public function destroy(users $users)
//     {
//         //
//     }
// }
