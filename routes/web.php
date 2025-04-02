<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('welcome');
})->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');
});

Route::get('/results', function () {
    // Dati da visualizzare (ad esempio un array di risultati)
    $results = [
        'Page 1' => 'Content of page 1',
        'Page 2' => 'Content of page 2',
        'Page 3' => 'Content of page 3',
    ];

    // Passa i dati alla vista
    return view('results', compact(var_name: 'results'));
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
