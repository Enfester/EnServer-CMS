<?php

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register web routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | contains the "web" middleware group. Now create something great!
  |
 */

use Illuminate\Http\Request;

// Отображение главной страницы
// Используем MainController функцию main
Route::get('/', 'MainController@main');

// Отображение полного описания сервера по id
// http://site/server/id_сервера
Route::get('server/{id}', 'MainController@server')->name('serverId');

// Просмотр профила игрока
// http://site/user/логин_игрока
Route::get('user/id/{id}', 'MainController@user')->name('user');

Route::get('user/{login}', 'MainController@userLoginToID');

// Страница загрузки лаунчер
Route::get('download', function () {
    return view('download')->with(["title" => "Скачать лаунчер"]);
})->name('download');

// Донат услуги
Route::get('donate', function () {
    return view('donate')->with(["title" => "Донат услуги"]);
})->name('donate');

// Рейтинг игроков
Route::get('rating', function () {
    return view('rating')->with(["title" => "Рейтинг игроков"]);
})->name('rating');

Route::get('referal/{login}', function ($login) {

    if (Auth::guest()) {
        Session::put('referal', $login);
        return redirect('/register');
    } else {

        return "error";
    }
})->name('referal');

// Устновка языка
Route::get('lang/{locale}', function ($locale) {
    if (in_array($locale, \Config::get('app.locales'))) {   # Проверяем, что у пользователя выбран доступный язык 
        Session::put('locale', $locale);                    # И устанавливаем его в сессии под именем locale
    }

    return redirect()->back();
})->name('lang');



Route::get('skins/skin/{login}', 'SkinController@showSkin')->name("showSkin");
Route::get('skins/cloak/{login}', 'SkinController@showCloak')->name("showCloak");

// Страницы доступны только авторизованным пользователям
Auth::routes();
Route::group(['prefix' => 'cabinet', 'middleware' => ['web', 'auth']], function() {
    Route::get('/', 'CabinetController@profile')->name('profile');
    Route::get('/skin', 'CabinetController@skin')->name('skin');
//Route::post('/skin', 'CabinetController@saveSkin')->name('skin');
    Route::get('/bonus', 'CabinetController@bonus')->name('bonus');
    Route::get('/donate', 'CabinetController@donate')->name('donate');
    Route::get('/settings', 'CabinetController@settings')->name('settingsProfile');
    Route::post('/settings', 'CabinetController@saveSettings')->name('saveSettings');
});

Route::group(['prefix' => 'admin', 'middleware' => ['web', 'auth', 'admin']], function() {
    Route::get('/', 'AdminController@main')->name('admin');
});


Route::get('support', 'CabinetController@supportShow')->middleware(['web', 'auth'])->name('support');
Route::get('support/{id}', 'CabinetController@supportId')->middleware(['web', 'auth'])->name('supportId');
Route::post('support', 'CabinetController@supportCrate')->middleware(['web', 'auth'])->name('support');










