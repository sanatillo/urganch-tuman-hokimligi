<?php

use App\Http\Controllers\NewController;
use App\Http\Controllers\Pagecontroller;
use App\Http\Controllers\PostController;
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


Route::get('/Bosh sahifa', [Pagecontroller ::class, 'index'])->name('home');

Route::get('/', function(){return redirect('/Bosh sahifa');});

Route::get('Tuman hokimligi/tuman hokimligi apparati',function(){ //tuman hokimligi
    return ('tuman hokimligi apparati (jadval)');
})->name('apparati');

Route::get('Tuman hokimligi/Boshqaruv apparatining tuzilmasi',function(){
    return ('Boshqaruv apparatining tuzilmasi(rasm)');
});

Route::get('Tuman hokimligi/Qabul jadvali',function(){
    return ('Qabul jadvali(jadval)');
});

Route::get('Tuman hokimligi/Ishonch va yagona telefon raqamlari',function(){
    return ('Ishonch va yagona tel raqami(Htmlda)');
});

Route::get('Tuman hokimligi/Xorijiy va halqaro hamkorlik aloqalari',function(){
    return ('Halqaro hamkorlik aloqalari(matn va rasm ko\'rinishida)');
});

Route::get('Tuman hokimligi/Boshqa davlat organlari bilan o\'zaro Munasabatlari',function(){
    return ('(organlar bilan o\'zaro munosabatlar (matn ko\'rinishida)');
});

Route::get('Tuman hokimligi/Maxalliy Va Xalqaro BIttimlar, Shartnomalar',function(){
    return ('(file ko\'rinishida yuklab olish )');
});

Route::get('Tuman hokimligi/Kuni Tartibi, Ish Rejasi Va Yig\'ilish Masalalari',function(){////////////
    return('rasm tagida izohlar, rasmlar bir qatorda 3 ta ustunda joylashadi');
});

Route::get('Tuman hokimligi/Elektron Hukumat Doirasida Qilinayotgan Ishlar',function(){
    return ('rasm tagida izohlar, rasmlar bir qatorda 3 ta ustunda joylashadi');
});

Route::get('Tuman hokimligi/Xokimlik Ishtirokidagi Tadbirlar',function(){
    return ('rasm tagida izohlar, rasmlar bir qatorda 3 ta ustunda joylashadi');
});

Route::get('Tuman hokimligi/Bo\'sh ish o\'rinlari',function(){
    return ('rasm tagida izohlar, rasmlar bir qatorda 3 ta ustunda joylashadi');
});

Route::get('Tuman hokimligi/Manzil',function(){
    return ('google maps');
});

Route::resource('/yangiliklar', PostController::class);

Route::get('Tender Va E\'lonlar',function(){
    return ('rasm tagida izohlar, rasmlar bir qatorda 3 ta ustunda joylashadi');
});

Route::get('Tuman Xaqida Malumot', function(){
    return ('wikipediya tarzda malumotlar yoziladi');
});

Route::get('Tuman Tashkilotlari', function(){
    return ('nomi va u haqida izohi joylashgan bo\'ladi');
});

Route::get('Maxalla Fuqoralar Yig\'inlari', function(){
    return ('rasm va rasm ostida izoh bo\'ladi');
});

Route::get('Oliy Talim Muassaslari', function(){
    return ('Statik matn va rasm');
});

Route::get('Umumiy O\'rta Talim Maktablar', function(){
    return ('jadval ko\'rinishida izohlar bn bo\'ladi');
});

Route::get('Kasb-Talim Kollejlari', function(){
    return ('jadval ko\'rinishida izohlar bn bo\'ladi');
});