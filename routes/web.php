<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;

// Route home
// Ví dụ về named route: đặt tên route bằng ->name('home')
// Gọi route qua tên: route('home') hoặc {{ route('home') }} trong Blade
Route::get('/', function () {
    return view('home');
})->name('home');

// Nhóm route product
Route::prefix('product')->group(function () {
    // Route danh sách sản phẩm
    Route::get('/', [ProductController::class, 'index'])->name('product.index');
    
    // Route form thêm mới sản phẩm
    Route::get('/add', [ProductController::class, 'add'])->name('product.add');
    
    // Route chi tiết sản phẩm với id mặc định
    Route::get('/{id}', [ProductController::class, 'show'])->where('id', '[a-zA-Z0-9]+')->name('product.show');
});

// Route sinh viên với giá trị mặc định
Route::get('/sinhvien/{name?}/{mssv?}', function ($name = 'Luong Xuan Hieu', $mssv = '123456') {
    // Nếu không có tham số, hiển thị thông tin sinh viên làm bài
    if (request()->route()->parameter('name') === null) {
        $name = 'Nguyen Minh Duc';
        $mssv = '0309767';
    }
    return view('sinhvien', ['name' => $name, 'mssv' => $mssv]);
})->name('sinhvien');

// Route bàn cờ vua
Route::get('/banco/{n}', function ($n) {
    return view('banco', ['n' => (int)$n]);
})->where('n', '[0-9]+')->name('banco');

// Route login
Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/login', [AuthController::class, 'checkLogin'])->name('auth.checkLogin');

// Route signup
Route::get('/signup', [AuthController::class, 'signup'])->name('auth.signup');
Route::post('/signup', [AuthController::class, 'checkSignup'])->name('auth.checkSignup');