<?php

use Eburkina\Contact\Http\Controllers\ContactController;
use Eburkina\Contact\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;
    



Route::get('contact', [PagesController::class, 'index'])->name('index');


//admin
Route::get('contact/list', [ContactController::class, 'index'])->name('caontact-list');
Route::get('contact/create', [ContactController::class, 'create'])->name('contact-create');
Route::post('contact/store', [ContactController::class, 'store'])->name('contact-store');
Route::get('contact/edit/{uuid}', [ContactController::class, 'edit'])->name('contact-edit');
Route::put('contact/update/{uuid}', [ContactController::class, 'update'])->name('contact-update');
Route::delete('contact/delete/{uuid}', [ContactController::class, 'delete'])->name('contact-delete');