<?php
// use App\Http\Controllers\ProfileController;
// use Illuminate\Http\Request; //Add
// use App\Http\Controllers\UsersController; //Add



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterController;

// Route::get('/user/menu', [UserController::class, 'index'])->middleware(['auth'])->name('user.menu');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register.form');
Route::post('/register', [RegisterController::class, 'register'])->name('register');
Route::get('/user/menu', [UserController::class, 'index'])->name('user.menu');
Route::get('/user/profile', [UserController::class, 'showProfile'])->name('user.profile');
Route::get('/user/bodydata', [UserController::class, 'showBodyData'])->name('user.bodydata');
Route::get('/user/bodydata/edit', [UserController::class, 'editBodyData'])->name('user.bodydata.edit');


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//本：ダッシュボード表示(users.blade.php)　！！！ここはユーザーように要変更！！！
// Route::get('/', [UsersController::class,'index'])->middleware(['auth'])->name('account_paage');
// Route::get('/account', [UsersController::class,'index'])->middleware(['auth'])->name('account');

// //本：追加 
// Route::post('/measurements',[UsersController::class,"store"])->name('measurement_store');

// //本：削除 
// Route::delete('/book/{book}', [UsersController::class,"destroy"])->name('book_destroy');

// //本：更新画面
// Route::post('/booksedit/{book}',[UsersController::class,"edit"])->name('book_edit'); //通常
// Route::get('/booksedit/{book}', [UsersController::class,"edit"])->name('edit');      //Validationエラーありの場合

// //本：更新画面
// Route::post('/books/update',[UsersController::class,"update"])->name('book_update');

// /**
// * 「ログイン機能」インストールで追加されています 
// */
// //Route::get('/dashboard', function () {
// //    return view('dashboard');
// //})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';