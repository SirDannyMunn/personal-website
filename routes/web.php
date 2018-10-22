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

Route::get('/', function () {
    return view('welcome');
});

Route::get('blog', 'BlogController@index');
Route::get('post/{slug}', 'BlogController@show');

Route::get('hire-me', function () {
    return 'Coming Soon!';
});

Route::post('message', function(\Illuminate\Http\Request $request) {

    \Illuminate\Support\Facades\Log::info(request());

    try {
        \Illuminate\Support\Facades\Mail::to('dannymunn1995@gmail.com')
                                      ->send(new \App\Mail\Contact(request()));
        return response('success', 201);
    } catch (Exception $e) {
        return response('error', 500);
    }

    return response(request(), 201);
});