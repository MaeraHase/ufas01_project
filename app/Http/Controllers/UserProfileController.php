<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

// Route::get('/user/profile', [UserProfileController::class, 'showProfile'])->middleware(['auth'])->name('user.profile');
// Route::post('/user/profile', [UserProfileController::class, 'updateProfile'])->middleware(['auth'])->name('user.profile.update');

class UserProfileController extends Controller
{
    //
    public function showProfile()
    {
        $user = Auth::user();
        return view('user.profile', ['user' => $user]);
        // return view('user.profile', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        // dump($request);

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . Auth::id(),
            // 'password' => 'nullable|string|min:8|confirmed',
            // 'new_password' => 'nullable|string|min:8|confirmed',
            'sex' => 'required|string|max:10',
            'address_code' => 'nullable|string|max:10',
            'address' => 'nullable|string|max:255',
            'phonenumber' => 'nullable|string|max:20',
        ]);

        $user = Auth::user();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->sex = $request->input('sex'); // == 'female' ? 1 : ($request->input('sex') == 'male' ? 2 : 0);
        $user->address_code = $request->input('address_code');
        $user->address = $request->input('address');
        $user->phonenumber = $request->input('phonenumber');

        if ($request->filled('password')) {
            $user->password = Hash::make($request->input('password'));
        }

        $user->save();

        return redirect()->route('user.profile')->with('success', 'プロフィールが更新されました。');
    }
}
