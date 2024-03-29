<?php

use App\Http\Livewire\Lock;
use App\Http\Livewire\Index;
use App\Http\Livewire\Users;
use App\Http\Livewire\Err404;


// for admin panel
use App\Http\Livewire\Err500;
use App\Http\Livewire\Profile;
use App\Http\Livewire\Dashboard;
// use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\LoginExample;
use App\Http\Livewire\Transactions;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\ResetPassword;
use App\Http\Livewire\ForgotPassword;
use App\Http\Livewire\ProfileExample;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\BootstrapTables;
use App\Http\Livewire\RegisterExample;
use App\Http\Controllers\NewController;
use App\Http\Livewire\Components\Forms;
use App\Http\Controllers\Pagecontroller;
use App\Http\Controllers\PostController;
use App\Http\Livewire\Components\Modals;
use App\Http\Livewire\Components\Buttons;
use App\Http\Livewire\ResetPasswordExample;
use App\Http\Livewire\Components\Typography;
use App\Http\Livewire\ForgotPasswordExample;
use App\Http\Livewire\Components\Notifications;

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


Route::get('/Bosh sahifa', function(){
    return redirect('/home');
});

Route::get('/', function(){
    return redirect('/home');
});

Route::prefix('Tuman hokimligi')->group(function(){

    Route::get('/tuman hokimligi apparati',function(){ //tuman hokimligi
        return ('tuman hokimligi apparati (jadval)');
    })->name('apparati');
    
    Route::get('/Boshqaruv apparatining tuzilmasi',function(){
        return ('Boshqaruv apparatining tuzilmasi(rasm)');
    });
    
    Route::get('/Qabul jadvali',function(){
        return ('Qabul jadvali(jadval)');
    });
    
    Route::get('/Ishonch va yagona telefon raqamlari',function(){
        return ('Ishonch va yagona tel raqami(Htmlda)');
    });
    
    Route::get('/Xorijiy va halqaro hamkorlik aloqalari',function(){
        return ('Halqaro hamkorlik aloqalari(matn va rasm ko\'rinishida)');
    });
    
    Route::get('/Boshqa davlat organlari bilan o\'zaro Munasabatlari',function(){
        return ('(organlar bilan o\'zaro munosabatlar (matn ko\'rinishida)');
    });

    Route::get('/Maxalliy Va Xalqaro BIttimlar, Shartnomalar',function(){
        return ('(file ko\'rinishida yuklab olish )');
    });

    Route::get('/Kuni Tartibi, Ish Rejasi Va Yig\'ilish Masalalari',function(){////////////
        return ('rasm tagida izohlar, rasmlar bir qatorda 3 ta ustunda joylashadi');
    });

    Route::get('/Elektron Hukumat Doirasida Qilinayotgan Ishlar',function(){
        return ('rasm tagida izohlar, rasmlar bir qatorda 3 ta ustunda joylashadi');
    });

    Route::get('/Xokimlik Ishtirokidagi Tadbirlar',function(){
        return ('rasm tagida izohlar, rasmlar bir qatorda 3 ta ustunda joylashadi');
    });

    Route::get('/Bo\'sh ish o\'rinlari',function(){
        return ('rasm tagida izohlar, rasmlar bir qatorda 3 ta ustunda joylashadi');
    });

    Route::get('/Manzil',function(){
        return ('google maps');
    });
});
//next//  
Route::prefix('Tuman haqida')->group(function(){
    Route::resource('/yangiliklar', PostController::class);

    Route::get('/Tender Va E\'lonlar',function(){
        return ('rasm tagida izohlar, rasmlar bir qatorda 3 ta ustunda joylashadi');
    });

    Route::get('Tuman Haqida Malumot', function(){
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

    Route::get('statistikalar', function(){
        return ('rasm statik ko\'rinishda bo\'ladi');
    });

    Route::get('Ekologiya', function(){
        return ('rasm va rasm ostida izohi bilan');
    });
});
//naxt//
Route::prefix('Elektron xizmatlar')->group(function(){
    Route::get('Murojaatlar statistikasi', function(){
        return ('sxemaning rasmi va rasm pstida izoh');
    });

    Route::get('Ko\'p beriladigan savollarga javoblar', function(){
        return ('savol javoblari bilan birga boladi + belgisini bosganda javoblar chiqishi kerak');
    });

    Route::get('Fuqarolar murojaatlari', function(){
        return ('file izoh bilan file yuklab olish mumkin bo\'ladi');
    });

    Route::get('Notarial Harakatlar Uchun Davlat Boji Stavkalari', function(){
        return ('jadval ko\'rinishida izohlar bn bo\'ladi');
    });

    Route:: get('Mahalliy Davlat Hokimiyati Tarkibi', function(){
        return ('file izoh bilan file yuklab olish mumkin bo\'ladi');
    });

    Route::get('Xaj va Umra Ziyoratiga Borish Tartibi', function(){
        return ('matn va rasm ko\'rinishida');
    });

    Route::get('Biznesni Rejalashtirish va Boshqarish', function(){
        return ('matn va rasm ko\'rinishida');
    });

    Route::get('Tadbirkorlikni Litsenziyalash', function(){
        return ('file izoh bilan file yuklab olish mumkin bo\'ladi');
    });

    Route::get('Alkogolli Savdo Faoliyatini Litsenziyalash Tartibi', function(){
        return ('tegishli joyga yo\'naltiriladi');
    });

    Route::get('Ulgurji Savdo Faoliyatini Litsenziyalash', function(){
        return ('tegishli joyga yo\'naltiriladi');
    });

    Route::get('Davlat Xaridlarini Amalga Oshirish', function(){
        return ('tegishli joyga yo\'naltiriladi');
    });

    Route::get('Transport Xizmatlarini Tashkil Etish', function(){
        return ('tegishli joyga yo\'naltiriladi');
    });

    Route::get('Avtomobil Yoqilg\'isi Savdo Faoliyatini Litsenziyalash', function(){
        return ('tegishli joyga yo\'naltiriladi');
    });

    Route::get('Yer Munosabatlarini Tartibga Solish', function(){
        return ('tegishli joyga yo\'naltiriladi');
    });

    Route::get('Ochiq Malumotlar', function(){
        return ('rasm va rasm haqida izoh berilgan bo\'aldi');
    });
    });
Route::prefix('Meyoriy hujjatlar')->group(function(){
    Route::get('Prezident Farmon, Qarorlari', function(){
        return ('tegishli joyga yo\'naltiriladi');
    });

    Route::get('Qonunchilik Palatasi Qarorlari', function(){
        return ('tegishli joyga yo\'naltiriladi');
    });

    Route::get('Vazirlar Mahkamasi Qarorlari', function(){
        return ('tegishli joyga yo\'naltiriladi');
    });

    Route::get('Tuman Xokimi Qarorlari', function(){
        return ('file nomida farmoish sanasi va raqami ko\'rsatilgan bo\'ladi');
    });

    Route::get('Tuman Xokim Farmoyishlari', function(){
        return ('file nomida farmoish sanasi va raqami ko\'rsatilgan bo\'ladi');
    });

    Route::get('O\'z Kuchini Yo\'qotgan Me\'yoriy Hujjatlar', function(){
        return ('tegishli joyga yo\'naltiriladi');
    });

    Route::get('Tuman Xokimligi Ish Yuritish Yo\'riqnomasi', function(){
        return ('file izoh bilan va yuklab olish mumkin bo\'ladi');
    });

    Route::get('Rasmiy Maruzalar', function(){
        return('maruza mavzusi va maruza matni bo\'ladi');
    });

    Route::get('Ishlab Chiqilgan Chora Tadbirlar', function(){
        return ('rasm va rasm haqida izohlar bo\'aldi');
    });

    Route::get('Analitik Xisobot Va Tahlillar', function(){
       return(' file izohi va yuklab olish mumkin bo\'ladi.');
    });
});
Route::get('Deputatlar faoliyati', function(){
    return ('rasm va rasm haqida izohlar bo\'ladi');
});

Route::get('/home', function(){
    return view('home');
})->name('home');

Route::get('/news', function(){
    return view('news');
})->name('news');

Route::get('/advert', [Pagecontroller::class, 'advert'])->name('advert');

Route::get('/developedParty', [Pagecontroller::class, 'developedParty'])->name('developedParty');

Route::get('/neighbourhood', [Pagecontroller::class, 'neighbourhood'])->name('neighbourhood');

Route::get('/statistical', [Pagecontroller::class, 'statistical'])->name('statistical');

Route::get('/portfolioDetails', [Pagecontroller::class, 'portfolioDetails'])->name('portfolioDetails');

Route::get('/relationships', [Pagecontroller::class, 'relationships'])->name('relationships');

Route::get('/apparat', [Pagecontroller::class, 'apparat'])->name('apparat');

/////////// @Admin panel


// Route::get('/adminpanellogin', Login::class)->name('login');

// Route::get('/forgot-password', ForgotPassword::class)->name('forgot-password');

// Route::get('/reset-password/{id}', ResetPassword::class)->name('reset-password')->middleware('signed');

// Route::get('/404', Err404::class)->name('404');
// Route::get('/500', Err500::class)->name('500');
// Route::get('/upgrade-to-pro', UpgradeToPro::class)->name('upgrade-to-pro');

// Route::middleware('auth')->group(function () {
    // Route::get('/profile', Profile::class)->name('profile');
//     Route::get('/profile-example', ProfileExample::class)->name('profile-example');
//     Route::get('/users', Users::class)->name('users');
//     Route::get('/login-example', LoginExample::class)->name('login-example');
//     Route::get('/register-example', RegisterExample::class)->name('register-example');
//     Route::get('/forgot-password-example', ForgotPasswordExample::class)->name('forgot-password-example');
//     Route::get('/reset-password-example', ResetPasswordExample::class)->name('reset-password-example');
//     Route::get('/dashboard', Dashboard::class)->name('dashboard');
//     Route::get('/transactions', Transactions::class)->name('transactions');
//     Route::get('/bootstrap-tables', BootstrapTables::class)->name('bootstrap-tables');
//     Route::get('/lock', Lock::class)->name('lock');
//     Route::get('/buttons', Buttons::class)->name('buttons');
//     Route::get('/notifications', Notifications::class)->name('notifications');
//     Route::get('/forms', Forms::class)->name('forms');
//     Route::get('/modals', Modals::class)->name('modals');
//     Route::get('/typography', Typography::class)->name('typography');
// });
