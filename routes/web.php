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
Route::get('/{lang}', function ($lang=null) {
    App::setLocale($lang);
    return view('home');
});
Route::get('/{lang}/home', function ($lang=null) {
    App::setLocale($lang);
    return view('home');
});
Route::get('/{lang}/userprofile', function ($lang=null) {
    App::setLocale($lang);
    return view('userprofile');
});

Route::any('/{lang}/admins','UsersController@indexAdmin');
Route::any('/{lang}/admins/new','UsersController@newuser');
Route::any('/{lang}/admins/{id}/edit','UsersController@edit');
Route::any('/{lang}/admins/{id}/update','UsersController@update');
Route::any('/{lang}/admins/{id}/delete','UsersController@delete');
Route::any('/{lang}/admins/save','UsersController@store');


Route::any('/{lang}/category','CategoriesController@indexCategory');
Route::get('/{lang}/category/editcategory','CategoriesController@editCategories');
Route::post('/{lang}/category/savesort','CategoriesController@savesortCategories');
Route::post('/{lang}/category/addcategory','CategoriesController@addCategories');
Route::get('/{lang}/category/delete','CategoriesController@deletecategory');
Route::get('/{lang}/category/viewAddCategory','CategoriesController@viewAddCategory');
Route::get('/{lang}/category/viewsort','CategoriesController@viewSort');
Route::any('/{lang}/category/{id}/vieweditcategory','CategoriesController@viewedit');

Route::any('/{lang}/levels','LevelsController@indexLevels');
Route::get('/{lang}/levels/viewAddLevel','LevelsController@viewAddLevel');
Route::post('/{lang}/levels/add','LevelsController@addLevels');
Route::get('/{lang}/levels/addlevels','LevelsController@addLevels');
Route::any('/{lang}/levels/{id}/vieweditlevels','LevelsController@viewedit');
Route::post('/{lang}/levels/editlevels','LevelsController@editlevels');
Route::get('/{lang}/levels/delete','LevelsController@deletelevels');

Route::any('/{lang}/schedule','ScheduleController@indexSchedule');

Route::post('/{lang}/schedule/saveschedule','ScheduleController@SaveSchedule');

Route::get('/{lang}/teachers', function ($lang=null) {
    App::setLocale($lang);
    return view('teachers.index');
});

Route::get('/{lang}/parents', function ($lang=null) {
    App::setLocale($lang);
    return view('parents.index');
});

Route::get('/{lang}/students', function ($lang=null) {
    App::setLocale($lang);
    return view('students.index');
});
Route::get('/{lang}/groups', function ($lang=null) {
    App::setLocale($lang);
    return view('groups.index');
});
Route::get('/{lang}/groups/add', function ($lang=null) {
    App::setLocale($lang);
    return view('groups.add');
});
Route::get('/{lang}/groups/edit', function ($lang=null) {
    App::setLocale($lang);
    return view('groups.edit');
});
Route::get('/{lang}/groups/sendmessage', function ($lang=null) {
    App::setLocale($lang);
    return view('groups.sendmessage');
});
Route::get('/{lang}/students/sendmessage', function ($lang=null) {
    App::setLocale($lang);
    return view('students.sendmessage');
});
Route::get('/{lang}/progress', function ($lang=null) {
    App::setLocale($lang);
    return view('progress.index');
});
Route::get('/{lang}/badges', function ($lang=null) {
    App::setLocale($lang);
    return view('badges.index');
});
Route::get('/{lang}/badges/add', function ($lang=null) {
    App::setLocale($lang);
    return view('badges.add');
});
Route::get('/{lang}/badges/edit', function ($lang=null) {
    App::setLocale($lang);
    return view('badges.edit');
});
Route::get('/{lang}/classes', function ($lang=null) {
    App::setLocale($lang);
    return view('classes.index');
});
Route::get('/{lang}/classes/add', function ($lang=null) {
    App::setLocale($lang);
    return view('classes.add');
});
Route::get('/{lang}/classes/edit', function ($lang=null) {
    App::setLocale($lang);
    return view('classes.edit');
});
Route::get('/{lang}/classes/sendmessage', function ($lang=null) {
    App::setLocale($lang);
    return view('classes.sendmessage');
});
Route::get('/{lang}/students/sendmessage', function ($lang=null) {
    App::setLocale($lang);
    return view('students.sendmessage');
});
Route::get('/{lang}/login/signin', function ($lang=null) {
    App::setLocale($lang);
    return view('login.signin');
});
Route::get('/{lang}/login/forgotpassword', function ($lang=null) {
    App::setLocale($lang);
    return view('login.forgotpassword');
});
Route::get('/{lang}/login/signup', function ($lang=null) {
    App::setLocale($lang);
    return view('login.signup');
});

Route::get('/{lang}/homework', function ($lang=null) {
    App::setLocale($lang);
    return view('homework.index');
});
Route::get('/{lang}/homework/add', function ($lang=null) {
    App::setLocale($lang);
    return view('homework.add');
});
Route::get('/{lang}/homework/edit', function ($lang=null) {
    App::setLocale($lang);
    return view('homework.edit');
});
Route::get('/{lang}/viewchat', function ($lang=null) {
    App::setLocale($lang);
    return view('viewchat');
});
Route::get('/{lang}/viewmessages', function ($lang=null) {
    App::setLocale($lang);
    return view('viewmessages');
});
Route::get('/{lang}/viewnotification', function ($lang=null) {
    App::setLocale($lang);
    return view('viewnotification');
});



// Localization
Route::get('/js/lang.js', function () {
    Cache::flush();
    $strings = Cache::rememberForever('lang.js', function () {
        $lang = config('app.locale');

        $files   = glob(resource_path('lang/' . $lang . '/*.php'));
        $strings = [];

        foreach ($files as $file) {
            $name           = basename($file, '.php');
            $strings[$name] = require $file;
        }

        return $strings;
    });

    header('Content-Type: text/javascript');
    echo('window.Lang = ' . json_encode($strings) . ';');
    exit();
})->name('assets.lang');

Route::any('/{lang}/teachers','TeachersController@index');
Route::any('/{lang}/teachers/new','TeachersController@newuser');
Route::any('/{lang}/teachers/{id}/edit','TeachersController@edit');
Route::any('/{lang}/teachers/{id}/update','TeachersController@update');
Route::any('/{lang}/teachers/{id}/delete','TeachersController@delete');
Route::any('/{lang}/teachers/save','TeachersController@store');

// student cotroller routes
Route::any('/{lang}/students','StudentController@index');
Route::any('/{lang}/students/new','StudentController@newuser');
Route::any('/{lang}/students/{id}/edit','StudentController@edit');
Route::any('/{lang}/students/{id}/update','StudentController@update');
Route::any('/{lang}/students/{id}/delete','StudentController@delete');
Route::any('/{lang}/students/save','StudentController@store');
Route::any('/{lang}/students/filter','StudentController@filter');


//Route::any('/{lang}/classes','ClassesController@index');
Route::any('/{lang}/admins/new','ClassesController@newuser');
Route::any('/{lang}/admins/{id}/edit','ClassesController@edit');
Route::any('/{lang}/admins/{id}/update','ClassesController@update');
Route::any('/{lang}/admins/{id}/delete','ClassesController@delete');
Route::any('/{lang}/admins/save','ClassesController@store');

Route::any('/{lang}/groups','GroupsController@index');
Route::any('/{lang}/groups/new','GroupsController@create');
Route::any('/{lang}/groups/save','GroupsController@store');
Route::any('/{lang}/groups/{id}/edit','GroupsController@edit');
Route::any('/{lang}/groups/update','GroupsController@update');
Route::any('/{lang}/groups/{id}/delete','GroupsController@delete');
