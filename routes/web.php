<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Http\Controllers\HomepageController;

// // Halaman utama
// Route::get('/', function () {
//     return view('web.homepage');
// });

// // Halaman home dengan link navigasi
// Route::get('/home', function () {
//     return "
//     <div style='text-align: center;'>
//         <h2>Selamat Datang di chikenstore</h2>
//         <br><br>
//         <a href='/Kategori'>Kategori</a>
//         <br><br>
//         <a href='/Produk-Terlaris'>Produk Terlaris</a>
//         <br><br>
//         <a href='/Promo'>Promo</a>
//         <br><br>
//         <a href='/Keranjang'>Keranjang Belanja</a>
//         <br><br>
//         <a href='/Checkout'>Checkout</a>
//     </div>
//     ";
// });

// // Halaman kategori
// Route::get('/Kategori', function () {
//     return 'Ini adalah halaman kategori produk';
// });

// // Halaman produk terlaris
// Route::get('/Produk-Terlaris', function () {
//     return 'Ini adalah halaman produk terlaris';
// });

// // Halaman promo
// Route::get('/Promo', function () {
//     return 'Ini adalah halaman promo';
// });

// // Halaman keranjang belanja
// Route::get('/Keranjang', function () {
//     return 'Ini adalah halaman keranjang belanja';
// });

// // Halaman checkout (memerlukan login)
// Route::middleware(['auth'])->group(function () {
//     Route::get('/Checkout', function () {
//         return 'Ini adalah halaman checkout';
//     });
// });

// // Dashboard dengan middleware auth dan verified
// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

// // Group middleware untuk halaman settings
// Route::middleware(['auth'])->group(function () {
//     Route::redirect('settings', 'settings/profile');

//     Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
//     Volt::route('settings/password', 'settings.password')->name('settings.password');
//     Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
// });

// require _DIR_.'/auth.php';

// Route::get('/', function(){
//     $title = "Homepage - ai_store";
//     return view('web.homepage',['title'=>$title]);
Route::get('/',[HomepageController::class,'index']);

//Kode Baru
Route::get('product',[HomepageController::class,'products']);



Route::get('products', function(){
    $title = "product - ai_store";
    return view('web.homepage',['title'=>$title]);
    // return "halaman product";
   });
Route::get('product/{slug}', function($slug){
    return "halaman single product - ".$slug;
   });
Route::get('categories', function(){
    return "halaman categories product";
   });
Route::get('category/{slug}', function($slug){
    return "halaman single category - ".$slug;
   });
Route::get('cart', function(){
    return "halaman cart";
   });
Route::get('checkout', function(){
    return "halaman checkout";
   });

