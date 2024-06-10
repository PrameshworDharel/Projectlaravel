<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', [Controller::class, 'home'])->name('home');
Route::get('/blog', [Controller::class, 'blog'])->name('blog');
Route::get('/services', [Controller::class, 'services'])->name('services');
Route::get('/photos', [Controller::class, 'photos'])->name('photos');
Route::get('/contact', [Controller::class, 'contact'])->name('contact');
Route::get('/login', [Controller::class, 'login'])->name('login');
Route::get('/signup', [Controller::class, 'signup'])->name('signup');
Route::get('/forgotpassword', [Controller::class, 'forgotpassword'])->name('forgotpassword');
Route::get('/dashboard', [Controller::class, 'dashboard'])->name('dashboard');
Route::get('/blogs', [BlogController::class, 'index'])->name('blogs');
Route::get('/createblogs', [Controller::class, 'createblogs'])->name('createblogs');
Route::get('/editblogs', [Controller::class, 'editblogs'])->name('editblogs');
Route::get('/moreblogs', [Controller::class, 'moreblogs'])->name('moreblogs');
Route::post('/blogs/upload', [BlogController::class, 'store'])->name('blogsupload');
Route::get('/blogs/edit/{id}', [BlogController::class, 'edit'])->name('editblogs');
Route::post('/blogs/update/{id}', [BlogController::class, 'update'])->name('updateblog');
Route::get('/blogs/delete/{id}', [BlogController::class, 'destroy'])->name('deleteblog');