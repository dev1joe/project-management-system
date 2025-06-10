<?php

use App\Models\Task;
use Illuminate\Support\Facades\Request;
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

    $tasks = Task::query()
        ->when(Request::input('search'), function ($query, $search) {
            $query->where('name', 'like', "%{$search}%");
        })
        ->paginate(10)
        ->withQueryString()
        ->through(fn ($task) => [
            'id' => $task->id,
            'name' => $task->name,
            'description' => $task->description,
            'priority' => $task->priority,
            'status' => $task->status,
        ]);

    return Inertia::render('Tasks', [
        'tasks' => $tasks,
        'numPages' => $tasks->lastPage(),
        'filters' => Request::only('search'),
    ]);
});

Route::get('/projects', function () {
    // sleep(2);
    return Inertia::render('Projects', []);
});

Route::get('/orders', function () {
    return Inertia::render('Orders', []);
});

Route::get('/test', function() {
    return Inertia::render('Sidebar', []);
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
