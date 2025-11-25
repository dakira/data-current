<?php

use App\Http\Controllers\Logout;
use Illuminate\Support\Facades\Route;

Route::livewire('/', 'pages::dashboard')->name('home');

Route::livewire('initiatives/my', 'pages::dashboard')->name('initiatives.my');
Route::livewire('initiatives/create', 'pages::dashboard')->name('initiatives.create');
Route::livewire('initiatives', 'pages::dashboard')->name('initiatives.index');

Route::post('logout', Logout::class)->name('logout');
