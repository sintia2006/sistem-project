<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Models\UserAccount;

// ====================
// LOGIN
// ====================

Route::get('/', function () {
    return redirect()->route('login');
})->name('home');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', function (Request $request) {

    $request->validate([
        'username' => 'required',
        'password' => 'required',
    ]);

    $akun = UserAccount::where('username', $request->username)->first();

    if ($akun && $akun->password === $request->password) {

        session([
            'login' => true,
            'username' => $akun->username
        ]);

        return redirect()->route('dashboard');
    }

    return back()->with('error', 'Username atau password salah.');

})->name('login.proses');


// ====================
// REGISTER
// ====================

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::post('/register', function (Request $request) {

    $request->validate([
        'username' => 'required|unique:user_accounts,username',
        'password' => 'required|confirmed|min:5',
    ]);

    UserAccount::create([
        'username' => $request->username,
        'password' => $request->password,
    ]);

    return redirect()->route('login')
        ->with('success', 'Akun berhasil dibuat. Silakan login.');

})->name('register.proses');


// ====================
// DASHBOARD
// ====================

Route::get('/dashboard', function () {

    if (!session('login')) {
        return redirect()->route('login');
    }

    $jumlahMahasiswa = Mahasiswa::count();

    return view('dashboard', compact('jumlahMahasiswa'));

})->name('dashboard');


// ====================
// LOGOUT
// ====================

Route::get('/logout', function () {

    session()->forget('login');
    session()->forget('username');

    return redirect()->route('login');

})->name('logout');


// ====================
// CRUD MAHASISWA
// ====================

Route::resource(
    'mahasiswa',
    App\Http\Controllers\MahasiswaController::class
);