<?php

use App\Models\Task;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home', [
        'name' => 'John Doe',
        'frameworks' => ['Laravel', 'Vue', 'Inertia'],
        'time' => now()->toTimeString(),
    ]);
})->name('home');

Route::get('/tasks', function () {
    return Inertia::render('Tasks', [
        'tasks' => Task::Paginate(10),
    ]);
});

Route::get('/projects', function () {
    // sleep(2);
    return Inertia::render('Projects', []);
});

Route::get('/orders', function () {
    return Inertia::render('Orders', []);
});

//Route::post('/post', function () {
//    dd('post request');
//});

Route::get('/welcome', function () {
    return Inertia::render('Welcome', []);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
