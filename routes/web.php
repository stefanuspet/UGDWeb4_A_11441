<?php

use Illuminate\Support\Facades\Route;

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

function initData()
{
    return ([
        'nama' => "Stepanus Petra Pambudi",
        'npm' => "210711441",
        'alamat' => "Babarsari",
        'email' => "210711441@students.uajy.ac.id",
        'telepon' => "082138566111",
        'hobi' => "Membaca",
        'fakultas' => "Fakultas Teknologi Industri",
        'jurusan' => "Teknik Informatika",
    ]);
}

Route::get('/', function () {
    return view('home');
});

Route::get('/profile', function () {
    return view('profile', initData());
});

Route::get('/form', function () {
    return view('form', initData());
});
