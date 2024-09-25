<?php
use App\Http\Controllers\Admin\MainController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('app');  // Шаблон с Vue
});

// Добавьте этот маршрут после других
Route::get('/{any}', function () {
    return view('app'); // Замените 'app' на имя вашего Blade-шаблона, если необходимо
})->where('any', '.*');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
