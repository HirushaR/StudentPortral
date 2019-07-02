<?php
use App\User;
use App\question;
use App\answer;

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
Auth::routes();


Route::group(['middleware'=>['web']],function(){

    Route::get('/', function () {
        return view('home');
    })->name('home');
});
Route::get('/admin', function () {
        return view('admin');
    })->name('admin');
    Route::get('/profile', function () {
        return view('profile');
    })->name('profile');
    Route::get('/language', function () {
        return view('questions/language');
    })->name('language');
route::get('programing/{lang}','QuestionController@viewQuestion')->name('programing');
Route::post('Answer','AnswerController@create');
Route::get('/allAnswers','AnswerController@isCorrect');
Route::get('/allAnswers','AnswerController@getAllAnswers');

Route::post('/insert','QuestionController@create')->name('insert');
Route::get('admin','QuestionController@show');



