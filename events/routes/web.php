<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

route::get('/',[
    App\Http\Controllers\EventController::class,
    'index'
])->name('home');
route::get('/create',[
    App\Http\Controllers\EventController::class,
    'create'
])->name('create');
route::post('/create/save',[
    App\Http\Controllers\EventController::class,
    'createsave'
])->name('create.save');
route::get('/update/{id}',[
    App\Http\Controllers\EventController::class,
    'update'
])->name('update');
route::post('/update/{id}/save',[
    App\Http\Controllers\EventController::class,
    'updatesave'
])->name('update.save');
route::get('/delete/{id}',[
    App\Http\Controllers\EventController::class,
    'delete'
])->name('delete');
