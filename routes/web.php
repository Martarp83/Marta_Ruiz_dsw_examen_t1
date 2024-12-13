<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessagesController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/messages', function () {
    $messages = \App\Models\Message::all();
    return view('messages', ['messages' => $messages]);
});

Route::get('/index', [MessagesController::class, 'index'])->name('users.index');

Route::delete('/delete/{id}', [MessagesController::class, 'delete'])->name('delete');
