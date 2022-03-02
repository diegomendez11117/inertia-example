<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Home');
});

Route::get('/about', function () {
    return Inertia::render('About');
});

Route::get('/contact', function () {
    return Inertia::render('Contact');
});

Route::get('/favorites', function () {
    return Inertia::render('Favorites');
});

Route::get('/cart', function () {
    return Inertia::render('Cart');
});

Route::get('/checkout', function () {
    return Inertia::render('CheckOut');
});

Route::get('/customize', function () {
    return Inertia::render('CustomizeItem');
});

Route::get('/menu', function () {
    return Inertia::render('Menu');
});

Route::get('/myorders', function () {
    return Inertia::render('MyOrders');
});

Route::get('/profile', function () {
    return Inertia::render('Profile');
});

Route::get('/notifications', function () {
    return Inertia::render('Notifications');
});


Route::post('/logout', function () {
    dd(request('variable'));
});
