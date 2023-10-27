<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;
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

Route::get('/', function () {
    return view('index');
});

Route::get('about-us', function () {
    return view('about-us');
});


Route::get('products', function () {
    return view('products');
});

Route::get('/contact', [ContactController::class,'index'])->name('contact.index');


Route::post('/contact', [ContactController::class,'store'])->name('contact.store');



Route::get('/register', [RegisterController::class,'show']);


Route::post('/register', [RegisterController::class,'register']);



Route::get('/login', [LoginController::class,'show']);


Route::post('/login', [LoginController::class,'login']);


Route::get('/home', [HomeController::class,'index']); // Para cuando el Login es satisfactorio

Route::get('/logout', [LogoutController::class,'logout']); // Cerrar sesión







// Route::get('contactanos', function () {
//     Mail::to('agus.svp@gmail.com')->send(new ContactanosMailable);
//     return "Mensaje enviado";
// })->name('contactanos');

